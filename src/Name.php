<?php
namespace GetThingsDone\Types;

class Name extends TypeAbstract
{
    public function getDefaultRules(): array
    {
        return [
            'required',
            'string',
            'max:255'
        ];
    }
}