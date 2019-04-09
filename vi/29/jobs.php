<?php
use App\Models\{Job, Project}; // php 7 agrupar clases a utilizar

$jobs = Job::all();



require_once 'app/lib1/Project.php';





$projectLib = new lib1\Project();




$project1 = new Project('Project 1', 'Description 1');

$projects = [
    $project1
];
  
function printElement($job) {  // aqui podemos espeficicar un interface o una clase
   /* if($job->visible == false) {
      return;
    }*/
  
    echo '<li class="work-position">';
    echo '<h5>' . $job->title . '</h5>';
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