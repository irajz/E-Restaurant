<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>
        /* first div style start here */
        body {
            width: 100%;
            margin: 0;
            padding: 0;
        }

        .nav {
            color: black;
            /* border: 1px solid black;  */
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 20px;
            /* overflow: hidden; */
            margin-top: 10px;
            
        }

        .nav a {
            text-decoration: none;
            padding-left: 35px;
            padding-top: 2px;
        }

        .nav a:hover {
            text-decoration: underline;
            text-decoration-color: blue;
        }

        .nav a:visited {
            color:black;
        }

        .nav a:focus {
            color:black;
        }

        .nav a:active {
            text-decoration: underline;
            text-decoration-color: blue;
        }

        input[type="text"] {
            float: right;
            height: 25px;
            margin-top: 10px;
            border-radius: 20px;
            border: 1px solid black;

        }

        input[type="submit"] {
            float: right;
            margin-top: 10px;
            margin-right: 70px;
            border-radius: 20px;
            color: black;
            background-color: rgb(142, 223, 226);
            border: none;
            height: 30px;
            cursor: pointer;
            border: 1px solid black;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 16px;
        }

        
        /* footer style start here */
        .footer {
            background-color: rgb(78, 47, 74);
            color: aliceblue;
            display: grid;
            grid-template-columns: 25% 25% 25% 25%;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            text-align: left;
            padding-left: 150px;
            
        }

        .footer a {
            text-decoration: none;
            color: aliceblue;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 13px;

        }

        .footer a:hover {
            color: rgb(214, 225, 235);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .quantity-controls {
            display: flex;
            justify-content: center;
        }
        .quantity-controls button {
            padding: 5px;
        }

        button {
            color: black;
            background-color: rgb(142, 223, 226);
            border: none;
            height: 30px;
            cursor: pointer;
            border: 1px solid black;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 16px;
        }
     
    </style>

</head>

<body>
    
    <!-- navigation bar -->
    <div class="nav">

        <a href="index.php"><img src="logo1.jpg" alt="logo"></a>
        <a href="index.php">HOME</a>
        <a href="pizza.html">MENU</a>
        <a href="about.html">ABOUT US</a>
        <a href="contact.html">CONTACT US</a>
        <input type="submit" value="Sign In / Register" onclick="gosignIn()">
        <script>
            function gosignIn() {
                window.location.href = "signin.php";
            }
        </script>
        <input type="submit" name="search" id="search" value="Go" style="margin-right: 120px;">
        <input type="text" placeholder="Search..">

    </div>
    <br>
    
    <div>
    <h1>Your Cart</h1>
    
    <table id="cart-table">
        <thead>
            <tr>
                <th>Item</th>
                <th>Price (Rs)</th>
                <th>Quantity</th>
                <th>Total (Rs)</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Items will be dynamically inserted here -->
        </tbody>
    </table>

    <p>Total Price: Rs <span id="total-price">0.00</span></p>

    <script src="cart.js"></script>
    </div>
    
    <!-- <h1><a href="#">Let's place your order now</a></h1> -->
    
    <!-- footer -->
    <div class="footer">
        <div>
            <h3>Order Now</h3>
            <a href="pizza.html">PIZZAS</a><br>
            <a href="pasta.html">PASTAS</a><br>
            <a href="dessert.html">DESSERTS</a><br>
            <a href="beverages.html">BEVERAGES</a>
        </div>

        <div>
            <h3>About</h3>
            <a href="about.html">ABOUT US</a><br>
            <a href="contact.html">FEEDBACK</a><br>
        </div>

        <div>
            <h3>Contact</h3>
            <a href="contact.html">HOTLINE</a><br>
        </div>

        <div>
            <h3>My Account</h3>
            <a href="signin.php">SIGN IN / REGISTER</a><br>
        </div>

        <div style="padding: 0%;">
            <h3>Find Us on Social Media</h3>
            <a href="https://www.facebook.com/" target="_blank"><img src="fb.png" alt="Facebook" width="30px" height="30px"></a>
            <a href="https://www.instagram.com/" target="_blank"><img src="instergram.png" alt="Instergram" width="30px" height="30px"></a>
        </div>
    </div>

</body>

</html>