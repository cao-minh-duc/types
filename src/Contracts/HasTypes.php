<?php
namespace GetThingsDone\Types\Contracts;

interface HasTypes
{
    public function getAttributeNamesDefault();

    public function getAttributeNames();
}