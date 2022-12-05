<?php
include_once './source/database.php';
?>

<button id="new-product-btn" name="new-product">New Product</button>

<!---------- new-product modal ---------->
<div class="new-modal" id="new-product-modal">
    <form action="./process/insertion.php" method="POST" class="new-product-modal-content">

        <span class="new-close">&times;</span>

        <label for="item-name">Item name:</label>
        <input type="text" id="item-name" name="item-name">

        <label for="stock">No. of stock:</label>
        <input type="text" id="stock" name="item-stock"><br>

        <button type="submit" name="add">Add</button>
</div>
</form>

<!---------- script for the modal ---------->

<script>
    // Get the modal
    var newModal = document.getElementById("new-product-modal");

    // Get the button that opens the modal
    var newBtn = document.getElementById("new-product-btn");

    // Get the <span> element that closes the modal
    var newSpan = document.getElementsByClassName("new-close")[0];

    // When the user clicks the button, open the modal 
    newBtn.onclick = function() {
        newModal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    newSpan.onclick = function() {
        newModal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == newModal) {
            newModal.style.display = "none";
        }
    }
</script>