// These three lines adjust the middle line in the file to the summed height of the excerpts
// creates a line because the background of the element is white

var timeline = document.getElementById("timeline");
var line = document.getElementById("line");
line.style.height = (timeline.offsetHeight + 20) + "px";
