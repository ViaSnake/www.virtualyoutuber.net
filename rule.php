<!DOCTYPE html>
<html lang="ja">
    <?php
    define("title", "RULE");
    include dirname(__FILE__) . '/template/header.php';
    include dirname(__FILE__) . '/template/nav.php';
    ?>
    <body>
        <?php
        include dirname(__FILE__) . '/template/message.php';
        ?>

        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h1>ルール</h1>
                    <h2>大会期間</h2>
                    <p>2018/02/01(木) 0:00 ― 2018/02/28(水) 23:59</p>

                    <h2>審査内容</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">内容</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>チャンネル登録者数</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>期間中に投稿された動画の再生数</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>期間中に投稿された動画の高評価数</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>テーマにどれだけ沿っているか</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>総合判断（詳しくは後ほど）</td>
                            </tr>
                        </tbody>
                    </table>
                    <p>※全て期間中の数値のみを審査します</p>

                    <h2>商品</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">順位</th>
                                <th scope="col">商品</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>優勝者 : 1万円分のAmazonギフトコード + ???(開催直前生放送にて発表!!)</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>3000円分のAmazonギフトコード</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>3000円分のAmazonギフトコード</td>
                            </tr>
                        </tbody>
                    </table>

                    <h2>詳細ルール</h2>
                    <ul type="disc">
                        <li>総合判断は次の要素で判断します。 「動画の見やすさ」「内容の濃さ」「動画の更新頻度が一定かどうか」</li>
                        <li>テーマは、このサイトのメインページ下部に大会期間開始後、表示されます。(毎週更新するので要チェック!)
                            <ol>
                                <li>審査項目の「テーマにどれだけ沿っているか」に関しては、一本でもテーマに沿った動画が投稿されていればその動画で審査いたします。テーマに沿った動画の投稿本数は審査には影響しません。</li>
                            </ol>
                        </li>
                        <li>テーマが複数表示されている週は、いずれか一つを選んでください。また、どれを選んだかわかるよう提示してください。(動画タイトルや、説明欄。動画内等)</li>
                        <li>順位付けは、審査内容をスコア化して行われます。具体的なスコア内訳は、2/14(日)にのみ中間結果として発表します。</li>
                        <li>動画等の宣伝は無償で出来る範囲のみです。</li>
                        <li>審査対象動画は、大会期間中に投稿されたもののみです。エントリーが大会期間中になった場合、エントリー完了後に投稿された動画のみが審査対象となります。</li>
                        <li>他のVtuber、Youtuberとのコラボ動画は審査対象外となります。</li>
                        <li>今大会はチャンネルごとのエントリーとなります。なので、同じ企業内でもチャンネルが違う場合は別々に審査が行われるのでご了承ください。</li>
                        <li>著作権やライセンス等は、Youtubeのガイドラインと同じです。</li>
                        <li>ランキングは前半2週間は12時間に1回、後半2週間は24時間に1回更新されます。</li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <?php
                    include dirname(__FILE__) . '/template/sidebar.php';
                    ?>
                </div>
            </div>
        </div>
    </body>
    <?php
    include dirname(__FILE__) . '/template/footer.php';
    ?>
</html>
