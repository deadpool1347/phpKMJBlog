<?php
use yii\widgets\ListView;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<!-- Blog items Wrapper -->
<div class="blog-items-wrapper blog-col-1">


    <!-- Blog item -->
  <?php
    echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_article',
]); ?>

</div><!-- /End Blog items Wrapper -->

<!-- Navigation Block -->
<div class="gfort-navigation-block">
    <nav aria-label="Page navigation">
        <!-- Pagination -->
        <ul class="pagination">

            <li class="disabled">
                <span>
                    <span aria-hidden="true">
                        <i class="fa fa-angle-left"></i>
                    </span>
                </span>
            </li>

            <li class="active">
                <span>1 <span class="sr-only">(current)</span></span>
            </li>

            <li><a href="/theme/#">2</a></li>
            <li><a href="/theme/#">3</a></li>
            <li><a href="/theme/#">4</a></li>
            <li><a href="/theme/#">5</a></li>

            <li>
                <a href="/theme/#" aria-label="Next">
                    <span aria-hidden="true">
                        <i class="fa fa-angle-right"></i>
                    </span>
                </a>
            </li>

        </ul><!-- /End Pagination -->
    </nav>
</div><!-- /End Navigation Block -->
