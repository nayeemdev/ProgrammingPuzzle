<?php

namespace ProgrammingPuzzle\Puzzle1\ArrayObject;

use ArrayObject;
use ProgrammingPuzzle\Puzzle1\Renderer\TableRenderer;

class DisplayableArray extends ArrayObject implements DisplayableArrayInterface
{
    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
    
    public function displayAsTable(): string
    {
        $renderer = new TableRenderer();
        
        return $renderer->render($this->getArrayCopy());
    }
}
