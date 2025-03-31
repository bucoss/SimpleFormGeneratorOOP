<?php

abstract class Field {
    protected string $name;
    protected string $label;

    public function __construct(string $name, ?string $label = null) {
        $this->name = $name;
        $this->label = $label ?? ucfirst(str_replace('_', ' ', $name));
    }

    abstract public function render(): string;
}
