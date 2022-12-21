<?php

namespace App;

enum PaymentStatuses: string
{
    case Awaiting = 'awaiting-payment';
    case Paid = 'paid';
}
