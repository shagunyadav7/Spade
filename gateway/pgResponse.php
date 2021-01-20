<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script>
var div=document.querySelector('#content'); 
function generatepdf(){
var imgData;
html2canvas($("#content"),{
useCORS:true,
onrendered:function(canvas){
imgData = canvas.toDataURL('image/png');
var doc = new jsPDF('p','pt','a4');
doc.addImage(imgData,'PNG',10,10);
doc.save('invoice.pdf');

}
});
}
</script>

</head>
<?php
session_start();
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {
	echo "<h1><b>Transaction details:</b></h1>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<b>Transaction status is success</b>" . "<br/>";
		$statux="Success";
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
	}
	else {
		echo "<b>Transaction status is <h1>failure</h1></b>" . "<br/>";
        $statux="Failed";
	}

	if (isset($_POST) && count($_POST)>0 )
	{ 
		
				echo "<br>"."ORDER ID"." = ".$paramList['ORDERID'];
} ?>

<br>
<div class='container' id='content'>
<img src="http://localhost/3c/assets/work-img/logo.png">
   <br><table class='table table-dark'>
    <thead>
      <tr>
        <th>Order-ID</th>
        <th><?php echo $paramList['ORDERID']; ?></th>
      </tr>
      <tr>
          <th>Order-Status</th>
          <th><?php echo $statux; ?></th>
      </tr>
<tr>
          <th>Order-For</th>
          <th>Linkedin-Strategy</th>
      </tr>
    </thead>
    </table>
    <table class='table table-dark'>
    <tbody>
      <tr>
        <td>Amount</td>
        <td><?php echo $paramList['TXNAMOUNT']; ?></td>
      </tr>
<tr>
        <td>Transaction ID</td>
        <td><?php echo $paramList['TXNID']; ?></td>
      </tr>
      <tr>
          <td>Email</td>
          <td><?php echo $_SESSION['EMAIL']; ?></td>
      </tr>
<tr>
          <td>Name</td>
          <td><?php echo $_SESSION['NAME']; ?></td>
      </tr>
<tr>
          <td>Contact Number</td>
          <td><?php echo $_SESSION['PHONE']; ?></td>
      </tr>
     
    </tbody>
  </table>
</div>
<a href='javascript:generatepdf()' class='button'><button type="button" class="btn btn-primary">Save Reciept</button></a>
<?php 
if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<b>You will recieve an email reagrding the conference soon</b>" . "<br/>";

echo "Kindly Save the Reciept for assistance in any disputes";
	}
	
}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}


?>