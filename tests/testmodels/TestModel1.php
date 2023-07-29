<?php

declare(strict_types=1);

namespace atkextendedtestcase\tests\testmodels;

use Atk4\Data\Model;

class TestModel1 extends Model {

    public $table = "testmodel1";

    protected function init(): void
    {
        parent::init();
        $this->addField('name');
    }
}