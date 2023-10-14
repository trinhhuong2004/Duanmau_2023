<div class="row mb ">
    <div class="boxleft mr">
        <div class="row mb">
            <div class="boxtitle mb">CẬP NHẬT TÀI KHOẢN </div>
            <div class="row boxcontent formdangky">
                <?php
                if(isset($_SESSION['user']) && (is_array($_SESSION['user']))){
                    extract($_SESSION['user']);
                }
                ?>
                <form action="index.php?act=edit_taikhoan" method="post">
                    <h3>CẬP NHẬT TÀI KHOẢN</h3>
                    <input type="text" placeholder="Họ">
                    <input type="text" placeholder="Tên" name="user" value="<?=$user?>">
                    <input type="email" name="email" placeholder="Email" value="<?=$email?>">
                    <input type="text" name="address" placeholder="Địa chỉ" value="<?=$address?>">
                    <input type="text" name="tel" placeholder="Số điên thoại" value="<?=$tel?>">
                    <input type="password" name="pass" placeholder="Mật khẩu" value="<?=$pass?>">
                    <input type="hidden" name="id" id="" value="<?=$id?>">
                    <input type="submit" name="capnhat" value="Cập nhật">
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