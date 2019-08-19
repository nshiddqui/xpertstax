
<!-- jQuery  -->
<?= $this->Html->script('jquery-2.1.4.min') ?>
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
<?= $this->Html->script('/plugins/datatables/dataTables.bootstrap4.min') ?>
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
    });
    $(document).ready(function () {
        $('form').validate();
    });
</script>