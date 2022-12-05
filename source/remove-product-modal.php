<?php
include_once './source/database.php';
?>

<button type="submit" id="remove-product-btn" name="remove-product">Remove Product</button>

<!---------- new-product modal ---------->
<div class="remove-modal" id="remove-product-modal">
    <form action="./process/deletion.php" method="POST" class="remove-product-modal-content">

        <span class="remove-close">&times;</span>

        <h3>Enter the product ID to remove.</h3>
        <label for="item-id">Product ID:</label>
        <input type="text" id="item-id" name="item-id">

        <button type="submit" name="remove">Remove</button>
</div>
</form>

<!---------- script for the modal ---------->

<script>
    // Get the modal
    var removeModal = document.getElementById("remove-product-modal");

    // Get the button that opens the modal
    var removeBtn = document.getElementById("remove-product-btn");

    // Get the <span> element that closes the modal
    var removeSpan = document.getElementsByClassName("remove-close")[0];

    // When the user clicks the button, open the modal 
    removeBtn.onclick = function() {
        removeModal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    removeSpan.onclick = function() {
        removeModal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == removeModal) {
            removeModal.style.display = "none";
        }
    }
</script>