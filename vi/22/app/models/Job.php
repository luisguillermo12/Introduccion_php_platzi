<?php
namespace App\models;
require_once 'BaseElement.php';
class Job extends BaseElement {
    public function __construct($title, $description) {
        $newTitle = 'Job: ' . $title;
        $this->title = $newTitle;
    }
/* este metodo utiliza el polimorfismo para remplazar al de la clase padre y este es el metodo q esta utilizando para los jobs*/
    public function getDurationAsString() {
        $years = floor($this->months / 12);
        $extraMonths = $this->months % 12;
      
        return "Job duration: $years years $extraMonths months";
    }

   
}