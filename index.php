<?php
include "../view/header.php";
include "../model/pdo.php";


if((isset($_GET['act'])) && ($_GET['act']!="")){
    $act = $_GET['act'];
    switch ($act){}
} else {
    include "../view/home.php";
}
include "../view/footer.php";
?>