/**
 * Created by raoasifraza on 06/05/2017.
 */
console.log('My Script is Loaded!');
var t = $('table tr');
var table = $('table').click(function () {
    console.log("click on table");
    var r = REDIPS.drag.saveContent('table', 'json');
    console.log(r);
});


$(document).ready(function(){
    var classes = ["red", "orange", 'brown', 'schoolbus', 'yellow', 'green', 'blue'];

    $(".redips-drag").each(function(){
        $(this).addClass(classes[~~(Math.random()*classes.length)]);
    });
    console.log('Color Loaded');
});


console.log(t);
