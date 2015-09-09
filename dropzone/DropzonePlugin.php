<?php

namespace Craft;

class DropzonePlugin extends BasePlugin
{
  function getName()
  {
    return Craft::t('Dropzone');
  }
  function getVersion()
  {
    return '0.1.0';
  }
  function getDeveloper()
  {
    return 'Alec Ritson';
  }
  function getDeveloperUrl()
  {
    return 'http://itsalec.co.uk';
  }

  private function _getThemes()
  {
    return array(
      array(
        'label' => 'Default',
        'value' => 'default'
      )
    );
  }
  /**
   * @return array
   */
  protected function defineSettings()
  {
    return array(
      'useTheme'   => array(AttributeType::Bool, 'default' => false),
      'dropzoneTheme'      => AttributeType::String,
    );
  }
  /**
   * @return mixed
   */
  public function getSettingsHtml()
  {
    return craft()->templates->render('dropzone/_settings', array(
      'settings' => $this->getSettings(),
      'themes' => $this->_getThemes()
    ));
  }
}