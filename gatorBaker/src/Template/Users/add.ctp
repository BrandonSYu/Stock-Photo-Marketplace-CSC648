<style>
usersform{
    display: inline;
}
</style>
<label>

<div class="users form">
<?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
	<label class="col-sm-2 control-label" for="usersform">

        <?= $this->Form->control('email') ?>
        <?= $this->Form->control('password') ?>
        <?= $this->Form->control('confirm_password',['type' => 'password']) ?>          <?= $this->Form->input('accept_terms', array('type'=>'checkbox', 'label'=>'By accessing the Site, you agree to engage in only personal, noncommercial uses of Site Content or uses of Site Content for instructional purposes.')) ?>
	
   </fieldset>
<?= $this->Form->button(__('Submit')); ?>
<?= $this->Form->end() ?>
 </div>

