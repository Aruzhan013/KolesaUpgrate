<?php


/*
    класс для проверки авторизациb
 */

use Page\Acceptance\Login;
use Page\Acceptance\MainPage;

class LoginCest{
  
    /*
    Проверяет успешную авторизацию
*/
   /* public function CheckSuccessLogin(AcceptanceTester $I){
        $loginPage = new Login($I);
        
        $I -> amOnPage(Login::$URL);
        //$I ->fillField(Login::$loginInput, Login::UserName);
        $loginPage ->fillUsernameField()
            ->fillPasswordField()
            ->clickButtom();
        //$I ->fillField(Login::$standartPassword, Login::StandartPassword);
       // $loginPage ->fillPasswordField();
        //$I ->click(Login::$LoginButton);
       // $loginPage->clickButtom();
        $I -> seeInCurrentUrl(MainPage::$URL);
        $I -> waitForText('PRODUCTS',5, MainPage::$titleBlock);
    }*/


    /*
        Проверка на фэйл логин 
    */
    public function LoginFaild(AcceptanceTester $I){
        $loginPage = new Login($I);
        $I ->amOnPage(Login::$URL);
        $loginPage -> fillUsernameField()
            ->fillPasswordField()
            ->clickButtom();
        $I -> seeElement(Login::$ErrorTable);
        
    }
    /*
        Закрытие поля ошибки
    */
    public function CloseErrorTableFunc(AcceptanceTester $I){
        $loginPage = new Login($I);
        $loginPage->closeErrorTable();
        $I->wait(5);
    }
 }