<?php 
    session_start();
    if(!isset($_SESSION['total_items'])){
    $_SESSION['total_items']=null;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <title>Telecom</title>
    <!-- Bootstrap -->
    <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/index.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/devices.css" rel="stylesheet">
    
	<!-- Thumbnail gallery responsive -->
    <!-- <link href="resources/css/thumbnail-gallery.css" rel="stylesheet"> -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="../lib/js/jquery-2.2.4.min.js"></script>
    
</head>

<body>
    <!-- Fixed navbar -->
    <div class="container-fluid">

        <!-- Landmarks Header -->
        <div class="row"> 
            <div class="col-lg-12 landmarks">
                <?php require_once('../php/template_landmarks.php'); ?>
            </div>
            
        </div>
    <!-- Begin page wrapper -->
    <div class="page-wrap" id="device-container">
        <div class="container container-msg">
            <div class="row" id="url_navigator">
                <ol class="breadcrumb path">
                    <li><a href="./home.php">Home</a></li>
                    <li><a href="./devices-list.php">Devices</a></li>
                    <li class="active" id="device-name-breadcrumb"></li>
                </ol>
            </div>
            <div class="row"><h3 class="device-name"></h3></div>
            <div class="container row" id="device-details-container">
                <div class="device-image col col-md-3"><img class="device-image-id img-responsive" src=""/></div>
                <div class="device-data-container col col-md-9 panel panel-default">
                    <div  class="row col col-md-12 panel-header"><h4>Description</h4></div>
                    <div class="device-description row panel-body">
                        <div class="device-description-text col col-md-8"><p></p>
                        </div>
                        <div class="device-price col col-md-4">
                            <label class="device-price-value row">Price: <label class="device-price-text"></label></label>
                            <div class="row">
                                    <button class="btn btn-primary"  id="add-cart">Add to Cart
                                        <span class="glyphicon glyphicon-shopping-cart"></span>
                                    </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container row">
                <ul id="devices_tab" class="nav nav-tabs">
                    <li class="active"><a href="#techspec_tab" data-toggle="tab">Technical Specification</a></li>
                    <li class=""><a href="#slservices_tab" data-toggle="tab">Smart Life Services</a></li>
                    <li class=""><a href="#assistance_tab" data-toggle="tab">Assistance</a></li>
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tech-spec-table tab-pane fade active in" id="techspec_tab">
                        <table class="table table-striped">
                            <tbody>
                              <tr>
                                <td class="col col-md-3">CPU</td>
                                <td class="device-cpu"></td>
                              </tr>
                              <tr>
                                <td class="col col-md-3">OS</td>
                                <td class="device-os"></td>
                              </tr>
                              <tr>
                                <td class="col col-md-3">Resolution</td>
                                <td class="device-resolution"></td>
                              </tr>
                              <tr>
                                <td class="col col-md-3">Display Size</td>
                                <td class="device-dispsize"></td>
                              </tr>
                              <tr>
                                <td class="col col-md-3">Display Type</td>
                                <td class="device-disptype"></td>
                              </tr>
                              <tr>
                                <td class="col col-md-3">SIM</td>
                                <td class="device-sim"></td>
                              </tr>
                              <tr>
                                <td class="col col-md-3">Weight</td>
                                <td class="device-weight"></td>
                              </tr>
                              <tr>
                                <td class="col col-md-3">Dimensions</td>
                                <td class="device-dimensions"></td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="slservices_tab">
                        <div class="row"><p></p></div>
                        <div class="slservices-container row">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="assistance_tab">
                        <div class="assistances-container list-group">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p class="text-muted">Telecom 2016</p>
        </div>
    </footer>
    <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/devices.js"></script>
    <script src="../js/landmarks_active_elemetns.js"></script>
    
</body>

</html>
