<?php
namespace Craft;

class DropzoneVariable
{
    public function form($config = array())
    {
        return craft()->dropzone->form($config);
    }
}