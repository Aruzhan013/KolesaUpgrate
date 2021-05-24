<?php

class ArticlePageCest{
    //test
    public function checkArticlePageThroughTheList(FunctionalTester $I){
        $I->amOnPage('');
        $I->seeElement('#navbar-links > li:nth-child(2) > a');
        $I->click('#navbar-links > li:nth-child(2) > a');
        $I->seeElement('#post_558556 > article > h2 > a');

        codecept_debug($I->grabTextFrom('#post_558556 > article > h2 > a'));

        $I->click('#post_558556 > article > h2 > a');
        $I->seeElement('#post_558556 > div.post__wrapper');
    }

}