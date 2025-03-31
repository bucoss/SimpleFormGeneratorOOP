<?php

require_once 'Field.php';

class Checkbox extends Field {
    public function render(): string {
        return "<input type=\"checkbox\" id=\"$this->name\" name=\"$this->name\">" .
            "<label for=\"$this->name\"> $this->label</label><br><br>\n";
    }
}
