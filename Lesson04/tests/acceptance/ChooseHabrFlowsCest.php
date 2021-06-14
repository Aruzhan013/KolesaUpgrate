<?php
namespace Test\Acceptance;

use AcceptanceTester;
use Codeception\Example;
use Page\Acceptance\ChooseHabr;
use Page\Acceptance\SearchByFilter;

/**
 * Класс для выбора главы
 */
    class ChooseHabrFlowsCest{

    /**
     * выбор главы
     * @group test4
     * @param Example $data
     * @dataProvider getDataForFlows
     */

            public function searchCarsByBodyType(AcceptanceTester $I, Example $data){
                $I->amOnPage('');
                $I->click(sprintf(ChooseHabr::$flowType, $data ['flowType']));
                $I->wait(5);
                $I->seeInCurrentUrl($data['url']);

            }

            protected function getDataForFlows(){
                $res = [];
                $allBars = [
                    ['flowType' => '1', 'url' => 'top'],
                    ['flowType' => '2', 'url' => 'flows/develop/'],
                    ['flowType' => '3', 'url' => 'flows/admin/'],
                    ['flowType' => '4', 'url' => 'flows/design/'],
                    ['flowType' => '5', 'url' => 'flows/management/'],
                    ['flowType' => '6', 'url' => 'flows/marketing/'],
                    ['flowType' => '7', 'url' => 'flows/popsci/']
                ];
                shuffle($allBars);
                array_push($res, $allBars[0]);
                array_push($res, $allBars[1]);
                
                return $res;
            }



    }