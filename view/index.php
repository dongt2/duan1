<?php
include "../admin/header.php";
include "../model/pdo.php";


if((isset($_GET['act'])) && ($_GET['act']!="")){
    $act = $_GET['act'];
    switch ($act){}
} else {
    include "../admin/home.php";
}
include "../admin/footer.php";
?>