<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div id="error" class="alert alert-danger alert-dismissible in" onclick="this.classList.add('hidden');">
    <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <?= $message ?>
</div>
