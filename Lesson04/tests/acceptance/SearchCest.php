<?php

class SearchCest{
    //test
    


    public function checkSearchByText(AcceptanceTester $I){
        $searchBottomCSS = '#search-form-btn';
        $searchBottomXpath = '//*[@id="search-form-btn"]';
        $searchFieldCSS= '#search-form-field';
        $searchFieldXpath = '//*[@id="search-form-field"]';
        $searchArticleCss= 'article';
        $searchArticleXPath = '//*/article';

       $I->amOnPage('');
       $I->seeElement('#search-form-btn');
       $I->click('#search-form-btn');
       $I->seeElement('#search-form-field');
       $I->fillField('#search-form-field','codeception');
       $I->pressKey('#search-form-field', \Facebook\WebDriver\WebDriverKeys::ENTER);
       $I->seeNumberOfElements('article', 20);
    }

}