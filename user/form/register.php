<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>User Registration</title>
</head>

<style>
    .container {
        font-family: 'Segoe UI', Tahoma, sans-serif;
        font-weight: 500;
    }
</style>

<body>

    <div class="container">
        <div class="row mx-5">
            <div class="col-md-6 m-auto p-3 shadow border border-dark mt-5">
                <form class="m-2" action="insert.php" method="POST">
                    <h2 class="m-3 text-center">Sign Up</h2>
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Enter Username">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter Email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mobile</label>
                        <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile Number">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter password">
                    </div>

                    <button name="signin" class="btn btn-primary fs-4 fw-bold my-3 form-control">SignUp</button>
                    <p class="text-center">Already have an account? <a class="text-decoration-none fw-bold" href="login.php">Login</a></p>

                </form>
            </div>
        </div>

</body>


</html>