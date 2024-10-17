<?php
include("connection.php");

if (isset($_POST['save'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['passwd'];
        $cpassword = $_POST['cpasswd'];

        if ($password !== $cpassword) {
            echo "<script>alert('Password do not match.');</script>";  
        } else {
            $hashed_passwd = trim(password_hash($password, PASSWORD_DEFAULT));
            
            $sql = "UPDATE register SET password = '$hashed_passwd' WHERE username = '$username'";
    
            if ($conn->query($sql)) {
                echo "<script>alert('Password Successfully updated.');</script>";
                echo "<script>window.location.href = 'index.php';</script>";
            } else {
                echo "Error" .$sql . "<br>" . $conn->error;
            }
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN-IN</title>
</head>
    <style>
        body {
            margin: 0;
            background-color: rgba(16, 146, 233, 0.863);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .divp {
            margin: auto;
            background-color: rgb(217, 217, 217, 1);
            width: 300px;
            border-radius: 15px;
            padding: 12px;
            
        }

        .innerdiv {
            padding: 0;
            display: inline-block;
            width: 145px;
            border: none;
            vertical-align: middle;

        }


        hr {
            background-color: black;
            height: 1px;

        }

        .text {
            width: 295px;
            height: 20px;
            border: none;
            border-radius: 5px;
        }

        .date {
            width: 140px;
            height: 20px;
            border: none;
            border-radius: 5px;
        }

        .buttons {
            width: 95px;
            height: 30px;
            color: white;
            border: 1px solid black;
            border-radius: 15px;
            cursor: pointer;
        }

        .name {
            background-color: rgba(149, 165, 166, 1);

            font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
            color: black;
            font-size: 25px;
            font-weight: bold;
            padding-left: 15px;
            padding-top: 0;

            float: left
        }

        h3 {
            text-align: center;
        }

        a {
            text-decoration: none;
            color: black;
        }

        a:hover {
            color: rgb(143, 144, 212);
        }
    </style>
<body>
    <div style="margin-top: 35px;">
        <form id="loginForm" method="post" action="">
            <div class="divp">
                <h3>RESET PASSWORD</h3>
                <hr>
                <br>

                <label for="username">USERNAME</label><br>
                <input type="text" id="username" name="username" class="text" placeholder="iraj@23" required><br><br>
    
                <label for="passwd">NEW PASSWORD</label><br>
                <input type="password" id="passwd" name="passwd" class="text" required><br><br>

                <label for="cpasswd">CONFIRM PASSWORD</label><br>
                <input type="password" id="cpasswd" name="cpasswd" class="text" required><br><br>
                                    
                <input type="submit" class="buttons" name="save" style="background-color: rgb(88, 151, 114);" value="SAVE"><br><br>
                
            </div>
        </form>
    </div>

</body>
</html>