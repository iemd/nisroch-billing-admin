<!DOCTYPE html>
<html lang="en">
<head>
  <title>Invoice</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <style>
.body{
	border: 1px solid black;
}	
  body{font-size:12px;}
table {
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
}

hr { 
    display: block;
  

    border-style: inset;
    border-width: 1px;
} 



table {
    border-collapse: collapse;
    width: 100%;
}
th {
  background-color: #eee;
  font-weight: bold;
}
th,
td {
  border: 0.125em solid #333;
  line-height: 1.;
  padding: 0.75em;
  text-align: left;
}
/* Stack rows vertically on small screens */
@media (max-width: 30em) {
  /* Hide column labels */
	thead tr {
		position: absolute;
		top: -9999em;
		left: -9999em;
	}
	tr {
    border: 0.125em solid #333;
    border-bottom: 0;
  }
	/* Leave a space between table rows */
  tr + tr {
    margin-top: 1.5em;
  }
  /* Get table cells to act like rows */
  tr,
  td {
		display: block;
	}
	td {
		//border: none;
		border-bottom: 0.125em solid #333;
	/* Leave a space for data labels */
		padding-left: 50%;
	}
	/* Add data labels */
  td:before {
    content: attr(data-label);
    display: inline-block;
    font-weight: bold;
    line-height: 1.0;
    margin-left: -100%;
    width: 100%;
  }
}
/* Stack labels vertically on smaller screens */
@media (max-width: 20em) {
  td {
    padding-left: 0.75em;
  }
  td:before {
    display: block;
    margin-bottom: 0.75em;
    margin-left: 0;
  }
}

  html,body{
    height:297mm;
    width:210mm;
}




</style>
</head>
<body>
<div class="body">
<?php foreach($getcart as $row){ 
//print_r($row);
 }



 ?>
<div class="container-fluid">


<div class="container">
<div class="upper" style="text-align:left;margin-left:5px;">

<img src="<?php echo base_url('images/logonisroch.png'); ?>" alt="Nature" class="responsive" style="height:80px;width:120px;margin-top:10px;">
<div style="text-align:center;margin-top:-100px;margin-left:50px;">
<h1><u>Nisroch Chemicals Private Limited</u></h1>
  <p style="font-size:15px;margin-top:-5px;"><b>Mahadev Athan, Marcha-Marchi road, Near Bypass Thana, Patna City, Patna - 800009</b></p>

   <p style="font-size:15px;margin-top:-8px;"><b>Contact: 7667333455, 9661674388</b></p> 
	<p style="font-size:15px;margin-top:-5px;"><b>www.nisrochchemicals.in, https://m.facebook.com/@nisrochchemicals</b></p>
	</div>
  
  
  </div>
  
  </div>
 
  <div class="row">
  
   <div class="container">
  
<hr>

<p><span style="margin-left:10px;">
<?php if($row['ProductType'] == 'NPP'){ ?>
<b>PL No:</b> <?php echo $row['pnumber']; ?> | <?php echo $row['ProductType']; ?> 
<?php }else if($row['ProductType'] == 'NBP'){ ?> 
<b>Inv Type:</b> <?php echo $row['ProductType']; ?>
<?php } ?></span><span style="margin-left:180px;"><b>GSTIN:</b>10CQCPK4870N1ZQ </span><span style="margin-left:180px;"><b>Warehouse:</b> PATNA DEPOT</span></p>
  
<hr>

</div>
<div class="container">
   <h3 style="text-align:center;text-decoration:">Ledger Details</h3>
     
</div>


	
		
  <table style="border: none;">
		<tr>
		<td>
		
		
		<table style="width:33%;border:none;">
		  <tr>
			<td style="border:none;"><b>Name :</b> <?php echo $row['name']; ?></td>
		  </tr>
		  
		   <tr>
			<td style="border:none;"><b>Buyer Code :</b> <?php echo $row['bcode']; ?></td>
		  </tr>
		  
		  <tr>
			<td style="border:none;"><b>INVOICE NO :</b> <?php echo $row['Invoice']; ?></td>
		  </tr>
		  
		  <tr>
			<td style="border:none;"><b>Date :</b> <?php echo $row['pay_date']; ?></td>
		  </tr>
		 
		 </table>
		 
		 <table style="width:33%;margin-left:260px;margin-top:-133px;border:none;">
		  <tr>
			<td style="border:none;"><b>Transport :</b> BRO-6H</td>
		  </tr>
		  
		  <tr>
			<td style="border:none;"><b>P.O.S :</b> <?php echo $row['pos']; ?></td>
		  </tr>
		  
		  <tr>
			<td style="border:none;"><b>State :</b> Bihar</td>
		  </tr>
		  
		  <tr>
			<td style="border:none;"><b>GSTIN :</b> <?php echo $row['gst']; ?></td>
		  </tr>
		  
		  
		   
		  
		  </table>
		  
		  <table style="width:33%;margin-left:520px;margin-top:-133px;border:none;">
		  
		  <tr>
			<td style="border:none;"><b>Address :</b> <?php echo $row['State']; ?>, <?php echo $row['City']; ?>, <?php echo $row['Pincode']; ?>. </td>
		  </tr>
		  
		  <tr>
			<td style="border:none;"><b>Destination :</b> Sonu Kumar dshgsd</td>
		  </tr>
		  
		  
		  <tr>
			<td style="border:none;"><b>Delivery Address :</b> <?php echo $row['DAddress']; ?></td>
		  </tr>
		  
		  <tr>
			<td style="border:none;"><b>Number :</b> <?php echo $row['number']; ?></td>
		  </tr>
		  </table>
		  
		  
		  
		  
		</td>
		</tr>
		
		
 
</table>
		 



<div class="container" style="margin-left:01px;margin-right:01px;">
<table>
    <thead>
      <tr>
        <th>S.No.</th>
		<th>Date</th>
		<th>Debit</th>
		<th>Credit</th>
		<th>Pay Type | Dis</th>
        <th>Total Credit</th>
		<th>Balance</th>
        <th>Remarks</th>
		 
      </tr>
    </thead>
    <tbody>
	<?php 
	$count = 0;
	
	?>
	<?php foreach($getcart as $row1){ ?>
	<?php 
	
	$count+=1;
	?>
	
      <tr>
        <td><?php echo $count; ?></td>
		<td><?php echo $row1['ledgerdate']; ?></td>
		<td><?php echo $row1['debitamount']; ?></td>
		 <td><?php echo $row1['Credit']; ?></td>
		 <td><?php echo $row1['paymentType']; ?> | <?php echo $row1['dis']; ?> %</td>
        <td><?php echo $row1['totalcredit']; ?></td>
		<?php if($row1['paymentType'] == 'Debit'){ ?>
		<td><?php echo $row1['balance'] - $row1['previousLimt']; ?></td>
		<?php }else{ ?>
		<td><?php echo $row1['user_balance']; ?></td>
		<?php } ?>
        <td><?php echo $row1['Remarks']; ?></td>
		 
   
      </tr>
	<?php } ?>
	
    </tbody>
</table>
</div>

 
 

   
	    
	
	

<hr>



  

	     <P style="margin-left:15px;margin-right:15px;"><b>Terms & Condition:</b> 1. Payment Should be made by RTGS/NEFT or account payee cheque/draft drawn in the name of Nisroch Chemicals Private Limited. <b>2.</b> No Complaint in respect of material supplied vide this invoice shall be entertained unless the same is lodged in writing within 7 days from the date of dispatched. <b>3.</b> Our responsibility ceasos once the goods leave our factory. <b>4.</b> Interest will be charged @ 24% on overdue outstanding bills.</P>


  <table style="width:100%;border: none;">
  <tr style="border: none;">
	<td style="border: none;float:right;margin-right:20px;">&nbsp;</td>
		
  
  </tr>
        <tr style="border: none;">
	<td style="border: none;float:right;margin-right:20px;"><b>Authorised Signatory</b></td>
		
  
  </tr>
    
  </table>


	

	
	
<hr>



   <p style="margin-left:15px;margin-right:15px;"><strong>Head Office : </strong>B-707, Shri Ganesh Park, Goveli Road, Titwala-E, Maharastra - 421605.  &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<b>Email :</b> contact@nisrochchemicals.in</p>


 
 
</div>


<a id="printPageButton" href="<?php echo base_url('Billing'); ?>"><button>Close</button></a>

<a id="printPageButton" onClick="window.print()"><button>Print</button></a>
</div>
</body>
<style>
	@media print {
  #printPageButton {
    display: none;
  }
}
	</style>
</html>
