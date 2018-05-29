//Title constructor function that creates a Title object
function Title(t1) 
{ this.mytitle = t1;
}
Title.prototype.getName = function () 
{ 
return (this.mytitle);
}

//Main Content start..
function disableButton() {
    document.getElementById("button").disabled = true;
    document.getElementById("button").setAttribute("style", "background-color: grey");
}
function cbEvent(row)
{  
  if (document.getElementById("cb" + row).checked) 
  {
      document.getElementById("row" + row).setAttribute("style", "background-color: yellow");
      document.getElementById("button").disabled = false;
      document.getElementById("button").setAttribute("style", "background-color: orange");
  } 
  else {
      document.getElementById("row" + row).setAttribute("style", "");
  }
if (!document.getElementById("cb1").checked && !document.getElementById("cb2").checked 
	&& !document.getElementById("cb3").checked) 
{
  disableButton();
}
}
function toggle(row) {
   
   document.getElementById("textArea" + row).style.display = 
   (document.getElementById("textArea" + row).style.display=='none') ? '' : 'none';
}
//Main Content ends..

var socialMedia = {
  facebook : 'http://facebook.com',
  twitter: 'http://twitter.com',
  flickr: 'http://flickr.com',     
  youtube: 'http://youtube.com'
};

var t = new Title("CONNECT WITH ME!");