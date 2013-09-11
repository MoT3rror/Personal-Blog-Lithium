<?php
$this->title('My Work');
$first = true;
?>

<h2>My Recent Projects</h2>

<?php foreach($myWorks as $work): 
if($first == false)
{
  echo '<hr />';
}
?>
  <div class="work_container">
    <?= $this->html->image($work->getImageSrc(), array('align' => 'left')) ?>
    <div class="work">
      <h3><!--<a href="<?= $this->url('MyWork::view') ?>/$work->id">--><?=$work->title ?><!--</a>--></h3>
      <div><?=$this->HTMLPurifier->sanitize($work->description) ?></div>
  </div>
</div>
<?php $first = false; endforeach; ?>