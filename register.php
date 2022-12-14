<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="./_php_/register.php" method="post">
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </div>

        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
        </div>

        <div>
            <label for="first_name">first name</label>
            <input type="text" name="first_name" id="first_name">
        </div>

        <div>
            <label for="last_name">last name</label>
            <input type="text" name="last_name" id="last_name">
        </div>

        <div>
            <label for="pwd">Passwod 1</label>
            <input type="password" name="pwd" id="pwd">
        </div>

        <div>
            <label for="pwd2">Passwod 2</label>
            <input type="password" name="pwd2" id="pwd2">
        </div>
        <div>
            <input type="submit" value="Register" name="submit">
            <a href="./login.html">login</a>
        </div>
    </form>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/navbar.css">
</head>

<body id="login_register">
    <?php include "./navbar.php"; ?>
    <section class="my-5">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="./assets/img/clean2.jpg"
                                    alt="login image" class="img-fluid h-100 img-fill"/>
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form method="post" action="./_php_/register_action.php" enctype="multipart/form-data">

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3"></i>
                                            <span class="h1 fw-bold mb-0">Sign Up</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3">Create your account</h5>

                                        <div class="form-floating mb-4">
                                            <input type="text" id="form2Example17" autofocus autocomplete 
                                            name="username" id="username" class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example17">Username</label>
                                        </div>

                                        <div class="form-floating mb-4">
                                            <input type="email" id="form2Example27" name="email" id="email"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example27">Email</label>
                                        </div>

                                        <div class="form-floating mb-4">
                                            <input type="text" id="form2Example27" name="first_name" id="first_name"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example27">First Name</label>
                                        </div>

                                        <div class="form-floating mb-4">
                                            <input type="text" id="form2Example27" name="last_name" id="last_name"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example27">Last Name</label>
                                        </div>

                                        <div class="form-floating mb-4">
                                            <input type="password" id="form2Example27" name="pwd" id="pwd"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example27">Password 1</label>
                                        </div>

                                        <div class="form-floating mb-4">
                                            <input type="password" id="form2Example27" name="pwd2" id="pwd2"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example27">Password 2</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <!-- <button class="btn btn-dark btn-lg btn-block">Sign Up</button> -->
                                            <input type="submit" value="Sign Up" name="submit" class="btn btn-dark btn-lg btn-block">
                                        </div>

                                        <!-- <a class="small text-muted" href="#!">Forgot password?</a> -->
                                        <p class="mb-5 pb-lg-2 text-help" >Have an account? 
                                            <a href="./login.php">Login here</a>
                                        </p>
                                        <a href="#" class="small text-muted">Terms of use.</a>
                                        <a href="#" class="small text-muted">Privacy policy</a>
                                    </form>

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