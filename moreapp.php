<?php
require_once 'config.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$perpager = 8;
$app_id = $_REQUEST['appid'];
$os = strtolower($_REQUEST['os']);
$os_type = 1;
if ($os == 'android') {
    $os_type = 2;
}

$page = isset($_GET['page']) ? $_GET['page'] : 0;
if ($page <= 1) {
    $page = 1;
}
$offset = ($page - 1) * $perpager;


$query = "SELECT COUNT(id) AS total FROM tbl_more_app WHERE app_base = " . $app_id . " AND os = " . $os_type;
$result = mysql_fetch_assoc(mysql_query($query));
$total = $result['total'];
$totalPage = ceil($total / $perpager);

$data = array();
$listapp = array();
$query = "SELECT app_id FROM tbl_more_app WHERE app_base = " . $app_id . " AND os = " . $os_type . " ORDER BY id DESC LIMIT " . $offset . "," . $perpager;

$result = mysql_query($query);
while ($row = mysql_fetch_assoc($result)) {
    $listapp[] = $row['app_id'];
}
if (empty($listapp)) {
    die('No data!');
}
$query = "SELECT id, info, thumbnail_ios, thumbnail_android, url_ios, url_android FROM tbl_list_app WHERE id IN (" . implode(',', $listapp) . ") ORDER BY id DESC";
$result = mysql_query($query);
$listItem = array();
while ($row = mysql_fetch_assoc($result)) {
    $listItem[] = $row;
}

//lay thong tin app
$query = "SELECT * FROM tbl_list_app WHERE id = " . $app_id;
$result = mysql_query($query);
$app = mysql_fetch_assoc($result);
//echo '<pre>' . print_r($app, true) . '</pre>';
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
        //if ($app_id != 2) {
            echo '<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">';
        //}
        ?>
        <title><?php echo $app['info'] ?></title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta charset="UTF-8">               
        <link href="/css/moreapp.css" rel="stylesheet" />
    </head>
    <body>
        <div id="container">
            <h1>
                <img src="/images/moreapp/1.png" alt="Games and apps powered by Early Start" />
                Games and apps powered by <span>Early Start</span>
            </h1>
            <?php
            if (!empty($listItem)) {
                $domain_thumbnail = 'http://data.behocchu.com';
                echo '<ul>';
                $i = 0;
                foreach ($listItem as $item) {
                    $thumbnail = '';
                    $url = '';
                    if ($os_type == 1) {
                        $thumbnail = $item['thumbnail_ios'];
                        $url = $item['url_ios'];
                    } else {
                        $thumbnail = $item['thumbnail_android'];
                        $url = $item['url_android'];
                    }
                    $class = 'class="pd"';
                    if ($i % 4 == 0) {
                        $class = '';
                    }
                    ?>
                    <li <?php echo $class; ?>>
                        <a href="<?php echo $url ?>">
                            <img src="<?php echo $domain_thumbnail . '/appthumbnail/' . $thumbnail ?>" alt="<?php echo htmlentities($item['info']) ?>" />
                            <strong><?php echo $item['info'] ?></strong>
                        </a>
                    </li>
                    <?php
                    $i++;
                }
                echo '</ul>';
            }
            echo '<div class="clear"></div>';
            if ($totalPage > 1) {
                ?>
                <div class="phantrang">
                    <?php
                    for ($i = 1; $i <= $totalPage; $i++) {
                        $img = '/images/moreapp/4.png';
                        if ($i == $page) {
                            $img = '/images/moreapp/3.png';
                        }
                        $url = $_SERVER['REDIRECT_URL'];
                        if($i > 1) {
                            $url .= '?page='.$i;
                        }
                        ?>
                        <a href="<?php echo $url ?>" title="Page <?php echo $i ?>">
                            <img src="<?php echo $img ?>"  alt="Page <?php echo $i ?>" /></a>
                        <?php
                    }
                    ?>
                </div>
                <?php
            }
            ?>
                    <a href="/close.php"><img class="close" src="/images/moreapp/2.png" alt="" style="width: 50px;" /></a>
        </div>
    </body>
</html>