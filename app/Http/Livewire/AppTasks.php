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
        $tasks = auth()->user()->tasks()->latest()->get()->reverse();
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
}
