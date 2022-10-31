<?php
include_once('../../../common.php');
$page_num = 2;
$page_title = "서비스분야";

include_once(G5_THEME_PATH . '/head.php');
?>

<main>
    <h2><?= $page_num ?></h2>
    <section class="main_visual">
        <div class="main_slide">
            <div>01</div>
            <div>02</div>
            <div>03</div>
        </div>
    </section>
</main>

<?php
include_once(G5_THEME_PATH . '/tail.php');
