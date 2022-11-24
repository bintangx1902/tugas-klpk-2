<?php
session_start();

if (!isset($_POST['username']) && !isset($_POST['email']) 
    && !isset($_POST['first_name']) && !isset($_POST['last_name']) 
    && !isset($_POST['pwd']) && !isset($_POST['pwd2'])) 
    {
        echo "<body>
            <script>
                alert('belum ada data ! ')
                window.location.replace('../register.html')
            </script>
        </body>";
}

$username = $_POST['username'];
$email = $_POST['email'];
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$pwd = $_POST['pwd'];
$pwd2 = $_POST['pwd2'];

function set_cookie() {
    global $username, $email, $fname, $lname, $pwd;
    $new = ['username' => $username, 
            'fname' => $fname,
            'lname' => $lname,
            'email' => $email, 
            'password' => $pwd];
    setcookie('user', json_encode($new));
    // $_SESSION['username'] = $username;
    // $_SESSION['email'] = $email;
    // $_SESSION['fname'] = $fname;
    // $_SESSION['lname'] = $lname;
}

if (isset($_POST['submit'])) {
    if (!empty($username) && !empty($email) && !empty($fname) && !empty($lname) && !empty($pwd) && !empty($pwd2)) {
        if ($pwd != $pwd2) {
            echo "<body>
                <script>
                    alert('Password tidak sama');
                    window.location.replace('../register.html');
                </script>
            </body>";
        } else {
            set_cookie();
            header("Location: ../login.html", true, 301);
            die();
        }
    } else {
        echo "<body>
                <script>
                    alert('Isi semua field!');
                    window.location.replace('../register.html');
                </script>
            </body>";
    }
}

?>