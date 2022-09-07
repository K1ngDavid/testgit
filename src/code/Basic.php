<?php

namespace harmonisation\code;

class Basic
{
    public String $name;
    private String $structure;
    protected String $compilation;


    public function __construct(String $name,String $structure,String $compilation)
    {
        $this->name=$name;
        $this->structure=$structure;
        $this->compilation=$compilation;
    }

    /**
     * @return mixed
     */
    public function getCompilation()
    {
        return $this->compilation;
    }

    /**
     * @param mixed $compilation
     * @return Basic
     */
    public function setCompilation($compilation)
    {
        $this->compilation = $compilation;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStructure()
    {
        return $this->structure;
    }

    /**
     * @param mixed $structure
     * @return Basic
     */
    public function setStructure($structure)
    {
        $this->structure = $structure;
        return $this;
    }

}