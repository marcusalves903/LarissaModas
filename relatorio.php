 <?php 
include 'banco.php';

require_once("fpdf181/fpdf.php");

$pdf= new FPDF("P","pt","A4");
$pdf->AddPage();

$pdf->SetFont('arial','B',18);
$pdf->Cell(0,5,"Relatorio",0,1,'C');
$pdf->Cell(0,5,"","B",1,'C');
$pdf->Ln(50);

$sql = "SELECT * FROM produto";
$result = mysqli_query($link,$sql);

$pdf->SetFont('arial','B',14);
$pdf->Cell(130,20,"id_produto",1,0,'L');
$pdf->Cell(140,20,"descricao",1,0,'L');
$pdf->Cell(140,20,"preco",1,1,'L');


$pdf->SetFont('arial','B',12);
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
	$pdf->Cell(130,20,$row[0],1,0,"L");
	$pdf->Cell(140,20,$row[1],1,0,"L");
	$pdf->Cell(140,20,$row[2],1,1,"L");
}

	mysqli_close($link);
	$pdf->Output("arquivo3.pdf","D");
 ?>