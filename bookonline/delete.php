<?php
ob_start();
if(!isset($_GET['id'])){
    //chuyển ngược về trang list author
    header('Location:list-author.php');
}
$id = $_GET['id'];
$connect = mysqli_connect('127.0.0.1','root','koodinh@','bookonline');
///kiểm tra xem tác gỉa có $id có bao nhiêu quyển sách
$sql = "SELECT count(id) AS total_book FROM book WHERE author_id=$id";
$rs = mysqli_query($connect,$sql);
$row = mysqli_fetch_assoc($rs);
if($row['total_book']>0){
    echo 'Không thể xoá tác giả này vì có sách trong CSDL';
    exit();
}
$sql = "DELETE FROM author WHERE id=$id";
mysqli_query($connect,$sql);
header('Location:list-author.php');
ob_flush();
?>