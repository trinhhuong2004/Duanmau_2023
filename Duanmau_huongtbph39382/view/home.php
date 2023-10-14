<div class="row mb ">
    <div class="boxleft mr">
        <div class="row">
            <div class="banner mb">
                <img src="view/image/banner.jpg" alt="">
            </div>
            <div class="banner mb">
                <img src="view/image/banner2.webp" alt="">
            </div>
        </div>

        <div class="row">
            <?php
            $i = 0;
            foreach ($newsp as $sp) {
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
               <div class="cart">
              
               </div>
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
          
            

            <!-- <div class="boxsp mr">
                <img src="view/image/anh1.png" alt="">


                <a href="#">Áo sơ mi nam form rộng tay lỡ cực chất</a>
                <h6>10% Giảm</h6><span class="flash_sale">Flash Sale</span>
                <p>200.000 vnd</p><span class="name">Đã bán 2,2k</span>
                <div class="love">
                    <img src="view/image/yeutich.png" alt="">
                </div>
                <div class="giam">
                    <img src="view/image/giamgia.png" alt="">
                </div>

            </div>
            <div class="boxsp mr">
                <img src="view/image/anh2.png" alt="">

                <a href="#">Áo sơ mi tay lỡ phong cách Hàn Quốc</a>
                <h6>10% Giảm</h6><span class="flash_sale">Flash Sale</span>
                <p>200.000 vnd</p><span class="name">Đã bán 2,2k</span>
                <div class="heart">
                    <i class="fa-regular fa-heart"></i>
                </div>
            </div>
            <div class="boxsp mr">
                <img src="view/image/anh3.png" alt="">

                <a href="#">Áo sơ mi dài in họa tiết Hàn Quốc</a>
                <h6>10% Giảm</h6><span class="flash_sale">Flash Sale</span>
                <p>200.000 vnd</p><span class="name">Đã bán 2,2k</span>
                <div class="love">
                    <img src="view/image/yeutich.png" alt="">
                </div>
                <div class="giam">
                    <img src="view/image/giamgia.png" alt="">
                </div>
            </div>
            <div class="boxsp mr">
                <img src="view/image/anh4.png" alt="">

                <a href="#">Áo sơ mi nam form rộng tay lỡ cực chất</a>
                <h6>10% Giảm</h6><span class="flash_sale">Flash Sale</span>
                <p>200.000 vnd</p><span class="name">Đã bán 2,2k</span>
                <div class="love">
                    <img src="view/image/yeutich.png" alt="">
                </div>
                <div class="giam">
                    <img src="view/image/giamgia.png" alt="">
                </div>
            </div>
            <div class="boxsp mr">
                <img src="view/image/anh5.png" alt="">

                <a href="#">Áo sơ mi tay lỡ phong cách Hàn Quốc</a>
                <h6>10% Giảm</h6><span class="flash_sale">Flash Sale</span>
                <p>200.000 vnd</p> <span class="name">Đã bán 2,4k</span>
                <div class="heart">
                    <i class="fa-regular fa-heart"></i>
                </div>
            </div>
            <div class="boxsp mr">
                <img src="view/image/anh6.png" alt="">

                <a href="#">Áo sơ mi dài in họa tiết Hàn Quốc</a>
                <h6>10% Giảm</h6><span class="flash_sale">Flash Sale</span>
                <p>200.000 vnd</p><span class="name">Đã bán 2,2k</span>
                <div class="love">
                    <img src="view/image/yeutich.png" alt="">
                </div>
                <div class="giam">
                    <img src="view/image/giamgia.png" alt="">
                </div>
            </div>
            <div class="boxsp mr">
                <img src="view/image/anh7.png" alt="">
                <a href="#">Áo sơ mi nam tay dài cổ bẻ thời trang Hàn</a>
                <h6>10% Giảm</h6><span class="flash_sale">Flash Sale</span>
                <p>200.000 vnd</p>
                <div class="love">
                    <img src="view/image/yeutich.png" alt="">
                </div>
                <div class="giam">
                    <img src="view/image/giamgia.png" alt="">
                </div>
            </div>
            <div class="boxsp mr">
                <img src="view/image/anh8.png" alt="">
                <a href="#">Áo sơ mi dài tay in họa tiết thời trang Hàn</a>
                <h6>10% Giảm</h6><span class="flash_sale">Flash Sale</span>
                <p>200.000 vnd</p>
                <div class="heart">
                    <i class="fa-regular fa-heart"></i>
                </div>
            </div>
            <div class="boxsp mr">
                <img src="view/image/anh9.png" alt="">

                <a href="#">Áo sơ mi dài tay thiết kế mới đơn giản</a>
                <h6>10% Giảm</h6><span class="flash_sale">Flash Sale</span>
                <p>200.000 vnd</p><span class="name">Đã bán 2,2k</span>
                <div class="heart">
                    <i class="fa-regular fa-heart"></i>
                </div>
            </div>
            <div class="boxsp mr">
                <img src="view/image/anh1.jpg" alt="">

                <a href="#">Áo sơ mi nam form rộng tay lỡ cực chất</a>
                <h6>10% Giảm</h6><span class="flash_sale">Flash Sale</span>
                <p>200.000 vnd</p><span class="name">Đã bán 2,2k</span>
                <div class="love">
                    <img src="view/image/yeutich.png" alt="">
                </div>
                <div class="giam">
                    <img src="view/image/giamgia.png" alt="">
                </div>
            </div>
            <div class="boxsp mr">
                <img src="view/image/ha.jpg" alt="">

                <a href="#">Áo sơ mi nam tay dài cổ bẻ thời trang Hàn</a>
                <h6>10% Giảm</h6><span class="flash_sale">Flash Sale</span>
                <p>200.000 vnd</p><span class="name">Đã bán 2,2k</span>
                <div class="heart">
                    <i class="fa-regular fa-heart"></i>
                </div>
            </div>
            <div class="boxsp mr">
                <img src="view/image/anh2.jfif" alt="">

                <a href="#">Áo sơ mi dáng rộng thoáng khí thấm hút</a>
                <h6>10% Giảm</h6><span class="flash_sale">Flash Sale</span>
                <p>200.000 vnd</p><span class="name">Đã bán 2,2k</span>
                <div class="love">
                    <img src="view/image/yeutich.png" alt="">
                </div>
                <div class="giam">
                    <img src="view/image/giamgia.png" alt="">
                </div>
            </div>-->


        </div>

    </div>
    <div class="boxright">
        <?php include 'boxright.php'?>
    </div>
</div>