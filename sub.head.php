    <!-- main과 분리되어있다는 표시 ** -->
    <div class="sub_page">

        <div class="page">
            <!-- ol 서브네비라서 분리한다고 다른 태그를 사용해준 것 -->
            <ol class="inner flex">
                <li>
                    <a href="/">HOME</a>
                </li>
                <li>
                    <?
                    // 그누보드가 만든 문법이다.
                    if ($bo_table) {
                        echo $board[bo_subject];
                    } else {
                        echo $page_title;
                    }
                    ?>
                </li>
            </ol>
        </div>
        <div class="inner flex">
            <article class="section">
                <!-- 서브페이지의 내용 부분입니다. -->
                <h3>
                    <?
                    // 그누보드가 만든 문법이다.
                    if ($bo_table) {
                        echo $board[bo_subject];
                    } else {
                        echo $page_title;
                    }
                    ?>
                </h3>
                <p>Open API Market<br />핀테크 기업 및 일반 개발자들이 금융서비스를 편리하게 개발할 수 있도록<br />신한 금융 그룹 의 금융서비스 API를 제공하는 Market입니다</p>
                <!-- 여기는 서브페이지에만 나오는 헤드 -->