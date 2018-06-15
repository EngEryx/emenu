<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="">
    <title>eMenu</title>
    <meta name="description" content="Crime Reporting">
    <meta name="author" content="Mercy Wamuyu">

    <!-- Check if the language is set to RTL, so apply the RTL layouts -->
    <!-- Otherwise apply the normal LTR layouts -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
          integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
          crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
            integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
            crossorigin=""></script>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
</head>
<body>
<div id="applet">
    <div style="margin-top: 20px;"></div>
    <div class="container-fluid" data-aos="fade-up">
        <!-- Put the HTML form here for showing the various foods...e.g Lunch, Breakfast..etc -->
        <form action="menu_save.php">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close"></span> Break Fast </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="row" style="padding: 10px;">
                                        <div class="col-md-4">
                                            <img src="media/coffee.jpg" height="100" width="100" class="img img-responsive img-bordered" alt="Cofee">
                                            <input type="checkbox"> Hot Coffee
                                        </div>
                                        <div class="col-md-4">
                                            <img src="media/coffee.jpg" height="100" width="100" class="img img-responsive img-bordered" alt="Cofee">
                                            <input type="checkbox"> Hot Coffee 2
                                        </div>
                                        <div class="col-md-4">
                                            <img src="media/coffee.jpg" height="100" width="100" class="img img-responsive img-bordered" alt="Cofee">
                                            <input type="checkbox"> Hot Coffee 3
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-success pull-right" value="Order">
                    </div>
                </div>
            </div>

        </form>
    </div>
</div><!-- #app -->

<!-- Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script>
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });

    AOS.init({
        offset: 200,
        duration: 600,
        easing: 'ease-in-sine',
        delay: 100,
    });


    $(function () {
        $(".home-area").height($(window).height());
        $(".nav-sticky").sticky({topSpacing: 0});
        // Smooth scrolling using jQuery easing
        $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: (target.offset().top - 25)
                    }, 1000, "easeInOutExpo");
                    return false;
                }
            }
        });
    })
</script>
</body>
</html>
