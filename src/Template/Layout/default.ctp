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
        <!--?= $this->Html->css('https://fonts.googleapis.com/css?family=Tinos:400,700,400italic,700italic') ?-->
        <?= $this->Html->css('bootstrap.min') ?>
        <?= $this->Html->css('style') ?>
        <?= $this->Html->css('style_navigation/stellarnav') ?>
        <?= $this->Html->css('flex_slider/flexslider') ?>
        <?= $this->fetch('css') ?>
        <?= $this->Html->script('jquery.min') ?>
        <?= $this->Html->script('popper.min') ?>
        <?= $this->Html->script('bootstrap.min') ?>
        <?= $this->Html->script('style_navigation/stellarnav') ?>
        <?= $this->fetch('script'); ?>
        <style>
            /* styles for this sample only */
            *{ margin: 0; padding: 0; }
            body { font-family: 'Exo 2', sans-serif;  color: #555; }
            .header { text-align: center; }
            .header a { display: inline-grid;  text-decoration: none; color: #555; }
            @media only screen and (max-width : 1000px) {
                .stellarnav > ul > li > a { padding: 20px 23px; }
            }
            #header-search{
                position: absolute;
                top: 1px;
                right: 10px;
                display: inline-grid
            }
        </style>
    </head>
    <body>
        <?= $this->element('layout/public_header'); ?>
        <?= $this->Flash->render() ?>
        <div id="main">
            <div class="container">
                <?= $this->fetch('content') ?>
            </div>
        </div>
        <?= $this->element('layout/public_footer'); ?>
        <?= $this->fetch('scriptBottom'); ?>
    </body>
</html>