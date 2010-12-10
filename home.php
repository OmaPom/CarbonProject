<?php
session_name('cfLogin');
session_set_cookie_params(2 * 7 * 24 * 60 * 60);
session_start();

if ($_SESSION['id']) {
    echo '<h1>Hello,' . $_SESSION['usr'] . '! You are registered and logged in!</h1>';
} else {
    header("Location: index.php");
    echo '<h1>Please, <a href="index.php">login</a> and come back later!</h1>';
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
        <!--Import Grid 960
        <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
        -->
        <link rel="stylesheet" href="css/reset.css"/>
        <link rel="stylesheet" href="css/text.css"/>
        <link rel="stylesheet" href="css/960.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/style2.css"/>

        <!--End Grid 960 -->

    </head>
    <body style=" background-color:#fff;">
        <div class="container_16">

            <div class="grid_16">
                <div class="top"><h1 style="font-size:60px;">Carbon Footprint Calculator</h1></div>
            </div>
            <div class="clearfix"></div>
            <div id="main">
                <div class="left_menu" style="float: left">
                    <div class="grid_4" style="background-color:#fff;"><h3>Menu</h3>

                        <!-- Accordion -->
                        <div role="tablist" class="ui-accordion ui-widget ui-helper-reset ui-accordion-icons" id="accordion_menu">
                            <div>
                                <h3 tabindex="0" aria-expanded="true" role="tab" class="ui-accordion-header ui-helper-reset ui-state-active ui-corner-top"><span class="ui-icon ui-icon-triangle-1-e"></span><a tabindex="-1" href="#">Sign in</a></h3>
                                <div role="tabpanel" style="height: 14px; display: block; overflow: auto; padding-top: 11px; padding-bottom: 11px;" class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active">
                                    <div class="login">Username :</div>
                                    <div>Hello,</div>
                                    <div id="usr">
                                        <?php
                                        echo $_SESSION['usr'];
                                        ?>
                                    </div>
                                    <div class="login">Password :</div>
                                    <div><input type="textfield" name="password"/></div>
                                    <form>
                                        <input id="checkPass" type="button" value="Sign in"/>
                                        <input id="register" type="button" value="Register"/>
                                    </form>
                                    <a href="#" style="color:#59b4d4">Remember password.</a>
                                </div>

                                <div>
                                    <h3 tabindex="-1" aria-expanded="false" role="tab" class="ui-accordion-header ui-helper-reset ui-state-default ui-corner-all"><span class="ui-icon ui-icon-triangle-1-e"></span><a tabindex="-1" href="#">Calculator</a></h3>
                                    <div role="tabpanel" style="height: 14px; display: none; overflow: auto; padding-top: 11px; padding-bottom: 11px;" class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
                                        <ul class="left-menu">
                                            <li><a href="#"><div>Home</div></a></li>
                                            <li><a href="#"><div>Energy</div></a></li>
                                            <li><a href="#"><div>Transportation</div></a></li>
                                            <li><a href="#"><div>Food</div></a></li>
                                            <li><a href="#"><div>Recycle</div></a></li>
                                            <li><a href="#"><div>Other</div></a></li>
                                            <li><a href="#" id="icon_result"><div>Result & Offset</div></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div>
                                    <h3 tabindex="-1" aria-expanded="false" role="tab" class="ui-accordion-header ui-helper-reset ui-state-default ui-corner-all"><span class="ui-icon ui-icon-triangle-1-e"></span><a tabindex="-1" href="#">About Us</a></h3>
                                    <div role="tabpanel" style="height: 14px; display: none; overflow: auto; padding-top: 11px; padding-bottom: 11px;" class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
                                        COE2010-09
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container_content" style="float: right">
                    <!-- <div class="grid_10">
                         <div class="clearfix"></div>-->
                    <div class="grid_10" style="background-color:#fff;">

                        <div id="accordion_content">
                            <style type="text/css">
                                /*demo page css*/
                                body{ font: 62.5% "Trebuchet MS", sans-serif; margin: 50px;}
                                .demoHeaders { margin-top: 2em; }
                            </style>
                            <div class="grid_2">
                                <div><h3 style="text-align: center">Tons of CO2/year</h3></div>
                                <!--<div id="result2" style="text-align: center;font-size: 16px">x.xx</div>-->
                                <div id="displayEmission" style="text-align: center;font-size: 16px">0.00</div>
                                <!--<button type="button" id="clickTest">Click</button>-->
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- Tabs Content
                        <h2 class="demoHeaders">Tabs</h2>-->
                        <div id="tabs">
                            <ul>
                                <li><a href="#tabs-energy">Energy</a></li>
                                <li><a href="#tabs-food">Food</a></li>
                                <li><a href="#tabs-transportation">Transportation</a></li>
                                <li><a href="#tabs-recycle">Recycle</a></li>
                                <li><a href="#tabs-other">Other</a></li>
                                <li><a href="#tabs-result" id="result_piegraph">Result</a></li>
                            </ul>
                            <!--Energy Tap Menu-->
                            <div id="tabs-energy">
                                <div id="accordion_energy">
                                    <style type="text/css">
                                        /*demo page css*/
                                        body{ font: 62.5% "Trebuchet MS", sans-serif; margin: 50px;}
                                        .demoHeaders { margin-top: 2em; }
                                    </style>
                                    <div class="container_10">
                                        <div class="grid_10">
                                            <!--Light Field-->
                                            <div class="Light">
                                                <h3><a href="#">หลอดไฟ</a></h3>
                                                <div>
                                                    <form>
                                                        <div class="inventory">ขนาด WATT</div>
                                                        <div ><input type="textfield" class="Lwatt" id="Light_watt">
                                                            <span class="inventoryUnit">Watt</span>
                                                        </div>
                                                        <div class="inventory">จำนวน</div>
                                                        <div><input type="textfield" id="Light_amount"/>
                                                            <span class="inventoryUnit">หลอด</span>
                                                        </div>
                                                        <div class="inventory">จำนวนการใช้งาน</div>
                                                        <div><!--<input type="textfield" id="Light_times"/>-->
                                                            <select id="Light_times">
                                                                <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                                <option value="17">17</option>
                                                                <option value="18">18</option>
                                                                <option value="19">19</option>
                                                                <option value="20">20</option>
                                                                <option value="21">21</option>
                                                                <option value="22">22</option>
                                                                <option value="23">23</option>
                                                                <option value="24">24</option>
                                                            </select>
                                                            <span class="inventoryUnit">ชม./วัน</span>
                                                        </div>
                                                        <button type="button" id="calcLight">Calculate</button>
                                                    </form>
                                                </div>
                                            </div>

                                            <!--Air Field-->
                                            <div class = "Air">
                                                <h3><a href="#">เครื่องปรับอากาศ</a></h3>
                                                <div>
                                                    <form>
                                                        <div class="inventory">ขนาด WATT</div>
                                                        <div ><input type="textfield" class="Lwatt" id="Air_watt">
                                                            <span class="inventoryUnit">Watt</span>
                                                        </div>
                                                        <div class="inventory">จำนวน</div>
                                                        <div><input type="textfield" id="Air_amount"/>
                                                            <span class="inventoryUnit">เครื่อง</span>
                                                        </div>
                                                        <div class="inventory">จำนวนการใช้งาน</div>
                                                        <div><!--<input type="textfield" id="Air_times"/>-->
                                                            <select id="Air_times">
                                                                <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                                <option value="17">17</option>
                                                                <option value="18">18</option>
                                                                <option value="19">19</option>
                                                                <option value="20">20</option>
                                                                <option value="21">21</option>
                                                                <option value="22">22</option>
                                                                <option value="23">23</option>
                                                                <option value="24">24</option>
                                                            </select>
                                                            <span class="inventoryUnit">ชม./วัน</span>
                                                        </div>
                                                        <button type="button" id="calcAir">Calculate</button>
                                                    </form>
                                                </div>
                                            </div>

                                            <!--TV Field-->
                                            <div class = "TV">
                                                <h3><a href="#">โทรทัศน์สี</a></h3>
                                                <div>
                                                    <form>
                                                        <div class="inventory">ขนาด WATT</div>
                                                        <div ><input type="textfield" class="Lwatt" id="TV_watt">
                                                            <span class="inventoryUnit">Watt</span>
                                                        </div>
                                                        <div class="inventory">จำนวน</div>
                                                        <div><input type="textfield" id="TV_amount"/>
                                                            <span class="inventoryUnit">เครื่อง</span>
                                                        </div>
                                                        <div class="inventory">จำนวนการใช้งาน</div>
                                                        <div><!--<input type="textfield" id="TV_times"/>-->
                                                            <select id="TV_times">
                                                                <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                                <option value="17">17</option>
                                                                <option value="18">18</option>
                                                                <option value="19">19</option>
                                                                <option value="20">20</option>
                                                                <option value="21">21</option>
                                                                <option value="22">22</option>
                                                                <option value="23">23</option>
                                                                <option value="24">24</option>
                                                            </select>
                                                            <span class="inventoryUnit">ชม./วัน</span>
                                                        </div>
                                                        <button type="button" id="calcTV">Calculate</button>
                                                    </form>
                                                </div>
                                            </div>

                                            <!--Fan Field-->
                                            <div class = "Fan">
                                                <h3><a href="#">พัดลมไฟฟ้า</a></h3>
                                                <div>
                                                    <form>
                                                        <div class="inventory">ขนาด WATT</div>
                                                        <div ><input type="textfield" class="Lwatt" id="Fan_watt">
                                                            <span class="inventoryUnit">Watt</span>
                                                        </div>
                                                        <div class="inventory">จำนวน</div>
                                                        <div><input type="textfield" id="Fan_amount"/>
                                                            <span class="inventoryUnit">เครื่อง</span>
                                                        </div>
                                                        <div class="inventory">จำนวนการใช้งาน</div>
                                                        <div><!--<input type="textfield" id="Fan_times"/>-->
                                                            <select id="Fan_times">
                                                                <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                                <option value="17">17</option>
                                                                <option value="18">18</option>
                                                                <option value="19">19</option>
                                                                <option value="20">20</option>
                                                                <option value="21">21</option>
                                                                <option value="22">22</option>
                                                                <option value="23">23</option>
                                                                <option value="24">24</option>
                                                            </select>
                                                            <span class="inventoryUnit">ชม./วัน</span>
                                                        </div>
                                                        <button type="button" id="calcFan">Calculate</button>
                                                    </form>
                                                </div>
                                            </div>

                                            <!--Water Heater Field-->
                                            <div class = "WHeater">
                                                <h3><a href="#">เครื่องทำน้ำอุ่น</a></h3>
                                                <div>
                                                    <form>
                                                        <div class="inventory">ขนาด WATT</div>
                                                        <div ><input type="textfield" class="Lwatt" id="WHeater_watt">
                                                            <span class="inventoryUnit">Watt</span>
                                                        </div>
                                                        <div class="inventory">จำนวน</div>
                                                        <div><input type="textfield" id="WHeater_amount"/>
                                                            <span class="inventoryUnit">เครื่อง</span>
                                                        </div>
                                                        <div class="inventory">จำนวนการใช้งาน</div>
                                                        <div><!--<input type="textfield" id="WHeater_times"/>-->
                                                            <select id="WHeater_times">
                                                                <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                                <option value="17">17</option>
                                                                <option value="18">18</option>
                                                                <option value="19">19</option>
                                                                <option value="20">20</option>
                                                                <option value="21">21</option>
                                                                <option value="22">22</option>
                                                                <option value="23">23</option>
                                                                <option value="24">24</option>
                                                            </select>
                                                            <span class="inventoryUnit">ชม./วัน</span>
                                                        </div>
                                                        <button type="button" id="calcWHeater">Calculate</button>
                                                    </form>
                                                </div>
                                            </div>

                                            <!--Vacuum Bottle Field-->
                                            <div class = "VBottle">
                                                <h3><a href="#">กระติกน้ำร้อน</a></h3>
                                                <div>
                                                    <form>
                                                        <div class="inventory">ขนาด WATT</div>
                                                        <div ><input type="textfield" class="Lwatt" id="VBottle_watt">
                                                            <span class="inventoryUnit">Watt</span>
                                                        </div>
                                                        <div class="inventory">จำนวน</div>
                                                        <div><input type="textfield" id="VBottle_amount"/>
                                                            <span class="inventoryUnit">หลอด</span>
                                                        </div>
                                                        <div class="inventory">จำนวนการใช้งาน</div>
                                                        <div><!--<input type="textfield" id="VBottle_times"/>-->
                                                            <select id="VBottle_times">
                                                                <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                                <option value="17">17</option>
                                                                <option value="18">18</option>
                                                                <option value="19">19</option>
                                                                <option value="20">20</option>
                                                                <option value="21">21</option>
                                                                <option value="22">22</option>
                                                                <option value="23">23</option>
                                                                <option value="24">24</option>
                                                            </select>
                                                            <span class="inventoryUnit">ชม./วัน</span>
                                                        </div>
                                                        <button type="button" id="calcVBottle">Calculate</button>
                                                    </form>
                                                </div>
                                            </div>

                                            <!--Freezer Field-->
                                            <div class = "Freezer">
                                                <h3><a href="#">ตู้เย็น</a></h3>
                                                <div>
                                                    <form>
                                                        <div class="inventory">ขนาด WATT</div>
                                                        <div ><input type="textfield" class="Lwatt" id="Freezer_watt">
                                                            <span class="inventoryUnit">Watt</span>
                                                        </div>
                                                        <div class="inventory">จำนวน</div>
                                                        <div><input type="textfield" id="Freezer_amount"/>
                                                            <span class="inventoryUnit">หลอด</span>
                                                        </div>
                                                        <div class="inventory">จำนวนการใช้งาน</div>
                                                        <div><!--<input type="textfield" id="Freezer_times"/>-->
                                                            <select id="Air_times">
                                                                <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                                <option value="17">17</option>
                                                                <option value="18">18</option>
                                                                <option value="19">19</option>
                                                                <option value="20">20</option>
                                                                <option value="21">21</option>
                                                                <option value="22">22</option>
                                                                <option value="23">23</option>
                                                                <option value="24">24</option>
                                                            </select>
                                                            <span class="inventoryUnit">ชม./วัน</span>
                                                        </div>
                                                        <button type="button" id="calcFreezer">Calculate</button>
                                                    </form>
                                                </div>
                                            </div>

                                            <!--Computer Field-->
                                            <div class = "Com">
                                                <h3><a href="#">คอมพิวเตอร์</a></h3>
                                                <div>
                                                    <form>
                                                        <div class="inventory">ขนาด WATT</div>
                                                        <div ><input type="textfield" class="Lwatt" id="Com_watt">
                                                            <span class="inventoryUnit">Watt</span>
                                                        </div>
                                                        <div class="inventory">จำนวน</div>
                                                        <div><input type="textfield" id="Com_amount"/>
                                                            <span class="inventoryUnit">หลอด</span>
                                                        </div>
                                                        <div class="inventory">จำนวนการใช้งาน</div>
                                                        <div><!--<input type="textfield" id="Com_times"/>-->
                                                            <select id="Com_times">
                                                                <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                                <option value="17">17</option>
                                                                <option value="18">18</option>
                                                                <option value="19">19</option>
                                                                <option value="20">20</option>
                                                                <option value="21">21</option>
                                                                <option value="22">22</option>
                                                                <option value="23">23</option>
                                                                <option value="24">24</option>
                                                            </select>
                                                            <span class="inventoryUnit">ชม./วัน</span>
                                                        </div>
                                                        <button type="button" id="calcCom">Calculate</button>
                                                    </form>
                                                </div>
                                            </div>

                                            <!--Mobile Phone Field-->
                                            <div class = "Phone">
                                                <h3><a href="#">โทรศัพท์เคลื่อนที่</a></h3>
                                                <div>
                                                    <form>
                                                        <div class="inventory">ขนาด WATT</div>
                                                        <div ><input type="textfield" class="Lwatt" id="Phone_watt">
                                                            <span class="inventoryUnit">Watt</span>
                                                        </div>
                                                        <div class="inventory">จำนวน</div>
                                                        <div><input type="textfield" id="Phone_amount"/>

                                                            <span class="inventoryUnit">หลอด</span>
                                                        </div>
                                                        <div class="inventory">จำนวนการใช้งาน</div>
                                                        <div><!--<input type="textfield" id="Phone_times"/>-->
                                                            <select id="Phone_times">
                                                                <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                                <option value="17">17</option>
                                                                <option value="18">18</option>
                                                                <option value="19">19</option>
                                                                <option value="20">20</option>
                                                                <option value="21">21</option>
                                                                <option value="22">22</option>
                                                                <option value="23">23</option>
                                                                <option value="24">24</option>
                                                            </select>
                                                            <span class="inventoryUnit">ชม./วัน</span>
                                                        </div>
                                                        <button type="button" id="calcPhone">Calculate</button>
                                                    </form>
                                                </div>
                                            </div>

                                            <!--Microwave Oven Field-->
                                            <div class = "Oven">
                                                <h3><a href="#">เตาอบไมโครเวฟ</a></h3>
                                                <div>
                                                    <form>
                                                        <div class="inventory">ขนาด WATT</div>
                                                        <div ><input type="textfield" class="Lwatt" id="Oven_watt">
                                                            <span class="inventoryUnit">Watt</span>
                                                        </div>
                                                        <div class="inventory">จำนวน</div>
                                                        <div><input type="textfield" id="Oven_amount"/>
                                                            <span class="inventoryUnit">หลอด</span>
                                                        </div>
                                                        <div class="inventory">จำนวนการใช้งาน</div>
                                                        <div><!--<input type="textfield" id="Oven_times"/>-->
                                                            <select id="Oven_times">
                                                                <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                                <option value="17">17</option>
                                                                <option value="18">18</option>
                                                                <option value="19">19</option>
                                                                <option value="20">20</option>
                                                                <option value="21">21</option>
                                                                <option value="22">22</option>
                                                                <option value="23">23</option>
                                                                <option value="24">24</option>
                                                            </select>
                                                            <span class="inventoryUnit">ชม./วัน</span>
                                                        </div>
                                                        <button type="button" id="calcOven">Calculate</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div
                                    </div>
                                </div>
                            </div>
                            <!--End Energy Tap Menu-->
                            <!--Food Tap Menu-->
                            <div id="tabs-food">
                                <div id="accordion_food">
                                    <style type="text/css">
                                        /*demo page css*/
                                        body{ font: 62.5% "Trebuchet MS", sans-serif; margin: 50px;}
                                        .demoHeaders { margin-top: 2em; }
                                    </style>
                                    <div class="container_10">
                                        <div class="grid_10">
                                            <div class="meat">
                                                <h3><a href="#">อาหารประเภทเนื้อ</a></h3>
                                                <div>
                                                    <div class="inventory">ไก่</div>
                                                    <div ><input type="textfield" id="Km"/>
                                                        <span class="inventoryUnit">ครั้ง/สัปดาห์</span>
                                                    </div>
                                                    <div class="inventory">หมู</div>
                                                    <div><input type="textfield" id="times"/>
                                                        <span class="inventoryUnit">ครั้ง/สัปดาห์</span>
                                                    </div>
                                                    <div class="inventory">วัว</div>
                                                    <div><input type="textfield" id="times"/>
                                                        <span class="inventoryUnit">ครั้ง/สัปดาห์</span>
                                                    </div>
                                                    <form method="POST" action="calcTrans.php">
                                                        <button type="button" id="calcTrans">Calculate</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="flour">
                                                <h3><a href="#">อาหารประเภทแป้ง</a></h3>
                                                <div>
                                                    <div class="inventory">ข้าว</div>
                                                    <div ><input type="textfield" name="watt" id="Rice_amount"/>
                                                        <span class="inventoryUnit">จาน/วัน</span>
                                                    </div>
                                                    <div class="inventory">ขนมปัง</div>
                                                    <div><input type="textfield" name="amount"/>
                                                        <span class="inventoryUnit">แผ่น/วัน</span>
                                                    </div>
                                                    <div class="inventory">ซีเรียล</div>
                                                    <div><input type="textfield" name="times"/>
                                                        <span class="inventoryUnit">จาน/วัน</span>
                                                    </div>
                                                    <form method="POST" action="calcTrans.php">
                                                        <button type="button" id="calcRice">Calculate</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="vegetable">
                                                <h3><a href="#">อาหารประเภทผัก</a></h3>
                                                <div>
                                                    <div class="inventory">มะเขือเทศ</div>
                                                    <div ><input type="textfield" name="watt"/>
                                                        <span class="inventoryUnit">ผลต่อสัปดาห์</span>
                                                    </div>
                                                    <div class="inventory">หัวหอมใหญ่</div>
                                                    <div><input type="textfield" name="amount"/>
                                                        <span class="inventoryUnit">ผลต่อสัปดาห์</span>
                                                    </div>
                                                    <div class="inventory">กะหล่ำปลี</div>
                                                    <div><input type="textfield" name="times"/>
                                                        <span class="inventoryUnit">ผลต่อสัปดาห์</span>
                                                    </div>
                                                    <form method="POST" action="calcTrans.php">
                                                        <button type="button" id="calcTrans">Calculate</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="fruit">

                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <!--End Food Tap Menu-->
                            <!--Transportation Tap Menu-->
                            <div id="tabs-transportation">
                                <div id="accordion_transtportation">
                                    <style type="text/css">
                                        /*demo page css*/
                                        body{ font: 62.5% "Trebuchet MS", sans-serif; margin: 50px;}
                                        .demoHeaders { margin-top: 2em; }
                                    </style>
                                    <div class="container_10">
                                        <div class="grid_10">
                                            <!--Bus Field-->
                                            <div class="Bus">
                                                <h3><a href="#">รถโดยสาร</a></h3>
                                                <div>
                                                    <form>
                                                        <div>ระยะทาง</div>
                                                        <div ><input type="textfield" id="Bus_km"/>
                                                            <span>Km</span>
                                                        </div>
                                                        <div>จำนวนการใช้งาน</div>
                                                        <div><input type="textfield" id="Bus_times"/>
                                                            <span>ครั้ง/เดือน</span>
                                                        </div>
                                                        <button type="button" id="calcBus">Calculate</button>
                                                    </form>
                                                </div>
                                            </div>

                                            <!--Private Car Field-->
                                            <div class="Privatecar">
                                                <h3><a href="#">รถยนต์ส่วนบุคคล</a></h3>
                                                <div>
                                                    <form>
                                                        <div>ระยะทาง</div>
                                                        <div ><input type="textfield" id="PCar_km"/>
                                                            <span>Km</span>
                                                        </div>
                                                        <div>จำนวนการใช้งาน</div>
                                                        <div><input type="textfield" id="PCar_times"/>
                                                            <span>ครั้ง/เดือน</span>
                                                        </div>
                                                        <button type="button" id="calcPCar">Calculate</button>
                                                    </form>
                                                </div>
                                            </div>

                                            <!--Taxi Field-->
                                            <div class="Taxi">
                                                <h3><a href="#">รถแท็กซี่</a></h3>
                                                <div>
                                                    <form>
                                                        <div>ระยะทาง</div>
                                                        <div ><input type="textfield" id="Taxi_km"/>
                                                            <span>Km</span>
                                                        </div>
                                                        <div>จำนวนการใช้งาน</div>
                                                        <div><input type="textfield" id="Taxi_times"/>
                                                            <span>ครั้ง/เดือน</span>
                                                        </div>
                                                        <button type="button" id="calcTaxi">Calculate</button>
                                                    </form>
                                                </div>
                                            </div>

                                            <!--Motocycle Field-->
                                            <div class="Motorcycle">
                                                <h3><a href="#">รถจักรยานยนต์</a></h3>
                                                <div>
                                                    <form>
                                                        <div>ระยะทาง</div>
                                                        <div><input type="textfield" id="Moto_km"/>
                                                            <span>Km</span>
                                                        </div>
                                                        <div>จำนวนการใช้งาน</div>
                                                        <div><input type="textfield" id="Moto_times"/>
                                                            <span>ครั้ง/เดือน</span>
                                                        </div>
                                                        <button type="button" id="calcMoto">Calculate</button>
                                                    </form>
                                                </div>
                                            </div>

                                            <!--Van Field-->
                                            <div class="Van">
                                                <h3><a href="#">รถตู้</a></h3>
                                                <div>
                                                    <form>
                                                        <div>ระยะทาง</div>
                                                        <div ><input type="textfield" id="Van_km"/>
                                                            <span>Km</span>
                                                        </div>
                                                        <div>จำนวนการใช้งาน</div>
                                                        <div><input type="textfield" id="Van_times"/>
                                                            <span>ครั้ง/เดือน</span>
                                                        </div>
                                                        <button type="button" id="calcVan">Calculate</button>
                                                    </form>
                                                </div>
                                            </div>

                                            <!--Rail Field-->
                                            <div class="Train">
                                                <h3><a href="#">รถไฟ</a></h3>
                                                <div>
                                                    <form>
                                                        <div>ระยะทาง</div>
                                                        <div ><input type="textfield" id="Train_km"/>
                                                            <span>Km</span>
                                                        </div>
                                                        <div>จำนวนการใช้งาน</div>
                                                        <div><input type="textfield" id="Train_times"/>
                                                            <span>ครั้ง/เดือน</span>
                                                        </div>
                                                        <button type="button" id="calcTrain">Calculate</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- Back up
                                                               <div class="Rail">
                                                                    <h3><a href="#">รถไฟฟ้า</a></h3>
                                                                    <div>
                                                                        <form>
                                                                            <div class="inventory">ระยะทาง</div>
                                                                            <div ><input type="textfield" name="watt"/>
                                                                                <span class="inventoryUnit">Km</span>
                                                                            </div>
                                                                            <div class="inventory">fuel efficiency</div>
                                                                            <div><input type="textfield" name="amount"/>
                                                                                <span class="inventoryUnit">Km/Liters</span>
                                                                            </div>
                                                                            <div class="inventory">จำนวนการใช้งาน</div>
                                                                            <div><input type="textfield" name="times"/>
                                                                                <span class="inventoryUnit">ครั้ง/เดือน</span>
                                                                            </div>
                                                                            <button type="button" id="calcRail">Calculate</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                            -->
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <!--End Transportation Tap Menu-->
                            <!--Recycle Tap Menu-->
                            <div id="tabs-recycle">
                                <div id="accordion_recycle">
                                    <style type="text/css">
                                        /*demo page css*/
                                        body{ font: 62.5% "Trebuchet MS", sans-serif; margin: 50px;}
                                        .demoHeaders { margin-top: 2em; }
                                    </style>
                                    <div class="container_10">
                                        <div class="grid_10">

                                            <div class="recycle_quantity">
                                                <h3><a href="#">รีไซเคิล</a></h3>
                                                <div>
                                                    <div><input type="radio" name="quantity" value="buy_alway"id="all"/>
                                                        <span class="inventoryUnit">ทุกอย่างที่รี"วเคิลได้</span><br/>
                                                    </div>
                                                    <div ><input type="radio" name="quantity" value="buy_want"id="some"/>
                                                        <span class="inventoryUnit">ขยะบางอย่าง</span><br/>
                                                    </div>
                                                    <div><input type="radio" name="quantity" value="buy_second_hand"id="not"/>
                                                        <span class="inventoryUnit">ไม่รีไซเคิล</span><br/>
                                                    </div>
                                                    <form method="POST" action="calcTrans.php">
                                                        <button type="button" id="calcTrans">Calculate</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <!--End Recycle Tap Menu-->
                            <!--Other Tap Menu-->
                            <div id="tabs-other">
                                <div id="accordion_other">
                                    <style type="text/css">
                                        /*demo page css*/
                                        body{ font: 62.5% "Trebuchet MS", sans-serif; margin: 50px;}
                                        .demoHeaders { margin-top: 2em; }
                                    </style>
                                    <div class="container_10">
                                        <div class="grid_10">
                                            <div class="other_fashion">
                                                <h3><a href="#">แฟชั่น</a></h3>
                                                <div>
                                                    <form>
                                                        F <div><input type="radio" name="fashion" value="buy_alway"id="buy_alway"/>
                                                            <span class="inventoryUnit">ซื้อใหม่เป็นประจำ</span><br/>
                                                        </div>
                                                        <div ><input type="radio" name="fashion" value="buy_want"id="buy_want"/>
                                                            <span class="inventoryUnit">ซื้อใหม่ต้องการ</span><br/>
                                                        </div>
                                                        <div><input type="radio" name="fashion" value="buy_second_hand"id="buy_second_hand"/>
                                                            <span class="inventoryUnit"> ซื้อของมือสอง</span><br/>
                                                        </div>
                                                        <button type="button" id="calcTrans">Calculate</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="other_packaging">
                                                <h3><a href="#">ปริมาณหีบห่อที่ได้ในการซื้อของ</a></h3>
                                                <div>
                                                    <form>
                                                        <div><input type="radio" name="fashion" value="buy_alway"id="buy_alway"/>
                                                            <span class="inventoryUnit">ซื้อของที่ไม่มีการบรรจุหีบห่อ</span><br/>
                                                        </div>
                                                        <div ><input type="radio" name="fashion" value="buy_want"id="buy_want"/>
                                                            <span class="inventoryUnit">ซื้อของที่หีบห่อมีขนาดเล็กๆ</span><br/>
                                                        </div>
                                                        <div><input type="radio" name="fashion" value="buy_second_hand"id="buy_second_hand"/>
                                                            <span class="inventoryUnit">พยายามซื้อของที่หีบห่อมีขนาดเล็กๆ</span><br/>
                                                        </div>
                                                        <button type="button" id="calcTrans">Calculate</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="other_services">
                                                <h3><a href="#">การเงินและการบริการ</a></h3>
                                                <div>
                                                    <form>
                                                        <div><input type="radio" name="fashion" value="buy_alway"id="buy_alway"/>
                                                            <span class="inventoryUnit">ไม่มีบัญชรธนาคาร</span><br/>
                                                        </div>
                                                        <div ><input type="radio" name="fashion" value="buy_want"id="buy_want"/>
                                                            <span class="inventoryUnit">ใช้บริการเกี่ยวกับการเงินในวงเงินมาตรฐาน</span><br/>
                                                        </div>
                                                        <button type="button" id="calcTrans">Calculate</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <!--End Other Tap Menu-->
                            <!--Result Tap Menu-->
                            <div id="tabs-result">
                                <div class="container_10">
                                    <div class="grid_10">
                                        <div class="top"><canvas id="chart" width="300" height="250"></canvas></div>
                                        <div class="top"><table id="chartData">
                                                <tr>
                                                    <th>Result</th><th>Tons of CO2</th>
                                                </tr>

                                                <tr style="color: #0DA068">
                                                    <td>Energy</td><td><div id="energyGraph">0.00</div></td>
                                                </tr>

                                                <tr style="color: #194E9C">
                                                    <td>Food</td><td><div id="foodGraph">0.00</div></td>
                                                </tr>

                                                <tr style="color: #ED9C13">
                                                    <td>Transportation</td><td><div id="transportGraph">0.00</div></td>
                                                </tr>

                                                <tr style="color: #ED5713">
                                                    <td>Recycle</td><td><div id="recycleGraph">0.00</div></td>
                                                </tr>

                                                <tr style="color: #057249">
                                                    <td>Other</td><td><div id="otherGraph">0.00</div></td>
                                                </tr>
                                            </table>
                                            <!--</div>
                                            <div class="grid_6">-->
                                        </div>
                                        <button type="button" id="collect">Collect Result</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <!--End Result Tap Menu-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--</div>-->
        <script type="text/javascript" src="js/accordionMenu.js"></script>
        <script type="text/javascript" src="js/loadPage.js"></script>
        <script type="text/javascript" src="js/slideMenu.js"></script>
        <script type="text/javascript" src="js/calc.js"></script>
        <!--<script src="js/pieGraph.js"></script>-->
    </body>
</html>