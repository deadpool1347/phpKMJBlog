<?php

use yii\helpers\Url;

?>

<!-- Navbar Collapse (Menu) -->
<div class="navbar-collapse collapse">
    <ul class="nav navbar-nav">

        <li><a href="<?= Url::to(['/']) ?>">Главная</a></li>
        <!-- <li><a href="/theme/index.html">Личный кабинет</a></li> -->


        <?php if (Yii::$app->user->can('author')) : ?>
        <li>
            <a href="#">Управление</a>
            <ul class="submenu">
                <li><a href="<?= Url::to(['/author/article/index']) ?>">Статьи</a></li>
                <?php if (Yii::$app->user->can('admin')) : ?>
                <li><a href="<?= Url::to(['/admin/user/index']) ?>">Пользователи</a></li>
                <li><a href="#">Комментарии</a></li>
                <li><a href="#">Черный список</a></li>
                <?php endif; ?>
            </ul>
        </li>
        <?php endif; ?>

        <?php if (Yii::$app->user->isGuest) : ?>
          <li><a href="<?= Url::to(['/site/login']) ?>">Войти</a></li>
        <?php else : ?>
          <li><a href="<?= Url::to(['/site/logout']) ?>"> Выйти (<?= Yii::$app->user->identity->login ?>)</a></li>
        <?php endif; ?>
    </ul>
</div><!-- /End Navbar Collapse (Menu) -->



<!-- <li>
    <a href="#">Управление</a>
    <ul class="submenu">

        <li>
            <a href="#">Статьи</a>
            <ul class="submenu">

                <li><a href="header-1.html">Добавить</a></li>
                <li><a href="header-1.html">Потдвердить</a></li>

            </ul>
        </li>



    </ul>
</li> -->
