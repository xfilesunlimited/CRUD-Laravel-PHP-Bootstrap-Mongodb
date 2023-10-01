<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container mt-5">
        @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        <div class="card">
            <p class="card-header">Edit User</p>
            <div class="card-body"></div>
                <form action="{{ route('user.update',$data->_id) }}" method="post">
                    @csrf
                    @method('patch')
                        <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $data->name }}">
                        @error('name') <p class="text text-danger">{{ $message }}</p> @enderror
                        </div>
                       
                        <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $data->email }}">
                        @error('email') <p class="text text-danger">{{ $message }}</p> @enderror
                        </div>

                        <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" >
                        @error('password') <p class="text text-danger">{{ $message }}</p> @enderror
                        </div>

                        <div class="form-group">
                            <button  class="btn btn-success">Update</button>           
                        </div>
                        <div>
                        <a class="btn btn-primary mt-2" href="{{route('user.index')}}">Back</a>
                        </div>
                </form>
        </div>
    </div>

  </body>
</html>
