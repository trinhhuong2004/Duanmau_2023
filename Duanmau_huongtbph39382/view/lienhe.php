<html>
    <head>
        <style>
            .gioithieu img{
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
            .content{
                position: relative;
                height: 550px;
            }
            .googlemap form {
            width: 450px;
            margin: 30px;
            position: absolute;
            top: 175px;
            }

            h3 {
            font-size: 20px;
            }

            .googlemap input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            }

            .googlemap input[type="submit"] {
            background-color: #FCA120;
            cursor: pointer;
            }
            .thongtin img{
                margin-right: 20px;
                width: 500px;
                height: 200px;

            }
            .thongtin {
               display: flex;
               margin: 20px;

            }
            

        </style>
    </head>
</html>
<div class="gioithieu">
    <div class="img">
        <img src="view/image/anhnen.png" alt="">
        <div class="about">
                <a class="name" href="index.php">Trang chủ </a>
                <a class="name2" href="">Liên hệ</a>
               
        </div>
    </div>
    <div class="content">
    <div class="thongtin">
        <img src="view/image/lienhe.png" alt="">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.7388374345583!2d105.74965597500083!3d21.04313328728524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454ec90ad0081%3A0xaca4fe92fb4270cd!2zUC4gS2nhu4F1IE1haSwgS2nhu4F1IE1haSwgUGjDumMgRGnhu4VuLCBU4burIExpw6ptLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1696868202891!5m2!1svi!2s" width="600" height="530" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    
    <div class="googlemap">
                <form action="" >
                    <h3>Liên hệ với chúng tôi</h3>
                    <p>Nếu có thắc mắc gì hãy liên hệ với chúng tôi.</p>
                    <input type="text" placeholder="Họ tên" name="user">
                    <input type="text" placeholder="Email">
                    <input type="text" placeholder="Số điên thoại">
                    <input type="text" name="noidung" placeholder="Nội dung">
                    <input type="submit" name="dangky" value="Gửi">

                </form>
     </div>
     </div>
    
    
</div>