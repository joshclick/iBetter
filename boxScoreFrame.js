function addFrame()
{
var para= document.createElement("iframe");
para.src="http://www.espn.com";
var element = document.getElementById("bet_body");
element.appendChild(para);
}
