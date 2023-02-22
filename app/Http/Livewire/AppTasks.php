<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class AppTasks extends Component
{

    protected $listeners = ['taskAdded' => '$refresh'];

    public function render()
    {
        $totalTasks = auth()->user()->tasks()->count();
        $tasks = auth()->user()->tasks()->orderBy('order_position','desc')->get()->reverse();
        return view('livewire.app-tasks', [
            'totalTasks' => $totalTasks,
            'tasks' => $tasks
        ]);
    }
    public function DeleteTask($id)
    {
        $task=Task::find($id);
        $task->delete();
    }

    public function updateTaskOrder($items)
    {
        // dd($items);
        foreach ($items as $item)
        {
            Task::find($item['value'])->update(['order_position' => $item['order']]);

        }

    }
}
