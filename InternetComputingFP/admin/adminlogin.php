<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Admin Login</title>
</head>

<body>
    <nav class="nav nav-pills justify-content navbar navbar-dark bg-secondary">
        <a class="text-sm-center nav-link active navbar-brand" aria-current="page" href="../index.php">Welcome to HTMLhelp</a>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-sm-left nav-link active navbar-brand" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Sign In/Register</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../signin.php">Sign In</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="../register.php">Register</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="admin/adminlogin.php">Admin</a></li>
            </ul>
        </li>
    </nav><br>
    <center>
        <span class="border border-dark" style="display: inline-block;">
            <img src="../learn-html-and-css-copy.png" width="360" height="150" alt="Learn HTML and CSS Picture">
        </span>
    </center>
    <h1>
        <center>Please enter admin information to login into the admin account</center>
    </h1>

    <form action="./admin_backend/admin_login_verification.php" method="post">
        <div class="form-group row" style="padding-top: 1em">
            <label class="col-sm-2 col-form-label" style="padding-left: 5em" for="Username">Username:</label>
            <div class="col-sm-10">
                <input type="text" name="Username" class="form-control" id="Username" placeholder="Username" required>
            </div>
        </div>

        <div class="form-group row" style="padding-top: 1em">
            <label class="col-sm-2 col-form-label" style="padding-left: 5em" for="Password">Password:</label>
            <div class="col-sm-10">
                <input type="password" name="Password" class="form-control" id="Password" placeholder="Password" required>
            </div>
        </div>
        <br>
        <div style="padding-left: 13.5em;">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>