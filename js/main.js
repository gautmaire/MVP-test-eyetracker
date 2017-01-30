 var socket;

var lastTenLeftX = [];
var lastTenLeftY = [];
var lastTenRightX = [];
var lastTenRightY = [];

var cursorUpdateRate = 50;
var offsetX= 0;
var offsetY= 0;

var $results = $("#results");
var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
var $canvas = $("#canvas");
var canvasOffset = $canvas.offset();
var offsetX = canvasOffset.left;
var offsetY = canvasOffset.top;

var text = $("p").text();
var words = text.split(" ");
var wordsBB = new Array(words.length);

ctx.font = "30px arial";

var length = ctx.measureText(words[0]).width;

wordsBB[0] = {
    x: 0,
    y: 0,
    width: length,
    height: 50
}

var accumLength = length;

for (var i = 1; i < words.length; i++) {
    var length = ctx.measureText(" " + words[i]).width;
    wordsBB[i] = {
        x: accumLength,
        y: 0,
        width: length,
        height: 50
    }
    accumLength += length;
}

ctx.fillText(text, 0, 30);
ctx.lineWidth = 0.50;

$(document).ready(function(){
    window.onmousemove = function(e){
        offsetX = -1 * (e.clientX-e.screenX);
        offsetY = -1 * (e.clientY-e.screenY);
    };
    socket = io();

    function update() {
        socket.emit('updateRequest', $('#m').val());
        $('#m').val('');
        return false;
    }   
    
    setInterval(update, 1);//Ask server for update every 1ms
    setInterval(updateCursor, cursorUpdateRate);//Refresh the cursor position every "cursorUpdateRate" ms

    function updateCursor(){
        var x = document.getElementById('cursor');
        x.style.position = "absolute";

        var averageLeftX = 0;
        var averageLeftY = 0;
        var averageRightX = 0;
        var averageRightY = 0;
        for(i=0 ; i < lastTenLeftX.length ; i++){
            averageLeftX += lastTenLeftX[i];
        }

        for(i=0 ; i < lastTenLeftY.length ; i++){
            averageLeftY += lastTenLeftY[i];
        }

        averageLeftX = averageLeftX/lastTenLeftX.length;
        averageLeftY = averageLeftY/lastTenLeftY.length;

        var leftX = averageLeftX*screen.width-offsetX;
        var leftY = averageLeftY*screen.height-offsetY;      

        for(i=0 ; i < lastTenRightX.length ; i++){
            averageRightX += lastTenRightX[i];
        }

        for(i=0 ; i < lastTenRightY.length ; i++){
            averageRightY += lastTenRightY[i];
        }

        averageRightX = averageRightX/lastTenRightX.length;
        averageRightY = averageRightY/lastTenRightY.length;

        var rightX = averageRightX*screen.width-offsetX;
        var rightY = averageRightY*screen.height-offsetY;  

        var avgLRX = (rightX+leftX)/2;
        var avgLRY = (rightY+leftY)/2;
        x.style.left = (avgLRX)+'px';
        x.style.top = (avgLRY)+'px';      

        var x = avgLRX;
        var y = avgLRY;
        for(i = 0; i < wordsBB.length; i++)
        {
            var bb = wordsBB[i];
            console.log("X: " + avgLRX);
            console.log("Y: " + avgLRY);
            console.log("WX: " + bb.x);
            console.log("WY: " + bb.y);
            if (x > bb.x && x < bb.x + bb.width && y > bb.y & y < bb.y + bb.height) {
                ctx.fillStyle="rgba(0, 0, 0, 0.1)";
                ctx.fillRect(bb.x, bb.y, bb.width, bb.height);
                console.log(bb.x);
                console.log(bb.y);
                wordsBB.splice(i, 1);
                words.splice(i, 1);
            }   
        }
    };

    //When data received from the server
    socket.on('coordinates', function(leftX, leftY, rightX, rightY){

        lastTenLeftX.unshift(leftX);
        lastTenLeftY.unshift(leftY);

        if(lastTenLeftX.length>cursorUpdateRate){

            tmp = [];
            for(i=0 ; i < cursorUpdateRate ; i++){

                tmp.push(lastTenLeftX[i]);
            }
            lastTenLeftX = tmp;
        }
        
        if(lastTenLeftY.length>cursorUpdateRate){

            tmp = [];
            for(i=0 ; i < cursorUpdateRate ; i++){

                tmp.push(lastTenLeftY[i]);
            }
            lastTenLeftY = tmp;
        }                   
        
        lastTenRightX.unshift(rightX);
        lastTenRightY.unshift(rightY);

        if(lastTenRightX.length>cursorUpdateRate){

            tmp = [];
            for(i=0 ; i < cursorUpdateRate ; i++){
                tmp.push(lastTenRightX[i]);
            }
            lastTenRightX = tmp;
        }
        
        if(lastTenRightY.length>cursorUpdateRate){

            tmp = [];
            for(i=0 ; i < cursorUpdateRate ; i++){
                tmp.push(lastTenRightY[i]);
            }
            lastTenRightY = tmp;
        }
    });
});