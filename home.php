<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="名古屋市のかくう動物クリニックは、飼い主様と動物たちに寄り添う、相談しやすい動物病院を目指しています。情報発信に力を入れており、健康維持や高齢になった動物の介護のアドバイスなどをブログにて紹介しております。">
    <title>かくう動物クリニック | 名古屋市の動物病院。土日祝日も診療しております。</title>
    <?php get_template_part('meta'); ?>
    <?php wp_head(); ?>
</head>
<body class="home">
    <?php get_header(); ?>
    <div class="key">
        <p class="key__txt">家族に、<br class="break">より良い選択を。</p>
    </div><!-- key -->
    <main>
        <div class="cont01">
            <h2 class="cont__title cont01__title">来院予約について</h2>
            
            <p class="cont01__txt">当院では飼い主様と動物の待ち時間の負担軽減のため、<span>時間帯予約制</span>を実施致しております。<br>
                午前の診察をご希望の場合は前日までに、午後の診察をご希望の場合は当日の正午までにお電話にてお問い合わせください。ご予約は30分間隔の枠内でご案内いたします。30分の枠内で複数のご予約を受付しています。<br><br>
                <span>完全予約制ではないため、ご予約された30分の枠内にご案内できない場合がございます。</span><br><br>
                ご予約なしでご来院された場合でも診察は可能ですが、長時間お待ち頂く場合がございます。また、ご来院いただき診察後に次回のご予約をしてくただくことが可能です。<br><br>
                <span>急患の場合は、可能な限り来院前にお電話ください。</span>緊急性が高いと判断した場合には、順番が前後する場合がございます。ご理解の程、よろしくお願いいたします。
            </p>
        
            <div class="cont01__tablebox">
                <ul class="cont01__tablist">
                    <li class="cont01__tab"><a class="current" href="#tab1"><span>診察時間</span></a></li>
                    <li class="cont01__tab"><a href="#tab2"><span>獣医師出勤表</span></a></li>
                </ul>
                <div class="cont01__table-wrap" id="tab1">
                    <div class="cont01__table-wrapinner">
                        <table class="cont01__table">
                            <thead>
                                <tr>
                                    <th></th><th>月</th><th>火</th><th>水</th><th>木</th><th>金</th><th>土</th><th>日</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>午前 9:00〜12:00</th><td class="on">●</td><td class="on">●</td><td class="on">●</td><td class="on">●</td><td class="on">●</td><td class="on">●</td><td class="on">●</td>
                                </tr>
                                <tr>
                                    <th>午前 17:00〜20:00</th><td class="on">●</td><td class="on">●</td><td class="on">●</td><td class="on">●</td><td class="on">●</td><td>×</td><td>×</td>
                                </tr>
                                <tr>
                                    <th>夜間急患 22:00〜23:00</th><td class="red">※</td><td class="red">※</td><td class="red">※</td><td class="red">※</td><td class="red">※</td><td>×</td><td>×</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="cont01__tabletxtbox clearfix">
                            <p class="cont01__tabletxt">日曜午後休診</p>
                            <p class="cont01__tabletxt--02">急患の場合、時間外、休診日での診察も可能な限り対応いたします。 来院前に必ずお電話ください。</p>
                        </div>
                        
                        <div class="cont01__contact">
                            <p class="cont01__contactitem">診察予約<span>052-0000-0000</span></p>
                            <p class="cont01__contactitem">トリミング・ペットホテル予約<span>052-0000-0000</span></p>
                        </div>
                    </div>
                </div>
                <div class="cont01__table-wrap" id="tab2">
                    <div class="gcal"><iframe src="https://calendar.google.com/calendar/embed?height=508&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Asia%2FTokyo&amp;src=OGFoNG1vY21xbnBpZm1nNDBrZWh0MHJ1bThAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23F09300&amp;showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0" style="border:solid 1px #777" width="800" height="508" frameborder="0" scrolling="no"></iframe></div>
                </div>
            </div><!-- cont01__tablebox -->

        </div><!-- cont01 -->
        <div class="cont02">
            <div class="cont02__inner">
                <div class="cont02__txtbox">
                    <h2 class="cont__title cont02__title">ご挨拶</h2>
                    <p class="cont02__txt">飼い主の皆様、名古屋市のかくう動物クリニックの山田花子と申します。<br>
                        動物と飼い主様の不安を無くしたい、かかりつけ医として信頼される病院をつくりたい、そんな想いからはじまった当院も今年で開院して20年目を迎えます。<br>
                        飼い主様の大切な家族である動物にとっての最も良い選択を、飼い主様と共に考え、飼い主様に合わせた無理のない診療を心がけております。当院のスタッフ全員で協力し合い、最善の診療ができるよう努力してまいりますので、何卒よろしくお願い申し上げます。
                    </p>
                    <p class="cont02__txt02">院長  山田 花子</p>
                    <a class="cont__btn cont02__btn" href="#">スタッフ紹介</a>
                </div>
                <div class="cont02__img pc"><img src="<?php echo get_template_directory_uri(); ?>/images/home_img01.png" width="1200" height="1164" alt="穏やかで親しみやすい院長の山田花子"></div>
                <div class="cont02__img sp"><img src="<?php echo get_template_directory_uri(); ?>/images/home_img13.png" width="720" height="720" alt="穏やかで親しみやすい院長の山田花子"></div>
            </div>
        </div><!-- cont02 -->
        <div class="cont03">
            <h2 class="cont__title cont03__title">診療のご案内</h2>
            <ul class="cont03__list">
                <li class="cont03__listitem"><a href="#">一般診療</a></li>
                <li class="cont03__listitem"><a href="#">専門診療</a></li>
                <li class="cont03__listitem"><a href="#">去勢・避妊手術</a></li>
                <li class="cont03__listitem"><a href="#">ワクチン摂取</a></li>
                <li class="cont03__listitem cont03__listitem--2"><a href="#">フィラリア症予防<br>ノミ・マダニ予防</a></li>
                <li class="cont03__listitem"><a href="#">リハビリテーション</a></li>
            </ul>
        </div><!-- cont03 -->
        <div class="cont04">
            <h2 class="cont__title cont04__title">シニアサポート</h2>
            <div class="cont04__inner">
                <div class="cont04__txtbox">
                    <p class="cont04__txt">家族の一員としてたくさんの思い出を共有してきた動物たち。<br>
                        歳をとり、できないことが増えても、病気を抱えていても、穏やかな時間を過ごすためにできることを、一緒に考えます。<br><br>
                        日頃の注意や、食事や運動に関するアドバイスだけでなく、少しずつ体力が衰えていく動物に対する、飼い主様の気持ちの持ち方などについてもお話しさせていただきます。<br><br>
                        大切な家族であっても動物の看護・介護は、人間同様とても大変で、不安になってしまうこともあるかと思います。そんな時、ひとりで抱え込まずに是非当院にご相談いただければと思います。<br><br>
                        当院のトリミングサロン・ペットホテルは獣医師の健康チェックのもと、シニア犬、シニア猫も安心してご利用いただけます。
                    </p>
                    <a class="cont__btn cont04__btn" href="#">詳しくはこちら</a>
                </div>
                <div class="cont04__img"><img src="<?php echo get_template_directory_uri(); ?>/images/home_img08.png" width="560" height="560" alt="毎日を懸命に生きる動物たちの姿に、たくさんのことを教わります。"></div>
            </div>
        </div><!-- cont04 -->
        <div class="cont05">
            <h2 class="cont__title cont05__title">健康お役立ちブログ</h2>
            <ul class="cont05__list">
                <?php query_posts('posts_per_page=3'); ?>
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <li class="cont05__listitem">
                    <a href="<?php the_permalink(); ?>">
                        <div class="cont05__txtbox">
                            <time class="cont05__list-date"><?php the_time('Y/m/d'); ?></time>

                            <?php
                                            $category = get_the_category();
                                            
                                            if (!empty( $category )) { ?>
                                            <ul class="cont05__list-cat">
                                            
                                            <?php
                                            foreach($category as $cat){
                                                    
                                            echo '<li>' . $cat->cat_name . '</li>'; 
                                            
                                            } ?>
                                                
                                            </ul>
                                            <?php } ?>

                            <h3 class="cont05__list-title"><?php the_title(); ?></h3>
                            <p class="cont05__list-txt"><?php the_excerpt(); ?></p>
                        </div>
                        <div class="cont05__img">
                        <?php if(has_post_thumbnail()): ?>
                                <?php the_post_thumbnail(); ?>
                                <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/home_img17.png" alt="健康お役立ちブログイメージ">
                                
                        <?php endif; ?>
                        </div>
                    </a>
                </li>
                <?php endwhile; endif; ?>
            </ul>
            <a class="cont__btn cont05__btn" href="<?php echo home_url(); ?>/blog/">記事一覧へ</a>
        </div><!-- cont05 -->
        <div class="cont06">
            <h2 class="cont__title cont06__title">かくう動物クリニックでは<br>一緒に働く仲間を募集しています</h2>
            <ul class="cont06__list">
                <li class="cont06__listitem"><a href="#"><span>獣医師</span><span>正社員</span></a></li>
                <li class="cont06__listitem"><a href="#"><span>動物看護師</span><span>正社員</span></a></li>
                <li class="cont06__listitem"><a href="#"><span>トリマー</span><span>正社員</span></a></li>
                <li class="cont06__listitem"><a href="#"><span>受付・サポート</span><span>正社員</span></a></li>
            </ul>
            <a class="cont__btn cont06__btn" href="#">募集要項はこちら</a>
        </div><!-- cont06 -->
        <div id="access" class="cont07">
            <h2 class="cont__title cont07__title">交通アクセス</h2>
            <div class="cont07__inner">
                <div class="cont07__img"><img src="<?php echo get_template_directory_uri(); ?>/images/home_img12.png" width="1000" height="624" alt="都心の住宅街にあるかくう動物病院は、駐車スペースもございます。"></div>
                <div class="cont07__txtbox">
                    <p class="cont07__txt"><span>〒 453-0000</span>愛知県名古屋市中村区</p>
                    <ul class="cont07__list">
                        <li class="cont07__listitem">
                            <p class="cont07__itemhead">お車でお越しの場合</p>
                            <p class="cont07__listtxt"><span class="square">環状線</span><span class="square">太閤通</span><span class="square">信号1つ越えて約100m</span></p>
                        </li>
                        <li class="cont07__listitem">
                            <p class="cont07__itemhead cont07__itemhead02">公共交通機関でお越しの場合</p>
                            <p class="cont07__listtxt02">名古屋駅JR○番出口<span>徒歩5分</span></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="gmap"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.4267421993122!2d136.8793482152448!3d35.17091498031647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600376e794d78b89%3A0x81f7204bf8261663!2z5ZCN5Y-k5bGL6aeF!5e0!3m2!1sja!2sjp!4v1589556455517!5m2!1sja!2sjp" width="600" height="450"></iframe></div>
        </div><!-- cont07 -->
        <div class="cont08__wrap">
            <div class="cont08">
                <h2 class="cont08__logo" data-title="KAKU ANIMAL CLINIC">かくう動物クリニック</h2>
                <div class="cont08__inner">
                    <p class="cont08__txt"><span>〒 453-0000</span>愛知県名古屋市中村区</p>
                    <ul class="cont08__list">
                        <li class="cont08__listitem">診療可能な動物 / 犬・猫</li>
                        <li class="cont08__listitem">クレジットカード・各種ペット保険対応</li>
                    </ul>
                    <table class="cont01__table">
                        <thead>
                            <tr>
                                <th></th><th>月</th><th>火</th><th>水</th><th>木</th><th>金</th><th>土</th><th>日</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>午前 9:00〜12:00</th><td class="on">●</td><td class="on">●</td><td class="on">●</td><td class="on">●</td><td class="on">●</td><td class="on">●</td><td class="on">●</td>
                            </tr>
                            <tr>
                                <th>午前 17:00〜20:00</th><td class="on">●</td><td class="on">●</td><td class="on">●</td><td class="on">●</td><td class="on">●</td><td>×</td><td>×</td>
                            </tr>
                            <tr>
                                <th>夜間急患 22:00〜23:00</th><td class="red">※</td><td class="red">※</td><td class="red">※</td><td class="red">※</td><td class="red">※</td><td>×</td><td>×</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="cont01__tabletxtbox clearfix">
                        <p class="cont01__tabletxt">日曜午後休診</p>
                        <p class="cont01__tabletxt--02">急患の場合、時間外、休診日での診察も可能な限り対応いたします。 来院前に必ずお電話ください。</p>
                    </div>
                    
                    <div class="cont01__contact">
                        <p class="cont01__contactitem">診察予約<span>052-0000-0000</span></p>
                        <p class="cont01__contactitem">トリミング・ペットホテル予約<span>052-0000-0000</span></p>
                    </div>
                </div>
                
            </div><!-- cont08 -->
        </div>
        <div class="cont09">
            <div class="cont09__banner"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/home_banner01.png" width="600" height="160" alt="入院、手術、通院に対応した総合型保険、かくう保険のご案内です。"></a></div>
            <div class="cont09__banner"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/home_banner02.png" width="600" height="160" alt="食が細くなったワンちゃんも食べやすい、シニアのためのドッグフードのご案内です。"></a></div>
            <div class="cont09__banner"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/home_banner03.png" width="600" height="160" alt="かくう動物クリニックの通信販売部WEBサイト"></a></div>
        </div>
    </main>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>
</html>