<?php 
/*
para definir valores dentro de una funcion constructura podemos enviar los valores al momento de crear el objeto ejemplo : $job1 = new job ('PHP Developer','This is an awesome job!!!');
se pueden utilizar funciones de la misma clase dentro de la funcion constructura 

metodos magicos : se identifican por los __ al comienzo de su nombre 

existe una funcion destrucct que realiza una accion antes de cerrar el objeto

__get
__set
*/


class job {
    private $title;
    public $description;
    public $visible = true;
    public $months;

    public function __construct ($title, $description){
      $this->title =setTitle($title);
      $this->description = $description;
    }

    public function setTitle ($t){
      if ($t == ''){
       return $this->title = 'N/A';   
      }else{
        return $this->title = $t;
      }
    }

    public function getTitle (){
       return $this->title;
    }

    public function getDurationAsString() {
          $years = floor($this->months / 12);  // la funcion floor aproxima al entero menor 
          $extraMonths = $this->months % 12;
           if ($years >0 ){ 
                          return "$years years $extraMonths months";
                        }elseif( $years >0  and $this->months <=  0 ) {
                          return "$years years";
                        }else{
                          return "$extraMonths months";
                        }
    }
}

$job1 = new job ('PHP Developer','This is an awesome job!!!');
//$job1->setTitle('PHP Developer');
//$job1->description = 'This is an awesome job!!!';
$job1->months = 16;

$job2 = new job ('Python Dev','This is an awesome job!!!' );
$job2->months = 14;

$job3 = new job ('Devops', 'This is an awesome job!!!');
$job3->months = 5;


$name = 'Hector Benitez';
$limitMonths = 2000;
/*$jobs = [
  [
    'title' => 'PHP Developer',
    'description' => 'This is an awesome job!!!',
    'visible' => true,
    'months' => 16
  ],
  [
    'title' => 'Python Dev',
    'visible' => true,
    'months' => 14
  ],
  [
    'title' => 'Devops',
    'visible' => true,
    'months' => 5
  ],
  [
    'title' => 'Node Dev',
    'visible' => true,
    'months' => 24
  ],
  [
    'title' => 'Frontend Dev',
    'visible' => true,
    'months' => 3
  ]
];*/

$jobs = [
$job1,$job2, $job3
];



function printJob($job) {
  if($job->visible == false) {
    return;
  }

  echo '<li class="work-position">';
  echo '<h5>' . $job->getTitle(). '</h5>';
  echo '<p>' . $job->description . '</p>';
  echo '<p>' . $job->getDurationAsString() . '</p>';
  echo '<strong>Achievements:</strong>';
  echo '<ul>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '</ul>';
  echo '</li>';
}
