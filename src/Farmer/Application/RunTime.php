<?php
namespace Farmer\Application;

/**
 * @depend Config
 */
class RunTime implements \Iterator
{
    private $runtime;
    
    public function __construct(array $runtime)
    {
        $this->runtime = $runtime;
    }
    
    public function valid()
    {
        ;
    }
    
    public function key()
    {
        ;
    }
    
    public function current()
    {
        ;
    }
    
    public function rewind()
    {
        ;
    }
    
    public function next()
    {
        ;
    }
}