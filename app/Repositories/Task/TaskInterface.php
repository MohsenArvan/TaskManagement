<?php 

namespace App\Repositories\Task;

use App\Repositories\RepositoryInterface;

interface TaskInterface extends RepositoryInterface
{
    public function getAllTask($board_id);

    public function find($task);

    public function create($request = []);

    public function update($id, $request = []);

    public function delete($task_id);
}