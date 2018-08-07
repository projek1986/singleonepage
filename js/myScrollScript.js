 //smoothScroll
 $(document).on('click', 'a[href^="#"]', function (e) {
            // target element id
            var id = $(this).attr('href');

            // target element
            var $id = $(id);
            if ($id.length === 0) {
                return;
            }

            // prevent standard hash navigation (avoid blinking in IE)
            e.preventDefault();

            // top position relative to the document
            var pos = $(id).offset().top;

            if (id == '#contact') {
                pos = 3950;
            }


            // animated top scrolling
            $('body, html').animate({scrollTop: pos}, 800);
            return false;


        });

 //UpScroll
   $(document).ready(function () {

            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('.scrollup').fadeIn();
                } else {
                    $('.scrollup').fadeOut();
                }
            });

            $('.scrollup').click(function () {
                $("html, body").animate({scrollTop: 0}, 1200);
                return false;
            });

        });        
  
//StickyMenu
  $(function () {
            var menu = $('#menu'); // element zawierający menu

            var menuPositionTop = menu.position().top + 10; // sprawdzamy początkową pozycję menu

//            });


            $(window).scroll(function () { // przypisujemy funkcję do zdarzenia 'scroll'
                if (parseInt($(window).scrollTop()) > menuPositionTop) {


                    if (menu.hasClass('static')) { // ten warunek nie jest konieczny, ale gdy go dodamy unikamy niepotrzebnego usuwania i dodawania klasy. to samo można zrobić za pomocą funkcji .css()
                        menu.removeClass('static').addClass('fixed'); // zmieniamy pozycję ze static na fixed zamieniając klasy


                    }
                } else {

                    if (menu.hasClass('fixed')) { // podobnie jak warunek powyżej. też nie jest konieczny
                        menu.removeClass('fixed').addClass('static');  // zmieniamy pozycję z fixed na static zamieniając klasy

                    }
                }
            });


        });
        $(document).ready(function () {
            var menu = $('#menu'); // element zawierający menu

            if (location.hash) {
                menu.removeClass('static').addClass('fixed'); // zmieniamy pozycję ze static na fixed zamieniając klasy


            }

        });

 