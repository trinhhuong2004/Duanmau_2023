<div class="row">
            <div class="row header1 mb10">
                <h1>THÊM MỚI LOẠI HÀNG HÓA </h1>
            </div>

            <div class="row formcontent">
                <form action="index.php?act=adddm" method="post">
                    <!-- Dữ liệu chuyền đến index.php vs ts là act và đc sd truy cập pthức POST -->
                    <div class="row mb10">
                        Mã loại:
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="row mb10">Tên loại:
                        <input type="text" name="tenloai">
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="Thêm mới">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listdm"> <input type="button" value="Danh sách"></a>
                       
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
