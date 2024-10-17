<?php
include("connection.php");

if (isset($_POST['submit'])) {

    $name = $_POST["name"];
    $address = $_POST["address"];
    $usersname = $_POST["username"];
    $passwd = $_POST["passwd"];
    $cpasswd = $_POST["confirmedpasswd"];

    if ($passwd !== $cpasswd) {
        echo "<script>alert('Password do not match.');</script>";  
    } else {
        $hashed_passwd = trim(password_hash($passwd, PASSWORD_DEFAULT));
        $hashed_cpasswd = trim(password_hash($cpasswd, PASSWORD_DEFAULT));

        $sql = "INSERT INTO register (name,address,username,password,confirmedpassword) VALUES ('$name','$address','$usersname','$hashed_passwd','$hashed_cpasswd')";

        if ($conn->query($sql)) {
            echo "<script>alert('Registration Successfull.');</script>";
            echo "<script>window.location.href = 'index.php';</script>";
        } else {
            echo "Error" .$sql . "<br>" . $conn->error;
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
    <title>REGISTER</title>
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
    </style>
</head>

<body>
    <div style="margin-top: 35px;">
        <form id="registerForm" action="" method="POST">
            <div class="divp">
                <h3>REGISTER</h3>
                <hr>
                <br>
                <label for="name">NAME</label><br>
                <input type="text" id="name" name="name" class="text" placeholder="Eg-: K. A. I. Oshadha" required><br><br>

                <label for="address">ADDRESS</label><br>
                <input type="text" id="address" name="address" class="text" placeholder="117/B, Kaluaggala, Hanwella" required><br><br>

                <label for="username">USERNAME</label><br>
                <input type="text" id="username" name="username" class="text" placeholder="iraj@23" required><br><br>

                <label for="passwd">PASSWORD</label><br>
                <input type="password" id="passwd" name="passwd" class="text" placeholder="456@#$%fskd" required><br><br>

                <label for="confirmedpasswd">CONFIRM PASSWORD</label><br>
                <input type="password" id="confirmedpasswd" name="confirmedpasswd" class="text" required><br><br>

                <input type="submit" class="buttons" name="submit" style="background-color: rgb(88, 151, 114);" value="REGISTER">

            </div>

        </form>
    </div>
    </div>

</body>

</html>