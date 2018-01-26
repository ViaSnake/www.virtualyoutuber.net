<!DOCTYPE html>
<html lang="ja">
    <?php
    define("title", "CONTACT");
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
                    <h1>CONTACT</h1>
                    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdUI4-VYc6BSAFo0EPkgSKZcapAx4K4n2KJDF8WaNaOqu1-7w/viewform?embedded=true" width="720" height="1200" frameborder="0" marginheight="0" marginwidth="0">
                        読み込んでいます...
                    </iframe>
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