<?php

    if (isset($_COOKIE['success'])) {
    	echo "<p id='alert' class='alert'><span class='closebtn' onclick='document.getElementById(\"alert\").style.display=\"none\";'>&times;</span>". $_COOKIE['success']."</p>";
    }

    if (isset($_COOKIE['error'])) {
    	echo "<p id='alert' class='alert'><span class='closebtn' onclick='document.getElementById(\"alert\").style.display=\"none\";'>&times;</span>". $_COOKIE['error']."</p>";
    }

    if (isset($_COOKIE['info'])) {
    	echo "<p id='alert' class='alert'><span class='closebtn' onclick='document.getElementById(\"alert\").style.display=\"none\";'>&times;</span>". $_COOKIE['info']."</p>";
    }

?>