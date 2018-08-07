<?php
include 'header.php' ?>

<body>
<a href="#" class="scrollup">Scroll</a>
<heder>


    <!--    Scroll and sticky script-->
    <script src="js/myScrollScript.js" type="text/javascript"></script>


    <!--    navbarMenu-->
    <div>

        <div id="menu" class="static maxonly">

            <nav class="navbar  navbar-transparent" role="navigation">
                <div class="container" style="text-align: right;">
                    <div class="row">
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav ">
                                <li><a href="#zaproszenie">SEKCJA 1</a></li>
                                <li><a href="#oferta">SEKCJA 2</a></li>
                                <li><a href="#program"> SEKCJA 3</a></li>
                                <li><a href="#lokalizacja"> SEKCJA 4</a></li>
                                <li><a href="#kontakt"> SEKCJA 5</a></li>

                            </ul>
                        </div>

                    </div>

            </nav>
            <!--            <img style="position: absolute;top:2.5px;right:100px;width:47.5px;" src="/images/nerka_Logo.png" alt=""/>-->
            <a href="/"> <img style="position: absolute;top:-3px;right:20px;width: 80px;" src="images/logo.jpg"
                              alt="logo.png"/></a>
        </div>
    </div>

    <div class="top-content  container clearfix">
        <div class="main-menu-content" style="display: none">
            <ul id="main-menu">
                <li><a href="#zaproszenie">SEKCJA 1</a></li>
                <li><a href="#oferta">SEKCJA 2</a></li>
                <li><a href="#program"> SEKCJA 3</a></li>
                <li><a href="#lokalizacja"> SEKCJA 4</a></li>
                <li><a href="#kontakt"> SEKCJA 5</a></li>

            </ul>
        </div>

        <div class="col-xs-6 col-md-6 col-sm-4">
            <img class="imgmobile mobileonly" src="images/logo.jpg">
        </div>
        <div class="col-xs-6 col-md-6 col-sm-6">
            <div class="mobileonly fixedmobile" id="attach-menu-mobile">

            </div>
        </div>

        <script>
            $(document).ready(function () {
                // menu mobilne
                $('#main-menu').slicknav({
                    prependTo: '#attach-menu-mobile',
                    label: ''
                });
            });
        </script>
        <div class="search maxonly">

        </div>

    </div>

    <!--        MAIN BANER-->
    <?php include 'MainBaner.php' ?>

</heder>
<div id="zaproszenie"></div>
<section style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h1 class="hone">Lorem ipsum </h1>

                <div class="borderblu"></div>

                <p>Lorem ipsum dolor sit amet, pro omnesque sapientem ne. Mel ex placerat appellantur, magna mentitum
                    mnesarchum ea est. Erat habemus efficiendi nec et, et odio argumentum his, posidonium deterruisset
                    vel in. Pro hinc signiferumque cu, cu novum viderer integre his, duis regione oblique ut mea.

                    Cum in hinc scaevola ocurreret, id magna erant vituperata sea. Nibh idque quaerendum ei duo. Labitur
                    tibique vix ut, ne nonumy molestie usu. Per id congue aperiri, nostrum volutpat cu est.

                    Porro mentitum probatus ei his, no sapientem explicari disputando eum. Ex amet veri errem mei. Ne
                    possit admodum moderatius eam. Inimicus mediocritatem vix et.

                    Invenire eleifend deterruisset pro ne, an eligendi appellantur mea, diceret reprehendunt in mei. Nec
                    docendi fuisset ut. An eius semper habemus eum. Nec mutat tacimates ad, ne per evertitur constituto,
                    omittantur ullamcorper usu ne. Ignota malorum vivendo ad mel, enim volumus phaedrum ex sit. Ea
                    affert sadipscing eam, ex pro eligendi disputando liberavisse.

                    Vel ne nullam inermis gubergren, ea pri tation dictas sensibus. Iisque pertinacia mei ne, ei duo
                    iudicabit mnesarchum theophrastus, pertinacia mnesarchum scribentur duo et. Ea quo solet definiebas,
                    ei etiam aeterno sit, id nec mutat recteque. Etiam omnium periculis eum ut, ad debet tantas alterum
                    quo. Usu clita ceteros gloriatur et. </p>

            </div>
        </div>
    </div>
</section>

<div id="oferta"></div>
<section style="margin-top: 70px;">

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

                <h1 class="hone">OFERTA </h1>

                <div class="borderblu"></div>

                <!--                <p class="htable text-center"> <span class = "color-text">MIEJSCE OBRAD:</span> <strong style = "font-size: 20px;"> <a style ="color:#47494c" target="blank" href="http://www.hotel-zubrowka.pl/"> Hotel „Żubrówka”</a>, ul. Olgi Grabiec 6, 17-230 Białowieża</strong></p>-->


                <p class="htable text-center marTop50"><span class="color-text">TABELA OPŁAT</span></p>


                <table class="table " cellspacing="4">
                    <thead>
                    <tr>
                        <th class="column-title">OPŁATY ZA UCZESTNICTWO (brutto)</th>
                        <th class="column-title">do 10.03.2018</th>
                        <th class="column-title">od 11.03.2018 do 10.04.2018</th>
                        <th class="column-title">od 11.04.2018</th>
                    </tr>

                    </thead>
                    <tbody style="border-spacing: 9px;">


                    </tbody>
                </table>


                <p class="htable marTop50"><strong>PEŁNY PAKIET KONFERENCYJNY ZAWIERA:</strong></p>
                <p class="htable marTop20"><i class="fa fa-check" aria-hidden="true"></i> udział w warsztatach </p>


                <p style=" margin-top: 20px; line-height: 1.5;" class="htable text-center"> 
                    
                    <span class="color-text">
                        WPŁAT NALEŻY DOKONYWAĆ NA KONTO <br>
                    </span>

                    <b>12 1234 1234 1234 1234 1234
                    </b>
                </p>


                <p class="marTop30_justify">

                    W tytule przelewu należy podać imię i nazwisko

                </p>

                <p class="htable marTop50"><span class="color-text">ZAKWATEROWANIE</span></p>

                <p class="marTop30_justify">
                    Uczestnicy Sympozjum mogą dokonać rezerwacji miejsc hotelowych przez stronę internetową Wydarzenia.
                    W najbliższym sąsiedztwie miejsca obrad znajdują się następujące hotele:
                </p>

                <table class="table " cellspacing="3">
                    <thead>
                    <tr>
                        <th class="column-title"> Mercure Sepia (4*, ul. Marszałka Focha 20)</th>
                        <th colspan="2" style="text-align: center;">CENA ZA 1 DOBĘ</th>
                    </tr>
                    </thead>

                    <tbody style="border-spacing: 9px;">
                    <tr>
                        <td style="text-align: left ; background-color: #eff0f0;  border-right: 9px solid #ffffff;">
                            <p>Cena brutto za pokój 1-osobowy ze śniadaniem</p>
                        </td>
                        <td colspan="2"
                            style="text-align: center; background-color: #eff0f0; border-right:9px solid #ffffff;">
                            <p>340,00 zł</p>
                        </td>
                    </tr>


                    <tr>
                        <td style="text-align: left ; background-color: #eff0f0;  border-right: 9px solid #ffffff;">
                            <p>Cena brutto za pokój 2-osobowy ze śniadaniami</p>
                        </td>
                        <td colspan="2"
                            style="text-align: center; background-color: #eff0f0; border-right:9px solid #ffffff;">
                            <p>390,00 zł</p>
                        </td>
                    </tr>

                    </tbody>
                </table>

                <table class="table " cellspacing="3">
                    <thead>
                    <tr>
                        <th class="column-title"> Holiday Inn (4*, ul. Grodzka 36)</th>
                        <th colspan="2" style="text-align: center;">CENA ZA 1 DOBĘ</th>
                    </tr>
                    </thead>

                    <tbody style="border-spacing: 9px;">
                    <tr>
                        <td style="text-align: left ; background-color: #eff0f0;  border-right: 9px solid #ffffff;">
                            <p>Cena brutto za pokój 1-osobowy ze śniadaniem</p>
                        </td>
                        <td colspan="2"
                            style="text-align: center; background-color: #eff0f0; border-right:9px solid #ffffff;">
                            <p>290,00 zł</p>
                        </td>
                    </tr>


                    <tr>
                        <td style="text-align: left ; background-color: #eff0f0;  border-right: 9px solid #ffffff;">
                            <p>Cena brutto za pokój 2-osobowy ze śniadaniami</p>
                        </td>
                        <td colspan="2"
                            style="text-align: center; background-color: #eff0f0; border-right:9px solid #ffffff;">
                            <p>350,00 zł</p>
                        </td>
                    </tr>

                    </tbody>
                </table>
                <p class="marTop30_justify">
                    <b>Liczba pokoi jest ograniczona! Decyduje kolejność zgłoszeń.</b>
                </p>

                <p class="htable marTop50"><span class="color-text">MIEJSCE OBRAD</span></p>


            </div>
        </div>
    </div>
</section>

<div id="program" style="margin-top: 135px;"></div>
<section>

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

                <h1 class="hone">PROGRAM</h1>

                <div class="borderblu"></div>


                <div style="margin-top: 30px;" class="text-center">

                    <p class="htable"><strong>WSTĘPNY PROGRAM NAUKOWY</strong></p>

                    <!--                    <a href="Program_OPZiSUW.pdf" style="font-size: 26px;" class="htable" target="_blank">
                                            <strong>SZCZEGÓŁOWY PROGRAM NAUKOWY SYMPOZJUM</strong>
                                        </a> -->

                    <div style="margin-top: 30px;"></div>

                    <div class="table-responsive">
                        <table style="width:100% ; margin: 0 auto;" class="table">
                            <tr>
                                <td colspan="2" style="text-align: left; background-color: #137626">
                                    <p style="color: #ffffff"><b>Piątek, 13 kwietnia 2018</b></p>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: left; background-color: #137626">
                                    <p style="color: #ffffff"><b>12:00 - 13:00</b></p>
                                </td>
                                <td style="text-align: left; background-color: #137626">
                                    <p style="color: #ffffff"><b>REJESTRACJA UCZESTNIKÓW</b></p>
                                </td>
                            </tr>

                            <tr>
                                <td style="width:155px;" rowspan="3">
                                    <p class="font_bold">13.00 – 15.30</p>
                                </td>
                                <td>
                                    <p class="font_bold">SESJA !</p><br>
                                    <p class="ptable">
                                        <b>Prowadzenie: dr med. Jan Nowak
                                           </b>
                                    </p>

                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <p class="ptable">
                                       Przyczy i skutki
                                    </p>
                                </td>

                            </tr>

                        </table>


                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<!--Map Section-->
<?php include 'mapSection.php' ?>

<section class="baner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <div class="napisdown">
                        <h1>dodatkowa sekcja
                        </h1>


                    </div>

                    <div class="downcallender">
                        <!--                        <div class="calendertwo"></div>-->
                        <h2 class="htoptwo">
                            <span class="glyphicon glyphicon-calendar"></span>&nbsp; &nbsp; WARSZAWA&nbsp; &nbsp; 13-14
                            KWIETNIA
                        </h2>
                    </div>

                    <!--                    <div style="padding-top:100px" class="text-center">
                                            <a href="rejestracja.php#rejestracja" class="buttondown">ZAPISZ SIĘ</a>
                                        </div>-->
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <div style="padding-top:50px" class="text-center">
                                <div class="buttondown">
                                    <a href="rejestracja.php#rejestracja">
                                        <div class="buttondown-text">ZAPISZ SIĘ</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>

    <div style="padding-bottom: 55px"></div>
</section>

<!--FOOTER-->
<?php include 'footer.php' ?>

</body>
</html>