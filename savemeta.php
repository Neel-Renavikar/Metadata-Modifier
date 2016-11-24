<?php
		session_start();
		print_r($_SESSION['Title']);
		/*$pdf = new FPDI();
		$pagecount = $pdf->setSourceFile($pdfPath);
                for($i=1; $i<=$pagecount; $i++)
		{
			$tplIdx = $pdf->importPage($i, '/MediaBox');
			$pdf->addPage();
			$pdf->useTemplate($tplIdx,10,10,90);
		}*/
		/*$title = $_POST['Title'];
	        $author = $_POST['Author'];
	        $subject = $_POST['Subject'];
	        $keywords = $_POST['Keywords'];*/
		//echo "in save";
		//echo $title." ".$author." ".$subject." ".$keywords;
		//$filename = "modified/".$file;
		//$pdf->Output($filename,'F');
		//$title = $_GET['Title']; 
		//print_r($title);
?>
<html>
   <body>
      
      <form action="" method="POST">
         
      </form>
      
   </body>
</html>
