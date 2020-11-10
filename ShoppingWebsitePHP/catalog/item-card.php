<?php 
function card($name, $price, $size, $img, $id){
    $card="
    <a href='../detail?id=$id'>
    <div class='item-card'>
        <img class='menu-img' src=$img alt='woman' />
        <div class='item-summary'>
        <p>$name</p>
        <p>$price</p>
        <p>$size</p>
        </div>
    </div><a/>";
    echo $card;
}    // <a href='./?cat=$id>><a/>
?>

