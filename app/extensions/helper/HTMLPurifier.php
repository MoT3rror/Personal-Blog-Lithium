<?php
/**
 * Helper to class to use in views to sanitize HTML
 */
namespace app\extensions\helper;

class HTMLPurifier extends \lithium\template\Helper
{
  static private $config = array(
      'default'   => array(),
  );

  /**
   * Get HTML Purifier Object from config options
   * @param string $config option from array HTMLPurifier::$config
   */
  public function getHTMLPurifier($config = 'default')
  {
    $HTMLPurifier = \HTMLPurifier_Config::createDefault();

    if(!array_key_exists($config, self::$config))
    {
      throw new \Exception('Invalid config "' . $config . '" given to app\\extentions\\helper\\HTMLPurifier');
    }

    foreach(self::$config[$config] AS $key => $value)
    {
      $HTMLPurifier->set($key, $value);
    }

    return new \HTMLPurifier($HTMLPurifier);
  }

  /**
   * Sanitizes the string with HTMLPurifier uses default config else otherwise specify
   * @param string $html the bad string to purify
   * @param string $config the setting config you want to use
   * @return string clean html
   */
  public function sanitize($html, $config = 'default')
  {
    $HTMLPurifier = $this->getHTMLPurifier($config);

    return $HTMLPurifier->purify($html);
  }

  /**
   * sets the config of html
   * @param string $config name of the config
   * @param array $options the config set to HTML Purifier
   * @return null 
   */
  static public function setConfig($config, $options)
  {
    self::$config[$config] = $options;
  }
}
?>