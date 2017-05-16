<?php
return [
    // Title
    'title.common'                      => '住宅メーカ向け診断',
    'title.short.common'                => 'BS',
    'title.user.login'                  => 'ログイン',
    'title.user.confirm_email'          => 'メール確認',
    'title.user.active_email'           => 'メール有効',
    'title.user.list'                   => 'ユーザーリスト',
    'title.user.create'                 => 'ユーザー追加',
    'title.user.edit'                   => 'ユーザー編集',
    'title.home.dashboard'              => 'Dashboard',
    'title.ips'                         => 'IP',
    'title.ips.create'                  => 'Add IP',
    'title.ips.edit'                    => 'Edit IP',
    'title.qr.create'                   => 'Create Qr',
    'title.qr.edit'                     => 'Edit Qr',
    'title.customer.customers'          => 'Customers',
    'title.customer.create'             => 'Create customer',
    'title.customer.detail'             => 'Customer detail',
    'title.customer.edit'               => 'Edit customer',
    'title.company'                     => 'Company',
    'title.company.create'              => 'Create Company',
    'title.company.edit'                => 'Edit Company',
    'title.ips.create'                  => 'IP追加',
    'title.ips.edit'                    => 'IP編集',
    'title.qr.create'                   => 'QRコード追加',
    'title.qr.edit'                     => 'QRコード編集',
    'title.company'                     => '会社',
    'title.company.create'              => '会社追加',
    'title.company.edit'                => '会社編集',
    'title.question'                    => '質問リスト',
    'title.question.add'                => '質問追加',
    'title.question.edit'               => '質問追加',
    'title.survey.list'                 => 'Survey List',

    // Label
    'label' => [
        'common' => [
            'login'                     => 'ログイン',
            'logOut'                    => 'ログアウト',
            'profile'                   => 'プロフィール',
            'home'                      => 'ホーム',
            'btnAddMore'                => '追加',
            'btnSave'                   => '保存',
            'btnCancel'                 => 'キャンセル',
            'btnEdit'                   => '編集',
            'btnDelete'                 => '削除',
            'nameOfAdminEmail'          => 'Admin',
            'bulkDelete'                => '削除',
            'status_active'             => 'active',
            'status_disable'             => 'disable',
        ],
        'user' => [
            'confirm_email' => [
                'description' => 'Please check email or request new email to active',
                'send_email' => 'Send new email',
            ],
            'list' => [
                'name'      => '名前',
                'email'     => 'メール',
                'status'    => 'ステータス',
                'company'   => '会社',
            ],
            'create' => [
                'name'      => '名前',
                'email'     => 'メール',
                'company'   => '会社',
                'selectCompany' => '会社を選択してください。',
                'active'    => 'active',
                'disable'   => 'disable'
            ],
        ],
        'ips' => [
            'page_title'    => 'IPリスト',
            'column'        => [
                'ip_address'            => 'IPアドレス',
                'description'           => '説明'
            ],
            'breadcrumb'    => [
                'edit'                  => 'IP編集',
                'add'                   => 'IP追加'
            ],
            'ips_enable'    => [
                'on'                    => '許可',
                'off'                   => '禁止'
            ]
        ],
        'customer' => [
            'header'    => 'Customers Management',
            'column'        => [
                'id'                    => 'Id',
                'first_name'            => 'First name',
                'last_name'             => 'Last name',
                'phone_number'          => 'Phone number',
                'email'                 => 'Email address',
                'action'                => 'Action'
            ],
            'breadcrumb'    => [
                'create'                => 'Create customer',
                'detail'                => 'Customer detail',
                'edit'                  => 'Edit customer'
            ]
        ],
        'company' => [
            'page_title'    => '会社リスト',
            'column'        => [
                'company_name'                  => '名前',
                'company_address'               => '場所',
                'company_mobile'                => '携帯電話',
                'company_email'                 => 'メールアドレス',
                'company_website'               => 'サイト',
                'representative_name'           => '担当者名',
                'representative_mobile'         => '担当者携帯電話',
            ],
            'breadcrumb'    => [
                'index'                 => '会社',
                'edit'                  => '会社編集',
                'add'                   => '会社追加'
            ]
        ],
        'question' => [
            'page_title'    => '質問リスト',
            'label'         => [
                'add_more'              =>  '追加',
                'remove'                =>  '削除'
            ],
            'column'        => [
                'content'               => '質問',
                'answer'                => '回答',
                'status'                => 'ステータス'
            ],
            'breadcrumb'    => [
                'edit'                  => '質問編集',
                'add'                   => '質問追加'
            ]
        ],
        'survey' => [
            'column'        => [
                'name'               => '名前',
                'email'              => 'メール',
                'createDate'         => 'Created Date'
            ],
        ]
    ],

    // Placeholder
    'placeholder' => [
        'user' => [
            'login' => [
                'username' => 'アカウント',
                'password' => 'パスワード',
            ],
        ],
    ],

    // Email
    'email' => [
        'confirm_email' => [
            'title' => 'Confirm email'
        ],
    ],
];