<?php
include "header.php";
?>


<!DOCTYPE html>

<head>
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>

<style>
    .container{
		border:2px solid black;
        border-radius: 10px;
		width:100%;
		max-width:500px; 
		margin: 45px auto;
		padding:10px;
		box-shadow:0px 50px 50px 5px rgba(255,128,,0.9);	
}
    .login-form {
        width: 50%;
        /* height: 50%; */
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        position: absolute;
        color: black;
    }

    .login-form h1 {
        font-size: 40px;
        font-weight: 700;
        margin-bottom: 25px;
        color: #fff;
        text-align: center;
    }

    .login-form p {
        font-size: 20px;
        margin: 15px 0;
    }

    .login-form input {
        font-size: 16px;
        width: 100%;
        padding: 15px 10px;
        border: 1px solid black;
        outline: none;
        border-radius: 5px;
    }

    .login-form button {
        width: 100%;
        margin: 20px 0;
        border-radius: 5px;
        font-weight: bold;
        background: #000;
        border: 1px solid white;
        padding: 10px 15px;
        color: #fff;
        text-decoration: none;
        transition: 0.6s ease;
    }

    .login-form a {
        color: greenyellow;
    }

    .login-form button:hover {

        background-color: #fff;
        color: #000;
    }

    /* ----------------------------------------------------------------------------------------------------------------
                                        container style                                         
    -------------------------------------------------------------------------------------------------------------------*/
   
</style>

<body>

    <div class="login-form">
        <form method="POST" action="login_con.php">
            <div class="container">
                <h1>Login</h1>
                <!-- <p>User Id</p> -->
                <!-- <input type="text" name="cid"><br> -->
                <p>UserName</p>
                <input type="text" name="cname"><br>
                <p>Password</p>
                <input type="password" name="password" minlength="8" maxlength="8"><br>

                <button type="submit" name="login">login</button><br>

                <!-- Forget Password ?<a href="forget_pass.php">click here</a><br> -->
                <!-- Not create account then<a href="signup.php">Signup</a><br> -->
                <!-- If you are admin then<a href="alogin.php"> login</a><br> -->
            </div>
        </form>
    </div>
</body>

</html>