<div class="row">
    <div class="col-md-12">
        <div class="card-box table-responsive">
            <h3 class="m-t-0 m-b-30 header-title"><?= __('Users') ?></h3>
            <hr>
            <div class="text-center">
                <table class="table table-bordered  table-responsive table-centered">
                    <tr>
                        <th class="col-1"><?= __('Pan Number') ?></th>
                        <td><?= h($user->pan_number) ?></td>
                    </tr>
                    <tr>
                        <th class=""><?= __('Password') ?></th>
                        <td><?= h($user->password) ?></td>
                    </tr>
                    <tr>
                        <th class=""><?= __('Role') ?></th>
                        <td><?= h($user->role) ?></td>
                    </tr>
                    <tr>
                        <th class=""><?= __('Id') ?></th>
                        <td><?= $this->Number->format($user->id) ?></td>
                    </tr>
                    <tr>
                        <th class=""><?= __('Created') ?></th>
                        <td><?= h($user->created) ?></td>
                    </tr>
                    <tr>
                        <th class=""><?= __('Modified') ?></th>
                        <td><?= h($user->modified) ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
