<?php
/**
 * Placid Cache class
 *
 * Handles caching of requests and ting
 *
 * @author    Alec Ritson. <info@alecritson.co.uk>
 * @copyright Copyright (c) 2015, Alec Ritson.
 * @license   http://buildwithcraft.com/license Craft License Agreement
 * @link      http://itsalec.co.uk
 * @package   craft.plugins.placid.services
 * @since     1.0.0
 */
namespace Craft;

class DropzoneService extends BaseApplicationComponent
{
	protected $instance;

	public function uploadAssets()
	{

	}
	public function form($config = array())
	{	
		$this->_includeDropzoneResources();

		$actionUrl = UrlHelper::getActionUrl('dropzone/upload');

		$form = "<form method=\"POST\" enctype=\"multipart/form-data\" class=\"dropzone\" action=\"{$actionUrl}\">";
	
		if(isset($config['sourceId']))
		{
			$form .= "<input type=\"hidden\" name=\"sourceId\" value=\"{$config['sourceId']}\">";
		}

		$form .= "</form>";

		return $form;

	}

	private function _includeDropzoneResources()
	{
		// Include dropzone
        craft()->templates->includeJsResource('dropzone/js/dropzone.js');
        craft()->templates->includeCssResource('dropzone/css/dropzone.css');
	}

	public function poop($nugget)
	{
		Craft::dump($nugget);
		craft()->end();
	}
	
	public function getInstance()
	{
		return $this->instance;
	}
}