<?php
return [
    'sidebar' => [
        [
            'name'       => 'Tổng quan',
            'route'      => 'get_admin.dashboard',
            'class-icon' => 'la la-tachometer-alt'
        ],
        [
            'name'       => 'Tin tức && Sự kiện',
            'class-icon' => 'la la-edit',
            'sub'        => [
                [
                    'name'  => 'Từ khoá',
                    'route' => 'get_admin.keyword.index'
                ],
                [
                    'name'  => 'Menu',
                    'route' => 'get_admin.menu.index'
                ],
                [
                    'name'  => 'Bài viết',
                    'route' => 'get_admin.article.index'
                ],
            ]
        ],
        [
            'name'       => 'Xe',
            'class-icon' => 'la la-server',
            'sub'        => [
                [
                    'name'  => 'Địa điểm',
                    'route' => 'get_admin.location.index'
                ],
                [
                    'name'  => 'Nhà xe',
                    'route' => 'get_admin.guest.index'
                ],
                [
                    'name'  => 'Lịch trình',
                    'route' => 'get_admin.buses.index'
                ],
                [
                    'name'  => 'Tuyến đường',
                    'route' => 'get_admin.route.index'
                ],
                [
                    'name'  => 'Thống kê vé',
                    'route' => 'get_admin.ticket.index'
                ],
            ]
        ],
        [
            'name'       => 'Người dùng',
            'class-icon' => 'la la-user',
            'sub'        => [
                [
                    'name'  => 'Thành viên',
                    'route' => 'get_admin.user.index'
                ]
            ]
        ],
        [
            'name'       => 'Promotion Code',
            'route'      => 'get_admin.promotion_code.index',
            'class-icon' => 'la la-tachometer-alt'
        ],
//        [
//            'name'       => 'Đơn hàng',
//            'class-icon' => 'la la-cart-arrow-down',
//            'sub'        => [
//                [
//                    'name'  => 'Danh sách',
//                    'route' => 'get_admin.transaction.index'
//                ]
//            ]
//        ],
        [
            'name'       => 'Dữ liệu nền',
            'class-icon' => 'la la-database',
            'sub'        => [
                [
                    'name'  => 'Slide',
                    'route' => 'get_admin.slide.index'
                ],
                [
                    'name'  => 'Config Data',
                    'route' => 'get_admin.configuration.index'
                ],
            ]
        ],
        [
            'name'       => 'Page',
            'route'      => 'get_admin.page.index',
            'class-icon' => 'la la-file-alt'
        ],
        [
            'name'       => 'Config Email',
            'route'      => 'get_admin.email.index',
            'class-icon' => 'la la-envelope'
        ],
        [
            'name'       => 'Menu Navbar',
            'route'      => 'get_admin.navbar.index',
            'class-icon' => 'la la-bars'
        ],
        [
            'name'       => 'Admin',
            'class-icon' => 'la la-cogs',
            'sub'        => [
                [
                    'name'  => 'Permission',
                    'route' => 'get_admin.permission.index'
                ],
                [
                    'name'  => 'Role',
                    'route' => 'get_admin.role.index'
                ],
                [
                    'name'  => 'Quản trị viên',
                    'route' => 'get_admin.account.index'
                ],
            ]
        ],
    ]
];
