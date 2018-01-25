<?php
$json = file_get_contents(dirname(__FILE__) . "/data/players.json");
$players = json_decode($json, true);
?>

<!DOCTYPE html>
<html lang="ja">
    <?php
    define("title", "PLAYERS");
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
                    <h3>参加選手一覧</h3>
                    <p>登録順</p>
                    <?php foreach ($players as $key => $value) { ?>
                        <div class="card text-center">
                            <h5 class="card-header">
                                <?php echo $value["name"]; ?>
                            </h5>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <?php echo '<img src="/img/profile/' . $value["number"] . '.jpg" width="140" height="140" >'; ?>
                                    </div>
                                    <div class="col-md-9">
                                        YouTube - <?php echo '<a href="https://www.youtube.com/channel/' . $value["youtubechannel_id"] . '">' . $value["youtubechannel_name"] . '</a>'; ?><br>
                                        Twitter - <?php echo '<a href="https://twitter.com/intent/user?user_id=' . $value["twitter_id"] . '">' . $value["twitter_screenname"] . '</a>'; ?><br>
                                        VTuber歴 - <?php echo $value["history"]; ?><br>
                                        <br>
                                        <h5>意気込み</h5>
                                        <?php echo $value["comment"]; ?><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    <?php } ?>
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
