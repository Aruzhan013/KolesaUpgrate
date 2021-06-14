<?php

use Page\Acceptance\LoginForMarket;
use Page\Acceptance\WishListPage;

/**
 * 
 * класс для добавления в уишлист
 * @group test9 
 */

class  WishListCest{
    public const WISHLIST_NMB = 2;
    /**
     * Функция для  login
     */
    protected function login(AcceptanceTester $I){
        $I->amOnPage(LoginForMarket::$URL);
        $I->click(LoginForMarket::$signInButton);
        $I->fillField(LoginForMarket::$emailField, 'aruka007@mail.ru');
        $I->fillField(LoginForMarket::$passwordField, 'aruka007');
        $I->click(LoginForMarket::$submitButton);

    }

    
        /**
         * для добавления в wishlist
         * @before login
         * @after logout
         */
    public function addToWishList(\Step\Acceptance\WishlistStep $I){
        
      
        $I->amOnPage(WishListPage::$URL);
        $I->addTowishList();
        
        $I->wait(5);
        $I->click(WishListPage::$homePage);
        $I->waitForElementVisible(WishListPage::$wishListInHome);
        $I->click(WishListPage::$wishListInHome);
        $wishListQtyFromgrap = $I->grabTextFrom(WishListPage::$wishListCounter);
        $I->var_dump();
        $I->assertEquals($wishListQtyFromgrap, self::WISHLIST_NMB, "There are equal");
    }       

    /**
     * функция для logout
     */
    protected function logout(AcceptanceTester $I){
        $I->amOnPage(LoginForMarket::$URL);
        $I->click(LoginForMarket::$logOutButton);
    }



}