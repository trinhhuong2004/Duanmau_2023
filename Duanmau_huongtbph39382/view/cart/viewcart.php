
<div class="row mb ">
    <div class="boxleft mr">
        <div class="row mb">
            <div class="boxtitle">GIỎ HÀNG</div>
            <div class="row boxcontent">
            <table style="width: 100%; text-align: center;">
                
                <?php
               viewcart(1);
                
                ?>
                <!-- <tr>
                    <td>1</td>
                    <td><img src="images/1.jpg" alt=""></td>
                    <td>Đồng hồ</td>
                    <td>50</td>
                    <td>100vnd</td>
                    <td><input type="button" value="Xóa"></td>
                    
                </tr>
                <tr>
                    <td>1</td>
                    <td><img src="images/1.jpg" alt=""></td>
                    <td>Đồng hồ</td>
                    <td>50</td>
                    <td>100vnd</td>
                    <td><input type="button" value="Xóa"></td>
                    
                </tr> -->
              
            </table>
            </div>

        </div>
        <div class="row mb bill">
        <a href="index.php?act=bill"><input type="button" value="TIẾP TỤC ĐẶT HÀNG"></a> <a href="index.php?act=delcart"><input type="button" value="XÓA GIỎ HÀNG"></a>
        </div>

    </div>
    
    <div class="boxright">
        <?php include 'view/boxright.php'?>
    </div>
</div>