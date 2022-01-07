<?php
require "application/views/general/admin/header.php";
?>  

<section class="admin-cards">
    <div class="container">
        <table border="1">
            <tr>
            <td>Номер товара</td>
            <td>Название</td>
            <td>Категория товара</td>
            <td>Действия</td>
            </tr>
            <?php foreach($cards as $card): ?>
            <tr>
                <td><?php echo $card["id"]; ?></td>
                <td><?php echo $card["name"]; ?></td>
                <td><?php echo $card["category"]["name"]; ?></td>
                <td>
                    <a class="admin-cards-delete" href="/cards/delete?id=<?php echo $card['id'];?>">X</a>
                    <a href="/admin/edit?id=<?php echo $card['id'];?>">изменить</a>
                    <a href="/card/?id=<?php echo $card['id'];?>">информация</a>
                </td>
            </tr>
            <?php endforeach ?>
        </table>
    </div>
</section>

<?php
require "application/views/general/footer.php";
?>