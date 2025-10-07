<?php

return [
    'categories' => [
        'e-commerce' => [
            'id' => 'e-commerce',
            'name' => 'E-Commerce',
            'name_fa' => 'تجارت الکترونیک',
            'image' => 'https://www.coinsbee.com/images/categories/e-commerce.png',
            'description' => 'Online shopping and e-commerce platforms',
            'products' => [
                'amazon-gift-cards' => [
                    'id' => 'amazon-gift-cards',
                    'name' => 'Amazon Gift Cards',
                    'name_fa' => 'کارت هدیه آمازون',
                    'image' => 'https://www.coinsbee.com/images/products/amazon-gift-card.png',
                    'description' => 'Digital gift cards for Amazon marketplace',
                    'price_range' => '$10 - $500',
                    'supported_crypto' => ['BTC', 'ETH', 'LTC', 'BCH']
                ],
                'ebay-gift-cards' => [
                    'id' => 'ebay-gift-cards',
                    'name' => 'eBay Gift Cards',
                    'name_fa' => 'کارت هدیه ای بی',
                    'image' => 'https://www.coinsbee.com/images/products/ebay-gift-card.png',
                    'description' => 'Digital gift cards for eBay marketplace',
                    'price_range' => '$10 - $200',
                    'supported_crypto' => ['BTC', 'ETH', 'LTC']
                ],
                'walmart-gift-cards' => [
                    'id' => 'walmart-gift-cards',
                    'name' => 'Walmart Gift Cards',
                    'name_fa' => 'کارت هدیه والمارت',
                    'image' => 'https://www.coinsbee.com/images/products/walmart-gift-card.png',
                    'description' => 'Digital gift cards for Walmart stores',
                    'price_range' => '$10 - $100',
                    'supported_crypto' => ['BTC', 'ETH', 'LTC', 'BCH']
                ]
            ]
        ],
        'games' => [
            'id' => 'games',
            'name' => 'Games',
            'name_fa' => 'بازی ها',
            'image' => 'https://www.coinsbee.com/images/categories/games.png',
            'description' => 'Gaming platforms and digital games',
            'products' => [
                'steam-gift-cards' => [
                    'id' => 'steam-gift-cards',
                    'name' => 'Steam Gift Cards',
                    'name_fa' => 'کارت هدیه استیم',
                    'image' => 'https://www.coinsbee.com/images/products/steam-gift-card.png',
                    'description' => 'Digital gift cards for Steam gaming platform',
                    'price_range' => '$5 - $100',
                    'supported_crypto' => ['BTC', 'ETH', 'LTC', 'BCH']
                ],
                'playstation-store' => [
                    'id' => 'playstation-store',
                    'name' => 'PlayStation Store Cards',
                    'name_fa' => 'کارت پلی استیشن استور',
                    'image' => 'https://www.coinsbee.com/images/products/playstation-store.png',
                    'description' => 'Digital gift cards for PlayStation Store',
                    'price_range' => '$10 - $100',
                    'supported_crypto' => ['BTC', 'ETH', 'LTC']
                ],
                'xbox-live' => [
                    'id' => 'xbox-live',
                    'name' => 'Xbox Live Gift Cards',
                    'name_fa' => 'کارت هدیه ایکس باکس لایو',
                    'image' => 'https://www.coinsbee.com/images/products/xbox-live.png',
                    'description' => 'Digital gift cards for Xbox Live',
                    'price_range' => '$10 - $100',
                    'supported_crypto' => ['BTC', 'ETH', 'LTC', 'BCH']
                ],
                'nintendo-eshop' => [
                    'id' => 'nintendo-eshop',
                    'name' => 'Nintendo eShop Cards',
                    'name_fa' => 'کارت نینتندو ای شاپ',
                    'image' => 'https://www.coinsbee.com/images/products/nintendo-eshop.png',
                    'description' => 'Digital gift cards for Nintendo eShop',
                    'price_range' => '$10 - $50',
                    'supported_crypto' => ['BTC', 'ETH', 'LTC']
                ]
            ]
        ],
        'payment-cards' => [
            'id' => 'payment-cards',
            'name' => 'Payment Cards',
            'name_fa' => 'کارت های پرداخت',
            'image' => 'https://www.coinsbee.com/images/categories/payment-cards.png',
            'description' => 'Prepaid payment cards and vouchers',
            'products' => [
                'visa-gift-cards' => [
                    'id' => 'visa-gift-cards',
                    'name' => 'Visa Gift Cards',
                    'name_fa' => 'کارت هدیه ویزا',
                    'image' => 'https://www.coinsbee.com/images/products/visa-gift-card.png',
                    'description' => 'Prepaid Visa gift cards',
                    'price_range' => '$25 - $500',
                    'supported_crypto' => ['BTC', 'ETH', 'LTC', 'BCH']
                ],
                'mastercard-gift-cards' => [
                    'id' => 'mastercard-gift-cards',
                    'name' => 'Mastercard Gift Cards',
                    'name_fa' => 'کارت هدیه مسترکارت',
                    'image' => 'https://www.coinsbee.com/images/products/mastercard-gift-card.png',
                    'description' => 'Prepaid Mastercard gift cards',
                    'price_range' => '$25 - $500',
                    'supported_crypto' => ['BTC', 'ETH', 'LTC', 'BCH']
                ]
            ]
        ],
        'mobile-phone-credit' => [
            'id' => 'mobile-phone-credit',
            'name' => 'Mobile Phone Credit',
            'name_fa' => 'اعتبار تلفن همراه',
            'image' => 'https://www.coinsbee.com/images/categories/mobile-phone-credit.png',
            'description' => 'Mobile phone top-ups and credit',
            'products' => [
                'verizon-wireless' => [
                    'id' => 'verizon-wireless',
                    'name' => 'Verizon Wireless Top-up',
                    'name_fa' => 'شارژ ورایزون وایرلس',
                    'image' => 'https://www.coinsbee.com/images/products/verizon-wireless.png',
                    'description' => 'Mobile top-up for Verizon Wireless',
                    'price_range' => '$10 - $100',
                    'supported_crypto' => ['BTC', 'ETH', 'LTC']
                ],
                'att-mobile' => [
                    'id' => 'att-mobile',
                    'name' => 'AT&T Mobile Top-up',
                    'name_fa' => 'شارژ ای تی اند تی موبایل',
                    'image' => 'https://www.coinsbee.com/images/products/att-mobile.png',
                    'description' => 'Mobile top-up for AT&T',
                    'price_range' => '$10 - $100',
                    'supported_crypto' => ['BTC', 'ETH', 'LTC', 'BCH']
                ],
                'tmobile' => [
                    'id' => 'tmobile',
                    'name' => 'T-Mobile Top-up',
                    'name_fa' => 'شارژ تی موبایل',
                    'image' => 'https://www.coinsbee.com/images/products/tmobile.png',
                    'description' => 'Mobile top-up for T-Mobile',
                    'price_range' => '$10 - $100',
                    'supported_crypto' => ['BTC', 'ETH', 'LTC']
                ]
            ]
        ],
        'travel-experiences' => [
            'id' => 'travel-experiences',
            'name' => 'Travel & Experiences',
            'name_fa' => 'سفر و تجربیات',
            'image' => 'https://www.coinsbee.com/images/categories/travel-experiences.png',
            'description' => 'Travel bookings and experience vouchers',
            'products' => [
                'booking-com' => [
                    'id' => 'booking-com',
                    'name' => 'Booking.com Gift Cards',
                    'name_fa' => 'کارت هدیه بوکینگ دات کام',
                    'image' => 'https://www.coinsbee.com/images/products/booking-com.png',
                    'description' => 'Gift cards for hotel and travel bookings',
                    'price_range' => '$25 - $500',
                    'supported_crypto' => ['BTC', 'ETH', 'LTC', 'BCH']
                ],
                'airbnb' => [
                    'id' => 'airbnb',
                    'name' => 'Airbnb Gift Cards',
                    'name_fa' => 'کارت هدیه ایر بی ان بی',
                    'image' => 'https://www.coinsbee.com/images/products/airbnb.png',
                    'description' => 'Gift cards for Airbnb accommodations',
                    'price_range' => '$25 - $500',
                    'supported_crypto' => ['BTC', 'ETH', 'LTC']
                ],
                'uber-gift-cards' => [
                    'id' => 'uber-gift-cards',
                    'name' => 'Uber Gift Cards',
                    'name_fa' => 'کارت هدیه اوبر',
                    'image' => 'https://www.coinsbee.com/images/products/uber-gift-card.png',
                    'description' => 'Gift cards for Uber rides and food delivery',
                    'price_range' => '$10 - $100',
                    'supported_crypto' => ['BTC', 'ETH', 'LTC', 'BCH']
                ]
            ]
        ],
        'entertainment' => [
            'id' => 'entertainment',
            'name' => 'Entertainment',
            'name_fa' => 'سرگرمی',
            'image' => 'https://www.coinsbee.com/images/categories/entertainment.png',
            'description' => 'Entertainment and streaming services',
            'products' => [
                'netflix-gift-cards' => [
                    'id' => 'netflix-gift-cards',
                    'name' => 'Netflix Gift Cards',
                    'name_fa' => 'کارت هدیه نتفلیکس',
                    'image' => 'https://www.coinsbee.com/images/products/netflix-gift-card.png',
                    'description' => 'Gift cards for Netflix streaming service',
                    'price_range' => '$15 - $100',
                    'supported_crypto' => ['BTC', 'ETH', 'LTC', 'BCH']
                ],
                'spotify-gift-cards' => [
                    'id' => 'spotify-gift-cards',
                    'name' => 'Spotify Gift Cards',
                    'name_fa' => 'کارت هدیه اسپاتیفای',
                    'image' => 'https://www.coinsbee.com/images/products/spotify-gift-card.png',
                    'description' => 'Gift cards for Spotify Premium',
                    'price_range' => '$10 - $50',
                    'supported_crypto' => ['BTC', 'ETH', 'LTC']
                ],
                'disney-plus' => [
                    'id' => 'disney-plus',
                    'name' => 'Disney+ Gift Cards',
                    'name_fa' => 'کارت هدیه دیزنی پلاس',
                    'image' => 'https://www.coinsbee.com/images/products/disney-plus.png',
                    'description' => 'Gift cards for Disney+ streaming',
                    'price_range' => '$10 - $100',
                    'supported_crypto' => ['BTC', 'ETH', 'LTC', 'BCH']
                ],
                'hulu-gift-cards' => [
                    'id' => 'hulu-gift-cards',
                    'name' => 'Hulu Gift Cards',
                    'name_fa' => 'کارت هدیه هولو',
                    'image' => 'https://www.coinsbee.com/images/products/hulu-gift-card.png',
                    'description' => 'Gift cards for Hulu streaming service',
                    'price_range' => '$10 - $100',
                    'supported_crypto' => ['BTC', 'ETH', 'LTC']
                ]
            ]
        ],
        'fashion-lifestyle' => [
            'id' => 'fashion-lifestyle',
            'name' => 'Fashion & Lifestyle',
            'name_fa' => 'مد و سبک زندگی',
            'image' => 'https://www.coinsbee.com/images/categories/fashion-lifestyle.png',
            'description' => 'Fashion and lifestyle brands',
            'products' => [
                'nike-gift-cards' => [
                    'id' => 'nike-gift-cards',
                    'name' => 'Nike Gift Cards',
                    'name_fa' => 'کارت هدیه نایکی',
                    'image' => 'https://www.coinsbee.com/images/products/nike-gift-card.png',
                    'description' => 'Gift cards for Nike products',
                    'price_range' => '$25 - $200',
                    'supported_crypto' => ['BTC', 'ETH', 'LTC', 'BCH']
                ],
                'adidas-gift-cards' => [
                    'id' => 'adidas-gift-cards',
                    'name' => 'Adidas Gift Cards',
                    'name_fa' => 'کارت هدیه آدیداس',
                    'image' => 'https://www.coinsbee.com/images/products/adidas-gift-card.png',
                    'description' => 'Gift cards for Adidas products',
                    'price_range' => '$25 - $200',
                    'supported_crypto' => ['BTC', 'ETH', 'LTC']
                ],
                'apple-store' => [
                    'id' => 'apple-store',
                    'name' => 'Apple Store Gift Cards',
                    'name_fa' => 'کارت هدیه اپل استور',
                    'image' => 'https://www.coinsbee.com/images/products/apple-store.png',
                    'description' => 'Gift cards for Apple products and services',
                    'price_range' => '$25 - $500',
                    'supported_crypto' => ['BTC', 'ETH', 'LTC', 'BCH']
                ]
            ]
        ],
        'foods-restaurants' => [
            'id' => 'foods-restaurants',
            'name' => 'Foods & Restaurants',
            'name_fa' => 'غذا و رستوران',
            'image' => 'https://www.coinsbee.com/images/categories/foods-restaurants.png',
            'description' => 'Food delivery and restaurant vouchers',
            'products' => [
                'doordash-gift-cards' => [
                    'id' => 'doordash-gift-cards',
                    'name' => 'DoorDash Gift Cards',
                    'name_fa' => 'کارت هدیه در دش',
                    'image' => 'https://www.coinsbee.com/images/products/doordash-gift-card.png',
                    'description' => 'Gift cards for DoorDash food delivery',
                    'price_range' => '$10 - $100',
                    'supported_crypto' => ['BTC', 'ETH', 'LTC', 'BCH']
                ],
                'grubhub-gift-cards' => [
                    'id' => 'grubhub-gift-cards',
                    'name' => 'Grubhub Gift Cards',
                    'name_fa' => 'کارت هدیه گراب هاب',
                    'image' => 'https://www.coinsbee.com/images/products/grubhub-gift-card.png',
                    'description' => 'Gift cards for Grubhub food delivery',
                    'price_range' => '$10 - $100',
                    'supported_crypto' => ['BTC', 'ETH', 'LTC']
                ],
                'starbucks-gift-cards' => [
                    'id' => 'starbucks-gift-cards',
                    'name' => 'Starbucks Gift Cards',
                    'name_fa' => 'کارت هدیه استارباکس',
                    'image' => 'https://www.coinsbee.com/images/products/starbucks-gift-card.png',
                    'description' => 'Gift cards for Starbucks coffee',
                    'price_range' => '$5 - $100',
                    'supported_crypto' => ['BTC', 'ETH', 'LTC', 'BCH']
                ]
            ]
        ],
        'electronics' => [
            'id' => 'electronics',
            'name' => 'Electronics',
            'name_fa' => 'الکترونیک',
            'image' => 'https://www.coinsbee.com/images/categories/electronics.png',
            'description' => 'Electronics and technology products',
            'products' => [
                'best-buy-gift-cards' => [
                    'id' => 'best-buy-gift-cards',
                    'name' => 'Best Buy Gift Cards',
                    'name_fa' => 'کارت هدیه بست بای',
                    'image' => 'https://www.coinsbee.com/images/products/best-buy-gift-card.png',
                    'description' => 'Gift cards for Best Buy electronics',
                    'price_range' => '$25 - $500',
                    'supported_crypto' => ['BTC', 'ETH', 'LTC', 'BCH']
                ],
                'newegg-gift-cards' => [
                    'id' => 'newegg-gift-cards',
                    'name' => 'Newegg Gift Cards',
                    'name_fa' => 'کارت هدیه نیو ایگ',
                    'image' => 'https://www.coinsbee.com/images/products/newegg-gift-card.png',
                    'description' => 'Gift cards for Newegg electronics',
                    'price_range' => '$25 - $500',
                    'supported_crypto' => ['BTC', 'ETH', 'LTC']
                ]
            ]
        ],
        'home-garden' => [
            'id' => 'home-garden',
            'name' => 'Home & Garden',
            'name_fa' => 'خانه و باغ',
            'image' => 'https://www.coinsbee.com/images/categories/home-garden.png',
            'description' => 'Home improvement and garden supplies',
            'products' => [
                'home-depot-gift-cards' => [
                    'id' => 'home-depot-gift-cards',
                    'name' => 'Home Depot Gift Cards',
                    'name_fa' => 'کارت هدیه هوم دیپو',
                    'image' => 'https://www.coinsbee.com/images/products/home-depot-gift-card.png',
                    'description' => 'Gift cards for Home Depot',
                    'price_range' => '$25 - $500',
                    'supported_crypto' => ['BTC', 'ETH', 'LTC', 'BCH']
                ],
                'lowes-gift-cards' => [
                    'id' => 'lowes-gift-cards',
                    'name' => 'Lowe\'s Gift Cards',
                    'name_fa' => 'کارت هدیه لوز',
                    'image' => 'https://www.coinsbee.com/images/products/lowes-gift-card.png',
                    'description' => 'Gift cards for Lowe\'s home improvement',
                    'price_range' => '$25 - $500',
                    'supported_crypto' => ['BTC', 'ETH', 'LTC']
                ]
            ]
        ],
        'crypto' => [
            'id' => 'crypto',
            'name' => 'Crypto',
            'name_fa' => 'کریپتو',
            'image' => 'https://www.coinsbee.com/images/categories/crypto.png',
            'description' => 'Cryptocurrency related products and services',
            'products' => [
                'crypto-exchange-vouchers' => [
                    'id' => 'crypto-exchange-vouchers',
                    'name' => 'Crypto Exchange Vouchers',
                    'name_fa' => 'کوپن صرافی کریپتو',
                    'image' => 'https://www.coinsbee.com/images/products/crypto-exchange.png',
                    'description' => 'Vouchers for cryptocurrency exchanges',
                    'price_range' => '$25 - $1000',
                    'supported_crypto' => ['BTC', 'ETH', 'LTC', 'BCH']
                ],
                'crypto-wallet-cards' => [
                    'id' => 'crypto-wallet-cards',
                    'name' => 'Crypto Wallet Cards',
                    'name_fa' => 'کارت کیف پول کریپتو',
                    'image' => 'https://www.coinsbee.com/images/products/crypto-wallet.png',
                    'description' => 'Physical crypto wallet cards',
                    'price_range' => '$50 - $500',
                    'supported_crypto' => ['BTC', 'ETH', 'LTC', 'BCH']
                ]
            ]
        ],
        'charity' => [
            'id' => 'charity',
            'name' => 'Charity',
            'name_fa' => 'خیریه',
            'image' => 'https://www.coinsbee.com/images/categories/charity.png',
            'description' => 'Charitable donations and causes',
            'products' => [
                'red-cross-donations' => [
                    'id' => 'red-cross-donations',
                    'name' => 'Red Cross Donations',
                    'name_fa' => 'کمک به صلیب سرخ',
                    'image' => 'https://www.coinsbee.com/images/products/red-cross.png',
                    'description' => 'Donate to Red Cross using crypto',
                    'price_range' => '$10 - $1000',
                    'supported_crypto' => ['BTC', 'ETH', 'LTC', 'BCH']
                ],
                'unicef-donations' => [
                    'id' => 'unicef-donations',
                    'name' => 'UNICEF Donations',
                    'name_fa' => 'کمک به یونیسف',
                    'image' => 'https://www.coinsbee.com/images/products/unicef.png',
                    'description' => 'Donate to UNICEF using crypto',
                    'price_range' => '$10 - $1000',
                    'supported_crypto' => ['BTC', 'ETH', 'LTC', 'BCH']
                ]
            ]
        ]
    ],
    
    'supported_cryptocurrencies' => [
        'BTC' => [
            'name' => 'Bitcoin',
            'name_fa' => 'بیت کوین',
            'symbol' => 'BTC',
            'icon' => 'https://www.coinsbee.com/images/crypto/bitcoin.png'
        ],
        'ETH' => [
            'name' => 'Ethereum',
            'name_fa' => 'اتریوم',
            'symbol' => 'ETH',
            'icon' => 'https://www.coinsbee.com/images/crypto/ethereum.png'
        ],
        'LTC' => [
            'name' => 'Litecoin',
            'name_fa' => 'لایت کوین',
            'symbol' => 'LTC',
            'icon' => 'https://www.coinsbee.com/images/crypto/litecoin.png'
        ],
        'BCH' => [
            'name' => 'Bitcoin Cash',
            'name_fa' => 'بیت کوین کش',
            'symbol' => 'BCH',
            'icon' => 'https://www.coinsbee.com/images/crypto/bitcoin-cash.png'
        ]
    ],
    
    'regions' => [
        'US' => [
            'name' => 'United States',
            'name_fa' => 'ایالات متحده',
            'currency' => 'USD',
            'flag' => 'https://www.coinsbee.com/images/flags/us.png'
        ],
        'EU' => [
            'name' => 'Europe',
            'name_fa' => 'اروپا',
            'currency' => 'EUR',
            'flag' => 'https://www.coinsbee.com/images/flags/eu.png'
        ],
        'UK' => [
            'name' => 'United Kingdom',
            'name_fa' => 'انگلستان',
            'currency' => 'GBP',
            'flag' => 'https://www.coinsbee.com/images/flags/uk.png'
        ]
    ],
    
    'languages' => [
        'en' => 'English',
        'fa' => 'فارسی',
        'de' => 'Deutsch',
        'es' => 'Español',
        'ru' => 'Русский',
        'zh' => '中文',
        'it' => 'Italiano',
        'nl' => 'Nederlands',
        'pl' => 'Polski',
        'pt' => 'Português',
        'ja' => '日本語',
        'ko' => '한국어',
        'tr' => 'Türkçe',
        'sv' => 'Svenska',
        'uk' => 'Українська',
        'id' => 'Bahasa Indonesia',
        'vi' => 'Tiếng Việt',
        'tl' => 'Tagalog',
        'cs' => 'Čeština',
        'ro' => 'Română',
        'hu' => 'Magyar',
        'da' => 'Dansk',
        'no' => 'Norsk',
        'he' => 'עברית',
        'ur' => 'اردو',
        'fa_ir' => 'فارسی',
        'ar' => 'العربية'
    ]
];
