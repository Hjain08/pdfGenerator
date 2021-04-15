<?php 

	require('pdf/fpdf.php');

	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'suprisetest');

	$pageWidth = 210;
	$pageHeight = 297;

	class PDF extends FPDF {
	function Header(){

		$margin=10;
		$this->Rect(5, 5, 200, 287, 'D');

		$this->SetFont('Times','B',22);

		$this->SetTextColor(0,0,255); 
		
		$this->Cell(12);
		
		//put logo
		$this->Image('logo.png',150,10,30);
		
		$this->Cell(100,10,'Invoice',0,1);

		$this->Line(10, 30, 200-10, 30);



		//
	$this->SetTextColor(0,0,0); 
	$this->Ln();
	$this->Ln();

	$this->SetFont('Times','B',14);

	$this->Cell(130	,5,'Oretes Consulting Pvt. Ltd',0,0);
	$this->Cell(59	,5,'',0,1);//end of line
	$this->Ln();
	//$pdf->Ln();
	$this->SetFont('Times','',14);

	//$pdf->Cell(10	,5,'',0,0);
	$this->Cell(90	,5,'XYZ',0,1);

	//$pdf->Cell(10	,5,'',0,0);
	$this->Cell(90	,5,'Plot No: 490/5851',0,1);

	//$pdf->Cell(10	,5,'',0,0);
	$this->Cell(90	,5,'Krishna Garden 2, Jagamara',0,1);

	//$pdf->Cell(10	,5,'',0,0);
	$this->Cell(90	,5,'Bhubaneshwar, Odhisha, India',0,1);

	$this->Ln();
	$this->SetFont('Times','B',14);
	$this->Cell(130	,5,'To',0,0);

	$this->Ln();
	$this->SetFont('Times','',14);
	//$pdf->Cell(10	,5,'',0,0);
	$this->Cell(130	,5,'[Name]',0,0);

	$this->Ln();
	//$pdf->Cell(10	,5,'',0,0);
	$this->Cell(130	,5,'[Address]',0,0);
	
	$this->Ln();
	//$pdf->Cell(10	,5,'',0,0);
	$this->Cell(130	,5,'[Phone]',0,0);


	$this->Ln();
	$this->Ln();
	$this->Ln();
	$this->SetFont('Times','B',12);
	$this->Cell(130	,5,'Additional information',0,0);

	$this->Ln();
	$this->SetFont('Times','',12);
	//$pdf->Cell(10	,5,'',0,0);
	$this->Cell(130	,5,'Goods once sold cannot be returned!',0,0);
	//$pdf->Ln();

	

	$this->Ln();
	$this->Ln();

	//
	$this->Line(10, 120, 200-10, 120);

		
		//dummy cell to give line spacing
		//$this->Cell(0,5,'',0,1);
		//is equivalent to:
		$this->Ln(5);
		
		$this->SetFont('Times','B',14);
		
		//$this->SetFillColor(180,180,255);
		//$this->SetDrawColor(180,180,255);

		$this->Cell(10,5,'ID',1,0);
		$this->Cell(30,5,'UNAME',1,0);
		$this->Cell(30,5,'NUMBER',1,0);
		$this->Cell(30,5,'ADDRESS',1,0);
		$this->Cell(45,5,'QUERY',1,0);
		$this->Cell(40,5,'DETAILS',1,1);
	}
	function Footer(){
		
		//Go to 1.5 cm from bottom
		$this->SetY(-40);
				

		$this->SetFont('Times','',8);

		$this->Cell(160,-4,'London, W14 OQH',0,1);

		$this->Cell(160,-6,'West Keinsington',0,1);

		//$this->Cell(160,-0,'77 Hamersmith Road ',0,1);

		$this->SetFont('Times','B',12);

		$this->Cell(65,-10,'Registered Address:',0,0);

		$this->Cell(70,-10,'Contact Information',0,0);

		$this->Cell(30,-10,'Payment Details',0,0);


		$this->SetFont('Times','',10);

		$this->Cell(175,3,'Freddy Seller',0,1,'C');
		
		
		//$this->Cell(165,2,'Email: freddy@gmail.com',0,1,'C');


		$this->Cell(170,0,'Phone: 0208 668',0,1,'C');

		$this->Cell(300,-0,'Bank Name: ABC',0,1,'C');
		$this->Cell(300,8,'Acc No.: 2356784',0,1,'C');


		
		//width = 0 means the cell is extended up to the right margin
		$this->SetY(-15);

		$this->SetFont('Times','',8);

		$this->Cell(0,10,'Page '.$this->PageNo()." / {pages}",0,0,'C');
	}
}


	$pdf = new PDF();
	$pdf->AddPage();

	//$pdf->Image('logo.png',150,10,30);
	//$pdf->SetFont('Times', 'B', 26);

	//$pdf->Cell(150,15,'Invoice',0,0);

	//$pdf->Line(10, 30, 200-10, 30);
	//$pdf->Cell(59	,5,'INVOICE',0,1);//end of line

	$query=mysqli_query($con,"SELECT * FROM st01 WHERE id=(SELECT max(id) FROM st01);");

	while($data=mysqli_fetch_array($query)){
		$pdf->SetFont('Times','',12);
		$pdf->Cell(10,5,$data['id'],'LR',0);
		$pdf->Cell(30,5,$data['uname'],'LR',0);
		$pdf->Cell(30,5,$data['num'],'LR',0);
		$pdf->Cell(30,5,$data['addr'],'LR',0);
		$pdf->Cell(45,5,$data['quer'],'LR',0);
		$pdf->Cell(40,5,$data['submission'],'LR',1);
}
	

	//$pdf->Line(10, 160, 200-10, 160);

	$pdf->Line(10, 230, 200-10, 230);

	
	$pdf->Output();

?>