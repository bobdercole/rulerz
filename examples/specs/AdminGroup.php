<?php

namespace SampleSpecs;

use RulerZ\Spec\AbstractSpecification;

class AdminGroup extends AbstractSpecification
{
    public function getRule()
    {
        return 'club.name = "Admin"';
    }

    public function getParameters()
    {
        return [];
    }
}
