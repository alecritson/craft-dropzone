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
    return '0.0.0';
  }
  function getDeveloper()
  {
    return 'Alec Ritson';
  }
  function getDeveloperUrl()
  {
    return 'http://itsalec.co.uk';
  }
  public function init()
  {
    craft()->on('entries.onBeforeSaveEntry', function(Event $event) {
        $data = craft()->request->getPost();

        $entry = $event->params['entry'];

        $entry->getContent()->title = 'malala';
        
        // Craft::dump();
        // craft()->end();
    });
  }
}