<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h4 class="m-t-0 m-b-30 header-title"><?= __('Add User') ?></h4>
            <?= $this->Form->create($user) ?>
            <legend><?= __('Edit User') ?></legend>
            <?php
            if(!isset($basic_input) || $basic_input!==true){
                echo $this->Form->label('role', 'Select Role');
                echo $this->Form->select('role', [0 => 'Admin', 1 => 'Client']);
                echo $this->Form->control('pan_number');
            }else{
                echo $this->Form->control('pan_number',['disabled'=>true,'name'=>false]);
            }
            echo $this->Form->control('user_detail.first_name');
            echo $this->Form->control('user_detail.last_name');
            ?>
            <?= $this->Form->button(__('Save')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
    <!-- end col -->
</div>
