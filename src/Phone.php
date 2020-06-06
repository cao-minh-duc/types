<?php
namespace GetThingsDone\Types;

class Phone extends TypeAbstract
{
    public function getDefaultRules(): array
    {
        return [
            'required',
            'string',
            'alpha_num',
            'max:20'
        ];
    }
}