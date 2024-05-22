<?php
 if (isset($_GET['action'])) {
    $tam = $_GET['action'];
}
else {
    $tam = '';}
    if($tam =='Tkadmin'){
        include_once('Tkadmin/lietke.php');
        include('Tkadmin/them.php');
    }
    else if($tam == 'Tkuser'){
        include_once('option/lietke.php');
    }
    else if($tam == 'Quanlysanpham'){
      
        include('SP/lietke.php');
        include('SP/them.php');
    }
   

?>
