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


// set height of one image
function setImgHeight(img, howHigh)
{
   img.style.height = howHigh + "px";
}


function setlooplessHeight(imgArr, wantedWidth)
{
   var ratio = imgArr[0].offsetHeight / widthAllImgsInRow(imgArr);
   for(var i = 0; i < imgArr.length; i++)
   {
      setImgHeight(imgArr[i], wantedWidth * ratio);
   }
}


// not used! this takes way too much time to load, so setlooplessHeight is the better option
function setHeightsUntilWidth(imgArr, wantedWidth)
{
   var imgArrWidth = widthAllImgsInRow(imgArr); // because of performance problems otherwise
   if(widthAllImgsInRow(imgArr) <= wantedWidth)
   {
      for(var pixels = 0; widthAllImgsInRow(imgArr) <= wantedWidth; pixels++)
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


const WIDTH = 597; // width of all picture in one row

// Timeout because all images should all be loaded beforehand
// sets the same height of all images in one array, way more efficient than setHeightsUntilWidth
setTimeout(function()
{
   // basic variable that is going to be worked with, contain on row of imgs at once in loop
   var allRows = document.getElementsByClassName("row");
   var currentRow;
   for(var row = 0; row < allRows.length; row++)
   {
      currentRow = allRows[row].getElementsByTagName("img");
      setlooplessHeight(currentRow, WIDTH);
      console.log("angepasst");
   }
}, 2000);
