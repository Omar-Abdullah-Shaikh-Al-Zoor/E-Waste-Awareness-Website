<!doctype html>
<html lang="en">

<head>
    <title>E-Waste Awareness | LeaderBoard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="media/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="media/images/logos.png" width="50" height="50" alt="logo">
                </a>
                <span class="navbar-text font-weight-bold">
                    E-Waste
                </span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-main" aria-controls="navbar-main" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar-main">
                <ul class="navbar-nav m-auto padding-ul text-center mx-auto">
                    <li class="nav-item">
                    <a class="nav-link font-weight-bold rounded-2 fs-5" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link font-weight-bold rounded-2 fs-5" href="about_us.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold rounded-2 fs-5 no_wrap" href="solutions.php">Our Solutions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold rounded-2 fs-5 no_wrap" href="success.php">Success Stories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold rounded-2 fs-5 no_wrap" href="partners.php">Partners</a>
                    </li>
                    <li class="nav-item active">
                            <a class="nav-link font-weight-bold rounded-2 fs-5" href="leaderboard.php">Leaderboard</a>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold rounded-2 fs-5 no_wrap" href="donation.php">Donate Now</a>
                    </li>
                </ul>
                <a class="text-decoration-none link-secondary my-sm-0" href="problem_simulation.php">
                    <button class="btn btn-outline-primary" type="button">
                        Problem Simulation Game
                    </button> 
                </a>
                </div>
            </div>
        </nav>
        </header>
    <main>
        <article>
            <section class="container">
                <h1 class=" text-center text-primary">LeaderBoard</h1>
                <p class="container fs-5 text-secondary">
                    LeaderBoard is a scoreboard showing the players' usernames, the time they took to finish the simulation game, and the
                    and their scores ranked from the highest score to the lowest.
                </p>
            </section>
            <section class="text-center">
                <img src="./media/images/Podium.png" alt="Podium" height="400px">            
            </section>
            <section class="container my-5 shadow-lg d-flex justify-content-center fs-4" id="LeaderBoard-table">
                
            </section>
        </article>
    </main>
</body>
<footer class="bg-light text-center text-lg-start">
        <div class="container p-4">
            <div class="row mx-5">
                <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-3">Pages</h5>
                <ul class="list-unstyled mb-0">
                    <li><a class="text-primary" href="./index.php">Home</a></li>
                    <li><a class="text-primary" href="./about_us.php">About Us</a></li>
                    <li><a class="text-primary" href="./solutions.php">Our Solutions</a></li>
                    <li><a class="text-primary" href="./success.php">Success Stories</a></li>
                    <li><a class="text-primary" href="./partners.php">Partners</a></li>
                    <li><a class="text-primary" href="./donation.php">Donate Now</a></li>
                    <li><a class="text-primary" href="./problem_simulation.php">Problem Simulation Game</a></li>
                </ul>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-md-0 text-center me-5">
                <h5 class="text-uppercase mb-3">Follow us</h5>
                <ul class="list-unstyled mb-0 d-flex flex-column justify-content-center align-items-center">
                    <li><a href="https://www.facebook.com"><i class="bi bi-facebook fs-3 text-primary my-2"></i></a></li>
                    <li><a href="https://twitter.com/"><i class="bi bi-twitter fs-3 text-info"></i></a></li>
                    <li><a href="https://www.linkedin.com/"><i class="bi bi-linkedin fs-3 text-primary"></i></a></li>
                    <li><a href="https://www.instagram.com/"><i class="bi bi-instagram fs-3 text-warning"></i></a></li>
                </ul>
                </div>            
                <div class="col-lg-7 col-md-12 mb-4 mb-md-0">
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
<script>
    $(document).ready(function(){
        (function display_table () {
                xmlhttp = new XMLHttpRequest();
                xmlhttp.onload = function(){
                    if (this.readyState == 4 && this.status == 200) {
                        if (this.responseText === "No records were found") {
                            $("#LeaderBoard-table").html("<div class='text-danger text-center my-5'><span class='fs-4'>"+this.responseText+"</span></div>");
                        }
                        else {
                            $("#LeaderBoard-table").html(this.responseText);
                        }
                    }
                }
            xmlhttp.open("GET", "database_DPO/db_leaderboard.php", true);
            xmlhttp.send();
        })();
    });
</script>
</html>