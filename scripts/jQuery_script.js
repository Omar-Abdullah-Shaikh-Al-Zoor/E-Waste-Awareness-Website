$(document).ready(function(){
    $('#InfoModal').modal('show', {backdrop: 'static'});
    $("#start-game").click(gameStart);
    $("#start-game").click(price_updated);
    $("#restart-game").click(restartGame);
    $("#restart-game").click(gameStart);
    $("#restart-game").click(price_updated);
    $("#purchase").click( function () {
        if (price <= 3000) {
            stop = 1;
            $("#Win-lose-Modal p").text("You won the game");
            $("#Win-lose-Modal p").css({"color":"green"});
            $("#Win-lose-Modal").modal('show', {backdrop: 'static'});
        }
    });
});
stop = 0;
counter = 0;
const IMG_ARR =["../media/images/broken_keyboard.png","../media/images/atari_console.png", "../media/images/broken_samsung.png", "../media/images/broken_smartphone.png", "../media/images/camera.png", "../media/images/gameboy_console.png", "../media/images/headphone.png", "../media/images/ps2_console.png", "../media/images/broken_iphone6.png", "../media/images/broken_phonemini.png", "../media/images/broken_tv.png", "../media/images/old_tv.png", "../media/images/broken_videotape.png", "../media/images/broken_iphone.png", "../media/images/broken_printer.png"]
price = parseInt($("#price span").text());

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
    price -= 150;
    $("#price span").text(price); 
}





