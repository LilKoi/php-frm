<?php
require "application/views/general/admin/header.php";
?>
    <section>
        <div class="container">
            <form action="store" enctype="multipart/form-data" method="POST">
                <div class="input">
                    <h4>Имя товара</h4>
                    <input name="name">
                </div>
                <div class="input">
                    <h4>Характеристики</h4>
                    <textarea name="description"></textarea>
                </div>
                <div class="input">
                    <h4>Белый</h4>
                    <input name="white" type="checkbox">
                    <h4>Серый</h4>
                    <input name="grey" type="checkbox">
                    <h4>Красный</h4>
                    <input name="red" type="checkbox">
                </div>
                <div class="input">
                    <h4>S</h4>
                    <input name="s" type="checkbox">
                    <h4>M</h4>
                    <input name="m" type="checkbox">
                    <h4>L</h4>
                    <input name="l" type="checkbox">
                </div>
                <div class="input">
                    <h4>Бренд</h4>
                    <input name="brand">
                </div>
                <div class="input">
                    <h4>Состав</h4>
                    <input name="compound">
                </div>
                <div class="input">
                    <h4>Плотность</h4>
                    <input name="density">
                </div>
                <div class="input">
                    <h4>Качество</h4>
                    <input name="quality">
                </div>
                <div class="input">
                    <h4>производитель</h4>
                    <input name="manufacturer">
                </div>
                <div class="input">
                    <h4>Дизайн</h4>
                    <input name="design">
                </div>
                <div class="input">
                    <h4>цена</h4>
                    <input name="price">
                </div>
                <div class="input">
                    <h4>Картинка товара</h4>
                    <input type="file" name="img">
                </div>
                <button>Создать</button>
            </form>
        </div>
    </section>
    <?php
    require "application/views/general/footer.php";
    ?>
