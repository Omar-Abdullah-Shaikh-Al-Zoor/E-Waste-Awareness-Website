let intervalID;
$(document).ready(function() {
    
    $("#start-game").click(function() {
        intervalID = setInterval(displayTime, 30);
    });
        function displayTime() {
            let startTime = Date.now();
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
    });