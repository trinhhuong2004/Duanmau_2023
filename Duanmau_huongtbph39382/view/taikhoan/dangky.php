<div class="row mb ">
    <div class="boxleft mr">
        <div class="row mb">
            <div class="boxtitle">ĐĂNG KÝ THÀNH VIÊN </div>
            <div class="row boxcontent formdangky">
                <form action="index.php?act=dangky" method="post">
                    <h3>ĐĂNG KÝ</h3>
                    <input type="text" placeholder="Họ" name="user">
                    <input type="text" placeholder="Tên" name="user">
                    <input type="email" name="email" placeholder="Email">
                    <input type="text" name="number" placeholder="Số điên thoại">
                    <input type="password" name="pass" placeholder="Mật khẩu">
                    <input type="submit" name="dangky" value="Đăng ký">
                    <input type="reset" value="Nhập lại">
                </form>
                <h2 class="thongbao">
                    <?php
                if(isset($thongbao)){
                    echo $thongbao;
                }
                ?>
                </h2>
            </div>

        </div>


    </div>
    <div class=" boxright">
        <?php include 'view/boxright.php'?>

    </div>
</div>