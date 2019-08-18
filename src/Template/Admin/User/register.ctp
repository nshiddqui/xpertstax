
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?= $this->Html->meta('icon') ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <?= $this->fetch('meta') ?>
        <meta name="description" content="">
        <title>
            <?= $this->fetch('title') ?>
        </title>
        <!-- C3 charts css -->
        <?= $this->Html->css('/plugins/c3/c3.min') ?>
        <!-- App css -->
        <?= $this->Html->css('bootstrap.min') ?>
        <?= $this->Html->css('icons') ?>
        <?= $this->Html->css('metismenu.min') ?>
        <?= $this->Html->css('style_user') ?>

        <?= $this->fetch('css') ?>
        <!-- Custom box css -->
        <link href="/plugins/custombox/css/custombox.min.css" rel="stylesheet">
        <?= $this->Html->script('modernizr.min') ?>
        <?= $this->fetch('script'); ?>
    </head>

    <body class="bg-accpunt-pages">

        <!-- HOME -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="account-pages">
                                <div class="account-box">
                                    <div class="account-logo-box">
                                        <h2 class="text-uppercase text-center">
                                            <a href="/" class="text-success">
                                                <span><?= $this->Html->image('logo.png', ['height' => 140]) ?></span>
                                            </a>
                                        </h2>
                                        <h5 class="text-uppercase font-bold">Register</h5>
                                        <p class="m-b-0">Get access to our admin panel</p>
                                    </div>
                                    <div class="account-content">
                                        <?= $this->Form->create($user, ['class' => 'form-horizontal', 'templates' => false]) ?>
                                        <?= $this->Form->control('company_name') ?>
                                        <?= $this->Form->control('pan_number') ?>
                                        <?= $this->Form->control('password', ['type' => 'password']) ?>
                                        <div class="form-group row m-b-20">
                                            <div class="col-12">

                                                <div class="checkbox checkbox-success">
                                                    <input id="remember" type="checkbox" checked="">
                                                    <label for="remember">
                                                        I accept <a href="javascript:void(0)">Terms and Conditions</a>
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                        <?= $this->Form->button('Register') ?>
                                        <?= $this->Form->end() ?>
                                        <div class="row m-t-50">
                                            <div class="col-12 text-center">
                                                <p class="text-muted">Already have an account?  <?= $this->Html->link('Log In', ['controller' => 'User', 'action' => 'login'], ['class' => 'text-dark font-bold']) ?></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- end card-box-->
                            </div>


                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
        </section>
        <!-- END HOME -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="/js/jquery.min.js"></script>
        <script src="/js/popper.min.js"></script><!-- Popper for Bootstrap -->
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/metisMenu.min.js"></script>
        <script src="/js/waves.js"></script>
        <script src="/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="/js/jquery.core.js"></script>
        <script src="/js/jquery.app.js"></script>

    </body>

    <!-- Mirrored from coderthemes.com/adminox/default/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Apr 2019 04:15:40 GMT -->
</html>

