<?php
	session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Coderthemes">
    <link rel="apple-touch-icon-precomposed" href="../assets/favicon_t.png" />
    <link rel="shortcut icon" href="../assets/favicon.png">

    <title>Aikido Renbukai - Admin</title>

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>

    <link href="assets/plugins/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />

    <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="assets/css/pages.css" rel="stylesheet" type="text/css">
    <link href="assets/css/menu.css" rel="stylesheet" type="text/css">
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">

    <script src="assets/js/modernizr.min.js"></script>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
	<body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <div id="sidebar-menu">
                        <ul>
                            <li class="text-muted menu-title">Men&ugrave;</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-primary active"><i class="md md-location-history"></i><span> Seminari </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li class="active"><a href="form-elements.html">Aggiungi</a></li>
                                    <li><a href="form-advanced.html">Aggiorna</a></li>
                                    <li><a href="form-validation.html">Elimina</a></li>
                                    <li><a href="form-validation.html">Elenco</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-primary active"><i class="md md-camera-alt"></i><span> Gallerie fotografiche </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li class="active"><a href="form-elements.html">Aggiungi</a></li>
                                    <li><a href="form-advanced.html">Aggiorna</a></li>
                                    <li><a href="form-validation.html">Elimina</a></li>
                                    <li><a href="form-validation.html">Elenco</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End --> 
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Nuovo seminario</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
            				<div class="col-md-12">
            					<h4 class="m-t-0 header-title"><b>Informazioni del seminario</b></h4>
								<form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label">data inizio</label>
                                        <div class="col-sm-9">
                                          <input type="email" class="form-control" id="inputFrom" placeholder="primo giorno seminario">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label">data fine</label>
                                        <div class="col-sm-9">
                                          <input type="email" class="form-control" id="inputTo" placeholder="ultimo giorno seminario">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label">citt&agrave;</label>
                                        <div class="col-sm-9">
                                          <input type="email" class="form-control" id="inputCity" placeholder="Milano">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-3 control-label">dojo</label>
                                        <div class="col-sm-9">
                                          <input type="password" class="form-control" id="inputDojo" placeholder="Aikikai Milano">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword4" class="col-sm-3 control-label">indirizzo</label>
                                        <div class="col-sm-9">
                                          <input type="password" class="form-control" id="inputIndirizzo" placeholder="via Lulli, 30 - 20132 Milano (MI)">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword4" class="col-sm-3 control-label">diretto da</label>
                                        <div class="col-sm-9">
                                          <input type="password" class="form-control" id="inputDiretto" placeholder="Roberto Foglietta">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword4" class="col-sm-3 control-label">titolo del seminario</label>
                                        <div class="col-sm-9">
                                          <input type="password" class="form-control" id="inputTitolo" placeholder="seminario di aikido">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword4" class="col-sm-3 control-label">immagine</label>
                                      <div class="fallback col-sm-9">
                                        <input name="image" type="file"  multiple/>
                                      </div>
                                    </div>
                                    <div class="form-group">

                                        <label for="inputPassword4" class="col-sm-3 control-label">locandina</label>
                                        <form action="#" class="dropzone" id="dropzone">
                                      <div class="fallback col-sm-9">
                                        <input name="flyer" type="file"  multiple />
                                      </div>
                                      </form>
                                    </div>
                                    <div class="form-group m-b-0">
                                        <div class="col-sm-offset-3 col-sm-9">
                                          <button type="submit" class="btn btn-info waves-effect waves-light">Invia</button>
                                        </div>
                                    </div>
                                </form>
            				</div>
                        </div>                     
                    </div>
                    <!-- end container -->
                </div>
                <!-- end content -->            
            </div>
        </div>

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <!-- Dropzone js -->
        <script src="assets/plugins/dropzone/dist/dropzone.js"></script>

        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>


    </body>
</html>
