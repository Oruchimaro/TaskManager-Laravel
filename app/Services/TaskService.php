<?php

namespace App\Services;

use App\Models\Task;

class TaskService
{
	public function allTasks($paginate = true)
	{
		$tasks = Task::query();

		$tasks = $paginate ? $tasks->paginate() : $tasks->get();

		return $tasks;
	}


	public function insertTask($data)
	{
		$task = Task::create([
			'title' => $data['title'],
			'description' => $data['description'] ?? null,
			'status' => strtoupper($data['status'])
		]);

		return $task;
	}
}
