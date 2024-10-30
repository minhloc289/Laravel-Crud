<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">Edit User</div>
            @if (Session::has('failed'))
                <span class="alert alert-danger p-2">{{Session::get('failed')}}</span>
            @endif
            <div class="card-body">
                <form method = "post" action="{{route('EditUser')}}">
                    @csrf
                    <input type="hidden" name="user_id" value="{{$user->id}}">
                    <div class="mb-3">
                        <label for="user_name" class="form-label">Full Name</label>
                        <input type="text" name="full_name" class="form-control" value="{{$user->name}}" id="user_name" placeholder="Enter Full Name">
                        @error('full_name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="user_email" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" value="{{$user->email}}" id="user_email" placeholder="Enter Email">
                        @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="user_phone" class="form-label">Phone Number</label>
                        <input type="number" name="phone_number" class="form-control" value="{{$user->phone_number}}" id="user_phone" placeholder="Enter phone number">
                        @error('phone_number')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>