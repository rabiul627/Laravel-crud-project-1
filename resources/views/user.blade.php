<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Info</title>
</head>
<body>

<div class="container mt-5">
  <h2 class="mb-4">User Information!!</h2>

  <table class="table table-bordered table-striped">
    <thead class="thead-dark">
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>City</th>
        <th>Age</th>
        <th>Phone</th>
      </tr>
    </thead>
    @foreach ($uId as $user)
    <tbody>
      <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td> {{ $user->email }}</td>
        <td> {{ $user->city }}</td>
        <td> {{ $user->age }}</td>
        <td> {{ $user->phone }}</td>
        
      </tr>
    </tbody>
    @endforeach
  </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>




  
