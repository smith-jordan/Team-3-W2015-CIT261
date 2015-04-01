<!DOCTYPE html>
<html>
    <head>
        <title>Shopping List</title>
        <link href="stylesheet.css" rel="stylesheet" type="text/css" media="screen" />
        
        <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="general.js"></script>
    </head>
    <body onload="doShowAll(); loadColor()">
        <div id='wrapper'>
        <header class="themecolor" id="header">
            <a href="index.php" id="home" class="button">Home</a>
            <h1 class="animated rubberBand">Shopping List</h1>
        </header>
        <main>
            <table id="items_table"></table>
            <div class="popup" id="popup">
                
            </div>
        </main>
        <footer class="themecolor">
            <nav>
                <ul>
                    <li id="add"><a href="javascript:void(0)" class="button" onclick="loadXMLDoc('add-item.txt')">Add</a></li>
                    <li id="options"><a href="javascript:void(0)" class="button" onclick="loadXMLDoc('options.txt')">Options</a></li>
                    <li id="delete"><a href="javascript:void(0)" class="button" onclick="loadXMLDoc('delete-item.txt')">Delete</a></li>
                </ul>
            </nav>
        </footer>
        </div>
    </body>
</html>
