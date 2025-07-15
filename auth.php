<?php
// Database connection
$host = "localhost";
$db = "wellness_users";
$user = "root"; // your MySQL username (default is root for XAMPP)
$pass = "";     // your MySQL password (default is blank for XAMPP)

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Registration
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'], $_POST['email'], $_POST['password'])) {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Check if email already exists
    $check = $conn->query("SELECT * FROM users WHERE email='$email'");
    if ($check->num_rows > 0) {
        echo "<script>alert('Email already exists!'); window.history.back();</script>";
        exit();
    }

    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
    if ($conn->query($sql)) {
        echo "<script>alert('Registered successfully! Please log in.'); window.location.href='".$_SERVER['PHP_SELF']."';</script>";
    } else {
        echo "<script>alert('Registration failed.'); window.history.back();</script>";
    }
    exit();
}

// Login
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login_email'], $_POST['login_password'])) {
    $email = $conn->real_escape_string($_POST['login_email']);
    $password = $_POST['login_password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);
    if ($result && $user = $result->fetch_assoc()) {
        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_email'] = $user['email'];
            echo "<script>alert('Login successful!'); window.location.href='homepagephp.php';</script>";
        } else {
            echo "<script>alert('Invalid credentials.'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Invalid credentials.'); window.history.back();</script>";
    }
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Animated Sliding Sign In/Sign Up Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

        * {
            box-sizing: border-box;
        }

        body {
            background-image: url('https://images.unsplash.com/photo-1459664018906-085c36f472af?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: 'Montserrat', sans-serif;
            height: 100vh;
            margin: -20px 0 50px;
        }

        h1 {
            font-weight: bold;
            margin: 0;
            color: white;
        }

        h2 {
            text-align: center;
            color: white;
        }

        p {
            font-size: 14px;
            font-weight: 100;
            line-height: 20px;
            letter-spacing: 0.5px;
            margin: 20px 0 30px;
        }

        span {
            font-size: 12px;
        }

        a {
            color: white;
            font-size: 14px;
            text-decoration: none;
            margin: 15px 0;
        }

        button {
            border-radius: 20px;
            border: 1px solid black;
            background-color: #0F969C;
            color: white;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
        }

        button:active {
            transform: scale(0.95);
        }

        button:focus {
            outline: none;
        }

        button.ghost {
            background-color: transparent;
            border-color: white;
        }

        form {
            background: linear-gradient(to LEFT,  #05161A, #0C7075);;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            text-align: center;
        }

        input {
            background-color: #FBFADA;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
        }

        .container {
            background-color: #294D61;
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
                        0 10px 10px rgba(0,0,0,0.22);
            position: relative;
            overflow: hidden;
            width: 768px;
            max-width: 100%;
            min-height: 480px;
        }

        .form-container {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }

        .sign-in-container {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .container.right-panel-active .sign-in-container {
            transform: translateX(100%);
        }

        .sign-up-container {
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
        }

        .container.right-panel-active .sign-up-container {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: show 0.6s;
        }

        @keyframes show {
            0%, 49.99% {
                opacity: 0;
                z-index: 1;
            }
            50%, 100% {
                opacity: 1;
                z-index: 5;
            }
        }

        .overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: transform 0.6s ease-in-out;
            z-index: 100;
        }

        .container.right-panel-active .overlay-container {
            transform: translateX(-100%);
        }

        .overlay {
            background: linear-gradient(to right,  #072E33, #0C7075);
            color: white;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .container.right-panel-active .overlay {
            transform: translateX(50%);
        }

        .overlay-panel {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            text-align: center;
            top: 0;
            height: 100%;
            width: 50%;
        }

        .overlay-left {
            transform: translateX(-20%);
        }

        .container.right-panel-active .overlay-left {
            transform: translateX(0);
        }

        .overlay-right {
            right: 0;
            transform: translateX(0);
        }

        .container.right-panel-active .overlay-right {
            transform: translateX(20%);
        }

        .social-container a {
            border: 1px solid white;
            border-radius: 50%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin: 0 5px;
            height: 40px;
            width: 40px;
        }

        /* Added role selection styles */
        .role-selection {
            display: flex;
            width: 100%;
            margin: 8px 0;
        }

        .role-option {
            flex: 1;
            padding: 12px;
            text-align: center;
            background-color: rgba(251, 250, 218, 0.3);
            color: white;
            cursor: pointer;
            transition: all 0.3s;
        }

        .role-option:first-child {
            border-radius: 20px 0 0 20px;
        }

        .role-option:last-child {
            border-radius: 0 20px 20px 0;
        }

        .role-option.selected {
            background-color: #FBFADA;
            color: #05161A;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2>Login / Sign Up Form</h2>
<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form method="post">
            <h1>Create Account</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <input type="text" name="name" placeholder="Name" required />
            <input type="email" name="email" placeholder="Email" required />
            <input type="password" name="password" placeholder="Password" required />
            <button>Sign Up</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form method="post">
            <h1>Login</h1>
            <div class="social-container">
                <a href="https://www.facebook.com/" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.google.com/" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="https://www.fa-linkedin-in.com/" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <input type="email" name="login_email" placeholder="Email" required />
            <input type="password" name="login_password" placeholder="Password" required />
            <button>Login</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <button class="ghost" id="signIn">Login</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <button class="ghost" id="signUp">Sign Up</button>
            </div>
        </div>
    </div>
</div>

<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.onclick = () => container.classList.add('right-panel-active');
    signInButton.onclick = () => container.classList.remove('right-panel-active');
</script>

</body>
</html>