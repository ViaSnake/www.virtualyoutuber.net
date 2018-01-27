<?php
$player_json = file_get_contents(dirname(__FILE__) . "/data/players.json");
$players = json_decode($player_json, true);
?>

<!DOCTYPE html>
<html lang="ja">
    <?php
    define("title", "PLAYERS");
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
                    <h1>参加選手一覧</h1>
                    <p>登録順</p>
                    <?php foreach ($players as $players_key => $players_value) { ?>
                        <div class="card text-center">
                            <h5 class="card-header">
                                <?php echo $players_value["name"]; ?>
                            </h5>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <?php echo '<img src="/img/profile/' . $players_value["number"] . '.jpg" width="140" height="140" >'; ?>
                                    </div>
                                    <div class="col-md-9">
                                        YouTube - <?php echo '<a href="https://www.youtube.com/channel/' . $players_value["youtubechannel_id"] . '">' . $players_value["youtubechannel_name"] . '</a>'; ?><br>
                                        Twitter - <?php echo '<a href="https://twitter.com/intent/user?user_id=' . $players_value["twitter_id"] . '">' . $players_value["twitter_screenname"] . '</a>'; ?><br>
                                        VTuber歴 - <?php echo $players_value["history"]; ?><br>
                                        <br>
                                        <h5>意気込み</h5>
                                        <?php echo $players_value["comment"]; ?><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    <?php } ?>
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
