<?php

namespace App\Repositories\Task;

use App\Models\Task;
use App\Repositories\BaseRepository;
use App\Repositories\RepositoryInterface;
use App\Repositories\Task\TaskInterface;

class TaskRepository extends BaseRepository implements TaskInterface
{
    public function getModel()
    {
        return \App\Models\Task::class;
    }

    public function getAllTask($board_id)
    {

        return $data = $this->model->where('board_id', $board_id)->get();

    }

    public function find($task)
    {
        return app(RepositoryInterface::class)->find($task);
    }

    public function create($request = []){

       return $this->model->create($request);

    }

    public function update($id, $request = []){
        
        $result = $this->find($id);

        if($result){
            $result->update($request);
            return $result;
        }
    }

    public function delete($task_id)
    {
        $result = $this->model->where('id', $task_id);

        if ($result) {
            $result->delete();
            return response()->json(['message' => 'Task deleted.'], 200);
        }
        
        return response()->json(['message' => 'Task not found task'], 404);
    }
}
