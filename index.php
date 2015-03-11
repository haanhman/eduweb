<?php
require_once 'lib/Mobile_Detect.php';
$detect = new Mobile_Detect();
$mobile = false;
if (($detect->isMobile() | $detect->isTablet())) {
    $mobile = true;
}

require_once 'page.php';
global $page;
$p = isset($_GET['page']) ? trim($_GET['page']) : 'homepage';
$current_page = $page[$p];

function htmlEncode($string) {
    return htmlspecialchars($string);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $current_page['title'] ?></title>
        <meta name="description" content="<?php echo htmlEncode($current_page['description']) ?>" />
        <meta name="keywords" content="<?php echo htmlEncode($current_page['keywords']) ?>" />
        <meta charset="UTF-8">               
        <link href="/css/style.css" rel="stylesheet" />
        <script type="text/javascript" src="/js/jquery.js"></script>                       
    </head>
    <body>        
        <div class="bg_top"></div>
        <div id="container-outsite">
            <div class="container-wapper">
                <div id="container">
                    <div class="airplane"></div>
                    <div class="header">

                        <ul class="nav">
                            <li>
                                <a href="<?php echo $page['homepage']['link'] ?>"><img src="/images/btn_home.png" alt="Home page" /></a>
                            </li>
                            <li>
                                <a href="<?php echo $page['contact']['link'] ?>"><img src="/images/contact_btn.png" alt="Mail us" /></a>
                            </li>
                        </ul>
                    </div>
                    <?php require_once 'page/' . $p . '.php'; ?>

                </div>
                <?php
                if (!$mobile) {
                    ?>
                    <div class="hoa">&nbsp;</div>
                    <div class="duck">&nbsp;</div>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="footer-wapper">            
            <div id="footer">
                <div class="brown">
                    <div class="left">
                        <ul>
                            <li>
                                <a href="<?php echo $page['homepage']['link'] ?>">Home</a>
                            </li>
                            <li>
                                <a href="<?php echo $page['contact']['link'] ?>">Contact us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="center">Copyright &copy; by Early Start</div>
                    <div class="right">
                        <ul>
                            <li>
                                <a href="<?php echo $page['privacy']['link'] ?>">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="<?php echo $page['terms']['link'] ?>">Terms and conditions</a>
                            </li>
                        </ul>
                    </div>                    
                </div>
            </div>
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- bottom_monkeyjunior -->
        <ins class="adsbygoogle"
             style="display:inline-block;width:728px;height:90px"
             data-ad-client="ca-pub-5253078296717317"
             data-ad-slot="6772322380"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        </div>        
    </body>
</html>
