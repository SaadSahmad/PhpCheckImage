//Verify if image existe

<?php
$image = "tonimage.jpg";
$path_parts = pathinfo($tonimage');
 
if(is_file($tonimage))
{
$extension = $path_parts['extension'];
if(($extension=="jpg")||($extension=="jpeg")||($extension=="png")||($extension=="gif"))
echo "tonimage existe";
}
else
{
echo "ton image n'existe pas";
}
?>