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
<h4>Software developer</h4>

<div class="about">
  Looking for an experience web developer to work on your website or part of a team? Then you have come to the right place.
  <br />
  My experience ranges in:
  <ul>
    <li>HTML/XHTML/HTML 5</li>
    <li>CSS</li>
    <li>Javascript</li>
    <li>JQuery</li>
    <li>PHP 5.3</li>
    <li>Lithium Framework</li>
    <li>MVC frameworks</li>
    <li>OOP in PHP</li>
    <li>PHP Unit testing</li>
    <li>SVN/Github</li>
    <li>MySQL</li>
    <li>Database Schemes</li>
    <li>Rational Database</li>
    <li>Jenkins</li>
    <li>Ant Build Process</li>
  </ul>

  This is the short list. <a href="$this->url('Work::index')">View my previous projects</a> or <a href="$this->url('Pages::resume')">View my resume</a>
</div>

<div class="posts">
<?php 
foreach($myPosts as $post): ?>
  <hr />
  <div class="post">
    <h4><?=$post->title ?></h4>
    <div class="body"><?=$post->body ?></div>
    <div class="controls"><a href="#top">Top</a></div>
  </div>
<?php 
endforeach; ?>