<div class="row mb ">
    <div class="boxleft mr">
        <div class="row mb">
            <?php
             extract($onesp);

            ?>
            <div class="boxtitle">
                <?php echo $name?>
            </div>
            <div class="row boxcontent">
                <?php
                
                $img=$img_path.$img;
   
                echo '<div class="row mb spct"><img src="'.$img.'" width=300 style ="margin: 0 auto;" ></div>';

                echo $mota;
                ?>
            </div>

        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
            <script>
                $(document).ready(function(){
                    $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});

                });
            </script>
        <div class="row" id="binhluan"></div>
  
        <div class="row mb">
            <div class="boxtitle">SẢN PHẨM CÙNG LOẠI</div>
            <div class="row boxcontent">
                <?php
                $i = 0;
                foreach ( $sp_cung_loai as $sp_cung_loai) {
                    extract($sp_cung_loai);
                    $linksp = "index.php?act=sanphamct&idsp=".$id;
                    $hinh = $img_path.$img;
                    if(($i == 3) || ($i == 7) ||($i == 11)  ){
                        $mr = "";
                    }else{
                        $mr = "mr";
                    }
                

                    echo ' <div class="boxsp '.$mr.'">
                        <img src="'.$hinh.'" alt="">
                         <a href="'.$linksp.'">'.$name.'</a>
                         <h6>10% Giảm</h6><span class="flash_sale">Flash Sale</span> <br>
                         <p>'.$price.'vnd</p><span class="name">Đã bán 2,2k</span>

                         <div class="love">
                             <img src="view/image/yeutich.png" alt="">
                         </div>
                         <div class="giam">
                             <img src="view/image/giamgia.png" alt="">
                         </div>
         
                    </div>';
                }
                ?>

            </div>
        </div>

    </div>
    <div class="boxright">
        <?php include 'boxright.php'?>

    </div>
</div>