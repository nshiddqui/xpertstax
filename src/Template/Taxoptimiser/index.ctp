<div class="content-container-anchor overlay-container-anchor">
    <h2 class="title-anchor title-heading">Tax Optimizer</h2>
    <div class="progression-tab-container">
        <ul class="progression-etabs">
            <li class="progression-tab"><a href="#tab1">Full-year Tax Optimizer (salary)</a></li>
            <li class="progression-tab"><a href="#tab2">Full-year Tax Optimizer (business)</a></li>

        </ul>
        <!-- tab "panes" -->
        <div id="tab1" class="progression-div">
            <p>
                TaxOptimizer is a full-year subscription service that helps you minimize your tax payment through: 
            <ul>
                <li>An online solution that redesigns your salary package to provide more tax-efficient options.You get detailed computation of 35 important variables which determine your tax payment.
                </li>
                <li>Premium ITR filing, assisted by a Chartered Accountant.
                </li>
                <li>Round-the-year access to a Chartered Accountant, who further customizes these options for you and also answers any specific tax query you may have.
                </li>
            </ul>
            TaxOptimizer also caters to those employees who like peace of mind throughout the year and would like to stay prepared for any notice (s) from the I-T department. It keeps your tax documents safe in a vault for up to or more than 8 years, in case of scrutiny assessment, along with e-filing tax returns.
            </p>

        </div>
        <div id="tab2" class="progression-div">
            <p>
                Business TaxOptimizer is a tax planning solution for business professionals. You will be assigned a dedicated chartered accountant who will interact with you via email and phone (if required) and assist you with all your tax compliance, accounting, and planning needs.
                <br><br>
                Business TaxOptimizer is a tax planning solution for business professionals. You will be assigned a dedicated chartered accountant who will interact with you via email and phone and assist you with all your tax compliance and planning needs. Interact with the tax professional when ever you need, at your convenience.
                <br><br>

                <b>Who should use Business TaxOptimizer</b>
                Professionals and business persons who want to plan their taxes with professional assistance. This is a full-year subscription package, where you get full year access to dedicated tax professional.
                <br>
                <b>What is included in Business TaxPlan*</b>
            <ul>
                <li>
                    All the services of Business eFile Premium
                </li>
                <li>Phone based support to answer your queries (8 sessions of 15 min each for the year)
                </li>
                <li>Answer to tax planning related questions via email (12 tickets for the year)
                </li>
                <li>Rectification filing of ITR in case of error in original return made by the user
                </li>
                <li>Reminder notifications via SMS
                </li>
                <li>Interpretation of intimation notice</li>
                * This service is automatically activated only after fee payment has been received in your user account at www.xpertstax.com
                <br><br>
                <b>What is not included in Business TaxOptimizer</b>
                <ul>
                    <li>
                        Representation to income tax department
                    </li>
                    <li>Certifications and Audits</li>
                </ul>
                <br><br>
                <b>Service Level Agreement (SLA)</b>
                <ul>
                    <li>
                        Tax professional assigned: within 30 min of receipt of payment
                    </li>
                    <li>On-phone conversation with tax professional: within 8 hrs of receiving email request for a phone conversation
                    </li>
                    <li>Return data entry by Xperts Tax professional: within 48 hrs of a) either receipt of documents by Xperts Tax helpdesk, or, b) email receipt of your scanned documents (Note that data entry will start only after fee payment has been received)
                    </li>
                    <li>Review checklist and draft ITR emailed to user: within 8 hrs of completion of data entry
                    </li>
                    <li>ITR e-filed with income tax department: within 30 min of clicking "Efile My Return" button
                    </li>
                    <li>ITR-V uploaded in your user account: within 60 min of clicking "Efile My Return" button
                    </li>
                    <li>Deposit of signed ITR-V to CPC: within 2 days of drop-box clearance (if employer opted for drop-box)
                    </li>
                    <li>Ticket number for customer support email: within 5 min of receipt of email by Xperts Tax server
                    </li>
                    <li>Response to the ticket via email: within 8 hours of ticket number generation
                    </li>
                </ul>
        </div>


        <div class="clearfix"></div>

        <hr>



    </div>
</div>

<?= $this->Html->script('easytabs/easytabs.min', ['block' => true]) ?>
<?php
$this->Html->scriptStart(['block' => 'scriptBottom']);
echo "jQuery(document).ready(function($) {  
	 $('.progression-tab-container').easytabs();
	
});";
$this->Html->scriptEnd();
?>
