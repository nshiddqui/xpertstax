<div class="content-container-anchor overlay-container-anchor">
    <h2 class="title-anchor title-heading">Files & Presentations</h2>
    <?php
    foreach ($documents as $document) {
        ?>
        <div style="width:100%">
            <div class="padding:10px">
                <div class="grid6column">
                    <?= $this->Html->image('blogs/' . $document->image_url, ['style' => 'width: 338px;height:140px;float: left;margin:0 13px']) ?>
                </div>
                <div class="grid2column lastcolumn" style="width: 64.5%;">
                    <h4><?= h($document->title) ?></h4>
                    <p style="    text-overflow: ellipsis;
                       overflow: hidden;
                       height: 74px;
                       "><?= h($document->description) ?></p>
                    <a href="<?= $this->Url->build(['controller' => 'download', 'action' => 'documents', $document->url]); ?>" download="documents" style="float:right" class="button-anchor">Download</a>
                </div>

            </div>
        </div>
        <div class="clearfix"></div>
        <hr>
    <?php } ?>
    <div class="clearfix"></div>
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
