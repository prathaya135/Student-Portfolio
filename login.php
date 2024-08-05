<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login </title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/0efa5d3b58.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>
    <div class="container">
        <?php
            if (isset($_SESSION['status'])) {
                echo $_SESSION['status'];
                unset($_SESSION['status']);
            }
        ?>
        <div class="form-box" >
            <h1 id="title">Sign Up</h1>
            <form method="POST">
                <div class="input-group">
                    <div class="input-field" id="nameField">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" placeholder="name"  name="name"  >
                    </div>
                    
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" placeholder="email"  name="email" required>
                    </div>
                    
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="password" id="password" name="password" required>
                        <i class="fa-solid fa-eye" id="eye"></i>
                    </div>
                    
                    <p class="forgot_pass" id="forgot_pass"><a href="forgot_password.html">Forgot Password ?</a></p>
                    
                </div>
                <div class="btn-field">
                    <button type="submit" class="sign" id="signupBtn" formaction="login2.php">Sign up</button>
                    <!-- <a href="tophome.html">  -->
                        <button type="submit" class="sign" id="signinBtn" class="disable" formaction="tophome.php">Sign in</button>
                    <!-- </a> -->
                </div>
            </form>
        </div>
    </div>

<script>


let signupBtn = document.getElementById("signupBtn");
let signinBtn = document.getElementById("signinBtn");
let nameField = document.getElementById("nameField");
let title = document.getElementById("title");

// for signIn and signUp buttons
signinBtn.onclick = function(){
    nameField.style.maxHeight = "0";
    forgot_pass.classList.remove("forgot_pass");
    title.innerHTML = "Sign In";
    // signupBtn.classList.add("disable");
    // signinBtn.classList.remove("disable");
}

signupBtn.onclick = function(){
    nameField.style.maxHeight = "65px";
    title.innerHTML = "Sign Up";
    forgot_pass.classList.add("forgot_pass");
    // signupBtn.classList.remove("disable");
    // signinpBtn.classList.add("disable");
}

// for show/hide password
const passwordInput = document.querySelector("#password");
const eye = document.querySelector("#eye");

eye.addEventListener("click", function(){
    this.classList.toggle("fa-eye-slash");
    const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
    passwordInput.setAttribute("type", type);
})



</script>

</body>
</html>