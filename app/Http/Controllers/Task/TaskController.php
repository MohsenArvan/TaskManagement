<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Services\Task\TaskServiceInterface;

// use App\Services\Task\TaskServices;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($board_id)
    {
        return app(TaskServiceInterface::class)->getAllTask($board_id);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request, $board_id)
    {
        $data = $request->validated();

        return app(TaskServiceInterface::class)->storeTask($data, $board_id);   
    }

    /**
     * Display the specified resource.
     */
    public function show($task)
    {
        return app(TaskServiceInterface::class)->showTask($task);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, $task_id)
    {
        $data = $request->validated();
        return app(TaskServiceInterface::class)->updateTask($data, $task_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($board_id, $task_id)
    {
        return app(TaskServiceInterface::class)->destroy($task_id);
    }
}
