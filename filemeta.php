<?php
	include("PDFMetadataReader.php");
	
	//include("vendor/zendframework/zendpdf");
	$binary = '/usr/bin/pdfinfo';
	$file = $_GET['file'];
	//print_r($file);
	$pdfPath = "uploads/".$file;
	//print_r($pdfPath);
	//$pdfPath = "uploads/".$file;
	//exec($this->binary.' -meta '.$pdfPath, $output);
	//print_r($output);
	$metadata = PDFMetadataReader::factory($pdfPath);
	//print_r($metadata);
        //echo 'Title   : '.'<input type="text" name ="Title" value= "'. $metadata->Title .'" />'.'<br>';
	//echo 'Author  : '.'<input type="text" name ="Author" value= "'. $metadata->Author .'" />'.'<br>';
	//echo 'Subject : '.'<input type="text" name ="Subject" value= "'. $metadata->Subject .'" />'.'<br>';
	//echo 'Keywords: '.'<input type="text" name ="Keywords" value= "'. $metadata->Keywords .'" />'.'<br>';
        //$pdf = zendpdf::load($pdfPath):
	//echo $pdf->properties['Title']."\n";

        /*$searchpath = "uploads/".$file
	$outfile = "";
	try
	{
	     $metadata->Title.'<br>';
	}*/
	
	if(isset($_POST['Done']))
	{
		require_once("fpdf181/fpdf.php");
	        require_once("FPDI-1.6.1/fpdi.php");
	        $title = $_POST['Title'];
		$author = $_POST['Author'];
		$subject = $_POST['Subject'];
		$keywords = $_POST['Keywords'];
		$path = "store/".$file;
		$i = 1;
		$newString= explode(".",$file);
		//$pdfPath="upload/".newString[0].".pdf";
		//echo "hey";
		/*session_start();
		$_SESSION['Title'] = $_POST['Title'];
		$_SESSION['Author'] = $_POST['Author'];
		$_SESSION['Keywords'] = $_POST['Keywords'];
		$_SESSION['Subject'] = $_POST['Subject'];*/
		
		$pdf = new FPDI();
		echo $pdfPath;
		try{
                 $pageCount = $pdf->setSourceFile($pdfPath);
			echo $pageCount;
		}catch(Exception $e)
		{
			echo 'Message :-' .$e->getMessage();
		}
		/*for($i=1;$i<=$pageCount;$i++)
		{
			echo $i;
		}*/
		//echo $pageCount;
		try{
		for($i = 1; $i <= $pdf->setSourceFile($pdfPath); $i++)
		{
			$tplIdx = $pdf->importPage($i, '/MediaBox');
			$pdf->addPage();
			$pdf->useTemplate($tplIdx, 10, 10, 90);
			echo $i;
		}
		$pdf->SetAuthor($author);
		$pdf->SetTitle($title);
		$pdf->SetSubject($subject);
		$pdf->SetKeywords($keywords); 
		$pdf->Output($path, 'F');
		}
		catch(Exception $e)
		{
			echo "Message :-".$e->getMessage();
		}
		echo "Success";
	}
?>

<html>
   <body>
      
      <form action="" method="post">
	 Title   : <input type="text" name ="Title" value= "<?php echo $metadata->Title ?>" /><br>
	 Author  : <input type="text" name ="Author" value= "<?php echo $metadata->Author ?>" /><br>
	 Subject : <input type="text" name ="Subject" value= "<?php echo $metadata->Subject ?>" /><br>
	 Keywords: <input type="text" name ="Keywords" value= "<?php echo $metadata->Keywords ?>" /><br>
         <input type="submit" name="Done" value="Done"/>
      </form>
      
   </body>
</html>
