<?php
/**
 * Dropzone class
 *
 * Handles dropzone tasks
 *
 * @author    Alec Ritson. <info@alecritson.co.uk>
 * @copyright Copyright (c) 2015, Alec Ritson.
 * @license   http://buildwithcraft.com/license Craft License Agreement
 * @link      http://itsalec.co.uk
 * @package   craft.plugins.dropzone.services
 * @since     0.1.0
 */
namespace Craft;

class DropzoneService extends BaseApplicationComponent
{
	/**
	 * Returns our dropzone form to the template
	 * @param  array  $config An array of settings
	 * @return String         The resulting HTML form
	 */
	public function form($config = array())
	{	
		$this->_includeDropzoneResources();

		$actionUrl = UrlHelper::getActionUrl('dropzone/upload');

		$form = "<form method=\"POST\" enctype=\"multipart/form-data\" class=\"dropzone\" action=\"{$actionUrl}\">";

		if(isset($config['sourceId']))
		{
			$form .= "<input type=\"hidden\" name=\"sourceId\" value=\"{$config['sourceId']}\">";
		}

		if(isset($config['allowAnonymous']))
		{
			$form .= "<input type=\"hidden\" name=\"allowAnonymous\" value=\"{$config['allowAnonymous']}\">";
		}

		$form .= "</form>";

		return $form;

	}

	/**
	 * Includes our dropzone resources
	 * @return void
	 */
	private function _includeDropzoneResources()
	{

		$pluginSettings = craft()->plugins->getPlugin('dropzone')->getSettings();

		// Include dropzone
        craft()->templates->includeJsResource('dropzone/js/dropzone.js');

        if($pluginSettings['useTheme'])
        {
        	craft()->templates->includeCssResource('dropzone/css/themes/'. $pluginSettings['dropzoneTheme'] . '.css');
        }
        
	}

}