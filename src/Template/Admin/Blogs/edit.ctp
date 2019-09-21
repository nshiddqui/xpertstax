<?= $this->Html->script('https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js', ['block' => 'scriptBottom']) ?>
<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h4 class="m-t-0 m-b-30 header-title"><?= __('Edit Blog') ?></h4>
            <hr>
            <?= $this->Form->create($blog, ['type' => 'file']) ?>
            <?php
            echo $this->Form->control('title');
            echo $this->Form->control('short_description');
            echo $this->Form->control('files', ['type' => 'file', 'label' => 'Please upload here to attached on blog', 'onchange' => 'uploadImage(this,"#update")']);
            $this->Form->unlockField('file.*');
            echo "<div id='update' class='badge ml-5 mb-2 p-2'></div>";
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
<?php
$this->Html->scriptStart(['block' => 'scriptBottom']);
echo 'CKEDITOR.replace("long_description",{
            height: 400
        })';
$this->Html->scriptEnd();
?>
<?php
$this->Html->scriptStart(['block' => 'scriptBottom']);
echo 'function uploadImage(obj,response){
    var fileDocument = new FormData();    
        fileDocument.append("files", $(obj)[0].files[0]);
        console.log(fileDocument);
    $.ajax({
        url: "' . $this->Url->build(["controller" => "Blogs", "action" => "Upload"]) . '",
        data: fileDocument,
        type: "POST",
        processData: false,
        contentType: false,
        success: function(data){
                $(response).html(data);
                }
        });
}';
$this->Html->scriptEnd();
?>

