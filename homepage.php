<?php
    if(array_key_exists('category', $_GET)){
        $category = $_GET['category'];
        $filter = array_filter($products, function( $e ) use($category) {
            return $e['category'] == $category;
        });
        $filter = array_values($filter);
    }else{
        $filter = $products;
    }

    showCards($filter);
?>