<div class="row">
            <div class="row header1 mb10">
                <h1>DANH SÁCH TÀI KHOẢN </h1>
            </div>
            <div class="row formcontent">
            <div class="row mb10 frmloai" >
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ TÀI KHOẢN</th>
                        <th>TÊN ĐĂNG NHẬP</th>
                        <th>MẬT KHẨU</th>
                        <th>EMAIL</th>
                        <th>ĐỊA CHỈ</th>
                        <th>ĐIỆN THOẠI</th>
                        <th>VAI TRÒ</th>
                        <th></th>
                    </tr>
                    <?php
                    // Hiển thị tất cả dữ liệu có trong bảng danh mục
                    foreach ($listtaikhoan as $taikhoan) {
                        //Hàm extract() tạo ra các từ khóa (key) và gán cho tưng biến 
                        extract($taikhoan);
                        $suatk = "index.php?act=suatk&id=".$id;
                        $xoatk = "index.php?act=xoatk&id=".$id;
                        echo '<tr>
                        <td><input type="checkbox"></td>
                        <td>'.$id.'</td>
                        <td>'.$user.'</td>
                        <td>'.$pass.'</td>
                        <td>'.$email.'</td>
                        <td>'.$address.'</td>
                        <td>'.$tel.'</td>
                        <td>'.$role.'</td>
                      
                        <td><a href = "'.$suatk.'"><input type="button" value="Sửa"></a> <a href="'.$xoatk.'"><input type="button" value="Xóa"></a></td>
                       
                    </tr>';
                    }
                    
                    ?>
                 
                 
                </table>
            </div>
            <div class="row mb10">
                <input type="button" value="Chọn tất cả">
                <input type="button" value="Bỏ chọn tất cả">
                <input type="button" value="Xóa các mục đã chọn">
                <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
                
            </div>
            </div>
        </div>
    </div>