<?php

namespace App;

enum PaymentMethodEnum: string
{
   case cash = 'cash';
   case momo = 'momo';
   case card = 'card';
}
