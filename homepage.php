<?php
    $filter = $products;
    if(array_key_exists('category', $_GET)){
        $category = $_GET['category'];
        if($category != "all"){
            $filter = array_filter($products, function( $e ) use($category) {
                return trim(strtolower($e['category'])) == trim(strtolower($category));
            });
            $filter = array_values($filter);
        }
    }
    showCards($filter);
?>
