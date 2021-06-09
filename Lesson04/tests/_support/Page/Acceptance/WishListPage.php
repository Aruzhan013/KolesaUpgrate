<?php
namespace Page\Acceptance;

class WishListPage
{
    //урл для покупок
    public static $URL = '';

    //селектор для карточки
    public static $openCart = '//*[@id="homefeatured"]/li[%s]';

    //селектор для кнопки quick view
    public static $quickView ='//*[@id="homefeatured"]/li[%s]/div/div[1]/div/a[2]/span';
                              
    //cелектор кнопки добавления в wish list
    public static $addToWishList ='//*[@id="wishlist_button"]';

    //селектор для кнопки закрытия модалки "added to wishlist
    public static $closeModalWishList = '/html/body/div[2]/div/div/a';
    

    //селектор для кнопки закрытия iframe
    public static $closeIframe = '/html/body/div[2]/div/div/a';

    //селектор для перехода на свою страницу
    public static $homePage ='//*[@class="account"]';

    //селектор для кнопки wishlist
    public static $wishListInHome ='//*[@id="center_column"]/div/div[2]/ul/li';

    //cелектор для счетчика wishlist
    public static $wishListCounter= '//*[@id="wishlist_34144"]/td[2]';
    
}
