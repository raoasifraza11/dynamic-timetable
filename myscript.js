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


console.log(t);
