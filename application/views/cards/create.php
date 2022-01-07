<?php
require "application/views/general/admin/header.php";
?>
    <section>
        <div class="container">
            <form <?php if(!isset($card)){echo 'action="store"';}else{echo 'action="update?id='. $card['id'] . '"';} ?>  enctype="multipart/form-data" method="POST">
                <div class="input">
                    <h4>Имя товара</h4>
                    <input <?php if(isset($card)){echo "value='". $card["name"]."'";}?> name="name">
                </div>
                <div class="input">
                    <h4>Характеристики</h4>
                    <textarea name="description"><?php if(isset($card)){echo $card["description"];}?></textarea>
                </div>
                <div class="input">
                    <h4>Белый</h4>
                    <input name="white" <?php if(isset($card)){ echo ($card["white"] ? "checked" : "");  }?> type="checkbox">
                    <h4>Серый</h4>
                    <input name="grey" <?php if(isset($card)){ echo ($card["grey"] ? "checked" : "");  }?> type="checkbox">
                    <h4>Красный</h4>
                    <input name="red" type="checkbox">
                </div>
                <div class="input">
                    <h4>S</h4>
                    <input name="s" <?php if(isset($card)){ echo ($card["s"] ? "checked" : "");}?> type="checkbox">
                    <h4>M</h4>
                    <input name="m" <?php if(isset($card)){ echo ($card["m"] ? "checked" : "");}?> type="checkbox">
                    <h4>L</h4>
                    <input name="l" <?php if(isset($card)){ echo ($card["l"] ? "checked" : "");}?> type="checkbox">
                </div>
                <div class="input">
                    <h4>Бренд</h4>
                    <input <?php if(isset($card["brand"])){ echo "value='". $card["brand"]. "'";}?> name="brand">
                </div>
                <div class="input">
                    <h4>Состав</h4>
                    <input <?php if(isset($card["compound"])){ echo "value='". $card["compound"]. "'";}?> name="compound">
                </div>
                <div class="input">
                    <h4>Плотность</h4>
                    <input <?php if(isset($card["density"])){ echo "value='". $card["density"]. "'";}?> name="density">
                </div>
                <div class="input">
                    <h4>Качество</h4>
                    <input <?php if(isset($card["quality"])){ echo "value='". $card["quality"]. "'";}?> name="quality">
                </div>
                <div class="input">
                    <h4>производитель</h4>
                    <input <?php if(isset($card["manufacturer"])){ echo "value='". $card["manufacturer"]. "'";}?> name="manufacturer">
                </div>
                <div class="input">
                    <h4>Дизайн</h4>
                    <input <?php if(isset($card["design"])){ echo "value='". $card["design"]. "'";}?> name="design">
                </div>
                <div class="input">
                    <h4>цена</h4>
                    <input <?php if(isset($card["price"])){ echo "value='". $card["price"]. "'";}?> name="price">
                </div>
                <div class="input">
                    <h4>Фото</h4>
                    <img src='<?php if($card["img"] != ""){echo "/public/img/cards/".$card['img'];}?>' id="photo">
                </div>
                <div class="input">
                    <h4>Картинка товара</h4>
                    <input onchange="readURL(this)" type="file" name="img">
                </div>
                <div class="input">
                    <h4>Категория товаров</h4>
                    <select>
                    <option>Выберите Категорию</option>
                        <?php foreach($categories as $category): ?>
                            <option <?php if($_SERVER['REQUEST_URI'] != "/admin/create") {echo ($card["category_id"] == $category["id"] ? "selected" : "");} ?>  value="<?php echo $category["id"];?>"><?php echo $category["name"]; ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <button>Создать</button>
            </form>
        </div>
    </section>
    <script src="/public/scripts/admin.js"></script>
    <?php
    require "application/views/general/footer.php";
    ?>
