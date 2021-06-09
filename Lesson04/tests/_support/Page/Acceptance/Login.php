<?php
namespace Page\Acceptance;
/*
    Страница для авторизации
*/
class Login
{
    // include url of current page
    public static $URL = '';

    public static $loginInput  = '#user-name';
    /* 
    Standart user name
    */
    public const UserName = 'standard_user';

    /* 
    Faild user name
    */
    public const FaildName = 'locked_out_user';

    /*
    Password
    */
    public const StandartPassword = 'secret_sauce';

    /*
    Selector for password fileld
    */
    public static $standartPassword = '#password';

    /*
    Selector for Error Table
    */
    public static $ErrorTable = '#login_button_container > div > form > div.error-message-container.error > h3';
    /*
        Selector click button
    */
    
    public static $LoginButton = '#login-button';
    /*
        Selector close error table button
    */
    
    public static $CloseErrorButton = '#login_button_container > div > form > div.error-message-container.error > h3 > button';

    /**
     * tester object
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    /*
    mehod constructor
    */
    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }


    /**
     * Fill field login
     */
    public function fillUsernameField()
    {
        $this->acceptanceTester->fillField(self::$loginInput, self::FaildName);
        return $this;
    }

    /**
     * Fill field password
     */
    public function fillPasswordField(){
        $this->acceptanceTester->fillField(self::$standartPassword, self::StandartPassword);
        return $this;
    }

    /**
     * Fill field click buttom
     */
    public function clickButtom(){
        $this->acceptanceTester->click(Login::$LoginButton);
        return $this;
    }
    /*
    Close error table method
    */
    public function closeErrorTable(){
        $this->acceptanceTester->click(self::$CloseErrorButton);
    }
}
