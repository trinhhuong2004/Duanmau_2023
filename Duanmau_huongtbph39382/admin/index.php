<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/cart.php";
include "../model/thongke.php";
include "header.php";

//  Kiểm tra action có tồn tài hay không
if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            // Kiểm tra xem người dùng có click vào nut add hay không
            if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                $tenloai = $_POST['tenloai'];
                // $sql = "INSERT INTO danhmuc(name) values('$tenloai')";
                // pdo_execute($sql);
                insert_danhmuc($tenloai);
                $thongbao = "Thêm thành công";
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
            // Kiểm tra xem "id" có tồn tại hay không
            if(isset($_GET['id']) && ($_GET['id']) > 0){
                // $sql ="DELETE FROM danhmuc WHERE id=".$_GET['id'];
                // pdo_execute($sql);
                delete_danhmuc($_GET['id']);
            }
            // Xóa song sẽ xâu ra list danh muc
            // $sql = "SELECT * FROM danhmuc order by id desc";
            // $listdanhmuc = pdo_query($sql);
            $listdanhmuc = loadAll_danhmuc();
            include 'danhmuc/list.php';
            break;
        
        case 'suadm':
            if(isset($_GET['id']) && ($_GET['id']) > 0){
            // $sql ="SELECT * FROM danhmuc where id=".$_GET['id'];
            // $dm = pdo_query_one($sql);
            $dm = loadOne_danhmuc($_GET['id']);
            }
            include 'danhmuc/update.php';
            break;

        case 'updatedm':
            if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                //$sql = "UPDATE danhmuc set name='".$tenloai."' where id =".$id;
                //pdo_execute($sql);
                update_danhmuc($id,$tenloai);
                $thongbao = "Cập nhật thành công";
            }
            // $sql = "SELECT * FROM danhmuc order by id desc";
            // $listdanhmuc = pdo_query($sql);
            $listdanhmuc = loadAll_danhmuc();
            include "danhmuc/list.php";
            break;

            // Products 
        case 'addsp':
            if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                $iddm = $_POST['idddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];

                $hinh =$_FILES['hinh']['name'];
                $target_dir ='../upload/';
                $target_file = $target_dir .basename($_FILES["hinh"]["name"]);
                if(move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file));


                insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
                $thongbao ="Them thanh cong";
            }
            $listdanhmuc = loadAll_danhmuc();
            include 'sanpham/add.php';
            break;
        case 'listsp':
            if(isset($_POST['listok']) && ($_POST['listok'])){
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            }else{
                $kyw = '';
                $iddm = 0;
            }
            $listdanhmuc = loadAll_danhmuc();
            $listsanpham = loadAll_sanpham($kyw,$iddm);
            include 'sanpham/list.php';
            break;
            case 'xoasp':
                // Kiểm tra xem "id" có tồn tại hay không
                if(isset($_GET['id']) && ($_GET['id']) > 0){
                    delete_sanpham($_GET['id']);
                }
                $listsanpham = loadAll_sanpham();
                include 'sanpham/list.php';
                break;
            
            case 'suasp':
                if(isset($_GET['id']) && ($_GET['id']) > 0){
                $sanpham = loadOne_sanpham($_GET['id']);
                }
                $listdanhmuc = loadAll_danhmuc();
                include 'sanpham/update.php';
                break;
    
            case 'updatesp':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $id = $_POST['id'];
                    $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];

                $hinh =$_FILES['hinh']['name'];
                $target_dir ='../upload/';
                $target_file = $target_dir .basename($_FILES["hinh"]["name"]);
                if(move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file));

                    //$sql = "UPDATE sanpham set name='".$tenloai."' where id =".$id;
                    //pdo_execute($sql);
                    update_sanpham($tensp,$giasp,$mota,$hinh,$iddm,$id);
                    $thongbao = "Cập nhật thành công";
                }
                // $sql = "SELECT * FROM sanpham order by id desc";
                // $listsanpham = pdo_query($sql);
                $listdanhmuc = loadAll_danhmuc();
                $listsanpham = loadAll_sanpham();
                include "sanpham/list.php";
                break;
               
                case 'dskh':
                    $listtaikhoan = loadAll_taikhoan();
                    include 'taikhoan/list.php';
                    break;
                case 'dsbl':
                    $listbinhluan = loadAll_binhluan(0);
                    include 'binhluan/list.php';
                    break;
                case 'xoabl':
                    if(isset($_GET['id']) && ($_GET['id'] >0)){
                        delete_binhluan($_GET['id']);
                    }
                    $listbinhluan = loadAll_binhluan(0);
                    include "binhluan/list.php";
                    break;
                case 'dsdh':
                    $listbill = loadall_bill(0);
                    include "bill/list.php";
                    break;
                case 'xoabill':
                    if(isset($_GET['id'])){
                        del_bill($_GET['id']);
                    }
                    $listbill = loadall_bill(0);
                    include "bill/list.php";
                    break;
                    case 'thongke':
                        $listthongke = loadall_thongke();
                        require 'thongke/list.php';
                        break;
                    case 'bieudo':
                        $listthongke = loadall_thongke();
                        require 'thongke/bieudo.php';
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