// =========================
// ハンバーガーメニュー
// =========================
$(function () {
    $('.hamburger').click(function () {
        $(this).toggleClass('active');
        $('.header__nav').toggleClass('active');
    });

    $('.header__nav a').click(function () {
        $('.hamburger').removeClass('active');
        $('.header__nav').removeClass('active');
    });

    $(window).on('resize', function () {
        if (window.innerWidth > 768) {
            $('.hamburger').removeClass('active');
            $('.header__nav').removeClass('active');
        }
    });
});

// =========================
// フローティングボタン
// =========================
$(function () {
    const fv = $('.fv');
    const $floatBtns = $('.c-to-top, .c-contact__btn');
    $floatBtns.hide();

    function checkFloatingBtns() {
        const fvExists = fv.length > 0;
        const fvHeight = fvExists ? fv.outerHeight() : 0;
        const scroll = $(window).scrollTop();

        if (fvExists) {
            scroll > fvHeight ? $floatBtns.fadeIn(300) : $floatBtns.fadeOut(300);
        } else {
            const displayPx = 300;
            scroll > displayPx ? $floatBtns.fadeIn(300) : $floatBtns.fadeOut(300);
        }
    }

    $(window).on('scroll resize load', checkFloatingBtns);
    checkFloatingBtns();

    $('.c-to-top a').on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, 600);
    });
});

// =========================
// 下部のトップに戻るボタン・お問い合わせボタンを追従 (FIXEDベースで安定化)
// =========================
$(function () {
    const $floatingBtnsContainer = $('.c-floating-btns');
    const $footer = $('#footer');
    
    function setFixedFollowPosition() {
        if ($footer.length === 0 || $floatingBtnsContainer.length === 0) return; 
        
        const scrollPosition = $(window).scrollTop();
        const windowHeight = $(window).height();
        const containerHeight = $floatingBtnsContainer.outerHeight(true); 
        
        const footerTopOffset = $footer.offset().top; 
        const footerHeight = $footer.outerHeight(true);

        const fixedBottomDocumentPosition = scrollPosition + windowHeight;

        const footerBottomOffset = footerTopOffset + footerHeight;
        
        // ボタンの下端がフッターの上端を越えているか？
        if (fixedBottomDocumentPosition > footerTopOffset) {
            // YES: 干渉している
            const overlap = fixedBottomDocumentPosition - footerTopOffset;
            $floatingBtnsContainer.css('transform', `translateY(-${overlap}px)`);
        } else {
            // NO: 干渉していない
            $floatingBtnsContainer.css('transform', 'translateY(0)');
        }
    }

    $(window).on('scroll resize load', setFixedFollowPosition);
    setFixedFollowPosition();
});

// =========================
// アコーディオン（FAQ）
// =========================
$(function () {
    const $toggles = $(".js-faq-toggle");
    const $answers = $(".faq__answer");

    // 初期状態：全て閉じる
    $toggles.attr("aria-expanded", "false");
    $answers.hide();

    function toggleFaq($toggle, $answer) {
        const isOpen = $answer.is(":visible");

        if (!isOpen) {
            $answer.stop(true, true).slideDown(400);
            $toggle.attr("aria-expanded", "true");
        } else {
            $answer.stop(true, true).slideUp(400);
            $toggle.attr("aria-expanded", "false");
        }
    }

    $toggles.on("click", function () {
        const $this = $(this);
        const $answer = $this.next(".faq__answer");
        toggleFaq($this, $answer);
    });

    $answers.on("click", function () {
        const $answer = $(this);
        const $toggle = $answer.prev(".js-faq-toggle");
        toggleFaq($toggle, $answer);
    });
});

// =========================
// 生徒さんたちの声スライダー（Swiper）
// =========================
function getSpaceBetween() {
    const baseWidth = 1080;
    const baseSpace = 35;
    const currentWidth = window.innerWidth;
    const ratio = currentWidth / baseWidth;
    return Math.min(baseSpace, Math.max(baseSpace * ratio, 10));
}

function initVoiceSwiper() {
    const voiceInner = document.querySelector('.voice__inner');
    if (!voiceInner) return; // 要素がなければ何もしない

    return new Swiper('.voice__inner', {
        loop: true,
        navigation: {
            nextEl: '.voice__next',
            prevEl: '.voice__prev',
        },
        slidesPerView: 3,
        spaceBetween: 35,
        breakpoints: {
            0: { slidesPerView: 1, spaceBetween: 0 },
            768: { slidesPerView: 3 },
        },
        observer: true,
        observeParents: true,
        preventClicks: false,
        touchStartPreventDefault: false,
    });
}

// DOM読み込み後にSwiper初期化
document.addEventListener('DOMContentLoaded', function () {
    const voiceInner = document.querySelector('.voice__inner');

    if (voiceInner) {
        let voiceSwiper = new Swiper('.voice__inner', {
            loop: true,
            navigation: {
                nextEl: '.voice__next',
                prevEl: '.voice__prev',
            },
            slidesPerView: 3,
            spaceBetween: 35,
            breakpoints: {
                0: { slidesPerView: 1 },
                768: { slidesPerView: 3 },
            },
            observer: true,
            observeParents: true,
            preventClicks: false,
            touchStartPreventDefault: false,
        });
    }
});

document.addEventListener('DOMContentLoaded', () => {
    const floatingBtn = document.querySelector('.c-floating-btns');

    if (!floatingBtn) {
        const sections = document.querySelectorAll('main > section');
        if (sections.length > 0) {
            const lastSection = sections[sections.length - 1];
            lastSection.classList.add('add-bottom-padding');
        }

        const fv = document.querySelector('.fv');
        if (fv) fv.classList.add('add-bottom-padding');
    }
});

//下部の追従ボタンがなければ余白を追加
document.addEventListener('DOMContentLoaded', () => {
    const floatingBtn = document.querySelector('.c-floating-btns');

    if (!floatingBtn) {
        // main直下の最後の要素（*）を取得
        const lastContent = document.querySelector('main > *:last-child');
        
        if (lastContent) {
            // 最後のコンテンツ要素にクラスを付与
            lastContent.classList.add('add-bottom-padding');
        }
    }
});