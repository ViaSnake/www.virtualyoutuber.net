<!DOCTYPE html>
<html lang="ja">
    <?php
    define("title", "RULE");
    include dirname(__FILE__) . '/template/header.php';
    ?>
    <body>
        <?php
        include dirname(__FILE__) . '/template/nav.php';
        include dirname(__FILE__) . '/template/widget/message.php';
        ?>

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>LINK</h2>
                    <p>運営公式Twitter - <a href="https://twitter.com/intent/user?user_id=715134583868489729">@Vtuber_net</a></p>
                    <p>大会関係の配信場所 - <a href="https://www.youtube.com/channel/UCrG6Tf4ofexGmFT0OhsUAVQ/live">YouTube</a></p>
                </div>
                <div class="col-md-4">
                    <?php
                    include dirname(__FILE__) . '/template/sidebar.php';
                    ?>
                </div>
            </div>
        </div>
        <?php
        include dirname(__FILE__) . '/template/footer.php';
        ?>
    </body>
</html>
