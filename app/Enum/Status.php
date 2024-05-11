<?php

namespace App\Enum;

enum Status: string
{
    const ACTIVE = 'active';
    const INACTIVE = 'inactive';
    const PENDING = 'pending';
    const DELETED = 'deleted';
}
