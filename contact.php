<?php
if($_POST["submit"]) {
    mail("scottkayhan@gmail.com", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>