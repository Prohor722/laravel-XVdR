<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <th>
            <td>No.</td>
            <td>Task</td>
            <td>Action</td>
        </th>

        <?php $i=1; ?>
        @foreach ($tasks as $task)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$task->task}}</td>
                <td>
                    <form action="/task/{{$task->id}}" method="Post">
                        @csrf
                        @method('delete')
                        <button type="submit">delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <form action="{{url('/task')}}" method="post">
        @csrf
        <input name="task" placeholder="enter task">
        <button type="submit">Add</button>
    </form>
</body>
</html>
