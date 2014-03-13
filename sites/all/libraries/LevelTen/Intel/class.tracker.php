<?php
/**
 * @file
 * @author  Tom McCracken <tomm@levelten.net>
 * @version 1.0
 * @copyright 2013 LevelTen Ventures
 * 
 * @section LICENSE
 * All rights reserved. Do not use without permission.
 * 
 */
namespace LevelTen\Intel;

require_once 'class.apiclient.php';
require_once 'class.exception.php';

class ApiTracker {

	protected $apiClient;
  protected $domain;
  protected $vtk;

  public function __construct($apiClientProperties = array()) {
    $this->apiClient = new ApiClient($apiClientProperties);
  }

  public function setDomain($domain) {
    $this->domain = $domain;
  }

  public function setVtk($vtk) {
    $this->vtk = $vtk;
  }

  public function trackEvent($category, $action, $value = null, $noninteraction = null) {
    $endpoint = 'tracker/trackevent';

    $params = array(
      'domain' => $this->domain,
      'category' => $category,
      'action' => $action,
    );
    if (isset($value)) {
      $params['value'] = $value;
    }
    if (isset($noninteraction)) {
      $params['noninteraction'] = $noninteraction;
    }
    if (!empty($this->vtk)) {
      $params['vtk'] = $this->vtk;
    }
    try {
      $ret = $this->apiClient->getJSON($endpoint, $params);
      return $ret;
    }
    catch (Exception $e) {
      throw new Exception('Unable to trackEvent: ' . $e);
    }

  }
	
  public function __toString() {
    return 'ApiTracker: ' . $this->$tid;
  }
}