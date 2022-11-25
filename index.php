<?php
    session_start();
    if (!empty($_SESSION) && $_SESSION['another']) {
        $dec = json_decode($_SESSION['another'], true);
    } else {
          echo "<body>
                <script>
                    alert('kamu belum login!')
                    window.location.replace('./login.php')
                </script>
            </body>";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body id="login_register">

    <!-- <div class="">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="<?php echo $dec['username']; ?>" readonly>
    </div>

    <div class="">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="<?php echo $dec['email']; ?>" readonly>
    </div>

    <div class="">
        <label for="fname">First Name</label>
        <input type="text" name="fname" id="fname" value="<?php echo $dec['fname']; ?>" readonly>
    </div>

    <div class="">
        <label for="lname">Last Name</label>
        <input type="text" name="lname" id="lname" value="<?php echo $dec['lname']; ?>" readonly>
    </div>

    <a href="./_php_/logout.php">Logout</a> -->
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="./assets/img/clean2.jpg" alt="login image" class="img-fluid h-100 img-fill"/>
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <i class="fas fa-cubes fa-2x me-3"></i>
                                        <span class="h1 fw-bold mb-0">Account</span>
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3">Your account information</h5>
                                    <form>
                                        <div class="form-floating mb-4">
                                            <input type="text" name="username" id="username"
                                                value="<?php echo $dec['username']; ?>" class="form-control" readonly>
                                            <label for="username">Username</label>
                                        </div>
                                        <div class="form-floating mb-4">
                                            <input type="text" name="email" value="<?php echo $dec['email']; ?>"
                                                id="email" class="form-control">
                                            <label for="email">Email</label>
                                        </div>
                                        <div class="form-floating mb-4">
                                            <input type="text" name="first_name" value="<?php echo $dec['fname']; ?>"
                                                id="first_name" class="form-control">
                                            <label for="first_name">First Name</label>
                                        </div>
                                        <div class="form-floating mb-4">
                                            <input type="text" name="lname" value="<?php echo $dec['lname']; ?>"
                                                id="lname" class="form-control">
                                            <label for="lanme">Last Name</label>
                                        </div>
                                    </form>
                                    <a href="./_php_/logout.php" class="btn btn-outline-danger">Log out</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>

</body>

</html>