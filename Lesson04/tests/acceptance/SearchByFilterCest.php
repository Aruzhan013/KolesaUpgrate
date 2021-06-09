<?php
namespace Test\Acceptance;

use AcceptanceTester;
use Codeception\Example;
use Page\Acceptance\SearchByFilter;

/**
 * Класс для тестирования поиска 
 */
    class SearchByFilterCest{

    /**
     * тест на проверку поиска легковых по типу кузова
     * @group test2
     * @param Example $data
     * @dataProvider getDataForSearchCarsByBody
     */

            public function searchCarsByBodyType(AcceptanceTester $I, Example $data){
                $I->amOnPage('');
                $I->waitForElementClickable(SearchByFilter::$autoCarsLink);
                $I->click(SearchByFilter::$autoCarsLink);
                $I->waitForElementClickable(SearchByFilter::$optionalSearchLink);
                $I->click(SearchByFilter::$optionalSearchLink);
                $I ->waitForElementClickable(SearchByFilter::$carBodyTypeField);
                $I->click(SearchByFilter::$carBodyTypeField);
                $I->click(sprintf(SearchByFilter::$carBodyType, $data ['carBodyType']));
                $I->click(SearchByFilter::$searchButton);
                $I->seeInCurrentUrl($data['url']);

            }

            protected function getDataForSearchCarsByBody(){

                return [
                    ['carBodyType' => 'sedan', 'url' => 'sedan'],
                    ['carBodyType' => 'station-wagon', 'url' => 'station-wagon']
                ];
            }



    }