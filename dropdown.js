/* This creates a dropdown menu for the images of the website.
   The goal is that the HTML files do not have to be modified so that
   a change in sections.names results in a new link in the navigation. */

// main page on which all od the picture subcategories are
var linkBilder = "http://www.brain-rain.net/bilder.html";
var sections =
{
   names: ["Polygon", "Gemälde", "Digital", "Abstrakt"],
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
   for(var i = 0; i < subNodes.length; i++)
   {
      replaceClass(subNodes[i], "drop", "showDrop");
   }
}

//event handler, lets the subcategories disappear
function contractCategories()
{
   for(var i = 0; i < subNodes.length; i++)
   {
      replaceClass(subNodes[i], "showDrop", "drop");
   }
}

// select to later add subNodes
var bilderNode = document.getElementById("navigation").children[0];
bilderNode.addEventListener("mouseenter", expandSubCategories);
bilderNode.addEventListener("mouseleave", contractCategories);

// subcategories of "Bilder" listed here
var subNodes = [];
for(var i = 0; i < sections.names.length; i++)
{
   subNodes.push(bilderNode.appendChild(document.createElement("a"))); // adding child node
   subNodes[i].appendChild(document.createTextNode(sections.names[i])); // add the text node
   subNodes[i].classList.add("drop"); // give it its initial class
   subNodes[i].href = sections.getLinkAt(i); // give it its url to subcategory
}
