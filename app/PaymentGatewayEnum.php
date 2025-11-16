<?php

namespace App;

enum PaymentGatewayEnum: string
{
    case Flutterwave = 'flutterwave';
    case ExpressPay = 'expresspay';
    case Paypal = 'paypal';
    case Stripe = 'stripe';
    case Paytm = 'paytm';
    case Payeer = 'payeer';
    case Paystack = 'paystack';
    case Moniepoint = 'moniepoint';
    case Hubtel = 'hubtel';
    case Slydepay = 'slydepay';
    case TopConnect = 'topconnect';
    case Skrill = 'skrill';
}
