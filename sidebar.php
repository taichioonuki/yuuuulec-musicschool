<aside class="blog-details__sidebar">
    <div class="sidebar__newsletter">
        <p class="title sidebar__newsletter-title c-back-black">
            無料メールマガジン
        </p>
        <div class="sidebar__newsletter--inner">
            <a href="./blog_details.html">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sidebar/newsletter.jpg" alt="バナー広告"
                    width="220" height="170" loading="lazy">
                <span>バナー広告</span>
            </a>
        </div>
    </div>

    <div class="sidebar__search">
        <p class="title c-back-black">ブログ内を検索</p>
        <div class="sidebar__search--inner">
            <form class="sidebar__search-form" action="./search-1.html" method="get">
                <input type="search" name="search">
                <button type="submit">
                    <span class="sidebar__search-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/sidebar/search.svg" width="40"
                            height="40" alt="検索">
                    </span>
                </button>
            </form>
        </div>
    </div>

    <div class="sidebar__recommend">
        <p class="title sidebar__recommend-title c-back-black">
            おすすめの記事
        </p>
        <ul class="sidebar__recommend-list">
            <li class="sidebar__recommend-item">
                <a href="./blog_details.html" class="sidebar__recommend-link">
                    <div class="sidebar__recommend-img">
                        <picture>
                            <source media="(max-width: 767px)" srcset="./img/sidebar/recommend-sp.jpg">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/sidebar/recommend.jpg" width="95"
                                height="75" alt="おすすめ記事" loading="lazy">
                        </picture>
                    </div>
                    <p class="sidebar__recommend-title">
                        タイトルが入ります。タイトル
                    </p>
                </a>
            </li>
            <li class="sidebar__recommend-item">
                <a href="./blog_details.html" class="sidebar__recommend-link">
                    <div class="sidebar__recommend-img">
                        <picture>
                            <source media="(max-width: 767px)" srcset="./img/sidebar/recommend-sp.jpg">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/sidebar/recommend.jpg" width="95"
                                height="75" alt="おすすめ記事" loading="lazy">
                        </picture>
                    </div>
                    <p class="sidebar__recommend-title">
                        タイトルが入ります。タイトル
                    </p>
                </a>
            </li>
            <li class="sidebar__recommend-item">
                <a href="./blog_details.html" class="sidebar__recommend-link">
                    <div class="sidebar__recommend-img">
                        <picture>
                            <source media="(max-width: 767px)" srcset="./img/sidebar/recommend-sp.jpg">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/sidebar/recommend.jpg" width="95"
                                height="75" alt="おすすめ記事" loading="lazy">
                        </picture>
                    </div>
                    <p class="sidebar__recommend-title">
                        タイトルが入ります。タイトル
                    </p>
                </a>
            </li>
        </ul>
    </div>

    <div class="sidebar__category">
        <p class="title sidebar__category-title c-back-black">
            カテゴリー
        </p>
        <ul class="sidebar__category-list">
            <li class="sidebar__category-item">
                <a href="./blog_details.html">カテゴリー</a>
            </li>
            <li class="sidebar__category-item">
                <a href="./blog_details.html">カテゴリー</a>
            </li>
            <li class="sidebar__category-item">
                <a href="./blog_details.html">カテゴリー</a>
            </li>
            <li class="sidebar__category-item">
                <a href="./blog_details.html">カテゴリー</a>
            </li>
            <li class="sidebar__category-item">
                <a href="./blog_details.html">カテゴリー</a>
            </li>
        </ul>
    </div>
</aside>