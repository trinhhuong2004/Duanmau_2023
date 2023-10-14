<div class="row mb">
    <div class="boxtitle">TÀI KHOẢN</div>
    <div class="boxcontent formtaikhoan">
        <?php
        if(isset($_SESSION['user'])){
            extract($_SESSION['user']);
           ?>
        <div class="row mb10">
            <label for="">Xin chao:</label>
            <?=$user?>
        </div>
        <div class="row mb10">
            <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
            <li><a href="index.php?act=edit_taikhoan">Cap nhap tai khoan</a></li>
            <?php
            if($role == 1){
            ?>
            <li><a href="admin/index.php">Dang nhap Admin</a></li>
            <?php }?>
            <li><a href="index.php?act=thoat">Thoat</a></li>
        </div>

        <?php
        }else{

        ?>
        <form action="index.php?act=dangnhap" method="post">
            <div class="row mb10">
                <label for="">Tên đăng nhập:</label>
                <input type="text" name="user"> <br>
            </div>
            <div class="row mb10">
                <label for="">Mật khẩu:</label> <br>
                <input type="text" name="pass">
            </div>
            <div class="row mb10">
                <input type="checkbox"> Ghi nhớ tài khoản?
            </div>
            <div class="row mb10">
                <input type="submit" name="dangnhap" value=" Đăng nhập">
            </div>
            <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
            <li><a href="index.php?act=dangky">Đăng ký thành viên</a></li>
        </form>
        <?php }?>
    </div>
</div>
<div class="row mb">
    <div class="boxtitle">DANH MỤC</div>
    <div class="boxcontent2 menudoc">
        <ul>
            <?php
                    foreach ($dsdm as $dm) {
                        extract($dm);
                        $linkdm ="index.php?act=sanpham&iddm=".$id;
                        echo'
                        <li>
                        <a href="'.$linkdm.'">'.$name.'</a>
                        </li>
                        ';
                    }
                    ?>
            <!-- <li><a href="#">Đồng hồ</a></li>
                    <li><a href="#">Quần nam </a></li>
                    <li><a href="#">Áo nam</a></li>
                    <li><a href="#">Thắt lưng</a></li>
                    <li><a href="#">Áo blaze</a></li>
                    <li><a href="#">Quần jean</a></li> -->

        </ul>
    </div>
    <div class="boxfooter searchbox">
        <form action="index.php?act=sanpham" method="post">
            <input type="text" placeholder="Nhâp tìm kiếm sản phẩm" id="search-input" name="kyw">
            <button type="submit" name="timkiem">
            <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </form>
    </div>
</div>
<div class="row">
    <div class="boxtitle">TOP 10 YÊU THÍCH</div>
    <div class="row boxcontent">
        <?php
                foreach ($dstop10 as $sp) {
                    extract($sp);
                    $linksp = "index.php?act=sanphamct&idsp=".$id;
                    $img = $img_path.$img;
                    echo '
                    <div class="row mb10 top10">
                    <img src="'.$img.'" alt="">
                    <a href="'.$linksp.'">'.$name.'</a>
                </div>
                    ';
                }
                ?>
        <!-- <div class="row mb10 top10">
                    <img src="view/image/anh1.png" alt="">
                    <a href="#">Áo Blazer Nam Dài Hàn Quốc</a>
                </div>
                <div class="row mb10 top10">
                    <img src="view/image/anh2.png" alt="">
                    <a href="#">Áo sơ mi Nam sọc Hàn Quốc</a>
                </div>
                <div class="row mb10 top10">
                    <img src="view/image/anh2.png" alt="">
                    <a href="#">Áo phông Nam Hàn Quốc</a>
                </div>
                <div class="row mb10 top10">
                    <img src="view/image/anh3.png" alt="">
                    <a href="#">Áo sơ mi Nam Dài Hàn Quốc</a>
                </div>
                <div class="row mb10 top10">
                    <img src="view/image/anh4.png" alt="">
                    <a href="#">Áo sơ mi nam cổ bẻ thời trang Hàn</a>
                </div>
                <div class="row mb10 top10">
                    <img src="view/image/anh5.png" alt="">
                    <a href="#">Áo sơ mi dài in họa tiết Hàn Quốc</a>
                </div>
                <div class="row mb10 top10">
                    <img src="view/image/anh6.png" alt="">
                    <a href="#">Áo sơ mi rộng thoáng khí thấm hút</a>
                </div>
                <div class="row mb10 top10">
                    <img src="view/image/anh7.png" alt="">
                    <a href="#">Áo sơ mi nam tay lỡ cực chất</a>
                </div> -->
    </div>
</div>