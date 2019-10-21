<?php
$this->Html->css('/captcha_demo/css/styles', ['block' => true]);
?>

<?php $this->assign('title', 'Image Captcha Demo'); ?>

<div class="title-area large-3 medium-4 columns content">
    <?php echo $this->Element('captcha-menu'); ?>
</div>
<div class="users form large-9 medium-8 columns content">

	<h1>Image Captcha Demo</h1>

	<div style="clear:both;">
		<?= $this->Form->create($demo, ['novalidate']) ?>
		<fieldset style="padding-left:0;">
			<?php
				echo $this->Form->input('name', ['placeholder'=>'Enter name']);
				echo $this->Captcha->create('Captcha',['reload_txt'=>false]);
			?>
			<?= $this->Form->button(__('Submit')) ?>
		</fieldset>
		<?= $this->Form->end() ?>
	</div>

	<hr />

	</div>

</div>
<script 
src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
jQuery('.creload').on('click', function() {
    var mySrc = $(this).prev().attr('src');
    var glue = '?';
    if(mySrc.indexOf('?')!=-1)  {
        glue = '&';
    }
    $(this).prev().attr('src', mySrc + glue + new Date().getTime());
    return false;
});
</script>