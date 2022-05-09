<?php
    if(!isset($_SESSION['auth'])){
        exit;
    }
?>
<li id="url_list2"><button class="menu_button" onclick="window.location.href = '/admin/listusers.php';">List of users</button></li>
