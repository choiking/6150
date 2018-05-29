var tuple = ["My", "1", "TypeScript"]; 

document.write("Print out my tuple" + "<br />");    

for (var entry of tuple) {
    document.write(entry + "<br />"); 
}  
document.write("<br />");
tuple.push("Assignment");

document.write("Print out my tuple after push Assignment" + "<br />");    

for (var entry of tuple) {
    document.write(entry + "<br />"); 
}

// document.write("Items after push is "+tuple.length + "<br />"); 
// document.write("Items before pop is "+tuple.length + "<br />"); 
// document.write(" popped from the tuple is " + tuple.pop() + "<br />");
  
// document.write("Items after pop is "+tuple.length);