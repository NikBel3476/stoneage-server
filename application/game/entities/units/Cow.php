<?php

require_once ("Animal.php");

class Cow extends Animal {
    function __construct($data) {
        parent::__construct($data);
        $this->weight = $data->weight;
    }

    protected function destroy() {
        // вернуть еду в зависимости от веса коровки
    }
}