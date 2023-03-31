$(document).ready(function(){
    $("#InfoModal").modal('show');
    $("#start-game").click(gameStart); //add price_updated()
    $("#restart-game").click();
    $("#purchase").click( function () {
        console.log(price);
        if (price <= 3000) {
            console.log(price);
            $("#Win-lose-Modal p").text("You won the game");
            $("#Win-lose-Modal p").css({"color":"green"});
            $("#Win-lose-Modal").modal('show');
        }
    });
});
const IMG_ARR =["../E-Waste-Awareness-Website/media/images/atari_console.png", "../E-Waste-Awareness-Website/media/images/broken_iphone8.png", "../E-Waste-Awareness-Website/media/images/broken_samsung.png", "../E-Waste-Awareness-Website/media/images/broken_smartphone.png", "../E-Waste-Awareness-Website/media/images/camera.png", "../E-Waste-Awareness-Website/media/images/gameboy_console.png", "../E-Waste-Awareness-Website/media/images/headphone.png", "../E-Waste-Awareness-Website/media/images/ps2_console.png", "../E-Waste-Awareness-Website/media/images/broken_iphone6.png", "../E-Waste-Awareness-Website/media/images/broken_phonemini.png", "../E-Waste-Awareness-Website/media/images/broken_phonemini2.png", "../E-Waste-Awareness-Website/media/images/broken_tv.png", "../E-Waste-Awareness-Website/media/images/old_tv.png", "../E-Waste-Awareness-Website/media/images/broken_videotape.png", "../E-Waste-Awareness-Website/media/images/broken_iphone.png", "../E-Waste-Awareness-Website/media/images/broken_printer.png"]
counter = 0;
counters = []
price = parseInt($("#price span").text());

function getRndInteger(min, max) {
    return Math.floor(Math.random() * (max - min) + min);
    }

function gameStart() {
    console.log("gameStart");
    const eWaste_div = document.querySelector(".e-wastes");
    const img = create_img(eWaste_div);
    console.log("gameStart10");
    eWaste_div.append(img);
    console.log("gameStart11");
    //generatedImagesArray.push(img.id);  // push only the id of the image
    console.log("gameStart12");
    setTimeout(gameStart, 1000);
}
    
function create_img(eWaste_div) {
    console.log("gameStart2");
    const random = getRndInteger(0, IMG_ARR.length-1);
    const img = document.createElement("img");
    const id = "img" + counter;
    img.id = id;
    counter++;
    img.src = IMG_ARR[random];
    img.style.position = "absolute";
    img.style.width = "10vw";
    img.draggable = true;
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
        price += 50;
        $("#price span").text(price);
        setTimeout(price_updated, 3000);
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
    $(".e-wastes div").remove(document.getElementById(data))
}
