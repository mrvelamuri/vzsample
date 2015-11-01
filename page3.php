<?php
$selected_page = "page3";
require_once "header.php";
?>

<center><h1>User Details</h1></center>
<form method="post">
<table  class="table table-rwd table-bordered table-striped">
<tr><td colspan="2"><center>Form Details</center></td></tr>
<tr><td>User Name: </td><td><input type='text' name='username' id='username' value="Verizon"></td></tr>
<tr><td>User SSN: </td><td><input type='text' name='ssn' id='ssn' value='123-456-7890'></td></tr>
<tr><td>User Email: </td><td><input type='text' name='email' id='email' value='admin@verizon.com'></td></tr>
<tr><td>User Address: </td><td><input type='text' name='address' id='address' value="Mindspace HYD"></td></tr>
<tr><td>User IP: </td><td><input type='text' name='ip' id='ip' value='127.0.0.1'></td></tr>
<tr><td colspan="2"><center><input type='submit' name='submit' value="Update"/></center></td></tr>
</table>
</form>

<?php
require_once "footer.php";
?>
