<?php

namespace App;

enum RoleEnum: string
{
    case Admin = 'admin';
    case User = 'user';
    case Manager = 'manager';
    case TeamLead = 'team lead';
    case SuperAdmin = 'super admin';
}
