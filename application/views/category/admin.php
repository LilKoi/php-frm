<?php
require "application/views/general/admin/header.php";
?>  

    <section class="admin-category-list">
        <div class="container">
            <?php foreach($categories as $category): ?>
            <div class="admin-category">
                <h4><?php echo $category["name"] ?></h4>
                <a class="ctg-delete" href="/admin/category/delete">X</a>
                <a class="ctg-edit" href="/admin/category/edit?id=<?php echo $category["id"];?>">Изменить</a>
                <p>img на данный момент: <?php echo $category["img"] ?></p>
            </div>
            <?php endforeach ?>
        </div>     
    </section>

<?php
require "application/views/general/footer.php";
?>