<?php
namespace Step\Acceptance;

use AcceptanceTester;
use Page\Acceptance\ProductsPage;
use Page\Acceptance\ShoppingListPage;

class ShoppingStep extends \AcceptanceTester
{
    public const PRODUCTS_NMB = 2;
    public function addProductToCard(){
        $I = $this;
        

        for($i=1; $i<= self::PRODUCTS_NMB; $i++){
            $I ->moveMouseOver(sprintf(ProductsPage::$openCart, $i));
            $I->waitForElementVisible(sprintf(ProductsPage::$addToCartButton, $i));
            $I->click(sprintf(ProductsPage::$addToCartButton, $i));
            $I->wait(1);
            $I->waitForElementVisible(ProductsPage::$addSuccessModal);
            $I->waitForText(ProductsPage::$successMessage);
            $I->click(ProductsPage::$closeModal);               
        }
        $I->click(ProductsPage::$cartListButton);
        $I->seeInCurrentUrl(ShoppingListPage::$ordersUrl);

        for($i=1; $i<= self::PRODUCTS_NMB; $i++){
            $I->waitForElementVisible(ShoppingListPage::getOrderSelectorByIndex($i));
        }



    }
}