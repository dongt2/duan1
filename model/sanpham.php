<?php
    function loadall_sanpham_home(){
        $sql="select * from phim where 1 order by id desc limit 0,9";
        $listphim=pdo_query($sql);
        return $listphim;
    }

    function loadall_sanpham_top(){
        $sql="select * from phim where 1 order by theloai desc limit 0,10";
        $listphim=pdo_query($sql);
        return $listphim;
    }
?>