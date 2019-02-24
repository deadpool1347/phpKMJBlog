<?php

use yii\helpers\Url;

?>

<!-- Navbar Collapse (Menu) -->
<div class="navbar-collapse collapse">
    <ul class="nav navbar-nav">

        <li><a href="<?= Url::to(['/']) ?>">Главная</a></li>
        <!-- <li><a href="/theme/index.html">Личный кабинет</a></li> -->
        <li><a href="<?= Url::to(['/site/sign-up']) ?>">Войти</a></li>
        <!-- <li><a href="/theme/index.html">Выйти</a></li> -->

    </ul>
</div><!-- /End Navbar Collapse (Menu) -->