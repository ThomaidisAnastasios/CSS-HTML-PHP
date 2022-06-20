<HTML>
<?php
$student_id=$_POST['student_id'];
$eponymo=$_POST['eponymo'];
$onoma=$_POST['onoma'];
$taxi=$_POST['taxi'];
$tmima=$_POST['tmima'];
$connect=mysql_connect(localhost,root,"");
if (!$connect) {
	die ("Σφάλμα στη σύνδεση με τη βάση δεδομένων.");
}
mysql_select_db(mathitologio);
mysql_query('SET NAMES UTF8');
$sql="INSERT INTO students VALUES ('$student_id','$eponymo','$onoma','$taxi','$tmima')";
if ($result=mysql_query($sql)) {
   echo "Η εγγραφή προστέθηκε";
}
  else {
    echo "Λάθος".mysql_error();
  }
?>
<BR>
<a href="insert.html">Επιστροφή</a>
</HTML>	
