<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Home</title>
    <style>
        .btn-xl {
            padding: 10px 20px;
            font-size: 20px;
            border-radius: 10px;
        }
    </style>
</head>


<body>
    <nav class="nav nav-pills justify-content navbar navbar-dark bg-secondary">
        <a class="text-sm-center nav-link active navbar-brand" aria-current="page" href="index.php">Welcome to HTMLhelp</a>
        <a class="nav-link text-sm-center nav-link active navbar-brand" href="logout.php" role="button" aria-expanded="page">Logout</a>
    </nav><br>
    <center>
        <span class="border border-dark" style="display: inline-block;">
            <img src="learn-html-and-css-copy.png" width="360" height="150" alt="Learn HTML and CSS Picture">
        </span>
    </center>
    <h1>
        <center>Thank you for registering</center>
    </h1>
    <h3>
        <center>Click the questions button below to access the list of questions.</center>
    </h3>
    <br>
    <form action="questions.php">
        <center><button type="submit" class="btn btn-primary btn-default btn-xl">Questions</button></center>
    </form>


</body>

</html>