<?php

namespace App;

enum StateEnum: string
{
    case New = 'new';
    case Old = 'old';
    case Sold_out = 'sold_out';
    case Sale = 'sale';
}
