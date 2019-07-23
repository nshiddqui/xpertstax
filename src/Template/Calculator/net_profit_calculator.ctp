<div class="content-container-anchor overlay-container-anchor">
    <h2 class="title-anchor title-heading">Calculate Net Profit</h2>
    <center>
        <table class="table-responsive table" cellpadding="10" style="font-family:Arial;font-size:12px;" width="85%" cellspacing="2" cellpadding="2">
            <tbody>

                <tr><td align="left">Net Profit before Tax:</td><td><input id="Text1" style="text-align:right;" onkeypress="return validate(event)" maxlength="18" type="text"></td></tr>
                <tr><td align="left">Loss On Sale of Fixed Assets/ Undertaking (Net):</td><td><input id="Text2" style="text-align:right;" onkeypress="return validate(event)" maxlength="18" type="text"></td></tr>
                <tr><td align="left">Provision for Doubtful Debts:</td><td><input id="Text3" style="text-align:right;" onkeypress="return validate(event)" maxlength="18" type="text"></td></tr>
                <tr><td align="left">Charity &amp; Donations:</td><td><input id="Text4" style="text-align:right;" onkeypress="return validate(event)" maxlength="18" type="text"></td></tr>
                <tr><td align="left">Misc Expenses:</td><td><input id="Text5" style="text-align:right;" onkeypress="return validate(event)" maxlength="18" type="text"></td></tr>
                <tr><td align="left">Fixed Assets Written Off:</td><td><input id="Text6" style="text-align:right;" onkeypress="return validate(event)" maxlength="18" type="text"></td></tr>
                <tr><td align="left">Amortization of Lease Hold Land Premium:</td><td><input id="Text7" style="text-align:right;" onkeypress="return validate(event)" maxlength="18" type="text"></td></tr>
                <tr><td align="left">News Print Claim Written-off:</td><td><input id="Text8" style="text-align:right;" onkeypress="return validate(event)" maxlength="18" type="text"></td></tr>
                <tr><td align="left">Amalgamation Expenses Written Off:</td><td><input id="Text9" style="text-align:right;" onkeypress="return validate(event)" maxlength="18" type="text"></td></tr>
                <tr><td align="left">Discount on Commercial Papers:</td><td><input id="Text10" style="text-align:right;" onkeypress="return validate(event)" maxlength="18" type="text"></td></tr>
                <tr><td align="left">Any change in carrying amount of an asset or of a liability 
                        recognised in equity reserves including surplus in profit and loss
                        account on measurement of the asset or the liability at fair value:</td><td><input id="Text11" style="text-align:right;" onkeypress="return validate(event)" maxlength="18" type="text"></td></tr>
                <tr><td align="left">Any compensation, damages or payments made voluntarily,
                        that is to say, otherwise than compensation or damages to be paid in virtue of
                        any legal liability including a liability arising from a breach of contract: </td><td><input id="Text12" style="text-align:right;" onkeypress="return validate(event)" maxlength="18" type="text"></td></tr>
                <tr><td align="left">Any other expenses, which has been deducted from the profits:</td><td><input id="Text13" style="text-align:right;" onkeypress="return validate(event)" maxlength="18" type="text"></td></tr>
                <tr><td align="left">Profit by way of premium on issue of shares:</td><td><input id="Text14" style="text-align:right;" onkeypress="return validate(event)" maxlength="18" type="text"></td></tr>
                <tr><td align="left">Profit on sale of forefited shares:</td><td><input id="Text15" style="text-align:right;" onkeypress="return validate(event)" maxlength="18" type="text"></td></tr>
                <tr><td align="left">Profit of capital nature including profit from sale of undertaking:</td><td><input id="Text16" style="text-align:right;" onkeypress="return validate(event)" maxlength="18" type="text"></td></tr>
                <tr><td align="left">Profit from sale of immovable property /fixed assets of capital nature:</td><td><input id="Text17" style="text-align:right;" onkeypress="return validate(event)" maxlength="18" type="text"></td></tr>
                <tr><td align="left">Any change in carrying amount of an asset or of a liability recognised in equity reserves including surplus in profit and loss account on measurement of the asset or the liability at fair value:</td><td><input id="Text18" style="text-align:right;" onkeypress="return validate(event)" maxlength="18" type="text"></td></tr>
                <tr><td align="left"><span style="font-size:18px;">Net Profit:</span> </td><td><input id="txtNetProfits" style="text-align:right;" readonly="readonly" type="text"></td></tr>
                <tr><td colspan="2" align="center"><input id="Submit1" class="btn btn-primary btn-sm" onclick="return CalculateNetProfit();" value="submit" type="submit"></td></tr>
                <tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>

            </tbody></table>

    </center>
    <!-- close .content-container-anchor -->


    <div class="clearfix"></div>
</div>
<?php
$this->Html->scriptStart(['block' => 'scriptBottom']);
echo 'function CalculateNetProfit() {
            var defaultValue = 0;
            var txt1 = Trim(document.getElementById("Text1").value);
            var txt2 = Trim(document.getElementById("Text2").value);
            var txt3 = Trim(document.getElementById("Text3").value);
            var txt4 = Trim(document.getElementById("Text4").value);
            var txt5 = Trim(document.getElementById("Text5").value);
            var txt6 = Trim(document.getElementById("Text6").value);
            var txt7 = Trim(document.getElementById("Text7").value);
            var txt8 = Trim(document.getElementById("Text8").value);
            var txt9 = Trim(document.getElementById("Text9").value);
            var txt10 = Trim(document.getElementById("Text10").value);
            var txt11 = Trim(document.getElementById("Text11").value);
            var txt12 = Trim(document.getElementById("Text12").value);
            var txt13 = Trim(document.getElementById("Text13").value);
            var txt14 = Trim(document.getElementById("Text14").value);
            var txt15 = Trim(document.getElementById("Text15").value);
            var txt16 = Trim(document.getElementById("Text16").value);
            var txt17 = Trim(document.getElementById("Text17").value);
            var txt18 = Trim(document.getElementById("Text18").value);
            if (txt1 == "") {
                alert("Enter net profit before tax.");
                document.getElementById("Text1").style.backgroundColor = "yellow";
                document.getElementById("Text1").focus();
                return false;
            } else {
                document.getElementById("Text1").style.backgroundColor = "white";

            }
            if (txt2 == "") {
                document.getElementById("Text2").value = Number(defaultValue);
            }

            if (txt3 == "") {
                document.getElementById("Text3").value = Number(defaultValue);
            }

            if (txt4 == "") {
                document.getElementById("Text4").value = Number(defaultValue);
            }

            if (txt5 == "") {
                document.getElementById("Text5").value = Number(defaultValue);
            }

            if (txt6 == "") {
                document.getElementById("Text6").value = Number(defaultValue);
            }

            if (txt7 == "") {
                document.getElementById("Text7").value = Number(defaultValue);
            }

            if (txt8 == "") {
                document.getElementById("Text8").value = Number(defaultValue);
            }

            if (txt9 == "") {
                document.getElementById("Text9").value = Number(defaultValue);
            }

            if (txt10 == "") {
                document.getElementById("Text10").value = Number(defaultValue);
            }

            if (txt11 == "") {
                document.getElementById("Text11").value = Number(defaultValue);
            }

            if (txt12 == "") {
                document.getElementById("Text12").value = Number(defaultValue);
            }

            if (txt13 == "") {
                document.getElementById("Text13").value = Number(defaultValue);
            }

            if (txt14 == "") {
                document.getElementById("Text14").value = Number(defaultValue);
            }


            if (txt15 == "") {
                document.getElementById("Text15").value = Number(defaultValue);
            }

            if (txt16 == "") {
                document.getElementById("Text16").value = Number(defaultValue);
            }

            if (txt17 == "") {
                document.getElementById("Text17").value = Number(defaultValue);
            }

            if (txt18 == "") {
                document.getElementById("Text18").value = Number(defaultValue);
            }

            // document.getElementById("trNetProfit").style.display = "block";
            var total = 0;
            total = Number(txt1) + Number(txt2);
            total = Number(total) + Number(txt3);
            total = Number(total) + Number(txt4);
            total = Number(total) + Number(txt5);
            total = Number(total) + Number(txt6);
            total = Number(total) + Number(txt7);
            total = Number(total) + Number(txt8);
            total = Number(total) + Number(txt9);
            total = Number(total) + Number(txt10);
            total = Number(total) + Number(txt11);
            total = Number(total) + Number(txt12);
            total = Number(total) + Number(txt13);
            total = Number(total) - Number(txt14);
            total = Number(total) - Number(txt15);
            total = Number(total) - Number(txt16);
            total = Number(total) - Number(txt17);
            total = Number(total) - Number(txt18);
            document.getElementById("txtNetProfits").value = Number(total);
            return false;
        }
        function Trim(input) {
            var lre = /^\s*/;
            var rre = /\s*$/;
            input = input.replace(lre, "");
            input = input.replace(rre, "");
            return input;
        }
        function validate(key) {

            var keycode = (key.which) ? key.which : key.keyCode;

            if (!(keycode == 8) && (keycode < 48 || keycode > 57)) {
                return false;
            }

        }';
$this->Html->scriptEnd();
?>