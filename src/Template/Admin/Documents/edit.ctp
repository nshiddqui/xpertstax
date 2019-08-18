<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h4 class="m-t-0 m-b-30 header-title"><?= __('Edit Document') ?></h4>
            <hr>
            <?= $this->Form->create($document, ['type' => 'file']) ?>
            <?php
            echo $this->Form->control('title');
            echo $this->Form->control('description');
            echo $this->Form->control('files', ['type' => 'file', 'required' => true]);
            if (file_exists(DOC_ROOT . $document->url)) {
                echo $this->Html->link('<i class="fa fa-download"></i> Download File', DOC_PATH . $document->url, ['download' => $document->url, 'escape' => false]);
                echo "<hr>";
            }
            ?>
            <?= $this->Form->button(__('Upload')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
    <!-- end col -->
</div>
