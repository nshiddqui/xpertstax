<div class="container">
    <div class="row">
        <div id="content-container" class="col-xl-8 col-12">

            <div class="content-container-anchor overlay-container-anchor">
                <h2 class="title-anchor title-heading">Contact us</h2>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.7584788018767!2d77.02449630000001!3d28.577014399999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1a97266d9b9b%3A0x43b6df7d9e80bfb!2sJhankar+Rd%2C+Qutub+Vihar%2C+New+Delhi%2C+Delhi+110071!5e0!3m2!1sen!2sin!4v1434475951024" width="100%" height="100%" frameborder="0" style="border:0"></iframe>
                <p>The mission of the firm, Xperts Tax is to excel services in the fields of Financial Consultancy, Accounting, Auditing, Project Consultancy, MIS, Taxation, Corporate, Industrial and Allied Laws, Management Consultancy Services etc. through quality, integrity and punctuality and to provide the same to the clients by a team of independent professionals of respective fields theyâ€™re by enhancing the sustained growth of the user of services of the firm vis-Ã -vis the associates of the firms.</p>

                <hr>

                <div id="contact-wrapper">
                    <?= $this->Html->script('validate.min', ['block' => true]) ?>
                    <?php
                    $this->Html->scriptStart(['block' => 'scriptBottom']);
                    echo 'jQuery(document).ready(function () {
                            jQuery("#contactform").validate();
                        });';
                    $this->Html->scriptEnd();
                    ?>
                    <form method="post" action="" id="contactform">
                        <div><input type="text" size="28" name="name" id="contactname" value="" class="required" placeholder="Name*" /></div>

                        <div><input type="text" size="28" name="phone" id="email" value="" class="required" placeholder="Phone*" /></div>

                        <div><textarea rows="12" cols="38" name="message" id="message" placeholder="Enter a message"></textarea></div>

                        <div><input type="submit" value="Send Message" name="submit" class="submit" /></div>
                    </form>

                </div><!-- close #contact-wrapper -->

            </div><!-- close .content-container-anchor -->

        </div><!-- close #content-container -->


        <div id="sidebar" class="col-xl-4 col-12">
            <div class="content-container-anchor overlay-container-anchor">
                <h5>Head Office</h5>

                <h6>Xperts Tax</h6>


                <ul>
                    <li><strong>Address: </strong>C-15 Qutub Vihar<br>Near Dwarka Sec-19<br>New Delhi<br></li>
                    <li><strong>Tel:</strong>+91 8802933545<br></li>
                    <li><a href="mailto:xpertstax@yahoo.com">xpertstax@yahoo.com</a></li>
                </ul>
                <div class="sidebar-divider"></div>


                <h5>Branch Office</h5>
                <h6>Xperts Tax</h6>


                <ul>
                    <li><strong>Address: </strong>52/45 Parbhat Road<br>Karol Bagh<br>New Delhi-05<br></li>
                    <li><strong>Tel:</strong>+91 8802933545<br></li>
                    <li><a href="xpertstax@yahoo.com">xpertstax@yahoo.com</a></li>
                </ul>

                <div class="sidebar-divider"></div>

                <div class="sidebar-divider"></div>


            </div><!-- close .content-container-anchor -->
        </div>

    </div>
</div>

