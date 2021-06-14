<?php
namespace Page\Acceptance;
    // PajeObject для страницы формы 
class FillFieldFaker
{
    /**
     * Локатор для имени
     */
    public static $firtName = '//*[@id="firstName"]';
    /**
     * Локатор для фамилия
     */
    public static $lastName = '//*[@id="lastName"]';

     /**
     * Локатор для email
     */
    public static $email = '//*[@type="email"]';

     /**
     * Локатор для телефона
     */
    public static $phoneNumber= '//*[@id="phoneNumber"]';

     /**
     * Локатор для адреса
     */
    public static $adress= '//*[@id="address"]';

     /**
     * Локатор для города
     */
    public static $city= '//*[@id="city"]';
    /**
     * Локатор для провиниции
     */
    public static $state= '//*[@id="state"]';

    /**
     * Локатор для зипкода
     */
    public static $postal= '//*[@id="postal"]';

    /**
     * Локатор для кнопки регистрации 
     */
    public static $regiterButtom= '//*[@type="submit"]';


    /**
     * Селектор кнопки смены способа оплаты
     */
    public static $changePayMethod = "//*[@id='input_32_paymentType_credit']";

    /**
     * Локатор для Имени в поле для карточки
     */
    public static $firstNameCard= '//*[@id="input_32_cc_firstName"]';

    /**
     * Локатор для фамилий в поле для карточки
     */
    public static $lastNameCard= '//*[@id="input_32_cc_lastName"]';


    /**
     * Локатор для поля номера карточки
     */
    public static $cardNumberField= '//*[@id="input_32_cc_number"]';

    /**
     * Локатор для поля cvv кода
     */
    public static $cvvCode= '//*[@id="input_32_cc_ccv"]';

    /**
     * Локатор для поля срока годности карты месяц
     */
    public static $expiritionDate= '//*[@id="input_32_cc_exp_month"]';


    /**
     * Локатор для поля выбора месяца январь
     */
    public static $january= '#input_32_cc_exp_month > option:nth-child(2)';
   
    /**
     * Локатор для поля срока годности карты года 
     */
    public static $expiritionDateYear= '//*[@id="input_32_cc_exp_year"]';

    /**
     * Локатор для поля выбора года 2021
     */
    public static $year2021= ' #input_32_cc_exp_year > option:nth-child(2)';
   
    /**
     * Локатор для поля адреса для счета
     */
    public static $addressBill= '//*[@id="input_32_addr_line1"]';

    /**
     * Локатор для города для счета
     */
    public static $cityBill= '//*[@id="input_32_city"]';

    /**
     * Локатор для провиниции для счета
     */
    public static $stateBill= '//*[@id="input_32_state"]';

    /**
     * Локатор для зипкода для счета
     */
    public static $postalBill= '//*[@id="input_32_postal"]';

    /**
     * Локатор для страны для счета
     */
    public static $countryBill= '//*[@id="input_32_country"]';

    /**
     * Локатор для страны для USA
     */
    public static $USABill= '#input_32_country > option:nth-child(2)';

}
