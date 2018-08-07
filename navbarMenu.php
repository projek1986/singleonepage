     <div>

        <div id="menu" class="static maxonly">

            <nav class="navbar  navbar-transparent" role="navigation">
                <div class="container" style="text-align: right;">
                    <div class="row">
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav ">
                                <li><a href="index.php#zaproszenie">ZAPROSZENIE</a></li>
                                <li><a href="index.php#oferta">OFERTA DLA UCZESTNIKA</a></li>
                                <li><a href="index.php#program"> PROGRAM</a></li>
                                <li><a href="index.php#lokalizacja"> LOKALIZACJA</a></li>
                                <li><a href="rejestracja.php#rejestracja"> REJESTRACJA</a></li>
                                <li><a href="index.php#kontakt"> KONTAKT </a></li>

                            </ul>
                        </div>

                    </div>

            </nav>
<!--            <img style="position: absolute;top:2.5px;right:100px;width:47.5px;" src="/images/nerka_Logo.png" alt=""/>-->
            <a href="/" > <img style="position: absolute;top:-3px;right:20px;width: 80px;" src="/images/logo_ptu_grey.png" alt=""/></a>
        </div>
    </div>

    <div class="top-content  container clearfix">
        <div class="main-menu-content" style="display: none">
            <ul id="main-menu">
                <li><a href="index.php#zaproszenie">ZAPROSZENIE</a></li>
                <li><a href="index.php#oferta">OFERTA DLA UCZESTNIKA</a></li>
                <li><a href="index.php#program"> PROGRAM</a></li>
                <li><a href="index.php#lokalizacja"> LOKALIZACJA</a></li>
                <li><a href="rejestracja.php#rejestracja"> REJESTRACJA</a></li>
                <li><a href="index.php#kontakt"> KONTAKT </a></li>
            </ul>
        </div>

        <div class="col-xs-6 col-md-6 col-sm-4">
            <img class="imgmobile mobileonly" src="/images/logo_ptu.png">
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
    <!-- it works the same with all jquery version from 1.x to 2.x -->
    <!--    <script src="js/jquery-1.11.3.min.js"></script>-->
