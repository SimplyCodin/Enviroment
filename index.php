<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <title>Save the Enviroment</title>

        <!-- Add to homescreen for Chrome on Android -->
        <meta name="mobile-web-app-capable" content="yes">
        <link rel="icon" sizes="192x192" href="images/android-desktop.png">

        <!-- Add to homescreen for Safari on iOS -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <meta name="apple-mobile-web-app-title" content="Save The Enviroment">
        <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

        <!-- Tile icon for Win8 (144x144 + tile color) -->
        <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
        <meta name="msapplication-TileColor" content="#388E3C">

        <link rel="shortcut icon" href="images/favicon.png">
        <meta name="theme-color" content="#388E3C">
        <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
        <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.green-light_green.min.css">
        <link rel="stylesheet" href="styles.css">
        <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length} ;
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex-1].style.display = "block";
        }
        </script>
        <style>
            #view-source {
                position: fixed;
                display: block;
                right: 0;
                bottom: 0;
                margin-right: 40px;
                margin-bottom: 40px;
                z-index: 900;
            }

        </style>
    </head>
    <body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
            <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
                <div class="mdl-layout--large-screen-only mdl-layout__header-row"></div>
                <div class="mdl-layout--large-screen-only mdl-layout__header-row">
                    <h3>Save the Enviroment by Mr.Graham's Class</h3>
                </div>
                <div class="mdl-layout--large-screen-only mdl-layout__header-row"></div>
                <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
                    <a href="#home" class="mdl-layout__tab is-active">Home</a>
                    <a href="#waste" class="mdl-layout__tab">Recycle or Waste</a>
                    <a href="#energy" class="mdl-layout__tab">Save Energy</a>
                    <a href="#water" class="mdl-layout__tab">Save Water</a>
                    <a href="#contact" class="mdl-layout__tab">Contact Us</a>
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored mdl-shadow--4dp mdl-color--900" id="add">
                        <i class="icons-light material-icons" role="presentation">delete</i>
                        <span class="visuallyhidden">Logo</span>
                    </button>
                </div>
            </header>
            <main class="mdl-layout__content">
                <div class="mdl-layout__tab-panel is-active" id="home">
                    <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                        <div class="mdl-card mdl-cell mdl-cell--12-col">
                            <div class="mdl-card__supporting-text">
                                <h4>Technology</h4>
                                <div><!-- SLideshow start-->
                                <video width="320" height="240" controls preload="auto" class="mySlides">
                                    <source src="TCOT.mp4" type="video/mp4">
                                    Text Version: https://goo.gl/kPSFPo
                                </video>
                                <video width="320" height="240" controls preload="auto" class="mySlides">
                                    <source src="Compost.mp4" type="video/mp4">
                                  Text Version:  https://goo.gl/KkAqj0
                                </video>
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--icon" onClick="plusDivs(-1)">
                                  <i class="material-icons" >keyboard_arrow_left</i>
                                </button>
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--icon" onClick="plusDivs(1)";>
                                  <i class="material-icons">keyboard_arrow_right</i>
                                </button>
                              </div> <!--Slideshow End-->
                            </div>
                            <div class="mdl-card__actions">
                                <a href="#" class="mdl-button">Read our features</a>
                            </div>
                        </div>
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="btn3">
                            <i class="material-icons">more_vert</i>
                        </button>
                        <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="btn3">
                            <li class="mdl-menu__item">Lorem</li>
                            <li class="mdl-menu__item" disabled>Ipsum</li>
                            <li class="mdl-menu__item">Dolor</li>
                        </ul>
                    </section>
                    <section class="section--footer mdl-color--white mdl-grid">
                        <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
                            <div class="section__circle-container__circle mdl-color--primary section__circle--big"></div>
                        </div>
                        <div class="section__text mdl-cell mdl-cell--4-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            Qui sint ut et qui nisi cupidatat. Reprehenderit nostrud proident officia exercitation anim et pariatur ex.
                        </div>
                        <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
                            <div class="section__circle-container__circle mdl-color--primary section__circle--big"></div>
                        </div>
                        <div class="section__text mdl-cell mdl-cell--4-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            Qui sint ut et qui nisi cupidatat. Reprehenderit nostrud proident officia exercitation anim et pariatur ex.
                        </div>
                    </div>
                <div class="mdl-layout__tab-panel" id="waste">
                    <div class="mdl-grid">
                        <section class="section--left">
                            <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                <div class="recycle-card mdl-card mdl-shadow--2dp">
                                    <div class="mdl-card__title">
                                        <h2 class="mdl-card__title-text">
                                            <i class="material-icons">delete_forever</i>
                                            &nbsp Dispose Responsibly
                                        </h2>
                                    </div>
                                    <div class="mdl-card__supporting-text">
                                        Hot Ashes - Wait Until Ashes are cool <br>Electrionics - Discard at an Electronics Recycling Center
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="section--center">
                            <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                <div class="recycle-card mdl-card mdl-shadow--2dp">
                                    <div class="mdl-card__title">
                                        <h2 class="mdl-card__title-text">
                                            <i class="material-icons">delete_sweep</i>
                                            &nbsp Recycle
                                        </h2>
                                    </div>
                                    <div class="mdl-card__supporting-text">
                                        Plastic, Glass, Paper, Cardboard Recycle Plastic Bags at praticiapating retailers.
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="section--right">
                            <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                <div class="recycle-card mdl-card mdl-shadow--2dp">
                                    <div class="mdl-card__title">
                                        <h2 class="mdl-card__title-text">
                                            <i class="material-icons">delete</i>
                                            &nbsp Trash
                                        </h2>
                                    </div>
                                    <div class="mdl-card__supporting-text">
                                        Anything else
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="mdl-layout__tab-panel" id="water">
                    <div class="mdl-grid">
                        <section class="section--left">
                            <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                <div class="recycle-card mdl-card mdl-shadow--2dp">
                                    <div class="mdl-card__title">
                                        <h2 class="mdl-card__title-text">
                                            <i class="material-icons">format_color_reset</i>
                                            &nbsp Leaks and Water Saving in the Bathroom
                                        </h2>
                                    </div>
                                    <div class="mdl-card__supporting-text">
                                        Fix Leaky Faucets. Turn of the water when you're brushing your teeth. Take shorter showers.
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="section--center">
                            <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                <div class="recycle-card mdl-card mdl-shadow--2dp">
                                    <div class="mdl-card__title">
                                        <h2 class="mdl-card__title-text">
                                            <i class="material-icons">local_florist</i>
                                            &nbsp Use Grey Water to water plants
                                        </h2>
                                    </div>
                                    <div class="mdl-card__supporting-text">
                                        Grey water is water that contains traces of dirt, food, grease, or household products. The contaimients in Greywater is fertilizer for plants.
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="section--right">
                            <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                <div class="recycle-card mdl-card mdl-shadow--2dp">
                                    <div class="mdl-card__title">
                                        <h2 class="mdl-card__title-text">
                                            <i class="material-icons">local_drink</i>
                                            &nbsp Use Rainbarrels
                                        </h2>
                                    </div>
                                    <div class="mdl-card__supporting-text">
                                      Use rainbarrels to collect rainwater(greywater) and
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
                <div class="mdl-layout__tab-panel" id="energy">
                    <div class="mdl-grid">
                        <section class="section--left">
                            <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                <div class="recycle-card mdl-card mdl-shadow--2dp">
                                    <div class="mdl-card__title">
                                        <h2 class="mdl-card__title-text">
                                            <i class="material-icons">lightbulb_outline</i>
                                            &nbsp Use LED Lightbulbs
                                        </h2>
                                    </div>
                                    <div class="mdl-card__supporting-text">
                                        LED bulbs are more power efficent and contains no mercury.
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="section--center">
                            <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                <div class="recycle-card mdl-card mdl-shadow--2dp">
                                    <div class="mdl-card__title">
                                        <h2 class="mdl-card__title-text">
                                            <i class="material-icons">delete_sweep</i>
                                            &nbsp Recycle
                                        </h2>
                                    </div>
                                    <div class="mdl-card__supporting-text">
                                        Plastic, Glass, Paper, Cardboard Recycle Plastic Bags at praticiapating retailers.
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="section--right">
                            <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                <div class="recycle-card mdl-card mdl-shadow--2dp">
                                    <div class="mdl-card__title">
                                        <h2 class="mdl-card__title-text">
                                            <i class="material-icons">delete_forever</i>
                                            &nbsp Dispose Responsibly
                                        </h2>
                                    </div>
                                    <div class="mdl-card__supporting-text">
                                        Hot Ashes - Wait Until Ashes are cool Electrionics - Discard at an Electronics Recycling Center
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="mdl-layout__tab-panel" id="contact">
                    <iframe src="https://docs.google.com/a/go.lisd.net/forms/d/e/1FAIpQLSfAEOxG6pXPpvX_If25NjFZ8-i_pdMv9k6g2cywEIevBYv9VA/viewform?embedded=true" width="760" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
                    <!-- 
                      <form method="post" action="index.php">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label is-upgraded" data-upgraded="MaterialTextfield">
                                <input class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="Name" name="name">
                                <label class="mdl-textfield__label" for="Name">Name...</label>
                                <span class="mdl-textfield__error">Letters and spaces only</span>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label is-upgraded" data-upgraded=",MaterialTextfield">
                                <input class="mdl-textfield__input" type="text" id="Email" name="email">
                                <label class="mdl-textfield__label" for="Email">Email...</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label is-upgraded" data-upgraded=",MaterialTextfield">
                                <textarea class="mdl-textfield__input" type="text" rows="5" id="note" name="message"></textarea>
                                <label class="mdl-textfield__label" for="note">Enter note</label>
                            </div>
                            <br>
                                  <button id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit" data-upgraded=",MaterialButton,MaterialRipple" name="submit">
                                      Submit
                                  <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
                        </form>
                        <?php
                          $name = $_POST['name'];
                          $email = $_POST['email'];
                          $message = $_POST['message'];
                          $from = 'From: $email'; 
                          $to = 'adamss5@go.lisd.net'; 
                          $subject = 'Enviroment Site';
                          $body = "From: $name\n E-Mail: $email\n Message:\n $message"
                          if ($_POST['submit']) {
                            if (mail ($to, $subject, $body, $from)) { 
                              echo '<p>Your message has been sent!</p>';
                            } else { 
                              echo '<p>Something went wrong, go back and try again!</p>'; 
                            }
}
                        ?>
                    -->
                </div>
            </main>
        </div>
        <script src="https://code.getmdl.io/1.2.1/material.min.js"></script>
        <script src="carousel.js"></script>
    </body>
</html>
