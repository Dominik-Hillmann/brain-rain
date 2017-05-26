/* Was mach das Skript hier? */
const INFO_HEIGHT = 150; // height of infoboxes in px
const TIMEOUT = 16; // time between animation frames in ms

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

      replaceClass(infoBox, "infobox", "startExpanding");
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
            else
            {
               contractBox(imgWrapperEle);
            }
         }, TIMEOUT);
      }
      // infobox makes infobox as wide as the image it belongs to
      infoBox.style.width = belongingImg.offsetWidth + "px";
   }
}

// event handler: contracts infobox when cursor leaves
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
            }, TIMEOUT);
         }
      }

      actualContract();
      infoBox.style.marginTop = "0px"; // now after because first smaller infobox, then no margin anymore
      replaceClass(infoBox, "startExpanding", "infobox");
      setTimeout(function()
      {
         if(infoBox.offsetHeight >= 150)
         {
            actualContract();
         }
      }, TIMEOUT * INFO_HEIGHT);
   }
}

// needed because pictures have to have been given new
setTimeout(function()
{
   var allInfoWrappers = document.getElementsByClassName("infoboxWrapper");
   for(var i = 0; i < allInfoWrappers.length; i++)
   {
      allInfoWrappers[i].addEventListener("mouseenter", expandBox(allInfoWrappers[i]));
      allInfoWrappers[i].addEventListener("mouseleave", contractBox(allInfoWrappers[i]));
   }
}, 2500); // 2.5s because other .js files need to be loaded first
