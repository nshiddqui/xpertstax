<div class="content-container-anchor overlay-container-anchor">
    <h2 class="title-anchor title-heading">GST Calculator</h2>
    <div class="table-responsive">

        <table class="table center-block gst-calc">
            <thead>
                <tr>
                    <th style="text-align:center;" class="gst-calc1">Type Of Sale</th>
                    <th style="text-align:center;" class="gst-calc2">Rate OF Tax</th>
                    <th style="text-align:center;" class="gst-calc3">Taxable Amount</th>
                    <th style="text-align:center;" class="gst-calc4">Total Tax Amount</th>
                    <th style="text-align:center;" class="gst-calc5">IGST</th>
                    <th style="text-align:center;" class="gst-calc6">CGST</th>
                    <th style="text-align:center;" class="gst-calc7">SGST</th>
                    <th style="text-align:center;" class="gst-calc8">Rate of Cess</th>
                    <th style="text-align:center;" class="gst-calc9">CESS</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <select class="form-control-sm" id="drptype" onchange="return calculatetax();">
                            <option value="1">Inter State Sale</option>
                            <option value="2">Intra State Sale</option>
                        </select>
                    </td>
                    <td> <select class="form-control-sm" id="drprate1" onchange="return calculatetax();">
                            <option value="0">select</option>
                            <option value="0.25">0.25</option>
                            <option value="3">3</option>
                            <option value="5">5</option>
                            <option value="12">12</option>
                            <option value="18">18</option>
                            <option value="28">28</option>
                        </select></td>
                    <td><input class=" form-control form-control-sm" id="txtamt1" onblur="return calculatetax();" onkeypress="return DigitOnly(event);" style="text-align:right;" type="text"></td>
                    <td><input class=" form-control form-control-sm" id="tottaxamt1" style="text-align:right;" readonly="" type="text"></td>
                    <td><input class=" form-control form-control-sm" id="txtigst1" style="text-align:right;" readonly="" type="text"></td>
                    <td><input class=" form-control form-control-sm" id="txtcgst1" style="text-align:right;" readonly="" type="text"></td>
                    <td><input class=" form-control form-control-sm" id="txtsgst1" style="text-align:right;" readonly="" type="text"></td>
                    <td><input class=" form-control form-control-sm" id="txttaxcess1" onblur="return calculatetax();" onkeypress="return DigitOnly(event);" style="text-align:right;" type="text"></td>
                    <td><input class=" form-control form-control-sm" id="txtcess1" style="text-align:right;" readonly="" type="text"></td>

                </tr>

                <tr>
                    <td>
                        <select class="form-control-sm" id="drptype2" onchange="return calculatetax2();">
                            <option value="1">Inter State Sale</option>
                            <option value="2">Intra State Sale</option>
                        </select>
                    </td>
                    <td>
                        <select class="form-control-sm" id="drprate2" onchange="return calculatetax2();">
                            <option value="0">select</option>
                            <option value="0.25">0.25</option>
                            <option value="3">3</option>
                            <option value="5">5</option>
                            <option value="12">12</option>
                            <option value="18">18</option>
                            <option value="28">28</option>
                        </select></td>
                    <td><input class=" form-control form-control-sm" id="txtamt2" onkeypress="return DigitOnly(event);" onblur="return calculatetax2();" style="text-align:right;" type="text"></td>
                    <td><input class=" form-control form-control-sm" id="tottaxamt2" style="text-align:right;" readonly="" type="text"></td>
                    <td><input class=" form-control form-control-sm" id="txtigst2" style="text-align:right;" readonly="" type="text"></td>
                    <td><input class=" form-control form-control-sm" id="txtcgst2" style="text-align:right;" readonly="" type="text"></td>
                    <td><input class=" form-control form-control-sm" id="txtsgst2" style="text-align:right;" readonly="" type="text"></td>
                    <td><input class=" form-control form-control-sm" id="txttaxcess2" onblur="return calculatetax2();" onkeypress="return DigitOnly(event);" style="text-align:right;" type="text"></td>
                    <td><input class=" form-control form-control-sm" id="txtcess2" style="text-align:right;" readonly="" type="text"></td>

                </tr>

                <tr>
                    <td>
                        <select class="form-control-sm" id="drptype3" onchange="return calculatetax3();">
                            <option value="1">Inter State Sale</option>
                            <option value="2">Intra State Sale</option>
                        </select>
                    </td>
                    <td> <select class="form-control-sm" id="drprate3" onchange="return calculatetax3();
                                 ">
                            <option value="0">select</option>
                            <option value="0.25">0.25</option>
                            <option value="3">3</option>
                            <option value="5">5</option>
                            <option value="12">12</option>
                            <option value="18">18</option>
                            <option value="28">28</option>
                        </select></td>
                    <td><input class=" form-control form-control-sm" id="txtamt3" onblur="return calculatetax3();" onkeypress="return DigitOnly(event);" style="text-align:right;" type="text"></td>
                    <td><input class=" form-control form-control-sm" id="tottaxamt3" style="text-align:right;" readonly="" type="text"></td>
                    <td><input class=" form-control form-control-sm" id="txtigst3" style="text-align:right;" readonly="" type="text"></td>
                    <td><input class=" form-control form-control-sm" id="txtcgst3" style="text-align:right;" readonly="" type="text"></td>
                    <td><input class=" form-control form-control-sm" id="txtsgst3" style="text-align:right;" readonly="" type="text"></td>
                    <td><input class="form-control" id="txttaxcess3" onblur="return calculatetax3();" onkeypress="return DigitOnly(event);" style="text-align:right;" type="text"></td>

                    <td><input class=" form-control form-control-sm" id="txtcess3" style="text-align:right;" readonly="" type="text"></td>

                </tr>

                <tr>
                    <td>
                        <select class="form-control-sm" id="drptype4" onchange="return calculatetax4();">
                            <option value="1">Inter State Sale</option>
                            <option value="2">Intra State Sale</option>
                        </select>
                    </td>
                    <td> <select class="form-control-sm" id="drprate4" onchange="return calculatetax4();">
                            <option value="0">select</option>
                            <option value="0.25">0.25</option>
                            <option value="3">3</option>
                            <option value="5">5</option>
                            <option value="12">12</option>
                            <option value="18">18</option>
                            <option value="28">28</option>
                        </select></td>
                    <td><input class=" form-control form-control-sm" id="txtamt4" onblur="return calculatetax4();" onkeypress="return DigitOnly(event);" style="text-align:right;" type="text"></td>
                    <td><input class=" form-control form-control-sm" id="tottaxamt4" style="text-align:right;" readonly="" type="text"></td>
                    <td><input class=" form-control form-control-sm" id="txtigst4" style="text-align:right;" readonly="" type="text"></td>
                    <td><input class=" form-control form-control-sm" id="txtcgst4" style="text-align:right;" readonly="" type="text"></td>
                    <td><input class=" form-control form-control-sm" id="txtsgst4" style="text-align:right;" readonly="" type="text"></td>
                    <td><input class=" form-control form-control-sm" id="txttaxcess4" onblur="return calculatetax4();" onkeypress="return DigitOnly(event);" style="text-align:right;" type="text"></td>

                    <td><input class=" form-control form-control-sm" id="txtcess4" style="text-align:right;" readonly="" type="text"></td>

                </tr>
                <tr>
                    <td>
                        <select class="form-control-sm" id="drptype5" onchange="return calculatetax5();">
                            <option value="1">Inter State Sale</option>
                            <option value="2">Intra State Sale</option>
                        </select>
                    </td>
                    <td> <select class="form-control-sm" id="drprate5" onchange="return calculatetax5();">
                            <option value="0">select</option>
                            <option value="0.25">0.25</option>
                            <option value="3">3</option>
                            <option value="5">5</option>
                            <option value="12">12</option>
                            <option value="18">18</option>
                            <option value="28">28</option>
                        </select></td>
                    <td><input class=" form-control form-control-sm" id="txtamt5" onblur="return calculatetax5();" onkeypress="return DigitOnly(event);" style="text-align:right;" type="text"></td>
                    <td><input class=" form-control form-control-sm" id="tottaxamt5" style="text-align:right;" readonly="" type="text"></td>
                    <td><input class=" form-control form-control-sm" id="txtigst5" style="text-align:right;" readonly="" type="text"></td>
                    <td><input class=" form-control form-control-sm" id="txtcgst5" style="text-align:right;" readonly="" type="text"></td>
                    <td><input class=" form-control form-control-sm" id="txtsgst5" style="text-align:right;" readonly="" type="text"></td>
                    <td><input class=" form-control form-control-sm" id="txttaxcess5" onblur="return calculatetax5();" onkeypress="return DigitOnly(event);" style="text-align:right;" type="text"></td>

                    <td><input class=" form-control form-control-sm" id="txtcess5" style="text-align:right;" readonly="" type="text"></td>

                </tr>
                <tr>
                    <td>
                        <select class="form-control-sm" id="drptype6" onchange="return calculatetax6();">
                            <option value="1">Inter State Sale</option>
                            <option value="2">Intra State Sale</option>
                        </select>
                    </td>
                    <td> <select class="form-control-sm" id="drprate6" onchange="return calculatetax6();">
                            <option value="0">select</option>
                            <option value="0.25">0.25</option>
                            <option value="3">3</option>
                            <option value="5">5</option>
                            <option value="12">12</option>
                            <option value="18">18</option>
                            <option value="28">28</option>
                        </select></td>
                    <td><input class=" form-control form-control-sm" id="txtamt6" onblur="return calculatetax6();" onkeypress="return DigitOnly(event);" style="text-align:right;" type="text"></td>
                    <td><input class=" form-control form-control-sm" id="tottaxamt6" style="text-align:right;" readonly="" type="text"></td>
                    <td><input class=" form-control form-control-sm" id="txtigst6" style="text-align:right;" readonly="" type="text"></td>
                    <td><input class=" form-control form-control-sm" id="txtcgst6" style="text-align:right;" readonly="" type="text"></td>
                    <td><input class=" form-control form-control-sm" id="txtsgst6" style="text-align:right;" readonly="" type="text"></td>
                    <td><input class=" form-control form-control-sm" id="txttaxcess6" onblur="return calculatetax6();" onkeypress="return DigitOnly(event);" style="text-align:right;" type="text"></td>

                    <td><input class=" form-control form-control-sm" id="txtcess6" style="text-align:right;" readonly="" type="text"></td>

                </tr>
                <tr class="calc-res"><td colspan="2">&nbsp;

                    </td> <td align="center" nowrap="nowrap"> <h6 class="left">Total Amount</h6><div id="totamt" style="text-decoration:underline;"></div>   </td>
                    <td align="center" nowrap="nowrap"> <h6 class="left">Total Tax </h6><div id="tottax" style="text-decoration:underline;"></div></td>
                    <td align="center" nowrap="nowrap"> <h6 class="left">Total IGST </h6> <div id="totigst" style="text-decoration:underline;"></div></td>
                    <td align="center" nowrap="nowrap"><h6 class="left">Total CGST </h6> <div id="totcgst" style="text-decoration:underline;"></div>  </td>
                    <td align="center" nowrap="nowrap"><h6 class="left">Total SGST</h6> <div id="totsgst" style="text-decoration:underline;"></div> </td>
                    <td>&nbsp;</td>
                    <td align="center" nowrap="nowrap"><h6 class="left">Total CESS</h6> <div id="totcess" style="text-decoration:underline;"></div></td>
                </tr>
                <tr><td colspan="9" align="right">
                        <br>
                        <input class="btn btn-danger" onclick="return cleartextboxes();" value="Reset" type="button">

                    </td></tr>
            </tbody>
        </table>

    </div>
    <!-- close .content-container-anchor -->


    <div class="clearfix"></div>
</div>
<?php
$this->Html->scriptStart(['block' => 'scriptBottom']);
echo 'function cleartextboxes() {
    $("input:text").val("");
    totamt.innerHTML = "";
    totcess.innerHTML = "";
    totcgst.innerHTML = "";
    totigst.innerHTML = "";
    totsgst.innerHTML = "";
    tottax.innerHTML = "";
}

function DigitOnly(e) {
    var Ec;

    if (window.event) { //IE  

        Ec = event.keyCode;
        if (Ec >= 48 && Ec <= 57) {
            window.event.returnValue = true;
        } else {
            window.event.returnValue = false;
        }
    } else { //Firefox             
        Ec = e.which;
        if ((Ec >= 48 && Ec <= 57) || Ec == 8 || Ec == 0) {
            e.returnValue = true;
        } else {
            e.preventDefault();
        }
    }
}

function calculatetotal() {
    try {
        totamt.innerHTML = (Number(txtamt1.value) + Number(txtamt2.value) + Number(txtamt3.value) + Number(txtamt4.value) + Number(txtamt5.value) + Number(txtamt6.value)).toFixed(2);
        tottax.innerHTML = (Number(tottaxamt1.value) + Number(tottaxamt2.value) + Number(tottaxamt3.value) + Number(tottaxamt4.value) + Number(tottaxamt5.value) + Number(tottaxamt6.value)).toFixed(2);

        totigst.innerHTML = (Number(txtigst1.value) + Number(txtigst2.value) + Number(txtigst3.value) + Number(txtigst4.value) + Number(txtigst5.value) + Number(txtigst6.value)).toFixed(2);
        totcgst.innerHTML = (Number(txtcgst1.value) + Number(txtcgst2.value) + Number(txtcgst3.value) + Number(txtcgst4.value) + Number(txtcgst5.value) + Number(txtcgst6.value)).toFixed(2);
        totsgst.innerHTML = (Number(txtsgst1.value) + Number(txtsgst2.value) + Number(txtsgst3.value) + Number(txtsgst4.value) + Number(txtsgst5.value) + Number(txtsgst6.value)).toFixed(2);
        totcess.innerHTML = (Number(txtcess1.value) + Number(txtcess2.value) + Number(txtcess3.value) + Number(txtcess4.value) + Number(txtcess5.value) + Number(txtcess6.value)).toFixed(2);
    } catch (e) {
        alert(e.Message);
    }
}
function calculatetax() {
    var totamt = 0;

    if (drprate1.value > 0) {
        if (txttaxcess1.value > 0) {
            if (txtamt1.value > 0) {
                var amtcess = 0;
                var amttax = 0;
                amttax = (drprate1.value * txtamt1.value) / 100.;

                amtcess = (txtamt1.value * txttaxcess1.value) / 100;

                if (drptype.value == "1") {
                    tottaxamt1.value = (amttax + amtcess).toFixed(2);
                    txtsgst1.value = "";
                    txtcgst1.value = "";
                    txtigst1.value = amttax.toFixed(2);
                    txtcess1.value = amtcess.toFixed(2);
                } else if (drptype.value == "2") {
                    tottaxamt1.value = (amttax + amtcess).toFixed(2);
                    txtsgst1.value = (amttax / 2).toFixed(2);
                    txtcgst1.value = (amttax / 2).toFixed(2);
                    txtigst1.value = "";
                    txtcess1.value = amtcess.toFixed(2);
                }
                calculatetotal();
            }
        } else if (txtamt1.value > 0) {

            totamt = (drprate1.value * txtamt1.value) / 100;
            if (drptype.value == "1") {
                tottaxamt1.value = totamt.toFixed(2);
                txtsgst1.value = "";
                txtcgst1.value = "";
                txtigst1.value = totamt.toFixed(2);
                txtcess1.value = "";
            } else if (drptype.value == "2") {
                tottaxamt1.value = totamt.toFixed(2);
                txtcgst1.value = (totamt / 2).toFixed(2);
                txtigst1.value = "";
                txtsgst1.value = (totamt / 2).toFixed(2);
                txtcess1.value = "";
            }
            calculatetotal();
        }
    }
}

function calculatetax2() {
    var totamt = 0;

    if (drprate2.value > 0) {
        if (txttaxcess2.value > 0) {
            if (txtamt2.value > 0) {
                var amtcess = 0;
                var amttax = 0;
                amttax = (drprate2.value * txtamt2.value) / 100;

                amtcess = (txtamt2.value * txttaxcess2.value) / 100;

                if (drptype2.value == "1") {
                    tottaxamt2.value = (amttax + amtcess).toFixed(2);
                    txtsgst2.value = "";
                    txtcgst2.value = "";
                    txtigst2.value = amttax.toFixed(2);
                    txtcess2.value = amtcess.toFixed(2);

                } else if (drptype2.value == "2") {
                    tottaxamt2.value = (amttax + amtcess).toFixed(2);
                    txtsgst2.value = (amttax / 2).toFixed(2);
                    txtcgst2.value = (amttax / 2).toFixed(2);
                    txtigst2.value = "";
                    txtcess2.value = amtcess.toFixed(2);
                }
            }
            calculatetotal();
        } else if (txtamt2.value > 0) {

            totamt = (drprate2.value * txtamt2.value) / 100;
            if (drptype2.value == "1") {
                tottaxamt2.value = totamt.toFixed(2);
                txtsgst2.value = "";
                txtcgst2.value = "";
                txtigst2.value = totamt.toFixed(2);
                txtcess2.value = "";
            } else if (drptype2.value == "2") {
                tottaxamt2.value = totamt.toFixed(2);
                txtcgst2.value = (totamt / 2).toFixed(2);
                txtigst2.value = "";
                txtsgst2.value = (totamt / 2).toFixed(2);
                txtcess2.value = "";
            }

        }
        calculatetotal();
    }
}

function calculatetax3() {
    var totamt = 0;

    if (drprate3.value > 0) {
        if (txttaxcess3.value > 0) {
            if (txtamt3.value > 0) {
                var amtcess = 0;
                var amttax = 0;
                amttax = (drprate3.value * txtamt3.value) / 100.;

                amtcess = (txtamt3.value * txttaxcess3.value) / 100;

                if (drptype3.value == "1") {
                    tottaxamt3.value = (amttax + amtcess).toFixed(2);
                    txtsgst3.value = "";
                    txtcgst3.value = "";
                    txtigst3.value = amttax.toFixed(2);
                    txtcess3.value = amtcess.toFixed(2);
                } else if (drptype3.value == "2") {
                    tottaxamt3.value = (amttax + amtcess).toFixed(2);
                    txtsgst3.value = (amttax / 2).toFixed(2);
                    txtcgst3.value = (amttax / 2).toFixed(2);
                    txtigst3.value = "";
                    txtcess3.value = amtcess.toFixed(2);
                }
                calculatetotal();
            }
        } else if (txtamt3.value > 0) {

            totamt = (drprate3.value * txtamt3.value) / 100;
            if (drptype3.value == "1") {
                tottaxamt3.value = totamt.toFixed(2);
                txtsgst3.value = "";
                txtcgst3.value = "";
                txtigst3.value = totamt.toFixed(2);
                txtcess3.value = "";
            } else if (drptype3.value == "2") {
                tottaxamt3.value = totamt.toFixed(2);
                txtcgst3.value = (totamt / 2).toFixed(2);
                txtigst3.value = "";
                txtsgst3.value = (totamt / 2).toFixed(2);
                txtcess3.value = "";
            }
            calculatetotal();
        }
    }
}

function calculatetax4() {
    var totamt = 0;

    if (drprate4.value > 0) {
        if (txttaxcess4.value > 0) {
            if (txtamt4.value > 0) {
                var amtcess = 0;
                var amttax = 0;
                amttax = (drprate4.value * txtamt4.value) / 100;

                amtcess = (txtamt4.value * txttaxcess4.value) / 100;

                if (drptype4.value == "1") {
                    tottaxamt4.value = (amttax + amtcess).toFixed(2);
                    txtsgst4.value = "";
                    txtcgst4.value = "";
                    txtigst4.value = amttax.toFixed(2);
                    txtcess4.value = amtcess.toFixed(2);
                } else if (drptype4.value == "2") {
                    tottaxamt4.value = (amttax + amtcess).toFixed(2);
                    txtsgst4.value = (amttax / 2).toFixed(2);
                    txtcgst4.value = (amttax / 2).toFixed(2);
                    txtigst4.value = "";
                    txtcess4.value = amtcess.toFixed(2);
                }
                calculatetotal();
            }
        } else if (txtamt4.value > 0) {

            totamt = (drprate4.value * txtamt4.value) / 100;
            if (drptype4.value == "1") {
                tottaxamt4.value = totamt.toFixed(2);
                txtsgst4.value = "";
                txtcgst4.value = "";
                txtigst4.value = totamt.toFixed(2);
                txtcess4.value = "";
            } else if (drptype4.value == "2") {
                tottaxamt4.value = totamt.toFixed(2);
                txtcgst4.value = (totamt / 2).toFixed(2);
                txtigst4.value = "";
                txtsgst4.value = (totamt / 2).toFixed(2);
                txtcess4.value = "";
            }
            calculatetotal();
        }
    }
}

function calculatetax5() {
    var totamt = 0;

    if (drprate5.value > 0) {
        if (txttaxcess5.value > 0) {
            if (txtamt5.value > 0) {
                var amtcess = 0;
                var amttax = 0;
                amttax = (drprate5.value * txtamt5.value) / 100;

                amtcess = (txtamt5.value * txttaxcess5.value) / 100;

                if (drptype5.value == "1") {
                    tottaxamt5.value = (amttax + amtcess).toFixed(2);
                    txtsgst5.value = "";
                    txtcgst5.value = "";
                    txtigst5.value = amttax.toFixed(2);
                    txtcess5.value = amtcess.toFixed(2);
                } else if (drptype5.value == "2") {
                    tottaxamt5.value = (amttax + amtcess).toFixed(2);
                    txtsgst5.value = (amttax / 2).toFixed(2);
                    txtcgst5.value = (amttax / 2).toFixed(2);
                    txtigst5.value = "";
                    txtcess5.value = amtcess.toFixed(2);
                }
                calculatetotal();
            }
        } else if (txtamt5.value > 0) {

            totamt = (drprate5.value * txtamt5.value) / 100;
            if (drptype5.value == "1") {
                tottaxamt5.value = totamt.toFixed(2);
                txtsgst5.value = "";
                txtcgst5.value = "";
                txtigst5.value = totamt.toFixed(2);
                txtcess5.value = "";
            } else if (drptype5.value == "2") {
                tottaxamt5.value = totamt.toFixed(2);
                txtcgst5.value = (totamt / 2).toFixed(2);
                txtigst5.value = "";
                txtsgst5.value = (totamt / 2).toFixed(2);
                txtcess5.value = "";
            }
            calculatetotal();
        }
    }
}

function calculatetax6() {
    var totamt = 0;

    if (drprate6.value > 0) {
        if (txttaxcess6.value > 0) {
            if (txtamt6.value > 0) {
                var amtcess = 0;
                var amttax = 0;
                amttax = (drprate6.value * txtamt6.value) / 100;

                amtcess = (txtamt6.value * txttaxcess6.value) / 100;

                if (drptype6.value == "1") {
                    tottaxamt6.value = (amttax + amtcess).toFixed(2);
                    txtsgst6.value = "";
                    txtcgst6.value = "";
                    txtigst6.value = amttax.toFixed(2);
                    txtcess6.value = amtcess.toFixed(2);
                } else if (drptype6.value == "2") {
                    tottaxamt6.value = (amttax + amtcess).toFixed(2);
                    txtsgst6.value = (amttax / 2).toFixed(2);
                    txtcgst6.value = (amttax / 2).toFixed(2);
                    txtigst6.value = "";
                    txtcess6.value = amtcess.toFixed(2);
                }
                calculatetotal();
            }
        } else if (txtamt6.value > 0) {

            totamt = (drprate6.value * txtamt6.value) / 100;
            if (drptype6.value == "1") {
                tottaxamt6.value = totamt.toFixed(2);
                txtsgst6.value = "";
                txtcgst6.value = "";
                txtigst6.value = totamt.toFixed(2);
                txtcess6.value = "";
            } else if (drptype6.value == "2") {
                tottaxamt6.value = totamt.toFixed(2);
                txtcgst6.value = (totamt / 2).toFixed(2);
                txtigst6.value = "";
                txtsgst6.value = (totamt / 2).toFixed(2);
                txtcess6.value = "";
            }
            calculatetotal();
        }
    }
}';
$this->Html->scriptEnd();
?>