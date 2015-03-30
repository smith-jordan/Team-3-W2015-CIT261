<script>
    loadColor();
</script>
<div id="dltitemdiv" class="themecolor" onload="loadColor()">
    <form name=editor>
        <a href="" class="close button">Close</a>
        <h2>Delete Items</h2>
            <label id="dltitem" class="userinput">Name: <input name=name></label>
             <a class="button" onclick="doRemoveItem()">Remove</a>
             <br>
             <a id="dltbutt" class="button" onclick="doRemoveChecked()">Remove Checked</a>
             <a id="clearbutt" class="button" onclick="doClear()">Clear All Items</a>
    </form>
</div>
