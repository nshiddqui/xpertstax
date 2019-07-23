
<div class="content-container-anchor overlay-container-anchor">
    <h2 class="title-anchor title-heading">Income Tax Calculator</h2>
    <div class="container">

        <div id="service" style="behavior:url(/webservice.htc); width:100%;">

            <iframe id="ifrmPrint" style="width: 0px; height: 0px" src="#"></iframe>
            <div id="printArea" class="table-responsive">
                <table id="yourTableIframe" style="width: 100%;" cellspacing="0" class="table">
                    <tbody>
                        <tr class="trbgcolor1">
                            <td colspan="3" align="center">
                                <strong><span style="font-size: 14pt">Income Tax Calculator</span></strong></td>
                        </tr>
                        <tr>
                            <td style="width: 100%" colspan="3">
                                <table style="width: 100%" cellspacing="0">
                                    <tbody>
                                        <tr class="trbgcolor2">
                                            <td style="width: 20%">
                                                <strong><span style="font-size: 10pt">Assesses Name</span></strong></td>
                                            <td style="width: 30%">
                                                <input id="TextBox19" width="150px" type="text">
                                            </td>
                                            <td style="width: 10%">
                                                <br></td>
                                            <td style="width: 10%">
                                                <br></td>
                                            <td style="width: 15%" align="left">
                                                <span style="font-size: 10pt"><strong>Financial Year</strong></span></td>
                                            <td style="width: 15%" align="right">
                                                <select id="Select1" style="width: 100px" onclick="ckeck_PER();">

                                                    <option value="2019" selected="selected">2019-2020</option>
                                                    <option value="2018">2018-2019</option>
                                                    <option value="2017">2017-2018</option>

                                                    <option value="2016">2016-2017</option>
                                                    <option value="2015">2015-2016</option>
                                                    <option value="2014">2014-2015</option>
                                                    <option value="2013">2013-2014</option>
                                                    <option value="2012">2012-2013</option>
                                                    <option value="2011">2011-2012</option>
                                                    <option value="2010">2010-2011</option>
                                                    <option value="2009">2009-2010</option>
                                                    <option value="2008">2008-2009</option>
                                                    <option value="2007">2007-2008</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr class="trbgcolor1">
                                            <td style="width: 20%">
                                                <span style="font-size: 10pt"><strong>Status of Tax Payer</strong></span></td>
                                            <td style="width: 30%">
                                                <select id="Select2" style="width: 155px" onchange="hideshow();">
                                                    <option value="Individual" selected="selected">Individual</option>
                                                    <option value="HUF">HUF</option>
                                                    <option value="Firm">Firm</option>
                                                    <option value="Company">Company</option>
                                                </select>
                                            </td>
                                            <td style="width: 10%">
                                                <div id="genderl">
                                                    <strong><span style="font-size: 10pt">Gender</span></strong>
                                                </div>
                                            </td>
                                            <td style="width: 10%">
                                                <div id="genderc">
                                                    <select id="Select4" style="width: 100px">
                                                        <option value="Male" selected="">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td style="width: 15%" align="left">
                                                <div id="seniorcitizenl">
                                                    <span style="font-size: 10pt"><strong>Senior Citizen</strong></span>
                                                </div>
                                                <div id="typel" style="display: none">
                                                    <span style="font-size: 10pt"><strong>Type</strong></span></div>
                                            </td>
                                            <td style="width: 15%" align="right">
                                                <div id="seniorcitizenc">
                                                    <select id="Select3" style="width: 100px">
                                                        <option value="Yes">Senior Citizen</option>
                                                        <option value="No" selected="">Not Senior Citizen</option>
                                                        <option value="VS">Very Senior Citizen</option>
                                                    </select>
                                                </div>
                                                <div id="typec" style="display: none">
                                                    <select id="Select5" style="width: 100px" onchange="hideshow();">
                                                        <option value="Domestic">Domestic</option>
                                                        <option value="Foreign">Foreign</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="trbgcolor2">
                                            <td style="width: 20%; font-size: 10pt">
                                                <strong id="lbl_TO" style="width: 20%; font-size: 10pt"></strong>
                                                <br></td>
                                            <td style="width: 30%">
                                                <div id="typeTO" style="display: none">
                                                    <select id="SelectTO" style="width: 155px">
                                                        <option value="-1">Select</option>
                                                        <option value="0">Upto 50 Crores</option>
                                                        <option value="1">More than 50 Crores</option>
                                                    </select>
                                                </div>
                                                <div id="typeTO1" style="display: none">
                                                    <select id="SelectTO1" style="width: 155px">
                                                        <option value="-1">Select</option>
                                                        <option value="0">Upto 250 Crores</option>
                                                        <option value="1">More than 250 Crores</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td style="width: 10%">
                                                <br></td>
                                            <td style="width: 10%">
                                                <br></td>
                                            <td style="width: 15%" align="right">
                                                <br></td>
                                            <td style="width: 15%" align="right">
                                                <br></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr class="trbgcolor1">
                            <td colspan="3" align="center">
                                <strong>Statement of Income and Tax</strong></td>
                        </tr>
                        <tr>
                            <td style="width: 100%" colspan="3">
                                <table class="paddingright" style="width: 100%" cellspacing="0" cellpadding="0" border="0">
                                    <tbody>
                                        <tr class="trbgcolor2" style="width: 100%">
                                            <td style="padding-left: 0px; font-weight: bold; font-size: 12pt; width: 55%; font-family: Arial">
                                                Income:</td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="padding-left: 20px; font-weight: bold; font-size: 10pt; width: 15%; font-family: Arial" colspan="2" align="center">
                                                Rs.</td>
                                        </tr>

                                        <tr class="trbgcolor1" id="tr_salary" style="width: 100%;">
                                            <td style="padding-left: 20px; font-weight: bold; font-size: 10pt; width: 55%; font-family: Arial">
                                                <div id="lbl_sal"> Salary (Enter taxable salary after standard deduction of Rs.50000) </div></td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" colspan="2" align="right">
                                                <input onkeypress="return DigitOnly(event);" name="txtSalary" id="txtSalary" style="width: 110px;
                                                       text-align: right" maxlength="16" type="text">
                                            </td>
                                        </tr>
                                        <tr class="trbgcolor2" style="width: 100%">
                                            <td style="padding-left: 20px; font-weight: bold; font-size: 10pt; width: 55%; font-family: Arial">
                                                Income from House Property</td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" colspan="2" align="right">
                                                <input onkeypress="return DigitOnly1(event);" id="txtIFHProperty" name="txtIFHProperty" onblur="return moreMinus(this);" style="width: 110px; text-align: right" maxlength="16" type="text">
                                            </td>
                                        </tr>
                                        <tr class="trbgcolor1" style="width: 100%">
                                            <td style="padding-left: 20px; font-weight: bold; font-size: 10pt; width: 55%; font-family: Arial">
                                                Business Income</td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" colspan="2" align="right">
                                                <input onkeypress="return DigitOnly2(event);" id="txtBIncome" name="txtBIncome" onblur="return moreMinus(this);" style="width: 110px; text-align: right" maxlength="16" type="text">
                                            </td>
                                        </tr>
                                        <tr class="trbgcolor2" style="width: 100%">
                                            <td style="padding-left: 20px; font-weight: bold; font-size: 10pt; width: 55%; font-family: Arial">
                                                Capital gains</td>
                                            <td style="width: 15%" align="center">
                                                <strong><span id="newtd" style="font-size: 10pt">STT @15%</span> </strong>
                                            </td>
                                            <td style="width: 15%" align="center">
                                                <strong><span style="font-size: 10pt">Others</span></strong></td>
                                            <td style="width: 15%" colspan="2" align="left">
                                                <br></td>
                                        </tr>
                                        <tr style="width: 100%; background-color: #fffff4">
                                            <td style="padding-left: 40px; font-weight: bold; font-size: 10pt; width: 55%; font-family: Arial">
                                                (a) Short term
                                            </td>
                                            <td style="width: 15%" align="center">
                                                <input onkeypress="return DigitOnly(event);" name="txtSOWSTTaxpaid" id="txtSOWSTTaxpaid" onblur="addST()" style="width: 90px; text-align: center" maxlength="16" type="text">
                                            </td>
                                            <td style="width: 15%" align="center">
                                                <input onkeypress="return DigitOnly(event);" id="txtOthers" name="txtOthers" onblur="addST()" style="width: 90px;
                                                       text-align: center" maxlength="16" type="text">
                                            </td>
                                            <td style="width: 15%" colspan="2" align="right">
                                                <input id="txtST" name="txtST" readonly="" style="width: 110px; text-align: right" type="text">
                                            </td>
                                        </tr>
                                        <tr class="trbgcolor2" style="width: 100%">
                                            <td style="width: 55%">
                                                <br></td>
                                            <td style="width: 15%" align="center">
                                                <strong><span style="font-size: 10pt">@10%</span></strong></td>
                                            <td style="width: 15%" align="center">
                                                <strong><span style="font-size: 10pt">@20%</span></strong></td>
                                            <td style="width: 15%" colspan="2" align="left">
                                                <br></td>
                                        </tr>
                                        <tr class="trbgcolor1" style="width: 100%">
                                            <td style="padding-left: 40px; font-weight: bold; font-size: 10pt; width: 55%; font-family: Arial">
                                                (b) Long term
                                            </td>
                                            <td style="width: 15%" align="center">
                                                <input onkeypress="return DigitOnly(event);" name="txt10Tax" id="txt10Tax" onblur="addLT()" style="width: 90px;
                                                       text-align: center" maxlength="16" type="text">
                                            </td>
                                            <td style="width: 15%" align="center">
                                                <input onkeypress="return DigitOnly(event);" id="txt20Tax" onblur="addLT()" style="width: 90px;
                                                       text-align: center" maxlength="16" type="text">
                                            </td>
                                            <td style="width: 15%" colspan="2" align="right">
                                                <input id="txtLT" readonly="" style="width: 110px; text-align: right" type="text">
                                            </td>
                                        </tr>
                                        <tr class="trbgcolor2" style="width: 100%">
                                            <td style="padding-left: 20px; font-weight: bold; font-size: 10pt; width: 55%; font-family: Arial">
                                                Income from other sources</td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" colspan="2" align="left">
                                                <br></td>
                                        </tr>
                                        <tr class="trbgcolor1" style="width: 100%">
                                            <td style="padding-left: 40px; font-weight: bold; font-size: 10pt; width: 55%; font-family: Arial">
                                                (a) Incomes(including interest,Dividend etc.)</td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" colspan="2" align="right">
                                                <input onkeypress="return DigitOnly(event);" id="txtOtherIncome" style="width: 110px;
                                                       text-align: right" maxlength="16" type="text">
                                            </td>
                                        </tr>
                                        <tr class="trbgcolor2" style="width: 100%">
                                            <td style="padding-left: 40px; font-weight: bold; font-size: 10pt; width: 55%; font-family: Arial">
                                                (b) Agriculture Income</td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" colspan="2" align="right">
                                                <input onkeypress="return DigitOnly(event);" id="txtAIncome" style="width: 110px;
                                                       text-align: right" maxlength="16" type="text">
                                            </td>
                                        </tr>
                                        <tr class="trbgcolor1" style="width: 100%">
                                            <td style="padding-left: 40px; font-weight: bold; font-size: 10pt; width: 55%; font-family: Arial">
                                                (c) Winning from lotteries 30%</td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" colspan="2" align="right">
                                                <input onkeypress="return DigitOnly(event);" id="txtWFCountries" style="width: 110px;
                                                       text-align: right" maxlength="16" type="text">
                                            </td>
                                        </tr>
                                        <tr class="trbgcolor2" style="width: 100%">
                                            <td style="padding-left: 0px; font-weight: bold; font-size: 12pt; width: 55%; font-family: Arial">
                                                Deduction under chapter VIA:</td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" align="right">
                                                <br></td>
                                        </tr>
                                        <tr class="trbgcolor1" id="deduction1" style="width: 100%" title="The maximum deduction under section 80C, 80CCC, &amp; 80CCD jointly should not exceed Rs.100,000/- ">
                                            <td style="padding-left: 20px; font-weight: bold; font-size: 10pt; width: 55%; font-family: Arial">
                                                Deduction u/s 80C,80CCC,80CCD
                                               <!-- <img title="The maximum deduction under section 80C, 80CCC, & 80CCD jointly should not exceed Rs.100,000/- "
                                                    src="helpicon.gif"/>-->

                                            </td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" align="right">
                                                <input onkeypress="return DigitOnly(event);" id="txtDUs80" name="txtDUs80" onblur="return chk_80c();" style="width: 110px; text-align: right" maxlength="6" type="text">
                                            </td>
                                        </tr>
                                        <tr class="trbgcolor2" id="deduction2" style="width: 100%" title="Under this section you can claim a maximum of Rs.25,000 for medical insurance premium paid for self, spouse and dependent children. An additional deduction of Rs.25,000 is allowed for medical insurance premium paid for parents. However if any of the person covered in the above policy is a senior citizen the above limits will be enhanced by Rs.25,000.">
                                            <td style="padding-left: 20px; font-weight: bold; font-size: 10pt; width: 55%; font-family: Arial">
                                                Deduction u/s 80 D (Mediclaim)
                                                <!--<img title="Under this section you can claim a maximum of Rs.15,000 for medical insurance premium paid for self, spouse and dependent children. 
    An additional deduction of Rs.15,000 is allowed for medical insurance premium paid for parents.
    However if any of the person covered in the above policy is a senior citizen the above limits will be enhanced by Rs.5,000."
                                                    src="helpicon.gif"/>-->
                                            </td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" align="right">
                                                <input onkeypress="return DigitOnly(event);" id="txtChildParent" onblur="return chk_80d();" style="width: 110px; text-align: right" maxlength="5" type="text">
                                            </td>
                                        </tr>
                                        <tr class="trbgcolor1" id="tr_88ta" style="width: 100%">
                                            <td style="padding-left: 20px; font-weight: bold; font-size: 10pt; width: 55%; font-family: Arial">
                                                Deduction u/s 80TTA 

                                            </td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" align="right">
                                                <input onkeypress="return DigitOnly(event);" id="txt_80tta" onblur="return chk_80tta();" style="width: 110px; text-align: right" maxlength="5" type="text">
                                            </td>
                                        </tr>
                                        <tr class="trbgcolor2" style="width: 100%">
                                            <td style="padding-left: 20px; font-weight: bold; font-size: 10pt; width: 55%; font-family: Arial">
                                                <strong><span id="otherdeduction">Other deduction </span></strong>
                                            </td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" colspan="2" align="right">
                                                <input onkeypress="return DigitOnly(event);" id="txtOtherDeduction" style="width: 110px;
                                                       text-align: right" maxlength="16" type="text">
                                            </td>
                                        </tr>
                                        <tr class="trbgcolor2" id="tr12" style="width: 100%; display: none;">
                                            <td style="padding-left: 0px; font-weight: bold; font-size: 12pt; width: 55%; font-family: Arial">
                                                Taxable Income</td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%; float:right;" colspan="2">
                                                <br></td>
                                        </tr>
                                        <tr class="trbgcolor1" id="tr13" style="width: 100%; display: none;">
                                            <td style="padding-left: 20px; font-weight: bold; font-size: 10pt; width: 55%; font-family: Arial">
                                                Normal Income</td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="font-size: 12pt; width: 15%" colspan="2" align="right">
                                                <strong><span id="NormalTaxIncome"></span>
                                                    <!--<input id="NormalTaxIncome" readonly="readonly" class="txtrightR" type="text" />-->
                                                </strong>
                                            </td>
                                        </tr>
                                        <tr class="trbgcolor2" id="tr14" style="width: 100%; display: none;">
                                            <td style="padding-left: 20px; font-weight: bold; font-size: 10pt; width: 55%; font-family: Arial">
                                                Special Income</td>
                                            <td style="font-size: 12pt; width: 15%" align="center">
                                                <br></td>
                                            <td style="font-size: 12pt; width: 15%" align="center">
                                                <br></td>
                                            <td style="font-size: 12pt; width: 15%" colspan="2" align="right">
                                                <strong><span id="SpecialIncome"></span></strong>
                                                <br></td>
                                        </tr>
                                        <tr class="trbgcolor1" id="tr15" style="font-size: 12pt; width: 100%; display: none;">
                                            <td style="font-weight: bold; font-size: 10pt; width: 55%; font-family: Arial" align="right">
                                                Total Taxable Income</td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" colspan="2" align="right">
                                                <strong><span id="totaltaxableincome"></span></strong>
                                                <br></td>
                                        </tr>
                                        <tr class="trbgcolor2" id="tr1" style="font-size: 12pt; width: 100%; display: none;">
                                            <td style="padding-left: 0px; font-weight: bold; font-size: 12pt; width: 55%; font-family: Arial">
                                                Income Tax</td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" colspan="2" align="right">
                                                <br></td>
                                        </tr>
                                        <tr class="trbgcolor1" id="tr2" style="font-size: 12pt; width: 100%; display: none;">
                                            <td style="padding-left: 20px; font-weight: bold; font-size: 10pt; width: 55%; font-family: Arial">
                                                Normal Tax</td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" colspan="2" align="right">
                                                <strong><span id="NormalIncome"></span></strong>
                                                <br></td>
                                        </tr>
                                        <tr class="trbgcolor2" id="tr3" style="width: 100%; display: none;">
                                            <td style="padding-left: 20px; font-weight: bold; font-size: 10pt; width: 55%; font-family: Arial">
                                                Special Tax</td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" colspan="2" align="right">
                                                <strong><span id="SpecialTaxIncome"></span></strong>
                                                <br></td>
                                        </tr>
                                        <tr class="trbgcolor1" id="tr4" style="width: 100%; display: none;">
                                            <td style="padding-left: 20px; font-weight: bold; font-size: 10pt; width: 55%; font-family: Arial">
                                                10/15 % Tax</td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" colspan="2" align="right">
                                                <strong><span id="tenpertax"></span></strong>
                                                <br></td>
                                        </tr>
                                        <tr class="trbgcolor2" id="tr5" style="width: 100%; display: none;">
                                            <td style="padding-left: 40px; font-weight: bold; font-size: 10pt; width: 55%; font-family: Arial">
                                                20% Tax</td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" colspan="2" align="right">
                                                <strong><span id="twentypertax"></span></strong>
                                                <br></td>
                                        </tr>
                                        <tr class="trbgcolor1" id="tr6" style="width: 100%; display: none;">
                                            <td style="padding-left: 40px; font-weight: bold; font-size: 10pt; width: 55%; font-family: Arial">
                                                Lottery Tax</td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" colspan="2" align="right">
                                                <strong><span id="lotery"></span></strong>
                                                <br></td>
                                        </tr>
                                        <tr class="trbgcolor2" id="tr7" style="width: 100%; display: none;">
                                            <td style="font-weight: bold; font-size: 10pt; width: 55%; font-family: Arial" align="right">
                                                Total Income Tax</td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" colspan="2" align="right">
                                                <strong><span id="total"></span></strong><br></td>
                                        </tr>
                                        <tr class="trbgcolor1" id="tr16" style="width: 100%; display: none;">
                                            <td style="font-weight: bold; font-size: 10pt; width: 55%; font-family: Arial" align="right">
                                                Rebate U/S 87</td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" colspan="2" align="right">
                                                <strong><span id="rebateu/s87"></span></strong><br></td>
                                        </tr>
                                        <tr class="trbgcolor2" id="tr8" style="width: 100%; display: none;">
                                            <td style="font-weight: bold; font-size: 10pt; width: 55%; font-family: Arial" align="right">
                                                Surcharge</td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" colspan="2" align="right">
                                                <strong><span id="surcharge"></span></strong><br></td>
                                        </tr>

                                        <tr class="trbgcolor1" id="tr9" style="width: 100%; display: none;">
                                            <td id="ECess" style="font-weight: bold; font-size: 10pt; width: 55%; font-family: Arial" align="right">
                                                Health &amp; Education Cess</td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" colspan="2" align="right">
                                                <strong><span id="educationcess"></span></strong><br></td>
                                        </tr>
                                        <tr class="trbgcolor2" id="tr10" style="width: 100%; display: none;">
                                            <td style="font-weight: bold; font-size: 10pt; width: 55%; font-family: Arial" align="right">
                                                Total Income Tax Liability</td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" colspan="2" align="right">
                                                <strong><span id="taxinclude"></span></strong><br></td>
                                        </tr>
                                        <tr class="trbgcolor1" style="width: 100%">
                                            <td style="padding-left: 0px; font-weight: bold; font-size: 12pt; width: 55%; font-family: Arial">
                                                Detail of Tax Paid:</td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" colspan="2" align="right">
                                                <br></td>
                                        </tr>
                                        <tr class="trbgcolor2" style="width: 100%">
                                            <td style="padding-left: 20px; font-weight: bold; font-size: 10pt; width: 55%; font-family: Arial">
                                                Tax Deducted at Source</td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" colspan="2" align="right">
                                                <input onkeypress="return DigitOnly(event);" id="txtTDASource" onblur="addTP()" style="width: 110px;
                                                       text-align: right" maxlength="16" type="text">
                                            </td>
                                        </tr>
                                        <tr class="trbgcolor1" style="width: 100%">
                                            <td style="padding-left: 20px; font-weight: bold; font-size: 10pt; width: 55%; font-family: Arial">
                                                Advance tax paid</td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" colspan="2" align="right">
                                                <input onkeypress="return DigitOnly(event);" id="txtATaxpaid" onblur="addTP()" style="width: 110px;
                                                       text-align: right" maxlength="16" type="text">
                                            </td>
                                        </tr>
                                        <tr class="trbgcolor2" style="width: 100%">
                                            <td style="padding-left: 20px; font-weight: bold; font-size: 10pt; width: 55%; font-family: Arial">
                                                Self assessment tax paid</td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" colspan="2" align="right">
                                                <input onkeypress="return DigitOnly(event);" id="txtSATaxpaid" onblur="addTP()" style="width: 110px;
                                                       text-align: right" maxlength="16" type="text">
                                            </td>
                                        </tr>
                                        <tr class="trbgcolor1" style="width: 100%">
                                            <td style="font-weight: bold; font-size: 10pt; width: 55%; font-family: Arial" align="right">
                                                Total Taxpaid</td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" align="center">
                                                <br></td>
                                            <td style="width: 15%" colspan="2" align="right">
                                                <input id="txttotaltaxpaid" style="width: 110px; text-align: right;" type="text">
                                            </td>
                                        </tr>
                                        <tr class="trbgcolor2" id="tr11" style="width: 100%; display: none;">
                                            <td class="tdh1" style="width: 55%" align="right">
                                                <strong><span id="pay_ref"></span></strong>
                                                <br></td>
                                            <td style="width: 15%" align="right">
                                                <br></td>
                                            <td style="width: 15%" align="right">
                                                <br></td>
                                            <td style="width: 15%" colspan="2" align="right">
                                                <strong><span id="payble"></span></strong>
                                                <br></td>
                                        </tr>
                                        <tr class="trbgcolor1" id="trprint" style="width: 100%">
                                            <td class="tdh1" style="width: 100%" colspan="5" align="center">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <input style="width: 85px" value="Calculate" id="Calculate" name="Calculate" type="button"> 
                                                            </td>
                                                            <td>
                                                                <input style="width: 70px" onclick="javascript:goback();" value="Back" name="Cancel" type="button">
                                                            </td>
                                                            <td>
                                                                <input id="btn_print" style="width: 70px" value="Print" onclick="Callprint('printArea');" type="button">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
