<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Manage Questions</title>
</head>

<body>
    <nav class="nav nav-pills justify-content navbar navbar-dark bg-secondary">
        <a class="text-sm-center nav-link active navbar-brand" aria-current="page" href="../index.php">Welcome to HTMLhelp</a>
        <a class="nav-link text-sm-center nav-link active navbar-brand" href="../logout.php" role="button" aria-expanded="page">Logout</a>
    </nav><br>
    <center>
        <span class="border border-dark" style="display: inline-block;">
            <img src="../learn-html-and-css-copy.png" width="360" height="150" alt="Learn HTML and CSS Picture">
        </span>
    </center>

    <br>
    <center>
        <h2>Enter the username below you would like to delete.</h2>
    </center>
    <br>
    <br>
    <form action="./admin_backend/delete_user_verification.php" method="POST" id="addQ">
        <center><label class="username" name="Username">Username: </label>
            <input type="text" id="Username" name="Username">
        </center>
        <br>
        <center><input type="reset" value="Reset" class="btn btn-warning"></center>
        <br>
        <center><button type="submit" form="addQ" value="Submit" class="btn btn-primary">Submit</center>
    </form>
    <br>
    <br>
    <center>
        <h4>Changed your mind?</h4>
    </center>
    <center>
        <nav>
            <a href="../logout.php" style="margin-right: 25px;" class="btn btn-danger">Logout</a>
            <a href="adminhomepage.php" class="btn btn-danger">Go back</a>
        </nav>
    </center>
    <br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>