<?php
namespace GetThingsDone\Types\Contracts;

interface HasTypes
{
    public function getCasts();
    
    public function getAttributeNamesDefault();

    public function getAttributeNames();
}