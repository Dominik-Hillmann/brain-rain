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
function setRowHeight(imgArr, howHigh)
{
   for(var i = 0; i < imgArr.length; i++)
   {
      imgArr[i].style.height = howHigh + "px";
   }
}

// changes heights of imgs in row until they have wantedWidth
function setHeightsUntilWidth(imgArr, wantedWidth)
{
   if(widthAllImgsInRow(imgArr) <= wantedWidth)
   {
      for(var pixels = 80; widthAllImgsInRow(imgArr) <= wantedWidth; pixels++)
      {
         setRowHeight(imgArr, pixels);
      }
   }
   else // if already bigger than wantedWidth
   {
      for(var pixels = widthAllImgsInRow(imgArr); widthAllImgsInRow(imgArr) > wantedWidth; pixels--)
      {
         setRowHeight(imgArr, pixels);
      }
   }
}

// basic variable that is going to be worked with, contain on row of imgs at once in loop
var allRows = document.getElementsByClassName("row");
const WIDTH = 600; // how wide are img rows going to be?
for(var row = 0; row < allRows.length; row++)
{
   console.log(row, " 1: ", widthAllImgsInRow(allRows[row].getElementsByTagName("img")));
   setHeightsUntilWidth(allRows[row].getElementsByTagName("img"), WIDTH);
   console.log(row, " 2: ", widthAllImgsInRow(allRows[row].getElementsByTagName("img")));
}
