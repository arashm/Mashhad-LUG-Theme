<!--
index.php

Copyright (c) 2011 Arash Mousavi <mousavi.arash@gmail.com>. 

This file is part of Mashhad LUG Theme.

Mashhad LUG Theme is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Mashhad LUG Theme is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Mashhad LUG Theme. If not, see <http ://www.gnu.org/licenses/>.
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link type="text/css" rel="stylesheet" href="css/style.css" />
        <link type="text/css" href="css/jquery-ui-1.8.16.custom.css" rel="Stylesheet" />
        <script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.8.16.custom.min.js"></script>

        <script>
            $("document").ready(function() {
                makeButtons();
                $('#tabs').tabs();
                $('span[id=icons]').hover(
                function() { $(this).addClass('ui-state-hover'); }, 
                function() { $(this).removeClass('ui-state-hover'); }
            );
            });
            
            function makeButtons() {
                console.log($( "ul[class=mainMenu] a" ).button());
                $( "ul[class=mainMenu] a" ).click(function() { return false; });
            }
        </script>

        <title>Mashhad LUG</title>
    </head>
    <body>

        <div id="container">
            <div id="page" class="curved-bottom">
                <div id="top">
                    <div id="logo" class="float-right">
                        <img src="images/MashhadLUGtop.png" alt=""></img>
                    </div>
                    <div id ="top-menu" class="float-left">
                        <ul class="mainMenu">
                            <li><a href="#">خانه</a></li>
                            <li><a href="#">اساسنامه گروه</a></li>
                            <li><a href="#">درباره</a></li>
                            <li><a href="#">ارتباط با ما</a></li>
                        </ul>
                    </div>
                </div>
                <div id="main">
                    <!-- Silder -->
                    <div id="top-slider-main">
                        <div class="transparent curved-top curved-bottom">
                            <div id='top-slider-content'>
                                <img src="images/skateboarding-wallpaper.jpg" width="920"></img>
                            </div>
                        </div>
                    </div>

                    <blockquote id="quote">
                        <h1>تاریخ اینچنین نشان داده است، برای آزادی‌تان ارزش قائل باشید در غیر اینصورت از دست خواهید دادش.</h1>
                        <div class="owner">
                            <p>ریچارد استالمن</p>
                        </div>
                    </blockquote>

                    <div  id="wrapper" class="curved-bottom">
                        <!-- Sidebar -->
                        <div id="sidebar" class="float-right grids">
                            
                            <!--box1-->
                            
                            <div id="box-wrapper" class="curved-top curved-bottom transparent">
                                <div id="box-title">
                                    <div id="icons" class="ui-icon ui-icon-help ui-state-default ui-corner-all"></div>
                                    <h3 class="box-title">راهنمایی</h3>
                                </div>
                                
                                <div id="box-content">
                                    <span class="content">اگر به‌تازگی با لینوکس و مشهد لاگ آشنا شده‌اید اینجا را مشاهده کنید.</span>
                                </div>
                            </div>
                            <!--box2-->
                            <div id="box-wrapper" class="curved-top curved-bottom transparent">
                                <div id="box-title">
                                    <div id="icons" class="ui-icon ui-icon-comment ui-state-default ui-corner-all"></div>
                                    <h3 class="box-title">پیامک</h3>
                                </div>
                                
                                <div id="box-content">
                                    <span class="content">چناچه مایلید روزهای تشکیل جلسات را از طریق پیامک دریافت کنید، شماره تلفن همراه خود را وارد کنید:</span>
                                </div>
                            </div>
                            <!--box3-->
                            <div id="box-wrapper" class="curved-top curved-bottom transparent">
                                <div id="box-title">
                                    <div id="icons" class="ui-icon ui-icon-mail-closed ui-state-default ui-corner-all"></div>
                                    <h3 class="box-title">عضویت در لیست پستی</h3>
                                </div>
                                
                                <div id="box-content">
                                    <span class="content">ما در لیست‌پستی درباره‌ی مسائل و جلسات لاگ گفتگو میکنیم. چناچه مایلید در این بحث‌ها شرکت داشته باشید، پست‌الکترونیکی خود را وارد کنید:</span>
                                </div>
                            </div>
                            <!--box4-->
                            <div id="box-wrapper" class="curved-top curved-bottom transparent">
                                <div id="box-title">
                                    <div id="icons" class="ui-icon ui-icon-star ui-state-default ui-corner-all"></div>
                                    <h3 class="box-title">پشتیبانی</h3>
                                </div>
                                
                                <div id="box-content">
                                    <span class="content">شما می‌توانید به شکل‌های گوناگون به لاگ کمک کنید تا بتوانیم خدمات خود را بصورت رایگان و مداوم ارائه کنیم. برای اطلاعات بیشتر اینجا را مشاهده کنید.</span>
                                </div>
                            </div>
                            
                        </div>
               
                        
                        <div id="content" class="float-left grids">

                            <div id="tabs">
                                <ul>
                                    <li><a href="#tabs-1">جلسه بعد</a></li>
                                    <li><a href="#tabs-2">گزارش جلسات</a></li>
                                </ul>
                                <div id="tabs-1">
                                    <img src="images/map.jpeg"></img>
                                </div>
                                <div id="tabs-2">
                                    Phasellus mattis tincidunt nibh. Cras orci urna, blandit id, pretium vel, aliquet 
                                    ornare, felis. Maecenas scelerisque sem non nisl. Fusce sed lorem in enim dictum bibendum.
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div id="footer">

            </div>
        </div>

    </body>
</html>