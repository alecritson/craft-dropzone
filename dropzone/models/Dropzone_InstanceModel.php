<?php
namespace Craft;

class Dropzone_InstanceModel extends BaseModel
{
    protected function defineAttributes()
    {
        return array(
            'id'    => AttributeType::Number
        );
    }
}