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
                            <a href="index.html" class="text-white text-decoration-none">
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
        <script src="scripts/jQuery_script.js"></script>
        <script src="scripts/timer.js">
        </script>
        <script></script>
    </body>
</html>
