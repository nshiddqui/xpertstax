<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h4 class="m-t-0 m-b-30 header-title">BLOG POST</h4>
            <?= $this->Form->create(null, ['type' => 'file']) ?>
            <?= $this->Flash->render() ?>
            <?= $this->Form->control('title') ?>
            <?= $this->Form->control('short_description') ?>
            <?= $this->Form->control('long_description') ?>
            <?= $this->Form->control('files', ['type' => 'file']) ?>
            <?= $this->Form->button('upload') ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
    <!-- end col -->
</div>

