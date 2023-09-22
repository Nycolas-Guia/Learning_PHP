<?php
    /*Apresentar a área de diferentes formas geométricas.
        Medidas em cm:
        A. Quadrado com lado 4 cm.
        B. Triângulo base = 3 e altura = 2.
        C. Trapézio base maior = 4, base menor = 2 e altura = 3.
    */
    class calculoArea {
        public static function areaQuadrado() {
          $lado = 4;
          $area = pow($lado,2);
          echo "Área do quadrado: ",$area;
        }

        public static function areaTriangulo() {
            $base = 3;
            $altura = 2;
            $area = ($base*$altura)/2;
            echo "Área do triângulo: ",$area;
          }

        public static function areaTrapezio() {
            $baseMaior = 4;
            $baseMenor = 2;
            $altura = 3;
            $area = (($baseMaior+$baseMenor)*$altura)/2;
            echo "Área do trapézio: ",$area;
        }
      }
    calculoArea::areaQuadrado();
    echo "<br>";
    calculoArea::areaTriangulo();
    echo "<br>";
    calculoArea::areaTrapezio();
?>