<?php 
function card_collection(){
    require_once '../phpmysql/login.php';
    require_once ("item-card.php");
    $connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);
    if($connection->connect_error) die($connection->connect_error);
    //1234567890
    
    $results_per_page = 4;

    //get initial total number of page
    $query = "SELECT * FROM catalog ";
    $result = $connection->query($query);
    $number_of_result = mysqli_num_rows($result);
    $number_of_page = ceil($number_of_result/$results_per_page);

    // determine which page number visitor is currently on
    if (!isset($_GET['page'])) {
        $page = 1; } 
    elseif ($_GET['page'] > 0 & $_GET['page'] <= $number_of_page ) {
        $page = $_GET['page'];
    }else { $page = 1;  }

    // determine the sql LIMIT starting number for the results on the displaying page
    $this_page_first_result = ($page-1)*$results_per_page;

    // retrieve selected results from database and display them on page
    $page_query='SELECT * FROM catalog LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
    $result = $connection->query($page_query);
    if(!$result) die($connection->error);

    // draw the card
    echo"<a href='./index.php?page=".($page-1)."' class='prev'>&#10094;</a>";
    $columns = $result->field_count;
    if($result->num_rows){
        while($row = $result->fetch_assoc() ){
            card($row['name'],$row['price'],$row['size'],$row['img'], "../catalog");
        }}
    echo"<a href='./index.php?page=".($page+1)."'class='next' >&#10095;</a> </div>  ";

    // draw pagination
    echo "<div class='pagination'> <a href='./index.php?page=".($page-1)."'>&laquo;</a>"; 
    for($p = 1; $p <= $number_of_page; $p++ ){
        echo ( $p==$page ) ? "<a class='active' href='./index.php?page=$p'> $p</a>" :
        "<a href='./index.php?page=$p'> $p</a>";};
    echo "<a href='./index.php?page=".($page+1)."'>&raquo;</a> </div>"; 
}
?>

