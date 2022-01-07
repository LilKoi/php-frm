<?php
require "application/views/general/header.php";
?>
    <section class="faq">
        <div class="container">
            <form action="faq/store" method="POST">
                <div class="faq-logo">
                    <h1>Часто задаваемые вопросы</h1>
                    <button>Задать вопрос</button>
                </div>
                <div class="input">
                    <h4>Имя</h4>
                    <input name="name">
                </div>
                <div class="input">
                    <h4>E-mail</h4>
                    <input name="email">
                </div>
                <div class="input">
                    <h4>Телефон</h4>
                    <input name="phone">
                </div>
                <div class="input">
                    <h4>Текст вопроса</h4>
                    <textarea name="question"></textarea>
                </div>
            </form>
        </div>
    </section>
    <section class="faqs">
        <div class="container">
            <div class="faqs-list">
                <?php foreach($faqs as $faq): ?>
                <div class="faq-card">
                    <div class="faq-question">
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                        <h2><?php echo $faq["question"]; ?></h2>
                    </div>
                    <div class="faq-question">
                    <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                        <p><?php echo $faq["answer"]; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php
require "application/views/general/footer.php";
?>