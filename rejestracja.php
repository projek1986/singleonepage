<!--    Header-->
    <?php include 'header.php' ?>
<body>
    <a href="#" class="scrollup">Scroll</a>
<heder>

<!--    Scroll and sticky script-->
    <script src="js/myScrollScript.js" type="text/javascript"></script>
    
<!--    navbarMenu-->
   <?php include 'navbarMenu.php' ?>

<!--        MAIN BANER-->
   <?php include 'MainBaner.php'?>


</heder>

<div id="rejestracja"></div>
<section style="margin-top: 135px;">

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h1 class="hone">FORMULARZ REJESTRACJI I ZAKWATEROWANIA</h1>

                <div class="borderblu"></div>

            </div>



            <div class="row" style="display: none;">

                <div class="col-md-12">

                    <br>  <h1 style="color: #000000!important; font-size: 24px;"><strong>Szanowni Państwo!</strong></h1>
                    <br>  <p>Uprzejmie informuję, że rejestracja na 
                       XXVI Sympozjum Sekcji Endourologii i ESWL PTU została zamknięta.                      
                    </p>
                    <br>
                    <p>Osoby zainteresowane udziałem w wydarzeniu proszone są o bezpośredni kontakt z Biurem Kongresowym PTU pod adresem email: <a href="mailto:kongresptu@ptu.net.pl" >kongresptu@ptu.net.pl </a><br>
                       
                    </p><br>
                    <br>  <p>Z wyrazami szacunku</br>
                        Iwona Sribniak
						<br>Dyrektor Biura PTU</p><br></br></br>



                </div>


            </div>

            <?php if (isset($_GET) && isset($_GET['blad'])) { ?>
                <div class="row">
                    <div style="margin-top: 55px; margin-bottom: 55px" class="col-md-12">


                        <div class="alert alert-danger" role="alert">Nie wszystkie wymagane pola zostały uzupełnione
                        </div>


                    </div>
                </div>
            <?php } ?>


            <?php if (isset($_GET) && isset($_GET['bladsau'])) { ?>
                <div class="row">
                    <div style="margin-top: 55px; margin-bottom: 55px" class="col-md-12">


                        <div class="alert alert-danger" id ="alertsau" role="alert">Nie można być członkiem SAU, nie będąc członkiem PTU
                        </div>


                    </div>
                </div>
            <?php } ?>

            <?php if (isset($_GET) && isset($_GET['bladpokoje'])) { ?>
                <div class="row">
                    <div style="margin-top: 55px; margin-bottom: 55px" class="col-md-12">


                        <div class="alert alert-danger" role="alert">Proszę o wybranie pokoju
                        </div>


                    </div>
                </div>
            <?php } ?>
            <?php if (isset($_GET) && isset($_GET['bladzakwaterowanie'])) { ?>
                <div class="row">
                    <div style="margin-top: 55px; margin-bottom: 55px" class="col-md-12">


                        <div class="alert alert-danger" role="alert">Proszę o wybranie daty zakwaterowania
                        </div>


                    </div>
                </div>
            <?php } ?>
            <div class="row" style="">
                <div style="margin-top: 55px; margin-bottom: 55px" class="col-md-12">




                    <form action="succes.php" method="post" id="form-regi">
                        
                        <div class="panel panel-default">
                             <div class="panel-heading">Zgody</div>
                              <div class="panel-body">
                                    <div class="form-check">                                
                                        <input type="checkbox" class="form-check-input" id = "agree" name = "agree" value ="zgoda zaakceptowana" required>
                                        <label for ="agree" style = "display: inline;">&nbsp;&nbsp;<b>OŚWIADCZENIE:</b> Wyrażam zgodę na umieszczenie moich danych osobowych w bazie PTU oraz na przetwarzanie ich dla potrzeb rejestracji w 26. Sympozjum Sekcji Endourologii i ESWL PTU (zgodnie z Ustawą z dnia 29.08.1997 r. o ochronie danych osobowych, Dz.U. z 2002r., Nr 101, poz. 926 ze zm). </label>                      
                                    </div>
                 
                                    <div class="confirm_agree text-center" id ="error_agree" style = "display: none;">Przed przystąpieniem do rejestracji musisz zaakceptować powyższą zgodę!</div>
                              </div>
                         </div>


                        <div class="form-group">
                            <label for="inputImie" class="col-sm-3 control-label">Imię</label>

                            <div class="col-sm-9">
                                <input type="text" name="imie" class="form-control" onchange="setlogin('inputImie')"
                                       id="inputImie" placeholder="Imię" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputNazwisko" class="col-sm-3 control-label">Nazwisko</label>

                            <div class="col-sm-9">
                                <input type="text" name="Nazwisko" class="form-control"
                                       onchange="setlogin('inputNazwisko')" id="inputNazwisko" placeholder="Nazwisko"
                                       required>
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="Email" class="col-sm-3 control-label">Adres email</label>

                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="email" onchange="setlogin('Email')"
                                       id="Email" placeholder="Email" required>
                            </div>

                        </div>


                        <div class="clear"></div>

                        <h4 class="htwoone" style=" margin-top: 15px; margin-bottom: 15px; ">
                            MIEJSCE PRACY</h4>


                        <div class="form-group">
                            <label for="nazwains" class="col-sm-3 control-label">Nazwa Instytucji</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="NazwaInstytucji"
                                       onchange="setlogin('nazwains')" id="nazwains" placeholder="Nazwa Instytucji"
                                       required>
                            </div>
                        </div>

<!--                        <div class="form-group" style = "">
                            <label for="nazwaodzialu" class="col-sm-3 control-label">Nazwa Oddziału</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="NazwaOddzialu"
                                       onchange="setlogin('nazwaodzialu')" id="nazwaodzialu"
                                       placeholder="Nazwa Oddziału" required>
                            </div>
                        </div>-->

                        <div class="form-group">
                            <label for="iulicanrd" class="col-sm-3 control-label">Ulica i nr domu</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="Ulicadomu" id="iulicanrd"
                                       onchange="setlogin('iulicanrd')" placeholder="Ulica i nr domu" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="ikodpocz" class="col-sm-3 control-label">Kod pocztowy</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="Kodpocztowy"
                                       onchange="setlogin('ikodpocz')" id="ikodpocz" placeholder="Kod pocztowy"
                                       required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="imiasto" class="col-sm-3 control-label">Miasto</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="Miasto" onchange="setlogin('imiasto')"
                                       id="imiasto" placeholder="Miasto" required>
                            </div>
                        </div>

                        <div style="margin-bottom: 25px;"></div>
                        <div class="clear"></div>
                        
                        <div class="form-group">
                            <h4 class="htwoone" style=" margin-top: 15px; margin-bottom: 15px; font-size: 25px; ">
                                Przynależność do PTU</h4>

                            <label class="radio-inline">
                                <input type="radio" name="ptu" id="ptu" value="1" required> Tak
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="ptu" id="ptu1" value="2"> Nie
                            </label>
                        </div>
                        
                        <div style="margin-bottom: 25px;"></div>
                        <div class="clear"></div>
                        
                        <div class="form-group">
                            <h4 class="htwoone" style=" margin-top: 15px; margin-bottom: 15px; font-size: 25px; ">
                                Przynależność do SAU</h4>

                            <label class="radio-inline">
                                <input type="radio" name="sau" id="sau" value="1" required> Tak
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="sau" id="sau1" value="2"> Nie
                            </label>
                            <div class="confirm_agree" id = "alertsau" style = "display: none;">Nie można być członkiem SAU, nie będąc członkiem PTU</div>
                        </div>
                        
                        <div style="margin-bottom: 25px;"></div>
                        <div class="clear"></div>
                        
                        <div class="form-group">
                            <h4 class="htwoone" style=" margin-top: 15px; margin-bottom: 15px; font-size: 25px; ">
                                Wezmę udział w uroczystym otwarciu Sympozjum</h4>

                            <label class="radio-inline">
                                <input type="radio" name="ceremony" id="ceremony" value="1" required> Tak
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="ceremony" id="ceremony1" value="2"> Nie
                            </label>
                        </div>
                        
                        <div style="margin-bottom: 25px;"></div>
                        <div class="clear"></div>
                        
                        <div class="form-group">
                            <h4 class="htwoone" style=" margin-top: 15px; margin-bottom: 15px; font-size: 25px; ">
                               Zgłaszam udział osoby towarzyszącej w uroczystym otwarciu Sympozjum</h4>

                            <label class="radio-inline">
                                <input type="radio" name="ostow" id="ostow" value="1" required> Tak
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="ostow" id="ostow1" value="2"> Nie
                            </label>
                            
                        <div style="margin-bottom: 25px;"></div>
                        <div class="clear"></div>
                        
                        <!-- osTow-->
                        <div id="osTow" style="display:none">
                            <div class="form-group">
                                <label for="inputOsTow" class="col-sm-3 control-label">Imię i nazwisko</label>

                                <div class="col-sm-9">
                                    <input type="text" name="inputosTow" class="form-control" 
                                           id="inputosTow" placeholder="Imię i nazwisko osoby towarzyszącej">
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div style="margin-bottom: 25px;"></div>
                        <div class="clear"></div>
                        
                        <div class="form-group">
                            <h4 class="htwoone" style=" margin-top: 15px; margin-bottom: 15px; font-size: 25px;">
                                Zamawiam zakwaterowanie
                            </h4>
                            
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" name = "date_12_13" id="date_12_13" value="Tak">
                              <label class="form-check-label label_check" for="date_12_13">12 / 13 kwietnia 2018</label>
                            </div>
                            
                            <div class="form-check">                                
                                <input type="checkbox" class="form-check-input" name = "date_13_14" id="date_13_14" value="Tak">
                                <label class="form-check-label label_check" for="date_13_14">13 / 14 kwietnia 2018</label>                           
                            </div>
                            
                            <div id="hotels" style = "display:none;">
                                
                            <!--Hotel Mercure Sepia (4*)-->
                                <p style="font-size: 15px !important; font-weight: bold; margin-top: 20px;" class="help-block">Hotel Mercure Sepia (4*)</p>                 
                                <label class="radio-inline" for="hotel1">                                
                                    <input type="radio" name="hotel_room" id="hotel1" value="sepia1os"> Koszt pok. 1-osobowego: 340 zł brutto                              
                                </label>

                                <label class="radio-inline">
                                    <input type="radio" name="hotel_room" id="hotel2" value="sepia2os">Koszt pok. 2-osobowego: 390 zł brutto
                                </label>


                            <!--Hotel Holiday Inn (4*)-->
                                <p style="font-size: 15px !important; font-weight: bold; margin-top: 20px;" class="help-block">Hotel Holiday Inn (4*)</p>                 
                                <label class="radio-inline">                                
                                    <input type="radio" name="hotel_room" id="hotel3" value="inn1os">Koszt pok. 1-osobowego: 290 zł brutto                            
                                </label>

                                <label class="radio-inline">
                                    <input type="radio" name="hotel_room" id="hotel4" value="inn2os">Koszt pok. 2-osobowego: 350 zł brutto
                                </label>
                            </div>
                            
                        </div>

                        </div>
                        
<!--                         wspollokator
                        <div id="lokator" style="display:none">
                            <div class="form-group">
                                <label for="inputwspollokator" class="col-sm-3 control-label">Proszę o wskazanie 
                                    imienia i&nbsp;nazwiska współlokatora</label>

                                <div class="col-sm-9">
                                    <input type="text" name="inputwspollokator" class="form-control" 
                                           id="inputwspollokator" placeholder="Imię i nazwisko współlokatora">
                                    
                                </div>
                            </div>
                        </div>-->
                        

<!--                        <p style="font-size: 13px !important;" class="help-block">Hotel Ilonn </p>

                        <p style="font-size: 13px !important;" class="help-block">
                            Koszt pok. 1-osobowego: 160 zł brutto</p>

                        <p style="font-size: 13px !important;" class="help-block">
                            Koszt miejsca w pok. 2-osobowym: 100 zł brutto</p>-->

                        <div style="margin-bottom: 25px;"></div>
                        <div class="clear"></div>
                        <h4 class="htwoone" style=" margin-top: 15px; margin-bottom: 15px; font-size: 25px;">PROSZĘ O
                            WYSTAWIENIE FAKTURY </h4>

                        <label class="radio-inline">
                            <input type="radio" name="fakturaoptions" id="fakturaoptions" value="1" required> Tak
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="fakturaoptions" id="fakturaoptions" value="2"> Nie
                        </label>


                        <div id="faktura" style="display: none">

                            <h4 class="htwoone" style=" margin-top: 15px; margin-bottom: 15px;">Dane do
                                Fakturowania</h4>

                            <div class="form-group">
                                <label for="platnik" class="col-sm-3 control-label">Pełna nazwa płatnika</label>

                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="platnik"
                                           onchange="setlogin('platnik')"
                                           id="platnik" placeholder="Pełna nazwa płatnika">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="platnikulica" class="col-sm-3 control-label">Ulica</label>

                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="platnikulica"
                                           onchange="setlogin('platnikulica')" id="platnikulica" placeholder="Ulica"
                                           >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="platnikulicanrm" class="col-sm-3 control-label">Nr domu / lokalu </label>

                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="platnikulicanrm"
                                           onchange="setlogin('platnikulicanrm')" id="platnikulicanrm"
                                           placeholder="nr domu / lokalu">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="platnikulicakod" class="col-sm-3 control-label">Kod pocztowy i
                                    miasto</label>

                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="platnikulicakod"
                                           onchange="setlogin('platnikulicakod')" id="platnikulicakod"
                                           placeholder="Kod pocztowy i miasto">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="platniknip" class="col-sm-3 control-label">NIP</label>

                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="platniknip"
                                           onchange="setlogin('platniknip')" id="platniknip" placeholder="NIP">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="platnikoskontakt" class="col-sm-3 control-label">Imię i Nazwisko Osoby
                                    Kontaktowej </label>

                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="platnikoskontakt"
                                           onchange="setlogin('platnikoskontakt')" id="platnikoskontakt"
                                           placeholder="Imię i Nazwisko Osoby Kontaktowej">
                                </div>
                                <p style="font-size: 13px !important;" class="help-block">(w przypadku zgłoszenia
                                    dokonanego
                                    przez Firmę).</p>
                            </div>

<!--                            <div class="form-group">
                                <label for="platnikteloskontakt" class="col-sm-3 control-label">
                                    Telefon, adres email Osoby
                                    Kontaktowej 
                                </label>

                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="platnikteloskontakt"
                                           id="platnikteloskontakt"
                                           placeholder="Telefon, adres email Osoby Kontaktowej">
                                </div>
                                <p style="font-size: 13px !important;" class="help-block">(w przypadku zgłoszenia
                                    dokonanego
                                    przez Firmę).</p>
                            </div>-->

                        </div>

                        <br>
                        <h4 class="htwoone" style=" margin-top: 15px; margin-bottom: 15px;">UWAGI</h4>

                        <div class="form-group">
                          
                            <div class="col-sm-12">
                                <textarea name="uwagi" id="uwagi" rows="3" class="form-control"
                                          placeholder="Uwagi"> </textarea>
                            </div>
                        </div>
                        <br>
                        <br>

                        <div style="padding-top: 25px"></div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" id="wysylanie" style="float: right; margin-top: 55px;"
                                        onclick="sendclick()"
                                        class="btn btn-success">Rejestruj
                                </button>
                            </div>
                        </div>

                    </form>

                    <script type="text/javascript">

                        function setlogin(id) {

                            var loginr = $('#' + id);


                            if (loginr.val == '') {
                                loginr.css("border", "red solid 1px");
                                return true;

                            } else {
                                loginr.css("border", "black solid 1px");
                                return false;
                            }

                        }

                        function sendclick() {

//
//                            if (!setlogin('inputImie')) {
//                                document.getElementById("form-regi").submit();
//                            } else {
//                                setlogin('inputImie');
//                                setlogin('inputNazwisko');
//                                setlogin('Email');
//                                setlogin('Telnumer');
//                                setlogin('nazwains');
//                                setlogin('nazwaodzialu');
//                                setlogin('iulicanrd');
//                                setlogin('ikodpocz');
//                                setlogin('imiasto');
//
//
////
////                                if($('input:radio[name="fakturaoptions"]').is(":checked")) {
////                                    if($(this).val() == '1'){
////                                        setlogin('platnik');
////                                        setlogin('platnikulica');
////                                        setlogin('platnikulicanrm');
////                                        setlogin('platnikulicakod');
////                                        setlogin('platniknip');
////
////
////                                    }
////                                }
//
//                            }
                        }


                        $(document).ready(function () {

//                            $('input:radio[name="sau"]').change(function () {
//
//
//                                if ($('#ptu1').is(':checked') && $(this).val() == '1') {
//
//                                    $('#alertsau').show();
//
//                                } else {
//
//                                    $('#alertsau').hide();
//
//                                }
//
//
//                            });
//                            
//                            $('input:radio[name="ptu"]').change(function () {
//
//
//                                if ($('#ptu1').is(':checked') && $(this).val() == '1') {
//
//                                    $('#alertsau').show();
//
//
//                                } else {
//
//                                    $('#alertsau').hide();
//
//
//                                }
//
//
//                            });



                            $('input:radio[name="fakturaoptions"]').change(function () {
                                if ($(this).val() == '1') {
                                    $('#faktura').show();
                                    $("#platnik").attr("required", "required");
                                    $("#platnikulica").attr("required", "required");
                                    $("#platnikulicanrm").attr("required", "required");
                                    $("#platnikulicakod").attr("required", "required");
                                    $("#platniknip").attr("required", "required");


                                } else {

                                    $('#faktura').hide();
                                    $("#platnik").removeAttr('required');
                                    $("#platnikulica").removeAttr('required');
                                    $("#platnikulicanrm").removeAttr('required');
                                    $("#platnikulicakod").removeAttr('required');
                                    $("#platniknip").removeAttr('required');


                                }


                            });


                            $('#wysylanie').click(function () {

                                if ($('#pokoje1').is(':checked') || $('#pokoje').is(':checked')) {



                                    if ($('#zakraterowanie1').is(':checked') == false && $('#zakraterowanie2').is(':checked') == false) {

                                        $('#zakraterowanie1').attr("required", "required");
                                        $('#zakraterowanie2').attr("required", "required");

                                    } else {

                                        $('#zakraterowanie1').removeAttr('required');
                                        $('#zakraterowanie2').removeAttr('required');

                                    }

                                }

                            });



                            $('#zakraterowanie1').change(function () {




                                if ($('#zakraterowanie1').is(':checked') && $('#zakraterowanie2').is(':checked') == false) {


                                    $(this).removeAttr('required');
                                    $('#zakraterowanie2').removeAttr('required');
                                    $("#pokoje1").attr("required", "required");




                                }
                                if ($('#zakraterowanie1').is(':checked') && $('#zakraterowanie2').is(':checked')) {



                                    $(this).removeAttr('required');
                                    $('#zakraterowanie2').removeAttr('required');
                                    $("#pokoje1").attr("required", "required");


                                }

                                if ($('#zakraterowanie1').is(':checked') == false && $('#zakraterowanie2').is(':checked') == false) {


                                    $(this).removeAttr('required');
                                    $('#zakraterowanie2').removeAttr('required');
                                    $("#pokoje1").removeAttr('required');
                                    $("#pokoje1").val('');


                                }


                            });


                            $('#zakraterowanie2').change(function () {



                                if ($('#zakraterowanie1').is(':checked') == false && $('#zakraterowanie2').is(':checked')) {


                                    $(this).removeAttr('required');
                                    $('#zakraterowanie1').removeAttr('required');
                                    $("#pokoje1").attr("required", "required");


                                }
                                if ($('#zakraterowanie1').is(':checked') && $('#zakraterowanie2').is(':checked')) {




                                    $(this).removeAttr('required');
                                    $('#zakraterowanie1').removeAttr('required');
                                    $("#pokoje1").attr("required", "required");


                                }

                                if ($('#zakraterowanie1').is(':checked') == false && $('#zakraterowanie2').is(':checked') == false) {

                                    $(this).removeAttr('required');
                                    $('#zakraterowanie1').removeAttr('required');

                                    $("#pokoje1").removeAttr('required');
                                    $("#pokoje1").val('');


                                }
                            });

////
//                            $('input:radio[name="zakraterowanie2"]').change(function(){
//
//                                $("#pokoje1").prop('required',true);
//
//
//                            });


                        });


                    </script>
                    <script src="js/registrationScript.js" type="text/javascript"></script>

                </div>


            </div>


        </div>
    </div>


</section>


<!--FOOTER-->
<?php include 'footer.php' ?>



  
  </body>
</html>