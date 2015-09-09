<?php
namespace Craft;

class Dropzone_InstanceRecord extends BaseRecord
{
  public function getTableName()
  {
    return 'dropzone_instances';
  }

  protected function defineAttributes()
  {
    return [];
  }
}