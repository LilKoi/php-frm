<?php
require "application/views/general/header.php";
?>
    
    <section class="category-logo">
        <div class="container">
            <h1><?php echo  "Мужские халаты"?></h1>
        </div>
    </section>
    <section class="categories">
        <div class="container">
            <div class="ctg-card-list">
                <div class="ctg-sort">
                    <a href="<?php echo $_SERVER['REQUEST_URI'] ."&" .http_build_query(["sort"=>true]);?>">Сортировка по цене</a>
                </div>
                <div class="ctg-card-list-main">
                    <div class="ctg-card">
                        <img src="../../../public/img/1020.750x0.jpg">
                        <p>Махровый халат с капюшоном Sport</p>
                        <span>Бренд: EvaTeks</span>
                        <span>Состав: 100% турецкий хлопок</span>
                        <span>Страна производитель: Россия</span>
                    </div>
                    <div class="ctg-card">
                        <img src="../../../public/img/1020.750x0.jpg">
                        <p></p>
                    </div>
                    <div class="ctg-card">
                        <img src="../../../public/img/1020.750x0.jpg">
                        <p></p>
                    </div>
                    <div class="ctg-card">
                        <img src="../../../public/img/1020.750x0.jpg">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
require "application/views/general/footer.php";
?>