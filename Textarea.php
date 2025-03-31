<?php

require_once 'Field.php';

class Textarea extends Field {
    public function render(): string {
        return "<label for=\"$this->name\">$this->label</label><br>" .
            "<textarea id=\"$this->name\" name=\"$this->name\"></textarea><br><br>\n";
    }
}
