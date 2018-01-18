/* This manipulates infoboxes under images so that they are expanded when
   they are clicked and contracted when the cursor leaves the
   picture or its infobox.
   Note that I am still a beginner and all this is most probably not at all
   the best to do it. */

const INFO_HEIGHT = 175; // height of infoboxes in px
const PIXELS_EXPAND = 7; // by how many pixels in one animation frame should the boxes expand or contract?
const PIXELS_CONTRACT = 5;
var allInfoWrappers = document.getElementsByClassName("infoboxWrapper");

// event handler: expands the infobox of an image when the cursor enters the element
function expandBox(imgWrapperEle, index)
{
   return function()
   {
      allInfoWrappers[index].removeEventListener("click", expandBox(allInfoWrappers[index], index));
      var belongingImg = imgWrapperEle.getElementsByTagName("img")[0];
      var infoBox = imgWrapperEle.getElementsByClassName("infobox")[0]; // index operator because getElementsByClassName returns array
      if(infoBox == undefined) // because when not first animation frame, it cannot be found via class infobox
      {
         infoBox = imgWrapperEle.getElementsByClassName("startExpanding")[0];
      }

      replaceClass(infoBox, "infobox", "startExpanding"); // to be found in dropdown.js
      // change height and width of infobox
      infoBox.style.marginTop = "10px";
      infoBox.style.marginBottom = "10px";

      function expand()
      {
         if(infoBox.offsetHeight <= INFO_HEIGHT)
         {
            infoBox.style.height = (infoBox.offsetHeight + PIXELS_EXPAND) + "px";
            window.requestAnimationFrame(expand);
         }
      }
      expand();

      infoBox.style.width = belongingImg.offsetWidth + "px"; // makes infobox as wide as the image it belongs to
      allInfoWrappers[index].addEventListener("mouseleave", contractBox(allInfoWrappers[index], index));
   }
}

// event handler: contracts infobox when cursor leaves
function contractBox(imgWrapperEle, index)
{
   return function()
   {
      allInfoWrappers[index].removeEventListener("mouseleave", contractBox(allInfoWrappers[index], index));
      var belongingImg = imgWrapperEle.getElementsByTagName("img")[0];
      var infoBox = imgWrapperEle.getElementsByClassName("startExpanding")[0]; // serach for infoBox by class switched
      if(infoBox == undefined)
      {
         infoBox = imgWrapperEle.getElementsByClassName("infobox")[0];
      }

      function contract() // as function because needed a second time further down
      {
         if(infoBox.offsetHeight >= 15)
         {
            infoBox.style.height = (infoBox.offsetHeight - PIXELS_CONTRACT) + "px";
            window.requestAnimationFrame(contract);
         }
      }
      contract();

      infoBox.style.margin = "0px";
      imgWrapperEle.style.margin = "0px";
      replaceClass(infoBox, "startExpanding", "infobox");
      allInfoWrappers[index].addEventListener("click", expandBox(allInfoWrappers[index], index));
   }
}

setTimeout(function()
{
   for(var i = 0; i < allInfoWrappers.length; i++)
   {
      allInfoWrappers[i].addEventListener("click", expandBox(allInfoWrappers[i], i));
   }
}, 2500); // 2.5s because other .js files need to be loaded first
