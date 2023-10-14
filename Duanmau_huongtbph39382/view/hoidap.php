<html>
    <head>
        <style>
            .img img{
                width: 100%;

            }
            .about{
                position: absolute;
                top: 230px;
                left: 637px;
            }
            .about a{
                padding-left: 5px;
            }
            .name{
                color: #ffffff;
                font-size: 15px;
                text-decoration: none;
                border-right: 1px solid #ffffff;
            }
            .name:hover{
                color: #FCA120;
                font-size: 15px;

                
            }
            .name2{
                color: #FCA120;
                text-decoration: none;
                font-size: 13px;

            }
        
            .img{
                margin-bottom: 15px;
            }
           
        </style>
    </head>
</html>
<div class="gioithieu">
    <div class="img">
        <img src="view/image/anhnen.png" alt="">
        <div class="about">
                <a class="name" href="index.php">Trang chủ </a>
                <a class="name2" href="">Tin tức</a>
            
        </div>
    </div>
    <div class="row mb ">
    <div class="boxleft mr">
        <div class="row mb">
            <div class="boxtitle">TIN TỨC SẢN PHẨM <strong>
                    <?php echo $tendm?>
                </strong> </div>
            <div class="row boxcontent">
                <?php
                     $i = 0;
                     foreach ($dssp as $sp) {
                         extract($sp);
                         $linksp = "index.php?act=sanphamct&idsp=".$id;
                         $hinh = $img_path.$img;
                         if(($i == 3) || ($i == 7) ||($i == 11)  ){
                             $mr = "";
                         }else{
                             $mr = "mr";
                         }
                         echo '
                    <div class="boxsp '.$mr.'">
                        <img src="'.$hinh.'" alt="">
                         <a href="'.$linksp.'">'.$name.'</a>
                         <h6>10% Giảm</h6><span class="flash_sale">Flash Sale</span> <br>
                         <p>'.$price.'vnd</p><span class="name">Đã bán 2,2k</span>

                         <div class="cart">
                            <form action="index.php?act=addtocart" method="post">
                            <input type="hidden" name="id" value="'.$id.'">
                            <input type="hidden" name="name" value="'.$name.'">
                            <input type="hidden" name="img" value="'.$img.'">
                            <input type="hidden" name="price" value="'.$price.'">
                            <button type="submit" name="addtocart">
                            <i class="fa-solid fa-bag-shopping"></i>
                            </button>
                            <i id="search" class="fa-solid fa-magnifying-glass"></i>
                            </form>
                        </div>
                         <div class="love">
                             <img src="view/image/yeutich.png" alt="">
                         </div>
                         <div class="giam">
                             <img src="view/image/giamgia.png" alt="">
                         </div>
         
                    </div>';
                         $i++;
                     }
                ?>
            </div>

        </div>


    </div>
    <div class="boxright">
        <?php include 'boxright.php'?>

    </div>
</div>
</div>