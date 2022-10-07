<?php

namespace App\Http\Controllers;

use App\Http\Requests\Tasks\CreateTaskRequest;
use App\Http\Resources\Tasks\TasksCollection;
use App\Http\Resources\Tasks\TaskResource;
use App\Services\TaskService;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    private $taskService;

    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }

    public function index()
    {
        $tasks = $this->taskService->allTasks();

        if (request()->wantsJson()) {
            return new TasksCollection($tasks);
        }

        return $tasks;
    }

    public function store(CreateTaskRequest $request)
    {
        $task = $this->taskService->insertTask($request->validated());

        if (request()->wantsJson()) {
            return new TaskResource($task);
        }

        return $task;
    }

    public function show()
    {
        //
    }

    public function update()
    {
        //
    }

    public function destrouy()
    {
        //
    }
}
