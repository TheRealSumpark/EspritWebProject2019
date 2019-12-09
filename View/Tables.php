<?PHP



include '../core/EmployeC.PHP';




$EmployeC = new EmployeC();
$Liste_Employes = $EmployeC->Afficher_Employe();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Table
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

  <script language="javascript" type="text/javascript" src="../Core/Form_Control.js"></script>
  <!--JQuery FOR DATA TABLES-->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

  <!--     Fonts and icons     -->

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <!--My CSS JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
  <link rel="stylesheet" type="text/css" href="../View/style.css" />

  <!-- CSS   FOR DATA TABLES-->

</head>

<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="./dashboard.html">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./user.html">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item active ">
            <a class="nav-link" href="./Tables.php">
              <i class="material-icons">content_paste</i>
              <p>Table List</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="Newsletter_Mail.html">
              <i class="material-icons">library_books</i>
              <p>Newsletter</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./icons.html">
              <i class="material-icons">bubble_chart</i>
              <p>Icons</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./map.html">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./notifications.html">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li>
          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">Table List</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-default btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="javascript:void(0)">Mike John responded to your email</a>
                  <a class="dropdown-item" href="javascript:void(0)">You have 5 new tasks</a>
                  <a class="dropdown-item" href="javascript:void(0)">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another Notification</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another One</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      <!-- End Navbar -->
      <div class="row" style="margin-top: 90px">
        <div class="col-md-12">

          <div id="accordion">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#Employe" aria-expanded="false" aria-controls="collapseOne">
                    Employés
                  </button>
                </h5>
              </div>
              <div id="Employe" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">


                <div class="content">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-header card-header-primary">
                            <h4 class="card-title ">Liste Des Employes</h4>
                            
                          </div>

                          <div class="card-body">

                            <div class="table-responsive ">
                              <table class="table " id="Table_Employe">
                                <thead class=" text-primary">
                                  <th>
                                    Cin
                                  </th>
                                  <th>
                                    Nom
                                  </th>
                                  <th>
                                    Prenom
                                  </th>

                                  <th>
                                    Salaire
                                  </th>
                                  <th>

                                    <button type="button" class="btn btn-default btn-sm " aria-label="Left Align" data-toggle="modal" data-target="#Ajouter_Modal">
                                      <i class="fa fa-plus"></i>
                                    </button>

                                  </th>


                                </thead>
                                <div class="form-group"> <input type="text" id="Searchbox" placeholder="Search by Cin"> </div>
                                <tbody>

                                  <?php
                                  foreach ($Liste_Employes as $row) { ?>

                                    <tr>
                                      <td>
                                        <?php echo $row['Cin']  ?>
                                      </td>
                                      <td>
                                        <?php echo $row['Nom'] ?>
                                      </td>
                                      <td>
                                        <?php echo $row['Prenom'] ?>
                                      </td>

                                      <td class="text-primary">
                                        <?php echo $row['Salaire'] . ' dt' ?>
                                      </td>
                                      <td><button data-val="<?php echo $row['Cin']  ?>" data-nom="<?php echo $row['Nom']  ?>" data-prenom="<?php echo $row['Prenom']  ?>" data-salaire="<?php echo $row['Salaire']  ?>" type="button" class=" btn btn-dark btn-sm" data-toggle="modal" data-target="#Modifier_Modal">Modifier</button> </td>
                                      <input type="hidden" name="Cin" value="<?PHP echo $row['Cin'] ?> ">
                                      <form method="POST" action="../Core/Supprimer_Employe.php">
                                        <td><button type="submit" class="btn btn-light btn-sm">Supprimer</button> </td>
                                        <input type="hidden" name="Cin" value="<?PHP echo $row['Cin'] ?> ">
                                      </form>
                                    </tr>
                                    <tr>
                                    <?php } ?>
                                </tbody>

                              </table>

                              <script>
                                $(function() {
                                  $('#Modifier_Modal').on('show.bs.modal', function(event) {
                                    var button = $(event.relatedTarget); // Button that triggered the modal
                                    var Cin = button.data('val');
                                    var Nom = button.data('nom');
                                    var Prenom = button.data('prenom');
                                    var Salaire = button.data('salaire');
                                    var modal = $(this);
                                    modal.find('#cin').val(Cin);
                                    modal.find('#Nom').val(Nom);
                                    modal.find('#Prenom').val(Prenom);
                                    modal.find('#Salaire').val(Salaire);
                                    modal.find('#Cin').val(Cin);
                                  });
                                });
                              </script>
<script> 
            $(document).ready(function() { 
                $("#Searchbox").on("keyup", function() { 
                    var value = $(this).val(); 
                    $("#Table_Employe tr").filter(function() { 
                        $(this).toggle($(this).text() 
                        .indexOf(value) > -1) 
                    }); 
                }); 
            }); 
        </script> 
<script> 
            $(document).ready(function() { 
                $("#Searchbox_1").on("keyup", function() { 
                    var value = $(this).val(); 
                    $("#Table_Produit tr").filter(function() { 
                        $(this).toggle($(this).text() 
                        .indexOf(value) > -1) 
                    }); 
                }); 
            }); 
        </script> 
                              <!-- Modal Ajouter -->
                              <div class="modal fade" id="Ajouter_Modal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">

                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">

                                      <form method="POST" action="../Core/AjouterEmploye.php">
                                        <div class="form-row">
                                          <div class="form-group col-md-6 ">
                                            <label style="color:white">Nom</label>
                                            <input type="text" name="Nom" class="form-control">
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label style="color:white">Prenom</label>
                                            <input type="text" name="Prenom" class="form-control">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label style="color:white">Cin</label>
                                          <input type="number" name="Cin" class="form-control">
                                        </div>
                                        <div class="form-group">
                                          <label style="color:white">Salaire</label>
                                          <input type="number" name="Salaire" class="form-control">
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary mr-auto" data-dismiss="modal">Fermer</button>

                                          <button type="Submit" class="btn btn-primary">Ajouter</button>
                                        </div>
                                    </div>
                                  </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Modal Modifier -->
                        <div class="modal fade" id="Modifier_Modal" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">

                                <form name="Form_Modifier" method="POST" action="../Core/Modifier_Employe.php">
                                  <div class="form-row">
                                    <div class="form-group col-md-6 ">
                                      <label style="color:white">Nom</label>
                                      <input type="text" name="Nom" id="Nom" value="" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label style="color:white">Prenom</label>
                                      <input type="text" name="Prenom" id="Prenom" class="form-control">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label style="color:white">Cin</label>
                                    <input disabled type="number" name="cin" id="cin" value="" class="form-control">
                                    <input hidden type="number" name="Cin" id="Cin" value="" class="form-control">
                                  </div>
                                  <div class="form-group">
                                    <label style="color:white">Salaire</label>
                                    <input type="number" name="Salaire" id="Salaire" class="form-control">
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary mr-auto" data-dismiss="modal">Fermer</button>

                                    <button type="Submit" class="btn btn-primary" onclick="Test()">Sauvegarder</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>


                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Collapse Begin-->
          <div id="accordion">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#Produit" aria-expanded="true" aria-controls="collapseOne">
                    Produits
                  </button>
                </h5>
              </div>
              <div id="Produit" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">

                <div class="col-md-12">
                  <div class="card card-plain">
                    <div class="card-header card-header-primary">
                      <h4 class="card-title mt-0"> Liste des Produits</h4>
                      <p class="card-category"> </p>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-hover">
                          <thead>
                            <th>
                              ID
                            </th>
                            <th>
                              Libellé
                            </th>
                            <th>
                              Prix_initial
                            </th>
                            <th>
                              Prix_reduction
                            </th>
                            <th>
                              Catégorie
                            </th>
                            <th>
                              Dt Debut Promos
                            </th>
                            <th>
                              Dt Fin Promos
                            </th>
                            <th>
                              Check
                            </th>
                          </thead>
                          <div class="form-group"> <input type="text" id="Searchbox_1" placeholder="Search by ID"> </div>
                          <tbody id="Table_Produit">

                            <form name="f" method="POST" onsubmit=" return Promos_Checker()" action="../Core/Reduction.php">

                              <?PHP

                              $sql = 'select * from produit order by Id_Produit ASC';
                              $db = config::getConnexion();
                              $Liste_Produits = $db->query($sql);


                              foreach ($Liste_Produits as $row) {

                                ?>
                                <tr>
                                  <td> <?php echo $row['Id_Produit'] ?> </td>
                                  <td> <?php echo $row['Nom'] ?> </td>
                                  <td> <?php echo $row['Prix'] . " dt" ?> </td>
                                  <td> <?php if ($row['Prix_Reduction']) {
                                            echo $row['Prix_Reduction'] . " dt";
                                          } else {
                                            echo "N/A";
                                          } ?> </td>
                                  <td> <?php echo $row['Categorie'] ?> </td>
                                  <td> <?php if ($row['Promos']) {
                                            echo $row['Debut_Promos'];
                                          } else {
                                            echo "N/A";
                                          } ?> </td>
                                  <td> <?php if ($row['Promos']) {
                                            echo $row['Fin_Promos'];
                                          } else {
                                            echo "N/A";
                                          } ?> </td>
                                  <td>
                                    <?php
                                      echo ('
                             <div class="form-group">
       <input class="form-control" type="checkbox" value="' . $row['Id_Produit'] . '" name="Check[]"/>
                            </div>');
                                      ?>
                                  </td>

                                </tr>
                              <?php }; ?>
                          </tbody>
                          <tfoot>
                            <tr>
                              <td colspan="7">
                                <div class="form-group">
                                  <input class="form-control" id="Promos" name="Promos" type="number" placeholder="Entrer la valeur de promos">
                              </td>
                      </div>
                      </tr>
                      <tr>
                        <td colspan="3">
                          <div class="form-group">
                            Date Debut<input class="form-control" type="datetime-local" id="Debut_Promos" name="Debut_Promos">
                        </td>
                    </div>
                    <td colspan="3">
                      <div class="form-group">
                        Date Fin <input class="form-control" type="datetime-local" id="Fin_Promos" name="Fin_Promos">

                      </div>
                    </td>
                    <td>
                      <div>
                        <input class="btn" type="Submit" onclick="Afficher()" name="Appliquer" value="Appliquer">
                      </div>
                    </td>
                    </tr>

                    </form>
                    </tfoot>

                    </table>


                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <!-- Collapse End-->
    </div>
  </div>
  </div>
  </div>
  <footer class="footer">








  </footer>
  <script>
    const x = new Date().getFullYear();
    let date = document.getElementById('date');
    date.innerHTML = '&copy; ' + x + date.innerHTML;
  </script>
  </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple active" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Images</li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-1.jpg" alt="">
          </a>
        </li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-2.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-3.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-4.jpg" alt="">
          </a>
        </li>
        <li class="button-container">
          <a href="https://www.creative-tim.com/product/material-dashboard-dark" target="_blank" class="btn btn-primary btn-block">Free Download</a>
        </li>
        <!-- <li class="header-title">Want more components?</li>
            <li class="button-container">
                <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
                  Get the pro version
                </a>
            </li> -->
        <li class="button-container">
          <a href="https://demos.creative-tim.com/material-dashboard-dark/docs/2.0/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block">
            View Documentation
          </a>
        </li>
        <li class="button-container github-star">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard/tree/dark-edition" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
        </li>
        <li class="header-title">Thank you for 95 shares!</li>
        <li class="button-container text-center">
          <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>
          <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>
          <br>
          <br>
        </li>
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.0"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>

  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>


  



</body>

</html>