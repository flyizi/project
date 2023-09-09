<?php
session_start();
?>
<?php
require 'header.php';
?>
<?php
$id = $_GET['post_id'];
$_SESSION['id'] = $id;
$host = 'localhost';
$login = 'root';
$paswword = '';
$bd = 'bdpost';
$link = mysqli_connect($host, $login, $paswword, $bd);
$sql = "SELECT * FROM posts WHERE id = '$id'";
$sql2 = "SELECT * FROM comments WHERE postID = '$id'";
$data = mysqli_query($link, $sql);
$dataComment = mysqli_query($link, $sql2);
$row = mysqli_fetch_assoc($data);
?>
<div class="post_section">
    <div class="post_content_container">
        <div class="wrap_section">
            <div class="block_photo">
                <img src="img/<?=$row['photo']?>" class="img_fluid">
            </div>
            <div class="block_description">
                <div class="post_title">
                    <h2><?=$row['name']?></h2>
                </div>
                <p class="post_description"><?=$row['content']?></p>
            </div>
        </div>
        <div class="section_comment">
        <h3 class="comment_title_section">Комментарии</h3>
        <div class="wrapper_comment">
            <?php foreach($dataComment as $com):?>
            <div class="card_comment">
                <h2 class="title_piople"><?=$com['name']?></h2>
                <p class="block_comment"><?=$com['text']?></p>
            </div>
            <?php endforeach;?>
        </div>
        <div>
        <h3 class="comment_title_section">Оставьте свой комментарий</h3>
        <form action="commentadd.php" method="post" enctype="multipart/form-data"
             class="form_add_comment">
            <div class="post_add_element">
                 <input type="text" class="form_add_post_name_input" name="name" placeholder="Ваше имя">
            </div>
            <div class="post_add_element">
                 <textarea class="area_conten" name="comment" rows="8" placeholder="Ваш комментарий"></textarea>
            </div>
            <div class="post_add_element">
                <input type="submit" value="Добавить комментарий" class="comment_add">
            </div>
        </form>
        </div>
        </div>
    </div>
</div>
<?php require 'modal.php'?>
<?php require 'footer.php'?>
