<?php

use PHPUnit\Framework\TestCase;

final class PostTest extends TestCase
{
    public function testPostName(): void
    {
        

        $string = New Post("titre","contenu", "https://www.google.com");

        $title = $string->getTitle(); 
        $content = $string->getContent();
        $slug = $string->getSlug();
        
        $this->assertSame("titre", $title);
        $this->assertSame("contenu", $content);
        $this->assertSame("https://www.google.com", $slug);

    }

    public function testCannotBeCreatedFromInvalidTitle(): void
    {
        $this->expectException(InvalidArgumentException::class);

        new Post("","", "");

        
    }
}