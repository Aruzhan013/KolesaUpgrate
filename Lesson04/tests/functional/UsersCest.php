<?php

use Codeception\Example;
use Faker\Factory;

/**
 * класс для работы с юзером
 */
class UsersCest{
    /**
     * Тест на создание юзера
     * @group test10
     */
    public function checkUserCreate(FunctionalTester $I){
        $defaultSchema = [
            "job"       => 'string',
            "_id"       => 'string',
            "email"     => 'string',
            "superhero" => 'boolean',
            "name"      => 'string',
            "owner"     => 'string'
        ];
        $userData=[
            'email'     =>'upgrate@kolesa.kz',
            'owner'     =>'upgrate',
            'job'       =>'krisha',
            'name'      =>'Aruka'
        ];
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPost('human', $userData);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(['status'=>'ok']);
        $I->sendGet('people', $userData);
        $I->seeResponseMatchesJsonType($defaultSchema);
    }
    /**
     * Негативный ес без email
     * @group test11
     * @dataProvider getDataForCreateUserNegative
     * @param Example $data
     */

    public function checkUnaleUserWithoutEmail(FunctionalTester $I, Example $data){
        $faker = Factory::create('ru_RU');

        $email = ['email' => $faker->email];
        $ownerHard=['owner' => 'AruzhanSail'];

        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPost('human', [
            $data['email'] ? $email:null,
            $data['owner'] ? $ownerHard:null
        ]);
        $I->canSeeResponseContainsJson(['status' => false]);
    }
    
    protected function getDataForCreateUserNegative(){
        return [
            [
                'email' => true,
                'owner'=>false,
            ],
            [
                'email' => false,
                'owner' => true,
            ]
            ];
    }
    /**
     * проверка PUT запроса
     * @group test13
     */
    public function checkPut(FunctionalTester $I){

        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPut('human?_id=60c0c5f7a1acc43102543f6b', ['owner' => 'ArukaOwnerIzm1']);
        $I->seeResponseContainsJson(['nModified'=>'1']);
        $I->sendGet('people', ['owner' => 'ArukaOwnerIzm1']);
    }
    /**
     * проверка Delete запроса
     * @group test14
     */
    public function checkDelete(FunctionalTester $I){
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendDelete('human?_id=60c0c5f7a1acc43102543f6b');
        $I->seeResponseContainsJson(['deletedCount'=>'1']);
        $I->sendGet('people', ['owner' => 'ArukaOwnerIzm1']);
    }


}