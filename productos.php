<?php
  /* Nos imaginamos que estamos trabajando con una base de datos
     debemos ser ordenados.
  */
  $bd = ["Audio" => [], "Ferreteria" => [], "Perfumeria" => []];

  function crearArticulo($nomCategoria, $nombre, $precio){
    if(isset($categoria[$nomCategoria])){
      $categoria[$nomCategoria][] = [$nombre, $precio];
      return true;
    }
    return false;
  }

  function crearCategoria($categoria){
    if(!isset($bd[$categoria])){                                                // Si no existe esta categoria en la base de datos.
        $bd[$categoria] = [];                                                   // Crea la categoria en la base de datos.
      return true;                                                              // Fue creada con exito.
    }
    return false;                                                               // Fallo la creacion.
  }

  function crearSubCategoria($categoria, $subCategoria){                        // Una Categoria existente y una sub Categoria a crear.
    if(!crearCategoria($categoria) && empty($bd[$categoria])){                  // Si no se puede crear la categoria porque ya existe y si la categoria seleccionada esta vacía
        $bd[$categoria][] = crearCategoria($subCategoria);                      // Dentro de esa categoria crear una nueva categoria.
      return true;                                                              // Fue creada con exito.
    }
    return false;                                                               // Fallo la creación.
  }


//Categoria -> SubCategoria -> Articulo -> [Nombre, Precio]
  $bd = [
    "Audio" => [
      "Auricular" =>[
        ["Sony Stereo Headset",499.99],
        ["Philco Stereo Headset",500.99],
        ["Samsung Stereo Headset",649.99]
      ]
    ],
    "Ferreteria" => [
      "Destornillador" => [
        ["Philips", 59.99]
      ]
    ],
    "Perfumeria" =>[
      "Masculina" => [
        ["420 Vip Black Men",499.99],
        ["Bleu de Chanel",799.99],
        ["Sauvage Dior",1099.99],
      ],
      "Femenina" =>[
        ["420 Vip Rose",699.99],
        ["Chance Chanel",899.99],
        ["Biografia",1299.99]
      ]
    ]
  ];
?>

<!--Comenzamos el HTML5-->
<!--
  Siguientes Pasos
  Explora todas las categorias
  Explora todas las subCategorias
  Crea un contador $i para localizar todas las imagenes
  Explora todos los Articulos -> [ [0]Nombre, [1]Precio ]
-->
    <div class="container">
      <h3 class = "text-center">PRODUCTOS</h3>
        <div class="row">
          <?php foreach ($bd as $categoria => $value): ?>
            <?php foreach ($value as $subCategoria => $value): ?>
              <?php $i = 0; foreach ($value as $articulo): ?>
                <article class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                  <div class="card border rounded mx-auto shadow-lg">
                    <div class="A_img">
                        <img src="img/categoria/<?= $categoria."/".$subCategoria."/".$i.".jpg" ?>" width="100%" height="80%">
                    </div>
                    <h2><?= $articulo[0]; ?></h2>
                    <pre class = "text-left mx-auto">Precio: $ARS <?= $articulo[1]; ?><br>Stock: 10</pre>
                    <button class = "btn btn-primary">Agregar al Carrito</button>
                  </div>
                </article>
              <?php $i++; endforeach; ?>
            <?php endforeach; ?>
          <?php endforeach; ?>
        </div>
    </div>
