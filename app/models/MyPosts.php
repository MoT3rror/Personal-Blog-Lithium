<?php

namespace app\models;

class MyPosts extends \lithium\data\Model
{
  protected $_scheme = array(
      'id'    => array(
          'type'      => 'id',
          'length'    => 10,
          'null'      => false,
          'default'   => null,
      ),
      'title'       => array(
          'type'      => 'string',
          'length'    => 255,
          'null'      => false,
          'default'   => null,
      ),
      'body'        => array(
          'type'      => 'text',
          'null'      => true,
      ),
      'created_at'  => array(
          'type'      => 'integer',
          'null'      => true,
          'length'    => 11,
      ),
  );

  public static function __init()
  {
    static::applyFilter('save', function($self, $params, $chain) {
      if(!$params['entity']->exists())
      {
        $params['data']['created_at'] = time();
      }

      return $chain->next($self, $params, $chain);
    });
  }
}
?>