<?php
include "model/pdo.php";
include "model/sanpham.php";

include "global.php";
include "view/header.php";

$phimnew=loadall_sanpham_home();
$phimtop=loadall_sanpham_top();

    if((isset($_GET['act'])) && ($_GET['act']!="")){
        $act = $_GET['act'];
        switch ($act) {
            case 'listsp':
                include "view/home.php";
                break;
            case 'sanphamct':
                include "view/sanphamct.php";
                break;    
            case 'dangky':
                include "view/login/dangki.php";
                break;
            case 'dangnhap':
                include "view/login/dangnhap.php";
                break;
            
            
        }
    } else {
        include "view/home.php";
    }
    include "view/footer.php";
?>