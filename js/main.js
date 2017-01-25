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

ctx.font = "14px arial";

var length = ctx.measureText(words[0]).width;

wordsBB[0] = {
    x: 0,
    y: 0,
    width: length,
    height: 16
}

var accumLength = length;

for (var i = 1; i < words.length; i++) {
    var length = ctx.measureText(" " + words[i]).width;
    wordsBB[i] = {
        x: accumLength,
        y: 0,
        width: length,
        height: 16
    }
    accumLength += length;
}

ctx.fillText(text, 0, 15);
ctx.lineWidth = 0.50;


function handleMouseMove(e) {
    e.preventDefault();
    var x = parseInt(e.clientX - offsetX);
    var y = parseInt(e.clientY - offsetY);

    for (var i = 0; i < wordsBB.length; i++) {
        var bb = wordsBB[i];
        if (x > bb.x && x < bb.x + bb.width && y > bb.y & y < bb.y + bb.height) {
            ctx.fillStyle="rgba(0, 0, 0, 0.1)";
            ctx.fillRect(bb.x, bb.y, bb.width, bb.height);
            $results.text(words[i]);
            wordsBB.splice(i, 1);
            words.splice(i, 1);         
        }
    }
}

$("#canvas").mousemove(function (e) {
    handleMouseMove(e);
});