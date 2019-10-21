<?php
$this->Html->css('/captcha_demo/css/styles', ['block' => true]);
?>

<?php $this->assign('title', 'Math Challenge Demo'); ?>
<div class="title-area large-3 medium-4 columns content">
    <?php echo $this->Element('captcha-menu'); ?>
</div>

<div class="users form large-9 medium-9 columns content">

	<h1>Math Challenge Demo</h1>

	<div style="clear:both;">
		<?= $this->Form->create($demo, ['novalidate']) ?>
		<fieldset style="padding-left:0;">
			<?php
				echo $this->Form->input('name', ['placeholder'=>'enter anything']);
				echo $this->Captcha->create('Captcha', [
				   'type'=>'math'
				]);
			?>
			
			<?= $this->Form->button(__('Submit')) ?>
		</fieldset>
		<?= $this->Form->end() ?>
	</div>

	<hr />

	</div>

</div>
</div>