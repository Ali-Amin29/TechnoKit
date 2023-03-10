<div>

    {{--  Show All task with live wire    --}}
    <h3 class="text-center">My Task ({{ $totalTasks }})</h3>
    <table class="table bg-white ">
        <thead>
            <tr>
                {{--  <th>Move</th>  --}}
                <th>id</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody wire:sortable="updateTaskOrder">
            @foreach ($tasks as $task)
                {{--  <td>
                    <i class="fa fa-arrows-alt"></i>
                </td>  --}}

                <tr wire:sortable.item="{{ $task->id }}" wire:key="task-{{ $task->id }}">
                    {{--  <td scope="row">{{ $loop->iteration }}</td>  --}}
                    <td scope="row">{{ $task->order_position }}</td>
                    <td wire:sortable.handle>{{ $task->title }}</td>
                    {{--  <td>{{ $task->status == true ? 'Completed' : 'Pending' }}</td>  --}}

                    <td> <button wire:click.prevent="DeleteTask({{ $task->id }})"
                            class="btn btn-danger btn-block">Delete</button></td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
