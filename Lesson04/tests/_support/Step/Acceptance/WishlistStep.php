<?php
namespace Step\Acceptance;

use Page\Acceptance\WishListPage;

class WishlistStep extends \AcceptanceTester{
    public const WISHLIST_NMB = 2;

    public function addTowishList(){
        $I= $this;

        for($i=1; $i<= self::WISHLIST_NMB; $i++){
            $I->moveMouseOver(sprintf(WishListPage::$openCart, $i));
            $I->wait(2);
            $I->waitForElement(sprintf(WishListPage::$quickView, $i));
            $I->wait(2);
            $I->click(sprintf(WishListPage::$quickView, $i));
            $I->wait(10);
            $I->switchToIFrame('/html/body/div[2]/div/div/div/div/iframe');
            $I->wait(5);
            $I->waitForElementVisible(WishListPage::$addToWishList);
            $I->click(WishListPage::$addToWishList);
            $I->wait(5);
            $I->click(WishListPage::$closeModalWishList);
            $I->wait(2);
            $I->switchToPreviousTab();
            $I->wait(2);
            $I->click(WishListPage::$closeIframe);
        }
}
}