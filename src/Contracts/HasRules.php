<?php
namespace GetThingsDone\Types\Contracts;

interface HasRules
{

    public function getDefaultRules();

    public function getRules();
}