<?php

class Category {
    private String $name;
    private bool $expensive;

    public function getName(): String
    {
        return $this->name;
    }

    public function setName(String $name): self
    {
        if (trim($name) != "") {
            $this->name = $name;
        }
        return $this;
    }

    public function isExpensive(): bool
    {
        return $this->expensive;
    }

    public function setExpensive(bool $expensive): self
    {
        $this->expensive = $expensive;

        return $this;
    }
}