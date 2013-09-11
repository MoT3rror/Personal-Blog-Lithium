<?php
$this->title('Posts');
?>

<h2>This is the posts page</h2>
<?php foreach($myPosts as $post): ?>
<div><?=$post->title ?></div>
<div><?=$this->HTMLPurifier->sanitize($post->body) ?></div>
<?php endforeach; ?>