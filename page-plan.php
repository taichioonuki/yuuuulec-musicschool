<?php get_header(); ?>
<main>
    <section id="fv" class="fv">
        <div>
            <picture>
                <source media="(max-width: 767px)" srcset="./img/plan-sp.jpg">
                <img src="<?php echo get_template_directory_uri(); ?>/img/plan.jpg" width="1080" height="200" alt="ギター">
            </picture>
            <div class="c-fv__overlay--sub"></div>
        </div>
        <div class="c-fv__title-wrapper">
            <h1 class="c-fv__title">プラン・料金</h1>
        </div>
    </section>

    <?php get_template_part('template-parts/breadcrumbs'); ?>

    <section id="price" class="price">
        <div class="inner">
            <h2 class="c-section-title--sub">料金体系</h2>
            <div class="price__title-wrapper">
                <p class="price__title price__title--enrollment">入会金 39,000円</p>
                <span class="price__plus"></span>
                <p class="price__title">月額料金</p>
            </div>
            <div class="price__text">
                <p>
                    きたむらミュージックスクールでは、個人に合わせたサポートを行う完全オーダーメイドのプランを用意しており、サポート内容により月額料金が異なります。担当者があなたに最適なプランを提案いたしますので、お気軽にお問い合わせください。※すべての料金は税込価格となります。
                </p>
            </div>
        </div>
    </section>

    <!-- //以下１セクションはコード自動生成しました -->
    <section id="plan" class="plan">
        <div class="inner">
            <h2 class="c-section-title">プラン内容・月額料金</h2>
            <div class="plan__scroll" data-simplebar>
                <table class="plan-table" aria-describedby="plan-note">
                    <colgroup>
                        <col class="plan-table__col--feature">
                        <col class="plan-table__col--plan">
                        <col class="plan-table__col--plan plan-table__col--featured plan-table__col--no-border">
                        <col class="plan-table__col--plan">
                    </colgroup>

                    <!-- プラン名 -->
                    <thead>
                        <tr class="plan-table__plans">
                            <th scope="col" class="plan-table__heading plan-table__heading--blank"></th>
                            <th scope="col" class="plan-table__heading">
                                <span class="plan-table__plan-name">ベーシック<br class="tab-only">プラン</span>
                            </th>
                            <th scope="col"
                                class="plan-table__heading plan-table__heading--featured plan-table__heading--tall">
                                <span class="plan-table__badge">おすすめ</span>
                                <span class="plan-table__plan-name">スタンダード<br class="tab-only">プラン</span>
                            </th>
                            <th scope="col" class="plan-table__heading">
                                <span class="plan-table__plan-name">プレミアム<br class="tab-only">プラン</span>
                            </th>
                        </tr>

                        <!-- 月額料金 -->
                        <tr class="plan-table__price-row">
                            <th scope="row" class="plan-table__label plan-table__top">
                                月額料金
                            </th>
                            <td class="plan-table__price plan-table__top">
                                <span>39,000円</span>
                            </td>
                            <td class="plan-table__price plan-table__price--featured plan-table__top">
                                <span>59,000円</span>
                            </td>
                            <td class="plan-table__price plan-table__top">
                                <span>128,000円</span>
                            </td>
                        </tr>
                    </thead>

                    <tbody>
                        <!-- マンツーマン授業 -->
                        <tr>
                            <th scope="row" class="plan-table__label">
                                マンツーマン授業
                            </th>
                            <td class="plan-table__cell">
                                <span class="u-dot"></span><br><span class="plan-table__note">週１回</span>
                            </td>
                            <td class="plan-table__cell">
                                <span class="u-dot u-dot--red"></span><br><span class="plan-table__note">週２回</span>
                            </td>
                            <td class="plan-table__cell">
                                <span class="u-dot"></span><br><span class="plan-table__note">無制限</span>
                            </td>
                        </tr>

                        <!-- ビジネス基本講座 -->
                        <tr>
                            <th scope="row" class="plan-table__label">
                                ビジネス基本講座
                            </th>
                            <td class="plan-table__cell">
                                <span class="u-dot"></span><br>
                            </td>
                            <td class="plan-table__cell">
                                <span class="u-dot u-dot--red"></span><br>
                            </td>
                            <td class="plan-table__cell">
                                <span class="u-dot"></span><br>
                            </td>
                        </tr>

                        <!-- 練習ROOM利用 -->
                        <tr>
                            <th scope="row" class="plan-table__label">練習ROOM利用</th>
                            <td class="plan-table__cell">
                                <span class="u-dot"></span><br><span class="plan-table__note">月10時間</span>
                            </td>
                            <td class="plan-table__cell">
                                <span class="u-dot u-dot--red"></span><br><span class="plan-table__note">月20時間</span>
                            </td>
                            <td class="plan-table__cell">
                                <span class="u-dot"></span><br><span class="plan-table__note">無制限</span>
                            </td>
                        </tr>

                        <!-- ビジネスコンサル -->
                        <tr>
                            <th scope="row" class="plan-table__label">
                                ビジネスコンサル
                            </th>
                            <td class="plan-table__cell">
                                <span class="plan-table__dash" aria-hidden="true"></span>
                            </td>
                            <td class="plan-table__cell">
                                <span class="u-dot u-dot--red"></span><br><span class="plan-table__note">月２回</span>
                            </td>
                            <td class="plan-table__cell">
                                <span class="u-dot"></span><br><span class="plan-table__note">月３回</span>
                            </td>
                        </tr>

                        <!-- コミュニティ参加資格 -->
                        <tr>
                            <th scope="row" class="plan-table__label">
                                コミュニティ<br class="sp-only">参加資格
                            </th>
                            <td class="plan-table__cell">
                                <span class="plan-table__dash" aria-hidden="true"></span>
                            </td>
                            <td class="plan-table__cell">
                                <span class="plan-table__dash" aria-hidden="true"></span>
                            </td>
                            <td class="plan-table__cell">
                                <span class="u-dot"></span><br>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p id="plan-note" class="plan__note">
                ※各サービスは１回ごとのオプション追加が可能です。詳しくは事務局までお問い合わせください。
            </p>
        </div>
    </section>


    <?php get_template_part('template-parts/floating-btns'); ?>
</main>
<?php get_footer(); ?>