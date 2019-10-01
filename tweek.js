window.resizeX = function()
{
if(window.innerWidth<768)
{
document.querySelector('.header-middle').style.display="none";
} else {
document.querySelector('.header-middle').style.display="block";
}
	var ha = document.querySelector('.header-area').clientHeight;
	var sx = document.querySelector('.spaciojusx');
	sx.style.height = ha;"<style> .spaciojusx {height:" + ha + "px;} </style>";
	document.querySelector('.spaciojusx').innerHTML = "<style> .spaciojusx {height:" + ha + "px;} </style>";
	var sx = document.querySelector('.spaciojusx');
	document.head.appendChild(sx.getElementsByTagName('style')[0]);
	
	//alert(document.querySelector('.spaciojusx').style.height = ha);
}

window.scrollX = function()
{


}