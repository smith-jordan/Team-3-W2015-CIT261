<!DOCTYPE html>
<html>
    <head>
        <title>Shopping List</title>
        <link href="stylesheet.css" type="text/css" rel="stylesheet" />
        
    </head>
    <body onload="loadColor()">
        <header class="themecolor" id="header">
            <h1 class="animated rubberBand">Shopping List</h1>
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
                    <li id="add"><a href="add-list" class="button">Add</a></li>
                    <li id="options"><a href="options" class="button">Options</a></li>
                    <li id="delete"><a href="delete-list" class="button">Delete</a></li>
                </ul>
            </nav>
        </footer>
    </body>
</html>