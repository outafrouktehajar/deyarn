
<?php
//connexion
$connect = mysqli_connect("localhost", "root", "", "deyarn");
function make_query($connect)
{
 $query = "SELECT * FROM carous ORDER BY  id ASC";
 $result = mysqli_query($connect, $query);
 return $result;
}

function make_slide_indicators($connect)
{
 $output = ''; 
 $count = 0;
 $result = make_query($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '
   <li data-target="#carousel-example-1z" data-slide-to="'.$count.'" class="active"></li>
   ';
  }
  else
  {
   $output .= '
   <li data-target="#carousel-example-1z" data-slide-to="'.$count.'"></li>
   ';
  }
  $count = $count + 1;
 }
 return $output;
}

function make_slides($connect)
{
 $output = '';
 $count = 0;
 $result = make_query($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '<div class="carousel-item active">
   <button class="shopnow"><a style="color: white" href="yarns.php">Shop now</a></button>';
  }
  else
  {
   $output .= '<div class="carousel-item">';
  }
  $output .= '
   <img class="d-block" src="img/'.$row["caro_img"].'" alt="'.$row["caro_title"].'" />
  </div>
  ';
  $count = $count + 1;
 }
 return $output;
}

?>
        <!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade caraindex" data-ride="carousel">
    <ol class="carousel-indicators">
    <?php echo make_slide_indicators($connect); ?>
    </ol>

    <div class="carousel-inner" role="listbox">
     <?php echo make_slides($connect); ?>
    </div>
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

   </div>


   
                    
   