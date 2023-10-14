<?php
function loadall_thongke()
{
    $sql = "SELECT danhmuc.id AS madm, danhmuc.name AS tendm, COUNT(sanpham.id) AS COUNTSP, MIN(sanpham.price) AS MINPRICE, MAX(sanpham.price) AS MAXPRICE, AVG(sanpham.price) AS AVGPRICE";
    $sql .= " FROM sanpham left JOIN danhmuc ON danhmuc.id = sanpham.iddm";
    $sql .= " GROUP BY danhmuc.id ORDER BY danhmuc.id DESC";
    $listtk = pdo_query($sql);
    return $listtk;
}
function thongke(){
    $sql = "SELECT dm.id, dm.name, COUNT(*) 'soluong', MIN(price) 'gia_min', MAX(price) 'gia_max', AVG(price) 'gia_avg' FROM danhmuc
    dm JOIN sanpham sp ON dm.id = sp.iddm GROUP BY dm.id, dm.name ORDER BY soluong DESC ";
     $listtk = pdo_query($sql);
     return $listtk;
}
?>