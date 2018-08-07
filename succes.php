<?php
// dane podstawowe
// imie
$imie = null;
if (isset($_POST['imie'])) {

    if (!empty($_POST['imie'])) {

        $imie = $_POST['imie'];
    }
}

if (empty($imie)) {
    ?>
        <script>

            window.location = "rejestracja.php?blad=1#rejestracja";

        </script >
    <?php
}



// Nazwisko
    $Nazwisko = null;
    if (isset($_POST['Nazwisko'])) {

        if (!empty($_POST['Nazwisko'])) {

            $Nazwisko = $_POST['Nazwisko'];
        }
    }

    if (empty($Nazwisko)) {
        ?>
            <script>

                    window.location ="rejestracja.php?blad=1#rejestracja";

            </script >
        <?php
    }


// Telnumer
//$Telnumer = null;
//if(isset($_POST['Telnumer'])){
//
//    if(!empty($_POST['Telnumer'])){
//
//        $Telnumer = $_POST['Telnumer'];
//    }
//
//}
// email
    $email = null;
    if (isset($_POST['email'])) {

        if (!empty($_POST['email'])) {

            $email = $_POST['email'];
        }
    }
    if (empty($email)) {
        ?>
        <script language = "JavaScript">
   
        window.location ="rejestracja.php?blad=1#rejestracja";
  
        </script >
        <?php
    }

// miejsce pracy
// NazwaInstytucji

    $NazwaInstytucji = null;
    if (isset($_POST['NazwaInstytucji'])) {

        if (!empty($_POST['NazwaInstytucji'])) {

            $NazwaInstytucji = $_POST['NazwaInstytucji'];
        }
    }

    if (empty($NazwaInstytucji)) {
        ?>
            <script language = "JavaScript">
       
                window.location ="rejestracja.php?blad=1#rejestracja";
        
            </script >
        <?php
    }

// NazwaInstytucji
    $NazwaOddzialu = null;
    if (isset($_POST['NazwaOddzialu'])) {

        if (!empty($_POST['NazwaOddzialu'])) {

            $NazwaOddzialu = $_POST['NazwaOddzialu'];
        }
    }



// ulica i nr domu

    $Ulicadomu = null;
    if (isset($_POST['Ulicadomu'])) {

        if (!empty($_POST['Ulicadomu'])) {

            $Ulicadomu = $_POST['Ulicadomu'];
        }
    }

    if (empty($Ulicadomu)) {
        ?>
            <script language = "JavaScript">
    
                window.location ="rejestracja.php?blad=1#rejestracja";
        
            </script>
        <?php
    }

// Kod pocztowy

    $Kodpocztowy = null;
    if (isset($_POST['Kodpocztowy'])) {

        if (!empty($_POST['Kodpocztowy'])) {

            $Kodpocztowy = $_POST['Kodpocztowy'];
        }
    }


    if (empty($Kodpocztowy)) {
        ?>
            <script language = "JavaScript">
   
                 window.location ="rejestracja.php?blad=1#rejestracja";
   
            </script>
        <?php
    }
// Miasto

    $Miasto = null;
    if (isset($_POST['Miasto'])) {

        if (!empty($_POST['Miasto'])) {

            $Miasto = $_POST['Miasto'];
        }
    }
    if (empty($Miasto)) {
        ?>
            <script language = "JavaScript" >
    
                window.location ="rejestracja.php?blad=1#rejestracja";
 
            </script>
        <?php
    }

// Przymaleznosci
// ptu

    $ptu = null;
    if (isset($_POST['ptu'])) {

        if (!empty($_POST['ptu'])) {

            $ptu = $_POST['ptu'];

            if ($ptu == 1) {
                $ptu = 'Tak';
            } else {

                $ptu = 'Nie';
            }
        }
    }
    if (empty($ptu)) {
        ?>
            <script>
    
                 window.location ="rejestracja.php?blad=1#rejestracja";
        
            </script>
        <?php
    }
    
    $sau = null;
    if (isset($_POST['sau'])) {

        if (!empty($_POST['sau'])) {
            
            $sau = $_POST['sau'];
            
            if ($sau == 1) {
                
                $sau = 'Tak';
                
            } else {
                $sau = 'Nie';
            }
        }
    }
    if (empty($sau) || ($sau =='Tak' && $ptu == 'Nie'  ) ) {
        
        ?>
            <script>
    
                 window.location ="rejestracja.php?blad=1#rejestracja";
        
            </script>
        <?php
    }
    
//udział w ceremonii otwarcia
$ceremony = null;
if (isset($_POST['ceremony'])) {

    if (!empty($_POST['ceremony'])) {

        $ceremony  = $_POST['ceremony'];

        if ($ceremony  == 1) {

            $ceremony  = 'Tak';

        } else {
            $ceremony = 'Nie';
        }
    }
}
  
    
// Osoba towarzysząca w uroczystym otwarciu
$ostow = null;
    if (isset($_POST['ostow'])) {

        if (!empty($_POST['ostow'])) {

            $ostow= $_POST['ostow'];

            if ($ostow == 1) {
                $ostow= 'Tak';
            } else {
                $ostow = 'Nie';
            }
        }
    }

// Osoba towarzysząca nazwa
    
    $inputostow = null;
    if (isset($_POST['inputosTow'])) {

        if (!empty($_POST['inputosTow'])) {

            $inputostow = $_POST['inputosTow'];
        }
    }
    
    // Zakwaterowanie
    
    $hotel_12_13= null;
    if (isset($_POST['date_12_13'])) {

        if (!empty($_POST['date_12_13'])) {

            $hotel_12_13= $_POST['date_12_13'];

            if ($hotel_12_13 == 'Tak') {
                $hotel_12_13= 'Tak';
            } else {
                $hotel_12_13 = 'Nie';
            }
        }
    }

    $hotel_13_14= null;
    if (isset($_POST['date_13_14'])) {

        if (!empty($_POST['date_13_14'])) {

            $hotel_13_14= $_POST['date_13_14'];

            if ($hotel_13_14 == 'Tak') {
                $hotel_13_14= 'Tak';
            } else {
                $hotel_13_14 = 'Nie';
            }
        }
    }
    
//hotele
$hotel_room = null;

if($hotel_12_13 == 'Tak' || $hotel_13_14 == "Tak"){
    
    if (isset($_POST['hotel_room'])) {

        if (!empty($_POST['hotel_room'])) {

            $hotel_room  = $_POST['hotel_room'];
        }
    }
    
    if (empty($hotel_room)) {
        ?>
            <script>
    
                window.location ="rejestracja.php?blad=1#rejestracja";
        
            </script>
        <?php
    }
}

// Zgody
$agree = null;
if (isset($_POST['agree'])) {

    if (!empty($_POST['agree'])) {

        $agree = $_POST['agree'];

   }
}
if (empty($agree)) {
    ?>
        <script>

            window.location ="rejestracja.php?blad=1#rejestracja";

        </script>
    <?php
}
    // Współlokator
    
//    $inputwspollokator = null;
//    if (isset($_POST['inputwspollokator'])) {
//
//        if (!empty($_POST['inputwspollokator'])) {
//
//            $inputwspollokator = $_POST['inputwspollokator'];
//        }
//    }


// FAKTURA

    $fakturaoptions = null;
    if (isset($_POST['fakturaoptions'])) {

        if (!empty($_POST['fakturaoptions'])) {

            $fakturaoptions = $_POST['fakturaoptions'];

            if ($fakturaoptions == 1) {
                $fakturaoptions = 'Tak';
            } else {

                $fakturaoptions = 'Nie';
            }
        }
    }

// P�atnik

    $platnik = null;
    if (isset($_POST['platnik'])) {

        if (!empty($_POST['platnik'])) {

            $platnik = $_POST['platnik'];
        }
    }


// ulica


    $platnikulica = null;
    if (isset($_POST['platnikulica'])) {

        if (!empty($_POST['platnikulica'])) {

            $platnikulica = $_POST['platnikulica'];
        }
    }

// nr domu / lokalu

    $platnikulicanrm = null;
    if (isset($_POST['platnikulicanrm'])) {

        if (!empty($_POST['platnikulicanrm'])) {

            $platnikulicanrm = $_POST['platnikulicanrm'];
        }
    }

// kod pocztowy

    $platnikulicakod = null;
    if (isset($_POST['platnikulicakod'])) {

        if (!empty($_POST['platnikulicakod'])) {

            $platnikulicakod = $_POST['platnikulicakod'];
        }
    }

// nip

    $platniknip = null;
    if (isset($_POST['platniknip'])) {

        if (!empty($_POST['platniknip'])) {

            $platniknip = $_POST['platniknip'];
        }
    }

// osoba do kontaktu

    $platnikoskontakt = null;
    if (isset($_POST['platnikoskontakt'])) {

        if (!empty($_POST['platnikoskontakt'])) {

            $platnikoskontakt = $_POST['platnikoskontakt'];
        }
    }

// osoba do kontaktu

    $platnikteloskontakt = null;
    if (isset($_POST['platnikteloskontakt'])) {

        if (!empty($_POST['platnikteloskontakt'])) {

            $platnikteloskontakt = $_POST['platnikteloskontakt'];
        }
    }

/// UWAGI nie sa wymagane


    $uwagi = null;
    if (isset($_POST['uwagi'])) {

        if (!empty($_POST['uwagi'])) {

            $uwagi = $_POST['uwagi'];
        }
    }



    if (!is_null($imie) && !is_null($Nazwisko) && !is_null($email) && !is_null($NazwaInstytucji) && !is_null($Ulicadomu) && !is_null($Kodpocztowy) && !is_null($Miasto) && !is_null($ptu) && !is_null($sau)) {


        require_once('r_baza/serch_all.php');
        $Strona = new search;

        $Strona->savetodb($imie, $Nazwisko, $email, $NazwaInstytucji, $NazwaOddzialu, $Ulicadomu, $Kodpocztowy, $Miasto, $ptu,$sau,$ceremony, $ostow,$inputostow,$hotel_12_13,$hotel_13_14,$hotel_room ,$fakturaoptions, $platnik, $platnikulica, $platnikulicanrm, $platnikulicakod, $platniknip, $platnikoskontakt, $platnikteloskontakt,$agree, $uwagi);
        ?>
            <script>
           
            window.location ="rejestracja_zakonczona.php#rejestracja_zakonczona";
               
            </script>
        <?php
    } else {
        ?>
    <script >
      
        window.location ="rejestracja.html#rejestracja";
          
    </script>
        <?php
    }
    ?>






