<?php

class ArticlePageCest{
    //test
    public function checkArticlePageThroughTheList(FunctionalTester $I){

        $pageDevolopCss ='#navbar-links > li:nth-child(2) > a';
        $pageDevolopXPath = '//*[@id="navbar-links"]/li[2]/a';
        $articleByIDCss = '#post_558556 > article > h2 > a';
        $articleByIDXpath = '//*[@id="post_559352"]/article/h2';
        $articleCompairCss= '#post_559352 > div.post__wrapper';
        $articleCompairXpath= '//*[@id="post_559352"]/div[1]';
        

        $I->amOnPage('');
        $I->seeElement('#navbar-links > li:nth-child(2) > a');
        $I->click('#navbar-links > li:nth-child(2) > a');
        $I->seeElement('#post_558556 > article > h2 > a');

        codecept_debug($I->grabTextFrom('#post_558556 > article > h2 > a'));

        $I->click('#post_558556 > article > h2 > a');
        $I->seeElement('#post_558556 > div.post__wrapper');
    }

}

#post_559352 > article > h2