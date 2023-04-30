<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="media/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
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
        margin-bottom: 1rem;
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

    .password-container {
        position: relative;
    }

    .password-container input[type="password"],
    .password-container input[type="text"] {
        width: 100%;
        padding: 12px 36px 12px 12px;
        box-sizing: border-box;
    }

    .password-container .fa-eye {
        position: absolute;
        top: 28%;
        right: 4%;
        cursor: pointer;
        color: rgb(73, 71, 71);
    }
    </style>

</head>

<body>
    <main class="h-100 center d-flex align-items-center justify-content-center">
        <div class="card container shadow text-secondary">
            <div class="card-item">
                <div class="card-header">
                    <h1 class="text-secondary" id="title">Create or Log in to your account</h1>
                </div>
                <div class="card-body log-in">
                    <form id="login-form">
                        <div class="d-flex justify-content-center mb-5 ">
                            <label for="username-email" class="w-50">
                                <p class="fs-5">Enter your username or email:</p>
                                <input id="username-email" name="username-email" class="form-control"
                                    placeholder="username or email">
                            </label>
                        </div>
                        <div class="d-flex justify-content-center mb-3">
                            <label for="password" class="w-50">
                                <p class="fs-5">Enter your password:</p>
                                <input id="password" name="password" class="form-control" placeholder="password">
                            </label><br />
                        </div>
                        <div class="center d-flex justify-content-center mt-5">
                            <button class="btn btn-success w-25 mx-3" type="submit">Log In</button>
                            <button class="btn btn-primary w-25 mx-3" type="button" onclick="ShowSignIn()">Sign
                                Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
<script>
function ajax_post() {}
// Attach an event listener to the form submit button
$('#submit-button').click('click', function(event) {
    // Prevent the default form submission
    event.preventDefault();

    // Send an AJAX request to the server
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
        if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
            var response = xmlhttp.responseText;
        }
    };
    xmlhttp.open("POST", "db_donation.php", true);
    xmlhttp.send(new FormData(event.target));

});
</script>

<script>
(function() {
    'use strict';

    const forms = document.querySelectorAll('.needs-validation');

    Array.from(forms).forEach(function(form) {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            } else {
                validateInputs(event);
            }
            form.classList.add('was-validated');
        });
    });

    function validateInputs(event) {
        const usernameInput = document.getElementById('username');
        const fnameInput = document.getElementById('fname');
        const lnameInput = document.getElementById('lname');
        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');
        const password2Input = document.getElementById('password2');

        const usernameRegex = /^[a-zA-Z0-9_]{5,}$/;
        const nameRegex = /^[a-zA-Z\s']+$/;
        const emailRegex = /^\S+@\S+\.\S+$/;
        const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d@$!%*?&]{8,}$/;


        let isValid = true;

        if (!usernameRegex.test(usernameInput.value.trim())) {
            usernameInput.classList.add('is-invalid');
            isValid = false;
        } else {
            usernameInput.classList.remove('is-invalid');
        }

        if (!nameRegex.test(fnameInput.value.trim())) {
            fnameInput.classList.add('is-invalid');
            isValid = false;
        } else {
            fnameInput.classList.remove('is-invalid');
        }

        if (!nameRegex.test(lnameInput.value.trim())) {
            lnameInput.classList.add('is-invalid');
            isValid = false;
        } else {
            lnameInput.classList.remove('is-invalid');
        }

        if (!emailRegex.test(emailInput.value.trim())) {
            emailInput.classList.add('is-invalid');
            isValid = false;
        } else {
            emailInput.classList.remove('is-invalid');
        }

        if (!passwordRegex.test(passwordInput.value)) {
            passwordInput.classList.add('is-invalid');
            isValid = false;
        } else {
            passwordInput.classList.remove('is-invalid');
        }

        if (password2Input.value !== passwordInput.value) {
            password2Input.classList.add('is-invalid');
            isValid = false;
        } else {
            password2Input.classList.remove('is-invalid');
        }

        if (!isValid) {
            event.preventDefault();
            event.stopPropagation();
        }
    }

})();
</script>


<script>
function ShowLogIn() {
    current = document.querySelector(".card-body");
    if (current.classList.contains("sign-in")) {
        current.innerHTML = `
        <form id="login-form">
                        <div class="d-flex justify-content-center mb-5 ">
                            <label for="username-email" class="w-50">
                                <p class="fs-5">Enter your username or email:</p>
                                <input id="username-email" name="username-email" class="form-control"
                                    placeholder="username or email">
                            </label>
                        </div>
                        <div class="d-flex justify-content-center mb-3">
                            <label for="password" class="w-50">
                                <p class="fs-5">Enter your password:</p>
                                <input id="password" name="password" class="form-control" placeholder="password">
                            </label><br />
                        </div>
                        <div class="center d-flex justify-content-center mt-5">
                            <button class="btn btn-success w-25 mx-3" type="submit">Log In</button>
                            <button class="btn btn-primary w-25 mx-3" type="button" onclick="ShowSignIn()">Sign
                                Up</button>
                        </div>
                    </form>`;
        $("#title").text("Log in to your account")

        current.classList.replace("sign-in", "log-in");
    }
}

function ShowSignIn() {
    current = document.querySelector(".card-body");
    if (current.classList.contains("log-in")) {
        current.innerHTML =
            `<form id="signup-form" class="row g-3 needs-validation" novalidate action="credentials.php"
                        method="post">
                        <div class="ms-5 d-flex">
                            <label for="fname" class="flex-fill">
                                <p class="fs-5">Enter your first name</p>
                                <input type="text" id="fname" name="fname" class="form-control" placeholder="First name"
                                    required>
                                <div class="invalid-feedback">
                                    *First name should only contain alphabetic characters, spaces, and apostrophes
                                </div>
                            </label>
                            <label for="lname" class="mx-4 flex-fill">
                                <p class="fs-5">Enter your last name</p>
                                <input type="text" id="lname" name="lname" class="form-control" placeholder="Last name"
                                    required>
                                <div class="invalid-feedback">
                                    *Last name should only contain alphabetic characters, spaces, and apostrophes
                                </div>
                            </label>
                        </div>
                        <div class="ms-5 d-flex my-3">
                            <label for="username" class="flex-fill">
                                <p class="fs-5">Enter your username</p>
                                <input type="text" id="username" name="username" class="form-control"
                                    placeholder="Username" required>
                                <div class="invalid-feedback" id="usernameFeedback" style="display: none;">
                                    *Username length should be at least 5 and it must not contain spaces. Only
                                    underscores, alphabetic and numerical values are allowed
                                </div>
                            </label>
                            <label for="email" class="mx-4 flex-fill">
                                <p class="fs-5">Enter your email address</p>
                                <input type="email" id="email" name="email" class="form-control"
                                    placeholder="email@gmail.com" required>
                                <div class="invalid-feedback" id="emailFeedback" style="display: none;">
                                    *Email should be in the format: example@domain.com
                                </div>
                            </label>
                        </div>
                        <div class="ms-5 d-flex">
                            <label for="password" class="flex-fill">
                                <p class="fs-5">Enter your password</p>
                                <div class="password-container">
                                    <input id="password" name="password" class="form-control password-input"
                                        placeholder="Password" type="password" required>
                                    <i class="fa-solid fa-eye toggle-password"></i>
                                </div>
                                <div class="invalid-feedback">
                                    *Password length should be at least 5 and it must contains alphabetic and numerical
                                    values
                                </div>
                            </label>
                            <label for="password2" class="mx-4 flex-fill">
                                <p class="fs-5">Confirm your password</p>
                                <div class="password-container">
                                    <input id="password2" name="password2" class="form-control password-input"
                                        placeholder="Confirm password" type="password" required>
                                    <i class="fa-solid fa-eye toggle-password"></i>
                                </div>
                                <div class="invalid-feedback">
                                    *Password length should be at least 5 and it must contains alphabetic and numerical
                                    values
                                </div>
                            </label>
                        </div>
                        <div>
                            <div class="form-check ms-5 my-3">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                    Agree to terms and conditions
                                </label>
                                <div class="invalid-feedback">
                                    You must agree before submitting.
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <button class="btn btn-success w-25 mx-3" type="button" onclick="ShowLogIn()">Log
                                In</button>
                            <button class="btn btn-primary w-25 mx-3" type="submit" id="submit-button">Sign Up</button>
                        </div>
                    </form>`;
        $("#title").text("Sign up a new account")
        current.classList.replace("log-in", "sign-in");

    }
}
</script>
<script>

</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- <script>
        $(document).ready(function() {
        $('#username, #email').keyup(function(event){
            var username = $('#username').val();
            var email = $('#email').val();
            if (username === "" || email === "") {
            return;
            }
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onload = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                console.log(xmlhttp.responseText); // add console.log statement
                if (xmlhttp.responseText == "User already exists") {
                $('#usernameFeedback').html('This username is already taken').css('display', 'block');
                } else if (xmlhttp.responseText == "Email already used") {
                $('#emailFeedback').html('This email is already used for a different account').css('display', 'block');
                } else if (xmlhttp.responseText == "Username and email are already in use") {
                $('#usernameFeedback').html('This username is already taken').css('display', 'block');
                $('#emailFeedback').html('This email is already used for a different account').css('display', 'block');
                } else {
                $('#usernameFeedback').html('').css('display', 'none');
                $('#emailFeedback').html('').css('display', 'none');
                }
            }
            };
            var url = "userFound.php?username=" + username + "&email=" + email;
            xmlhttp.open("GET", url, true);
            xmlhttp.send();
        });
        });
</script> -->
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

</html>