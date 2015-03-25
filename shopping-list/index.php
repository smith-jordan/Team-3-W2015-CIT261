<!DOCTYPE html>
<html>
    <head>
        <title>Shopping List</title>
        <link href="stylesheet.css" type="text/css" rel="stylesheet" />
        
        <script>
            function testFunction(){
                document.getElementById("header").css("background-color", "pink");
            }
            
            function changeColor(color){
                document.getElementByClass("themecolor").css("background-color", color);
            }        
        </script>
    </head>
    <body>
        <header class="themecolor" id="header">
            <h1>Shopping List</h1>
        </header>
        <main>
            <table>
                <tr>
                    <td>List 1</td>
                    <td>></td>
                </tr>
                <tr>
                    <td>List 2</td>
                    <td>></td>
                </tr>
                <tr>
                    <td>List 3</td>
                    <td>></td>
                </tr>
            </table>
            <div class="popup">
                
            </div>
            <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
            <script src="general.js"></script>
        </main>
        <footer class="themecolor">
            <nav>
                <ul>
                    <li id="add"><a href="add-list">Add</a></li>
                    <li id="options"><a href="options">Options</a></li>
                    <li id="delete"><a href="delete-list">Delete</a></li>
                </ul>
            </nav>
        </footer>
    </body>
</html>
