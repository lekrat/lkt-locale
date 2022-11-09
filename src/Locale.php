<?php

namespace Lkt\Locale;

use Lkt\Locale\Enums\CountryLangCode;
use Lkt\Locale\Enums\LangCode;

class Locale
{
    protected static $langCode = LangCode::English;
    protected static $countryLangCode = CountryLangCode::EnglishFromGreatBritain;

    /**
     * @param string $langCode
     * @return void
     */
    public static function setLangCode(string $langCode)
    {
        static::$langCode = $langCode;
    }

    /**
     * @return string
     */
    public static function getLangCode(): string
    {
        return static::$langCode;
    }

    /**
     * @param string $langCode
     * @return void
     */
    public static function setCountryLangCode(string $langCode)
    {
        static::$countryLangCode = $langCode;
    }

    /**
     * @return string
     */
    public static function getCountryLangCode(): string
    {
        return static::$countryLangCode;
    }
}