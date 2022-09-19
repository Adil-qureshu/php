<?php

include 'connect.php';
$sql="select crud.id, crud.name, crud.email , crud.mobile, posts.user_id from crud INNER JOIN posts
ON crud.id = posts.user_id";
$res=mysqli_query($con,$sql);

$html='<table border="1px black">

  <tr> <td>id</td>
  <td>name</td>
  <td>email</td>
  <td>mobile</td>
  <td>user id</td>

  </tr>';
 
while ($row=mysqli_fetch_assoc($res)){
    $html.='<tr>
    <td>'.$row['id'].'<td>'
    .$row['name'].'</td><td>'
    .$row['email'].'</td><td>'
    .$row['mobile'].'</td><td>'
    .$row['user_id'].'</td>

    </tr>';

}
$html.='</table>';
header('content-type:application/xls');
header('content-Disposition:attachment;filename=report.xls');
echo $html;
?>