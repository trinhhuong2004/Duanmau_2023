<?php
if (is_array($sanpham)) {
    extract($sanpham);
    //var_dump($sanpham);
}

$hinhpath = "../upload/".$img;

    if(is_file($hinhpath)){
        $hinh= "<img src='".$hinhpath."' height='80'>";
    }else{
       $hinh = "Khoong co";
     }
?>
<div class="row">
            <div class="row header1 mb10">
                <h1>CẬP NHẬT LOẠI HÀNG HÓA </h1>
            </div>

            <div class="row formcontent">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <!-- Dữ liệu chuyền đến index.php vs ts là act và đc sd truy cập pthức POST -->
                    <div class="row mb10">
                    <select name="iddm">
                        <option value="0" selected>Tat ca</option>
                            <?php 
                            foreach ($listdanhmuc as $key => $value) {
                            // extract($danhmuc);
                            if($iddm == $value['id']){
                            echo '<option value="'.$value['id'].'" selected>'.$value['name'].'</option>';
                                
                            }else{
                            echo '<option value="'.$value['id'].'">'.$value['name'].'</option>';
                                
                            }
                            // if($iddm == $id) $s="selected"; else $s="";
                            // echo '<option value="'.$id.'" '.$s.'>'.$name.'</option>';
                            
                            }
                            ?>
                        
                        </select>
                    </div>
                    <div class="row mb10">Tên sản phẩm:
                        <input type="text" name="tensp" value="<?=$name?>">
                    </div>
                    <div class="row mb10">Giá sản phẩm:
                        <input type="text" name="giasp" value="<?=$price?>">
                    </div>
                    <div class="row mb10">Hình ảnh sản phẩm:
                        <input type="file" name="hinh" value="">
                        <?=$hinh?>
                    </div>
                    <div class="row mb10">Mô tả sản phẩm:
                        <input type="text" name="mota" value="<?= $mota?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" name="capnhat" value="Cập nhật">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listsp"> <input type="button" value="Danh sách"></a>
                       
                    </div>
                <?php
                if(isset($thongbao) && ($thongbao != "")){
                echo $thongbao;
                }
                ?>
                </form>
            </div>
        </div>
    </div>
