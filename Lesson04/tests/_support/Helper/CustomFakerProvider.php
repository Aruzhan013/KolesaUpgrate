<?php
namespace Helper;

use Faker\Provider\Base;

class CustomFakerProvider extends Base{
    protected $phoneCodes = [
        '701',
        '702',
        '747',
        '705'
    ];

    protected $cardNumber = [
        '7777444444444444',
        '8888999999999999',
        '5555444444445555',
        '7777888877778888'

    ];

        /**
         * метод возвращает рандомный КЗ номер
         */
    public function getPhoneKz(){
        

        
        return sprintf(
            '+7(%d)%d %d %d',
            $this->phoneCodes[array_rand($this->phoneCodes)],
            random_int(100,999),
            random_int(10,99),
            random_int(10,99)
        );
    }
        /**
         * метод возвращает рандомный номер карты
         */
        public function getCardNumber(){
        

        
            return sprintf(
                '%d',
                $this->cardNumber[array_rand($this->cardNumber)],
            );

        }
        /**
         * метод возвращает рандомный номер CVV карты
         */
            public function getCVVCard(){
        

        
                return sprintf(
                    '%d%d%d',
                    random_int(0,10),
                    random_int(0,10),
                    random_int(0,10)
                );

    }
}
