<?php
 $host = 'localhost';
 $login = 'root';
 $paswword = '';
 $bd = 'bdpost';
 $link = mysqli_connect($host, $login, $paswword, $bd);
 if ($link == false) {
     print("Ошибка: Невозможно подключиться к MySQL ");
 }
 $namePost = $_POST['name'];
 $contentPost = $_POST['content'];
 $file = $_FILES['photo'];
 $name = $file['name'];
 $pathFile = __DIR__.'/img/'.$name;
 move_uploaded_file($file['tmp_name'], $pathFile);
 
 $sql = "INSERT INTO posts (name, content, photo) VALUES ('$namePost', '$contentPost', '$name')";
 $result = mysqli_query($link, $sql); 


 header('Location: \index.php');
 exit();
?>