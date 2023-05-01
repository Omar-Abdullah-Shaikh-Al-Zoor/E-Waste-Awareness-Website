<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Waste Awareness |Log-in & Sign-up</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="media/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <style>
    html,
    body {
        height: 100%;
        background-color: #f8f8f8;
        /* a little lighter than the previous background color */
    }

    .card {
        background-color: #fff;
        border-radius: 10px;
    }

    .card-header {
        background-color: #f5f5f5;
        border-radius: 10px 10px 0 0;
        padding: 1rem;
    }

    .card-body {
        padding: 2rem;
    }

    label {
        font-weight: 600;
        font-size: 1rem;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        border: none;
        border-radius: 8px;
        padding: 8px 12px;
        width: 100%;
        font-size: 1rem;
    }

    button {
        border-radius: 8px;
        font-weight: 600;
        font-size: 1rem;
    }

    .btn-success {
        background-color: #1abc9c;
        border-color: #1abc9c;
    }

    .btn-primary {
        background-color: #3498db;
        border-color: #3498db;
    }

    .text-secondary {
        color: #6c757d;
    }
label {
    margin-bottom: .5rem;
    text-align: left;
    display: block;
    letter-spacing: 2px;
    color: #adb5bd;
}

.form-control {
    border: none;
    background: none;
    border-bottom: 2px solid rgba(0, 0, 0, 0.2);
    transition: border-color .4s ease-out;
    border-radius: 0;
}

.form-control:active,
.form-control:focus,
.btn.focus,
.btn:focus {
    outline: none;
    box-shadow: none;
    border-color: black;
}

.form-control.valid {
    border-color: green;
}

.form-control.invalid {
    border-color: red;
}

.form-control + small {
    color: red;
    opacity: 0;
    height: 0;
    transition: opacity .4s ease-out;
}

.form-control.invalid + small {
    opacity: 1;
    height: auto;
    margin-bottom: 1.2rem;
    transition: opacity .4s ease-out;
}

.btn:hover {
    color: white;
    background: black;
    transition: all .4s ease-out;
}

</style>
</head>

<body>
    <main class="h-100 center d-flex align-items-center justify-content-center">
        <div class="card container shadow text-secondary">
            <div class="card-item">
                <div class="card-header">
                    <h1 class="text-secondary text-center" id="title">Log-in to your account</h1>
                </div>
                <div class="card-body log-in" id="CardBody">
                <form id="login-form">
                        <div class="d-flex justify-content-center mb-5 ">
                            <label for="username_login" class="w-50">
                                <p class="fs-5">Enter your username:</p>
                                <input id="username_login" name="username_login" class="form-control"
                                    placeholder="username or email" required>
                            </label>
                        </div>
                        <div class="d-flex justify-content-center mb-3">
                            <label for="password_login" class="w-50">
                            <p class="fs-5">Enter your password</p>
                                <div class="order-1 input-group d-flex flex-nowrap">
                                    <input id="password_login" name="password_login" class="form-control password-input flex-grow-1"
                                    placeholder="Enter your password" type="password" required>
                                    <span class="input-group-text h-75" style="z-index: 100;">
                                        <i class="fa fa-eye" id="togglePassword" style="cursor: pointer;"></i>
                                    </span>
                                </div>
                            </label><br />
                        </div>
                        <div id="login-message" class="text-center"></div>
                        <div class="center d-flex justify-content-center mt-5">
                            <button class="btn btn-success w-25 mx-3" type="submit">Log In</button>
                            <button class="btn btn-primary w-25 mx-3" type="button" id="sign-up">Sign
                                Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>


<script>
    $(document).ready(function() {
        $(document).ready(function() {
        $("#sign-up").click(function (){
            window.location.href = "register.php";
        });
    
        'use strict';
        function ajax_post(event) {
            event.preventDefault();
                let xmlhttp = new XMLHttpRequest();
                xmlhttp.onload = function() {
                    if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                        let response = xmlhttp.responseText;
                        if (response === "username not found") {
                            $("#login-message").html("<div class='d-flex justify-content-center'><span class='fs-5 text-danger text-center'>username not found</span></div>");
                            $("#login-message").show();
                            setTimeout(function() {
                                $("#login-message").hide();
                            }, 2500);
                        } else if (response === "incorrect password") {
                            $("#login-message").html("<div class='d-flex justify-content-center'><span class='fs-5 text-danger text-center'>Incorrect password</span></div>");
                            $("#login-message").show();
                            setTimeout(function() {
                                $("#login-message").hide();
                            }, 2500);
                        } else if (response === "success login") {
                            $("#login-message").html("<div class='d-flex justify-content-center'><span class='fs-5 text-success text-center'>successful Login</span></div>");
                            $("#login-message").show();
                            setTimeout(function() {
                                $("#login-message").hide();
                            }, 3000);
                            setTimeout(function() {
                                window.location.href = "./index.php";
                            }, 2000);
                        } 
                    }
                };
                xmlhttp.open("POST", "database_DPO/db_login.php", true);
                xmlhttp.send(new FormData(event.target));
            } 
        

        // const forms = document.querySelectorAll('.needs-validation');
        $("#login-form").submit(function(event) {
            event.preventDefault();
            ajax_post(event);
        });
            });
        });
</script>



<script>
const passwordInputs = document.querySelectorAll(".password-input");
const togglePasswordButtons = document.querySelectorAll(".toggle-password");

togglePasswordButtons.forEach(function(button) {
    
    button.addEventListener("click", function() {
        const passwordInput = this.previousElementSibling;
        const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
        passwordInput.setAttribute("type", type);
        this.classList.toggle("fa-eye-slash");
    });
});
</script>
<script>
    function togglePassword(passwordEl, toggleEl) {
        toggleEl.addEventListener("click", function () {
            // toggle the type attribute
            const type = passwordEl.getAttribute("type") === "password" ? "text" : "password";
            passwordEl.setAttribute("type", type);
            // toggle the eye icon
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
    }
    const passwords = document.querySelectorAll("input[type='password']");
    const toggles = document.querySelectorAll(".fa-eye");

    for (let i = 0; i < passwords.length; i++) {
        togglePassword(passwords[i], toggles[i]);
    }
</script>

</html>