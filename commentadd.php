<?php
session_start();
$id = $_SESSION['id'];
?>
<?php 
$host = 'localhost';
$login = 'root';
$paswword = '';
$bd = 'bdpost';
$nameComment = $_POST['name'];
$comment = $_POST['comment'];
$link = mysqli_connect($host, $login, $paswword, $bd);
$sql_new = "INSERT INTO comments (name, text, postId) VALUES ('$nameComment', '$comment', '$id')";
$res = mysqli_query($link, $sql_new); 
if ($res) {
  //header('Location: \index.php');
  header('Location: http://domentest'.'/one_post.php?post_id='.$id);
  exit();
};
?>
