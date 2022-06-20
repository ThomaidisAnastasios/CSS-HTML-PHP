<HTML>
<?php
$connect=mysql_connect(localhost,root,"");
mysql_select_db(mathitologio);
if (!$connect) {
	die ("Σφάλμα στη σύνδεση με τη βάση δεδομένων.");
}
mysql_query('SET NAMES UTF8');
$student_id=$_GET['student_id'];
$sql="DELETE FROM students WHERE student_id=$student_id";
if ($result=mysql_query($sql)) {
   echo "Η εγγραφή διαγράφηκε";
}
  else {
    echo "Λάθος".mysql_error();
  }
?>
<BR>
<a href="studentslist.php">Επιστροφή</a>
</HTML>
