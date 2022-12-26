<?php

namespace Tests\Feature\Http\Middleware;

use Tests\TestCase;

use function PHPUnit\Framework\assertTrue;
use function PHPUnit\Framework\assertFalse;

class LocalizationTest extends TestCase
{
    protected $defaultLang = 'ru';

    public function testDefaultLocaleSetup()
    {
        assertFalse(session()->has('lang'));

        $this->get(route('scav.single'));

        assertTrue(session()->has('lang'));
        $this->assertEquals($this->defaultLang, session()->get('lang'));

        $this->get(route('scav.single'));

        assertTrue(session()->has('lang'));
        $this->assertEquals($this->defaultLang, session()->get('lang'));
    }

    public function testLocaleSetup()
    {
        $targetLang = 'en';

        assertFalse(session()->has('lang'));

        $this->get(route('scav.single') . "?lang={$targetLang}");

        assertTrue(session()->has('lang'));
        $this->assertEquals($targetLang, session()->get('lang'));
    }

    public function testIncorrecLocaleSetup()
    {
        $targetLang = 'fr';

        assertFalse(session()->has('lang'));

        $this->get(route('scav.single') . "?lang={$targetLang}");

        assertTrue(session()->has('lang'));
        $this->assertNotEquals($targetLang, session()->get('lang'));
        $this->assertEquals($this->defaultLang, session()->get('lang'));
    }
}
