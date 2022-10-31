<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH . '/tail.php');
    return;
}

if (G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH . '/shop.tail.php');
    return;
}
?>

<?php
if (!defined('_INDEX_')) { // index가 아닐 때 실행
    include G5_THEME_PATH . '/sub.tail.php'; // subpage만의 테일
}
?>

<footer class="footer">
    <ul>
        <li>주소 : <?= $sh_address ?>&nbsp;&nbsp;메일 : <?= $sh_email ?></li>
        <li>대표전화 : <?= $sh_tel ?>&nbsp;&nbsp;Fax : <?= $sh_fax ?></li>
    </ul>
    <address>
        copyright &copy; <?= $sh_title ?> allrights reserved.
    </address>
</footer>
















</div>

<?php
if (G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- 22.10.28 수업시간 num 2 -->
<!-- 주소창의 bo_table이 qa 와 같다면 4번이다 -->
<?
if ($_GET["bo_table"] == "qa") {
    $page_num = "5";
} else if ($_GET["bo_table"] == "gallery") {
    $page_num = "4";
}
?>
<!-- } 하단 끝 -->

<script>
    $(function() {
        // 폰트 리사이즈 쿠키있으면 실행
        font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
    });
</script>
<!-- 22.10.28 수업시간 num 1 -->
<script>
    $(function() {
        var num = <?= $page_num ?>;
        // console.log(num)
        $('.lnb li').eq(num - 1).addClass('on').siblings().removeClass('on');
    })
</script>

<?php
include_once(G5_THEME_PATH . "/tail.sub.php");
