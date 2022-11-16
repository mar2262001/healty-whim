<?php
    function showCards($data) {
        $numeroColumnas = 3;
        $numeroElementos = count($data);
        $numeroFilas =  $numeroElementos%$numeroColumnas == 0 ? $numeroElementos/$numeroColumnas : floor($numeroElementos/$numeroColumnas) + 1;
        
        echo '<div class="container">';
        $index = 0;
        for ($i = 1; $i <= $numeroFilas; $i++) {
            $indexCol = 3*$i;
            echo '<div class="row">';
            for($ix = $index; $ix < $indexCol; $ix++){
                if($ix >= ($numeroElementos)){break;}
                $image = $data[$ix]["Image"];
                $title = $data[$ix]["Title"];
                $price = $data[$ix]["Price"];
                $description = strlen($data[$ix]["Description"]) >= 100 ? substr($data[$ix]["Description"], 0, 99) : $data[$ix]["Description"];
                echo <<<EOT
                    <div class="col-sm">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="$image" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">$title</h5>
                                <p class="card-text">$description</p>
                                <p class="card-text">$ $price</p>
                                <a href="#" class="btn btn-primary">Detalles</a>
                            </div>
                        </div>
                    </div>
                EOT;
                $index ++;
            }
            echo '</div>';
        }
        echo '</div>';
    }
?>