<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/6e5f8a633a.js" crossorigin="anonymous"></script>
    <title>Admin</title>
</head>
<body >
<div class="header">
        <ul>
            <img src="avenger.png" alt="" height="50px" width="50px">
            <h1>A.i.m shopping</h1>
            <li><i class="fas fa-home"></i>   Home</li>
            <li><i class="fas fa-store"></i><a href="pricing.html"> Pricing</a></li>
            <li>Faqs</li>
            <li>Benefits</li>
            <li><a href="admin.php"><i class="fas fa-lock"></i>   Admin </a></li>
            <li>Register</li>
        
        </ul>
    </div>
<div class="admin">
        <form action="">
            <button type="button">Admin Login</button>
            <button type="button">Register</button>
            <h1>Admin Login</h1>
            <input type="text" name="email" placeholder=" Login id"><br>
            <input type="text" name="password" placeholder="Password"><br>
            <button type="submit" class="login-btn" >LOGIN</button>
            <p>Forget Password?</p>
            <p>Do Not have an account?  Signup</p>
        </form>
    </div>

    <div class="admin-signup">
        <form action="">
            <h1>Admin Signup</h1>
            <input type="text" name="name" placeholder="Full Name"><br>
            <input type="text" name="dob" placeholder="Date of Birth"><br>
            <input type="text" name="email" placeholder="Email"><br>
            <input type="text" name="username" placeholder="Username"><br>
            <input type="text" name="login_id" placeholder="Login Id"><br>
            <input type="text" name="password" placeholder="Password"><br>
            <input type="text" name="conform_pass" placeholder="Conform Password"><br>
            <button type="submit" class="signup-btn" >Sign Up</button>
            <button type="submit" class="login-btn" >Login</button>
        </form>
    </div>
</body>
</html>