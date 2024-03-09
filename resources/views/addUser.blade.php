<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stylish Form Card</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Add User</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('addUser')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="city">city:</label>
                            <input type="city" class="form-control" id="city" name="city" placeholder="Enter your city ">
                        </div>
                        <div class="form-group">
                            <label for="age">age:</label>
                            <input type="age" class="form-control" id="age" name="age" placeholder="Enter your age">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="phone" class="form-control" id="phone" name="phone" placeholder="Enter your phone">
                        </div>
                        <a href="{{route('addUser')}}"><button type="submit" class="btn btn-primary btn-block">Submit</button></a> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and Popper.js (required for Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
