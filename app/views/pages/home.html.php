<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2013, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

$this->title('Home');
$this->html->style('debug', array('inline' => false));

?>
<h4 class="pagination-centered">Software developer</h4>

<?php foreach($myPosts as $post): ?>
<div><?=$post->title ?></div>
<div><?=$post->body ?></div>
<?php endforeach; ?>