<div class="row">
    <div class="col-md-12">
        <div class="card-box table-responsive">
            <h3 class="m-t-0 m-b-30 header-title"><?= __('Documents') ?></h3>
            <hr>
            <div class="documents card view p-20 large-9 medium-8 columns">
                <h4><?= h($document->title) ?></h4>
                <hr>
                <table class="vertical-table">
                    <tr>
                        <th scope="row"><?= __('Title') ?></th>
                        <td><?= h($document->title) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Url') ?></th>
                        <td><?= h($document->url) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Created') ?></th>
                        <td><?= h($document->created) ?></td>
                    </tr>
                </table>
                <h5><?= __('Description') ?></h5>
                <div class="row p-20 card-box">
                    <?= $this->Text->autoParagraph(h($document->description)); ?>
                </div>
            </div>
        </div>
    </div>
</div>
