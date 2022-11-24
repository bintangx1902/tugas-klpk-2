<?php
    session_start();
    if (!empty($_SESSION)) {
        $dec = json_decode($_SESSION['another'], true);
    } else {
          echo "<body>
                <script>
                    alert('kamu belum login!')
                    window.location.replace('./login.html')
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
</head>

<body>
    
    <div class="">
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

    <a href="./_php_/logout.php">Logout</a>
</body>
</html>