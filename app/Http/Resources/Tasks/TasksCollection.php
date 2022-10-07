<?php

namespace App\Http\Resources\Tasks;

use App\Http\Resources\Tasks\TaskResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class TasksCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection
                ->map(function ($task) use ($request) {
                    return (new TaskResource($task))->toArray($request);
                })
        ];
    }
}
