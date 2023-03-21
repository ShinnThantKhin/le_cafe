<?php

    function menu($productname, $productprice, $productimg){
        $element = "
            <div class=\"card1\">
                <div style=\"display: flex;\">
                    <img src=\"$productimg\" class=\"menu-img1\" alt=\"$productname\">
                    <h4>$productname <br><br>Price : $productprice ks </h4>
                    
                </div>
            </div>
        
        ";
        echo $element;
    }
?>
