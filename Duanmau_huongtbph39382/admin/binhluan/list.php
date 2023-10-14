<div class="row">
            <div class="row header1 mb10">
                <h1>DANH SÁCH TÀI KHOẢN </h1>
            </div>
            <div class="row formcontent">
            <div class="row mb10 frmloai" >
                <table>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>NỘI DUNG BÌNH LUẬN</th>
                        <th>IDUSER</th>
                        <th>IDPRO</th>
                        <th>NGÀY BÌNH LUẬN</th>
                        <th></th>
                    </tr>
                    <?php
                    // Hiển thị tất cả dữ liệu có trong bảng danh mục
                    foreach ($listbinhluan as $binhluan) {
                        //Hàm extract() tạo ra các từ khóa (key) và gán cho tưng biến 
                        extract($binhluan);
                        $suabl = "index.php?act=suabl&id=".$id;
                        $xoabl = "index.php?act=xoabl&id=".$id;
                        echo '<tr>
                        <td><input type="checkbox"></td>
                        <td>'.$id.'</td>
                        <td>'.$noidung.'</td>
                        <td>'.$iduser.'</td>
                        <td>'.$idpro.'</td>
                        <td>'.$ngaybinhluan.'</td>
                       
                      
                        <td><a href = "'.$suabl.'"><input type="button" value="Sửa"></a> <a href="'.$xoabl.'"><input type="button" value="Xóa"></a></td>
                       
                    </tr>';
                    }
                    
                    ?>
                 
                 
                </table>
            </div>
            <div class="row mb10">
                <input type="button" value="Chọn tất cả">
                <input type="button" value="Bỏ chọn tất cả">
                <input type="button" value="Xóa các mục đã chọn">
                
            </div>
            </div>
        </div>
    </div>