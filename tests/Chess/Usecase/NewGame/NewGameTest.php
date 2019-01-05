<?php

namespace Chess\Usecase\NewGame;

use PHPUnit_Framework_TestCase;

class NewGameTest extends PHPUnit_Framework_TestCase
{
    public function testCanBeInstantiated() {
        $this->assertInstanceOf(NewGame::class, new NewGame());
    }
}
