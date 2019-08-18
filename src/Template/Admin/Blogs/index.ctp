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
                        <th>Title</th>
                        <th>URL</th>
                        <th>Created</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($blogs as $key => $blog) { ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $blog->title ?></td>
                            <td><?= $blog->url ?></td>
                            <td><?= $blog->created ?></td>
                            <td><?= $this->Html->link(__('<i class="fa fa-eye"></i>'), ['action' => 'view', $blog->id], ['escape' => false]) ?>
                                <?= $this->Html->link(__('<i class="fa fa-pencil-square-o"></i>'), ['action' => 'edit', $blog->id], ['escape' => false]) ?>
                                <?= $this->Form->postLink(__('<i class="fa fa-trash-o"></i>'), ['action' => 'delete', $blog->id], ['escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $blog->title)]) ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
