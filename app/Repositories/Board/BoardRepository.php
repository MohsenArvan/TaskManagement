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

    public function getBoards($user_id)
    {
        return $this->model->where('user_id', $user_id)->get();
    }

    public function create($request = []){

        $this->model->create($request);

    }   

    public function update($id, $request = []){

        $this->model->find($id)->update($request);

    }

    public function find($id){

        return $this->model->find($id);

    }

    public function delete($id){
        $user_id = auth()->user()->id;

        return $this->model->where('user_id', $user_id)
                            ->find($id)
                            ->delete();

    }

}
