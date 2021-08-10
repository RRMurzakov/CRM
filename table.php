  <html>
  <table border="1">
  <thead>
    <tr>
        <th>namehost</th>
        <th>nameooo</th>
        <th>inn</th>
	<th>kpp</th>
	<th>address</th>
	<th>ip</th>
	<th>fsrar1</th>
	<th>fsrar2</th>
	<th>fn</th>
    </tr>
	</thead>
	<tbody>
<?php 
 $host='localhost';
 $user='root';
 $password='111';
 $db_name='CRM';
         $bd=mysqli_connect($host,$user,$password,$db_name);

//у нас переменная окружения БД - $bd из скрипта bd.php

/*if(!empty($_POST)) {

  	$namehost_bd=$_POST['namehost'];
    $nameooo_bd=$_POST['nameooo'];
	$inn_bd=$_POST['inn'];
	$kpp_bd=$_POST['kpp'];
	$address_bd=$_POST['address'];
	$ip_bd=$_POST['ip'];
	$fsrar1_bd=$_POST['fsrar1'];
	$fsrar2_bd=$_POST['fsrar2'];
	$fn_bd=$_POST['fn'];*/


        $query1="SELECT * FROM `hosts`";
        mysqli_query($bd,$query1) or die(mysqli_error($bd)); 

 $result1=mysqli_query($bd,$query1) or die(mysqli_error($bd));
 
for($data=mysqli_fetch_array($result1)) 
{

        echo '<tr>';
        echo '<td>'.$data['namehost'].'</td>';
        echo '<td>'.$data['nameooo'].'</td>';
        echo '<td>'.$data['inn'].'</td>';
        echo '<td>'.$data['kpp'].'</td>';
        echo '<td>'.$data['address'].'</td>';
        echo '<td>'.$data['ip'].'</td>';
        echo '<td>'.$data['fsrar1'].'</td>';
        echo '<td>'.$data['fsrar2'].'</td>';
        echo '<td>'.$data['fn'].'</td>';

        echo '</tr>';
    }
 ?>
 </tbody>
</table>
</html>
