<div class="content-container-anchor overlay-container-anchor">
    <h2 class="title-anchor title-heading">Blog content</h2>


    <div class="grid12columnbig">
        <div class="grid4columnbig lastcolumn" style="padding:20px">
            <h2><?= h($blog->title) ?></h2>
            <br>
            <?= h($blog->long_description) ?>
        </div>
        <div class="grid4column">
            <?= $this->Html->image('blogs/' . $blog->url) ?>
        </div>
        <div class="clearfix"></div>


    </div>


    <div class="clearfix"></div>



</div>
