<div class="content-container-anchor overlay-container-anchor">
    <h2 class="title-anchor title-heading">TDS - Late Payment Interest Calculator</h2>
    <div id="contact-wrapper">
        <form name="tds-calculate" id="contactform">
            <div id="tds_amount_div">
                <div class="grid2column">TDS Amount :</div>
                <div class="grid2column lastcolumn">
                    <input type="text" class="box" name="tds_amount" id="tds_amount">                                                    
                </div>
                <div class="clear"></div>
            </div> 
            <div id="tds_required_due">
                <div class="grid2column">Date on which TDS is required to be deducted :</div>
                <div class="grid2column lastcolumn">
                    <input type="text" name="dotrd" id="dotrd" readonly="readonly" >                                                    
                </div>
                <div class="clear"></div>
            </div>
            <div id="tds_deducted">
                <div class="grid2column">Date on which TDS is deducted :</div>
                <div class="grid2column lastcolumn">
                    <input type="text" name="dotd" id="dotd" readonly="readonly" >                                                    
                </div>
                <div class="clear"></div>
            </div>

            <div id="for_year" class="medi-radio1">
                <div class="grid2column">Is this TDS is on purchase on Immovable property :</div>
                <div class="grid2column lastcolumn">
                    <input type="radio" id="tds_purchase" name="tds_purchase" value="yes" class="fin_yr">&nbsp;&nbsp;Yes&nbsp;&nbsp;
                    <input type="radio" id="tds_purchase" name="tds_purchase" value="no" checked="checked" class="fin_yr">&nbsp;&nbsp;No
                </div>
            </div>                                                                                	                                            

            <div id="tds_actual_date">
                <div class="grid2column">Actual Date of TDS Deposit :</div>
                <div class="grid2column lastcolumn">
                    <input type="text" name="adotd" id="adotd" data-d-group="2" data-a-sign="" readonly="readonly" >                                                    
                </div>
                <div class="clear"></div>
            </div>
            <div class="grid2column"></div>
            <div class=" grid2column lastcolumn">
                <span class="madi_table_btn" id="madi_table_btn">
                    <span id="hide_sub"><input type="button" class="box lod-btn" name="submit" value="Calculate" id="submit" onclick="tot_calculation();" style="margin-top: 8px;"></span>                                                 
                </span>
                <input type="button" class="box lod-btn" name="submit" value="Reset" id="reset" onclick="location.reload();" style="margin-top: 8px;"> 
            </div>
            <div id="tds_actual_date">
                <div class="grid2column">Due Date of TDS Deposit :</div>
                <div class="grid2column lastcolumn">
                    <input type="text" id="result_e" data-d-group="2" data-a-sign="" readonly="readonly" >                                                    
                </div>
                <div class="clear"></div>
            </div>
            <div id="tds_actual_date">
                <div class="grid2column">Interest Payable :</div>
                <div class="grid2column lastcolumn">
                    <input type="text" id="result_f" data-d-group="2" data-a-sign="" readonly="readonly" >                                                    
                </div>
                <div class="clear"></div>
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
            $jq(".box").autoNumeric({vMin: 0.00, vMax: 10050000.00, mDec: 2});
            $jq("#result_div").hide();
        });

     



        function tot_calculation() {
            var dotrd = $jq("#dotrd").datepicker("getDate");
            var dotd = $jq("#dotd").datepicker("getDate");
            var adotd = $jq("#adotd").datepicker("getDate");
            var tds_amount = $jq("#tds_amount").val();
            var tds_purchase = $jq("#tds_purchase:checked").val();
            if (tds_amount === "") {
                alert("Please Entered: TDS Amount");
                return false;
            }
            if (dotrd === "") {
                alert("Please Entered: Date on which TDS is required to be deducted");
                return false;
            }
            if (dotd === "") {
                alert("Please Entered: Date on which TDS is deducted");
                return false;
            }
            if (adotd === "") {
                alert("Please Entered: Actual Date of TDS Deposit");
                return false;
            }
            function monthdiff(d1, d2) {
                var d1Y = d1.getFullYear();
                var d2Y = d2.getFullYear();
                var d1M = d1.getMonth();
                var d2M = d2.getMonth();

                return (d2M + 12 * d2Y) - (d1M + 12 * d1Y);
            }

            function isInt(n) {
                return n % 1 === 0;
            }

            function convertInr(result_f) {
                if (isInt(result_f) == true)
                {
                    var x = result_f.toString();
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
                    var x = result_f.toString();
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

            var monthname = new Array();
            monthname[1] = "Jan";
            monthname[2] = "Feb";
            monthname[3] = "Mar";
            monthname[4] = "Apr";
            monthname[5] = "May";
            monthname[6] = "Jun";
            monthname[7] = "Jul";
            monthname[8] = "Aug";
            monthname[9] = "Sept";
            monthname[10] = "Oct";
            monthname[11] = "Nov";
            monthname[12] = "Dec";

            if (dotrd == null || dotd == null || adotd == null || tds_amount == null)
            {
                error = 1
                $jq("#alert-box").html("Required Filed Cannot Be Blank");
            } else
            {

                $jq("#pdf1_btn").show();

                $jq("#tds-calculate input").prop("disabled", true);
                $jq("#tds-calculate select").prop("disabled", true);
                $jq("#madi_table_btn").hide();
                $jq("#result_div").show("slow");
                $jq(".alert").hide();

                var dotrd_day = $jq("#dotrd").datepicker("getDate").getDate();
                var dotrd_month = $jq("#dotrd").datepicker("getDate").getMonth() + 1;
                var dotrd_year = $jq("#dotrd").datepicker("getDate").getFullYear();

                var dotd_day = $jq("#dotd").datepicker("getDate").getDate();
                var dotd_month = $jq("#dotd").datepicker("getDate").getMonth() + 1;
                var dotd_year = $jq("#dotd").datepicker("getDate").getFullYear();

                var tds_amount_wc = tds_amount.replace(/,/g, "");
                tds_amount_wc = tds_amount_wc.replace(/\.00/g, "");

                if (tds_purchase == "yes")
                {
                    var month = dotrd.getMonth() + 1;
                    var year = dotrd.getFullYear();
                    var res_date = 30;
                    if (month == 12)
                    {
                        month = 0;
                        year = year + 1;
                    }
                    if (month == 1)
                    {
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
                    $jq("#result_e").val(result_e);
                    var date_result_e = new Date(res_month + "/" + res_date + "/" + res_year);
                } else if (tds_purchase == "no")
                {
                    var month = dotrd.getMonth() + 1;
                    var year = dotrd.getFullYear();
                    var res_date = 7;
                    if (month == 12)
                    {
                        month = 0;
                        year = year + 1;
                    }

                    if (month == 3)
                    {
                        res_date = 30;
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
                    $jq("#result_e").val(result_e);
                    var date_result_e = new Date(res_month + "/" + res_date + "/" + res_year);
                }


                //CALCULATING G IF B AND C IS SAME
                if (dotrd.getTime() === dotd.getTime() && dotd.getTime() !== adotd.getTime())
                {
                    if (adotd.getTime() <= date_result_e.getTime())
                    {
                        var late_months = 0
                    } else
                    {
                        var late_months = monthdiff(date_result_e, adotd);
                        late_months = late_months + 2;
                    }
                    var result_f = tds_amount_wc * 0.015 * late_months;
                    var result_f1 = result_f;
                } else
                {
                    var result_f = 0;
                    var result_f1 = 0;
                }

                var result_g = "";
                if (dotrd.getTime() !== dotd.getTime())
                {

                    if (dotd.getTime() !== adotd.getTime())
                    {
                        if (adotd.getTime() <= date_result_e.getTime())
                        {
                            var late_months = 0
                        } else
                        {
                            var late_months = monthdiff(dotd, adotd);
                            late_months = late_months + 1;
                        }
                        var result_f = tds_amount_wc * 0.015 * late_months;
                        var result_f1 = result_f;
                    } else
                    {
                        var result_f = 0;
                        var result_f1 = 0;
                    }

                    var late_months2 = monthdiff(dotrd, dotd);
                    late_months2 = late_months2 + 1;
                    var result_f2 = tds_amount_wc * 0.01 * late_months2;
                    result_f = result_f + result_f2;
                    if (dotrd_month != dotd_month || dotrd_year != dotd_year)
                    {
                        result_g = "1% Interest for the period " + monthname[dotrd_month] + " " + dotrd_year + " to " + monthname[dotd_month] + " " + dotd_year + " - Rs " + convertInr(result_f2) + "<br/>";
                    } else
                    {
                        result_g = "1% Interest for the period " + monthname[dotrd_month] + " " + dotrd_year + " - Rs " + convertInr(result_f2) + "<br/>";
                    }

                }

                var result_g_final = result_g;
                if (result_f1 > 0)
                {
                    var adotd_month = $jq("#adotd").datepicker("getDate").getMonth() + 1;
                    var adotd_year = $jq("#adotd").datepicker("getDate").getFullYear();
                    if (adotd_month != dotd_month || adotd_year != dotd_year)
                    {
                        result_g_final = result_g_final + "1.5% Interest for the period " + monthname[dotd_month] + " " + dotd_year + " to " + monthname[adotd_month] + " " + adotd_year + " - Rs " + convertInr(result_f1);
                    } else
                    {
                        result_g_final = result_g_final + "1.5% Interest for the period " + monthname[dotd_month] + " " + dotd_year + " - Rs " + convertInr(result_f1);
                    }

                }

                $jq("#result_f").val(convertInr(result_f));
                if (result_f > 0)
                {
                    $jq("#result_g").html(result_g_final);
                }
            }
        }
        ';

$this->Html->scriptEnd();



$this->Html->scriptStart(['block' => 'scriptBottom']);
echo 'jQuery(document).ready(function ($) {
            $("#dotrd").datepicker({
                dateFormat: "dd-mm-yy",
                minDate: (new Date(2016, 5, 1)),
                onSelect: function (dateText, inst) {
                    var date = $.datepicker.parseDate("dd-mm-yy", dateText);
                    var $dotd = $("#dotd");
                    $dotd.datepicker("option", "defaultDate", date);
                    $dotd.datepicker("option", "minDate", date);
                    $dotd.datepicker("setDate", date);
                }
            });
            $("#dotd").datepicker({
                dateFormat: "dd-mm-yy",
                onSelect: function (dateText, inst) {
                    var date = $.datepicker.parseDate("dd-mm-yy", dateText);
                    var $adotd = $("#adotd");
                    $adotd.datepicker("option", "defaultDate", date);
                    $adotd.datepicker("option", "minDate", date);
                }
            });
            $("#adotd").datepicker({
                dateFormat: "dd-mm-yy"
            });
        });';
$this->Html->scriptEnd();
?>