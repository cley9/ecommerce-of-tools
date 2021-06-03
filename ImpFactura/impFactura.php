<?php
require('fpdf/fpdf.php');
class PDF extends FPDF{
  public function header(){
    $this->SetFont('Arial','B',18);
        $this->SetY(10);
        $this->SetTextColor(54, 135, 97 );
        $this->Cell(0,5,'AgrupecVentas',0,0,'C');
        $this->SetFont('Arial','B',10);
        $this->SetY(25);
        $this->Cell(0,5,'Lista de Producto',0,0,'C');
        $this->SetTextColor(82, 84, 82 );
        $this->Write(5,'Contactenos : cleyutp@gmail.com');
        $this->Ln();
        $this->Write(5,'Telefono : 931863427');
    $this->Image('logo.png',190,5,20,20,'png');
}// Pie de página
  public function Footer(){
  $this->SetFont('Arial','I',10);
    $this->SetY(-15);
       $this->SetX(183);
      $this->Write(5,'Agrupec.com ');///$this->Write('POSICION EN Y','Agrupec.com ');
    // Número de página
    $this->SetY(-15);
   $this->SetX(90);
    $this->AliasNbPages();
    $this->Write(15,utf8_decode('Página').$this->PageNo().'/{nb}');
      }
    }
      /// ---------------------------------------------------------tablas
      $fpdf= new PDF('p','mm','letter',true);
      $fpdf->AddPage('portrait', 'letter');   ////$pdf->AddPage('LANDSCAPE', 'letter'); para una pagina a4 horizontal
      //------------------------------------------------------sql
      require("../model/cn.php");
      $stmt = $DB_con->prepare('SELECT * FROM tbl_producto' );
        $stmt->execute();
      $producto_id_ = $stmt->fetchAll(PDO::FETCH_ASSOC);

      //------------------------------------------------------sql
      $fpdf->SetY(50);
      $fpdf->SetTextColor(255,255,255);
      $fpdf->SetFillColor(79,78,77);
      $fpdf->SetFont('Arial','B',10);
      $fpdf->Cell(30,10,'id',0,0,'C',1); // la ase de dato
      $fpdf->Cell(80,10,'Producto',0,0,'C',1); // la ase de dato
      $fpdf->Cell(30,10,'Precio',0,0,'C',1); // la ase de dato
      $fpdf->Cell(30,10,'Cantidad',0,0,'C',1); // la ase de dato
      $fpdf->Cell(30,10,'Fecha',0,0,'C',1); // la ase de dato
      $fpdf->Ln();
      $fpdf->SetLineWidth(0.5);
      $fpdf->SetTextColor(0,0,0);
      $fpdf->SetFillColor(255,255,255);
      $fpdf->SetDrawColor(80,80,80);
      foreach ($producto_id_ as $row ){
      $fpdf->SetFont('Arial','B',8);
      $fpdf->Cell(30,10,$row['db_id'],'B',0,'C',1);
      $fpdf->Cell(80,10,$row['db_nombre'],'B',0,'C',1); // la ase de dato
      $fpdf->Cell(30,10,"s/ ".$row['db_precio'],'B',0,'C',1); // la ase de dato
      //$fpdf->Cell(30,10,$row['db_imagen'],'B',0,'C',1); // la ase de dato
      $fpdf->Cell(30,10,'   ','B',0,'C',1);
      $fpdf->Cell(30,10,$row['db_fecha'],'B',0,'C',1);
      $fpdf->Ln();
      }
      /// ------------------------------------------------------------
          $fpdf->Output();

 ?>
