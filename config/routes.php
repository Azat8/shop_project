<?php

return [
    'category/([0-9]+)' => 'catalog/category/$1',
    'category/([0-9]+)/page/([0-9]+)' => 'catalog/category/$1/$2',
    '' => 'site/index',
    'product/([0-9]+)' => 'products/view/$1',
    'catalog' => 'catalog/all',
    'blog' => 'blog/view',
    'info' => 'inf/view',
    'contact' => 'contact/view',
    'register' => 'user/register',
    'user/login' => 'user/login',
    'cabinet' => 'cabinet/index',
    'cabinet/userAvatar' => 'cabinet/userAvatar',
    'logout' => 'user/logout',
];
