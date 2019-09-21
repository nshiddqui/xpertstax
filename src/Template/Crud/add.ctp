<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h4 class="m-t-0 m-b-30 header-title"><?= __('Add ' . $title) ?></h4>
            <hr>
            <?= $this->Form->create($newEntity) ?>
            <?php
            foreach ($columns as $column) {
                echo $this->Form->control($column);
            }
            echo $this->Form->control('user_details.name');
            ?>
            <?= $this->Form->button(__('Add ' . ucfirst($title))) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
    <!-- end col -->
</div>

