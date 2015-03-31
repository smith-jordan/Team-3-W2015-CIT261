<!DOCTYPE HTML>
<html>
<head>
  <title>Shopping List</title>
  <style >
    
 @import url(http://fonts.googleapis.com/css?family=Alegreya+Sans);
 
body { background: #ffffff; font-family: 'Alegreya Sans', sans-serif; font-size: 1.25em; }
 
body, form { display: block; }
 
form { background-color: #eee; margin: 50px auto; width: 350px; border: 4px solid #222; }
 
h1 { text-align: center; margin-bottom: 0; }
 
label, div { display: block; padding-bottom: 5px; text-align: center; margin-left: auto; margin-right: auto;  }
 
p, h2 {text-align: center}
 
#checks {margin-left: 30px;}
#check { } 

table {float: left;}
 

 #button {
  background: #66b2ff;
  font-size: 1em;
  overflow: hidden;
  text-align: center;
  -webkit-box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.8);
  -moz-box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.8);
  box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.8);
  background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.2));
  background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.2));
  background-image: -o-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.2));
  background-image: -ms-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.2));
  background-image: linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.2));
}
 
#button:hover {
  /*Shadow*/
  -webkit-box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.8);
  -moz-box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.8);
  box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.8);
  /*Gradient*/
  background-image: -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.4));
  background-image: -moz-linear-gradient(bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.4));
  background-image: -o-linear-gradient(bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.4));
  background-image: -ms-linear-gradient(bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.4));
  background-image: linear-gradient(bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.4));
}


 
 
  </style>
</head>
<body onload="doShowAll()">
  <h1>Shopping List</h1>
  <form name=editor>
    <div id="inputfromuser">
     <p>
     <label id="userinput">Name: <input name=name></label>
     </p>
     <p>
      <label id="userinput">Value: <input name=data></label>
     <br>
      <input id="button" type=button value="Add Item" onclick="doSetItem()">
      <input id="button" type=button value="Remove Item" onclick="doRemoveItem()">
     </p>
   </div>
   <div id="items_table">
     <h2>Items</h2>
 
<table id=checks>
  <tr>
    <th>Check</th>
  </tr>
 
<tr><td><input id="check" type="checkbox" checked></td></tr>
<tr><td><input id="check" type="checkbox" checked></td></tr>
<tr><td><input id="check" type="checkbox" checked></td></tr>
<tr><td><input id="check" type="checkbox" checked></td></tr>
<tr><td><input id="check" type="checkbox" checked></td></tr>
 
</table>
 
<table id=pairs></table>
<table id=Important>
  <tr>
    <th>Important</th>
  </tr>
 
<tr><td><img src="http://dastrupdevelopment.com/imp1.png" id="imgClickAndChange" onclick="changeImage()" style="width:18px;height:18px"></td></tr>
<tr><td><img src="http://dastrupdevelopment.com/imp1.png" id="imgClickAndChange1" onclick="changeImage1()" style="width:18px;height:18px"></td></tr>
<tr><td><img src="http://dastrupdevelopment.com/imp1.png" id="imgClickAndChange2" onclick="changeImage2()" style="width:18px;height:18px"></td></tr>
<tr><td><img src="http://dastrupdevelopment.com/imp1.png" id="imgClickAndChange3" onclick="changeImage3()" style="width:18px;height:18px"></td></tr>
<tr><td><img src="http://dastrupdevelopment.com/imp1.png" id="imgClickAndChange4" onclick="changeImage4()" style="width:18px;height:18px"></td></tr>
 
</table>
   
   </div>
<p>
     <label><input id="button" type=button value="Clear All Items" onclick="doClear()"> </label>
     </p>
   <script>
     function doSetItem() {
       var name = document.forms.editor.name.value;
       var data = document.forms.editor.data.value;
      localStorage.setItem(name, data);
       doShowAll();
     }
     function doRemoveItem() {
       var name = document.forms.editor.name.value;
       document.forms.editor.data.value = localStorage.removeItem(name);
       doShowAll();
     }
     function doClear() {
       localStorage.clear();
       doShowAll();
     }
function myFunction() {
    var btn = document.createElement("BUTTON");
    var t = document.createTextNode("CLICK ME");
    btn.appendChild(t);
    document.body.appendChild(btn);
};
 
     function doShowAll() {
       var key = "";
       var pairs = "<tr><th>Name</th><th>Value</th></tr>\n";
       var i=0;
       for (i=0; i<=localStorage.length-1; i++) {
         key = localStorage.key(i);
         pairs += "<tr>"+"<td>"+key+"</td>\n<td>"+localStorage.getItem(key)+"</td></tr>\n";
       }
       if (pairs == "<tr><th>Name</th><th>Value</th></tr>\n") {
         pairs += "<tr><td><i>empty</i></td>\n<td><i>empty</i></td></tr>\n";
       }
       document.getElementById('pairs').innerHTML = pairs;
     }
  
 
  function changeImage() {

        if (document.getElementById("imgClickAndChange").src == "http://dastrupdevelopment.com/imp1.png") 
        {
            document.getElementById("imgClickAndChange").src = "http://dastrupdevelopment.com/imp2.png";
        }
        else 
        {
            document.getElementById("imgClickAndChange").src = "http://dastrupdevelopment.com/imp1.png";
        }
    }
    
      
    
    function changeImage1() {

        if (document.getElementById("imgClickAndChange1").src == "http://dastrupdevelopment.com/imp1.png") 
        {
            document.getElementById("imgClickAndChange1").src = "http://dastrupdevelopment.com/imp2.png";
        }
        else 
        {
            document.getElementById("imgClickAndChange1").src = "http://dastrupdevelopment.com/imp1.png";
        }
    }
    function changeImage2() {

        if (document.getElementById("imgClickAndChange2").src == "http://dastrupdevelopment.com/imp1.png") 
        {
            document.getElementById("imgClickAndChange2").src = "http://dastrupdevelopment.com/imp2.png";
        }
        else 
        {
            document.getElementById("imgClickAndChange2").src = "http://dastrupdevelopment.com/imp1.png";
        }
    }
    function changeImage3() {

        if (document.getElementById("imgClickAndChange3").src == "http://dastrupdevelopment.com/imp1.png") 
        {
            document.getElementById("imgClickAndChange3").src = "http://dastrupdevelopment.com/imp2.png";
        }
        else 
        {
            document.getElementById("imgClickAndChange3").src = "http://dastrupdevelopment.com/imp1.png";
        }
    }
    
    function changeImage4() {

        if (document.getElementById("imgClickAndChange4").src == "http://dastrupdevelopment.com/imp1.png") 
        {
            document.getElementById("imgClickAndChange4").src = "http://dastrupdevelopment.com/imp2.png";
        }
        else 
        {
            document.getElementById("imgClickAndChange4").src = "http://dastrupdevelopment.com/imp1.png";
        }
    }
</script>
 
   
  </form>
</body>
</html>
