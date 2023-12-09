<?php
session_start();

if (isset($_SESSION["id"])){
    header("Location: index.php");
}

if (isset($_POST["submit"])) {
    include("config/config.php");
    $email = @$_POST['email'];
    $password = md5(@$_POST['password']);

    $sql = "select * from member where email='$email' && password='$password'";
    $result = mysqli_query($mysqli, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION["id"] = $row["id"];
        header("Location: ./index.php");
    } else {
        echo "<script>alert('Email atau password salah')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <section class="vh-100 col-xs-5 col-xs-offset-4 ">
        <div class="container py-4 h-100">
            <div class="row" style="margin-top: 100px;">

                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form method="post" action="">
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="email">Email address</label>
                            <input type="email" id="email" class="form-control form-control-lg" name="email" />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" id="password" class="form-control form-control-lg" name="password" />
                        </div>

                        <div class="d-flex justify-content-around align-items-center mb-4">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                                <label class="form-check-label" for="form1Example3"> Remember me </label>
                            </div>
                            <a href="forgot-password">Forgot password?</a>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>