<!--include header menu-->
<?php include("includes/header.php"); ?>

	<tr>
	<td>
	
	<table border="0" width="100%" cellpadding="0" cellspacing="10" style="height:426px;">
	<tr>
	<td width="15%" valign="top"><?php include("includes/menu.php");?></td>
	<td valign="top">
	<h2 class="heading_admin">Manage Certificate</h2>
	
	<?php 
	$edit = @$_GET['edit'];
	$delete = @$_GET['delete'];
	
	if($edit)
	{
	 // $pagedata = get_page_by_id($edit);	  
	 // newpageform($pagedata,2);
	}	
	else
	{
	if($delete)
	{
	  delete_record_by_id('es_certificate',$delete);
	}
	newcertificate_form(); 
	
	$pagelists = get_Certificates();
	
	if($pagelists)
	 {
	    echo "<table border='0' class='border2'>";
		echo "<tr><th width='5%'>S.No</th><th>Title</th><th width='15%'>Category</th><th width='5%'>Delete</th></tr>";
		
		for($i=0;$i<count($pagelists);$i++)
		{
		   echo "<tr onmouseover='this.className=\"tblmouseover\"'  onmouseout='this.className=\"tblmouseout\"'><td>".($i+1)."</td><td>".$pagelists[$i]['name']."</td><td>".$pagelists[$i]['company']."</td></td><td align='center'><a href='certificates.php?delete=".$pagelists[$i]['id']."' onclick='return confirmSubmit()'>Delete</a></td></tr>";
		   
		 }
	   echo "</table>";
	 }
	 }
	?>
	</td>
	</tr>
	</table>
	
	
	</td>
	</tr>	
	

   <!--include footer menu-->
<?php include("includes/footer.php"); ?>
