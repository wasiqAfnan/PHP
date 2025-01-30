<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <!-- Navbar -->

    <ul class="nav justify-content-center">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/php/6_phpAsWebDev.php">HOME</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">About</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
    </li>
    <li class="nav-item">
        <a class="nav-link disabled">Services</a>
    </li>
    </ul>

    <!-- php -->
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Wooh!</strong> Send to database successful email = '. $email.'
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        }
    ?>

    <!-- forms -->

    <form action = "#" method="post" enctype="multipart/form-data" >
        <div class="mb-3" style=" margin-left:50px ;">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name = "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width : 500px;"; >
        </div>
        <div class="mb-3" style=" margin-left:50px ;">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name = "pass" class="form-control" id="exampleInputPassword1" style="width : 400px">
        </div>
        <button type="submit" class="btn btn-primary" style=" margin-left:50px ;">Submit</button>
    </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>