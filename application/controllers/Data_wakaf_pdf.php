<?php
Class Data_wakaf_pdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'DAFTAR NAMA PEWAKAF',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'TAHUN 2019',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);

        $pdf->Cell(9,6,'No',1,0,'C');
        $pdf->Cell(40,6,'Nama',1,0,'C');
        $pdf->Cell(70,6,'Jenis Wakaf',1,0,'C');
        $pdf->Cell(25,6,'Nominal',1,0,'C');
        $pdf->Cell(50,6,'Bank',1,1,'C');
        $pdf->SetFont('Arial','',10);
        $pewakaf = $this->db->get('pewakaf')->result();
        $no = 1; 
        foreach ($pewakaf as $row){
        	
            $pdf->Cell(9,6,$no++,1,0);
            $pdf->Cell(40,6,$row->nama,1,0);
            $pdf->Cell(70,6,$row->jenis_wakaf,1,0);
            $pdf->Cell(25,6,$row->nominal,1,0);
            $pdf->Cell(50,6,$row->bank,1,1);  
        }
        $pdf->Output();
    }
}