<div class="row">
            <div class="row header1 mb10">
                <h1>DANH SÁCH BILL </h1>
            </div>
            <div class="row formcontent ">
            <div class="row mb10 frmloai mb" >
                
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ ĐƠN HÀNG</th>
                        <th>KHÁCH HÀNG</th>
                        <th>SỐ LƯỢNG HÀNG</th>
                        <th>GIÁ TRỊ ĐƠN HÀNG</th>
                        <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                        <th>NGÀY ĐẶT HÀNG</th>
                        <th>THAO TÁC</th>
                    </tr>
                    <?php
                    foreach ($listbill as $bill) {
                       
                        extract($bill);
                        $suabill ="index.php?act=suabill&id=".$id;
                        $xoabill ="index.php?act=xoabill&id=".$id;
                        $kh = $bill['bill_name'].'
                        <br>'.$bill['bill_email'].'
                        <br>'.$bill['bill_address'].'
                        <br>'.$bill['bill_tel'];
                        $ttdh = get_ttdh(["bill_status"]);
                        $countsp = loadall_cart_count($bill['id']);

                        echo '<tr>
                        <td><input type="checkbox"></td>
                        <td>DAM-'.$bill['id'].'</td>
                        <td>'.$kh.'</td>
                        <td>'.$countsp.'</td>
                        <td>'.$bill["total"].'</td>
                        <td>'.$ttdh.'</td>
                        <td>'.$bill['ngaydathang'].'</td>
                        <td><a href = "'.$suabill.'"><input type="button" value="Sửa"></a> <a href="'.$xoabill.'"><input type="button" value="Xóa"></a></td>
                       
                    </tr>';
                    }
                    
                    ?>
                 
                 
                </table>
            </div>
            <div class="row mb10">
                <input type="button" value="Chọn tất cả">
                <input type="button" value="Bỏ chọn tất cả">
                <input type="button" value="Xóa các mục đã chọn">
                <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
                
            </div>
            </div>
        </div>
    </div>