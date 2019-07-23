<div class="content-container-anchor overlay-container-anchor">
    <h2 class="title-anchor title-heading">TDS Return -- Due Date & Penalty Calculator</h2>
    <div id="contact-wrapper">
        <form name="tds-calculate" id="contactform">
            <div id="tds_amount_div">
                <div class="grid2column">Is this TDS is on purchase on Immovable property :</div>
                <div class="grid2column lastcolumn">
                    <div class="grid2column lastcolumn">
                        <input type="radio" id="tds_purchase" onclick="show_tds_return(this.value);" name="tds_purchase" value="yes" class="fin_yr">&nbsp;&nbsp;Yes&nbsp;&nbsp;
                        <input type="radio" id="tds_purchase" onclick="show_tds_return(this.value);" name="tds_purchase" value="no" checked="checked" class="fin_yr">&nbsp;&nbsp;No
                    </div>                                                 
                </div>
                <div class="clear"></div>
            </div> 
            <div id="tds_return_quarter_no">
                <div class="grid2column">TDS Return for the Quarter ending on* :</div>
                <div class="grid2column lastcolumn">
                    <select name="tds_month" id="tds_month">
                        <option value="0">Month</option>
                        <option value="jun">Jun</option>
                        <option value="sep">Sep</option>
                        <option value="dec">Dec</option>
                        <option value="mar">Mar</option>
                    </select>
                    <select name="tds_year" id="tds_year">
                        <option value="0">Year</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                    </select>

                </div>
                <div class="clear"></div>
            </div>
            <div id="tds_return_quarter_yes" style="display: none;">
                <div class="grid2column">Date of payment/credit in case of purchase of immovable property* :</div>
                <div class="grid2column lastcolumn">
                    <input type="text" name="dop" id="dop"  readonly="readonly">                                                    
                </div>
                <div class="clear"></div>
            </div>
            <div id="tds_deducted_yr">
                <div class="grid2column">Total TDS required to be deducted :</div>
                <div class="grid2column lastcolumn">
                    <input type="text" class="box" name="tds_deducted" id="tds_deducted">                                                   
                </div>
                <div class="clear"></div>
            </div>

            <div id="for_year" class="medi-radio1">
                <div class="grid2column">Actual date of filing TDS Return :</div>
                <div class="grid2column lastcolumn">
                    <input type="text" name="filing_tds" id="filing_tds" readonly="readonly">
                </div>
            </div>                                                                                	                                            

            <div class="grid2column"></div>
            <div class=" grid2column lastcolumn">
                <span class="madi_table_btn" id="madi_table_btn">
                    <span id="hide_sub"><input type="button" class="box lod-btn" name="submit" value="Calculate" id="submit" onclick="tot_calculation();" style="margin-top: 8px;"></span>                                                 
                </span>
                <input type="button" class="box lod-btn" name="submit" value="Reset" id="reset" onclick="location.reload();" style="margin-top: 8px;"> 
            </div>
            <div id="result_div" style="display: none;">
                <div style="padding:  10px 0px; font-size: 20px; font-weight: bolder;">
                    <u>
                        RESULTS
                    </u>
                </div>
                <div id="result_1_div">
                    <div class="grid2column">Due Date of TDS Return :</div>
                    <div class="grid2column lastcolumn">
                        <strong><p id="result_e"></p></strong>
                    </div>
                    <div class="clear"></div>
                </div>

                <div id="result_2_div">
                    <div class="grid2column">Delay in filing TDS Return (In Days) :</div>
                    <div class="grid2column lastcolumn">
                        <strong><p id="result_f"></p></strong>                                                    
                    </div>
                    <div class="clear"></div>
                </div>


                <div id="result_3_div">
                    <div class="grid2column">                                                    
                        Late fee for fiing TDS Return u/s <a href="javascript:void(0)" target="_blank">234E</a> amounting to Rs 200 per day (maximum to TDS amount) :</div>
                    <div class="grid2column lastcolumn">
                        <strong><p id="result_g"></p></strong>                                                    
                    </div>
                    <div class="clear"></div>
                </div>                                                

                <div id="result_4_div">
                    <div class="grid2column">Penalty u/s <a href="javascript:void(0)" target="_blank">271H</a> is applicable which is Rs 10,000 (may be exteded to Rs 1,00,000) :</div>
                    <div class="grid2column lastcolumn">
                        <strong><p id="result_h"></p></strong>                                                    
                    </div>
                    <div class="clear"></div>
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
            $jq("#dop").datepicker({
                dateFormat: "dd-mm-yy",
                minDate: (new Date(2016, 5, 1))
            });
            $jq("#filing_tds").datepicker({
                dateFormat: "dd-mm-yy"
            });
            $jq(".box").autoNumeric({vMin: 0.00, vMax: 9999999.99, mDec: 2});
            $jq("#tds_return_quarter_yes").hide();
            $jq("#result_div").hide();
        });

        function show_tds_return(st) {

            if (st == "yes") {
                $jq("#tds_return_quarter_yes").show();
                $jq("#tds_return_quarter_no").hide();
            } else {
                $jq("#tds_return_quarter_yes").hide();
                $jq("#tds_return_quarter_no").show();
            }
        }
        $jq("#tds_month").on("change", function () {
            if (this.value == "mar")
            {
                $jq("#tds_year option[value*=\'2016\']").prop("disabled", true);
            }
            if (this.value != "mar")
            {
                if ($jq("#tds_year option[value*=\'2016\']").is(":disabled"))
                {
                    $jq("#tds_year option[value*=\'2016\']").prop("disabled", false);
                }
            }
        })


        function tot_calculation() {

            var tds_purchase = $jq("#tds_purchase:checked").val();
            var filing_tds = $jq("#filing_tds").val();
            var tds_deducted = $jq("#tds_deducted").val();
            if (tds_purchase == "yes")
            {
                var date = $jq("#dop").datepicker("getDate");
                if (date == null)
                {
                    $jq("#alert-box").html("Required Filed Cannot Be Blank");
                }
                if (date != null)
                {
                    $jq("#tds-calculate input").prop("disabled", true);
                    $jq("#tds-calculate select").prop("disabled", true);
                    $jq("#madi_table_btn").hide();
                    $jq("#result_div").show("slow");
                    $jq(".alert").hide();
                    var month = date.getMonth() + 1;
                    var year = date.getFullYear();
                    var res_date = 30;
                    if (month == 12)
                    {
                        month = 0;
                        year = year + 1;
                    }
                    if (month == 1)
                    {
                        month = 2;
                        if (year % 4 == 0)
                        {
                            res_date = 1;
                        } else
                        {
                            res_date = 2;
                        }

                    }

                    if (res_date < 10)
                    {
                        res_date = "0" + res_date;
                    }

                    var res_month = month + 1;

                    if (res_month < 10)
                    {
                        res_month = "0" + res_month;
                    }
                    var res_year = year;
                    var result_e = res_date + "-" + res_month + "-" + res_year;
                    $jq("#result_e").html(result_e);
                }
            } else if (tds_purchase == "no")
            {
                var tds_month = $jq("#tds_month").val();
                var tds_year = $jq("#tds_year").val();
                if (tds_month == "0" || tds_year == "0")
                {
                    $jq("#alert-box").html("Required Filed Cannot Be Blank");
                } else
                {
                    $jq("#tds-calculate input").prop("disabled", true);
                    $jq("#tds-calculate select").prop("disabled", true);
                    $jq("#madi_table_btn").hide();
                    $jq("#result_div").show("slow");
                    $jq(".alert").hide();
                    if (tds_month == "jun")
                    {
                        tds_month = 7;
                    } else if (tds_month == "sep")
                    {
                        tds_month = 10;
                    } else if (tds_month == "dec")
                    {
                        tds_month = 1;
                        tds_year = parseInt(tds_year) + 1;
                    } else if (tds_month == "mar")
                    {
                        tds_month = 5;
                    }
                    var res_date = 31;
                    var res_month = tds_month;
                    if (res_month < 10)
                    {
                        res_month = "0" + res_month;
                    }

                    var res_year = tds_year;
                    var result_e = res_date + "-" + res_month + "-" + res_year;
                    $jq("#result_e").html(result_e);
                }
            }

            if (filing_tds != "")
            {
                var date1 = new Date(res_month + "/" + res_date + "/" + res_year);
                var result_filing_tds = filing_tds.split("-");
                var date2 = new Date(result_filing_tds[1] + "/" + result_filing_tds[0] + "/" + result_filing_tds[2]);
                var timeDiff = (date2.getTime() - date1.getTime());
                var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
                if (diffDays < 0)
                {
                    diffDays = 0;
                }
                $jq("#result_f").html(diffDays);
            }
            if (tds_deducted != "")
            {
                var result_g = 200 * diffDays;
                var tds_deducted_wc = tds_deducted.replace(/,/g, "");
                tds_deducted_wc = tds_deducted_wc.replace(/\.00/g, "");
                if (result_g > tds_deducted_wc)
                {
                    var x = tds_deducted_wc.toString();
                } else
                {
                    var x = result_g.toString();
                }
                var lastThree = x.substring(x.length - 3);
                var otherNumbers = x.substring(0, x.length - 3);
                if (otherNumbers != "")
                {
                    lastThree = "," + lastThree;
                }
                var res = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
                $jq("#result_g").html(res);
            }
            if (diffDays > 365)
            {
                $jq("#result_h").html("Yes");
            } else
            {
                $jq("#result_h").html("No");
            }
        }
';
$this->Html->scriptEnd();
?>

