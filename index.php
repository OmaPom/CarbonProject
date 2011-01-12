<?php
define('INCLUDE_CHECK', true);

require 'connect.php';
//require 'functions.php';
// Those two files can be included only if INCLUDE_CHECK is defined


session_name('cfLogin');
// Starting the session

session_set_cookie_params(2 * 7 * 24 * 60 * 60);
// Making the cookie live for 2 weeks

session_start();

if ($_SESSION['id'] && !isset($_COOKIE['cfRemember']) && !$_SESSION['rememberMe']) {
    // If you are logged in, but you don't have the tzRemember cookie (browser restart)
    // and you have not checked the rememberMe checkbox:

    $_SESSION = array();
    session_destroy();

    // Destroy the session
}


if (isset($_GET['logoff'])) {
    $_SESSION = array();
    session_destroy();

    header("Location: index.php");
    exit;
}

if ($_POST['submit'] == 'Login') {
    // Checking whether the Login form has been submitted

    $err = array();
    // Will hold our errors


    if (!$_POST['username'] || !$_POST['password'])
        $err[] = 'All the fields must be filled in!';

    if (!count($err)) {
        $_POST['username'] = mysql_real_escape_string($_POST['username']);
        $_POST['password'] = mysql_real_escape_string($_POST['password']);
        $_POST['rememberMe'] = (int) $_POST['rememberMe'];

        // Escaping all input data

        $row = mysql_fetch_assoc(mysql_query("SELECT id,usr FROM members WHERE usr='{$_POST['username']}' AND pass='" . md5($_POST['password']) . "'"));

        if ($row['usr']) {
            // If everything is OK login

            $_SESSION['usr'] = $row['usr'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['rememberMe'] = $_POST['rememberMe'];

            // Store some data in the session

            setcookie('tzRemember', $_POST['rememberMe']);
        }
        else
            $err[] = 'Wrong username and/or password!';
    }

    if ($err)
        $_SESSION['msg']['login-err'] = implode('<br />', $err);
    // Save the error messages in the session

    header("Location: index.php");
    exit;
}
else if ($_POST['submit'] == 'Register') {
    // If the Register form has been submitted

    $err = array();

    if (strlen($_POST['username']) < 4 || strlen($_POST['username']) > 32) {
        $err[] = 'Your username must be between 3 and 32 characters!';
    }

    if (preg_match('/[^a-z0-9\-\_\.]+/i', $_POST['username'])) {
        $err[] = 'Your username contains invalid characters!';
    }

    if (!checkEmail($_POST['email'])) {
        $err[] = 'Your email is not valid!';
    }

    if (!count($err)) {
        // If there are no errors

        $pass = substr(md5($_SERVER['REMOTE_ADDR'] . microtime() . rand(1, 100000)), 0, 6);
        // Generate a random password

        $_POST['email'] = mysql_real_escape_string($_POST['email']);
        $_POST['username'] = mysql_real_escape_string($_POST['username']);
        // Escape the input data


        mysql_query("	INSERT INTO members(usr,pass,email,regIP,dt)
						VALUES(

							'" . $_POST['username'] . "',
							'" . md5($pass) . "',
							'" . $_POST['email'] . "',
							'" . $_SERVER['REMOTE_ADDR'] . "',
							NOW()

						)");

        if (mysql_affected_rows($link) == 1) {
            send_mail('demo-test@tutorialzine.com',
                    $_POST['email'],
                    'Registration System Demo - Your New Password',
                    'Your password is: ' . $pass);

            $_SESSION['msg']['reg-success'] = 'We sent you an email with your new password!';
        }
        else
            $err[] = 'This username is already taken!';
    }

    if (count($err)) {
        $_SESSION['msg']['reg-err'] = implode('<br />', $err);
    }

    header("Location: index.php");
    exit;
}

$script = '';

if ($_SESSION['msg']) {
    // The script below shows the sliding panel on page load

    $script = '
	<script type="text/javascript">

		$(function(){

			$("div#panel").show();
			$("#toggle a").toggle();
		});

	</script>';
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
                        <div role="tablist" class="ui-accordion ui-widget ui-helper-reset ui-accordion-icons" id="accordion_menu">
                            <style type="text/css">
                                /*demo page css*/
                                body{ font: 62.5% "Trebuchet MS", sans-serif; margin: 50px;}
                                .demoHeaders { margin-top: 2em; }
                            </style>
                            <!--Member Left Menu Tap-->
                            <div>
                                <h3><a tabindex="-1" href="#">Member Login</a></h3>
                                <div>
                                    <?php
                                    if (!$_SESSION['id']):
                                    ?>
                                        <div class="left">
                                            <!-- Login Form -->
                                            <form class="clearfix" action="" method="post">

                                            <?php
                                            if ($_SESSION['msg']['login-err']) {
                                                echo '<div class="err">' . $_SESSION['msg']['login-err'] . '</div>';
                                                unset($_SESSION['msg']['login-err']);
                                            }
                                            ?>

                                            <label class="grey" for="username">Username:</label>
                                            <input class="field" type="text" name="username" id="username" value="" size="23" />
                                            <label class="grey" for="password">Password:</label>
                                            <input class="field" type="password" name="password" id="password" size="23" />
                                            <label><input name="rememberMe" id="rememberMe" type="checkbox" checked="checked" value="1" /> &nbsp;Remember me</label>
                                            <div class="clear"></div>
                                            <input type="submit" name="submit" value="Login" class="bt_login" />
                                        </form>
                                    </div>
                                    <?php
                                            else:
                                    ?>
                                                <div class="left">
                                                    <h1>Hello <?php echo $_SESSION['usr'] ?></h1>
                                                    <a href="home.php">Goto Carbon footprint Calculator</a>
                                                    <p>- or -</p>
                                                    <a href="?logoff">Log off</a>
                                                </div>
                                                <div class="left right">
                                                </div>

                                    <?php
                                                endif;
                                    ?>
                                </div>
                            </div>
                            <!--Calculator Left Menu Tap-->
                            <div>
                                <h3><a tabindex="-1" href="#">Calculator</a></h3>
                                <div>
                                    <ul class="left-menu">
                                        <li><a href="home.php"><div>คำนวณ Carbon footprint</div></a></li>
                                        <li><a href="#" id="left_menu_offset"><div>โครงการปลูกป่า</div></a></li>
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
    </div>
    <!--End Grid Left Menu -->
</body>
</html>