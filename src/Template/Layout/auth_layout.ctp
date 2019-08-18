<!DOCTYPE html>
<html>
    <head>
        <link rel="SHORTCUT ICON" href="/img/logo.png"/> 
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?= $this->Html->meta('icon') ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <?= $this->fetch('meta') ?>
        <meta name="description" content="">
        <title>
            XpertsTax: <?= $this->fetch('title') ?>
        </title>
        <!-- C3 charts css -->
        <?= $this->Html->css('/plugins/c3/c3.min') ?>
        <!-- App css -->
        <?= $this->Html->css('bootstrap.min') ?>
        <?= $this->Html->css('icons') ?>
        <?= $this->Html->css('metismenu.min') ?>
        <?= $this->Html->css('style_user') ?>
        <?= $this->Html->css('/plugins/spinkit/spinkit') ?>
        <?= $this->fetch('css') ?>
        <!-- Custom box css -->
        <link href="/plugins/custombox/css/custombox.min.css" rel="stylesheet">
        <?= $this->Html->script('modernizr.min') ?>
        <?= $this->fetch('script'); ?>
    </head>
    <body>
        <!-- Begin page -->
        <div id="wrapper">
            <?= $this->element('layout/auth_header'); ?>
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <?= $this->Flash->render() ?>
                        <?= $this->fetch('content') ?>
                    </div> <!-- container -->
                </div> <!-- content -->
                <footer class="footer text-right">
                    © 2015 All Rights Reserved. Developed by Xperts Tax
                </footer>
            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
        </div>
        <!-- END wrapper -->
        <?= $this->element('layout/auth_footer') ?>
        <?= $this->fetch('scriptBottom'); ?>
    </body>
</html>
