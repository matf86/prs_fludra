<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>
        <link href='http://fonts.googleapis.com/css?family=Mogra&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/css/app.css">
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBp_hnFf3RzxsXdjQ2BaJrX0kIkQgEAzHY" async defer></script>
        <script src='https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit&hl=pl' async defer></script>
    </head>
<body>
<div id="prs">
<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--transparent mbr-navbar--sticky mbr-navbar--auto-collapse" id="main_nav">
    <div class="mbr-navbar__section mbr-section">
        <div class="mbr-section__container container">
            <div class="mbr-navbar__container">
                <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                    <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
                        <span class="mbr-brand__logo"><a href="#"><img class="mbr-navbar__brand-img mbr-brand__img" src="./images/PRS_logo.png" alt="Przetwórstwo Rolno Spożywcze Joanna Fludra"></a></span>
                    </span>
                </div>
                <div class="mbr-navbar__hamburger mbr-hamburger text-white"><span class="mbr-hamburger__line"></span></div>
                <div class="mbr-navbar__column mbr-navbar__menu">
                    <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                        <div class="mbr-navbar__column">
                            <ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active">
                                <li class="mbr-navbar__item"><a class="mbr-buttons__link btn" href="#kapusta">KAPUSTA</a></li>
                                <li class="mbr-navbar__item"><a class="mbr-buttons__link btn" href="#ogorki">OGÓRKI</a></li>
                                <li class="mbr-navbar__item"><a class="mbr-buttons__link btn" href="#surowki">SURÓWKI</a></li>
                                <li class="mbr-navbar__item"><a class="mbr-buttons__link btn" href="#kontakt">KONTAKT</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background mbr-after-navbar" 
         id="main_header" style="background-image: url(images/onas_bg.jpg);">
    <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-left">
        <div class="mbr-overlay" style="opacity: 0.25; background-color: rgb(78, 142, 83);"></div>
        <div class="mbr-box__container mbr-section__container container">
            <div class="mbr-box box--logo">
                <div class="mbr-box__magnet mbr-box__magnet--center-left">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="animated fadeIn">
                                <img src="./images/PRS_logo.png" alt="Przetwórstwo Rolno Spożywcze Joanna Fludra">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-arrow mbr-arrow--floating text-center">
            <div class="mbr-section__container container">
                <a class="mbr-arrow__link" href="#oferta"><i class="glyphicon glyphicon-menu-down"></i></a>
            </div>
        </div>
    </div>
</section>

<section class="content-2 col-3 info" id="oferta">
    <div class="container">
        <div class="row">
            <div>
                <div class="thumbnail">
                    <div class="caption">
                        <div>
                            <h2>KAPUSTA KISZONA</h2>
                            <p>Sed egestas urna quam, sit amet euismod ligula commodo vitae. Cras hendrerit quam est, non dapibus turpis porta in. Fusce viverra, lectus vitae dignissim interdum, erat leo egestas velit, eu tincidunt tellus eros a mauris.&nbsp;</p>
                        </div>
                        <p class="group"><a href="#kapusta" class="btn btn-default">DOWIEDZ SIĘ WIĘCEJ</a></p>
                    </div>
                </div>
            </div>
            <div>
                <div class="thumbnail">
                    <div class="caption">
                        <div>
                            <h2>OGÓRKI KISZONE</h2>
                            <p>Sed egestas urna quam, sit amet euismod ligula commodo vitae. Cras hendrerit quam est, non dapibus turpis porta in. Fusce viverra, lectus vitae dignissim interdum, erat leo egestas velit, eu tincidunt tellus eros a mauris. </p>
                        </div>
                        <p class="group"><a href="#ogorki" class="btn btn-default">DOWIEDZ SIĘ WIĘCEJ</a></p>
                    </div>
                </div>
            </div>
            <div>
                <div class="thumbnail">
                    <div class="caption">
                        <div>
                            <h2>SURÓWKI</h2>
                            <p>Sed egestas urna quam, sit amet euismod ligula commodo vitae. Cras hendrerit quam est, non dapibus turpis porta in. Fusce viverra, lectus vitae dignissim interdum, erat leo egestas velit, eu tincidunt tellus eros a mauris. </p>
                        </div>
                        <p class="group"><a href="#surowki" class="btn btn-default">DOWIEDZ SIĘ WIĘCEJ</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background" id="kapusta" style="background-image: url(/images/s_kraut.jpg);">
<div class="mbr-box__magnet">
        <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(41, 105, 176);"></div>
        <div class="mbr-box__container mbr-section__container container">
        <div class="row box_info">
            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 offer">
                <div class="row"><h1 class="main_header"><span class="header__border">KAPUSTA KISZONA</span></h1></div>
                <div class="row offer_body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores harum repellendus molestias minus facere cum ullam quae, eaque voluptatem, iure in ipsa, nam magni alias veritatis neque quos provident ipsam!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores harum repellendus molestias minus facere cum ullam quae, eaque voluptatem, iure in ipsa, nam magni alias veritatis neque quos provident ipsam!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores harum repellendus molestias minus facere cum ullam quae, eaque voluptatem, iure in ipsa, nam magni alias veritatis neque quos provident ipsam!</p>
                    <div class="row">
                        <div class="col-md-6">
                            <card title="KAPUSTA KISZONA BIAŁA">
                                <div slot="body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem maiores debitis blanditiis ab. Sint repellendus iure, ullam beatae eligendi temporibus, soluta id, autem, excepturi hic maxime provident. Rerum, voluptas, iste.</p>
                                </div>
                            </card>
                        </div>
                         <div class="col-md-6">
                            <card title="KAPUSTA KISZONA SURÓWKOWA">
                                <div slot="body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem maiores debitis blanditiis ab. Sint repellendus iure, ullam beatae eligendi temporibus, soluta id, autem, excepturi hic maxime provident. Rerum, voluptas, iste.</p>
                                </div>
                            </card>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
</section>

<section class="content-2 col-3 info">
    <div class="container">
        <div class="row">
            <div>
                <div class="thumbnail">
                    <div class="caption">
                       <div>
                            <h2>NATURALNE SKŁADNIKI</h2>
                            <p> Do produkcji naszych kiszonek wykorzystujemy warzywa z własnych upraw zlokalizowanych na terenach nieskażonych przez przemysł a w procesie kiszenia nie używamy konserwantów.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="thumbnail">
                    <div class="caption">
                        <div>
                            <h2>TRADYCYJNE RECEPTURY</h2>
                            <p>Ponad 30 lat doświadczenia pozwala nam na przygotowanie wyróżniającego się smakiem produktu, wytworzonego według tradycyjnych receptur.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="thumbnail">
                    <div class="caption">
                        <div>
                            <h2>WYSOKI STANDADARDY.</h2>
                            <p>W produkcji stosujemy System Zapewnienia Bezpieczeństwa Zdrowotnego (HACCP) gwarantujący wysoki standard higieniczny całego procesu kiszenia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background" id="ogorki" style="background-image: url(/images/pickles.jpg);">
<div class="mbr-box__magnet">
        <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(41, 105, 176);"></div>
        <div class="mbr-box__container mbr-section__container container">
        <div class="row box_info">
            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1" style="opacity: 0.9; background-color: rgb(255, 255, 255);">
                <div class="row"><h1 class="main_header"><span class="header__border">OGÓRKI KISZONE</span></h1></div>
                <div class="row offer_body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores harum repellendus molestias minus facere cum ullam quae, eaque voluptatem, iure in ipsa, nam magni alias veritatis neque quos provident ipsam!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores harum repellendus molestias minus facere cum ullam quae, eaque voluptatem, iure in ipsa, nam magni alias veritatis neque quos provident ipsam!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores harum repellendus molestias minus facere cum ullam quae, eaque voluptatem, iure in ipsa, nam magni alias veritatis neque quos provident ipsam!</p>
                    <div class="row">
                        <div class="col-md-6">
                            <card title="OGÓRKI KISZONE">
                                <div slot="body">
                                    <p>Świeże ogórki poddane naturalnej fermentacji w odpowiednim mikroklimacie z dodatkiem przypraw nadającym ogórkom niepowtarzalny klasyczny smak.</p>
                                    <p>Gramatura produktu:</p>
                                    <ul>
                                        <li>ogórki kwaszone woreczki 400 g, 500 g, 3kg</li>
                                        <li>ogórki kwaszone wiadra 500 g, 3 kg, 9 kg</li>
                                        <li>ogórki kwaszone beczki i Big Box 18 kg,40 kg, 80 kg, 350kg</li>
                                    </ul>
                                </div>
                            </card>
                        </div>
                         <div class="col-md-6">
                            <card title="OGÓRKI MAŁOSOLNE">
                                <div slot="body">
                                    <p>Świeże ogórki przyprawione czosnkiem koprem i zalane zalewą o małej ilości soli. Pozwala to na otrzymanie delikatnego smaku ogórków. Podawać można jako dodatek do kanapek oraz dań z grilla.</p>
                                    <p>Gramatura produktu:</p>
                                    <ul>
                                        <li>ogórki małosolne wiadra 500 g, 3 kg</li>
                                    </ul>
                                </div>
                            </card>
                        </div>
                    </div>
                </div>
             </div>
        </div>
        </div>
</div>
</section>

<section class="content-2 col-3 info">
    <div class="container">
        <div class="row">
            <div>
                <div class="thumbnail">
                    <div class="caption">
                        <div>
                            <h2>BOGACTWO WITAMIN</h2>
                            <p>Witaminy – A, E, K, C, oraz witaminy z grupy B, wzmacniają odporność, wspomagają prawidłowe funkcjonowanie układu nerwowego, krwionośnego oraz wzroku. Kiszonki niezwykle korzystnie wpływają na wygląd włosów, skóry i paznokci.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="thumbnail">
                    <div class="caption">
                        <div>
                            <h2>SOLE MINERALNE</h2>
                            <p>Zawarte w kiszonkach sole mineralne m.in: wapń, magnez, potas, fosfor wspomagają koncentrację, pomagają w utrzymaniu równowagi kwasowo-zasadowej w organizmie oraz wpływaja pozytywnie na proces trawienia.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="thumbnail">
                    <div class="caption">
                        <div>
                            <h2>IDEALNY SKŁADNIK DIETY</h2>
                            <p>Kiszonki są lekkostrawne, skutecznie oczyszczają organizm z toksyn i metali ciężkich. Zawierają duże ilości błonnika, który powoduje uczucie sytości. 100G kapusty kiszonej zawiera zaledwie 16kcal.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background" id="surowki" style="background-image: url(/images/warzywa.jpeg);">
<div class="mbr-box__magnet">
        <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(41, 105, 176);"></div>
        <div class="mbr-box__container mbr-section__container container">
            <div class="row box_info">
            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1" style="opacity: 0.9; background-color: rgb(255, 255, 255);">
                <div class="row"><h1 class="main_header"><span class="header__border">SURÓWKI</span></h1></div>
                <div class="row offer_body">
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores harum repellendus molestias minus facere cum ullam quae, eaque voluptatem, iure in ipsa, nam magni alias veritatis neque quos provident ipsam!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores harum repellendus molestias minus facere cum ullam quae, eaque voluptatem, iure in ipsa, nam magni alias veritatis neque quos provident ipsam!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores harum repellendus molestias minus facere cum ullam quae, eaque voluptatem, iure in ipsa, nam magni alias veritatis neque quos provident ipsam!</p>
                       <div class="col-md-4">
                           <mini-card title="SURÓWKA WIOSENNA">
                                <div slot="body">
                                    <p>Skład: kapusta, ogórek,marchew, pora, majonez.</p>
                                </div>
                            </mini-card>
                       </div>
                       <div class="col-md-4">
                           <mini-card title="SURÓWKA FAMILIJNA">
                                <div slot="body">
                                    <p>Skład: kapusta, ogórek,marchew, pora, majonez.</p>
                                </div>
                           </mini-card>
                       </div>
                       <div class="col-md-4">
                           <mini-card title="SURÓWKA MEKSYKAŃSKA">
                                <div slot="body">
                                    <p>Skład: kapusta, ogórek,marchew, pora, majonez.</p>
                                </div>
                           </mini-card>
                       </div>       
                </div>
            </div>
            </div>
        </div>
        </div>
</section>

<section class="mbr-section--right-padding mbr-section--relative mbr-section--fixed-size" id="kontakt">
    <div class="mbr-section__container mbr-section__container--std-padding container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-8 map__container">
                <google-map address="Śródka 7 Kleszczewo" :zoomlevel="10"></google-map>
            </div>
            <div class="col-sm-12 col-lg-4 contact-form__container">
                <contact-form ref="form"></contact-form>
            </div>
        </div>
    </div>
</section>

<footer class="mbr-section mbr-section--relative mbr-section--fixed-size" id="footer" style="background-color: rgb(68, 68, 68);">
    <div class="mbr-section__container container">
        <div class="row">
            <div class="col-sm-4">
                <span class="mbr-brand__logo"><a href="#"><img class="mbr-navbar__brand-img mbr-brand__img" src="./images/PRS_logo.png" alt="Przetwórstwo Rolno Spożywcze Joanna Fludra"></a></span>
            </div>
            <div class="col-sm-4">
               <h4>Adres:</h4>
               <p>Przetwórstwo Rolno Spożywcze Joanna Fludra</p>
               <p>Śródka 7</p>
               <p>63-005 Kleszczewo</p>
            </div>
            <div class="col-sm-4">
               <h4>Kontakt:</h4>
               <p><span class="glyphicon glyphicon glyphicon-envelope" aria-hidden="true"></span> prs.fludra@interia.pl</p>
               <p><span class="glyphicon glyphicon glyphicon-phone-alt" aria-hidden="true"></span> 61 8-176-052</p>
               <p><span class="glyphicon glyphicon glyphicon-phone" aria-hidden="true"></span> 777-777-777</p>
            </div>
        </div>
    </div>
</footer>    
</div> 

<script src="/js/app.js"></script>  
<script type="text/javascript">
      var onloadCallback = function() {
        window.app.$refs.form.loadCaptcha();
      };
    </script>
    </body>
</html>

