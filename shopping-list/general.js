/*AJAX Pages*/
$(document).ready(function(){
    
    $('.popup').load('empty.php');
    
    $('nav ul li a').click(function(){
        var page = $(this).attr('href');
        $('.popup').load(page + '.php');
        return false;
    });
    $('a.close').click(function(){
        $('.popup').load('empty.php');
        return false;
    });
    
});

/*add, remove, clear, show functions*/
var items = [];

function doSetItem() {
    var name = document.forms.editor.name.value;
    var data = document.forms.editor.data.value;
    if (data === ""){
        data = "1";
    }
    var item = new Object;
    item.name = name;
    item.data = data;
    items.push(item);
    localStorage.setItem('items',JSON.stringify(items));
    doShowAll();
    document.forms.editor.name.value= '';
    document.forms.editor.data.value= '';
}

function doRemoveItem() {
    items = JSON.parse(localStorage.items);
    var name = document.forms.editor.name.value;
    var i=0;
    for (i=0; i<=items.length-1; i++) {
        if (items[i].name === name){
            items.splice(i,1);
        }
    }
    localStorage.setItem('items',JSON.stringify(items));
    doShowAll();
}

function doClear() {
    items = JSON.parse(localStorage.items);
    items = [];
    localStorage.setItem('items',JSON.stringify(items));
    doShowAll();
}

function doShowAll() {
    var pairs = "<tr><th>Name</th><th>Value</th></tr>\n";
    var i=0;
    items = JSON.parse(localStorage.items);
    for (i=0; i<=items.length-1; i++) {
        pairs += "<tr><td>"+items[i].name+"</td>\n<td>"+items[i].data+"</td></tr>\n";
    }
    if (pairs === "<tr><th>Name</th><th>Value</th></tr>\n") {
        pairs += "<tr><td><i>empty</i></td>\n<td><i>empty</i></td></tr>\n";
    }
    document.getElementById('items_table').innerHTML = pairs;
}

/*options functions*/
function changeColor(color){
                var maincolor = "#";
                var seccolor = "#";
                switch(color){
                    case 'pink': 
                        maincolor += "ff0078";
                        seccolor += "ff3695";
                        break;
                    case 'red':
                        maincolor += "e1001a";
                        seccolor += "e13b4f";
                        break;
                    case 'orange':
                        maincolor += "ff7800";
                        seccolor += "ff9639";
                        break;
                    case 'yellow':
                        maincolor += "e8bf00";
                        seccolor += "f0d03a";
                        break;
                    case 'green':
                        maincolor += "30c43a";
                        seccolor += "61c869";
                        break;
                    case 'blue':
                        maincolor += "005581";
                        seccolor += "317ba2";
                        break;
                    case 'purple':
                        maincolor += "54165d";
                        seccolor += "82368d";
                        break;
                    case 'black':
                        maincolor += "000000";
                        seccolor += "232323";
                        break;
                }
                $( ".themecolor" ).css({"background-color":maincolor});
                $( ".button" ).css({"background-color":seccolor});
                localStorage.setItem('maincolor', maincolor);
                localStorage.setItem('seccolor', seccolor);
            };
            
function loadColor(){
    var maincolor = document.getElementById("result").innerHTML = localStorage.getItem("maincolor");
    var seccolor = document.getElementById("result").innerHTML = localStorage.getItem("seccolor");
    $( ".themecolor" ).css({"background-color":maincolor});
    $( ".button" ).css({"background-color":seccolor});
}
