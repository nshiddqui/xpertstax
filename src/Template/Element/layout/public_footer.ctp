<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <h5>Our Mission</h5>
                <p>The mission of the firm, Xperts Tax is to excel services in the fields of Financial Consultancy, Accounting, Auditing, Project Consultancy, MIS, Taxation, Corporate, Industrial and Allied Laws, Management Consultancy Services etc.<a href="contact.php">Read More</a> </p>
            </div>

            <div class="col-md-3">
                <h5>Site Map</h5>
                <ul>
                    <li><?= $this->Html->link('Login', ['controller' => 'User', 'action' => 'index', 'prefix' => 'admin']) ?></li>
                    <li><a href="javascript:void(0)">Entries RSS</a></li>
                    <li><a href="javascript:void(0)">Comments RSS</a></li>
                    <li><a href="javascript:void(0)">WordPress.org</a></li>
                </ul>
            </div>

            <div class="col-md-3">
                <h5>Head Office </h5>
                <P>
                <h6>Xperts Tax </h6>
                <strong>Address: </strong>C-15 Qutub Vihar<br>Near Dwarka Sec-19<br>New Delhi<br>
                <strong>Tel:</strong>+91 9654540332<br>
                <a href="mailto:xpertstax@yahoo.com">xpertstax@yahoo.com</a></P>
            </div>

            <div class="col-md-3">
                <h5>Branch Office </h5>
                <P>
                <h6>Xperts Tax</h6>
                <strong>Address: </strong>52/45 Parbhat Road<br>Karol Bagh<br>New Delhi-05<br>
                <strong>Tel:</strong>+91 8802933545<br>
                <a href="mailto:xpertstax@yahoo.com">xpertstax@yahoo.com</a></P>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div id="copyright">
        <div class="container-fluid">
            <div class=" row">
                <div class="col-8 text-left">
                    &copy; 2015 All Rights Reserved.  Developed by <a href="" target="_blank">Xperts Tax </a>
                </div>
                <div class="col-4 text-right">
                    <div class="icons">
                        <a href="http://facebook.com/" class="facebook-ico" target="_blank"><div alt="f204" class="genericon genericon-facebook-alt"></div></a>
                        <a href="javascript:void(0)" class="twitter-ico" target="_blank"><div alt="f202" class="genericon genericon-twitter"></div></a>
                        <a href="javascript:void(0)" class="vimeo-ico" target="_blank"><div alt="f212" class="genericon genericon-vimeo"></div></a>
                        <a href="javascript:void(0)" class="pinterest-ico" target="_blank"><div alt="f210" class="genericon genericon-pinterest-alt"></div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        jQuery('.stellarnav').stellarNav({
            theme: '#222',
            breakpoint: 1183,
            position: 'left',
            phoneBtn: '18009997788',
            locationBtn: 'https://www.google.com/maps'
        });
    });
</script>
