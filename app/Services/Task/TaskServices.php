<?php

namespace App\Services\Task;

use App\Repositories\Task\TaskRepository;
use App\Repositories\Task\TaskInterface;

class TaskServices implements TaskServiceInterface
{
    public function getAllTask($board_id)
    {
        return app(TaskInterface::class)->getAllTask($board_id);
    }

    public function storeTask($data, $board_id)
    {
        $data['board_id'] = $board_id;
        return app(TaskInterface::class)->create($data);
    }

    public function showTask($task)
    {
        return app(TaskInterface::class)->find($task);
    }

    public function updateTask($data, $task_id)
    {
        return app(TaskInterface::class)->update($task_id, $data);
    }

    public function destroy($task_id)
    {
        return app(TaskInterface::class)->delete($task_id);
    }

    public function search($keyword)
    {
        // return ;
    }

    public function filter($filter)
    {
        // return ;
    }

}