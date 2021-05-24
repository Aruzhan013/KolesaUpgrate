<?php

class SearchCest{
    //test
    public function checkSearchByText(AcceptanceTester $I){
       $I->amOnPage('');
       $I->seeElement('#search-form-btn');
       $I->click('#search-form-btn');
       $I->seeElement('#search-form-field');
       $I->fillField('#search-form-field','codeception');
       $I->pressKey('#search-form-field', \Facebook\WebDriver\WebDriverKeys::ENTER);
       $I->seeNumberOfElements('article', 20);
    }

}