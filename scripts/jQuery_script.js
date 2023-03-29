$(document).ready(function(){
    $("#InfoModal").modal('show');
    $("#start-game").onclick(gameStart()); //add price_updated()
    $("#restart-game").onclick();
    $("#purchase").onclick( function () {
        console.log(price);
        if (price <= 3000) {
            console.log(price);
            $("#Win-lose-Modal p").text("You won the game");
            $("#Win-lose-Modal p").css({"color":"green"});
            $("#Win-lose-Modal").modal('show');
        }
    });
})
const IMG_ARR =["../media/images/airpods.png", "../media/images/atari_console.png", "../media/images/broken_iphone8.png", "../media/images/broken_samsung.png", "../media/images/broken_smartphone.png", "../media/images/camera.png", "../media/images/ipad.png", "../media/images/gameboy_console.png", "../media/images/headphone.png", "../media/images/laptop.png", "../media/images/ps2_console.png", "../media/images/broken_iphone6.png", "../media/images/broken_phonemini.png", "../media/images/broken_phonemini2.png", "../media/images/broken_tv.png", "../media/images/old_tv.png", "../media/images/broken_videotape.png", "../media/images/broken_iphone.png", "../media/images/printer.png"]
counter = 0;
counters = []
price = parseInt($("#price span").text());

function getRndInteger(min, max) {
    return Math.floor(Math.random() * (max - min) ) + min;
}
function getRndInteger2(min, max) {
    return Math.floor(Math.random() * (max - min) );
}

function gameStart() {
    box = document.querySelector(".e-wastes div");
    img = img_create(random);
    
    $(".e-wastes div").append(img);
    // counters.append("img"+counter);
    // counter++;
    setTimeout(gameStart, 2000);
}
function create_img(random) {
    random = getRndInteger(0,18); //random selection of images
    img = document.createElement("img");
    img.src = IMG_ARR[random];
    img.backgroundColor = "white";
    // img.id = "drag"+counter;
    //img.setAttribute("draggable", "true");
    //img.setAttribute("ondragstart", "drag(event)");
    // img.setAttribute("id", "id=\"img"+counter+"\"");
    img.style.top = getRndInteger2(img.height, box.offsetHeight) + "px";
    img.style.left = getRndInteger2(img.height, box.offsetWidth)+ "px";
    return img;
    
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
