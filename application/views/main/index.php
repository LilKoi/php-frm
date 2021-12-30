<?php
require "application/views/general/header.php";
?>
    <section class="menu">
        <div class="container">
            <ul>
                <li><a href="">О нас</a></li>
                <li><a href="">Доставка и оплата</a></li>
                <li><a href="">Контакты</a></li>
                <li><a href="">Вопросы и ответы</a></li>
                <li><a href="">Обмен и возврат</a></li>
            </ul>
        </div>
    </section>
    <section class="category">
        <div class="container">
            <h1>Популярные категории товаров</h1>
            <div class="category-list">
                <div class="ctg">
                    <img src="../../../public/img/2f697027ff35663859e36bc5977aec63.jpg">
                    <p>Женские халаты</p>
                </div>
                 <div class="ctg">
                    <img src="../../../public/img/1020.750x0.jpg">
                    <p>Мужские халаты</p>
                </div>
                <div class="ctg">
                    <img src="../../../public/img/Kak-vyibrat-zhenskiy-trikotazh-dlya-doma-v-podarok.jpg">
                    <p>Домашние костюмы</p>
                </div>
                <div class="ctg">
                    <img src="../../../public/img/H1debb47d9d044a0f92573ea60bcf731dp.jpg">
                    <p>Спортивная одежда</p>
                </div>
            </div>
        </div> 
    </section>
    <section class="catalog">
        <div class="container">
            <div class="now-catalog">
                <h1>Новинки в каталоге</h1>
                <div class="catalogs">
                <?php foreach($nows as $card): ?>
                    <div class="catalog-cart">
                        <img src="../../../public/img/1020.750x0.jpg">
                        <p><?php echo $card["name"];?></p>
                        <p>Цена: <?php echo $card["price"];?><</p>
                        <span>Товар в наличии</span>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="now-catalog">
                <h1>Новинки в каталоге</h1>
                <div class="catalogs">
                <?php foreach($nows as $card): ?>
                    <div class="catalog-cart">
                        <img src="../../../public/img/1020.750x0.jpg">
                        <p><?php echo $card["name"];?></p>
                        <p>Цена: <?php echo $card["price"];?><</p>
                        <span>Товар в наличии</span>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </section>
<?php
require "application/views/general/footer.php";
?>