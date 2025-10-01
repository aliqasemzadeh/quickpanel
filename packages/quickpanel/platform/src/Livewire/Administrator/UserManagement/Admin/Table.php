<?php

namespace QuickPanel\Platform\Livewire\Administrator\UserManagement\Admin;

use QuickPanel\Platform\Models\Admin;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Attributes\On;
use Masmerise\Toaster\Toaster;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\WithExport;

final class Table extends PowerGridComponent
{
    use WithExport;
    public string $tableName = 'administrator.user-management.admin.table';

    public function header(): array
    {
        return [
            Button::add('create-admin')
                ->slot(__('platform::common.create_admin'))
                ->class('text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800')
                ->dispatch('modal-open', ['component' => 'platform.administrator.user-management.admin.create']),
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
        return Admin::query();
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
            ->add('created_at_formatted', fn (Admin $model) => Carbon::parse($model->created_at)->format('d/m/Y H:i:s'));
    }

    public function columns(): array
    {
        return [
            Column::make(__('platform::common.id'), 'id'),
            Column::make(__('platform::common.name'), 'name')
                ->sortable()
                ->searchable(),

            Column::make(__('platform::common.email'), 'email')
                ->sortable()
                ->searchable(),

            Column::make(__('platform::common.created_at'), 'created_at_formatted', 'created_at')
                ->sortable(),

            Column::action(__('platform::common.action'))
        ];
    }

    public function filters(): array
    {
        return [
            Filter::datetimepicker('created_at'),
        ];
    }

    #[On('administrator.user-management.admin.table:delete-admin')]
    public function deleteAdmin(int $adminId): void
    {
        if ($adminId === auth()->id()) {
            // Avoid deleting yourself; optional safety
            return;
        }

        if ($admin = Admin::find($adminId)) {
            $admin->delete();
            Toaster::success( __('platform::common.user_deleted'));
        }

        // Refresh table after delete
        $this->dispatch('pg:eventRefresh-administrator.user-management.admin.table');
    }

    public function actions(Admin $row): array
    {
        return [
            Button::add('edit')
                ->slot(__('platform::common.edit'))
                ->id()
                ->class('px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800')
                ->dispatch('modal-open', ['component' => 'administrator.user-management.admin.edit', 'props' => ['adminId' => $row->id]]),

            // Added: Roles button with extra-small styling
            Button::add('roles')
                ->slot(__('platform::common.roles'))
                ->class('px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-purple-700 rounded-lg hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800')
                ->dispatch('modal-open', ['component' => 'platform.administrator.user-management.admin.roles', 'props' => ['adminId' => $row->id]]),

            // Added: Permissions button with extra-small styling
            Button::add('permissions')
                ->slot(__('platform::common.permissions'))
                ->class('px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-teal-700 rounded-lg hover:bg-teal-800 focus:ring-4 focus:outline-none focus:ring-teal-300 dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-teal-800')
                ->dispatch('modal-open', ['component' => 'platform.administrator.user-management.admin.permissions', 'props' => ['adminId' => $row->id]]),

            Button::add('delete')
                ->slot(__('platform::common.delete'))
                ->id()
                ->class('px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800')
                ->confirm(__('platform::common.are_you_sure'))
                ->dispatch('administrator.user-management.admin.table:delete-admin', ['adminId' => $row->id]),

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
