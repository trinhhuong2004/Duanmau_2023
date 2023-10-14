<?php
    session_start();
    include '../../model/pdo.php';
    include '../../model/binhluan.php';
    $idpro = $_REQUEST['idpro'];
    $dsbl = loadAll_binhluan($idpro);
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>

    </style>
</head>
<body>
<div class="row mb">
    <div class="boxtitle">BÌNH LUẬN</div>
    <div class="boxcontent2 ">
        <ul>
            <table>
            <?php

                    foreach($dsbl as $binhluan){
                        extract($binhluan);
                        echo '<tr>
                        <td>'.$noidung.'</td>;
                        <td>'.$iduser.'</td>;
                        <td>'.$ngaybinhluan.'</td></tr>';
                    }
                    ?>
            </table>

        </ul>
    </div>
    <div class="boxfooter searchbox">
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
            <input type="hidden" name="idpro" value="<?=$idpro?>">
            <input type="text" name="noidung">
            <button type="submit" name="guibinhluan">Gửi bình luận</button>
        </form>
    </div>

    <?php
    
    if(isset($_POST['guibinhluan'])){
        $noidung = $_POST['noidung'];
        $idpro = $_POST['idpro'];
        $iduser = $_SESSION['user']['id'];
        $ngaybinhluan = date("h:i:sa d/m/Y");
        insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
        header("location: ".$_SERVER['HTTP_REFERER']);
    }
    ?>
</div>
</body>
</html>
