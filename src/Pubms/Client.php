<?php

class Pubms_Client{

  const VERSION = "0.1";

  private $config;

  public function __construct(array $config = array()){

  }

  public function getVersion()
  {
    return self::VERSION;
  }

  public function setConfig($name, $value)
  {
    $this->config[$name] = $value;
  }

  public function getConfig($name, $default = null)
  {
    return isset($this->config[$name]) ? $this->config[$name] : $default;
  }
}
