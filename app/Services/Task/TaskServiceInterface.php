<?php

namespace App\Services\Task;

interface TaskServiceInterface
{
    public function getAllTask($board_id);

    public function storeTask($data, $board_id);

    public function showTask($task);

    public function updateTask($data, $task_id);

    public function destroy($task_id);
}
