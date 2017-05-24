/* Was mach das Skript hier? */
const INFO_HEIGHT = 150; // height of infoboxes in px
const TIMEOUT = 10; // time between animation frames in ms

// replaces first CSS class of this element with second one
function replaceClass(ele, from, to)
{
   if(ele.classList[0] == from)
   {
      ele.classList.remove(from);
      ele.classList.add(to);
   }
}

// eventHandler: expands the infobox of an image when the cursor enters the element
function expandBox(imgWrapperEle)
{
   return function()
   {
      var belongingImg = imgWrapperEle.getElementsByTagName("img")[0];
      var infoBox = imgWrapperEle.getElementsByClassName("infobox")[0]; // index operator because getElementsByClassName returns array
      if(infoBox == undefined) // because when not first animation frame, it cannot be found via class infobox
      {
         infoBox = imgWrapperEle.getElementsByClassName("startExpanding")[0];
      }

      //console.log(infoBox, infoBox.classList, "HIER");
      replaceClass(infoBox, "infobox", "startExpanding");
      //console.log(infoBox, infoBox.classList, "TADA");
      // change height and width of infobox
      infoBox.style.marginTop = "10px";
      for(var i = 0; i <= INFO_HEIGHT; i++)
      {
         setTimeout(function()
         {
            if(infoBox.offsetHeight <= INFO_HEIGHT)
            {
               infoBox.style.height = (infoBox.offsetHeight + 1) + "px";
            }
         }, TIMEOUT);
      }
      // infobox makes infobox as wide as the image it belongs to
      infoBox.style.width = belongingImg.offsetWidth + "px";
   }
}

// contracts infobox, when cursor leaves
function contractBox(imgWrapperEle)
{
   return function()
   {
      var belongingImg = imgWrapperEle.getElementsByTagName("img")[0];
      var infoBox = imgWrapperEle.getElementsByClassName("startExpanding")[0]; // serach for infoBox by class switched
      if(infoBox == undefined)
      {
         infoBox = imgWrapperEle.getElementsByClassName("infobox")[0];
      }

      function actualContract() // as function because needed a second time further down
      {
         for(var i = INFO_HEIGHT; i >= 0; i--) // animation, if something goes wrong, it is set to 0 at end of function
         {
            setTimeout(function()
            {
               if(infoBox.offsetHeight >= 0)
               {
                  infoBox.style.height = (infoBox.offsetHeight - 1) + "px";
               }
            }, TIMEOUT); // setTimeout
         }
      }
      actualContract();

      for(var i = INFO_HEIGHT; i >= 0; i--) // animation, if something goes wrong, it is set to 0 at end of function
      {
         setTimeout(function()
         {
            if(infoBox.offsetHeight >= 0)
            {
               infoBox.style.height = (infoBox.offsetHeight - 1) + "px";
            }
         }, TIMEOUT);
      }
      infoBox.style.marginTop = "0px"; // now after because first smaller infobox, then no margin anymore
      replaceClass(infoBox, "startExpanding", "infobox");
      setTimeout(function()
      {
         if(infoBox.offsetHeight >= 150)
         {
            actualContract();
         }
         // infoBox.style.height = "0px";
      }, TIMEOUT * INFO_HEIGHT);
   }
}

/* Merken: es muessen Bild und Infobox in aus zwei Gruenden in eigenes Div gepackt werden
   1. Die Infobox muss nicht an die richtige Stelle, gemaess Bild, verschoben werden
   2. Hovern: Das Ausgefahrene soll auch erhalten bleiben, wenn man nicht mehr auf dem Bild,
      sondern auf der Infobox hovert */





// alles in eine Timeout-Funktion packen, damit es nicht vor imageRows ausgeführt
// wird, das ja die Dimensionen der Bilder bestimmt
setTimeout(function()
{
   // sich einen arr aus allen Bildern nehmen, um deren Dimensionen abzufragen
   var allImgs = document.getElementById("gallerywrapper").getElementsByTagName("img");
   var allInfoBoxes = document.getElementsByClassName("infobox");
   var allInfoWrappers = document.getElementsByClassName("infoboxWrapper");
   console.log(allInfoWrappers);

   for(var i = 0; i < allInfoWrappers.length; i++)
   {
      allInfoWrappers[i].addEventListener("mouseenter", expandBox(allInfoWrappers[i]));
      allInfoWrappers[i].addEventListener("mouseleave", contractBox(allInfoWrappers[i]));
   }
}, 2500); // 2.5s because other .js files need to be loaded first
/*
FIXME

TODO
mouseleave event
Design
wenn komplett ausgefahren, dann neue contractListener hinuzfügen

*/
