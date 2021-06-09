<?php

use Page\Acceptance\DreCatalog;
use Page\Acceptance\SearchPage;

class ChangeToListCest{
     /*
     смена раскладки с сетки на лист
     */
    public function GridToList(AcceptanceTester $I){
        $searchPage = new SearchPage($I);
        $I->amOnPage(SearchPage::$URL);
        $I->click(SearchPage::$DressButton);
        $I->seeInCurrentUrl(DreCatalog::$URL);
        $I->waitForElement(SearchPage::$SummerButton);
        $I -> click(SearchPage::$SummerButton);
        $I->click(SearchPage::$ListButton);
        $I->waitForElement(SearchPage::$ListbuttomCard);
        $I->wait(5);
        

    }





}



