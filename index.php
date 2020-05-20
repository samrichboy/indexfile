<?php 
require("model/modelClass.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title><?php modeClass::titlePage(); ?></title>
    <link rel="stylesheet" href="dist/js/jPlayer/jplayer.flat.css" type="text/css" />
    <!-- Custom CSS -->
    <link href="dist/css/pages/user-card.css" rel="stylesheet">
    <link href="dist/css/style.min.css" rel="stylesheet">
   <link rel="stylesheet" href="asset/font-awesome/css/font-awesome.css" />

</head>

<body class="skin-megna fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
   <!--- <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">vabtop</p>
        </div>
    </div>--->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->    
                         <img src="assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block
                         d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu">
                         </i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler 
                        d-none d-lg-block d-md-block waves-effect waves-dark" 
                        href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item">
                            <form class="app-search d-none d-md-block d-lg-block">
                                <input type="text" class="form-control" placeholder="Search & enter">
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                         </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        
                   
                        <li> <a class="waves-effect waves-dark" href="index.html" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Home</span></a></li>
                       
                       
                       
                        
                        <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-music"></i><span class="hide-menu">Trending</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li> <a href="#">Afrobeat</a> </li>
                                <li> <a href="#">Pop</a> </li>
                                <li> <a href="music-add-geners.html">Hip Pop</a> </li>
                                <li> <a href="music-add-geners.html">Gospel</a> </li>
                                <li> <a href="music-add-geners.html">R&B</a> </li>
                                <li> <a href="music-add-geners.html">Instrumental</a> </li>
                                <li> <a href="music-add-geners.html">DJ</a> </li>
                                <li> <a href="music-add-geners.html">Rock</a> </li>
                                <li> <a href="music-add-geners.html">Reggae</a> </li>
                                <!--<li> <a href="music-edit-geners.html">Edit Genre</a> </li>-->
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-microphone"></i><span class="hide-menu">Top Songs</span></a>
                            <ul aria-expanded="false" class="collapse">
                            <li> <a href="music-geners.html">Afrobeat</a> </li>
                                <li> <a href="music-add-geners.html">Pop</a> </li>
                                <li> <a href="music-add-geners.html">Hip Pop</a> </li>
                                <li> <a href="music-add-geners.html">Gospel</a> </li>
                                <li> <a href="music-add-geners.html">R&B</a> </li>
                                <li> <a href="music-add-geners.html">Instrumental</a> </li>
                                <li> <a href="music-add-geners.html">DJ</a> </li>
                                <li> <a href="music-add-geners.html">Rock</a> </li>
                                <li> <a href="music-add-geners.html">Reggae</a> </li>
                                <!--<li> <a href="music-album-detail.html">Album Detail</a> </li>-->
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-user"></i><span class="hide-menu">New Songs</span></a>
                            <ul aria-expanded="false" class="collapse">
                            <li> <a href="music-geners.html">Afrobeat</a> </li>
                                <li> <a href="music-add-geners.html">Pop</a> </li>
                                <li> <a href="music-add-geners.html">Hip Pop</a> </li>
                                <li> <a href="music-add-geners.html">Gospel</a> </li>
                                <li> <a href="music-add-geners.html">R&B</a> </li>
                                <li> <a href="music-add-geners.html">Instrumental</a> </li>
                                <li> <a href="music-add-geners.html">DJ</a> </li>
                                <li> <a href="music-add-geners.html">Rock</a> </li>
                                <li> <a href="music-add-geners.html">Reggae</a> </li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-music-alt"></i><span class="hide-menu">Top Albums</span></a>
                            <ul aria-expanded="false" class="collapse">
                            <li> <a href="music-geners.html">Afrobeat</a> </li>
                                <li> <a href="music-add-geners.html">Pop</a> </li>
                                <li> <a href="music-add-geners.html">Hip Pop</a> </li>
                                <li> <a href="music-add-geners.html">Gospel</a> </li>
                                <li> <a href="music-add-geners.html">R&B</a> </li>
                                <li> <a href="music-add-geners.html">Instrumental</a> </li>
                                <li> <a href="music-add-geners.html">DJ</a> </li>
                                <li> <a href="music-add-geners.html">Rock</a> </li>
                                <li> <a href="music-add-geners.html">Reggae</a> </li>
                                <!--<li> <a href="music-album-detail.html">Album Detail</a> </li>-->
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-video-camera"></i><span class="hide-menu">New Albums</span></a>
                            <ul aria-expanded="false" class="collapse">
                            <li> <a href="music-add-geners.html">Pop</a> </li>
                                <li> <a href="music-add-geners.html">Hip Pop</a> </li>
                                <li> <a href="music-add-geners.html">Gospel</a> </li>
                                <li> <a href="music-add-geners.html">R&B</a> </li>
                                <li> <a href="music-add-geners.html">Instrumental</a> </li>
                                <li> <a href="music-add-geners.html">DJ</a> </li>
                                <li> <a href="music-add-geners.html">Rock</a> </li>
                                <li> <a href="music-add-geners.html">Reggae</a> </li>
                            </ul>
                        </li>

                        <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-circle text-success"></i><span class="hide-menu">Log Out</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-circle text-info"></i><span class="hide-menu">FAQs</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">All Artists Page</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">All Artists Page</li>
                            </ol>
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
                        </div>
                    </div>
                </div>
                <div id="page">


                </div>
            <!-- ============================================================== -->
        </div>
        
        <div class="mplayer">
                <div id="jp_container_N" class="bg-dark">
                    <div class="jp-type-playlist">
                        <div id="jplayer_N" class="jp-jplayer hide"></div>
                        <div class="jp-gui">
                            <div class="jp-interface">
                                <div class="jp-controls">
                                    <div><a class="jp-previous"><i class="fa fa-step-backward"></i></a></div>
                                    <div>
                                        <a class="jp-play"><i class="fa fa-play-circle fa-2x"></i></a>
                                        <a class="jp-pause"><i class="fa fa-pause-circle fa-2x"></i></a>
                                    </div>
                                    <div><a class="jp-next"><i class="fa fa-step-forward"></i></a></div>
                                    <div class="jp-progress hidden-xs">
                                        <div class="jp-seek-bar">
                                            <div class="jp-play-bar play-progress">
                                            </div>
                                            <div class="jp-current-time current-time text-white"></div>
                                            <div class="jp-title text-white">
                                                <ul>
                                                    <li></li>
                                                </ul>
                                            </div>
                                            <div class="jp-duration duration text-white"></div>
                                        </div>
                                    </div>
                                    <div class="hidden-xs hidden-sm">
                                        <a class="jp-mute" title="mute"><i class="fa fa-volume-up"></i></a>
                                        <a class="jp-unmute" title="unmute"><i class="fa fa-volume-off"></i></a>
                                    </div>
                                    <div class="jp-volume hidden-xs hidden-sm">
                                        <div class="jp-volume-bar bg-muted">
                                            <div class="jp-volume-bar-value"></div>
                                        </div>
                                    </div>
                                    <!-- <div>
                                 <a class="jp-shuffle" title="shuffle"><i class="icon-shuffle text-muted"></i></a>
                                 <a class="jp-shuffle-off hid" title="shuffle off"><i class="icon-shuffle text-lt"></i></a>
                                 </div> -->
                                    <!-- <div>
                                 <a class="jp-repeat" title="repeat"><i class="icon-loop text-muted"></i></a>
                                 <a class="jp-repeat-off hid" title="repeat off"><i class="icon-loop text-lt"></i></a>
                                 </div> -->
                                    <div><a class="" data-toggle="dropdown" data-target="#playlist"><i class="fa fa-bars"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="jp-playlist dropup" id="playlist">
                            <ul class="dropdown-menu bg-inverse m-b-0">
                                <li class="list-group-item"></li>
                            </ul>
                        </div>
                        <div class="jp-no-solution hide">
                            <span>Update Required</span> To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2020 Eliteadmin by themedesigner.in
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->

    <script src="assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function(){
       // $("#page").load("default1.php",function(){});
       $("#page").load("default.php",function(){});
    })
    
    </script>


    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/node_modules/popper/popper.min.js"></script>
    <script src="assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script type="text/javascript" src="dist/js/jPlayer/jquery.jplayer.min.js"></script>
    <script type="text/javascript" src="dist/js/jPlayer/add-on/jplayer.playlist.min.js"></script>
    <script type="text/javascript" src="dist/js/jPlayer/init.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
</body>


<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/music/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 May 2020 11:35:26 GMT -->
</html>