$(document).ready(function(){
    $("#InfoModal").modal('show');
    $("#start-game").click(gameStart); //add price_updated()
    $("#start-game").click(price_updated);
    $("#restart-game").click(restartGame);
    $("#restart-game").click(gameStart);
    $("#restart-game").click(price_updated);
    $("#purchase").click( function () {
        console.log(price);
        if (price <= 3000) {
            console.log(price);
            stop =1;
            $("#Win-lose-Modal p").text("You won the game");
            $("#Win-lose-Modal p").css({"color":"green"});
            $("#Win-lose-Modal").modal('show');
        }
    });
});
stop =0;
const IMG_ARR =["../media/images/atari_console.png", "../media/images/broken_iphone8.png", "../media/images/broken_samsung.png", "../media/images/broken_smartphone.png", "../media/images/camera.png", "../media/images/gameboy_console.png", "../media/images/headphone.png", "../media/images/ps2_console.png", "../media/images/broken_iphone6.png", "../media/images/broken_phonemini.png", "..media/images/broken_phonemini2.png", "../media/images/broken_tv.png", "../media/images/old_tv.png", "../media/images/broken_videotape.png", "../media/images/broken_iphone.png", "../media/images/broken_printer.png"]
counter = 0;
counters = []
price = parseInt($("#price span").text());

function getRndInteger(min, max) {
    return Math.floor(Math.random() * (max - min) + min);
    }

function restartGame(){
    document.querySelectorAll(".e-wastes img").forEach(img => img.remove());
    price = 4000;
    $("#price span").text(price); 
  
}

function gameStart() {
    console.log("gameStart");
    const eWaste_div = document.querySelector(".e-wastes");
    const drop_div = document.querySelector(".URM");
    const img = create_img(eWaste_div, drop_div);
    console.log("gameStart10");
    eWaste_div.append(img);
    console.log("gameStart11");
    console.log("gameStart12");
    if (!(price >= 5000 || stop === 1)) {
        setTimeout(gameStart, 1000);
    }

}
    
function create_img(eWaste_div, drop_div) {
    console.log("gameStart2");
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
    // img.draggable = true;
    counters.push(id);
    console.log("gameStart3");
    const pos = getRndPosition(eWaste_div);
    console.log("gameStart7");
    img.style.left = (pos.left / window.innerWidth) * 100 + "vw"; // convert pixel left position to viewport units
    console.log("gameStart8");
    img.style.top = pos.top + "px";
    console.log("gameStart9");
    return img;
}
    
function getRndPosition(eWaste_div) {
    console.log("gameStart4");
    const rect = eWaste_div.getBoundingClientRect();
    console.log("gameStart5");
    const top = getRndInteger(rect.top, rect.bottom - 80);
    const left = getRndInteger(0, 680);
    console.log("gameStart6");
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
    else if (price >= 5000){
        $("#Win-lose-Modal p").text("Good luck next time");
        $("#Win-lose-Modal p").css({"color":"red"});
        $("#Win-lose-Modal").modal('show');
    }
}

    

function allowDrop(ev) {
    ev.preventDefault();   //to change default settings from preventing dragging to allow it
}


function drag(ev) {
    ev.dataTransfer.setData("dd", ev.target.id);  // keep draggable element ID in global data collection reserved by the event object
        // Setting public var
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("dd");    //retrive draggable element ID
    ev.target.appendChild(document.getElementById(data)); // adding the draggable element to destination element
    price -= 150;
    $("#price span").text(price); 
}
