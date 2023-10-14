<?php
include "../model/pdo.php";
//include "../model/danhmuc.php";
//include "../model/sanpham.php";
include "header.php";
// Controler
if(isset($_GET['act'])){ // Kiểm tra xem có truyền qua phương thức GET hay không
    $act = $_GET['act']; // Lấy gt của ts act từ URL gán vàn biến
    switch ($act) {
        case 'adddm':
            // Kiểm tra xem người dùng có click vào nút add hay không 
            if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
             $tenloai = $_POST['tenloai'];
            // $sql = "insert into danhmuc(name) values('$tenloai')";
            // pdo_execute($sql);
            insert_danhmuc($tenloai);
            
            $thongbao = "Them thành công";
            
            }
            include "danhmuc/add.php";
            break;
        case 'listdm':
            // $sql = "SELECT * FROM danhmuc order by id desc";
            // $listdanhmuc = pdo_query($sql);
            $listdanhmuc = loadAll_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'xoadm':
            if(isset($_GET['id']) && ($_GET['id'] > 0)){
                delete_danhmuc($_GET['id']);

                // $sql = "DELETE FROM danhmuc WHERE id =".$_GET['id'];     
                // pdo_execute($sql);
            }
            // $sql = "SELECT * FROM danhmuc order by id desc";

            // $listdanhmuc = pdo_query($sql);
            $listdanhmuc = loadAll_danhmuc();

            include "danhmuc/list.php";
            break;
        case 'suadm':
            if(isset($_GET['id']) && ($_GET['id'] > 0)){
            // $sql = "SELECT * FROM danhmuc WHERE id=".$_GET['id'];
            // $dm = pdo_query_one($sql);
            $dm = loadOne_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                $sql = "";
                // $sql = "UPDATE danhmuc SET name='".$tenloai."' WHERE id =".$id;
                // pdo_execute($sql);
                update_danhmuc($id,$tenloai);
                $thongbao = "Cập nhật thành công";
                
                }
            // $sql = "SELECT * FROM danhmuc order by id desc";

            // $listdanhmuc = pdo_query($sql);
            $listdanhmuc = loadAll_danhmuc();
            include "danhmuc/list.php";
            break;

            /**Controler sản phẩm */
            case 'addsp':
                // Kiểm tra xem người dùng có click vào nút add hay không 
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                 $tenloai = $_POST['tenloai'];
                // $sql = "insert into danhmuc(name) values('$tenloai')";
                // pdo_execute($sql);
                insert_sanpham($tenloai);
                
                $thongbao = "Them thành công";
                
                }
                include "sanpham/add.php";
                break;
            case 'listsp':
                // $sql = "SELECT * FROM sanpham order by id desc";
                // $listsanpham = pdo_query($sql);
                $listsanpham = loadAll_sanpham();
                include "sanpham/list.php";
                break;
            case 'xoasp':
                if(isset($_GET['id']) && ($_GET['id'] > 0)){
                    delete_sanpham($_GET['id']);
    
                    // $sql = "DELETE FROM sanpham WHERE id =".$_GET['id'];     
                    // pdo_execute($sql);
                }
                // $sql = "SELECT * FROM sanpham order by id desc";
    
                // $listsanpham = pdo_query($sql);
                $listsanpham = loadAll_sanpham();
    
                include "sanpham/list.php";
                break;
            case 'suasp':
                if(isset($_GET['id']) && ($_GET['id'] > 0)){
                // $sql = "SELECT * FROM sanpham WHERE id=".$_GET['id'];
                // $dm = pdo_query_one($sql);
                $dm = loadOne_sanpham($_GET['id']);
                }
                include "sanpham/update.php";
                break;
            case 'updatesp':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $tenloai = $_POST['tenloai'];
                    $id = $_POST['id'];
                    $sql = "";
                    // $sql = "UPDATE sanpham SET name='".$tenloai."' WHERE id =".$id;
                    // pdo_execute($sql);
                    update_sanpham($id,$tenloai);
                    $thongbao = "Cập nhật thành công";
                    
                    }
                // $sql = "SELECT * FROM sanpham order by id desc";
    
                // $listsanpham = pdo_query($sql);
                $listsanpham = loadAll_sanpham();
                include "sanpham/list.php";
                break;
        default:
            include "home.php";
            break;
    }
}else{
    include "home.php";
}

include "footer.php";

?>