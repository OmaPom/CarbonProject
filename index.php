<?php
include_once "fbmain.php";
$config['baseurl'] = "http://carbonfootprint.omahaha.com/index.php";

//if user is logged in and session is valid.
if ($fbme) {
    //Retriving movies those are user like using graph api
    try {
        $movies = $facebook->api('/me/movies');
    } catch (Exception $o) {
        d($o);
    }

    //Calling users.getinfo legacy api call example
    try {
        $param = array(
            'method' => 'users.getinfo',
            'uids' => $fbme['id'],
            'fields' => 'name,current_location,profile_url',
            'callback' => ''
        );
        $userInfo = $facebook->api($param);
    } catch (Exception $o) {
        d($o);
    }

    //update user's status using graph api
    if (isset($_POST['tt'])) {
        try {
            $statusUpdate = $facebook->api('/me/feed', 'post', array('message' => $_POST['tt'], 'cb' => ''));
        } catch (FacebookApiException $e) {
            d($e);
        }
    }

    //fql query example using legacy method call and passing parameter
    try {
        //get user id
        $uid = $facebook->getUser();
        //or you can use $uid = $fbme['id'];

        $fql = "select name, hometown_location, sex, pic_square from user where uid=" . $uid;
        $param = array(
            'method' => 'fql.query',
            'query' => $fql,
            'callback' => ''
        );
        $fqlResult = $facebook->api($param);
    } catch (Exception $o) {
        d($o);
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style type="text/css" >
            body{ font-size: 12px; font-family: Arial;}
        </style>
        <script type="text/javascript" src="js/jquery-latest.min.js"></script>
        <!--Import Jquery UI-->
        <link type="text/css" href="css/south-street/jquery-ui-1.8.4.custom.css" rel="stylesheet" />
        <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.8.4.custom.min.js"></script>

        <!--Import CSS pie graph-->
        <link rel="stylesheet" href="css/pieGraph.css"/>
        <!--END Jquery UI-->

        <!--Import Grid 960-->
        <link rel="stylesheet" href="css/reset.css"/>
        <link rel="stylesheet" href="css/text.css"/>
        <link rel="stylesheet" href="css/960.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/style2.css"/>
        <!--End Grid 960 -->

        <!--Import Login Script-->
        <link rel="stylesheet" type="text/css" href="demo.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="login_panel/css/slide.css" media="screen" />
        <script src="login_panel/js/slide.js" type="text/javascript"></script>
        <?php echo $script; ?>
        <!--End Login Script-->
        <script type="text/javascript" src="js/accordionMenu.js"></script>
        <script type="text/javascript" src="js/loadPage.js"></script>
        <script type="text/javascript" src="js/slideMenu.js"></script>
        <script type="text/javascript" src="js/calc.js"></script>
        <!--<script src="js/pieGraph.js"></script>-->
    </head>
    <body style=" background-color:#fff;">
        <!--Facebook SDK-->
        <div id="fb-root"></div>
        <script type="text/javascript">
            window.fbAsyncInit = function() {
                FB.init({appId: '<?= $fbconfig['appid'] ?>', status: true, cookie: true, xfbml: true});
 
                /* All the events registered */
                FB.Event.subscribe('auth.login', function(response) {
                    // do something with response
                    login();
                });
                FB.Event.subscribe('auth.logout', function(response) {
                    // do something with response
                    logout();
                });
            };
            (function() {
                var e = document.createElement('script');
                e.type = 'text/javascript';
                e.src = document.location.protocol +
                    '//connect.facebook.net/en_US/all.js';
                e.async = true;
                document.getElementById('fb-root').appendChild(e);
            }());
 
            function login(){
                document.location.href = "<?= $config['baseurl'] ?>";
            }
            function logout(){
                document.location.href = "<?= $config['baseurl'] ?>";
            }
        </script>
    <style type="text/css">
        .box{
            margin: 5px;
            border: 1px solid #60729b;
            padding: 5px;
            width: 500px;
            height: 200px;
            overflow:auto;
            background-color: #e6ebf8;
        }
    </style>
    <!--End Facebook SDK-->
    <!--Grid Left Menu -->
    <div class="container_16">
        <div class="grid_16">
            <div class="top" style="background-image: url(images/bg_cfp.jpg); height: 100px; width: 940px;"></div>
        </div>
        <div class="clearfix"></div>
        <div id="main">
            <div class="left_menu" style="float: left">
                <div class="grid_4" style="background-color:#fff;"><h3>Menu</h3>

                    <!-- Accordion Left Menu-->
                    <div id="accordion_menu">
                        <style type="text/css">
                            /*demo page css*/
                            body{ font: 62.5% "Trebuchet MS", sans-serif; margin: 50px;}
                            .demoHeaders { margin-top: 2em; }
                        </style>
                        <!--Member Left Menu Tap-->
                        <div>
                            <h3><a tabindex="-1" href="#">Member Login</a></h3>
                            <div>
                                <div>

                                    <?php if ($fbme) {?>
                                    <center><img src="https://graph.facebook.com/<?php echo $uid; ?>/picture"></center>
                                    <div>
                                        <span style="font-weight: bold;">Hello : </span>
                                        <?php echo $fbme['name']; ?>
                                    </div>
                                    <div>
                                        <span style="font-weight: bold;">Gender : </span>
                                        <?php echo $fbme['gender']; ?>
                                    </div>
                                    <div>
                                        <span style="font-weight: bold;">Location : </span>
                                        <?php echo $fbme['location']['name']; ?>
                                    </div>
                                    <div>
                                        <span style="font-weight: bold;">About : </span>
                                        <?php echo $fbme['about']; ?>
                                    </div>
                                    <?php } ?>
                                    <br/>
                                    <p>
                                    <fb:login-button autologoutlink="true" perms="email,user_birthday,status_update,publish_stream"></fb:login-button>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--Calculator Left Menu Tap-->
                        <div>
                            <h3><a tabindex="-1" href="#">Calculator</a></h3>
                            <div>
                                <center><img alt=""  src="images/cfplogo.jpg"></center>
                                <ul class="left-menu">
                                    <li><a href="home.php"><div>คำนวณ Carbon footprint</div></a></li>
                                    <li><a href="#" id="left_menu_offset"><div>โครงการปลูกป่า</div></a></li>
                                    <li><a href="#" id="left_menu_reduce"><div>วิธ๊การลดโลกร้อน</div></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--End Calculator Left Menu Tap-->
                        <!--About Left Menu Tap-->
                        <div>
                            <h3><a tabindex="-1" href="#">About Us</a></h3>
                            <div>
                                COE2010-09
                            </div>
                        </div>
                        <!--End About Left Menu Tap-->

                    </div>
                </div>
                <!--End Accordion Left Menu -->
            </div>
            <div class="grid_12">
                <div id="content">
                    <div style="background-image: url(images/content_eng.jpg); height: 430px; width: 690px;"></div>
                </div>
            </div>
        </div>
    </div>
    <!--End Grid Left Menu -->
</body>
</html>
