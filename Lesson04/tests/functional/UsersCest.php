<?php

use Codeception\Example;
use Codeception\Util\Fixtures;
use Faker\Factory;

/**
 * класс для работы с юзером
 */
class UsersCest{
    public function generateUser(FunctionalTester $I){
        $faker  = Factory::create('ru_RU');
        $this->userData=[
        "job"               => $faker->jobTitle,
        "superhero"         => $faker->boolean(),
        "skill"             => $faker->word(),
        "email"             => $faker->email,
        "name"              => $faker->name(),
        "DOB"               => $faker->date("Y-m-d"),
        "avatar"            => $faker->imageUrl(),
        "canBeKilledBySnap" => $faker->boolean(),
        "created_at"        => $faker->date("Y-m-d"),
        "owner"             => "ARU".$faker->userName,
        ];
        $I->haveInCollection('people', $this->userData);

        
    }
    /**
     * Тест на создание юзера
     * @group test10
     */
    public function checkUserCreate(FunctionalTester $I){
        $faker = Factory::create('ru_RU');
        $userData1=[
            'email'     => $faker->email,
            'owner'     =>"ARU".$faker->userName,
            'job'       =>$faker->company,
            'name'      =>$faker->name
        ];
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPost('/human', $userData1);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(['status' => 'ok']);
        $I->seeInCollection('people', $userData1);  
        $I->seeNumElementsInCollection('people', 1, $userData1);
    }
    /**
     * Проверяет получение пользователей по оунеру
     * @group test11
     * @before generateUser
     */
    public function checkGetManyUser(FunctionalTester $I){
       
       unset($this->userData['canBeKilledBySnap'], $this->userData['created_at']);

        $I->wantTo('Проверить получение пользователей по создателю записи');
        $I->sendGet('/people', ['owner' => $this->userData['owner']]);
        $I->seeResponseContainsJson([$this->userData]);

    }
}