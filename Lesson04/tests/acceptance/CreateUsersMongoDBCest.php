<?php

use Faker\Factory;

class CreateUsersMongoDBCest{
    public const COUNT_NMB = 10;
    /**
     * создание юзеров
     * @group test12
     */
    public function generateUser(FunctionalTester $I){
        $faker  = Factory::create('ru_RU');
        $this->allUsersData = [];
        $this->owner = 'ARU_' . $faker->userName;
        for($i=0; $i < self::COUNT_NMB; $i++){
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
                "owner"             => $this->owner,
            ];
            $I->haveInCollection('people', $this->userData);
            $this->allUsersData[$i] = $this->userData;
        }
    }
    /**
     * функция для проверки создания юзеров
     * @group test13
     * @before generateUser
     */
    public function checkUserCreation(AcceptanceTester $I){
        $I->amOnPage('?owner='.$this->owner);
        $I->wait(1);

        $names = $I->grabMultiple('#app > div > div > div > ul > li > b');
        foreach ($names as $name){
            $I->assertContains($name, array_column($this->allUsersData, 'name'), 'checking that we see all 10 users in site');
        }
        $I->wait(1);
        $I->waitForElementVisible('#snap');
        $I->click('#snap');
        $I->wait(1);
        
        $UnSnappedNames = $I->grabMultiple('#app > div > div > div > ul > li > b');
        for($i=0; $i < self::COUNT_NMB; $i++){
            if ($this->allUsersData[$i]['canBeKilledBySnap'] == true){
                $I->assertNotContains($this->allUsersData[$i]['name'], $UnSnappedNames);
                $I->dontSeeInCollection('people', array('owner'=>$this->owner, 'name'=>$this->allUsersData[$i]['name']));
            }else{
                $I->assertContains($this->allUsersData[$i]['name'], $UnSnappedNames);
                $I->seeInCollection('people', array('owner'=>$this->owner, 'name'=>$this->allUsersData[$i]['name']));
            }
        }
        


    }
}