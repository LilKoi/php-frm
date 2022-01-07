<?php
require "application/views/general/admin/header.php";
?>

    <section class="category-create">
        <div class="container">
            <form method="POST" enctype="multipart/form-data" <?php if(isset($category)){ echo 'action="/category/update?id='. $category["id"].'"';}else{ echo 'action="/category/store"';} ?>>
                <div class="input">
                    <h4>Имя</h4>
                    <input value="<?php if(isset($category)) echo $category['name']?>" name="name">
                </div>
                <div class="input">
                    <h4>Фото</h4>
                    <img src='<?php if(isset($category)) echo "/public/img/categories/".$category['img']?>' id="photo">
                </div>
                <div class="input">
                    <h4>Воставьте фото</h4>
                    <input type="file" name="img" onchange="readURL(this);">
                </div>
                <button>Создать</button>
            </form>
        </div>
    </section>

    <script src="/public/scripts/admin.js"></script>
<?php
require "application/views/general/footer.php";
?>