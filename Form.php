<?php

class Form {
    private string $action;
    private string $method;
    private array $fields = [];

    public function __construct(string $action, string $method = 'POST') {
        $this->action = $action;
        $this->method = strtoupper($method);
    }

    public function addField(Field $field): void {
        $this->fields[] = $field;
    }

    public function display(): void {
        echo "<form action=\"$this->action\" method=\"$this->method\">\n";

        foreach ($this->fields as $field) {
            echo $field->render();
        }

        echo "<button type=\"submit\">Trimite</button>\n";
        echo "</form>\n";
    }
}
