
<!-- jQuery  -->
<?= $this->Html->script('jquery-2.1.4.min') ?>
<?= $this->Html->script('validate.min') ?>
<?= $this->Html->script('popper.min') ?>
<?= $this->Html->script('bootstrap.min') ?>
<?= $this->Html->script('metisMenu.min') ?>
<?= $this->Html->script('waves') ?>
<?= $this->Html->script('jquery.slimscroll') ?>

<!-- Counter js  -->
<?= $this->Html->script('/plugins/waypoints/jquery.waypoints.min') ?>
<?= $this->Html->script('/plugins/counterup/jquery.counterup.min') ?>


<!--C3 Chart-->
<?= $this->Html->script('/plugins/d3/d3.min') ?>
<?= $this->Html->script('/plugins/c3/c3.min') ?>

<!--Echart Chart-->
<!--?= $this->Html->script('/plugins/echart/echarts-all') ?>

<!-- Dashboard init -->
<?= $this->Html->script('/pages/jquery.dashboard') ?>

<!-- App js -->
<?= $this->Html->script('jquery.core') ?>
<?= $this->Html->script('jquery.app') ?>
<?= $this->Html->css('/plugins/datatables/dataTables.bootstrap4.min') ?>
<?= $this->Html->script('/plugins/datatables/jquery.dataTables.min') ?>
<?= $this->Html->css('/plugins/tooltipster/tooltipster.bundle.min') ?>
<?= $this->Html->script('/plugins/tooltipster/tooltipster.bundle.min') ?>
<?= $this->Html->script('/plugins/datatables/dataTables.bootstrap4.min') ?>
<link href="/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
<script src="/plugins/bootstrap-select/js/bootstrap-select.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        $('table[data-plugins="data-tables"]').each(function () {
            $(this).DataTable({
                'processing': true,
                columnDefs: [
                    {orderable: false, targets: -1}
                ]
            });
        });
        $('form[data-plugins="wizard-clickable"]').each(function () {
            $(this).stepy({
                next: function (index) {
                    var validateInput = true;
                    $('fieldset[title=\"' + (index - 1) + '\"] .required').each(function () {
                        var checkValidateInput = $(this).find('input').valid();
                        if (checkValidateInput != true) {
                            validateInput = false;
                        }
                    });
                    if (validateInput != true) {
                        return false;
                    }
                },
                finish: function () {
                    alert('Thank you for fieled details.');
                }
            });

            // Apply 'Back' and 'Next' button styling
            $('.stepy-navigator').find('.button-next').addClass('btn btn-primary waves-effect waves-light');
            $('.stepy-step').find('.button-back').addClass('btn btn-default waves-effect pull-left');
        });
    });
    $('input[data-plugins="get-address"]').on('keyup', function () {
        val = $(this).val();
        if (val.length == 6) {
            $.ajax({
                url: "https://api.postalpincode.in/pincode/" + val,
                success: function (result) {
                    $.each(result[0]['PostOffice'], function(key,value){
                        console.log(value);
                    });
                }});
        }
    });
    $('.selectpicker').selectpicker();
    $('.tooltip-title').tooltipster({
        animation: 'grow'
    });
    $(document).ready(function () {
        $('form').validate();
    });
</script>