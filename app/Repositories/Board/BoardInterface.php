<?php

namespace App\Repositories\Board;

use App\Http\Requests\StoreBoardRequest;
use App\Repositories\RepositoryInterface;

interface BoardInterface extends RepositoryInterface
{
    public function create($request = []);
}
