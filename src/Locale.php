<?php

namespace Lkt\Locale;

use Lkt\Locale\Enums\CountryLangCode;
use Lkt\Locale\Enums\LangCode;

class Locale
{
    protected static string $langCode = LangCode::English;
    protected static string $countryLangCode = CountryLangCode::EnglishFromGreatBritain;

    public static function setLangCode(string $langCode): void
    {
        static::$langCode = $langCode;
    }

    public static function getLangCode(): string
    {
        return static::$langCode;
    }

    public static function setCountryLangCode(string $langCode): void
    {
        static::$countryLangCode = $langCode;
    }

    public static function getCountryLangCode(): string
    {
        return static::$countryLangCode;
    }
}