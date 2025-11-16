<?php

namespace App;

enum OrderStatusEnum: string
{
    case Cancelled = 'cancelled';
    case Completed = 'completed';
    case Failed = 'failed';
    case Delivered = 'delivered';
    case Paid = 'paid';
    case Pending = 'pending';
    case Processing = 'processing';
    case Refunded = 'refunded';
    case Shipped = 'shipped';
    case Unpaid = 'unpaid';
}
