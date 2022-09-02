<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Registration</title>
</head>

<body>
    <nav class="nav nav-pills justify-content navbar navbar-dark bg-secondary">
        <a class="text-sm-center nav-link active navbar-brand" aria-current="page" href="index.php">Welcome to HTMLhelp</a>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-sm-left nav-link active navbar-brand" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Sign In/Register</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="signin.php">Sign In</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="register.php">Register</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="admin/adminlogin.php">Admin</a></li>
            </ul>
        </li>
    </nav><br>
    <center>
        <span class="border border-dark" style="display: inline-block;">
            <img src="learn-html-and-css-copy.png" width="360" height="150" alt="Learn HTML and CSS Picture">
        </span>
    </center>
    <h1>
        <center>Please enter your information to register an account</center>
    </h1>

    <form action="./backend/registration_verification.php" method="post">
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

        <div class="form-group row" style="padding-top: 1em">
            <label class="col-sm-2 col-form-label" style="padding-left: 5em" for="FirstName">First Name:</label>
            <div class="col-sm-10">
                <input type="text" name="FirstName" class="form-control" id="FirstName" placeholder="First Name" required>
            </div>
        </div>

        <div class="form-group row" style="padding-top: 1em">
            <label class="col-sm-2 col-form-label" style="padding-left: 5em" for="LastName">Last Name:</label>
            <div class="col-sm-10">
                <input type="text" name="LastName" class="form-control" id="LastName" placeholder="Last Name" required>
            </div>
        </div>

        <div class="form-group row" style="padding-top: 1em">
            <label class="col-sm-2 col-form-label" style="padding-left: 5em" for="Email">Email:</label>
            <div class="col-sm-10">
                <input type="email" name="Email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email" required>
            </div>
        </div>

        <div class="form-group row" style="padding-top: 1em">
            <label class="col-sm-2 col-form-label" style="padding-left: 5em" for="Address">Address:</label>
            <div class="col-sm-10">
                <input type="text" name="Address" class="form-control" id="Address" placeholder="Address" required>
            </div>
        </div>

        <div class="form-group row" style="padding-top: 1em">
            <label class="col-sm-2 col-form-label" style="padding-left: 5em" for="City">City:</label>
            <div class="col-sm-10">
                <input type="text" name="City" class="form-control" id="City" placeholder="City" required>
            </div>
        </div>

        <div class="form-group row" style="padding-top: 1em">
            <label class="col-sm-2 col-form-label" style="padding-left: 5em" for="State">State:</label>
            <div class="col-sm-10">
                <input type="text" name="State" class="form-control" id="State" placeholder="State" required>
            </div>
        </div>

        <div class="form-group row" style="padding-top: 1em">
            <label class="col-sm-2 col-form-label" style="padding-left: 5em" for="ZipCode">Zip Code:</label>
            <div class="col-sm-10">
                <input type="num" name="ZipCode" class="form-control" id="ZipCode" placeholder="Zip Code" required>
            </div>
        </div>

        <br>
        <div style="padding-left: 4.3em;">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>