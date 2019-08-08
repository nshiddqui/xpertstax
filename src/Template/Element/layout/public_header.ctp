<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    Tawk_API.onLoad = function(){
    Tawk_API.addTags(['hello', 'world'], function(error){});
};
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/56ee36f30b531a6d16d8f5f5/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->
<header>
    <div class="header">
        <?=
        $this->Html->image("logo.png", [
            "alt" => "XpertsTax",
            'url' => ['controller' => 'Home', 'action' => 'index'],
            'style' => 'height:65px'
        ]);
        ?>
    </div>
    <div id="header-search">
        <div class="icons">
            <a href="https://www.facebook.com/xpertstax" class="facebook-ico" target="_blank"><div alt="f204" class="genericon genericon-facebook-alt"></div></a>
            <a href="javascript:void(0)" class="twitter-ico" target="_blank"><div alt="f202" class="genericon genericon-twitter"></div></a>
            <a href="javascript:void(0)" class="linkedin-ico" target="_blank"><div alt="f208" class="genericon genericon-linkedin-alt"></div></a>
        </div>

    </div>
    <div class="stellarnav">
        <ul>
            <li>
                <a href="javascript:void(0)">Tax eFiling</a>
                <ul>
                    <li>
                        <?= $this->Html->link('Salary efile', ['controller' => 'tax_efiling', 'action' => 'salaryefill']) ?>
                    </li>
                    <li>
                        <?= $this->Html->link('Investor efile', 'javascript:void(0)') ?>
                    </li>
                    <li>
                        <?= $this->Html->link('Business efile', 'javascript:void(0)') ?>
                    </li>
                </ul>
            </li>
            <li>
                <?= $this->Html->link('Tax Optimizer', ['controller' => 'taxoptimiser', 'action' => 'index']) ?>
            </li>

            <li>
                <a href="javascript:void(0)">Services</a>
                <ul>
                    <li>
                        <?= $this->Html->link('Income Tax', ['controller' => 'services', 'action' => 'incometax']) ?>
                    </li>
                    <li>
                        <?= $this->Html->link('GST', ['controller' => 'services', 'action' => 'gst']) ?>
                    </li>
                    <li>
                        <?= $this->Html->link('Service Tax Consultancy', ['controller' => 'services', 'action' => 'servicetax']) ?>
                    </li>
                    <li>
                        <?= $this->Html->link('Sales Tax Consultancy', ['controller' => 'services', 'action' => 'saletax']) ?>
                    </li>
                    <li>
                        <?= $this->Html->link('Accounting Services', ['controller' => 'services', 'action' => 'accounting']) ?>
                    </li>
                    <li>
                        <?= $this->Html->link('Company Compliance Consultancy', ['controller' => 'services', 'action' => 'companylaw']) ?>
                    </li>
                    <li>
                        <?= $this->Html->link('Auditing & Assurance Services', ['controller' => 'services', 'action' => 'audit']) ?>
                    </li>
                    <li>
                        <?= $this->Html->link('HR Solution', ['controller' => 'services', 'action' => 'hr_solution']) ?>
                    </li>
                    <li>
                        <?= $this->Html->link('Other Services', ['controller' => 'services', 'action' => 'index']) ?>
                    </li>



                </ul>
            </li>
            <li>
                <a href="javascript:void(0)">Knowledge Bank</a>
                <ul>
                    <li>
                        <a href="javascript:void(0)">Calculators</a>
                        <ul style="width:250px;">
                            <li>
                                <?= $this->Html->link('GST Calculator', ['controller' => 'calculator', 'action' => 'gst_calculator']) ?>
                            </li>
                            <li>
                                <?= $this->Html->link('Tax Calculator', ['controller' => 'calculator', 'action' => 'tax_calculator']) ?>
                            </li>
                            <li>
                                <?= $this->Html->link('TDS – Late Payment Interest Calculator', ['controller' => 'calculator', 'action' => 'tds_late_payment__calculator']) ?>
                            </li>
                            <li>
                                <?= $this->Html->link('TDS Return – Due Date & Penalty Calculator', ['controller' => 'calculator', 'action' => 'tds_return_payment__calculator']) ?>
                            </li>
                            <li>
                                <?= $this->Html->link('Calculate Net Profit', ['controller' => 'calculator', 'action' => 'net_profit_calculator']) ?>
                            </li>
                            <li>
                                <?= $this->Html->link('HRA Calculator – Monthly & Yearly Calculations', ['controller' => 'calculator', 'action' => 'hra_calculator']) ?>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <?= $this->Html->link('Files & Presentations', ['controller' => 'Home', 'action' => 'documents']) ?>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:void(0)">News</a>
                <ul style="width:250px;">
                    <li>
                        <?= $this->Html->link('Business News', ['controller' => 'Home', 'action' => 'news', 'business']) ?>
                    </li>
                    <li>
                        <?= $this->Html->link('National News', ['controller' => 'Home', 'action' => 'news', 'national']) ?>
                    </li>
                    <li>
                        <?= $this->Html->link('International News', ['controller' => 'Home', 'action' => 'news', 'international']) ?>
                    </li>
                </ul>
            </li>
            <li>
                <?= $this->Html->link('Contact Us', ['controller' => 'Home', 'action' => 'contact_us']) ?>

            </li>
            <li>
                <?= $this->Html->link('Training Video', 'https://www.youtube.com/channel/UCBNmSzfHMWw3sIsTNuyKlYQ', ['target' => '_BLANK']) ?>
            </li>
            <li>
                <?= $this->Html->link('Blog', ['controller' => 'Home', 'action' => 'blog']) ?>
            </li>
        </ul>
    </div>
</header>
<div id="contact-header" style="padding:5px;">
        <div class="width-container" style="width:100%;"><div id="contact-header-text" style="padding-left:0px; margin-left:0px;font-size: 20px;color: #fffffffa;"><marquee onmouseover="this.stop();" onmouseout="this.start();"><strong>Feel free to call</strong> <em><a href="javascript:void(0)">Support & Help</a></em>  &nbsp;&nbsp; <!--<strong></strong>--> <em>+91 8802933545, +91 8860293328, +91 9654540332</em></marquee></div></div><!-- close .width-container -->
</div>

<div id="page-title">
    <?php
    if ($queryParams['controller'] === 'Home' && $queryParams['action'] === 'index') {
        ?>
        <?= $this->Html->css('flex_slider/flexslider', ['plugin' => false]) ?>
        <?= $this->Html->script('flex_slider/flexslider', ['block' => 'scriptBottom']) ?>
        <div style="overflow-x: hidden;display: inline-block">
            <div class = "flexslider" id = "homepage-slider">
                <ul class = "slides">
                    <li>
                        <?=
                        $this->Html->image("demo/slide1.jpg", [
                            "alt" => "Slider",
                            'url' => 'javascript:void(0)',
                        ]);
                        ?>
                    </li>
                    <li>
                        <?=
                        $this->Html->image("demo/slide2.jpg", [
                            "alt" => "Slider",
                            'url' => 'javascript:void(0)',
                        ]);
                        ?>
                    </li>
                    <li>
                        <?=
                        $this->Html->image("demo/slide3.jpg", [
                            "alt" => "Slider",
                            'url' => 'javascript:void(0)',
                        ]);
                        ?>
                    </li>

                </ul>
            </div>
        </div>
        <?php
        // Append into the 'script' block.
        $this->Html->scriptStart(['block' => 'scriptBottom']);
        echo 'jQuery(document).ready(function ($) {
                $("#homepage-slider").flexslider({
                    animation: "fade", //String: Select your animation type, "fade" or "slide"
                    slideshow: true, //Boolean: Animate slider automatically
                    slideshowSpeed: 3500, //Integer: Set the speed of the slideshow cycling, in milliseconds
                    animationDuration: 250, //Integer: Set the speed of animations, in milliseconds
                    directionNav: true, //Boolean: Create navigation for previous/next navigation? (true/false)
                    controlNav: true, //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
                    keyboardNav: true, //Boolean: Allow slider navigating via keyboard left/right keys
                    mousewheel: false, //Boolean: Allow slider navigating via mousewheel
                    prevText: " ", //String: Set the text for the "previous" directionNav item
                    nextText: " ", //String: Set the text for the "next" directionNav item
                    pausePlay: false, //Boolean: Create pause/play dynamic element
                    pauseText: "Pause", //String: Set the text for the "pause" pausePlay item
                    playText: "Play", //String: Set the text for the "play" pausePlay item
                    randomize: false, //Boolean: Randomize slide order
                    slideToStart: 0, //Integer: The slide that the slider should start on. Array notation (0 = first slide)
                    useCSS: true,
                    animationLoop: true, //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
                    pauseOnAction: true, //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
                    pauseOnHover: false            //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
                });
            });';
        $this->Html->scriptEnd();
        ?>
    <?php } else { ?>
        <!--?= $this->Html->css('backstrtch/backstrtch', ['plugin' => false]) ?-->
        <?= $this->Html->script('backstretch/backstretch.min', ['block' => 'scriptBottom']) ?>
        <div id="page-title-page"></div>
        <?php
        $this->Html->scriptStart(['block' => 'scriptBottom']);
        echo 'jQuery(document).ready(function ($) {
                $("#page-title-page").backstretch([
                    "/img/demo/page-title-1.jpg"
                ], {duration: 3000, fade: 500});
            });';
        $this->Html->scriptEnd();
    }
    ?>
</div>
