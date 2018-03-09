<?php
pr($new);
?>

<?= $this->Form->create()?>
<?= $this->Form->input('name')?>
<?= $this->Form->input('type')?>
<?= $this->Form->input('location_y')?>
<?= $this->Form->input('location_x')?>
<?= $this->Form->input('stock')?>
<?= $this->Form->submit()?>
<?= $this->Form->end()?>
