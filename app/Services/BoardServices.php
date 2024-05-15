<?php

namespace App\Services;

use App\Repositories\Board\BoardInterface;

class BoardServices implements BoardServiceInterface
{
    /**
     * Create a new class instance.
     */
    protected $requestData;

    public function GetAllBoards($user_id)
    {
        return app(BoardInterface::class)->getBoards($user_id);
    }

    public function StoreBoard($data)
    {
        $data['user_id'] = auth()->user()->id;

        return app(BoardInterface::class)->create($data);
    }

    public function UpdateBoard(array $data,  $id)
    {
        return app(BoardInterface::class)->update($id, $data);
    }

    public function ShowBoard($id)
    {
        return app(BoardInterface::class)->find($id);
    }

    public function DeleteBoard($id)
    {
        return app(BoardInterface::class)->delete($id);
    }
}
