<?php
namespace Page\Acceptance;

class SearchByFilter
{
    // Селектор линка легковых на главной странице
    public static $autoCarsLink= 'body > div.ui-container > div > nav > ul > li:nth-child(1)';

    /**
     * Селектор кнопки расширенного поиска
     */
    public static $optionalSearchLink = "//*[@class='btn set-optional']";

    /**
     * Селектор поля выбора кузова
     */
    public static $carBodyTypeField = "//*[@data-for='auto-car-body']";

    /**
     * Селектор седана
     */
    public static $carBodyType ="//*[@data-alias='%s']";

    /**
     * Селектор кнопки поиска
     */
    public static $searchButton = "//*[@type='submit']";
    }
