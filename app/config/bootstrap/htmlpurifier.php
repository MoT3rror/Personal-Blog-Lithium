<?php
use app\extensions\helper\HTMLPurifier;

HTMLPurifier::setConfig('default', array(
  'AutoFormat.AutoParagraph'    =>  true,
));
?>