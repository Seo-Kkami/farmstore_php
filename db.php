<?php

$db = mysqli_connect('localhost', 'kkamifarm', 'tjduddms8573!', 'kkamifarm');

if (!$db) {
  echo "DB접속 실패";
} 

else {
  echo "DB접속 성공";
}


?>