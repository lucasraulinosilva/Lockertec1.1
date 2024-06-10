<?php

    if ( isset($_GET["view"]) && $_GET["view"] != "" ) {
        require_once("views/".$_GET["view"]."View.php");
    } else {
        require_once("views/homeView.php");
    }

?>