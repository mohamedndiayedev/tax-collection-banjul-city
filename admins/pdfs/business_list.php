<?php
require ('../../fpdf/fpdf.php');
	require_once("../db.php");
	class PDF extends FPDF{
		function Header(){
			$this -> SetFont('Arial','B',15);
			$this -> Cell(12);
			$this -> Cell(0,9,'BANJUL CITY COUNCIL TAX COLLECTION',0,1,"C");
			$this -> Cell(0,9,'AVAILABLE BUSINESS LISTS',0,1,"C");
			$this -> SetFont('Arial','B',10);
			$this -> Cell(0,5,'P.O BOX 90, GAMBIA BANJUL ',0,1,"C");
			$this -> Cell(0,5,'Website:www.banjul-city-council.gm',0,1,"C");
			$this -> Cell(0,5,'Email:infos@ank-analytics.com ',0,1,"C");
			$this -> Cell(0,5,'Phone:+220 4227600 (Mayor\'s Parlour)',0,1,"C");
			$this -> Cell(0,10,'Date:'.date('d-m-Y').'',0,1,"R");
			$this -> Ln(5);
			$this -> SetFont('Arial','B',14);
			$this -> SetFIllColor(180,180,255);
			$this -> SetDrawColor(50,50,100);
			$this -> Cell(10,9,'No',1,0,'',true);
			$this -> Cell(40,9,'Business Name',1,0,'',true);
			$this -> Cell(22,9,'Tax',1,0,'',true);
			$this -> Cell(40,9,'Business Owner',1,0,'',true);
			$this -> Cell(28,9,'ID No',1,0,'',true);
			$this -> Cell(30,9,'Phone',1,0,'',true);
			$this -> Cell(45,9,'Email',1,0,'',true);
			$this -> Cell(50,9,'Registration Date',1,1,'',true);
		}
		function Footer(){
			$this -> SetY(-15);
			$this -> SetFont('Arial','',8);
			$this -> Cell(0,10,'Page '.$this->PageNo()." / {pages}",0,0, 'C');
		}
	}
	$pdf = new PDF('L','mm','A4');
	$pdf -> AliasNbPages('{pages}');
	$pdf -> AddPage();
	$pdf -> SetFont('Arial','',12);
	$pdf -> SetDrawColor(50,50,100);
	$q = "SELECT * FROM businesses";
	$query = mysqli_query($con, $q);
	$i = 0;
	while($row = mysqli_fetch_array($query)){
		$i++;
		$pdf -> Cell(10,8,$i,1,0);
		$pdf -> Cell(40,8,$row['bs_name'],1,0);
		$pdf -> Cell(22,8,$row['tax_amount'],1,0);
		$pdf -> Cell(40,8,$row['own_name'],1,0);
		$pdf -> Cell(28,8,$row['own_id'],1,0);
		$pdf -> Cell(30,8,$row['own_phone'],1,0);
		$pdf -> Cell(45,8,$row['own_email'],1,0);
		$pdf -> Cell(50,8,$row['reg_date'],1,1);
	}
	$pdf -> Output();

?>
