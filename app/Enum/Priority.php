<?php

namespace App\Enum;

enum Priority: string
{
    const LOW = 'low';
    const MEDIUM = 'medium';
    const HIGH = 'high';
    const URGENT = 'urgent';
    const IMMEDIATE = 'Relatively immediate';

}
