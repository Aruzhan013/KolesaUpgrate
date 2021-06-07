<?php

namespace Tests\Acceptance;

use AcceptanceTester;
use Faker\Factory;
use Helper\CustomFakerProvider;
use Page\Acceptance\FillFieldFaker;

/**
 * Класс для тестирования формы
 */


class FillFieldFakerCest{
    /**
     * тест на проверку заполнения полей с помощью фэйкера
     * @group test3
     */
    public function checkFillField(AcceptanceTester $I){

        $faker = Factory::create('ru_RU');
        $faker->addProvider(new CustomFakerProvider($faker));

        $name = $faker->firstName;
        $lastnameFaker = $faker->lastName;
        $emailFaker = $faker->email;
        $phoneNumberFaker = $I-> getFaker()-> getPhoneKz;
        $adressFaker = $faker-> address;
        $cityFaker = $faker->city;
        $stateFaker = $faker->region;
        $postalFaker = $faker->postcode;
        $cardNumberFaker = $I->getFaker()-> getCardNumber;
        $cvvFaker = $I-> getFaker()->getCVVCard;
    


        $I->amOnPage('');
        $I-> fillField(FillFieldFaker::$firtName, $name);
        $I-> fillField(FillFieldFaker::$lastName, $lastnameFaker);
        $I->fillField(FillFieldFaker::$email, $emailFaker);
        $I->fillField(FillFieldFaker::$phoneNumber, $phoneNumberFaker);
        $I->fillField(FillFieldFaker::$adress, $adressFaker);
        $I->fillField(FillFieldFaker::$city, $cityFaker);
        $I-> fillField(FillFieldFaker::$state, $stateFaker);
        $I->fillField(FillFieldFaker::$postal, $postalFaker);
        $I->click(FillFieldFaker::$changePayMethod);
        $I->fillField(FillFieldFaker::$firstNameCard, $name);
        $I->fillField(FillFieldFaker::$lastNameCard, $lastnameFaker);
        $I->fillField(FillFieldFaker::$cardNumberField, $cardNumberFaker);
        $I->fillField(FillFieldFaker::$cvvCode,$cvvFaker);
        $I->click(FillFieldFaker::$expiritionDate);
        $I->waitForElement(FillFieldFaker::$january);
        $I->click(FillFieldFaker::$january);
        $I->click(FillFieldFaker::$expiritionDateYear);
        $I->waitForElement(FillFieldFaker::$year2021);
        $I->click(FillFieldFaker::$year2021);
        $I->fillField(FillFieldFaker::$addressBill, $adressFaker);
        $I->fillField(FillFieldFaker::$cityBill, $cityFaker);
        $I->fillField(FillFieldFaker::$stateBill, $stateFaker);
        $I->fillField(FillFieldFaker::$postalBill, $postalFaker);
        $I->click(FillFieldFaker::$countryBill);
        $I->waitForElement(FillFieldFaker::$USABill);
        $I->click(FillFieldFaker::$USABill);


        $I->wait(10);
        $I->click(FillFieldFaker::$regiterButtom);
        $I->waitForText('Good job');




    }


}