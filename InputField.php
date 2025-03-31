<?php

require_once 'Field.php';

class InputField extends Field {
    public function render(): string {
        return "<label for=\"$this->name\">$this->label</label><br>" .
            "<input type=\"text\" id=\"$this->name\" name=\"$this->name\"><br><br>\n";
    }
}
