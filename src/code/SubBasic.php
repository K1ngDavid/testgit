<?php

namespace harmonisation\code;

class SubBasic extends Basic implements BasicInterface
{
    public function __construct(string $name, string $structure, string $compilation)
    {
        parent::__construct($name, $structure, $compilation);
    }

    public function getDescription()
    {
        // TODO: Implement getDescription() method.
    }
}