<div>

    {{--  Show All task with live wire    --}}
    <h3 class="text-center">My Task ({{ $totalTasks }})</h3>
    <table class="table bg-white ">
        <thead>
            <tr>
                <th>id</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>{{ $task->title }}</td>
                    {{--  <td>{{ $task->status == true ? 'Completed' : 'Pending' }}</td>  --}}

                    <td> <button wire:click.prevent="DeleteTask({{ $task->id }})"
                            class="btn btn-danger btn-block">Delete</button></td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
