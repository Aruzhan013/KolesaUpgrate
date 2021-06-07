<?php
namespace Page\Acceptance;

class SearchPage
{
    // include url of current page
    public static $URL = 'http://automationpractice.com/index.php';
    /*
       Селектор кнопки Дресс
    */

    public static $DressButton = '#block_top_menu > ul > li:nth-child(2) > a';

     /*
        Селектор кнопки Саммер
    */

    public static $SummerButton = '#subcategories > ul > li:nth-child(3)';
    

  /*
        Селектор кнопки Лист
    */

    public static $ListButton = '#list';

     /*
        Селектор кнопок Add to Card and More
    */

    public static $ListbuttomCard = '#center_column > ul > li.ajax_block_product.first-in-line.last-line.first-item-of-tablet-line.first-item-of-mobile-line.last-mobile-line.col-xs-12 > div > div > div.right-block.col-xs-4.col-xs-12.col-md-4 > div > div.button-container.col-xs-7.col-md-12';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

}
