<!DOCTYPE html>
<html lang="ja">
    <?php
    define("title", "HOME");
    include dirname(__FILE__) . '/template/header.php';
    ?>
    <body>
        <?php
        include dirname(__FILE__) . '/template/nav.php';
        ?>
        <div class="jumbotron text-center">
            <div class="container">
                <h1 class="display-3">バーチャルユーチューバー選手権</h1>
                <p class="lead">
                    この大会は、とある視聴者がバーチャル・ユーチューバー界を盛り上げようと試みたことにより開催されたものである。
                </p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="https://goo.gl/forms/YEQI5gT3nPcQpdOi2" role="button">第一回バーチャルユーチューバー選手権にエントリーする！</a>
                </p>
                <?php
                include dirname(__FILE__) . '/template/widget/message.php';
                ?>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3>Q.そもそもバーチャルユーチューバーってなに？</h3>
                    <p>
                        簡単に言えば、ユーチューバーの２次元バージョンである。<br>
                        世界で最古のバーチャルユーチューバー(以下「Vtuber」)は<a href="https://www.youtube.com/user/yamatoami/">Ami Yamato</a>と言われている。<br>
                        日本では2017年からバーチャルユーチューバーが増え始め、日本の新しい文化となりつつあるのがVtuberである。<br>
                        <br>
                        この大会では、厳密にバーチャルユーチューバーを定義しないので多種多彩な選手がエントリーすることを期待している。<br>
                        自分がVtuberと思えば、バーチャルユーチューバーです！　少なくともこの大会では！<br>
                        さあ今すぐ参加しよう。自分をアピールしよう！<br>
                    </p>

                    <div class="col-md-6">
                        <div class="card text-center">
                            <div class="card-header">
                                バナー募集中
                            </div>
                            <div class="card-block">
                                <p class="card-text">
                                    ホームページの右に出るバナーを随時募集中です<br>
                                    自分をアピールする良いチャンスですので是非！<br>
                                    バナーをクリックするとそのVtuberのチャンネルに飛ぶようになります！<br>
                                </p>
                                <h4>募集要項</h4>
                                名前とVtuber本人が描かれている。<br>
                                画像の大きさが「190px × 1050px(横 × 縦)」であること。<br>
                                不適切な表現が含まれていないこと。<br>
                                <a href="mailto:oyuusukeobf3@gmail.com" class="btn btn-primary">メールを送信する</a><br>
                                <span class="badge badge-warning">※エントリーされたVtuberのみが対象となります。</span><br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                include dirname(__FILE__) . '/template/sidebar.php';
                ?>
            </div>
        </div>
    </body>
</html>
