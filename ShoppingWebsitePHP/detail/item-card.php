<?php 
function card($name, $price, $size, $img, $link){
    $card="
    <div class='item-card clickable'>
        <a href=$link></a>
        <img class='menu-img' src=$img alt='woman' />
        <div class='item-summary'>
        <p>$name</p>
        <p>$price</p>
        <p>$size</p>
        </div>
    </div>";
    echo $card;
}
?>

