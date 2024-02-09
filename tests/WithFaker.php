<?php

namespace Tests;

use Faker\Factory;
use Faker\Generator;

trait WithFaker
{
    public function faker(): Generator
    {
        return Factory::create();
    }
}
