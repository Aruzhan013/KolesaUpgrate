<?php

use Page\Acceptance\ProductsPage;
use Page\Acceptance\ShoppingListPage;

/**
 * класс для покупки товаров
 */
class ShoppingCest{
    public const PRODUCTS_NMB = 2;
    /**
     * Проверка общей суммы заказа
     * @group test7
     */
    public function checkTotalAmount(\Step\Acceptance\ShoppingStep $I){
        $I->amOnPage(ProductsPage::$dressesUrl);
        $I->waitForElement(ProductsPage::$firstProductCard);

        $I->comment('Добавляем товар в корзину');
        $I-> addProductToCard();
        
        $sum = 0;
        $total_sum = preg_replace('/[$]/', '', $I->grabTextFrom(ShoppingListPage::$totalSum));
        
        for($i=1; $i<= self::PRODUCTS_NMB; $i++){
            $price = preg_replace('/[$]/', '',$I->grabTextFrom(ShoppingListPage::getOrderPriceByIndex($i)));
            $sum += $price; 
        }

        $I->assertEquals($total_sum, $sum, 'check that total equals to sum');

    }


}