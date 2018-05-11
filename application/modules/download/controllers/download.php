<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Download extends MY_Controller {

  public function __construct()
	{
			parent::__construct();
			$this->load->model('m_download');
	}

	function index() {
		try {
			$sessData = $this->checkSessionData();
			if ($sessData===false){
				echo Modules::run('login');
			} else {
        $data['record']= $this->m_download->data_laporan()->result();
				$this->load->view('v_download',$data);
			}
		} catch (Exception $e) {
			echo $e->getMessage() . "\r\n" . $e->getTraceAsString();
		}
  }

  function unduh($id) {
		try {
			$sessData = $this->checkSessionData();
			if ($sessData===false){
				echo Modules::run('login');
			} else {
        $data['download'] = $this->m_download->download($id)->result();
        $this->load->view('download',$data);
			}
		} catch (Exception $e) {
			echo $e->getMessage() . "\r\n" . $e->getTraceAsString();
		}
  }

  function export($id) {
		try {
			$sessData = $this->checkSessionData();
			if ($sessData===false){
				echo Modules::run('login');
			} else {
        $data = $this->m_download->download($id)->result();

        $this->load->library('excel');

  			// pengaturan style header tabel
        $style_judul = array(
  				      'font' => array('bold' => true), // Set font nya jadi bold
  							'alignment' => array(
  								'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
  							  'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
  							)
  			 );
         $style_Kanan = array(
   				      'font' => array('bold' => true), // Set font nya jadi bold
   							'alignment' => array(
   								'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT, // Set text jadi ditengah secara horizontal (center)
   							  'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
   							)
   			 );
         $style_tengah = array(
   							'alignment' => array(
   								'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
   							  'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
   							)
   			 );
         $style_kiri = array(
   							'alignment' => array(
   								'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT, // Set text jadi ditengah secara horizontal (left)
   							  'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
   							)
   			 );
  			$style_col = array(
  				      'font' => array('bold' => true), // Set font nya jadi bold
  							'alignment' => array(
  								'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
  							  'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
  							),
  							'borders' => array(
  								 'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
  								 'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
  								 'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
  								 'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
  							)
  			 );

  			// pengaturan style isi tabel
  			$style_row = array(
          'alignment' => array(
          'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
  		   ),
  			       'borders' => array(
  							         'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
  											 'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
  											 'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
  											 'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN)
  							)
  			);

  			$this->excel->setActiveSheetIndex(0);

  			$this->excel->getActiveSheet()->setTitle('Worksheet1');
        $this->excel->getActiveSheet()->setCellValue('A1', 'LAPORAN PENERBITAN AKTA OLEH PPAT');
        $this->excel->getActiveSheet()->mergeCells('A1:Q1');
        $this->excel->getActiveSheet()->setCellValue('G2', 'Bulan : ');
        $this->excel->getActiveSheet()->setCellValue('I2', 'Tahun : ');
        $this->excel->getActiveSheet()->mergeCells('I2:J2');
        $this->excel->getActiveSheet()->setCellValue('A3', 'Nama PPAT : ');
        $this->excel->getActiveSheet()->mergeCells('A3:B3');
        $this->excel->getActiveSheet()->setCellValue('A4', 'Almat PPAT : ');
        $this->excel->getActiveSheet()->mergeCells('A4:B4');
        $this->excel->getActiveSheet()->setCellValue('A5', 'NPWP : ');
        $this->excel->getActiveSheet()->mergeCells('A5:B5');
        $this->excel->getActiveSheet()->setCellValue('A6', 'Daerah Kerja : ');
        $this->excel->getActiveSheet()->mergeCells('A6:B6');
        $this->excel->getActiveSheet()->setCellValue('M3', 'Kepada Yth.');
        $this->excel->getActiveSheet()->mergeCells('M3:N3');
        $this->excel->getActiveSheet()->setCellValue('M4', 'Kepala Dinas Pendapatan');
          $this->excel->getActiveSheet()->mergeCells('M4:N4');
        $this->excel->getActiveSheet()->setCellValue('M5', 'Kota Bandung');
          $this->excel->getActiveSheet()->mergeCells('M5:N5');

  			$this->excel->getActiveSheet()->setCellValue('A8', 'No Urut');
  			$this->excel->getActiveSheet()->mergeCells('A8:A9');
        $this->excel->getActiveSheet()->setCellValue('A10', '1');
  			$this->excel->getActiveSheet()->setCellValue('B8', 'Akta');
  			$this->excel->getActiveSheet()->mergeCells('B8:C8');
  			$this->excel->getActiveSheet()->setCellValue('B9', 'Nomor');
  			$this->excel->getActiveSheet()->setCellValue('C9', 'Tanggal');
        $this->excel->getActiveSheet()->setCellValue('B10', '2');
  			$this->excel->getActiveSheet()->setCellValue('C10', '3');
  			$this->excel->getActiveSheet()->setCellValue('D8', 'Bentuk Perbuatan Hukum');
  			$this->excel->getActiveSheet()->mergeCells('D8:D9');
        $this->excel->getActiveSheet()->setCellValue('D10', '4');
  			$this->excel->getActiveSheet()->setCellValue('E8', 'Nama Alamat dan NPWP');
  			$this->excel->getActiveSheet()->mergeCells('E8:F8');
  			$this->excel->getActiveSheet()->setCellValue('E9', 'Pihak yang mengalihkan`');
  			$this->excel->getActiveSheet()->setCellValue('F9', 'Pihak yang menerima');
        $this->excel->getActiveSheet()->setCellValue('E10', '5');
        $this->excel->getActiveSheet()->setCellValue('F10', '6');
  			$this->excel->getActiveSheet()->setCellValue('G8', 'Jenis dan Nomor Hak');
        $this->excel->getActiveSheet()->mergeCells('G8:G9');
        $this->excel->getActiveSheet()->setCellValue('G10', '7');
  			$this->excel->getActiveSheet()->setCellValue('H8', 'Letak Tanah dan Bangunan');
  			$this->excel->getActiveSheet()->mergeCells('H8:H9');
        $this->excel->getActiveSheet()->setCellValue('H10', '8');
  			$this->excel->getActiveSheet()->setCellValue('I8', 'Luas (m2)');
  			$this->excel->getActiveSheet()->mergeCells('I8:J8');
  			$this->excel->getActiveSheet()->setCellValue('I9', 'Tanah');
  			$this->excel->getActiveSheet()->setCellValue('J9', 'Bangunan');
        $this->excel->getActiveSheet()->setCellValue('I10', '9');
        $this->excel->getActiveSheet()->setCellValue('J10', '10');
  			$this->excel->getActiveSheet()->setCellValue('K8', 'Harga Transaksi Perolehan/Pengalihan Hak (Rp)');
  			$this->excel->getActiveSheet()->mergeCells('K8:K9');
        $this->excel->getActiveSheet()->setCellValue('K10', '11');
  			$this->excel->getActiveSheet()->setCellValue('L8', 'SPPT PBB');
  			$this->excel->getActiveSheet()->mergeCells('L8:M8');
  			$this->excel->getActiveSheet()->setCellValue('L9', 'NOP Tahun');
  			$this->excel->getActiveSheet()->setCellValue('M9', 'NJOP (Rp)');
        $this->excel->getActiveSheet()->setCellValue('L10', '12');
        $this->excel->getActiveSheet()->setCellValue('M10', '13');
  			$this->excel->getActiveSheet()->setCellValue('N8', 'SSP');
  			$this->excel->getActiveSheet()->mergeCells('N8:O8');
  			$this->excel->getActiveSheet()->setCellValue('N9', 'Tanggal');
  			$this->excel->getActiveSheet()->setCellValue('O9', '(Rp)');
        $this->excel->getActiveSheet()->setCellValue('N10', '14');
        $this->excel->getActiveSheet()->setCellValue('O10', '15');
  			$this->excel->getActiveSheet()->setCellValue('P8', 'SSPD BPHTP');
  			$this->excel->getActiveSheet()->mergeCells('P8:Q8');
  			$this->excel->getActiveSheet()->setCellValue('P9', 'Tanggal');
  			$this->excel->getActiveSheet()->setCellValue('Q9', '(Rp)');
        $this->excel->getActiveSheet()->setCellValue('P10', '16');
        $this->excel->getActiveSheet()->setCellValue('Q10', '17');
  			$this->excel->getActiveSheet()->setCellValue('R8', 'Keterangan');
  			$this->excel->getActiveSheet()->mergeCells('R8:R8');
        $this->excel->getActiveSheet()->setCellValue('R10', '18');

        $this->excel->getActiveSheet()->setCellValue('M22', 'Bandung,');
        $this->excel->getActiveSheet()->setCellValue('N24', 'Nama PPAT');

  			// Apply style header yang telah kita buat tadi ke masing-masing kolom header
        $this->excel->getActiveSheet()->getStyle('A1:R1')->applyFromArray($style_judul);
        $this->excel->getActiveSheet()->getStyle('G2')->applyFromArray($style_Kanan);
        $this->excel->getActiveSheet()->getStyle('I2')->applyFromArray($style_Kanan);
        $this->excel->getActiveSheet()->getStyle('H2')->applyFromArray($style_kiri);
        $this->excel->getActiveSheet()->getStyle('K2')->applyFromArray($style_kiri);
  			$this->excel->getActiveSheet()->getStyle('A8:A9')->applyFromArray($style_col);
  			$this->excel->getActiveSheet()->getStyle('A10')->applyFromArray($style_col);
  			$this->excel->getActiveSheet()->getStyle('B8:C8')->applyFromArray($style_col);
  			$this->excel->getActiveSheet()->getStyle('B9')->applyFromArray($style_col);
  			$this->excel->getActiveSheet()->getStyle('C9')->applyFromArray($style_col);
  			$this->excel->getActiveSheet()->getStyle('B10')->applyFromArray($style_col);
  			$this->excel->getActiveSheet()->getStyle('C10')->applyFromArray($style_col);
  			$this->excel->getActiveSheet()->getStyle('C3:C6')->applyFromArray($style_kiri);
  			$this->excel->getActiveSheet()->getStyle('D8:D9')->applyFromArray($style_col);
        $this->excel->getActiveSheet()->getStyle('D10')->applyFromArray($style_col);
  			$this->excel->getActiveSheet()->getStyle('E8:F8')->applyFromArray($style_col);
  			$this->excel->getActiveSheet()->getStyle('E9')->applyFromArray($style_col);
  			$this->excel->getActiveSheet()->getStyle('F9')->applyFromArray($style_col);
        $this->excel->getActiveSheet()->getStyle('E10')->applyFromArray($style_col);
        $this->excel->getActiveSheet()->getStyle('F10')->applyFromArray($style_col);
  			$this->excel->getActiveSheet()->getStyle('G8:G9')->applyFromArray($style_col);
        $this->excel->getActiveSheet()->getStyle('G10')->applyFromArray($style_col);
  			$this->excel->getActiveSheet()->getStyle('H8:H9')->applyFromArray($style_col);
        $this->excel->getActiveSheet()->getStyle('H10')->applyFromArray($style_col);
  			$this->excel->getActiveSheet()->getStyle('I8:J8')->applyFromArray($style_col);
  			$this->excel->getActiveSheet()->getStyle('I9:J9')->applyFromArray($style_col);
        $this->excel->getActiveSheet()->getStyle('I10')->applyFromArray($style_col);
        $this->excel->getActiveSheet()->getStyle('J10')->applyFromArray($style_col);
  			$this->excel->getActiveSheet()->getStyle('K8:K9')->applyFromArray($style_col);
        $this->excel->getActiveSheet()->getStyle('K10')->applyFromArray($style_col);
  			$this->excel->getActiveSheet()->getStyle('L8:M8')->applyFromArray($style_col);
  			$this->excel->getActiveSheet()->getStyle('L9:M9')->applyFromArray($style_col);
        $this->excel->getActiveSheet()->getStyle('L10')->applyFromArray($style_col);
        $this->excel->getActiveSheet()->getStyle('M10')->applyFromArray($style_col);
  			$this->excel->getActiveSheet()->getStyle('N8:O8')->applyFromArray($style_col);
  			$this->excel->getActiveSheet()->getStyle('N9:O9')->applyFromArray($style_col);
        $this->excel->getActiveSheet()->getStyle('N10')->applyFromArray($style_col);
        $this->excel->getActiveSheet()->getStyle('O10')->applyFromArray($style_col);
  			$this->excel->getActiveSheet()->getStyle('P8:Q8')->applyFromArray($style_col);
  			$this->excel->getActiveSheet()->getStyle('P9:Q9')->applyFromArray($style_col);
        $this->excel->getActiveSheet()->getStyle('P10')->applyFromArray($style_col);
        $this->excel->getActiveSheet()->getStyle('Q10')->applyFromArray($style_col);
  			$this->excel->getActiveSheet()->getStyle('R8:R9')->applyFromArray($style_col);
        $this->excel->getActiveSheet()->getStyle('R10')->applyFromArray($style_col);
        $this->excel->getActiveSheet()->getStyle('M25')->applyFromArray($style_tengah);
        $this->excel->getActiveSheet()->getStyle('M22:N22')->applyFromArray($style_tengah);
        $this->excel->getActiveSheet()->getStyle('N24')->applyFromArray($style_tengah);
        $this->excel->getActiveSheet()->getStyle('O22')->applyFromArray($style_kiri);


        // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
        $this->excel->getActiveSheet()->getStyle('A11:A20')->applyFromArray($style_row);
        $this->excel->getActiveSheet()->getStyle('B11:B20')->applyFromArray($style_row);
        $this->excel->getActiveSheet()->getStyle('C11:C20')->applyFromArray($style_row);
        $this->excel->getActiveSheet()->getStyle('D11:D20')->applyFromArray($style_row);
        $this->excel->getActiveSheet()->getStyle('E11:E20')->applyFromArray($style_row);
        $this->excel->getActiveSheet()->getStyle('F11:F20')->applyFromArray($style_row);
        $this->excel->getActiveSheet()->getStyle('G11:G20')->applyFromArray($style_row);
        $this->excel->getActiveSheet()->getStyle('H11:H20')->applyFromArray($style_row);
        $this->excel->getActiveSheet()->getStyle('I11:I20')->applyFromArray($style_row);
        $this->excel->getActiveSheet()->getStyle('J11:J20')->applyFromArray($style_row);
        $this->excel->getActiveSheet()->getStyle('K11:K20')->applyFromArray($style_row);
        $this->excel->getActiveSheet()->getStyle('L11:L20')->applyFromArray($style_row);
        $this->excel->getActiveSheet()->getStyle('M11:M20')->applyFromArray($style_row);
        $this->excel->getActiveSheet()->getStyle('N11:N20')->applyFromArray($style_row);
        $this->excel->getActiveSheet()->getStyle('O11:Q20')->applyFromArray($style_row);
        $this->excel->getActiveSheet()->getStyle('P11:P20')->applyFromArray($style_row);
        $this->excel->getActiveSheet()->getStyle('Q11:Q20')->applyFromArray($style_row);
        $this->excel->getActiveSheet()->getStyle('R11:R20')->applyFromArray($style_row);

  			// set widt kolom
  			$this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(15);
  			$this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(15);
  			$this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(30);
  			$this->excel->getActiveSheet()->getColumnDimension('E')->setWidth(30);
  			$this->excel->getActiveSheet()->getColumnDimension('F')->setWidth(30);
  			$this->excel->getActiveSheet()->getColumnDimension('G')->setWidth(30);
  			$this->excel->getActiveSheet()->getColumnDimension('H')->setWidth(35);
  			$this->excel->getActiveSheet()->getColumnDimension('I')->setWidth(10);
  			$this->excel->getActiveSheet()->getColumnDimension('J')->setWidth(10);
  			$this->excel->getActiveSheet()->getColumnDimension('K')->setWidth(60);
  			$this->excel->getActiveSheet()->getColumnDimension('L')->setWidth(15);
  			$this->excel->getActiveSheet()->getColumnDimension('M')->setWidth(15);
  			$this->excel->getActiveSheet()->getColumnDimension('N')->setWidth(15);
  			$this->excel->getActiveSheet()->getColumnDimension('O')->setWidth(15);
  			$this->excel->getActiveSheet()->getColumnDimension('P')->setWidth(15);
  			$this->excel->getActiveSheet()->getColumnDimension('Q')->setWidth(15);
  			$this->excel->getActiveSheet()->getColumnDimension('R')->setWidth(30);

  			$no = 1;
  			$numrow = 11;
  			foreach ($data as $a) {
          $this->excel->setActiveSheetIndex(0)->setCellValue('H2', $a->periode_bulan);
          $this->excel->setActiveSheetIndex(0)->setCellValue('K2', $a->periode_tahun);
          $this->excel->setActiveSheetIndex(0)->setCellValue('C3', $a->nama_ppat);
          $this->excel->setActiveSheetIndex(0)->mergeCells('C3:D3');
          $this->excel->setActiveSheetIndex(0)->setCellValue('C4', $a->alamat_ppat);
          $this->excel->setActiveSheetIndex(0)->mergeCells('C4:D4');
          $this->excel->setActiveSheetIndex(0)->setCellValue('C5', $a->npwp);
          $this->excel->setActiveSheetIndex(0)->mergeCells('C5:D5');
          $this->excel->setActiveSheetIndex(0)->setCellValue('C6', $a->daerah_kerja);
          $this->excel->setActiveSheetIndex(0)->mergeCells('C6:D6');
          $this->excel->setActiveSheetIndex(0)->setCellValue('O22', $a->periode_tahun);
          $this->excel->setActiveSheetIndex(0)->setCellValue('M25', $a->nama_ppat);
          $this->excel->setActiveSheetIndex(0)->mergeCells('M25:O25');

  				$this->excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
  				$this->excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $a->no_akta);
  				$this->excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $a->tgl_akta);
  				$this->excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $a->bentuk_perbuatan_hukum);
  				$this->excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $a->p_mengalihkan_nama);
  				$this->excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $a->p_menerima_nama);
  				$this->excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $a->jenis_dan_nomor_hak);
  				$this->excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $a->letak_tanah_dan_bangunan);
  				$this->excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $a->luas_tanah);
  				$this->excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $a->luas_bangunan);
  				$this->excel->setActiveSheetIndex(0)->setCellValue('K'.$numrow, $a->harga_transaksi);
  				$this->excel->setActiveSheetIndex(0)->setCellValue('L'.$numrow, $a->sppt_pbb_nop_tahun);
  				$this->excel->setActiveSheetIndex(0)->setCellValue('M'.$numrow, $a->sppt_ppb_njop);
  				$this->excel->setActiveSheetIndex(0)->setCellValue('N'.$numrow, $a->ssp_tanggal);
  				$this->excel->setActiveSheetIndex(0)->setCellValue('O'.$numrow, $a->ssp_nominal);
  				$this->excel->setActiveSheetIndex(0)->setCellValue('P'.$numrow, $a->sspd_bphtb_tanggal);
  				$this->excel->setActiveSheetIndex(0)->setCellValue('Q'.$numrow, $a->sspd_bphtb_nominal);
  				$this->excel->setActiveSheetIndex(0)->setCellValue('R'.$numrow, $a->keterangan);

          $nama = $a->nama_ppat;
          $bln  = $a->periode_bulan;
          $thn  = $a->periode_tahun;
  				$no++;
  				$numrow++;
  			}

  			$filename='Laporan';

  			// Header file Excel
  			header('Content-Type: application/vnd.ms-excel');
  			header('Content-Disposition: attachment;filename="'.$filename.'-'.$nama.'-'.$bln.'-'.$thn.'.xls"');
  			header('Cache-Control: max-age=0');

  			$objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');

  			// Agar output didownload
  			$objWriter->save('php://output');
			}
		} catch (Exception $e) {
			echo $e->getMessage() . "\r\n" . $e->getTraceAsString();
		}
  }

}
