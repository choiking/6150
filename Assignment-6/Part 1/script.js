//Title constructor function that creates a Title object
function Title(t1) 
{ this.mytitle = t1;
}

Title.prototype.getName = function () { 
return (this.mytitle);
}
//Main Content start..
//1.Table should not be expanded when page loads
//2.when page loads, submit button to be disabled and Grayed out
function disableButton() {
	$("button").prop("disabled",true);
    $("button").css("background-color", "grey");
}

//3.On selecting any of the check-boxes, 
//background color to be changed for the particular row and Submit button to turn Orange.
//4.Deselecting the check box will make the row white again. Also, if none of the rows 
//are selected, the Submit button should be Grayed out again(disabled). 
function cbEvent(row)
{  
  if ($("#cb" + row).is(':checked')) {
      $("#row" + row).css("background-color", "yellow");
      $("button").prop("disabled",false);
      $("button").css("background-color", "");
  } 
  else {
      $("#row" + row).css("background-color", "");

  }
if (!$("#cb1").is(':checked') && !$("#cb2").is(':checked') 
  && !$("#cb3").is(':checked')) 
{
  disableButton();
}
}
//5. Clicking on any of the green arrows will expand the particular row.
// Clicking it again will collapse it (i.e., toggle view on click)
function toggle(row) {
   
   if ($("#textArea" + row).css("display","none")) {
   	$("#textArea" + row).css("display", "");
   }
   else {
     $("#textArea" + row).css("display", "none");
   }
}

var socialMedia = {
  facebook : 'http://facebook.com',
  twitter: 'http://twitter.com',
  flickr: 'http://flickr.com',
  youtube: 'http://youtube.com'
};

var t = new Title("CONNECT WITH ME!");