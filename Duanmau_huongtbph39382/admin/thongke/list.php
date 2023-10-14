<head>
    <style>
        .thongke{
            
            width: 100%;
        }
        .table{
            width: 100%;
        }
        .form-group button {
            margin-top: 10px;
            background-image: linear-gradient(to right, #000, red);
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.5s ease-in-out;
        }
    </style>
</head>
<div class=" thongke">
        <h3 class="alert alert-success">
            Thống Kê Hàng Hóa Từng loại
        </h3>
        <table class="table">
            <thead class="alert-success">
                <tr>
                    <th>MÃ DANH MỤC</th>
                    <th>TÊN DANH MỤC</th>
                    <th>SỐ LƯỢNG</th>
                    <th>GIÁ CAO NHẤT</th>
                    <th>GIÁ THẤP NHẤT</th>
                    <th>GIÁ TRUNG BÌNH</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listthongke as $tk) {
                    extract($tk);
                    echo '
                        <tr>
                            <td>'.$madm.'</td>
                            <td>'.$tendm.'</td>
                            <td>'.$COUNTSP.'</td>
                            <td>'.$MINPRICE.'</td>
                            <td>'.$MAXPRICE.'</td>
                            <td>'.$AVGPRICE.'</td>
                        </tr>
                    ';
                }
                ?>
            
            </tbody>
        </table>
        <div class="form-group">
            <a href="index.php?act=bieudo"><button type="submit">Xem biểu đồ</button></a>
        </div>
    </div>
</div>