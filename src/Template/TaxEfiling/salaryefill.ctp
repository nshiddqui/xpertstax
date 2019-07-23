<div class="content-container-anchor overlay-container-anchor">
    <h2 class="title-anchor title-heading">Salary efilling</h2>
    <div class="progression-tab-container">
        <ul class="progression-etabs">
            <li class="progression-tab"><a href="#tab1">Salary eFile plus</a></li>
            <li class="progression-tab"><a href="#tab2">Salary eFile plus (assisted)</a></li>
            <li class="progression-tab"><a href="#tab3">Optimizer (assisted)</a></li>
        </ul>
        <!-- tab "panes" -->
        <div id="tab1" class="progression-div">
            <p>
                E-filing of tax returns verified with the I-T department database.<br><br>

                Are you a salaried employee willing to e-file your tax returns on your own? Then our Salary eFile plus plan is just for you. All tax returns under plus package are Verified, which means that, prior to e-filing, the ITR data is matched with the transactions of your PAN in the ITD database.
                <br><br>
                <b>Who's it for?</b>
                <br>
                Salary eFile plus is a starter plan for employees who are interested in self-preparing and e-filing verified tax returns. Verification of ITR with the I-T department database is important because all the transactions in the ITD database are under the lens of scrutiny by them. Any mismatch will surely lead to a notice from the department. With Salary eFile plus you can file your verified ITR1 or ITR2 within 10 minutes through authorized e-return intermediary.
                <br><br>
                <b>How does it work?</b>
                <br>
                It’s simple. You are allowed to have income from any source, whether it’s salary, house property, capital gains or other sources, except income from business or profession. Once you enter your Form 16 and income from other sources (if any), the servers will match your ITR data with the transactions against your PAN in the I-T department's database. Then depending on your sources of income, our system will automatically generate the correct ITR form for you. If a mismatch is detected with the I-T department database, you will be shown the various options to fix the mismatch. 
                <br>
                If your Form 16 has all the details and you have no additional details to report, simply <?= $this->Html->link('click here', ['controller' => 'Home', 'action' => 'form']) ?> to file your return via email. 
            </p>

        </div>
        <div id="tab2" class="progression-div">
            <p>Get your tax return prepared by an expert tax practitioner</p>

            <p>Salary eFile plus (assisted) introduces the facility of a ‘real’ income tax practitioner to review your I-T return. This is an added feature along with all the benefits that Salary eFile plus offers.
            </p>
            <br>
            <b>Who’s it for?</b>
            <p>Salary eFile plus (assisted) is for those salaried employees, who are not just interested in self-preparing and e-filing of tax returns, but who would also like the assistance of a tax professional to enter their data and review it for them. If a mismatch is detected during the verification of ITR data with the Form 26AS data, our tax professional will assist you in correcting the mismatch.
            </p>
            <br>
            <b>How does it work?</b>
            <p>
                While you retain the option to self-prepare your ITR, a ‘real’ tax professional will create your ITR based on the documents provided by you. To opt for this feature, you will have to mail the digital or scanned copies of your documents (except those related to Capital Gains) to Xperts Tax. The photocopies of these documents can also be submitted at Xperts Tax helpdesks (Applicable only at select employer locations).
            </p>
            <p>
                On receipt of the document, the assigned tax professional will get the data entry done for creation of the draft ITR. Once the ITR is ready, the tax professional would do a complete review the ITR for you so that you can eFile it without any doubt or hesitation!
            </p>
            <p>
                You can have income from any sources, whether itâ€™s salary, house property, or other sources, except income from capital gains and business or profession. Then depending on your sources of income, our system will automatically generate the correct ITR form for you, whether itâ€™s ITR1 or ITR2.
            </p>
            <br>
            <b>Package offerings</b>
            <ul>
                <li>
                    Self-preparing and e-filing income tax returns (including eFile by email or eFile by payroll portal)
                </li>
                <li>
                    Verification of ITR data with the Form 26AS data in the Income Tax Department's database
                </li>
                <li>
                    Preparing income tax returns with the help of a tax professional
                </li>
                <li> Review of ITR by the assigned tax professional*
                </li>
                <li>
                    Posting the review by the tax professional, (In this process, a checklist will be emailed to you along with your Draft ITR. Once you confirm this over an email, your return will be e-filed)*
                </li>
                <li>
                    Tracking of ITR-V status
                </li>
                <li>Sending reminder notifications via email
                </li>
                <li>
                    Depositing signed ITR-V to CPC (if drop-box facility is availed by your employer)
                </li>
                <li>
                    Foreign Income Solution: Services for overseas Indians - NRIs, Residents with foreign income, Expatriates, Foreign citizens.  
                </li>
            </ul> 
            * This service is automatically activated, only after payment has been made through your account at www.xpertstax.com TheXperts Tax promise Your draft ITR would be created within 48 hours of receipt of your documents Your ITR will be eFiled within 30 minutes of your clicking ‘eFile My Return’ Button Your ITR-V will be uploaded in your user account within 60 minutes of your clicking ‘eFile My Return’ Button Your signed ITR-V will be deposited to CPC within 2 days of drop-box clearance (Only applicable for users whose employer has opted for the drop-box facility) All your support queries will be responded within 24 hrs</div>
        <div id="tab3" class="progression-div">Apart from offering assistance in creation and review of Income Tax Return (ITR) by a 'real' tax professional, SBI eFile (Platinum) also offers a TaxVault where you can keep your tax related documents safe. It also has an add-on feature that allows tracking of your refunds and tax assessment order.</div>
    </div>

    <div class="clearfix"></div>

    <hr>




</div>
<?= $this->Html->script('easytabs/easytabs.min', ['block' => true]) ?>
<?php
$this->Html->scriptStart(['block' => 'scriptBottom']);
echo "jQuery(document).ready(function($) {  
	 $('.progression-tab-container').easytabs();
	
});";
$this->Html->scriptEnd();
?>
