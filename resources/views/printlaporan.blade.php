<?php

		$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

		//Set Margin
		$pdf->SetMargins(PDF_MARGIN_LEFT, 20, PDF_MARGIN_RIGHT);

		$pdf->SetPrintHeader(false);
		$pdf->SetPrintFooter(false);

		$pdf->AddPage();
		$judul_laporan 	= '<br><h1 align="center" style="font-size: 250%;">Laporan Perijinan</h1> <br>';
		$judul_laporan.= '<h1 align="center"> Dinas Tata Ruang Kota Bandung </h1><br>';
		$pdf->writeHTMLCell(0, 0, '', '', $judul_laporan, 0, 1, 0, true, '', true);
		$gambar 		= '<br><br><br><br><br><br><div align="center"><img src="../images/logo_laporan.png" alt="Bandung-logo" style="width:382px;height:320px"></div>';
		$pdf->writeHTMLCell(0, 0, '', '', $gambar, 0, 1, 0, true, '', true);
		$bawah	= '<br><br><br><br><h1 align="center" style="font-size: 200%;"> BANDUNG </h1>';
		$pdf->writeHTMLCell(0, 0, '', '', $bawah, 0, 1, 0, true, '', true);

		

		$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
		$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

		$pdf->SetHeaderData('', 0, 'Dinas Tata Ruang', 'Kota Bandung', array(0,64,255), array(0,64,128));
		$pdf->setFooterData(array(0,64,0), array(0,64,128));

		$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

		$pdf->SetAutoPageBreak(TRUE, 13);

		$pdf->SetFont('times', '', 12, '', true);

		$pdf->SetPrintHeader();
		$pdf->startPageGroup();
		$pdf->AddPage();
		$pdf->SetPrintFooter();
		$html = '';
		$permohonan_nomor 		= '<b> Distarcip/2015/IMB/01/18/'.$result->permohonan_nomor.'</b><br>';
		$username 	= 'Nama Pemohon 	: '.$result->username.'<br>';
		// $nama 		= 'Nama 	: '.$row['Nama'].'<br>';
		// $tanggal 	= 'Tanggal 	: '.$row['TanggalPengaduan'].'<br>';
		// $instansi 	= 'Instansi : '.$row['Instansi'].'<br>';
		// $telepon 	= 'Telepon 	: '.$row['Telepon'].'<br>';
		// $isi 		= 'Isi 		: <br>'.$row['IsiPengaduan'].'<br>';
		// $status 	= 'Status 	: '.$row['Status'];
		
		// $html = $judul.$lokasi.$nama.$tanggal.$instansi.$telepon.$isi.$status;
		$html = $permohonan_nomor.$username;		
		// Print text using writeHTMLCell()
		$pdf->writeHTMLCell(0, 0, '', '', $html, 1, 1, 0, true, '', true);
		$pdf->Output('Laporan.pdf', 'I');		

?>
