<!DOCTYPE html>
<html lang="ja">
    <?php
    define("title", "404");
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
                    <h1>503 エラー</h1>
                    <p>現在、一時的にサービスの提供ができません。</p>
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