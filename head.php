<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH . '/head.php');
    return;
}

if (G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH . '/shop.head.php');
    return;
}
include_once(G5_THEME_PATH . '/doc/assets.php');
include_once(G5_THEME_PATH . '/head.sub.php');
include_once(G5_LIB_PATH . '/latest.lib.php');
include_once(G5_LIB_PATH . '/outlogin.lib.php');
include_once(G5_LIB_PATH . '/poll.lib.php');
include_once(G5_LIB_PATH . '/visit.lib.php');
include_once(G5_LIB_PATH . '/connect.lib.php');
include_once(G5_LIB_PATH . '/popular.lib.php');
?>

<?php
if (defined('_INDEX_')) { // index에서만 실행
    include G5_BBS_PATH . '/newwin.inc.php'; // 팝업레이어
}
?>

<div class="Wrap">
    <!--  -->
    <div class="top_slogan">
        <ul class="inner flex">
            <li><?= $sh_slogan ?></li>
            <li>
                <a href="/adm" target="_blank">
                    <i class="xi-bars"></i>
                </a>
            </li>
        </ul>
    </div>
    <header class="header">
        <div class="inner flex">
            <!-- 여기는 항상 따라다니는 메뉴 -->
            <h1>
                <a href="/">
                    <img src="<?php echo G5_THEME_URL ?>/img/logo.png" alt="<?= $sh_title ?>">
                </a>
            </h1>
            <nav class="gnb">
                <?php include G5_THEME_PATH . '/doc/nav.php' ?>
            </nav>
        </div>
    </header>
    <?php
    if (!defined('_INDEX_')) { // index가 아닐 때 실행
        include G5_THEME_PATH . '/sub.head.php'; // subpage만의 헤드
    }
    ?>