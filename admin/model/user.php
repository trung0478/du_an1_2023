<?php
    function loadAll_user(){
        $sql =  "SELECT * FROM nguoidung order by ma_nd desc";
        $result = pdo_query($sql);
        return $result;
    }
    function insert_User($name, $gender, $phone, $email, $address, $name_acount, $permission, $status){
        $sql = "INSERT INTO nguoidung (ho_ten, gioi_tinh, email, sdt, tai_khoan, mat_khau, ma_quyen, trang_thai)
        VALUES ('$name', '$gender', '$phone', '$email', '$address', '$name_acount', '$permission', '$status');
        )";
        pdo_execute($sql);
    }
    function look_Acout($id){
        $sql = "UPDATE nguoidung SET trang_thai = 1 WHERE ma_nd=".$id;
        pdo_execute($sql);
    }
    function open_Acount($id){
        $sql = "UPDATE nguoidung SET trang_thai = 0 WHERE ma_nd=".$id;
        pdo_execute($sql);
    }


?>