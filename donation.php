<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Waste Awareness | Money and E-Waste Donation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="media/css/style.css" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="media/images/logo.png" width="50" height="50" alt="logo">
                </a>
                <span class="navbar-text font-weight-bold">
                    E-Waste
                </span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-main"
                    aria-controls="navbar-main" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar-main">
                    <ul class="navbar-nav m-auto padding-ul text-center">
                        <li class="nav-item active">
                            <a class="nav-link font-weight-bold rounded-2 fs-5" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold rounded-2 fs-5" href="solutions.html">Our Solutions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold rounded-2 fs-5" href="success.html">Success Stories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold rounded-2 fs-5" href="organizations.html">IEMN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold rounded-2 fs-5" href="donation.html">Donate Now</a>
                        </li>
                    </ul>
                    <a class="text-decoration-none link-secondary my-sm-0 me-4 " href="problem_simulation.html">
                        <button class="btn btn-outline-primary" type="button">
                            Problem Simulation Game
                        </button>
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <main class="container mt-5">
        <section class="container mb-5">
            <div class="row  px-3 py-5">
                <h2 class="text-center text-success pb-3">
                    We have partnership with
                </h2>
                <div class="col-md-4 text-center">
                    <a href="https://www.human-i-t.org/" class="bg-white" target="_blank">
                        <button type="button" class="btn" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip"
                            data-bs-placement="top"
                            data-bs-title="Transform Unwanted Technology into Opportunities for People In-Need">
                            <img src="./media/images/human-i-t.png" alt="Human I T logo" class="img-fluid img-hover">
                        </button>
                    </a>
                </div>
                <div class="col-md-4 text-center mt-2">
                    <a href="https://www.itschoolsafrica.org/" target="_blank" class="bg-white a-hover">
                        <button type="button" class="btn" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-custom-class="custom-tooltip"
                            data-bs-title="Provides e-Learning technology to improve life opportunities for school students and local communities in Africa and the UK">
                            <img src="./media/images/itschoolsafrica.png" alt="IT schools Africa logo"
                                class="img-fluid img-hover">
                        </button>
                    </a>
                </div>
                <div class="col-md-4 text-center">
                    <a href="https://comprenew.org" class="bg-white" target="_blank">
                        <button type="button" class="btn" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip"
                            data-bs-placement="top"
                            data-bs-title="Protect businesses, people and the environment from the threat of improperly disposed electronic">
                            <img src="./media/images/comprenew.png" alt="Compurenew logo" class="img-fluid img-hover">
                        </button>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center">
                    <a href="https://www.compudopt.org" target="_blank" class="bg-white">
                        <button type="button" class="btn" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip"
                            data-bs-placement="bottom"
                            data-bs-title="Provide technology access and education to under-resourced youth and their communities.">
                            <img src="./media/images/compudopt.png" alt="Compudopt logo" class="img-fluid img-hover">
                        </button>
                    </a>
                </div>
                <div class="col-md-4 text-center">
                    <a href="https://www.computeraid.org/" class="bg-white" target="_blank">
                        <button type="button" class="btn" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip"
                            data-bs-placement="bottom"
                            data-bs-title="Build a world where everyone has access to technology.">
                            <img src="./media/images/computeraid_logo.png" alt="Computeraid logo"
                                class="img-fluid img-hover">
                        </button>
                    </a>
                </div>
                <div class="col-md-4 text-center mb-5">
                    <a href="https://rrrcomputer.org" class="bg-white" target="_blank">
                        <button type="button" class="btn" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip"
                            data-bs-placement="bottom" data-bs-title="Facilitates School Laptop Donations">
                            <img src="./media/images/RRRComputer.png" alt="RRRComputer logo"
                                class="img-fluid img-hover">
                        </button>
                    </a>
                </div>
            </div>
        </section>
        <div class="card shadow mb-5 rounded-5">
            <div class="card-body">
                <div class="card-header bg-white mb-5 text-center">
                    <h1 class="mb-4">Donate to E-Waste Awareness</h1>
                </div>
                <form id="donation-form" method="POST" action="db_donation.php">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="first-name" class="form-label">First Name*</label>
                            <input type="text" class="form-control rounded-3" id="first-name" name="first-name"
                                required />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="last-name" class="form-label">Last Name*</label>
                            <input type="text" class="form-control rounded-3" id="last-name" name="last-name"
                                required />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="phone-number" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control rounded-3" id="phone-number" name="phone-number" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control rounded-3" id="email" name="email" />
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="address-1" class="form-label" id="address-1-label">Address Line 1</label>
                            <input type="text" class="form-control rounded-3" id="address-1" name="address-1" />
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="address-2" class="form-label" id="address-2-label">Address Line 2</label>
                            <input type="text" class="form-control rounded-3" id="address-2" name="address-2" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="city" class="form-label" id="city-label">City</label>
                            <input type="text" class="form-control rounded-3" id="city" name="city" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="country" class="form-label" id="country-label">Country</label>
                            <input type="text" class="form-control rounded-3" id="country" name="country" />
                        </div>
                        <div class="col-md-12 mt-3">
                            <h2>Donate Money</h2>
                            <hr />
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="donation-amount" class="form-label">Donation Amount*</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" class="form-control" id="donation-amount" name="donation-amount"
                                    required />
                                <span class="input-group-text">USD</span>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="donation-frequency" class="form-label">Donation Frequency*</label>
                            <select class="form-select" id="donation-frequency" name="donation-frequency" required>
                                <option value="">Choose...</option>
                                <option value="once">Once</option>
                                <option value="monthly">Monthly</option>
                                <option value="quarterly">Quarterly</option>
                                <option value="annually">Annually</option>
                            </select>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="card-number" class="form-label">Card Number*</label>
                            <input type="text" class="form-control rounded-3" id="card-number" name="card-number"
                                required />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="expiration-date" class="form-label">Expiration Date*</label>
                            <input type="month" class="form-control rounded-3" id="expiration-date"
                                name="expiration-date" required />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="security-code" class="form-label">Security Code*</label>
                            <input type="number" class="form-control rounded-3" id="security-code" name="security-code"
                                required />
                        </div>
                        <div class="col-md-12 my-3">
                            <h2>Donate an Electronic Device (Optional)</h2>
                            <hr />
                            <p>If you have an electronic device you would like to donate, please fill out the
                                information below:</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="device-type" id="device-type-label" class="form-label">Device Type</label>
                            <select class="form-select" id="device-type" name="device-type">
                                <option value="">Choose...</option>
                                <option value="laptop">Laptop</option>
                                <option value="desktop">Desktop</option>
                                <option value="tablet">Tablet</option>
                                <option value="smartphone">Smartphone</option>
                                <option value="television">Television</option>
                                <option value="camera">Camera</option>
                                <option value="gaming-console">Gaming Console</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="device-condition" class="form-label">Device Condition</label>
                            <select class="form-select" id="device-condition" name="device-condition">
                                <option value="">Choose...</option>
                                <option value="excellent">Excellent (like new)</option>
                                <option value="good">Good (minor scratches or wear)</option>
                                <option value="fair">Fair (moderate wear, scratches, or damage)</option>
                                <option value="poor">Poor (major wear, scratches, or damage)</option>
                                <option value="not-working">Not Working</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="device-brand" class="form-label">Brand</label>
                            <input type="text" class="form-control rounded-3" id="device-brand" name="device-brand" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="device-model" class="form-label">Model</label>
                            <input type="text" class="form-control rounded-3" id="device-model" name="device-model" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="device-age" class="form-label rounded-3">Age (in years)</label>
                            <input type="number" class="form-control rounded-3" id="device-age" name="device-age"
                                min="0" max="99" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="device-description" class="form-label">Description</label>
                            <textarea class="form-control rounded-3" id="device-description" name="device-description"
                                rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary my-3 w-50" id="donate-button">
                            Donate Now
                        </button>
                    </div>
            </div>
            </form>
        </div>
        </div>
    </main>

    <footer class="bg-light text-center text-lg-start">
        <div class="container p-4">
            <div class="row mx-5">
                <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-3">Pages</h5>
                    <ul class="list-unstyled mb-0">
                        <li><a class="text-primary" href="./index.php">Home</a></li>
                        <li><a class="text-primary" href="./solutions.php">Our Solutions</a></li>
                        <li><a class="text-primary" href="./success.php">Success Stories</a></li>
                        <li><a class="text-primary" href="./organizations.php">IEMN</a></li>
                        <li><a class="text-primary" href="./donation.php">Donate Now</a></li>
                        <li><a class="text-primary" href="./problem_simulation.php">Problem Simulation Game</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-md-0 text-center me-5">
                    <h5 class="text-uppercase mb-3">Follow us</h5>
                    <ul class="list-unstyled mb-0 d-flex flex-column justify-content-center align-items-center">
                        <li><a href="https://www.facebook.com"><i class="bi bi-facebook fs-3 text-primary my-2"></i></a>
                        </li>
                        <li><a href="https://twitter.com/"><i class="bi bi-twitter fs-3 text-info"></i></a></li>
                        <li><a href="https://www.linkedin.com/"><i class="bi bi-linkedin fs-3 text-primary"></i></a>
                        </li>
                        <li><a href="https://www.instagram.com/"><i class="bi bi-instagram fs-3 text-warning"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-7 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-2">About us</h5>
                    <p class="text-muted mb-3">We are a dedicated team passionate about creating positive change.
                        With
                        diverse backgrounds and expertise, we collaborate to find innovative solutions to society's
                        pressing issues. Together, we strive towards a sustainable and equitable future for all.</p>
                    <h5 class="text-uppercase mb-2">Contact</h5>
                    <ul class="list-unstyled mb-0">
                        <li><i class="bi bi-geo-alt-fill me-2"></i> RIT University - Silicon Oasis, Dubai, UAE</li>
                        <li><i class="bi bi-telephone-fill me-2"></i> +971 50 123 4567</li>
                        <li><i class="bi bi-envelope-fill me-2"></i> info@ewasteawareness.org</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <article>
        <section>
            <div class="modal fade" id="confirmation-modal" tabindex="-1" role="dialog"
                aria-labelledby="confirmation-modal-label" aria-describedby="confirmation-modal-content"
                aria-modal="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="confirmation-modal-label">Confirm Donation</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="confirmation-modal-content">
                            <p>Your donation exceeds $1000. Are you sure you want to proceed?</p>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                    id="cancel-donation">Cancel</button>
                                <button type="button" class="btn btn-primary" id="confirm-donation-button">Confirm
                                    Donation</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <section>
                <div class="modal fade" id="donation-modal" tabindex="-1" role="dialog"
                    aria-labelledby="donation-modal-label" aria-describedby="donation-modal-content" aria-modal="true">
                    <div class="modal-dialog">
                        <div class="modal-content" id="modalOutput">
                            <div class="modal-header">
                                <div class="modal-title">
                                    <h2>Your Donation was Received</h2>
                                </div>
                            </div>
                            <div class="modal-body">
                                <p>We express our gratitude for your generous donation towards the reduction of the
                                    impact of e-waste and the promotion of sustainability. Your commitment to making
                                    a positive impact on our environment is highly appreciated. Rest assured that
                                    your donation will be channeled to a reputable organization with the
                                    necessary expertise to utilize it effectively in minimizing the impact of
                                    e-waste. Thank you once again for
                                    your valued support!</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                    id="donation-modal-button">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </article>
    <script>
    $(document).ready(function() {
        function disableInputs(boolean) {
            $("#device-condition").prop("disabled", boolean);
            $("#device-brand").prop("disabled", boolean);
            $("#device-model").prop("disabled", boolean);
            $("#device-age").prop("disabled", boolean);
            $("#device-description").prop("disabled", boolean);
        };
        disableInputs(true);

        function updateRequiredFields() {
            if ($("#device-type").val() !== "") {
                $("#address-1").prop("required", true);
                $("#city").prop("required", true);
                $("#country").prop("required", true);
                disableInputs(false);
            } else {
                $("#address-1").prop("required", false);
                $("#city").prop("required", false);
                $("#country").prop("required", false);
                disableInputs(true);
            }
        }

        function ajax_post() {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onload = function() {
                if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                    var response = xmlhttp.responseText;
                    if (response == "Donation received successfully") {
                        setTimeout(function() {
                            $("#modalOutput").html(`
                        <div class="modal-header">
                            <div class="modal-title">
                                <h2 class="text-success">Your Donation was Received</h2>
                            </div>
                        </div>
                        <div class="modal-body">
                            <p>We express our gratitude for your generous donation towards the reduction of the impact of e-waste and the promotion of sustainability. Your commitment to making a positive impact on our environment is highly appreciated. Rest assured that your donation will be channeled to a reputable organization with the necessary expertise to utilize it effectively in minimizing the impact of e-waste. Thank you once again for your valued support!</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="donation-modal-button">Close</button>
                        </div>
                    `);
                            $("#donation-modal").modal("toggle");
                        }, 50);
                        $("#donation-form input, #donation-form select, #donation-form textarea").val(
                            "");
                        disableInputs(true);
                    } else {
                        setTimeout(function() {
                            $("#modalOutput").html(`
                        <div class="modal-header">
                            <div class="modal-title">
                                <h2 class="text-danger">Oops, there was an Error</h2>
                            </div>
                        </div>
                        <div class="modal-body">
                            <p>We apologize, but there was an error processing your donation. Please try again later or contact us if the problem persists. Thank you for your understanding.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="donation-modal-button">Close</button>
                        </div>
                    `);
                            $("#donation-modal").modal("toggle");
                        }, 50);
                    }
                }


            }
            xmlhttp.open("POST", "db_donation.php", true);
            xmlhttp.send(new FormData(event.target));
        }


        $("#device-type").change(function() {
            updateRequiredFields();
        });
        $("#donation-form").submit(function(event) {
            event.preventDefault();
            if (parseInt($("#donation-amount").val()) > 1000) {
                $("#confirmation-modal").modal("show");
            } else {
                ajax_post();
                //$('#donation-form').unbind('submit').submit();
            }
        });

        $("#confirm-donation-button").click(function() {
            ajax_post();
            return false;
        });

        $("#cancel-donation").click(function() {
            $("#confirmation-modal").modal("hide");
            return false;
        });

        const forms = document.querySelectorAll(".needs-validation");
        Array.prototype.slice.call(
                forms)
            .forEach(function(form) {
                form.addEventListener("submit", function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add("was-validated");
                }, false);
            });

        var tooltipTriggerList = [].slice.call(document.querySelectorAll(
            '[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });


    });
    </script>


</body>

</html>