<!DOCTYPE html>
<html lang="ja">
    <?php
    define("title", "503");
    include dirname(__FILE__) . '/template/header.php';
    ?>
    <body>
        <?php
        include dirname(__FILE__) . '/template/nav.php';
        include dirname(__FILE__) . '/template/widget/message.php';
        ?>

        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h1>404 エラー</h1>
                    <p>お探しのページは、発見できませんでした。</p>
                </div>
                <div class="col-md-2">
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