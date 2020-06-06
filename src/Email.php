<?php
namespace GetThingsDone\Types;

class Email extends TypeAbstract
{
    public function getDefaultRules(): array
    {
        return [
            'required',
            'email:rfc,dns'
        ];
    }
}