<?php

namespace App;

enum PermissionEnum: string
{
    case UsersIndex = 'users.index';
    case UsersCreate = 'users.create';
    case UsersEdit = 'users.edit';
    case UsersShow = 'users.show';
    case UsersDelete = 'users.delete';
    case ProductsIndex = 'products.index';
    case ProductsCreate = 'products.create';
    case ProductsEdit = 'products.edit';
    case ProductsShow = 'products.show';
    case ProductsDelete = 'products.delete';
    case RolesIndex = 'roles.index';
    case RolesCreate = 'roles.create';
    case RolesEdit = 'roles.edit';
    case RolesShow = 'roles.show';
    case RolesDelete = 'roles.delete';
}
