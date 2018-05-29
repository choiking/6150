console.log("this is a console line");
document.write("this is myTs typescript" + "<br />");

function disp_details(id, name, mail_id) {
   document.write("ID:" + "is " + id + "<br />");
   document.write("Name" + "is " + name + "<br />");
	
   if (mail_id != undefined)
      document.write("Email id " + "is " + mail_id + "<br />");
}
disp_details(888, "Sam");
disp_details(444, "Nansheng", "tu@husky.neu.edu");