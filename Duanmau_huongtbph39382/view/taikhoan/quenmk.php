<div class="row mb ">
    <div class="boxleft mr">
        <div class="row mb">
            <div class="boxtitle">QUÊN MẬT KHẨU </div>
            <div class="row boxcontent formdangky">
                <form action="index.php?act=quenmk" method="post">
                    <h3>LẤY LẠI MẬT KHẨU</h3>
                    <input type="email" name="email" placeholder="Email">
                    <h2 class="thongbao">
                    <?php
                if(isset($thongbao)){
                    echo $thongbao;
                }
                ?>
                </h2>
                    <input type="submit" name="guiemail" value="Gửi">
                    <input type="reset" value="Nhập lại">
                </form>
                
            </div>

        </div>


    </div>
    <div class=" boxright">
        <?php include 'view/boxright.php'?>

    </div>
</div>