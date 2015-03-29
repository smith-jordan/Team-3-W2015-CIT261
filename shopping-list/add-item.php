<script>
    loadColor();
</script>
<div id="additemdiv" class="themecolor" onload="loadColor()">
    <form name=editor>
        <a href="" class="close button">Close</a>
        <h2>Add Item</h2>
            <label class="userinput" id="add">Name: <input name=name></label><br>
             <label class="userinput" id="quantity">Value: <input name=data></label> 
             <a class="button" onclick="doSetItem()">Add</a>
    </form>
</div>