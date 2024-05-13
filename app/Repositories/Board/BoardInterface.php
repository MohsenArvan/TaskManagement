<?php

namespace App\Repositories\Board;

use App\Http\Requests\StoreBoardRequest;
use App\Repositories\RepositoryInterface;

interface BoardInterface extends RepositoryInterface
{
    public function getBoards($user_id);

    public function create($request = []);

    public function update($id, $request = []);

    public function find($id);

    public function delete($id);
}
