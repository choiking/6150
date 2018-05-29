var tuple = ["My", "1", "TypeScript"];
document.write("Print out my tuple" + "<br />");
for (var _i = 0, tuple_1 = tuple; _i < tuple_1.length; _i++) {
    var entry = tuple_1[_i];
    document.write(entry + "<br />");
}
document.write("<br />");
tuple.push("Assignment");
document.write("Print out my tuple after push Assignment" + "<br />");
for (var _a = 0, tuple_2 = tuple; _a < tuple_2.length; _a++) {
    var entry = tuple_2[_a];
    document.write(entry + "<br />");
}
// document.write("Items after push is "+tuple.length + "<br />"); 
// document.write("Items before pop is "+tuple.length + "<br />"); 
// document.write(" popped from the tuple is " + tuple.pop() + "<br />");
// document.write("Items after pop is "+tuple.length); 
