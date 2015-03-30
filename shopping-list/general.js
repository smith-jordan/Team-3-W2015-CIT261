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
    /*get info from user*/
    var name = document.forms.editor.name.value;
    var data = document.forms.editor.data.value;
    /*if no value is entered, automatically assign it a value of one*/
    if (data === ""){
        data = "1";
    }
    
    /*create item object*/
    var item = new Object;
    item.name = name;
    item.data = data;
    item.checkbox = "false";
    item.star = "false";
    
    /*add item to array and save in local storage*/
    items.push(item);
    localStorage.setItem('items',JSON.stringify(items));
    
    /*update visible table*/
    doShowAll();
    
    /*clear inputs*/
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
    var pairs = "<tr><th>Imp.</th><th>Name</th><th>Value</th><th>Check</th></tr>\n";
    var i=0;
    items = JSON.parse(localStorage.items);
    for (i=0; i<=items.length-1; i++) {
            /*load important or not important based on object star value*/
            if (items[i].star === "false"){
                pairs += "<tr><td><img src='http://dastrupdevelopment.com/imp1.png' id="+items[i].name+" onclick='changeImportance(this)' class='notimp' style='width:18px;height:18px'></td> ";
            }
            if (items[i].star === "true") {
                pairs += "<tr><td><img src='http://dastrupdevelopment.com/imp2.png' id="+items[i].name+" onclick='changeImportance(this)' class='imp' style='width:18px;height:18px'></td> ";
            }
            /*add item name and value to table*/
            pairs += "<td>"+items[i].name+"</td><td>"+items[i].data+"</td>";
            
            /*load checked or unchecked box based on object checkbox value*/
            if (items[i].checkbox === "false"){
                pairs += "<td><input type='checkbox' class='unchecked' onchange='changeCheck(this)' id="+items[i].name+"></td></tr>";
            }
            else {
                pairs += "<td><input type='checkbox' class='checked' onchange='changeCheck(this)' id="+items[i].name+" checked><td></tr>";
            }
    }
    /*if items array is empty*/
    if (pairs === "<tr><th>Importance</th><th>Name</th><th>Value</th><th>Check</th></tr>\n") {
        pairs += "<tr><td></td><td><i>empty</i></td>\n<td><i>empty</i></td><td></td></tr>\n";
    }
    document.getElementById('items_table').innerHTML = pairs;
      
}
function changeImportance(el){
    items = JSON.parse(localStorage.items);
    var itemName = $(el).attr('id');
    var itemClass = $(el).attr('class');
    for (i=0; i<=items.length-1; i++) {
        /*change not important to important*/
        if (itemName === items[i].name && itemClass === "notimp"){
            items[i].star = "true";
            el.setAttribute("class","imp");
            el.setAttribute("src", "http://dastrupdevelopment.com/imp2.png");
        }
        /*change important to not important*/
        else if (itemName === items[i].name && itemClass === "imp"){
            items[i].star = "false"; 
            el.setAttribute("class","notimp");
            el.setAttribute("src", "http://dastrupdevelopment.com/imp1.png");
        }
    }
    localStorage.setItem('items',JSON.stringify(items));
}  
function changeCheck(el){
    items = JSON.parse(localStorage.items);
    var itemName = $(el).attr('id');
    var checkStatus = $(el).attr('class');
    for (i=0; i<=items.length-1; i++) {
        /*change not check to check*/
        if (itemName === items[i].name && checkStatus === "unchecked"){
            items[i].checkbox = "true";
        }
        /*change check to not check*/
        else if (itemName === items[i].name && checkStatus === "checked"){
            items[i].checkbox = "false"; 
        }
    }
    localStorage.setItem('items',JSON.stringify(items));
    doShowAll();
}  

/*options functions*/
function sortImp(){
    items = JSON.parse(localStorage.items);
    for (i=0; i<=items.length-1; i++) {
        if (items[i].star === "true") {
            items.splice(0, 0, items.splice(i, 1)[0]);
        }
    }
    localStorage.setItem('items',JSON.stringify(items));
    
    /*update visible table*/
    doShowAll();
}
function sortCheck(){
    items = JSON.parse(localStorage.items);
    for (i=0; i<=items.length-1; i++) {
        if (items[i].checkbox === "false") {
            items.splice(0, 0, items.splice(i, 1)[0]);
        }
    }
    localStorage.setItem('items',JSON.stringify(items));
    
    /*update visible table*/
    doShowAll();
    
}

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
    var maincolor = localStorage.getItem("maincolor");
    var seccolor =  localStorage.getItem("seccolor");
    $( ".themecolor" ).css({"background-color":maincolor});
    $( ".button" ).css({"background-color":seccolor});
}

