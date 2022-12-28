<?php

use PHPUnit\Framework\TestCase;

require '../User.php';

class UserTest extends TestCase
{
    public function testReturnsFullName()
    {
        $user = new User;                

        $user->first_name = "Teresa";
        $user->surname = "Green";
        
        $this->assertEquals('Teresa Green', $user->getFullName());        
    }
        
    public function testFullNameIsEmptyByDefault()
    {
        $user = new User;
        
        $this->assertEquals('', $user->getFullName());
    }
    
    /**
     * @test
     */    
    public function user_has_first_name()
    {
        $user = new User;
        
        $user->first_name = "Teresa";
        
        $this->assertEquals('Teresa', $user->first_name);                        
    }
}