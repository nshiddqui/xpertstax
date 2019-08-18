<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h4 class="m-t-0 m-b-30 header-title"><?= __('Edit Blog') ?></h4>
            <hr>
            <?= $this->Form->create($blog, ['type' => 'file']) ?>
            <?php
            echo $this->Form->control('title');
            echo $this->Form->control('short_description');
            echo $this->Form->control('long_description');
            echo $this->Form->control('files', ['type' => 'file', 'required' => true]);
            if (file_exists(BLOG_ROOT . $blog->url)) {
                echo $this->Html->link('<i class="fa fa-download"></i> Download File', BLOG_PATH . $blog->url, ['download' => $blog->url, 'escape' => false]);
                echo "<hr>";
            }
            ?>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
    <!-- end col -->
</div>

