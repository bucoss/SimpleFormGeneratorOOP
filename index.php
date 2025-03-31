<?php

require_once 'Form.php';
require_once 'Field.php';
require_once 'InputField.php';
require_once 'Textarea.php';
require_once 'Checkbox.php';

$action = '/doStuff';
$method = 'POST';
$form = new Form($action, $method);

$form->addField(new InputField('nume'));
$form->addField(new InputField('prenume'));
$form->addField(new Textarea('adresa'));
$form->addField(new Checkbox('termeni_si_conditii'));

$form->display();
