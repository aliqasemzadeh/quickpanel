<?php

namespace App\Livewire\Admin\UserManagement\User;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Attributes\On;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;

final class Table extends PowerGridComponent
{
    public string $tableName = 'admin.user-management.user.table';

    public function header(): array
    {
        return [
            Button::add('create-user')
                ->slot(__('quickpanel.create_user'))
                ->class('text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800')
                ->dispatch('modal-open', ['component' => 'admin.user-management.user.create']),
        ];
    }

    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            PowerGrid::header()
                ->showSearchInput(),
            PowerGrid::footer()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return User::query();
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('name')
            ->add('email')
            ->add('created_at_formatted', fn (User $model) => Carbon::parse($model->created_at)->format('d/m/Y H:i:s'));
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),
            Column::make('Name', 'name')
                ->sortable()
                ->searchable(),

            Column::make('Email', 'email')
                ->sortable()
                ->searchable(),

            Column::make('Created at', 'created_at_formatted', 'created_at')
                ->sortable(),

            Column::action('Action')
        ];
    }

    public function filters(): array
    {
        return [
            Filter::datetimepicker('created_at'),
        ];
    }

    #[On('users:refresh')]
    public function refreshTable(): void
    {
        // Trigger Livewire to re-render
        $this->dispatch('$refresh');
    }

    #[On('delete-user')]
    public function deleteUser(int $rowId): void
    {
        if ($rowId === auth()->id()) {
            // Avoid deleting yourself; optional safety
            return;
        }

        if ($user = User::find($rowId)) {
            $user->delete();
            session()->flash('success', __('quickpanel.logged_out'));
        }

        // Refresh table after delete
        $this->dispatch('$refresh');
    }

    public function actions(User $row): array
    {
        return [
            Button::add('edit')
                ->slot(__('Edit'))
                ->id()
                ->class('pg-btn-white dark:ring-pg-primary-600 dark:border-pg-primary-600 dark:hover:bg-pg-primary-700 dark:ring-offset-pg-primary-800 dark:text-pg-primary-300 dark:bg-pg-primary-700')
                ->dispatch('modal-open', ['component' => 'admin.user-management.user.edit', 'props' => ['userId' => $row->id]]),

            Button::add('delete')
                ->slot(__('Delete'))
                ->id()
                ->class('text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-red-500')
                ->attributes([
                    'onclick' => "if(!confirm('" . __('Are you sure you want to delete this user?') . "')){ event.stopImmediatePropagation(); event.preventDefault(); }",
                ])
                ->dispatch('delete-user', ['rowId' => $row->id]),
        ];
    }

    /*
    public function actionRules($row): array
    {
       return [
            // Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($row) => $row->id === 1)
                ->hide(),
        ];
    }
    */
}
