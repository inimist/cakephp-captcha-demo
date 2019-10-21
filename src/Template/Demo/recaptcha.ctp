<?php
$this->Html->css('/captcha_demo/css/styles', ['block' => true]);
?>

<script src='https://www.google.com/recaptcha/api.js'></script>
<?php $this->assign('title', 'Google Recaptcha Demo'); ?>
<div class="title-area large-3 medium-4 columns content">
    <?php echo $this->Element('captcha-menu'); ?>
</div>

<div class="users form large-9 medium-9 columns content">

	<h1>Google Recaptcha Demo</h1>

	<div style="clear:both;">
		<?= $this->Form->create($demo, ['novalidate']) ?>
		<fieldset style="padding-left:0;">
			<?php
				echo $this->Form->input('name', ['placeholder'=>'Enter name']);
				echo $this->Captcha->create('Captcha', [
				   'type'=>'recaptcha',
				   'sitekey'=>'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'
				]);
			?>
		</fieldset>
		<?= $this->Form->button(__('Submit')) ?>
		<?= $this->Form->end() ?>
	</div>

	<hr />

	</div>

</div>


</div>
