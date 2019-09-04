<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h4 class="m-t-0 m-b-30 header-title"><?= __('FIrst Type Form') ?></h4>
            <p class="text-muted m-b-30 font-13">
                This is first form to registered with us.
            </p>
            <?= $this->Form->create($user, ['data-plugins' => 'wizard-clickable']) ?>
            <fieldset title="1">
                <legend>Basic Information</legend>

                <div class="row m-t-20">
                    <div class="col-sm-6">
                        <?= $this->Form->control('pan_number', ['disabled' => true, 'name' => false]); ?>
                        <?= $this->Form->control('user_detail.first_name'); ?>
                        <?= $this->Form->control('phone_number') ?>
                    </div>
                    <div class="col-sm-6">
                        <?= $this->Form->control('company_name')?>
                        <?= $this->Form->control('user_detail.last_name') ?>
                        <?= $this->Form->control('email') ?>
                    </div>
                </div>

            </fieldset>

            <fieldset title="2">
                <legend>Address</legend>

                <div class="row m-t-20">
                    <div class="col-sm-6">
                        <?= $this->Form->control('user_detail.pin_code',['data-plugins'=>'get-address']) ?>
                        <div class="form-group">
                            <label for="address1">Address</label>
                            <input type="text" class="form-control" id="address1" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="aboutme1">About Me</label>
                            <textarea class="form-control" rows="5" id="aboutme1"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="currentlocation1">Current Location</label>
                            <input type="text" class="form-control" id="currentlocation1" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="username">Freelance</label>
                            <select class="form-control">
                                <option>Available</option>
                                <option>Unavailable</option>
                            </select>
                        </div>
                    </div>
                </div>
            </fieldset>

            <fieldset title="3">
                <legend>Social Profiles</legend>

                <div class="row m-t-20">
                    <div class="col-sm-6">

                        <div class="form-group">
                            <label>Facebook</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="mdi mdi-facebook"></i></span>
                                <input type="text" class="form-control" placeholder="Facebook url">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Linkdin</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="mdi mdi-linkedin"></i></span>
                                <input type="text" class="form-control" placeholder="Linkdin url">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Instagram</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="mdi mdi-instagram"></i></span>
                                <input type="text" class="form-control" placeholder="Instagram url">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Twitter</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="mdi mdi-twitter"></i></span>
                                <input type="text" class="form-control" placeholder="Twitter url">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Skype</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="mdi mdi-skype"></i></span>
                                <input type="text" class="form-control" placeholder="Skype url">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Pinterest</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="mdi mdi-pinterest"></i></span>
                                <input type="text" class="form-control" placeholder="Pinterest url">
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>

            <button type="submit" class="btn btn-primary stepy-finish">Submit</button>
            <?= $this->Form->end() ?>

        </div>
    </div>
</div>

<!-- End row -->
<!--Form Wizard-->
<?= $this->Html->script('/plugins/jquery.stepy/jquery.stepy.min', ['block' => 'scriptBottom']) ?>
<?php
$this->Html->scriptStart(['block' => 'scriptBottom']);
echo "// Stepy callbacks
    $('#wizard-clickable').stepy({
        next: function (index) {
            $('fieldset[title=\"'+index+'\"] input').each(function(){
                var attr = $(this).attr('required');
                if (typeof attr !== typeof undefined && attr !== false) {
                    console.log(this);
                }
            });
        },
        finish: function () {
            alert('Submit canceled.');
            return false;
        }
    });

    // Apply 'Back' and 'Next' button styling
    $('.stepy-navigator').find('.button-next').addClass('btn btn-primary waves-effect waves-light');
    $('.stepy-step').find('.button-back').addClass('btn btn-default waves-effect pull-left');";
$this->Html->scriptEnd();
?>