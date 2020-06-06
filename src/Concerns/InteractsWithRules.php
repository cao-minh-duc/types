<?php
namespace GetThingsDone\Types\Concerns;

use GetThingsDone\Types\Types;

trait InteractsWithRules
{
    protected array $rules = [];

    public function getDefaultRules(): array
    {
        $rules = [];
        foreach($this->getCasts() as $attribute => $type)
        {
            if( Types::doesntExist($type))
            {
                continue;
            }

            $rules[$attribute] = (new $type)->getDefaultRules();
        }

        return $rules;
    }

    public function getRules(): array
    {
        return array_merge(
            $this->getDefaultRules(),
            $this->rules
        );
    }
}