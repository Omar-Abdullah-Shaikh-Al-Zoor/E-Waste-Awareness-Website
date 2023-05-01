<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>E-Waste Awareness | Simulation Game</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="media/css/style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <article>
            <div class="modal fade" id="InfoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="InfoModalLabel">E-waste Problem Simulation</h3>
                        </div>
                        <div class="modal-body">
                            <h4 class="modal-h2">How to play?</h4>
                            <p class="modal-p">You want to buy the new IPhone 14 from the market, which was at the price of 3000 AED.
                            However, because of the raising E-waste issue its price increased to 4000 AED.
                            Watch out for its price not to reach 5000 AED, and try to return its price back to its original state.</p>
                            <h5>To win the game you must</h5>
                            <ul>
                                <li>Drag every electronic device into the Ultimate Recycling Machine to reduce IPhone's price.</li>
                                <li>Press the "Purchase" button to buy new IPhone 14 when its price becomes less than or equal to its original price 3000 AED.</li>
                                <li>Watch out for its price not to increase to 5000 AED, so yo do not lose the game.</li>
                            </ul>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="button" class="btn btn-primary w-75 fs-5" data-bs-dismiss="modal" id="start-game">Start the Game</button>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <main id="main-game">
            <article class="container-fluid row">
                <div class="pt-3 ps-3 fs-5 text-primary">Time Taken: <br/><div id="timer" style="position: sticky; top:0; left:0;">00:00:00</div></div>
                <section class="URM col d-flex align-items-center justify-content-center">
                    <img class="URM-img img-fluid ms-4" src="media/images/recycle-machine.jpg">
                </section>
                <section class="e-wastes col-7">
                </section>
                <section class="iphone col d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <img src="media/images/iphone14.png" alt="iphone 14" class="img-fluid">
                            <h4 id="price" class="my-2 text-bg-primary rounded-3 w-75 ms-4"><span>4000</span> AED</h4>
                            <button class="btn btn-secondary" id="purchase">Purchase</button>
                        </div>
                    </div>
                </section>
            </article>
        </main>
        <div id="login-message"></div>
        <article>
            <div class="modal fade" id="Win-lose-Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="Win-lose-ModalLabel">E-waste Problem Simulation</h3>
                        </div>
                        <div class="modal-body">
                            <p></p>
                        </div>
                        <div class="modal-footer">
                            <a href="index.php" class="text-white text-decoration-none">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="leave-game">Back to Home Screen</button>
                            </a>
                            <a class="text-white text-decoration-none">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="restart-game">Play the Game Again</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article>
            <div class="modal fade" id="fail-Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title text-center text-danger fw-bold" id="fail-ModalLabel">Sorry, You can not Play the E-waste Problem Simulation</h3>
                        </div>
                        <div class="modal-body">
                            <p class="fs-4 text-center">You are not logged-in to any account, you will be directed to log-in in 5 seconds</p>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <!-- <script src="scripts/jQuery_script.js"></script>
        <script src="scripts/timer.js">
        </script> -->

        <script>
            let intervalID;
            let startTime;
            let username = '<?php echo isset($_SESSION["username"]) ? $_SESSION["username"] : "" ?>';
            $(document).ready(function(){
                if (username === "") {
                    $('#fail-Modal').modal('show', {backdrop: 'static'});
                    setTimeout(function() {
                        window.location.href = "./login.php";
                    }, 8000);
                } else {
                    $('#InfoModal').modal('show', {backdrop: 'static'});
                    $("#start-game").click(gameStart);
                    $("#start-game").click(price_updated);
                    $("#start-game").click(function() {
                        startTime = Date.now();
                        intervalID = setInterval(displayTime, 30);

                    });
                        function displayTime() {
                            // Calculate the elapsed time in milliseconds
                            let elapsed = Date.now() - startTime;
                            // Display the elapsed time in milliseconds
                            let milliseconds = elapsed % 1000;
                            let seconds = Math.floor(elapsed / 1000) % 60;
                            let minutes = Math.floor(elapsed / (1000 * 60)) % 60;
                            let timeString = `${minutes}:${seconds}.${milliseconds}`;
                            // Update the timer element with the elapsed time
                            document.getElementById("timer").textContent = timeString;
                        }
                    $("#restart-game").click(restartGame);
                    $("#restart-game").click(gameStart);
                    $("#restart-game").click(price_updated);
                    $("#purchase").click( function () {
                        if (price <= 3000) {
                            clearInterval(intervalID);
                            stop = 1;
                            $("#Win-lose-Modal p").text("You won the game");
                            $("#Win-lose-Modal p").css({"color":"green"});
                            $("#Win-lose-Modal").modal('show', {backdrop: 'static'});
                            sendResults();
                        }
                    });
                }
                
                
            });
            stop = 0;
            counter = 0;
            let recycling_items = 0;
            const IMG_ARR =["../media/images/broken_keyboard.png","../media/images/atari_console.png", "../media/images/broken_samsung.png", "../media/images/broken_smartphone.png", "../media/images/camera.png", "../media/images/gameboy_console.png", "../media/images/headphone.png", "../media/images/ps2_console.png", "../media/images/broken_iphone6.png", "./media/images/broken_phonemini.png", "../media/images/broken_tv.png", "../media/images/old_tv.png", "../media/images/broken_videotape.png", "../media/images/broken_iphone.png", "../media/images/broken_printer.png"]
            let price = parseInt($("#price span").text());

            function getRndInteger(min, max) {
                return Math.floor(Math.random() * (max - min) + min);
                }

            function restartGame(){
                document.querySelectorAll(".e-wastes img").forEach(img => img.remove());
                price = 4000;
                $("#price span").text(price); 
                stop = 0;
            }

            function gameStart() {
                const eWaste_div = document.querySelector(".e-wastes");
                const drop_div = document.querySelector(".URM");
                const img = create_img(eWaste_div, drop_div);
                eWaste_div.append(img);
                if (price >= 5000) {
                    lose_game();
                }
                if (stop !== 1) {
                    setTimeout(gameStart, 1000);
                }
                

            }
                
            function create_img(eWaste_div, drop_div) {
                const random = getRndInteger(0, IMG_ARR.length-1);
                const img = document.createElement("img");
                const id = "img" + counter;
                img.id = id;
                counter++;
                img.src = IMG_ARR[random];
                img.style.position = "absolute";
                img.style.width = "10vw";
                drop_div.setAttribute("ondrop", "drop(event);");
                drop_div.setAttribute("ondragover", "allowDrop(event)");
                img.setAttribute("draggable", "true");
                img.setAttribute("ondragstart", "drag(event)");
                const pos = getRndPosition(eWaste_div);
                img.style.left = (pos.left / window.innerWidth) * 100 + "vw";
                pos.top -= 150;
                img.style.top = pos.top + "px";
                return img;
            }
                
            function getRndPosition(eWaste_div) {
                const rect = eWaste_div.getBoundingClientRect();
                const top = getRndInteger(rect.top, rect.bottom - 80);
                const left = getRndInteger(0, 680);
                return { top, left };
            }   

            function price_updated() {
                if (price < 5000) {
                    price += 100;
                    $("#price span").text(price);
                    if (price <= 3000) {
                        $("#purchase").removeClass("btn-danger");
                        $("#purchase").addClass("btn-success");
                    }
                    else if (price > 3000) {
                        $("#purchase").addClass("btn-danger");
                        $("#purchase").removeClass("btn-success");
                    }
                    if (!(price >= 5000 || stop === 1)) {
                        setTimeout(price_updated, 1500);
                    }
                }
            }

            function lose_game() {
                clearInterval(intervalID);
                stop = 1;
                $("#Win-lose-Modal p").text("Good luck Next time");
                $("#Win-lose-Modal p").css({"color":"red"});
                $("#Win-lose-Modal").modal('show', {backdrop: 'static'});
            }

            function allowDrop(event) {
                event.preventDefault();
            }

            function drag(event) {
                event.dataTransfer.setData("DragDrop", event.target.id);
            }

            function drop(event) {
                event.preventDefault();
                var data = event.dataTransfer.getData("DragDrop");
                var data_element = document.getElementById(data);
                data_element.remove();
                recycling_items ++;
                price -= 150;
                $("#price span").text(price); 
            }

            function sendResults() {
                let formData = new FormData();
                formData.append('username', username);
                formData.append('recycling_items', recycling_items);
                formData.append('price', price);
                formData.append('timer', $('#timer').text());
                xmlhttp = new XMLHttpRequest();
                xmlhttp.onload = function() {
                    console.log("hi7");
                    if (this.readyState == 4 && this.status == 200) {
                        console.log(this.responseText);
                    }
                };
                console.log("hi9");
                xmlhttp.open("POST", "database_DPO/db_gameResults.php", true);
                xmlhttp.send(formData);
            }

        </script>
    </body>
</html>
