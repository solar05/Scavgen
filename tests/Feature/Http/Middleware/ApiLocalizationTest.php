<?php

namespace Tests\Feature\Http\Middleware;

use Tests\TestCase;

use function PHPUnit\Framework\assertTrue;
use function PHPUnit\Framework\assertFalse;

class ApiLocalizationTest extends TestCase
{
    protected $defaultLang = 'ru';

    public function testDefaultLocaleSetup()
    {
        assertFalse(session()->has('lang'));

        $this->get(route('api.single'));

        assertFalse(session()->has('lang'));

        $this->assertEquals($this->defaultLang, app()->currentLocale());
    }

    public function testLocaleSetup()
    {
        $targetLang = 'en';

        assertFalse(session()->has('lang'));

        $this->get(route('api.single') . "?lang={$targetLang}");

        assertFalse(session()->has('lang'));

        $this->assertEquals($targetLang, app()->currentLocale());
    }

    public function testIncorrecLocaleSetup()
    {
        $targetLang = 'fr';

        assertFalse(session()->has('lang'));

        $this->get(route('api.single') . "?lang={$targetLang}");

        assertFalse(session()->has('lang'));

        $this->assertNotEquals($targetLang, app()->currentLocale());
    }
}
