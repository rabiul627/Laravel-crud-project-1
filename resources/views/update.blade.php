<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h2 class="mb-0">You can change your data</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('updateUserData',$data->id)}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="text-uppercase font-weight-bold">Your Name:</label>
                            <input type="text" name="username" value="{{ $data->name }}" class="form-control rounded-pill" id="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="email" class="text-uppercase font-weight-bold">Your Email:</label>
                            <input type="email" name="useremail" value="{{ $data->email }}" class="form-control rounded-pill" id="email" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="city" class="text-uppercase font-weight-bold">Your City:</label>
                            <input type="text" name="usercity" value="{{ $data->city }}" class="form-control rounded-pill" id="city" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="age" class="text-uppercase font-weight-bold">Your Age:</label>
                            <input type="text" name="userage" value="{{ $data->age }}" class="form-control rounded-pill" id="age" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="phone" class="text-uppercase font-weight-bold">Your Phone:</label>
                            <input type="text" name="userphone" value="{{ $data->phone }}" class="form-control rounded-pill" id="email" placeholder="Enter your email">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block rounded-pill">Submit</button>
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
