<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2013, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

use lithium\core\Libraries;
use lithium\core\Environment;
use lithium\data\Connections;

$this->title('Page not found');
$this->html->style('debug', array('inline' => false));

echo 'The page you requested was not found.';