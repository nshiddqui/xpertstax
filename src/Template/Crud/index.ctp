<?= $this->Html->css('/plugins/datatables/dataTables.bootstrap4.min', ['block' => 'css']) ?>
<?= $this->Html->script('/plugins/datatables/jquery.dataTables.min', ['block' => 'scriptBottom']) ?>
<?= $this->Html->script('/plugins/datatables/dataTables.bootstrap4.min', ['block' => 'scriptBottom']) ?>
<div class="row">
    <div class="col-md-12">
        <div class="card-box table-responsive">
            <div class="">
                <?=
                $this->Html->link('<i class="fa fa-plus-circle fa-2x"></i>', [
                    'controller' => 'Sales',
                    'action' => 'add',
                    $title
                        ], [
                    'escape' => false,
                    'data-toggle' => 'tooltip',
                    'class' => 'float-right',
                    'plugin-position' => 'left',
                    'title' => 'Create ' . ucfirst($title)
                ])
                ?>
                <h4 class="m-t-0 m-b-30 header-title"><?= __($title) ?></h4>
                <hr>
                <table id="datatable-buttons" data-plugins="data-tables" class="table table-striped table-bordered" style="width:100%">    
                    <thead>
                        <tr>
                            <th>#Id</th>
                            <?php
                            foreach ($columns as $column) {
                                echo "<th>{$column}</th>";
                            }
                            ?>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($datas)) {
                            foreach ($datas as $key => $data) {
                                ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <?php
                                    foreach ($columns as $column => $value) {
                                        echo "<td>{$data->{$column}}</td>";
                                    }
                                    ?>
                                    <td class="actions">
                                        <?= $this->Html->link(__('<i class="fa fa-eye"></i>'), ['action' => 'view', $data->id], ['escape' => false]) ?>
                                        <?= $this->Html->link(__('<i class="fa fa-pencil-square-o"></i>'), ['action' => 'edit', $data->id], ['escape' => false]) ?>
                                        <?= $this->Form->postLink(__('<i class="fa fa-trash-o"></i>'), ['action' => 'delete', $data->id], ['escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $data->title)]) ?>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
