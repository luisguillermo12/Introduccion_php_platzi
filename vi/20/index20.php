<?php
/*
Cuando trabajamos con objetos y clases, algunas veces podemos encontrarnos con clases que son muy similares, incluso que comparten algunos métodos o propiedades, pero que no son completamente iguales.

En este punto hablaremos de la Herencia, un concepto que nos permitirá reutilizar todo las partes que son comunes y nos permitirá tener lo que no es común en clases separadas.

La Herencia funciona como una cadena de herencia, es decir podemos tener una clase y generar una “clase hija” a partir de ella, la clase “hija” reutilizara todas las propiedades y métodos de la clase “padre” y además le permitirá implementar esas partes que la hacen diferente.

Por ejemplo, pensemos que estamos construyendo un sistema de comercio electrónico que maneja libros digitales y álbumes musicales, para esto podríamos generar una cadena de herencia como la siguiente:

curso-introduccion-php-platzi.png
Product(id, title, price, description)
Book(isbn, publisher, author, pages, profitBonus) extends Product
Album(company, artist, duration, genre) extends Product

En este ejemplo, un libro es diferente a un álbum en algunas cosas, sin embargo existen ciertas propiedades que se comparten a través de la clase padre Product, de este modo ambas clases comparten las propiedades y métodos de Product pero además de eso implementan propiedades y métodos únicos.

Ahora vamos a hablar de un concepto adicional, el cual también es muy importante, el término es polimorfismo y significa “muchas formas”.

Vamos a pensar que queremos calcular la ganancia que obtendremos de la venta de ciertos productos, y en este caso los libros y los álbumes manejan diferentes porcentajes de ganancia, si generamos un método getProfit en la clase Product este método podría definir cuánto ganaremos de cada producto. Por ejemplo pensemos que ganamos 10%.

public function getProfit() {
return $price * 0.1;
}

El agregar este método dentro de Product nos permitirá usarlo en objetos de la clase Product y también en objetos basados en las clases hijas de Product, ahora, vamos a pensar que los libros manejan una fórmula diferente porque maneja un valor de bonus adicional, en este caso podríamos tener el método getProfit pero ahora declarado dentro de la clase Book y utilizando la lógica única de esta clase:

public function getProfit() {
return $price * (0.1 + $this->profitBonus);
}

Este concepto es un tipo de polimorfismo el cual llamamos Sobreescritura y lo que nos permite es reemplazar algo que ya estaba definido en una clase padre.

Un ejemplo de uso para esta cadena de herencia es, por ejemplo, si tenemos una lista de productos, algunos de ellos son libros y otros álbumes, y si queremos saber las ganancias totales, simplemente tenemos que recorrer los elementos e ir sumando el resultado del método getProfit y en cada caso el objeto sabrá cuál fórmula utilizar porque está definida dentro de su clase.

En resumen la herencia nos permite reutilizar código entre nuestras clases y el polimorfismo, en este ejemplo la sobreescritura, nos ayudará a que las clases puedan reaccionar de una manera diferente a métodos con el mismo nombre.
 */

require_once('jobs.php');

$name = 'Hector Benitez';
$limitMonths = 2000;

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
    crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

  <title>Resume</title>
</head>

<body>
  <div class="container">
    <div id="resume-header" class="row">
      <div class="col-3">
        <img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">
      </div>
      <div class="col">
        <h1><?php echo $name; ?></h1>
        <h2>PHP Developer</h2>
        <ul>
          <li>Mail: hector@mail.com</li>
          <li>Phone: 1234567890</li>
          <li>LinkedIn: https://linkedin.com</li>
          <li>Twitter: @hectorbenitez</li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <h2 class="border-bottom-gray" >Carrer Summary</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div>
          <h3 class="border-bottom-gray" >Work Experience</h3>
          <ul>
            <?php
            $totalMonths = 0;
            for($idx = 0;$idx < count($jobs); $idx++) {
              // $totalMonths = $totalMonths + $jobs[$idx]['months'];
              $totalMonths += $jobs[$idx]->months;
              if($totalMonths > $limitMonths) {
                break;
              }

              printElement($jobs[$idx]);
            }
            ?>
          </ul>
        </div>
        <div>
            <h3 class="border-bottom-gray">Projects</h3>
            <ul>
            <?php
            for($idx = 0;$idx < count($projects); $idx++) {
              printElement($projects[$idx]);
            }
            ?>
          </ul>

            <div class="project">
                <h5>Project X</h5>
                <div class="row">
                    <div class="col-3">
                        <img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">
                      </div>
                      <div class="col">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.</p>
                        <strong>Technologies used:</strong>
                        <span class="badge badge-secondary">PHP</span>
                        <span class="badge badge-secondary">HTML</span>
                        <span class="badge badge-secondary">CSS</span>
                      </div>
                </div>
            </div>
            <div class="project">
                <h5>Project X</h5>
                <div class="row">
                    <div class="col-3">
                        <img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">
                      </div>
                      <div class="col">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.</p>
                        <strong>Technologies used:</strong>
                        <span class="badge badge-secondary">PHP</span>
                        <span class="badge badge-secondary">HTML</span>
                        <span class="badge badge-secondary">CSS</span>
                      </div>
                </div>
            </div>
          </div>
      </div>
      <div class="col-3">
        <h3 class="border-bottom-gray" >Skills & Tools</h3>
        <h4>Backend</h4>
        <ul>
          <li>PHP</li>
        </ul>
        <h4>Frontend</h4>
        <ul>
            <li>HTML</li>
            <li>CSS</li>
        </ul>
        <h4>Frameworks</h4>
        <ul>
          <li>Laravel</li>
          <li>Bootstrap</li>
        </ul>
        <h3 class="border-bottom-gray" >Languages</h3>
        <ul>
          <li>Spanish</li>
          <li>English</li>
        </ul>
      </div>
    </div>
    <div id="resume-footer" class="row">
      <div class="col">
          Designed by @hectorbenitez
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
    crossorigin="anonymous"></script>
</body>

</html>