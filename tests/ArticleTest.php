<?php

use PHPUnit\Framework\TestCase;

class ArticleTest extends TestCase
{
    protected $article;
    
    protected function setUp(): void
    {
        $this->article = new App\Article;        
    }
    
    public function testTitleIsEmptyByDefault()
    {
        $this->assertEmpty($this->article->title);
    }
    
    public function testSlugIsEmptyWithNoTitle()
    {
        $this->assertSame($this->article->getSlug(), "");        
    }
    
    public function testSlugHasSpacesReplacedByUnderscores()
    {
        $this->article->title = "An example article";
        
        $this->assertEquals($this->article->getSlug(), "An_example_article");
    }    
}