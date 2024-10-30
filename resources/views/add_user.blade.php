<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">Add New User</div>
            @if (Session::has('failed'))
                <span class="alert alert-danger p-2">{{Session::get('failed')}}</span>
            @endif
            <div class="card-body">
                <form method = "post" action="{{route('AddUser')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="user_name" class="form-label">Full Name</label>
                        <input type="text" name="full_name" class="form-control" value="{{old('full_name')}}" id="user_name" placeholder="Enter Full Name">
                        @error('full_name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="user_email" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" value="{{old('email')}}" id="user_email" placeholder="Enter Email">
                        @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="user_phone" class="form-label">Phone Number</label>
                        <input type="number" name="phone_number" class="form-control" value="{{old('phone_number')}}" id="user_phone" placeholder="Enter phone number">
                        @error('phone_number')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="user_password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" value="{{old('password')}}" id="user_password" placeholder="Enter password">
                        @error('password')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="user_confirm_password" class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" value="{{old('password_confirmation')}}" id="user_confirm_password" placeholder="Confirm password">
                        @error('password_confirmation')
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