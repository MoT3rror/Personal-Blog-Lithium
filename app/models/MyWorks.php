<?php

namespace app\models;

class MyWorks extends \lithium\data\Model
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
      'description'        => array(
          'type'      => 'text',
          'null'      => true,
      ),
      'image_filename'  => array(
          'type'      => 'string',
          'length'    => 100,
          'null'      => false,
          'default'   => null,
      ),
      'created_at'  => array(
          'type'      => 'integer',
          'null'      => true,
          'length'    => 11,
      ),
  );

  public $imgdir_filesystem = '/var/www/Personal-Blog-Lithium/webroot/img';

  public $imgdir_webserver = 'mywork';

  public function getImageSrc($entity)
  {
    if($entity->image_filename)
    {
      return $this->imgdir_webserver . '/' . $entity->image_filename;
    }
    else
    {
      return $this->defaultImage();
    }
  }

  public function defaultImage()
  {
    return $this->imgdir_webserver . '/default.jpg';
  }

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