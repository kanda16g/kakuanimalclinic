<header class="header">
        <div class="header__l">

            <?php if(is_front_page()){ echo '<h1 class="header__title">';}else{ echo '<p class="header__title">';} ?>
            名古屋市のかくう動物クリニックです。飼い主様と動物たちに寄り添った診療を行います。
            <?php if(is_front_page()){ echo '</h1>';}else{ echo '</p>';} ?>

            
            <p class="header__logo"><a data-title="KAKU ANIMAL CLINIC" href="<?php echo home_url(); ?>/">かくう動物クリニック</a></p>
        </div>
        <div class="header__r">
            <p class="header__contact"><span>052-0000-0000</span><span>予約制 / 急患の場合もご遠慮なくお電話ください</span></p>
            <ul class="conMenu">
                <li>診察予約<span>052-0000-0000</span></li>
                <li>トリミング予約<span>052-0000-0000</span></li>
            </ul>
            <a class="header__btn" href="#">お問い合わせ</a>
            <a class="header__btn header__btn--r" href="<?php echo home_url(); ?>/about-attend/">獣医師出勤表</a>
            <a class="ham">
                <span></span>
                <span></span>
                <span></span>
            </a>
            <a class="closeHam">
                <span></span>
                <span></span>
            </a>
            <ul class="hamMenu">
                <li><a href="<?php echo home_url(); ?>/">HOME</a></li>
                <li><a href="#">当院について</a></li>
                <li><a href="#">診療のご案内</a></li>
                <li><a href="#">トリミング/ペットホテル</a></li>
                <li><a href="#">シニアサポート</a></li>
                <li><a href="<?php echo home_url(); ?>/blog/">健康お役立ちブログ</a></li>
                <li><a href="<?php echo home_url(); ?>/#access">アクセス</a></li>
                <li><a href="#">採用情報</a></li>
                <li><a href="<?php echo home_url(); ?>/about-attend/">獣医師出勤表</a></li>
            </ul>
            <div class="blackBg"></div>
        </div>
        
    </header><!-- header -->
    <div class="sidebox">
        <a class="sidebox__item sidebox__item--h" href="#">診察予約</a>
        <a class="sidebox__item sidebox__item--l" href="#">トリミング予約</a>
    </div><!-- sidebox -->
    <nav class="glonav">
        <ul class="glonav__list">
            <li class="glonav__listitem"><a href="<?php echo home_url(); ?>/">HOME</a></li>
            <li class="glonav__listitem"><a href="#">当院について</a>
                <ul class="glonav__sub">
                    <li class="glonav__subitem"><a href="#">経営理念</a></li>
                    <li class="glonav__subitem"><a href="#">スタッフ紹介</a></li>
                    <li class="glonav__subitem"><a href="#">施設紹介</a></li>
                    <li class="glonav__subitem"><a href="#">診察時間</a></li>
                    <li class="glonav__subitem"><a href="<?php echo home_url(); ?>/about-attend/">獣医師出勤表</a></li>
                </ul>
            </li>
            <li class="glonav__listitem"><a href="#">診療のご案内</a>
                <ul class="glonav__sub">
                    <li class="glonav__subitem"><a href="#">診療可能な動物</a></li>
                    <li class="glonav__subitem"><a href="#">診療科目</a></li>
                </ul>
            </li>
            <li class="glonav__listitem glonav__listitem--2"><a href="#">トリミング<br>ペットホテル</a>
                <ul class="glonav__sub">
                    <li class="glonav__subitem"><a href="#">トリミング</a></li>
                    <li class="glonav__subitem"><a href="#">ペットホテル</a></li>
                    <li class="glonav__subitem"><a href="#">ご利用の流れ</a></li>
                    <li class="glonav__subitem"><a href="#">料金表</a></li>
                </ul>
            </li>
            <li class="glonav__listitem"><a href="#">シニアサポート</a>
                <ul class="glonav__sub">
                    <li class="glonav__subitem"><a href="#">介護サポート</a></li>
                    <li class="glonav__subitem"><a href="#">終末期サポート</a></li>
                    <li class="glonav__subitem"><a href="#">ペットロス</a></li>
                </ul>
            </li>
            <li class="glonav__listitem glonav__listitem--2"><a href="<?php echo home_url(); ?>/blog/">健康お役立ち<br>ブログ</a></li>
            <li class="glonav__listitem"><a href="<?php echo home_url(); ?>/#access">アクセス</a></li>
            <li class="glonav__listitem"><a href="#">採用情報</a></li>
        </ul>
    </nav><!-- glonav --> 