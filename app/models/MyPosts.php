<?php

namespace app\models;

class MyPosts extends \lithium\data\Model
{
  protected $_scheme = array(
      'id'    => array(
          'type'    => 'id',
          'length'  => 10,
          'null'    => false,
          'default' => null,
      ),
      'title' => array(
          'type'    => 'string',
          'length'  => 255,
          'null'    => false,
          'default' => null,
      ),
      'body'  => array(
          'type'    => 'text',
          'null'    => true,
      ),
  );
}
?>