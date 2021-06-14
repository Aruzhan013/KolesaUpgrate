<?php

use Codeception\Util\Fixtures;

class FixtureCest{
    /**
     * @group test11
     */
    public function test(FunctionalTester $I){
        Fixtures::get('test');
    }
}