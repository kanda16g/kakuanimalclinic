$(function() {

    // ドロップダウンメニュー
    $('.glonav__listitem').hover(function() {
        $(this).children('.glonav__sub').stop().slideToggle(200);
    });

    // ナビゲーション追従(ブラウザ幅1250px以上のとき)
    var clone = $('.glonav').clone(true).addClass('clone').appendTo('body');

    $(window).scroll(function() {
        if($(window).scrollTop() > 760) {
        clone.addClass('is-show');
        } else {
        clone.removeClass('is-show');
        }
    });

    // ヘッダー追従(ブラウザ幅1249px以下のとき)

    if($(window).width() < 1349) {
        var cloneHeader =$('.header').clone(true).addClass('clone').appendTo('body');

        $(window).scroll(function() {
            if($(window).scrollTop() > 700) {
                cloneHeader.addClass('is-show');
            } else {
                cloneHeader.removeClass('is-show');
            }
        });
    }
    

    // トップへ戻る
    $('.returnTop').click(function() {
        $('body, html').animate({scrollTop: 0}, 1000);
    });

    // タブ切り替え
    $('.cont01__table-wrap[id != "tab1"]').hide();

    $('.cont01__tab a').click(function() {
        
        $('.cont01__table-wrap').hide();

        $($(this).attr('href')).show();

        $('.current').removeClass('current');

        $(this).addClass('current');

        return false;
    });

    // ハンバーガーメニュー

    var ham = $('.ham');
    var closeHam =$('.closeHam')
    var hamMenu = $('.hamMenu');
    var blackBg = $('.blackBg');

    ham.click(function() {
        closeHam.toggleClass('active');
        hamMenu.toggleClass('active');
        blackBg.toggleClass('active');
        $('.cont07__img').toggleClass('active');
    });

    closeHam.click(function() {
        closeHam.removeClass('active');
        hamMenu.removeClass('active');
        blackBg.removeClass('active');
        $('.cont07__img').removeClass('active');
    });

    blackBg.click(function() {
        closeHam.toggleClass('active');
        hamMenu.removeClass('active');
        blackBg.removeClass('active');
        $('.cont07__img').removeClass('active');
    });


    //電話アイコンクリック
    var headCon = $('.header__contact');
    var conMenu = $('.conMenu');

    headCon.click(function() {
        conMenu.toggleClass('active');
    });

    $(window).scroll(function() {
        if($(window).scrollTop() > 700) {
            conMenu.css('top', '80px');
        } else {
            conMenu.css('top', '0');
        }
    });

    //獣医師出勤表セルハイライト
    var cellH = $('.attend-table > tbody > tr > td');

    cellH.hover(function() {
        $(this).parent().addClass('target');

        var myIndex = $(this).index();
        myIndex = myIndex + 1;

        $('td:nth-child('+ myIndex +')').addClass('target');
    }, function() {
        $('.target').removeClass('target');
    });

});