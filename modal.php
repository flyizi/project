<div class="modal">
            <div class="modal_box">
                <div class="modal_header">
                    <h3 class="modal_title">Добавление поста</h3>
                    <button class="close">X</button>
                </div>
                <div class="modal_body">
                    <form action="postadd.php" method="post" enctype="multipart/form-data"
                          class="form_add_post">
                        <div class="post_add_element">
                            <label class="form_add_post_label">Название поста</label>
                            <input type="text" class="form_add_post_name_input" name="name">
                        </div>
                        <div class="post_add_element">
                            <label class="form_add_post_label_file" for="file_photo">Выберите файл</label>
                            <input type="file" class="form_add_post_input_file" name="photo" id="file_photo">
                        </div>
                        <div class="post_add_element">
                            <textarea class="area_conten" name="content" rows="8" placeholder="Краткое описание"></textarea>
                        </div>
                        <div class="post_add_element">
                            <input type="submit" value="Добавить пост" class="form_add_post_submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>