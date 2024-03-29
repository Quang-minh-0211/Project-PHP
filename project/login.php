<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login-style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container-1">
        <div class="square">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15zM11 2h.5a.5.5 0 0 1 .5.5V15h-1zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1" />
            </svg>
        </div>
        <?php
        if (isset($_POST["submit"])) {
            $fullName = $_POST["fullName"];
            $passWord = $_POST["passWord"];
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE fullName = '$fullName'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (strcmp($passWord, $user["passWord"]) == 0) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: overview.php");
                    die();
                } else {
                    echo "<div class='alert alert-danger'>wrong</div>";
                }
            }
            // $errors = array();
            // if (empty($fullName) or empty($passWord)) {
            //     array_push($errors, "All fields empty");
            // }
            // if (count($errors) > 0) {
            //     foreach ($errors as $error) {
            //         echo "<div class='alert alert-danger'>$error</div>";
            //     }
            // }
        }
        ?>
        <form action="login.php" method="post">
            <div class="input-group mb-3">
                <span class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                    </svg>
                </span>
                <input type="text" name="fullName" class="form-control" placeholder="Username">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="passWord" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="submit" class="btn" value="Login" name="submit">
            </div>
        </form>
    </div>
</body>

</html>