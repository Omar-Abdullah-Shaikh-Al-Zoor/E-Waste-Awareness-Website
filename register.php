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
                    <h1 class="text-secondary text-center" id="title">Sign up an account</h1>
                </div>
                <div class="card-body sign-up m-4" id="CardBody">
                <form id="signup-form" class="row g-3 needs-validation h-75 w-100">
                            <div class="ms-5 d-flex">
                                <label for="fname" class="flex-fill">
                                    <p class="fs-5">Enter your First Name</p>
                                    <input type="text" id="fname" name="fname" class="form-control" placeholder="First name"
                                        required>
                                    <small id="lnameMsg" class="form-text">
                                        *First Name accepts characters, spaces, and (') only
                                    </small>
                                </label>
                                <label for="lname" class="mx-4 flex-fill">
                                    <p class="fs-5">Enter your Last Name</p>
                                    <input type="text" id="lname" name="lname" class="form-control" placeholder="Last name"
                                        required>
                                    <small id="lnameMsg" class="form-text">
                                        *Last Name accepts characters, spaces, and (') only
                                    </small>
                                </label>
                            </div>
                            <div class="ms-5 d-flex my-2">
                                <label for="username" class="w-50">
                                    <p class="fs-5">Enter your username</p>
                                    <input type="text" id="username" name="username" class="form-control"
                                        placeholder="Username" required>                             
                                    <small id="usernameMsg" class="form-text">
                                        *Username must be between 5 - 12 characters. Only
                                        characters, numbers (@, _ and - are allowed)
                                    </small>
                                    <div id="usernameExistsMsg" class="text-danger" hidden><br/>username already taken</div>
                                </label>
                                <label for="email" class="mx-4 w-50">
                                    <p class="fs-5">Enter your email address</p>
                                    <input type="email" id="email" name="email" class="form-control"
                                        placeholder="email@gmail.com" required>
                                    <small id="repeated_passwordMsg" class="form-text">
                                        <div id="emailExistsMsg" hidden>Email already taken<br/></div>
                                        *Email should be in the format: example@domain.com
                                    </small>
                                </label>
                            </div>
                            <div class="ms-5 mt-0 d-flex">
                            <label for="password" class="w-50">
                                <p class="fs-5">Enter your password</p>
                                <div class="password-container d-flex flex-wrap">
                                    <small id="passwordMsg" class="form-text order-2 me-2" style="color: red; display: none;">
                                        *Password must be alphanumeric, 8 - 20 characters (@, _ and - are allowed).
                                    </small>
                                    <div class="order-1 input-group d-flex flex-nowrap">
                                    <input id="password" name="password" class="form-control password-input" placeholder="Password" type="password" required>
                                    <span class="input-group-text h-75" style="z-index: 100;">
                                        <i class="fa fa-eye" id="togglePassword" style="cursor: pointer;"></i>
                                    </span>
                                    </div>
                                </div>
                                </label>
                                <label for="confirm_password" class="mx-4 w-50">
                                    <p class="fs-5">Confirm your password</p>
                                    <div class="password-container d-flex flex-wrap">
                                            <small id="confirmPasswordMsg" class="form-text order-3 me-2" style="color: red; display: none;">
                                                *Passwords do not match
                                            </small>
                                            <div class="order-1 input-group d-flex flex-nowrap">
                                                <input id="confirm_password" name="confirm-password" class="form-control password-input flex-grow-1"
                                                placeholder="Confirm Password" type="password" required>
                                                <span class="input-group-text h-75" style="z-index: 100;">
                                                    <i class="fa fa-eye" id="togglePassword" style="cursor: pointer;"></i>
                                                </span>
                                            </div>
                                    </div>
                                </label>
                            </div>
                            <div>
                                <div class="form-check ms-5 my-3">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">
                                        Agree to terms and conditions
                                    </label>
                                </div>
                            </div>
                            <div id="signup-message" class="text-center"></div>
                            <div class="d-flex justify-content-center mt-4">
                                <button class="btn btn-success w-25 mx-3" type="button" id="log-in">Log
                                    In</button>
                                <button class="btn btn-primary w-25 mx-3" type="submit">Sign Up</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>


<script>
    $(document).ready(function() {
        $("#log-in").click(function (){
            window.location.href = "login.php";
        });
    $("#username, #email").keyup(function() {
        let formData = new FormData();
        formData.append('username', $('#username').val());
        formData.append('email', $('#email').val());
        let xmlhttp = new XMLHttpRequest();
        xmlhttp.onload = function() {
            if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                let response = xmlhttp.responseText;
                if(response === "username already exists" ) {
                    $("#usernameExistsMsg").prop("hidden", false);
                    $("#usernameMsg").prop("hidden", true);
                }
                else if (response === "Email already used") {
                    $("#emailExistsMsg").prop("hidden", false);
                    $("#emailMsg").prop("hidden", true);
                }
                else if (response === "username and email are already in use") {
                    $("#usernameExistsMsg").prop("hidden", false);
                    $("#emailExistsMsg").prop("hidden", false);
                    $("#usernameMsg").prop("hidden", true);
                    $("#emailMsg").prop("hidden", true);
                }
                else {
                    $("#usernameExistsMsg").prop("hidden", true);
                    $("#emailExistsMsg").prop("hidden", true);
                    $("#usernameMsg").prop("hidden", false);
                    $("#emailMsg").prop("hidden", false);
                }
            }
        };
        xmlhttp.open("POST", "database_DPO/check_email_username.php", true);
        xmlhttp.send(formData);   
    });
        'use strict';
        function ajax_post(event) {
            event.preventDefault();
                // Send an AJAX request to the server
                let xmlhttp = new XMLHttpRequest();
                xmlhttp.onload = function() {
                    if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                        let response = xmlhttp.responseText;
                        if (response === "success") {
                            $("#signup-message").html("<span class='fs-5 text-success fw-bold'>Successfully Created your Account</span>")
                            $("input").val("");
                        } else if (response === "failed") {
                            $("#signup-message").html("<span class='fs-5 text-danger fw-bold'>Sign-up failed. Could not create your account</span>")
                        }
                    }
                };
                xmlhttp.open("POST", "database_DPO/db_register.php", true);
                xmlhttp.send(new FormData(event.target));
            }

        // const forms = document.querySelectorAll('.needs-validation');
        $("#signup-form").submit(function(event) {
            event.preventDefault();
            let isValid = true;
            inputs.forEach(input => {
                if(input.id !== "confirm_password" && input.type !== "checkbox") {                
                    if (!validate(input, patterns[input.attributes.id.value])) {
                        isValid = false;
                        setTimeout(function() {
                            $("#signup-message").html("<span class='fs-5 text-danger fw-bold'>You must meet inputs requirements</span>");
                        }, 2000);
                    }
                }
            });
            if (isValid) {
                ajax_post(event);
                console.log("hi5");
            }
        });
            });
</script>

<script>
    const inputs = document.querySelectorAll('input');
    const patterns = {
        username: /^[a-zA-Z0-9_]{5,}$/,
        fname: /^[a-zA-Z\s']+$/,
        lname: /^[a-zA-Z\s']+$/,
        email: /^\S+@\S+\.\S+$/,
        password: /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d@$!%*?&]{8,20}$/,
    }
    inputs.forEach(input => {
    input.addEventListener('keyup', e => {
        validate(e.target, patterns[e.target.attributes.id.value]);
    });
    });
    function validate(field, regex) {
    let isValid = true;
    if (field.id !== "confirm_password") {
        if (regex.test(field.value)) {
            field.className = 'form-control valid';
        if (field.id === "password") {
            document.getElementById("passwordMsg").style.display = "none";
        }
        } else {
            field.className = 'form-control invalid';
            if (field.id === "password") {
                document.getElementById("passwordMsg").style.display = "block";
            }
        isValid = false;
        }
    }
    if (field.id === "confirm_password") {
        if (field.value !== document.querySelector("#password").value) {
            field.className = 'form-control invalid';
            document.getElementById("confirmPasswordMsg").style.display = "block";
            isValid = false;
        } else {
            field.className = 'form-control valid';
            document.getElementById("confirmPasswordMsg").style.display = "none";
        }
    }
    if (field.value === "") {
        field.className = 'form-control valid';
        if (field.id === "password") {
            document.getElementById("passwordMsg").style.display = "none";
        }
    }
    return isValid;
    }
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