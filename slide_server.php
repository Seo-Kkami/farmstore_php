<?php

include('db.php');

if(isset($_POST['name1']) && isset($_POST['tel1']) && isset($_POST['name2']) && isset($_POST['addr']) && isset($_POST['tel2']) && isset($_POST['memo']) && isset($_POST['applenum']) && isset($_POST['orangenum']) && isset($_POST['strawberrynum']) && isset($_POST['blueberrynum'])){

  $name1 = mysqli_real_escape_string($db, $_POST['name1']);
  $tel1 = mysqli_real_escape_string($db, $_POST['tel1']);
  $name2 = mysqli_real_escape_string($db, $_POST['name2']);
  $addr = mysqli_real_escape_string($db, $_POST['addr']);
  $tel2 = mysqli_real_escape_string($db, $_POST['tel2']);
  $memo = mysqli_real_escape_string($db, $_POST['memo']);
  $applenum = mysqli_real_escape_string($db, $_POST['applenum']);
  $orangenum = mysqli_real_escape_string($db, $_POST['orangenum']);
  $strawberrynum = mysqli_real_escape_string($db, $_POST['strawberrynum']);
  $blueberrynum = mysqli_real_escape_string($db, $_POST['blueberrynum']);



  $sql_save2 = "insert into orderlist(mb_name, mb_phone, o_name, o_address, o_phone, o_memo, apple_num, orange_num, strawberry_num, blueberry_num) values('$name1','$tel1','$name2','$addr','$tel2','$memo','$applenum','$orangenum','$strawberrynum','$blueberrynum')";
  $result2 = mysqli_query($db, $sql_save2);

  if ($result2) {
    header("location: slide.php?success=주문서를 전송했습니다");
    exit();
  } else {
    header("location: slide.php?error=주문서 전송에 실패하였습니다");
    exit();
  }



}

else{
  header("location: slide.php?error=알수없는 오류가 발생하였습니다");
  exit();
}


?>