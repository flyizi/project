<?php
session_start();
?>
<?php 
require 'header.php';
?>
<?php 
        $host = 'localhost';
        $login = 'root';
        $paswword = '';
        $bd = 'bdpost';
        $link = mysqli_connect($host, $login, $paswword, $bd);
        $sql = "SELECT * FROM posts";
        $data = mysqli_query($link, $sql);
?>
    <div class="content_section">
        <div class="posts_container">
            <h2 class="comment_title_section">Лента постов</h2>
            <div class="wrapper">
                <?php foreach($data as $element):?>
                    <div class="card_post">
                    <div class="img_block">
                        <img src="img/<?=$element['photo']?>" class="img_post">
                    </div>
                    <div class="card_body_post">
                        <div class="title">
                            <a href="one_post.php?post_id=<?=$element['id']?>" class="link_post"><?=$element['name']?></a>
                        </div>
                        <p class="content_post"><?=$element['content']?></p>
                        <button class="like">Нравится<span class="like_count">0</span</buuton>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
    <?php require 'modal.php'?>
    <?php require 'footer.php'?>

