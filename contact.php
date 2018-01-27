<!DOCTYPE html>
<html lang="ja">
    <?php
    define("title", "CONTACT");
    include dirname(__FILE__) . '/template/header.php';
    include dirname(__FILE__) . '/template/nav.php';
    ?>
    <body>
        <?php
        include dirname(__FILE__) . '/template/message.php';
        ?>

        <main class="container">
            <div class="row">
                <div class="col-md-10">
                    <h1>CONTACT</h1>
                    <div class="embed-responsive embed-responsive-1by1">
                        <iframe class="embed-responsive-item" src="https://docs.google.com/forms/d/e/1FAIpQLSdUI4-VYc6BSAFo0EPkgSKZcapAx4K4n2KJDF8WaNaOqu1-7w/viewform?embedded=true" width="720" height="1200" frameborder="0" marginheight="0" marginwidth="0">
                            読み込んでいます...
                        </iframe>
                    </div>
                </div>
                <div class="col-md-2">
                    <?php
                    include dirname(__FILE__) . '/template/sidebar.php';
                    ?>
                </div>
            </div>
        </main>
    </body>
    <?php
    include dirname(__FILE__) . '/template/footer.php';
    ?>
</html>