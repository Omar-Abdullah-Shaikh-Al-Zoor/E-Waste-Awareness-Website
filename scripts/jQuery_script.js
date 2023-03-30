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
const IMG_ARR =["../media/images/atari_console.png", "../media/images/broken_iphone8.png", "../media/images/broken_samsung.png", "../media/images/broken_smartphone.png", "../media/images/camera.png", "../media/images/ipad.png", "../media/images/gameboy_console.png", "../media/images/headphone.png", "../media/images/ps2_console.png", "../media/images/broken_iphone6.png", "../media/images/broken_phonemini.png", "../media/images/broken_phonemini2.png", "../media/images/broken_tv.png", "../media/images/old_tv.png", "../media/images/broken_videotape.png", "../media/images/broken_iphone.png", "../media/images/broken_printer.png"]
counter = 0;
counters = []
price = parseInt($("#price span").text());

function getRndInteger(min, max) {
    return Math.floor(Math.random() * (max - min) + min);
    }

    function getRndPosition(container) {
        containerRect = container.getBoundingClientRect();
        containerWidth = containerRect.width;
        containerHeight = containerRect.height;
      
        imgWidth = 10; // width of the image in vw
        imgHeight = (imgWidth * containerHeight) / 100; // height of the image in pixels
      
        // get the container's absolute position on the page
        containerTop = containerRect.top + window.scrollY;
        containerLeft = containerRect.left + window.scrollX;
      
        // keep trying random positions until one is found that doesn't overlap with existing images
        while (true) {
          top = getRndInteger(0, containerHeight - imgHeight);
          left = getRndInteger(0, containerWidth - imgWidth);
      
          // check if the new image overlaps with any existing images
          overlaps = false;
          for (i = 0; i < eWaste_div.children.length; i++) {
            otherImg = eWaste_div.children[i];
            if (otherImg == img) {
              continue; // skip comparison with self
            }
            otherImgRect = otherImg.getBoundingClientRect();
            otherImgLeft = otherImgRect.left - containerLeft;
            otherImgTop = otherImgRect.top - containerTop;
            if (
              left < otherImgLeft + otherImgRect.width &&
              left + imgWidth > otherImgLeft &&
              top < otherImgTop + otherImgRect.height &&
              top + imgHeight > otherImgTop
            ) {
              overlaps = true;
              break;
            }
          }
          if (!overlaps) {
            break;
          }
        }
      
        return { top: top + containerTop, left: left + containerLeft };
      }
      


function gameStart() {
    eWaste_div = document.querySelector(".e-wastes");
    img = create_img(eWaste_div);
    eWaste_div.append(img);
    console.log("gameStart");
    // counters.append("img"+counter);
    // counter++;
    setTimeout(gameStart, 1000);
}

function create_img(eWaste_div) {
    console.log("gameStart2");
    random = getRndInteger(0, IMG_ARR.length-1);
    img = document.createElement("img");
    img.src = IMG_ARR[random];
    img.style.position = "absolute";
    img.style.width = "10vw";
     // img.id = "drag"+counter;
    //img.setAttribute("draggable", "true");
    //img.setAttribute("ondragstart", "drag(event)");
    // img.setAttribute("id", "id=\"img"+counter+"\"");
    
    // set the image position randomly within the container
    console.log("gameStart3");

    var pos = getRndPosition(eWaste_div);
    console.log("gameStart7");

    img.style.top = pos.top + "px";
    img.style.left = pos.left + "px";
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
