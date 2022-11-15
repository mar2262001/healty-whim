<?php 
    $products = array( array( 'Title' => "rose", 
                                'Price' => "1.39",
                                'image' => "https://source.unsplash.com/ObpCE_X3j6U"
                            ),
array( 'Title' => "daisy", 
    'Price' => "0.75",
    'image' => "https://source.unsplash.com/Ecnx13MEPK0",
  ),
array( 'Title' => "orchid", 
    'Price' => "1.15",
    'image' => "https://source.unsplash.com/jmV3c_ijhzI"
),
array( 'Title' => "texas", 
    'Price' => "1.15",
    'image' => "https://source.unsplash.com/jmV3c_ijhzI"
  )
);

$numeroColumnas = 3;
$numeroElementos = count($products);
$numeroFilas =  $numeroElementos%$numeroColumnas == 0 ? $numeroElementos/$numeroColumnas : floor($numeroElementos/$numeroColumnas) + 1;
$ProductosSinPintar = $products;

echo '<div class="container">';
$index = 0;
for ($i = 1; $i <= $numeroFilas; $i++) {
    echo '<div class="row">';
    for($ix = $index; $ix <= 3; $ix++){
        $image = $products[$ix]["image"];
        $title = $products[$ix]["Title"];
        $price = $products[$ix]["Price"];
        echo <<<EOT
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="$image" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">$title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="card-text">$ $price</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        EOT;
        $index ++;
    }
    echo '</div>';
}
echo '</div>';
?>