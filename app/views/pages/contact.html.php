<h2>Contact Me</h2>
<div style="margin-left: 10px;">
<?=$this->form->create(); ?>
    <!--Generate a text field for "title"-->
    <?=$this->form->field('full_name');?>
    <?= $this->form->field('email_address'); ?>
    <?= $this->form->field('subject'); ?>
    <!--Generate a textarea field for body content-->
    <?=$this->form->field('message',array('type'=>'textarea'));?>
    <!--Generate the submit button-->
    <?=$this->form->submit('Send message');?>
<!--Generate the closing form tag-->
<?=$this->form->end();?>
</div>