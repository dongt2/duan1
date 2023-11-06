<?php
include "model/pdo.php";
include "view/header.php";



    if((isset($_GET['act'])) && ($_GET['act']!="")){
        $act = $_GET['act'];
        switch ($act) {
            case 'listsp':
                include "view/home.php";
                break;
                
            case 'dangky':
                include "view/login.php";
                break;
            
            
        }
    } else {
        include "view/home.php";
    }
    include "view/footer.php";
?>