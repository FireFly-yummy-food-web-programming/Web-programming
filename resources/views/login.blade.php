<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yummy Food Restaurant</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-fluid" id="container-fluid">
        <div class="container-fluid pb-5" id="bg-1">
            <div class="container-fluid bg-1 p-5" id="bg">
                <h1 class="text-center">Login</h1>
            </div>
        </div>
        <div class="container-fluid bg-2 p-5 bg-white" id="bg-2">
        </div>
        <div class="container">
            <form action="" method="post">
                <div class="row">
                    <label for="Username" class="col-form-label custom-label">Username</label>
                    <input type="text" class="form-control rounded-pill" name="Username" id="Username" value="" placeholder="Enter the username">
                </div>
                <div class="row">
                    <label for="Password" class="col-form-label custom-label">Password</label>
                    <input type="password" class="form-control rounded-pill" name="Password" id="Password" placeholder="Enter the password">
                </div>
                <div class="row d-flex flex-column align-items-center justify-content-center pt-4 text-center">
                    @if (!empty(session('error_message')))
                        <p class="text-danger">{{ session('error_message') }}</p>
                        {{ session()->forget('error_message') }}
                    @endif
                    <p class="">You don't have an account? <a href="register">Register now</a></p>
                    <button type="submit" class="btn btn-primary" style="background-color: #AD343E; border: 1px solid black; border-radius: 118px;">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>