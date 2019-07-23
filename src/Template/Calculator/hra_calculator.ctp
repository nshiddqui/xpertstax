<div class="content-container-anchor overlay-container-anchor">
    <h2 class="title-anchor title-heading">HRA Calculator â€“ Monthly & Yearly Calculations</h2>
    <div id="contact-wrapper">
        <form name="tds-calculate" id="contactform">
            <div id="for_year" class="medi-radio1">
                <div class="grid2column">HRA Calculation :</div>
                <div class="grid2column lastcolumn">
                    <input type="radio" id="tds_purchase" onclick="show_tds_return(this.value);" name="tds_purchase" value="year" checked="checked" class="fin_yr">&nbsp;&nbsp;Yearly&nbsp;&nbsp;
                    <input type="radio" id="tds_purchase" onclick="show_tds_return(this.value);" name="tds_purchase" value="month" class="fin_yr">&nbsp;&nbsp;Monthly
                </div>
            </div>                                                                                	

            <div id="tds_return_quarter_year">
                <div id="salary_div">
                    <div class="grid2column">Salary :</div>
                    <div class="grid2column lastcolumn">
                        <input type="text" class="box" name="salary" id="salary"  data-d-group="2" data-a-sign="">                                                    
                    </div>
                    <div class="clear"></div>
                </div> 
                <div id="hra_revceived_div">
                    <div class="grid2column">HRA Received :</div>
                    <div class="grid2column lastcolumn">
                        <input type="text" class="box" name="hra_received" id="hra_received"  data-d-group="2" data-a-sign="">                                                    
                    </div>
                    <div class="clear"></div>
                </div>    
                <div id="rent_paid_div">
                    <div class="grid2column">Rent Paid :</div>
                    <div class="grid2column lastcolumn">
                        <input type="text" class="box" name="rent" id="rent"  data-d-group="2" data-a-sign="">                                                    
                    </div>
                    <div class="clear"></div>
                </div>                                                      
                <div id="residence_div" class="medi-radio1">
                    <div class="grid2column">Place of residence :</div>
                    <div class="grid2column lastcolumn">
                        <input type="radio" id="residence_city" name="residence_city" value="metro" checked="checked" class="fin_yr">&nbsp;&nbsp;Metro City&nbsp;&nbsp;
                        <input type="radio" id="residence_city" name="residence_city" value="other" class="fin_yr">&nbsp;&nbsp;Other
                    </div>
                    <div class="grid2column lastcolumn-tip">
                        <p>(Delhi, Mumbai, Kolkata or Chennai)</p>
                    </div>
                </div>

                <div class="madi_table_btn" id="madi_table_btn">
                    <span id="hide_sub"><input type="button" class="box lod-btn" name="submit" value="Calculate" id="submit" onclick="tot_calculation();" style="margin-top: 8px;"></span>                                                  
                </div> 


                <div class="alert">
                    <p id="alert-box"></p>   
                </div>

                <div id="result_div" style="display: none;">
                    <div style="padding:  10px 0px; font-size: 20px; font-weight: bolder;">
                        <u>
                            RESULTS
                        </u>
                    </div>
                    <div id="result_1_div">
                        <div class="grid2column">HRA Exempt :</div>
                        <div class="grid2column lastcolumn">
                            <strong><p id="result_e" style="margin-bottom: 0px;"></p></strong>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div id="result_2_div">
                        <div class="grid2column"><p id="result_f" style="font-weight: 100;font-size: 14px;font-style: italic;"></p></div>                                                        
                        <div class="clear"></div>
                    </div>

                    <div class="madi_table_btn">                                                  
                        <span style="float:right;"><input type="reset" class="lod-btn" name="reset" value="Reset" id="reset" onclick="location.reload();" style="margin:8px 0px 0px 5px;padding: 5px 22px !important;"></span>
                    </div>
                </div>                                                
            </div>

            <div id="tds_return_quarter_month" style="display: none;">
                <div id="salary_div">
                    <table id="calculation_table" style="width:100%">
                        <tbody><tr>
                                <th>Month</th>
                                <th>Salary</th> 
                                <th>HRA Received</th>
                                <th>Rent Paid</th>
                                <th>City</th>
                                <th>HRA Exempt</th>
                            </tr>
                            <tr>
                                <td>April</td>
                                <td><input type="text" class="box" name="salary_0" id="salary_0" onchange="printSalary(0)" ></td> 
                                <td><input type="text" class="box" name="hra_0" id="hra_0" onchange="printHra(0)" ></td>
                                <td><input type="text" class="box" name="rent_10" id="rent_0" onchange="printRent(0)" ></td>
                                <td>
                                    <select name="city_1" id="city_0" onchange="printCity(0)" style="margin-top: 9px;">
                                        <option>-Select City-</option>
                                        <option value="other">Other</option>
                                        <option value="metro">Metro</option>                                                                
                                    </select>
                                </td>
                                <td><input type="text" class="box" name="hra_exempt_0" id="hra_exempt_0"  disabled="disabled"></td>
                            </tr>
                            <tr>
                                <td>May</td>
                                <td><input type="text" class="box" name="salary_1" id="salary_1" onchange="printSalary(1)" ></td> 
                                <td><input type="text" class="box" name="hra_1" id="hra_1" onchange="printHra(1)" ></td>
                                <td><input type="text" class="box" name="rent_11" id="rent_1" onchange="printRent(1)" ></td>
                                <td>
                                    <select name="city_1" id="city_1" onchange="printCity(1)" style="margin-top: 9px;">
                                        <option>-Select City-</option>
                                        <option value="other">Other</option>
                                        <option value="metro">Metro</option>                                                                
                                    </select>
                                </td>
                                <td><input type="text" class="box" name="hra_exempt_1" id="hra_exempt_1"  disabled="disabled"></td>
                            </tr>
                            <tr>
                                <td>June</td>
                                <td><input type="text" class="box" name="salary_2" id="salary_2" onchange="printSalary(2)" ></td> 
                                <td><input type="text" class="box" name="hra_2" id="hra_2" onchange="printHra(2)" ></td>
                                <td><input type="text" class="box" name="rent_12" id="rent_2" onchange="printRent(2)" ></td>
                                <td>
                                    <select name="city_1" id="city_2" onchange="printCity(2)" style="margin-top: 9px;">
                                        <option>-Select City-</option>
                                        <option value="other">Other</option>
                                        <option value="metro">Metro</option>                                                                
                                    </select>
                                </td>
                                <td><input type="text" class="box" name="hra_exempt_2" id="hra_exempt_2"  disabled="disabled"></td>
                            </tr>
                            <tr>
                                <td>July </td>
                                <td><input type="text" class="box" name="salary_3" id="salary_3" onchange="printSalary(3)" ></td> 
                                <td><input type="text" class="box" name="hra_3" id="hra_3" onchange="printHra(3)" ></td>
                                <td><input type="text" class="box" name="rent_13" id="rent_3" onchange="printRent(3)" ></td>
                                <td>
                                    <select name="city_1" id="city_3" onchange="printCity(3)" style="margin-top: 9px;">
                                        <option>-Select City-</option>
                                        <option value="other">Other</option>
                                        <option value="metro">Metro</option>                                                                
                                    </select>
                                </td>
                                <td><input type="text" class="box" name="hra_exempt_3" id="hra_exempt_3"  disabled="disabled"></td>
                            </tr>
                            <tr>
                                <td>August</td>
                                <td><input type="text" class="box" name="salary_4" id="salary_4" onchange="printSalary(4)" ></td> 
                                <td><input type="text" class="box" name="hra_4" id="hra_4" onchange="printHra(4)" ></td>
                                <td><input type="text" class="box" name="rent_14" id="rent_4" onchange="printRent(4)" ></td>
                                <td>
                                    <select name="city_1" id="city_4" onchange="printCity(4)" style="margin-top: 9px;">
                                        <option>-Select City-</option>
                                        <option value="other">Other</option>
                                        <option value="metro">Metro</option>                                                                
                                    </select>
                                </td>
                                <td><input type="text" class="box" name="hra_exempt_4" id="hra_exempt_4"  disabled="disabled"></td>
                            </tr>
                            <tr>
                                <td>September</td>
                                <td><input type="text" class="box" name="salary_5" id="salary_5" onchange="printSalary(5)" ></td> 
                                <td><input type="text" class="box" name="hra_5" id="hra_5" onchange="printHra(5)" ></td>
                                <td><input type="text" class="box" name="rent_15" id="rent_5" onchange="printRent(5)" ></td>
                                <td>
                                    <select name="city_1" id="city_5" onchange="printCity(5)" style="margin-top: 9px;">
                                        <option>-Select City-</option>
                                        <option value="other">Other</option>
                                        <option value="metro">Metro</option>                                                                
                                    </select>
                                </td>
                                <td><input type="text" class="box" name="hra_exempt_5" id="hra_exempt_5"  disabled="disabled"></td>
                            </tr>
                            <tr>
                                <td>October</td>
                                <td><input type="text" class="box" name="salary_6" id="salary_6" onchange="printSalary(6)" ></td> 
                                <td><input type="text" class="box" name="hra_6" id="hra_6" onchange="printHra(6)" ></td>
                                <td><input type="text" class="box" name="rent_16" id="rent_6" onchange="printRent(6)" ></td>
                                <td>
                                    <select name="city_1" id="city_6" onchange="printCity(6)" style="margin-top: 9px;">
                                        <option>-Select City-</option>
                                        <option value="other">Other</option>
                                        <option value="metro">Metro</option>                                                                
                                    </select>
                                </td>
                                <td><input type="text" class="box" name="hra_exempt_6" id="hra_exempt_6"  disabled="disabled"></td>
                            </tr>
                            <tr>
                                <td>November</td>
                                <td><input type="text" class="box" name="salary_7" id="salary_7" onchange="printSalary(7)" ></td> 
                                <td><input type="text" class="box" name="hra_7" id="hra_7" onchange="printHra(7)" ></td>
                                <td><input type="text" class="box" name="rent_17" id="rent_7" onchange="printRent(7)" ></td>
                                <td>
                                    <select name="city_1" id="city_7" onchange="printCity(7)" style="margin-top: 9px;">
                                        <option>-Select City-</option>
                                        <option value="other">Other</option>
                                        <option value="metro">Metro</option>                                                                
                                    </select>
                                </td>
                                <td><input type="text" class="box" name="hra_exempt_7" id="hra_exempt_7"  disabled="disabled"></td>
                            </tr>
                            <tr>
                                <td>December</td>
                                <td><input type="text" class="box" name="salary_8" id="salary_8" onchange="printSalary(8)" ></td> 
                                <td><input type="text" class="box" name="hra_8" id="hra_8" onchange="printHra(8)" ></td>
                                <td><input type="text" class="box" name="rent_18" id="rent_8" onchange="printRent(8)" ></td>
                                <td>
                                    <select name="city_1" id="city_8" onchange="printCity(8)" style="margin-top: 9px;">
                                        <option>-Select City-</option>
                                        <option value="other">Other</option>
                                        <option value="metro">Metro</option>                                                                
                                    </select>
                                </td>
                                <td><input type="text" class="box" name="hra_exempt_8" id="hra_exempt_8"  disabled="disabled"></td>
                            </tr>
                            <tr>
                                <td>January</td>
                                <td><input type="text" class="box" name="salary_9" id="salary_9" onchange="printSalary(9)" ></td> 
                                <td><input type="text" class="box" name="hra_9" id="hra_9" onchange="printHra(9)" ></td>
                                <td><input type="text" class="box" name="rent_19" id="rent_9" onchange="printRent(9)" ></td>
                                <td>
                                    <select name="city_1" id="city_9" onchange="printCity(9)" style="margin-top: 9px;">
                                        <option>-Select City-</option>
                                        <option value="other">Other</option>
                                        <option value="metro">Metro</option>                                                                
                                    </select>
                                </td>
                                <td><input type="text" class="box" name="hra_exempt_9" id="hra_exempt_9"  disabled="disabled"></td>
                            </tr>
                            <tr>
                                <td>February</td>
                                <td><input type="text" class="box" name="salary_10" id="salary_10" onchange="printSalary(10)" ></td> 
                                <td><input type="text" class="box" name="hra_10" id="hra_10" onchange="printHra(10)" ></td>
                                <td><input type="text" class="box" name="rent_110" id="rent_10" onchange="printRent(10)" ></td>
                                <td>
                                    <select name="city_1" id="city_10" onchange="printCity(10)" style="margin-top: 9px;">
                                        <option>-Select City-</option>
                                        <option value="other">Other</option>
                                        <option value="metro">Metro</option>                                                                
                                    </select>
                                </td>
                                <td><input type="text" class="box" name="hra_exempt_10" id="hra_exempt_10"  disabled="disabled"></td>
                            </tr>
                            <tr>
                                <td>March</td>
                                <td><input type="text" class="box" name="salary_11" id="salary_11" onchange="printSalary(11)" ></td> 
                                <td><input type="text" class="box" name="hra_11" id="hra_11" onchange="printHra(11)" ></td>
                                <td><input type="text" class="box" name="rent_111" id="rent_11" onchange="printRent(11)" ></td>
                                <td>
                                    <select name="city_1" id="city_11" onchange="printCity(11)" style="margin-top: 9px;">
                                        <option>-Select City-</option>
                                        <option value="other">Other</option>
                                        <option value="metro">Metro</option>                                                                
                                    </select>
                                </td>
                                <td><input type="text" class="box" name="hra_exempt_11" id="hra_exempt_11"  disabled="disabled"></td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td><input type="text" name="total_salary" id="total_salary" readonly="readonly" style="width:88px; margin-top: 9px;font-weight: 600;"></td> 
                                <td><input type="text" name="total_hra" id="total_hra" readonly="readonly" style="width:88px; margin-top: 9px;font-weight: 600;"></td>
                                <td><input type="text" name="total_rent" id="total_rent" readonly="readonly" style="width:88px; margin-top: 9px;font-weight: 600;"></td>
                                <td>
                                </td>
                                <td><input type="text" name="total_hra_exempt" id="total_hra_exempt" readonly="readonly" style="width:88px; margin-top: 9px;font-weight: 600;"></td>
                            </tr>
                        </tbody></table>
                </div> 

                <!--                                                <div class="madi_table_btn">                                                  
                                                                    <span style="float:right;"><a type="reset" class="lod-btn" name="reset" value="Reset" id="reset" onclick="tot_reset();"  style="margin:8px 0px 0px 5px;padding: 5px 22px !important;">Reset</a></span>
                                                                </div> -->









                <!-- FOR PDF PURPOSE -->

                &nbsp;&nbsp;<table id="calculation_table_pdf" style="width:100%; display: none;">
                    <tbody><tr>
                            <th>Month</th>
                            <th>Salary</th> 
                            <th>HRA Received</th>
                            <th>Rent Paid</th>
                            <th>City</th>
                            <th>HRA Exempt</th>
                        </tr>
                        <tr></tr>

                        <tr>
                            <td>April</td>
                            <td id="salary_pdf0" style=" text-align: right;"></td>
                            <td id="hra_pdf0"></td>
                            <td id="rent_pdf0"></td>
                            <td id="city_pdf0"></td>
                            <td id="hra_exempt_pdf_0"></td>
                        </tr>


                        <tr>
                            <td>May</td>
                            <td id="salary_pdf1" style=" text-align: right;"></td>
                            <td id="hra_pdf1"></td>
                            <td id="rent_pdf1"></td>
                            <td id="city_pdf1"></td>
                            <td id="hra_exempt_pdf_1"></td>
                        </tr>


                        <tr>
                            <td>June</td>
                            <td id="salary_pdf2" style=" text-align: right;"></td>
                            <td id="hra_pdf2"></td>
                            <td id="rent_pdf2"></td>
                            <td id="city_pdf2"></td>
                            <td id="hra_exempt_pdf_2"></td>
                        </tr>


                        <tr>
                            <td>July </td>
                            <td id="salary_pdf3" style=" text-align: right;"></td>
                            <td id="hra_pdf3"></td>
                            <td id="rent_pdf3"></td>
                            <td id="city_pdf3"></td>
                            <td id="hra_exempt_pdf_3"></td>
                        </tr>


                        <tr>
                            <td>August</td>
                            <td id="salary_pdf4" style=" text-align: right;"></td>
                            <td id="hra_pdf4"></td>
                            <td id="rent_pdf4"></td>
                            <td id="city_pdf4"></td>
                            <td id="hra_exempt_pdf_4"></td>
                        </tr>


                        <tr>
                            <td>September</td>
                            <td id="salary_pdf5" style=" text-align: right;"></td>
                            <td id="hra_pdf5"></td>
                            <td id="rent_pdf5"></td>
                            <td id="city_pdf5"></td>
                            <td id="hra_exempt_pdf_5"></td>
                        </tr>


                        <tr>
                            <td>October</td>
                            <td id="salary_pdf6" style=" text-align: right;"></td>
                            <td id="hra_pdf6"></td>
                            <td id="rent_pdf6"></td>
                            <td id="city_pdf6"></td>
                            <td id="hra_exempt_pdf_6"></td>
                        </tr>


                        <tr>
                            <td>November</td>
                            <td id="salary_pdf7" style=" text-align: right;"></td>
                            <td id="hra_pdf7"></td>
                            <td id="rent_pdf7"></td>
                            <td id="city_pdf7"></td>
                            <td id="hra_exempt_pdf_7"></td>
                        </tr>


                        <tr>
                            <td>December</td>
                            <td id="salary_pdf8" style=" text-align: right;"></td>
                            <td id="hra_pdf8"></td>
                            <td id="rent_pdf8"></td>
                            <td id="city_pdf8"></td>
                            <td id="hra_exempt_pdf_8"></td>
                        </tr>


                        <tr>
                            <td>January</td>
                            <td id="salary_pdf9" style=" text-align: right;"></td>
                            <td id="hra_pdf9"></td>
                            <td id="rent_pdf9"></td>
                            <td id="city_pdf9"></td>
                            <td id="hra_exempt_pdf_9"></td>
                        </tr>


                        <tr>
                            <td>February</td>
                            <td id="salary_pdf10" style=" text-align: right;"></td>
                            <td id="hra_pdf10"></td>
                            <td id="rent_pdf10"></td>
                            <td id="city_pdf10"></td>
                            <td id="hra_exempt_pdf_10"></td>
                        </tr>


                        <tr>
                            <td>March</td>
                            <td id="salary_pdf11" style=" text-align: right;"></td>
                            <td id="hra_pdf11"></td>
                            <td id="rent_pdf11"></td>
                            <td id="city_pdf11"></td>
                            <td id="hra_exempt_pdf_11"></td>
                        </tr>

                        <tr></tr>
                        <tr>
                            <td>Total</td>

                            <td id="total_salary_pdf" style="display:none;"></td>
                            <td id="total_hra_pdf" style="display:none;"></td>
                            <td id="total_rent_pdf" style="display:none;"></td>
                            <td>&nbsp;</td>
                            <td id="total_hra_exempt_pdf" style="display:none;"></td>

                        </tr>
                    </tbody></table>                                        

                <div class="madi_table_btn">                                                  
                    <span style="float:right;"><input type="reset" class="lod-btn" name="reset" value="Reset" id="reset" onclick="location.reload();" value="Reset" style="margin:8px 0px 0px 5px;padding: 5px 22px !important;"></span>
                </div> 

                <table id="particular" style="width:100%; display: none;">
                    <tbody><tr>
                            <th style="width:33%; ">&nbsp;</th>
                            <th style="width:33%; ">Particulars</th>
                            <th style="width:33%; ">&nbsp;</th>
                        </tr>
                        <tr>
                            <th style="width:50%; ">&nbsp;</th>
                            <th style="width:50%;">&nbsp;</th>
                        </tr>
                        <tr>
                            <th style="width:50%; ">HRA Calculation</th>
                            <th style="width:50%;" id="month_year">Monthly</th>
                        </tr>
                        <tr>
                            <th style="width:50%; ">&nbsp;</th>
                            <th style="width:50%;">&nbsp;</th>
                        </tr>

                    </tbody></table>

                <br>
                <div class="alert">
                    <p id="alert-box"></p>   
                </div>

            </div>

        </form>
    </div>
    <!-- close .content-container-anchor -->


    <div class="clearfix"></div>
</div>
<?= $this->Html->script('auto_numeric/auto_numeric', ['block' => 'scriptBottom']) ?>
<?= $this->Html->css('jquery_ui', ['plugin' => true]) ?>
<?= $this->Html->script('jquery_ui', ['block' => 'scriptBottom']) ?>
<?php
$this->Html->scriptStart(['block' => 'scriptBottom']);
echo 'var $jq = jQuery.noConflict();
        $jq(document).ready(function () {
            $jq(".box").autoNumeric({vMin: 0.00, vMax: 9999999.99, mDec: 2});
            $jq("#tds_return_quarter_month").hide();
            $jq("#result_div").hide();
        });

        function isInt(n) {
            return n % 1 === 0;
        }

        function convertInr(amount) {
            if (isInt(amount) == true)
            {
                var x = amount.toString();
                var lastThree = x.substring(x.length - 3);
                var otherNumbers = x.substring(0, x.length - 3);
                if (otherNumbers != "")
                {
                    lastThree = "," + lastThree;
                }
                var res = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
                res = res + ".00";
                return res;
            } else
            {
                var x = amount.toString();
                var afterPoint = "";
                if (x.indexOf(".") > 0)
                    afterPoint = x.substring(x.indexOf("."), x.length);
                x = Math.floor(x);
                x = x.toString();
                var lastThree = x.substring(x.length - 3);
                var otherNumbers = x.substring(0, x.length - 3);
                if (otherNumbers != "")
                    lastThree = "," + lastThree;
                var res = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree + afterPoint;
                return res;
            }
        }

        function remove_autonumber(amount) {
            amount = amount.replace(/,/g, "");
            amount = amount.replace(/\.00/g, "");
            return amount;
        }


        function show_tds_return(st) {

            if (st == "year") {
                $jq("#tds_return_quarter_year").show();
                $jq("#tds_return_quarter_month").hide();
            } else {
                $jq("#tds_return_quarter_year").hide();
                $jq("#tds_return_quarter_month").show();
            }
        }

        function tot_calculation() {

            var salary = $jq("#salary").val();
            salary = salary.replace(/,/g, "");
            salary = salary.replace(/\.00/g, "");

            var hra_received = $jq("#hra_received").val();
            hra_received = hra_received.replace(/,/g, "");
            hra_received = hra_received.replace(/\.00/g, "");

            var rent = $jq("#rent").val();
            rent = rent.replace(/,/g, "");
            rent = rent.replace(/\.00/g, "");

            var residence = $jq("#residence_city:checked").val();

            if (salary == "" || hra_received == "" || rent == "")
            {
                error = 1
                $jq("#alert-box").html("Required Field Cannot Be Blank");
            } else
            {
                $jq("#tds-calculate input").prop("disabled", true);
                $jq("#tds-calculate select").prop("disabled", true);
                $jq("#madi_table_btn").hide();
                $jq("#result_div").show("slow");
                $jq(".alert").hide();
                var ans_hra = hra_received;
                if (residence == "metro")
                {
                    var ans_salary = 0.50 * salary;
                    var detail_salary = "50% of Salary - ";
                }
                if (residence == "other")
                {
                    var ans_salary = 0.40 * salary;
                    var detail_salary = "40% of Salary - ";
                }
                var ans_rent = rent - (0.10 * salary);

                if (ans_rent < 0)
                {
                    ans_rent = 0.00;
                }

                var result_ans = Math.min(ans_hra, ans_salary, ans_rent);
                $jq("#result_e").html(convertInr(result_ans));
                var result_f = "HRA Received - Rs " + convertInr(ans_hra) + "<br/>" + detail_salary + " Rs " + convertInr(ans_salary) + "<br/>Rent Paid minus 10% of Salary - Rs " + convertInr(ans_rent);
                $jq("#result_f").html(result_f);
            }
        }


        function printSalary(val)
        {
            var i = val;
            var salaryId = "#salary_" + i;
            var salary = $jq(salaryId).val();

            var salaryId_pdf = "";

            for (i = i + 1; i <= 12; i++)
            {
                salaryId = "#salary_" + i;
                $jq(salaryId).val(salary);

                salaryId_pdf = "#salary_pdf" + (i - 1);
                $jq(salaryId_pdf).html(salary);

            }
            total("salary");
            hraexempt(val);
        }

        function printHra(val)
        {
            var i = val;
            var hraId = "#hra_" + i;
            var hra = $jq(hraId).val();

            var hraId_pdf = "";

            for (i = i + 1; i <= 12; i++)
            {
                hraId = "#hra_" + i;
                $jq(hraId).val(hra);

                hraId_pdf = "#hra_pdf" + (i - 1);
                $jq(hraId_pdf).html(hra);

            }
            total("hra");
            hraexempt(val);
        }

        function printRent(val)
        {
            var i = val;
            var rentId = "#rent_" + i;
            var rent = $jq(rentId).val();
            var rentId_pdf = "";
            for (i = i + 1; i <= 12; i++)
            {
                rentId = "#rent_" + i;
                $jq(rentId).val(rent);

                rentId_pdf = "#rent_pdf" + (i - 1);
                $jq(rentId_pdf).html(rent);

            }
            total("rent");
            hraexempt(val);
        }

        function printCity(val)
        {
            var i = val;
            var cityId = "#city_" + i;
            var city = $jq(cityId).val();

            var cityname = "";

            for (i = i + 1; i <= 12; i++)
            {
                cityId = "#city_" + i;
                $jq(cityId).val(city);

                cityname = "#city_pdf" + (i - 1);
                $jq(cityname).html(city);

            }
            hraexempt(val);
        }


        function total(type)
        {
            var tableID = "";
            var tableAmount = 0;
            var total = 0;
            for (var i = 0; i < 12; i++)
            {
                tableID = "#" + type + "_" + i;
                tableAmount = $jq(tableID).val();
                tableAmount = remove_autonumber(tableAmount);
                total = parseFloat(total) + parseFloat(tableAmount);
            }
            total = convertInr(total);
            total = total.replace(/\.00/g, "");
            $jq("#total_" + type).val(total);

            $jq("#total_" + type + "_pdf").html(total);
        }

        function hraexempt(val)
        {
            var i = val;
            for (i = val; i < 12; i++)
            {

                var salaryId = "#salary_" + i;
                var salary = $jq(salaryId).val();
                salary = remove_autonumber(salary);

                var hraId = "#hra_" + i;
                var hra = $jq(hraId).val();
                hra = remove_autonumber(hra);
                if (hra < 0)
                {
                    hra = 0;
                }

                var rentId = "#rent_" + i;
                var rent = $jq(rentId).val();
                rent = remove_autonumber(rent);



                var residence = $jq("#city_" + i).val();
                var ans_hra = hra;
                if (residence == "metro")
                {
                    var ans_salary = 0.50 * salary;
                }
                if (residence == "other")
                {
                    var ans_salary = 0.40 * salary;
                }
                var ans_rent = rent - (0.10 * salary);

                if (ans_rent < 0)
                {
                    ans_rent = 0.00;
                }

                var result_ans = Math.min(ans_hra, ans_salary, ans_rent);

                if (rent < 0)
                {
                    result_ans = 0.00;
                }

                if (residence != "metro" && residence != "other")
                {
                    result_ans = 0.00;
                }
                $jq("#hra_exempt_" + i).val(convertInr(result_ans));
                $jq("#hra_exempt_pdf_" + i).html(convertInr(result_ans));
            }
            total("hra_exempt");
        }


        function emailBox() {
            $jq("#email_box").show("slow");
            $jq("#email_box").focus();
            $jq("#pdf").attr("disabled", "disabled");
            $jq("#pdf").addClass("lod-btn-bckgrnd-clr");
        }

';
$this->Html->scriptEnd();
?>