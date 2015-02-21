<!DOCTYPE html>
<!--
This is my sandbox code.
-->
<html>
    <head>
        <title>JSON</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    
    </head>
    <body>
        <h2>JSON</h2>
        <div id="example"></div>
        
        <script>
            var input= '{"BrownieRecipe":[' +
                '{"item":"Butter","quantity":"6 cubes" },' +
                '{"item":"Eggs","quantity":"12" },' +
                '{"item":"Coco","quantity":"2 cups" },' +
                '{"item":"Sugar","quantity":"6 cups" }]}';
            
            var list = JSON.parse(input);
            
            document.getElementById("example").innerHTML = 
                    "First add " + list.BrownieRecipe[0].quantity + " of " + list.BrownieRecipe[0].item + ".<br>" +
                    "Then add " + list.BrownieRecipe[1].quantity + " " + list.BrownieRecipe[1].item + ".<br>" +
                    "Then add " + list.BrownieRecipe[2].quantity + " of " + list.BrownieRecipe[2].item + ".<br>" +
                    "Then add " + list.BrownieRecipe[3].quantity + " of " + list.BrownieRecipe[3].item + ".";
        </script>
    </body>
</html>