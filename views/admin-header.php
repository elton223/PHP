
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator	</title>
    <!-- Bootstrap Styles-->
    <link href="<?php echo TEMPLATEWEBPATHADMIN; ?>css/css/bootstrap.css"     rel="stylesheet" />
     <script src="<?php echo TEMPLATEWEBPATHADMIN; ?>js/jquery-1.10.2.js"></script>
    <!-- FontAwesome Styles-->
    <link href="<?php echo TEMPLATEWEBPATHADMIN; ?>js/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="<?php echo TEMPLATEWEBPATHADMIN; ?>js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="<?php echo TEMPLATEWEBPATHADMIN; ?>css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script src="<?php echo TEMPLATEWEBPATHADMIN; ?>js/jquery-2.1.1.min.js"></script>
</head>


<body>
<div id="wrapper">
    <nav class="navbar navbar-default top-navbar" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="content.php">  </a>

        </div>

        <ul class="nav navbar-top-links navbar-right" class="dropdown" class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
    </nav>
    <!--/. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu" class="fa fa-desktop" class="fa fa-sign-out">
                <?php if(!empty($PlatTopMenus)): ?>
                <?php foreach($PlatTopMenus as $MenuItem){ ?>
                    <li><a href="<?php if($MenuItem['menu_link_type'] == 'internal')
                    { echo $MenuItem['menu_internal_url']; } else
                        {echo $MenuItem['menu_external_url'];} ?>"
                           target="<?php echo $MenuItem['menu_target']; ?>">
                            <?php echo $MenuItem['menu_title']; ?></a>
                        <?php if (isset($MenuItem['children'])) { ?>
                            <ul>
                                <?php foreach ($MenuItem['children'] as $MenuSubItem){?><li><a href="<?php if($MenuSubItem['menu_link_type'] == 'internal') { echo $MenuSubItem['menu_internal_url']; } else {echo $MenuSubItem['menu_external_url'];} ?>" target="<?php echo $MenuSubItem['menu_target']; ?>"><?php echo $MenuSubItem['menu_title']; ?></a></li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                    </li>

                <?php } ?>

                <?php endif; ?>



            </ul>

        </div>

    </nav>