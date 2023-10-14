<div class="row">
            <div class="row header1 mb10">
                <h1>THÊM MỚI LOẠI SẢN PHẨM </h1>
            </div>

            <div class="row formcontent">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    
                    <!-- Dữ liệu chuyền đến index.php vs ts là act và đc sd truy cập pthức POST -->
                    <div class="row mb10">
                    <select name="idddm" id="">
                        <?php foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            echo '<option value="'.$id.'">"'.$name.'"</option>';
                        }?>
                        
                    </select>
                    </div>
                    <div class="row mb10">Tên sản phẩm:
                        <input type="text" name="tensp">
                    </div>
                    <div class="row mb10">Giá sản phẩm:
                        <input type="text" name="giasp">
                    </div>
                    <div class="row mb10">Hình ảnh sản phẩm:
                        <input type="file" name="hinh">
                    </div>
                    <div class="row mb10">Lượt xem sản phẩm:
                        <textarea name="mota" cols="30" rows="10"></textarea>
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="Thêm mới">
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
