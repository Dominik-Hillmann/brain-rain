/* This creates a dropdown menu for the images of the website.
   The goal is that the HTML files do not have to be modified so that
   a change in sections.names results in a new link in the navigation. */

const EXPANDPXLS = 2; // by how many px is element expanded in one step
var linkBilder = "http://www.brain-rain.net/bilder.html";
// if new category, just change sections.names and it will appear
var sections =
{
   names: ["Polygon", "Gemälde", "Digital", "Abstrakt"],
   widths: [], // look at end of program, there the widths are added
   heights: 0, // same, to collect height that elements should have in animation
};

// returns url with anker to the subcategory
sections.getLinkAt = function(index)
{
   return linkBilder + "#" + this.names[index];
}

// replaces a class of given element with another one
function replaceClass(ele, from, to)
{
   if(ele.classList[0] == from)
   {
      ele.classList.remove(from);
      ele.classList.add(to);
   }
}

// event handler, shows the categories of pictures when cursor enters element
function expandSubCategories()
{
   bilderNode.removeEventListener("mouseenter", expandSubCategories);
   for(var i = 0; i < subNodes.length; i++)
   {
      replaceClass(subNodes[i], "drop", "showDrop");
      subNodes[i].style.width = "0px";
      subNodes[i].style.height = sections.heights;
   }

   function expandAnimation()
   {
      // width of every element is made bigger step by step until it is as big as stated in sections.widths[i]
      var sumExpandedPx = 0;
      for(var i = 0; i < sections.names.length; i++)
      {
         if(subNodes[i].offsetWidth < sections.widths[i]) // as long as the sub node does not have the width it is supposed to have
         {
            subNodes[i].style.width = (subNodes[i].offsetWidth + EXPANDPXLS) + "px"; // new width is old one + new pixels
            sumExpandedPx++;
         }
      }
      // only if there are still subNodes that are not done expanding, go on expanding
      if(sumExpandedPx > 0)
      {
         window.requestAnimationFrame(expandAnimation);
      }
   }
   expandAnimation();
   bilderNode.addEventListener("mouseleave", contractCategories);
}

//event handler, lets the subcategories disappear
function contractCategories()
{
   for(var i = 0; i < subNodes.length; i++)
   {
      replaceClass(subNodes[i], "showDrop", "drop");
      subNodes[i].style.width = "0px";
   }
   bilderNode.addEventListener("mouseenter", expandSubCategories);
}

// select to later add subNodes
var bilderNode = document.getElementById("navigation").children[0];
bilderNode.addEventListener("mouseenter", expandSubCategories);
//bilderNode.addEventListener("mouseleave", contractCategories);

// subcategories of "Bilder" listed here
var subNodes = [];
for(var i = 0; i < sections.names.length; i++)
{
   subNodes.push(bilderNode.appendChild(document.createElement("a")));  // adding child node
   subNodes[i].appendChild(document.createTextNode(sections.names[i])); // add the text node
   subNodes[i].classList.add("drop");                                   // give it its initial class
   subNodes[i].href = sections.getLinkAt(i);                            // give it its url to subcategory
}
// give it .showDrop for a short time to save the width and height it is supposed to have at end of animation
for(var i = 0; i < subNodes.length; i++)
{
   replaceClass(subNodes[i], "drop", "showDrop");
   sections.heights = subNodes[i].offsetHeight;
   sections.widths.push(subNodes[i].offsetWidth);
   replaceClass(subNodes[i], "showDrop", "drop");
   subNodes[i].style.width = "0px";
}
