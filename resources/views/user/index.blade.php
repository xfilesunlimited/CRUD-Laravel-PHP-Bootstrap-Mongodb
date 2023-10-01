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
            <p class="card-header">List User</p>
            

        <div>
            <a class="btn btn-primary mt-2" href="{{route('user.create')}}">Create a Product</a>
        </div>
            <div class="card-body"></div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key => $value)
                    <tr>
                    <th scope="row">{{++$key}}</th>
                    <td>{{$value->_id}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->email}}</td>
                    <td>
                        <a href="{{ route('user.edit',$value->_id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('user.show',$value->_id) }}" class="btn btn-danger">Delete</a>
                    </td>
                    </tr>                  
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

  </body>
</html>
