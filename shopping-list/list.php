<!DOCTYPE html>
<html>
    <head>
        <title>Shopping List</title>
        <link href="stylesheet.css" type="text/css" rel="stylesheet" />
        
        <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="general.js"></script>
    </head>
    <body onload="doShowAll()">
        <div id='wrapper'>
        <header class="themecolor" id="header">
            <a href="index.php" id="home" class="button">Home</a>
            <h1>Shopping List</h1>
        </header>
        <main>
            <table id="items_table"></table>
            <div class="popup">
                
            </div>
        </main>
        <footer class="themecolor">
            <nav>
                <ul>
                    <li id="add"><a href="add-item" class="button">Add</a></li>
                    <li id="options"><a href="options" class="button">Options</a></li>
                    <li id="delete"><a href="delete-item" class="button">Delete</a></li>
                </ul>
            </nav>
        </footer>
        </div>
    </body>
</html>
