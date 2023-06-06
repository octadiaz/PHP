<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eje12</title>
</head>
<body>
    <?php

        class Tabla {

            private $celdas;

            public function __construct() {
                $this->celdas = array();
                for ($i = 0; $i < 10; $i++) {
                    $celda = new Celda($i+1, ($i+1));
                    $this->celdas[] = $celda;
                }
            }

            public function mostrarCeldas() {
                echo "<table style = 'border: 2px solid black' >";
                foreach ($this->celdas as $celda) {
                    echo "<tr>";
                    echo "<td style = 'border:1px solid black' >"."Número: ".$celda->getNro(). " : " ."Texto de celda: ".$celda->getTexto()."</td>";
                    echo "</tr>";
                }
            }

        }
        
        class Celda {
            private $nroDeCelda;
            private $texto;

            public function __construct($nroDeCelda, $texto) {
                $this->nroDeCelda = $nroDeCelda;
                $this->texto = $texto;
            }

            public function setNro($numero) {
                $this->nroDeCelda = $numero;
            }

            public function setTexto($texto) {
                $this->texto = $texto;
            }

            public function getNro() {
                return $this->nroDeCelda;
            }

            public function getTexto() {
                return $this->texto;
            }

        }

        $tabla = new Tabla();
        $tabla->mostrarCeldas();

    ?>
</body>
</html>