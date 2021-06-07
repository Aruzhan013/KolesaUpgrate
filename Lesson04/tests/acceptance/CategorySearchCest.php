<?php

use Page\Acceptance\MarketainPage;

/**
 * Класс для проверки категорий 
 * @group test6
 */

class CategorySearchCest{

    /**
     * метод который выполянется пеерд каждым тестом
     */
    protected function setRgionCookie(AcceptanceTester $I){
        $I->amOnPage(MarketainPage::$url);
        $I->setCookie('regAutoToggle', '1');
        $I->reloadPage();
    }


    /**
     *  для проверки категорий работа
     *  @before setRgionCookie
     */
    public function checkJobCategory(AcceptanceTester $I)
    {
    
        $I->waitForElement(MarketainPage::$workCategoryIcon);
        $I->click(MarketainPage::$workCategoryIcon);
        $I->seeInCurrentUrl('/rabota');
        
    }
  
    /**
     * для проверки категорий недвижимость
     * @before setRgionCookie
     */

    public function checkPropertyCategory(AcceptanceTester $I)
    {
    
        $I->waitForElement(MarketainPage::$propertyCategoryIcon);
        $I->click(MarketainPage::$propertyCategoryIcon);
        $I->seeInCurrentUrl('/nedvizhimost');
        
    }




}