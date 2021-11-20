<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=ucwords($title)?> | yukPOS</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/pace/pace.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini <?=$this->uri->segment(1) == 'sale' ? 'sidebar-collapse' : null?>">

    <div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Notifications: style can be found in dropdown.less -->
                    
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?=base_url()?>assets/dist/img/user1-128x128.jpg" class="user-image">
                            <span class="hidden-xs"><?=$this->fungsi->user_login()->username?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">
                                <img src="<?=base_url()?>assets/dist/img/user1-128x128.jpg">
                                <p>
                                    <?=$this->fungsi->user_login()->name?>
                                    <small><?=$this->fungsi->user_login()->address?></small>
                                </p>
                            </li>
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a href="<?=site_url('auth/logout')?>" class="btn btn-flat bg-red">Logout</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?=base_url()?>assets/dist/img/user1-128x128.jpg" class="img-circle">
                </div>
                <div class="pull-left info">
                    <p><?=ucfirst($this->fungsi->user_login()->username)?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN MENU</li>
                <li class="<?=$this->uri->segment(1) == 'dashboard' ? 'active' : null?>">
                    <a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                </li>
                <li class="<?=$this->uri->segment(1) == 'kategori' ? 'active' : null?>">
                    <a href="<?=site_url('kategori')?>">
                        <i class="fa fa-info"></i> <span>Kategori</span>
                    </a>
                </li>
                <li class="<?=$this->uri->segment(1) == 'supplier' ? 'active' : null?>">
                    <a href="<?=site_url('supplier')?>">
                        <i class="fa fa-qrcode"></i> <span>Data TTD </span>
                        <span class="pull-right-container">
                            <span class="label bg-purple pull-right"><?=$this->fungsi->count_supplier()?></span>
                        </span>
                    </a>
                </li>

                <?php if($this->session->userdata('level') == 1) { ?>
                <li class="header">SETTINGS</li>
                <li class="<?=$this->uri->segment(1) == 'user' ? 'active' : null?>">
                    <a href="<?=site_url('user')?>"> <i class="fa fa-user">
                        </i> <span>Users / Employees</span>
                        <span class="pull-right-container">
                            <span class="label label-danger pull-right"><?=$this->fungsi->count_user()?></span>
                        </span>
                    </a>
                </li>
                <?php } ?>
                
            </ul>
        </section>
    </aside>

    <script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <?=$contents?>
    </div>

    <footer class="main-footer">
        <!-- <div class="pull-right hidden-xs"><b>Version</b> 0.1</div> -->
        <!-- <strong>Copyright &copy; <?=date('Y')?> - </strong> -->
    </footer>

    </div>

    <script src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/bower_components/PACE/pace.min.js"></script>
    <script src="<?=base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?=base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>
    <script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
    <script src="<?=base_url()?>assets/dist/js/demo.js"></script>

    <script src="<?=base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/bower_components/select2/dist/js/select2.full.min.js"></script>
    <script src="<?=base_url()?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

    <script>
    $(document).ready(function() {
        $(document).ajaxStart(function() { Pace.restart() })

        $('#table1').DataTable()
    })
    </script>

</body>
</html>