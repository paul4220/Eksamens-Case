<?php
if(isset($_POST["Materiale"])) {
    onSave();
}


if(isset($_GET['i'])) {
    deleteItem($_GET['i']);
}
?>
    