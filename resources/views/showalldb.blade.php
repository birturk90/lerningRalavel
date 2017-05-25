<!DOCTYPE html>
<html>
<body>
<form action=store methode=get>
<table style="width:100%">
  <tr>
    <th>name</th>
    <th>email</th> 
    <th>avrage</th>
    <th>number</th>
    <th>gender</th>
    <th>edit</th>
   <th>delete</th>
  </tr>
 <?php
  foreach ($all as $k=>$v)
{
 echo '<tr>';
  echo  "<td> ($v->name);</td>";
  echo  "<td> ($v->email);</td>";
  echo  "<td> ($v->avrage);</td>";
  echo  "<td> ($v->number);</td>";
  echo  "<td> ($v->gender);</td>";
  echo  "<td> <a href='/show?ID=$v->id'>edit</a>;</td>";
  echo  "<td> <a href='/delete?id=$v->id'>delete</a>;</td>";
  echo '</tr>';
}
?>

</table>
 <a href="/create"><h>add new record to table</h></a> 
</form>
</body>
</html>