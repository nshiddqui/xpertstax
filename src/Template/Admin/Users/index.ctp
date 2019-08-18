<?= $this->Html->css('/plugins/datatables/dataTables.bootstrap4.min', ['block' => 'css']) ?>
<?= $this->Html->script('/plugins/datatables/jquery.dataTables.min', ['block' => 'scriptBottom']) ?>
<?= $this->Html->script('/plugins/datatables/dataTables.bootstrap4.min', ['block' => 'scriptBottom']) ?>
<div class="row">
    <div class="col-md-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 m-b-30 header-title"><?= __('Blog') ?></h4>
            <hr>
            <table id="datatable-buttons" data-plugins="data-tables" class="table table-striped table-bordered" style="width:100%">    
                <thead>
                    <tr>
                        <th>#Id</th>
                        <th>Pan Number</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Created</th>
                        <th>Last Modified</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $key => $user) { ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $user->pan_number ?></td>
                            <td><?= $user['user_detail']->first_name ?></td>
                            <td><?= $user['user_detail']->last_name ?></td>
                            <td><?= $user->created ?></td>
                            <td><?= $user['user_detail']->modified ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('<i class="fa fa-eye"></i>'), ['action' => 'view', $user->id], ['escape' => false]) ?>
                                <?= $this->Html->link(__('<i class="fa fa-pencil-square-o"></i>'), ['action' => 'edit', $user->id], ['escape' => false]) ?>
                                <?= $this->Form->postLink(__('<i class="fa fa-trash-o"></i>'), ['action' => 'delete', $user->id], ['escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $user['user_detail']->first_name)]) ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
