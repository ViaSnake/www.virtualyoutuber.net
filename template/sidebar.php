<?php
$banner = [
    [
        '/img/banner/5.png','UCC6Jk8bukxPKnrDK-r35Eog'
    ],
    [
        '/img/banner/7.png','UC0TzUrZzagVR3sZ5f_59ogA'
    ],
    [
        '/img/banner/8.png','UCoP0Sm2YCRPs6UQqesqgyGg'
    ],
];

$n = mt_rand(0, 2);

echo '<h2>バナー</h2>';
echo '<a href="https://www.youtube.com/channel/' . $banner[$n][1] . '">';
echo '<img src="' . $banner[$n][0] . '" alt="banner" >';
echo '</a>';
?>