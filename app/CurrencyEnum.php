<?php

namespace App;

enum CurrencyEnum: string
{
    case USD = 'USD';
    case EUR = 'EUR';
    case GHS = 'GHS';
    case GBP = 'GBP';
    case NGN = 'NGN';

    public function symbol(): string
    {
        return match ($this) {
            self::USD => '$',
            self::EUR => '€',
            self::GHS => '₵',
            self::GBP => '£',
            self::NGN => '₦',
        };
    }

    public function nameWithSymbol(): string
    {
        return "{$this->symbol()} {$this->value}";
    }
}
