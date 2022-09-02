<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Admin Home page</title>

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
    <center>
        <h1><b>Administrator Home Page</b></h1>
        <br>
        <nav style="height:80px" class="bg-primary">
            <a href="insert_question.php" style="margin-right: 25px; margin-top:18px" class="btn btn-light">Add Questions</a>
            <a href="manage_questions.php" style="margin-right: 25px; margin-top:18px" class="btn btn-light">Delete Questions</a>
            <a href="manage_users.php" style="margin-top:18px" class="btn btn-light">Delete User</a>
        </nav>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>