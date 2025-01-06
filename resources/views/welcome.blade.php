<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
</head>

<body>
    <h1>Students</h1>
    {{ Auth::user() }}
    <table border="1">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Image</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($students as $std)
                <tr>
                    <td>
                        {{ $std->id }}
                    </td>
                    <td>
                        {{ $std->name }}
                    </td>
                    <td>
                        {{ $std->email }}
                    </td>
                    <td>
                        {{ $std->age }}
                    </td>
                    <td>
                        <img src="{{ asset('storage/' . $std->image) }}" alt={{ $std->name }} height="50" width="auto">
                    </td>
                    <td>
                        <a href="/edit/{{$std->id}}">
                            <button>Update</button>
                        </a>
                        <a href="/delete/{{$std->id}}">
                            <button>Delete</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
