<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH . '/index.php');
    return;
}

if (G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH . '/index.php');
    return;
}

include_once(G5_THEME_PATH . '/head.php');
?>
<!-- 메인을 서브페이지와 분리하여 사용할 때 class를 달아주면 편하다. -->
<main class="main_page">
    <!-- <h2>우리나라 Korea</h2>
    <i class="xi-bars"></i> -->
    <section class="main_visual">
        <div class="main_slide">
            <figure class="itm01">이미지1</figure>
            <figure class="itm02">이미지2</figure>
            <figure class="itm03">이미지3</figure>
        </div>
        <div class="slogan">
            <h2>신한금융그룹<br />
                Open API Market</h2>
            <p> 당신이 경험하는 모든 것이 새로운 비즈니스의 시작입니다.</p>
        </div>
    </section>
    <div>
        <!-- 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        echo latest("latest_01", 게시판명, 5, 25); -->


        <? echo latest("theme/main_photo", "gallery", 5, 25); ?>
        <? echo latest("theme/main_web", "qa", 5, 25); ?>

    </div>
</main>

<?php
include_once(G5_THEME_PATH . '/tail.php');
