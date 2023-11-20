<?php
function add_account($email, $username, $pass){
    $sql = "INSERT INTO nguoidung (email, tai_khoan, mat_khau) VALUES(?, ?, ?)";
    pdo_execute($sql, $email, $username, $pass);
}

function check_account($username="", $pass) {
    if (!empty($username)) {
        $sql = "SELECT * FROM nguoidung WHERE tai_khoan = '".$username."' AND mat_khau = '".$pass."'";
    } else {
        $sql = "SELECT * FROM nguoidung WHERE mat_khau = '".$pass."'";
    }
    $account = pdo_query_one($sql);
    return $account;
}

function check_email($email) {
    $sql = "SELECT * FROM nguoidung WHERE email = '".$email."'";
    $email = pdo_query_one($sql);
    return $email;
}

function getOne_account($id) {
    $sql = "SELECT * FROM nguoidung WHERE ma_nd = ?";
    $account = pdo_query_one($sql, $id);
    return $account;
}

function update_account($id, $full_name, $gender, $email, $address, $telephone){
    $sql = "UPDATE nguoidung SET ho_ten = '".$full_name."', gioi_tinh = '".$gender."', email = '".$email."', dia_chi = '".$address."', sdt = '".$telephone."' WHERE ma_nd = ?";
    pdo_execute($sql, $id);
}

function update_password($id, $newpass){
    $sql = "UPDATE nguoidung SET mat_khau = '".$newpass."' WHERE ma_nd = ?";
    pdo_execute($sql, $id);
}
?>