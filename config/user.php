<?php

return [
    'menu'       => [
        [
            'title' => 'Thông tin tài khoản',
            'route' => 'get_user.info',
            'icon'  => 'fa fa-dashboard',
            'img'   => 'images/icon/account-circle.svg'
        ],
//        [
//            'title' => 'Affiliate',
//            'route' => 'get_user.affiliate',
//            'icon'  => 'fa fa-dashboard',
//            'img'   => 'images/icon/affiliate.svg'
//        ],
        [
            'title' => 'Bạn bè',
            'route' => 'get_user.friend',
            'icon'  => 'fa fa-dashboard',
            'img'   => 'images/icon/friend.svg'
        ],
        [
            'title' => 'Vé của tôi',
            'route' => 'get_user.ticket',
            'icon'  => 'fa fa-dashboard',
            'img'   => 'images/icon/ticket.svg'
        ],
        [
            'title' => 'Đăng xuất',
            'route' => 'get.logout',
            'icon'  => 'fa fa-dashboard',
            'img'   => 'images/icon/logout.svg'
        ],
    ],
    'menu_guest' => [
        [
            'title' => 'Quản lý vé',
            'route' => 'get_guest.ticket.index',
            'icon'  => 'fa fa-dashboard',
            'img'   => 'images/icon/credit-card.svg',
            'level' => [1]
        ],
        [
            'title' => 'QL vé trung chuyển',
            'route' => 'get_guest.ticket.index_pick_home',
            'icon'  => 'fa fa-dashboard',
            'img'   => 'images/icon/credit-card.svg',
            'level' => [1]
        ],
        [
            'title' => 'Quản lý chuyến xe',
            'route' => 'get_guest.buses.index',
            'icon'  => 'fa fa-dashboard',
            'img'   => 'images/icon/map.svg',
            'level' => [1]
        ],
        [
            'title' => 'Thống kê',
            'route' => 'get_guest.statistical.index',
            'icon'  => 'fa fa-dashboard',
            'img'   => 'images/icon/chart.svg',
            'level' => [1]

        ],
        [
            'title' => 'Quản lý xe',
            'route' => 'get_guest.vehicles.index',
            'icon'  => 'fa fa-dashboard',
            'img'   => 'images/icon/car.svg',
            'level' => [1]
        ],
        [
            'title' => 'Album ảnh',
            'route' => 'get_guest.album.index',
            'icon'  => 'fa fa-dashboard',
            'img'   => 'images/icon/album.svg',
            'level' => [1]
        ],
        [
            'title' => 'Giới thiệu',
            'route' => 'get_guest.about.index',
            'icon'  => 'fa fa-dashboard',
            'img'   => 'images/icon/info.svg',
            'level' => [1]
        ],
        [
            'title' => 'Thông tin tài khoản',
            'route' => 'get_guest.info',
            'icon'  => 'fa fa-dashboard',
            'img'   => 'images/icon/account-circle.svg',
            'level' => [0,1]
        ],
        [
            'title' => 'Bạn bè',
            'route' => 'get_user.friend',
            'icon'  => 'fa fa-dashboard',
            'img'   => 'images/icon/friend.svg',
            'level' => [0,1]
        ],
        [
            'title' => 'Vé của tôi',
            'route' => 'get_user.ticket',
            'icon'  => 'fa fa-dashboard',
            'img'   => 'images/icon/ticket.svg',
            'level' => [0,1]
        ],
        [
            'title' => 'Biến động tài khoản',
            'route' => 'get_user.pay_history',
            'icon'  => 'fa fa-dashboard',
            'img'   => 'images/icon/history.svg',
            'level' => [0,1]
        ],
        [
            'title' => 'Đăng xuất',
            'route' => 'get.logout',
            'icon'  => 'fa fa-dashboard',
            'img'   => 'images/icon/logout.svg',
            'level' => [0,1]
        ],
    ]
];
