<?php
function loadAll_taikhoan(){
    $sql = "SELECT * FROM taikhoan order by id desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
    
}
function insert_taikhoan($email,$user,$pass){
    $sql = "INSERT INTO taikhoan (email,user,pass) values('$email','$user','$pass')";
    pdo_execute($sql);
}
function check_user($user,$pass){
    $sql = "SELECT * FROM taikhoan where user ='".$user."' AND pass ='".$pass."'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function check_email($email){
    $sql = "SELECT * FROM taikhoan where email ='".$email."'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_taikhoan($id,$user,$pass,$address,$tel,$email){
        $sql = "UPDATE taikhoan SET user='".$user."', pass='".$pass."',email='".$email."',address='".$address."', tel='".$tel."' WHERE id =".$id;
    pdo_execute($sql);
}

?>