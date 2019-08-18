<div class="row">
    <div class="col-md-12">
        <div class="card-box table-responsive">
            <h3 class="m-t-0 m-b-30 header-title"><?= __('Blogs') ?></h3>
            <hr>
            <div class="documents card view p-20 large-9 medium-8 columns">
                <h4><?= h($blog->title) ?></h4>
                <hr>
                <table class="vertical-table">
                    <tr>
                        <th scope="row"><?= __('Title') ?></th>
                        <td><?= h($blog->title) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('File') ?></th>
                        <td><?php
                            if (file_exists(BLOG_ROOT . $blog->url)) {
                            echo $this->Html->link('<i class="fa fa-download"></i> Download File', BLOG_PATH . $blog->url, ['download' => $blog->url, 'escape' => false]);
                            }
                            ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Created') ?></th>
                        <td><?= h($blog->created) ?></td>
                    </tr>
                </table>
                <h5><?= __('Short Description') ?></h5>
                <div class="row p-20 card-box">
<?= $this->Text->autoParagraph(h($blog->short_description)); ?>
                </div>
                <h5><?= __('Long Description') ?></h5>
                <div class="row p-20 card-box">
<?= $this->Text->autoParagraph(h($blog->long_description)); ?>
                </div>
            </div>
        </div>
    </div>
</div>
