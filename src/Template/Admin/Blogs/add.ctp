<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h4 class="m-t-0 m-b-30 header-title"><?= __('Add Blog') ?></h4>
            <hr>
            <?= $this->Form->create($blog, ['type' => 'file']) ?>
            <?php
            echo $this->Form->control('title');
            echo $this->Form->control('short_description');
            echo $this->Form->control('long_description');
            echo $this->Form->control('files', ['type' => 'file'])
            ?>
            <?= $this->Form->button(__('Post')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
    <!-- end col -->
</div>

