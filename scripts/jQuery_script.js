$(document).ready(function(){
    $("#InfoModal").modal('show');
    $("#start-game").onclick(price_updated()); 
})
const IMG_ARR =["media/images/", "media/images/", "media/images/", "media/images/", "media/images/", "media/images/"]
counter = 0;
counters = []
price = parseInt($("#price span").text());

            $(document).ready(function(){
                $("#InfoModal").modal('show');
                $("#start-game").on(click, gameStart);
                $("#buy").on(click, price_check());
            });


            function getRndInteger(min, max) {
                return Math.floor(Math.random() * (max - min) ) + min;
            }

            function gameStart() {
                
                random = getRndInteger(0,9); //random selection of images
                img = img_create()
                $("img").css({
                    left: Math.random() * ($('.e-wastes div').width() - $(this).width()),
                    top: Math.random() * ($('.e-wastes div').height() - $(this).height())
                });
                $(".e-wastes div").appendChild(img);
                
                
                counters.append("img"+counter);
                counter++;
                
            }
            function create_img() {
                img = document.createElement("img");
                img.src = IMG_ARR[random];
                img.id = "drag"+counter;
                img.setAttribute("draggable", "true");
                img.setAttribute("ondragstart", "drag(event)");
                img.setAttribute("id", "id=\"img"+counter+"\"");
                img.style.top =  getRndInteger(0,) + 'px';
                return img;
                
            }

            function price_updated() {
                    console.log(price);
                    if (price < 5000) {
                        price += 50;
                        $("#price span").text(price);
                        setTimeout(price_updated, 3000);
                    }
                    else if (price >= 5000){
                        //console.log("hi");
                        $("#Win-lose-Modal p").text("Good luck next time");
                        $("#Win-lose-Modal p").css({"color":"red"});
                        $("#Win-lose-Modal").modal('show');
                    }
                    
                }
                

            function price_check() {
                if (price <= 3000) {
                    $("#Win-lose-Modal p").text("You won the game");
                    $("#Win-lose-Modal p").css({"color":"green"});
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
                //checking whether the dragged image match the concept by comparing the draggable image id and the destination div ID
                if(ev.target.id=="div1" && data=="drag4")
                    alert("correct");
                else
                if(ev.target.id=="div2" && data=="drag3")
                    alert("correct");
                else
                    if(ev.target.id=="div3" && data=="drag2")
                        alert("correct");
                    else
                        if(ev.target.id=="div4" && data=="drag1")
                            alert("correct");
                        else
                        {
                                alert("incorrect");
                                //return the incorrect image to its original div
                                (document.getElementById("div5")).appendChild(document.getElementById(data));
                        }
            }
