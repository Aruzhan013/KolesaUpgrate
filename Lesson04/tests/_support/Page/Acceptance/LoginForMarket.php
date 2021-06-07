<?php
namespace Page\Acceptance;

class LoginForMarket
{
    // include url of current page
    public static $URL = '';

    //селектор для кнопки sign in
    public static $signInButton = '//*[@class="login"]';

    //селектор для поля ввода email
    public static $emailField =' //*[@id="email"]';

     //селектор для поля ввода пароля
     public static $passwordField ='//*[@type="password"]';

     //селектор для кнопки submit
     public static $submitButton = '//*[@id="SubmitLogin"]';

     //селектор для кнопки signOut
     public static $logOutButton = '//*[@id="header"]/div[2]/div/div/nav/div[2]/a';
}
