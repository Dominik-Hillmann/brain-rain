/* This small program adjusts the images of every category in a way
 * that combined they have the same width.
 * This is done via adjusting the heights of all the pictures in one row. */

// returns the combined width of all images in one row
function widthAllImgsInRow(imgArr)
{
   var widthsCombined = 0;
   for(var imgElement = 0; imgElement < imgArr.length; imgElement++)
   {
      widthsCombined += imgArr[imgElement].offsetWidth;
   }
   return widthsCombined;
}

// sets height of all imgs in one row to "howHigh" pxs
/*function setRowHeight(imgArr, howHigh)
{
   for(var i = 0; i < imgArr.length; i++)
   {
      imgArr[i].style.height = howHigh + "px";
   }
}*/

function setImgHeight(img, howHigh)
{
   img.style.height = howHigh + "px";
}

// changes heights of imgs in row until they have wantedWidth
function setHeightsUntilWidth(imgArr, wantedWidth)
{
   var imgArrWidth = widthAllImgsInRow(imgArr); // because of performance problems otherwise
   if(/*widthAllImgsInRow(imgArr)*/imgArrWidth <= wantedWidth)
   {
      // HIER RELATIONSRECHNUNG EINFÜGEN
      for(var pixels = 0; /*widthAllImgsInRow(imgArr)*/imgArrWidth <= wantedWidth; pixels++)
      {
         setRowHeight(imgArr, pixels);
      }
   }
   else // if already bigger than wantedWidth
   {
      for(var pixels = /*widthAllImgsInRow(imgArr)*/ imgArrWidth; imgArrWidth/*widthAllImgsInRow(imgArr)*/ > wantedWidth; pixels--)
      {
         setRowHeight(imgArr, pixels);
      }
   }
}



function setlooplessHeight(imgArr, wantedWidth)
{

   var ratio = imgArr[0].offsetHeight / widthAllImgsInRow(imgArr);
/*
   var imgStake = [];
   for(var i = 0; i < imgArr.length; i++)
   {
      imgStake.push(imgArr[i].offsetWidth / widthAllImgsInRow(imgArr));
   }
   */
   for(var i = 0; i < imgArr.length; i++)
   {
      setImgHeight(imgArr[i], wantedWidth * ratio);
   }
}

// basic variable that is going to be worked with, contain on row of imgs at once in loop
var allRows = document.getElementsByClassName("row");
const WIDTH = 597; // how wide are img rows going to be?

var currentRow;
for(var row = 0; row < allRows.length; row++)
{
   //console.log(row, " 1: ", widthAllImgsInRow(allRows[row].getElementsByTagName("img")));
   currentRow = allRows[row].getElementsByTagName("img"); // because of performance not in setHeightsUntilWidth()
   setlooplessHeight(currentRow, WIDTH);
   //console.log(row, " 2: ", widthAllImgsInRow(allRows[row].getElementsByTagName("img"))); // to see whether width has changed
}

// Ideen zur Verbesserunng manche Funktionen einmal ausführen, nicht immer in anderen Funktionen
// width aller imgs in einer row in Variable, und diese als Parameter in anderen Funktionen machen
// so wenig Werte im Prozess berechnen lassen wie möglich
// I avoid functions in functions because e.g. widthAllImgsInRow caused performance problems on Chrome everytime it was called n by another function that also had to compute a lot
