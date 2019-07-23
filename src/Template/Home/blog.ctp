<div class="content-container-anchor overlay-container-anchor">
    <h2 class="title-anchor title-heading">BLOG POST</h2>
    <?php
    foreach ($blogs as $blog) {
        ?>
        <div style="width:100%">
            <div class="padding:10px">
                <div class="grid6column">
                    <?= $this->Html->image('blogs/'.$blog->url, ['style' => 'width: 338px;height:140px;float: left;margin:0 13px']) ?>
                </div>
                <div class="grid2column lastcolumn" style="width: 64.5%;">
                    <h4><?= h($blog->title) ?></h4>
                    <p><?= h($blog->short_description) ?></p>
                    <a href="<?= $this->Url->build(['controller' => 'Home', 'action' => 'blog_view', base64_encode(base64_encode($blog->id))]); ?>" style="float:right" class="button-anchor">Read more</a>
                </div>

            </div>
        </div>
    <?php } ?>
    <div class="clearfix"></div>
    <hr>
    <?=
    $this->Paginator->counter(
            'Page {{page}} of {{pages}}, showing {{current}} records out of
     {{count}} total, starting on record {{start}}, ending on {{end}}'
    )
    ?>
    <div class="pagination pagination-lg float-right">
        <?= $this->Paginator->prev('« Previous') ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next('Next »') ?>
    </div>
    <div class="clearfix"></div>
</div>
