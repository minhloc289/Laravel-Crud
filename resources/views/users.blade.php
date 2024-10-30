<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Laravel Crud System
                <a href="/add/user" class="btn btn-success btn-sm float-end">Add new user</a>
            </div>
            @if (Session::has('success'))
                <span class="alert alert-success p-2">{{Session::get('success')}}</span>
            @endif
            @if (Session::has('failed'))
                <span class="alert alert-danger p-2">{{Session::get('failed')}}</span>
            @endif
            <div class="card-body">
                <table class="table table-sm table-striped table-bordered">
                    <thead class="text-center">
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Registration Date</th>
                        <th>Last Update</th>
                        <th colspan="2" class="text-center">Action</th>
                    </thead>
                    <tbody>
                        @if (count($user_data) > 0)
                            @foreach ($user_data as $item)
                                <tr class="text-center">
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->phone_number}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->updated_at}}</td>
                                    <td><a href="/edit/{{$item->id}}" class="btn btn-primary btn-sm me-2">Edit</a></td>
                                    <td><a href="/delete/{{$item->id}}" class="btn btn-danger btn-sm">Delete</a></td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7" class="text-center">No User Found</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>