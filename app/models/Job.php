<?php
namespace App\models;
use extends Illuminate\Database\Eloquent\Model;
class Job extends extends Model {
   
    protected $table = 'jobs';



/* este metodo utiliza el polimorfismo para remplazar al de la clase padre y este es el metodo q esta utilizando para los jobs*/
    public function getDurationAsString() {
        $years = floor($this->months / 12);
        $extraMonths = $this->months % 12;
      
        return "Job duration: $years years $extraMonths months";
    }

   
}