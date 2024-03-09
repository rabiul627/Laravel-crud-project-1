<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <title>Users Table</title>
</head>
<body>
    <div class="container mt-5">
    <table class="table">
            <h2 class="pb-4">All users!</h2>
    <thead>
         {{-- <div class="float-right"> --}}
            <a href="{{route('newUser')}}" class="btn btn-success float-center mb-3">Add User</a>
         {{-- </div> --}}
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">More</th>
        <th scope="col">Update</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    @foreach ($info as $id => $data)
    <tbody>
      <tr>
        <td> {{  $data->id  }}</td>
        <td> {{  $data->name  }}</td>
        <td>{{  $data->email  }}</td>
        <td><a href="{{route('all-user', $data->id)}}" class="btn btn-sm btn-info">Show</a></td>
        <td> <a href="{{route('deleteUser',$data->id)}}" class="btn btn-sm btn-danger">Delete</a> </td>
        <td><a href="{{route('updateField',$data->id)}}" class="btn btn-sm btn-warning">Update</a></td>
      </tr>
    </tbody>
    @endforeach
  </table>
   <div class="">
     {{ $info->links('pagination::bootstrap-5') }}
     {{-- {{ $info->onEachSide(5)->links() }} --}}
     {{-- {{ $info->links('view', ['foo' => 'bar']) }} --}}
   </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>





  
