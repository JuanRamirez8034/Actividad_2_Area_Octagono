<?php
    /*Formula area    >>> A = (P * a)2
    --------------------------------------
    Formula apotema >>> a = c * tg(α)
    valor de n      >>> n = 8
    formula beta    >>> ß = (180 (n-2))/n  (angulo de cada lado del octagono)
    formula alfa    >>> α = ß/2  (angulo del triangulo para el apotema)
    forml lado trngl>>> c = Lcm/2
    forml perimetro >>> P = L * n*/
    if (isset($_POST['calcular'])
        && !empty($_POST['lado'])){
        if(empty($_POST['apotema'])){
            $l = trim($_POST['lado']);
            $beta = (180 * (8-2) / 8);//135º
            $alfa = deg2rad($beta / 2);//67.5º
            $c = $l / 2;//2.5
            $a =  $c * tan($alfa);//6.035
            $P = $l * 8;
            $resultado = ($P * $a) / 2;
            $resultado = number_format($resultado, 2,',','.');
            echo '<br><span class="Mensaje-resultado">El area obtenida es:</span>';
            echo '<br>','<span class="rsltd">', $resultado,'cm²','</span>';

        }else{
            $l = trim($_POST['lado']);
            $a = trim($_POST['apotema']);
            $resultado = number_format(((($l*8) * $a)/2), 2,',','.');
            echo '<br><span class="Mensaje-resultado">El area obtenida es:</span>';
            echo '<br>','<span class="rsltd">', $resultado,'cm²','</span>';
        }
        
        
    }

?>