<?php

namespace App\Repositories\Board;

use App\Repositories\BaseRepository;
use App\Repositories\Board\BoardInterface;

class BoardRepository extends BaseRepository implements BoardInterface
{
    public function getModel()
    {
        return \App\Models\Board::class;
    }
}
