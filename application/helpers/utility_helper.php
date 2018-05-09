<?php   if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  	
	function indo_date($date) { 
		//contoh : 2014-01-15 menjadi Senin, 15 Januari 2014
		$newdate = new DateTime($date);
		$pcs = explode("-", $date);
		$y = $newdate->format('Y');
		$m = $newdate->format('n');
		$d = $newdate->format('j');
		$wk = $newdate->format('w');
		
		$getbulan = array ();
		$getbulan[1] = 'Januari';
		$getbulan[2] = 'Februari';
		$getbulan[3] = 'Maret';
		$getbulan[4] = 'April';
		$getbulan[5] = 'Mei';
		$getbulan[6] = 'Juni';
		$getbulan[7] = 'Juli';
		$getbulan[8] = 'Agustus';
		$getbulan[9] = 'September';
		$getbulan[10] = 'Oktober';
		$getbulan[11] = 'November';
		$getbulan[12] = 'Desember';

		$gethari = array ();
		$gethari[0] = 'Minggu';
		$gethari[1] = 'Senin';$gethari[2] = 'Selasa';$gethari[3] = 'Rabu';
		$gethari[4] = 'Kamis';$gethari[5] = 'Jumat';$gethari[6] = 'Sabtu';

		return $gethari[$wk]. ", ". $d ." ". $getbulan[$m] ." ". $y;
	}
	
	function tgl_ind_to_eng($tgl) {
		//contoh : 15-01-2014 menjadi 2014-01-15
		$xreturn_ = '';
		if (trim($tgl) != '' && $tgl != '00-00-0000') {
			$tgl_eng=substr($tgl,6,4)."-".substr($tgl,3,2)."-".substr($tgl,0,2);
			$xreturn_ = $tgl_eng;
		}
		return $xreturn_;
	}

	function tgl_eng_to_ind($tgl) {
		//contoh : 2014-01-15 menjadi 15-01-2014
		$xreturn_ = '';
		if (trim($tgl) != '' AND $tgl != '0000-00-00') { 
			$tgl_ind=substr($tgl,8,2)."-".substr($tgl,5,2)."-".substr($tgl,0,4);
			$xreturn_ = $tgl_ind;
		}
		return $xreturn_;
	}
	
	function tgl_ind_to_ind_no_strip($tgl) {
		//contoh : 15-01-2014 menjadi 15012014
		$xreturn_ = '';
		if (trim($tgl) != '' && $tgl != '00-00-0000') {
			$tgl_eng=substr($tgl,0,2).substr($tgl,3,2).substr($tgl,6,4);
			$xreturn_ = $tgl_eng;
		}
		return $xreturn_;
	}
	
	function tgl_ind_no_strip_to_ind($tgl) {
		//contoh : 15012014 menjadi 15-01-2014
		$xreturn_ = '';
		if (strlen($tgl) == 8) {
			$tgl_eng=substr($tgl,0,2).'-'.substr($tgl,2,2).'-'.substr($tgl,4,4);
			$xreturn_ = $tgl_eng;
		}
		return $xreturn_;
	}
	
	function tgl_ind_no_strip_to_eng($tgl) {
		//contoh : 15012014 menjadi 2014-01-15
		$xreturn_ = '';
		if (strlen($tgl) == 8) {
			$tgl_eng=substr($tgl,4,4).'-'.substr($tgl,2,2).'-'.substr($tgl,0,2);
			$xreturn_ = $tgl_eng;
		}
		return $xreturn_;
	}
	
	function tgl_eng_to_ind_no_strip($tgl) {
		//contoh : 2014-01-15 menjadi 15012014
		$xreturn_ = '';
		if (trim($tgl) != '' AND $tgl != '0000-00-00') { 
			$tgl_ind=substr($tgl,8,2).substr($tgl,5,2).substr($tgl,0,4);
			$xreturn_ = $tgl_ind;
		}
		return $xreturn_;
	}
	
	function tgl_ind_to_eng_no_strip($tgl) {
		//contoh : 15-01-2014 menjadi 20140115
		$xreturn_ = '';
		if (trim($tgl) != '' && $tgl != '00-00-0000') {
			$tgl_eng=substr($tgl,6,4).substr($tgl,3,2).substr($tgl,0,2);
			$xreturn_ = $tgl_eng;
		}
		return $xreturn_;
	}
	
	function tgl_eng_no_strip_to_ind($tgl) {
		//contoh : 20140115 menjadi 15-01-2014
		$xreturn_ = '';
		if (strlen($tgl) == 8) {
			$tgl_eng=substr($tgl,6,2).'-'.substr($tgl,4,2).'-'.substr($tgl,0,4);
			$xreturn_ = $tgl_eng;
		}
		return $xreturn_;
	}
	
	function tgl_eng_no_strip_to_eng($tgl) {
		//contoh : 20140115 menjadi 2014-01-15
		$xreturn_ = '';
		if (strlen($tgl) == 8) {
			$tgl_eng=substr($tgl,0,4).'-'.substr($tgl,4,2).'-'.substr($tgl,6,2);
			$xreturn_ = $tgl_eng;
		}
		return $xreturn_;
	}
	
	function tgl_eng_to_eng_no_strip($tgl) {
		//contoh : 2014-01-15 menjadi 20140115
		$xreturn_ = '';
		if (trim($tgl) != '' AND $tgl != '0000-00-00') { 
			$tgl_ind=substr($tgl,0,4).substr($tgl,5,2).substr($tgl,8,2);
			$xreturn_ = $tgl_ind;
		}
		return $xreturn_;
	}
	
	function format_angka($angka) {
		$hasil =  number_format($angka,0, ",", ".");
		return $hasil;
	}
	
	function format_date_ind($tgl){
		//contoh : 2014-01-15 menjadi 15 Januari 2014
		if (trim($tgl) != ''AND $tgl != '0000-00-00') {
			$d = substr($tgl,8,2);
			$m = substr($tgl,5,2);
			$y = substr($tgl,0,4);
			switch ($m) {
			case '01':
				$M = "Januari";
				break;
			case '02':
				$M = "Februari";
				break;
			case '03':
				$M = "Maret";
				break;
			case '04':
				$M = "April";
				break;
			case '05':
				$M = "Mei";
				break;
			case '06':
				$M = "Juni";
				break;
			case '07':
				$M = "Juli";
				break;
			case '08':
				$M = "Agustus";
				break;
			case '09':
				$M = "September";
				break;
			case '10':
				$M = "Oktober";
				break;
			case '11':
				$M = "November";
				break;
			case '12':
				$M = "Desember";
				break;
			}
			
			$tanggal = $d." ".$M." ".$y;
			return $tanggal ;
		}
	}
	
	function format_date_ind2($tgl){
		//contoh : 2014-01-15 menjadi 15 Jan 2014
		if (trim($tgl) != ''AND $tgl != '0000-00-00') {
			$d = substr($tgl,8,2);
			$m = substr($tgl,5,2);
			$y = substr($tgl,0,4);
			switch ($m) {
			case '01':
				$M = "Jan";
				break;
			case '02':
				$M = "Feb";
				break;
			case '03':
				$M = "Mar";
				break;
			case '04':
				$M = "Apr";
				break;
			case '05':
				$M = "Mei";
				break;
			case '06':
				$M = "Jun";
				break;
			case '07':
				$M = "Jul";
				break;
			case '08':
				$M = "Agst";
				break;
			case '09':
				$M = "Sept";
				break;
			case '10':
				$M = "Okt";
				break;
			case '11':
				$M = "Nov";
				break;
			case '12':
				$M = "Des";
				break;
			}
			
			$tanggal = $d." ".$M." ".$y;
			return $tanggal ;
		}
	}
	
	function nama_bulan_ind($m){
		//contoh : 1 menjadi januari
		if (trim($m) != '' AND $m != '0') {
			switch ($m) {
			case '1':
				$M = "Januari";
				break;
			case '2':
				$M = "Februari";
				break;
			case '3':
				$M = "Maret";
				break;
			case '4':
				$M = "April";
				break;
			case '5':
				$M = "Mei";
				break;
			case '6':
				$M = "Juni";
				break;
			case '7':
				$M = "Juli";
				break;
			case '8':
				$M = "Agustus";
				break;
			case '9':
				$M = "September";
				break;
			case '10':
				$M = "Oktober";
				break;
			case '11':
				$M = "November";
				break;
			case '12':
				$M = "Desember";
				break;
			default:
				$M = "";
			}
			return $M;
		}
	}
	
	function add_date_time($givendate,$day=0,$mth=0,$yr=0) {
		$cd = strtotime($givendate);
		$newdate = date('Y-m-d H:i:s', mktime(date('H',$cd),
		date('i',$cd), date('s',$cd), date('m',$cd)+$mth,
		date('d',$cd)+$day, date('Y',$cd)+$yr));
		return $newdate;
    }
	
	function add_date($givendate,$day=0,$mth=0,$yr=0) {
		$cd = strtotime($givendate);
		$newdate = date('Y-m-d', mktime(0,0,0, date('m',$cd)+$mth, date('d',$cd)+$day, date('Y',$cd)+$yr));
		return $newdate;
    }
	
	// menjumlahkan hari dalam tahun
	// digunakan pada sub modul daftar urut kepangkatan
	function date_diff_custom($d1, $d2){
		$d1 = (is_string($d1) ? strtotime($d1) : $d1);
		$d2 = (is_string($d2) ? strtotime($d2) : $d2);
		$diff_secs = abs($d1 - $d2);
		$base_year = min(date("Y", $d1), date("Y", $d2));
		$diff = mktime(0, 0, $diff_secs, 1, 1, $base_year);
		return array(
			"years" => date("Y", $diff) - $base_year,
			"months_total" => (date("Y", $diff) - $base_year) * 12 + date("n", $diff) - 1,
			"months" => date("n", $diff) - 1,
			"days_total" => floor($diff_secs / (3600 * 24)),
			"days" => date("j", $diff) - 1,
			"hours_total" => floor($diff_secs / 3600),
			"hours" => date("G", $diff),
			"minutes_total" => floor($diff_secs / 60),
			"minutes" => (int) date("i", $diff),
			"seconds_total" => $diff_secs,
			"seconds" => (int) date("s", $diff)
		);
	}
	
	function tanggal_detik($d1, $d2){
		$d1 = (is_string($d1) ? strtotime($d1) : $d1);
		$d2 = (is_string($d2) ? strtotime($d2) : $d2);
		$diff_secs = abs($d1 - $d2);
		return $diff_secs;
	}
	
	// untuk handle single or double quotes
	function quotes_cek($string)
	{
		$value = trim($string);

		if (get_magic_quotes_gpc()) {
			$value = stripslashes($value);
		}
		// Quote if not integer
		if (!is_numeric($value)) {
			$value = mysql_real_escape_string($value);
		}
		return $value;
	}
	
	function remove_spasi($str)
	{
		$str=trim($str);
		return  str_replace("%20"," ",$str); 
	}
	
	function valid_date($strdate)
	{
		$err = array();
		//Check the length of the entered Date value
		if((strlen($strdate)<10) OR (strlen($strdate)>10)){
			array_unshift($err,"Enter the date in 'dd-mm-yyyy' Format<br>");
		}
		else{
			//The entered value is checked for proper Date format
			if((substr_count($strdate,"-"))<>2){
				array_unshift($err,"Enter the date in 'dd-mm-yyyy' format<br>");
			} else{
				$pos = strpos($strdate,"-");
				$date = substr($strdate,0,($pos));
				$result = ereg("^[0-9]+$",$date,$trashed);
				if(!($result)){
					array_unshift($err,"Enter a Valid Date<br>");
				}
				else {
					if(($date<=0)OR($date>31)){
						array_unshift($err,"Enter a Valid Date<br>");
					}
				}
				
				// check month
				$month=substr($strdate,($pos+1),($pos));
				if(($month<=0) OR ($month>12)){
					array_unshift($err, "Enter a Valid Month<br>");
				}
				else{
					$result=ereg("^[0-9]+$",$month,$trashed);
					if(!($result)){
						array_unshift($err, "Enter a Valid Month<br>");
					}
				}
				
				// check year
				$year= substr ($strdate,($pos+4),strlen($strdate));
				$result=ereg("^[0-9]+$",$year,$trashed);
				if(!($result)){
					array_unshift($err, "Enter a Valid year<br>");
				}
				else{
					if(($year < 1900) OR ($year > 2200)){
						array_unshift($err, "Enter a year between 1900-2200<br>");
					}
				}
			}
		}
		
		if (sizeof($err) > 0){
			$hasil = array (
				'err' => $err,
				'valid'=> FALSE
			);
		} else {
			$hasil = array (
				'err' => '',
				'valid'=>TRUE
			);
		}
		 
		return $hasil;
	
	}	
	
	function kekata($x) {
		$x = abs($x);
		$angka = array("", "satu", "dua", "tiga", "empat", "lima",
		"enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
		$temp = "";
		if ($x <12) {
			$temp = " ". $angka[$x];
		} else if ($x <20) {
			$temp = kekata($x - 10). " belas";
		} else if ($x <100) {
			$temp = kekata($x/10)." puluh". kekata($x % 10);
		} else if ($x <200) {
			$temp = " seratus" . kekata($x - 100);
		} else if ($x <1000) {
			$temp = kekata($x/100) . " ratus" . kekata($x % 100);
		} else if ($x <2000) {
			$temp = " seribu" . kekata($x - 1000);
		} else if ($x <1000000) {
			$temp = kekata($x/1000) . " ribu" . kekata($x % 1000);
		} else if ($x <1000000000) {
			$temp = kekata($x/1000000) . " juta" . kekata($x % 1000000);
		} else if ($x <1000000000000) {
			$temp = kekata($x/1000000000) . " milyar" . kekata(fmod($x,1000000000));
		} else if ($x <1000000000000000) {
			$temp = kekata($x/1000000000000) . " trilyun" . kekata(fmod($x,1000000000000));
		}      
        return $temp;
	}
	
	function terbilang($x, $style=4) {
		if($x<0) {
			$hasil = "minus ". trim(kekata($x));
		} else {
			$hasil = trim(kekata($x));
		}      
		switch ($style) {
			case 1:
				$hasil = strtoupper($hasil);
				break;
			case 2:
				$hasil = strtolower($hasil);
				break;
			case 3:
				$hasil = ucwords($hasil);
				break;
			default:
				$hasil = ucfirst($hasil);
            break;
		}      
		return $hasil;
	}
	
	function selisih_hari($tgl1,$tgl2)
	{
		$pecah1 = explode("-", $tgl1);
		$date1 = $pecah1[2];
		$month1 = $pecah1[1];
		$year1 = $pecah1[0];
		
		$pecah2 = explode("-", $tgl2);
		$date2 = $pecah2[2];
		$month2 = $pecah2[1];
		$year2 =  $pecah2[0];
		
		$jd1 = GregorianToJD($month1, $date1, $year1);
		$jd2 = GregorianToJD($month2, $date2, $year2);
		
		$selisih = $jd2 - $jd1;
		return $selisih;
	}
	
	function kode_hari($date) 
	{
		$newdate = new DateTime($date);
		$wk = $newdate->format('w');

		return $wk;
	}
	
	function jumlah_libur($date1, $date2) 
	{
		$CI =& get_instance();
		$hari = selisih_hari($date1,$date2);
		$nilai = 0;
		for($i=0;$i<=$hari;$i++){
			$newdate = date('Y-m-d',strtotime('+'.$i.' day',strtotime($date1)));
			$kd_hari = kode_hari($newdate);
			$sql = "select * from tr_libur where tgl_libur = '".$newdate."'";
			$query = $CI->db->query($sql);
			if($kd_hari == '0' || $kd_hari == '6'){
				$nilai = ($nilai + 1);
			}else if($query->num_rows() > 0){
				$nilai = ($nilai + 1);
			}else{
			
			}
		}
		return $nilai;

	}
	
	function is_kerja($date)
	{
		$CI =& get_instance();
		$newdate = date('Y-m-d',strtotime('+1 day',strtotime($date)));
		$kd_hari = kode_hari($newdate);
		$sql = "select * from tr_libur where tgl_libur = '".$newdate."'";
		$query = $CI->db->query($sql);
		$date_kerja = "";
		if($kd_hari == '0' || $kd_hari == '6'){
			$date_kerja = is_kerja($newdate);
		}else if($query->num_rows() > 0){
			$date_kerja = is_kerja($newdate);
		}else{
			$date_kerja = $newdate;
		}
		return $date_kerja;
	}
	
	function is_libur($date) 
	{
		$CI =& get_instance();
		$kd_hari = kode_hari($date);
		$sql = "select * from tr_libur where tgl_libur = '".$date."'";
		$query = $CI->db->query($sql);
		if($kd_hari == '0' || $kd_hari == '6'){
			$nilai = 1;
		}else if($query->num_rows() > 0){
			$nilai = 1;
		}else{
			$nilai = 0;
		}
		return $nilai;
	}

	function selisih_jam($time1 = '', $time2 = '') {
		$buffer1 = explode(":", $time1);
		$buffer2 = explode(":", $time2);
		$t1 = ((3600 * (int)$buffer1[0]) + (60 * (int)$buffer1[1]) + (int)$buffer1[2]) ;
		$t2 = ((3600 * (int)$buffer2[0]) + (60 * (int)$buffer2[1]) + (int)$buffer2[2]) ;
		$s = $t1 - $t2;
		if($s < 60){
			return '00:00:'.(($s<=9)?'0'.$s:$s);
		}else if ($s >= 60 && $s < 3600){
			$m = $s%60;
			if($m==0){
				$m2 = $s/60;
				return '00:'.(($m2<=9)?'0'.$m2:$m2).':00';
			}else{
				$m2 = ($s - $m)/60;
				return '00:'.(($m2<=9)?'0'.$m2:$m2).':'.(($m<=9)?'0'.$m:$m);
			}
		}else{
			$j = $s%3600;
			if($j==0){
				return (($j<=9)?'0'.$j:$j).':00:00';
			}else{
				if($j >= 60){
					$j2 = ($s-$j) / 3600;
					$m = $j%60;
					if($m==0){
						$m2 = $j/60;
						return (($j2<=9)?'0'.$j2:$j2).':'.(($m2<=9)?'0'.$m2:$m2).':00';
					}else{
						$m2 = ($j - $m)/60;
						return (($j2<=9)?'0'.$j2:$j2).':'.(($m2<=9)?'0'.$m2:$m2).':'.(($m<=9)?'0'.$m:$m);
					}
				}else{
					$j2 = ($s-$j) / 3600;
					return (($j2<=9)?'0'.$j2:$j2).':00:'.(($j<=9)?'0'.$j:$j);
				}
			}
		}
	}
	
	function ambil_detik($time1 = '',$time2 = '') {
		$buffer1 = explode(":", $time1);
		$buffer2 = explode(":", $time2);
		$t1 = ((3600 * (int)$buffer1[0]) + (60 * (int)$buffer1[1]) + (int)$buffer1[2]) ;
		$t2 = ((3600 * (int)$buffer2[0]) + (60 * (int)$buffer2[1]) + (int)$buffer2[2]) ;
		$s = $t1 - $t2;
		return $s;
	}
	
	function ambil_jam($s = 0) {
		if($s < 60){
			return '00:00:'.(($s<=9)?'0'.$s:$s);
		}else if ($s >= 60 && $s < 3600){
			$m = $s%60;
			if($m==0){
				$m2 = $s/60;
				return '00:'.(($m2<=9)?'0'.$m2:$m2).':00';
			}else{
				$m2 = ($s - $m)/60;
				return '00:'.(($m2<=9)?'0'.$m2:$m2).':'.(($m<=9)?'0'.$m:$m);
			}
		}else{
			$j = $s%3600;
			if($j==0){
				return (($j<=9)?'0'.$j:$j).':00:00';
			}else{
				if($j >= 60){
					$j2 = ($s-$j) / 3600;
					$m = $j%60;
					if($m==0){
						$m2 = $j/60;
						return (($j2<=9)?'0'.$j2:$j2).':'.(($m2<=9)?'0'.$m2:$m2).':00';
					}else{
						$m2 = ($j - $m)/60;
						return (($j2<=9)?'0'.$j2:$j2).':'.(($m2<=9)?'0'.$m2:$m2).':'.(($m<=9)?'0'.$m:$m);
					}
				}else{
					$j2 = ($s-$j) / 3600;
					return (($j2<=9)?'0'.$j2:$j2).':00:'.(($j<=9)?'0'.$j:$j);
				}
			}
		}
	}
	
	function hitung_umur($tgl2) { //(tanggal sekarang, tanggal sebelumnya)
		$thn1=date("Y");
		$bln1=date('m');
		$hr1=date('d');
		$thn2=substr($tgl2,0,4);
		$bln2=substr($tgl2,5,2);
		$hr2=substr($tgl2,8,2);
		$tahun=$thn1-$thn2;
		if ($bln1<$bln2){
			$tahun=$tahun-1;
			$bulan=((int)$bln1+12)-(int)$bln2;
			if ($hr1 < $hr2){
				$bulan=$bulan-1;
				$shr = ((int)$hr2 - (int)$hr1);
				if($shr==30){ $shr = 29;}
				$hari = 30 - $shr;
			}else{
				$hari = (int)$hr1 - (int)$hr2; 
			}
		}else if($bln1==$bln2){
			$bulan=(int)$bln1-(int)$bln2;
			if ($hr1 < $hr2){
				$tahun=$tahun-1;
				$bulan=11;
				$shr = ((int)$hr2 - (int)$hr1);
				if($hr2==31)$hari = 31 - $shr;
				else $hari = 30 - $shr;
			}else{
				$hari = (int)$hr1 - (int)$hr2; 
			}
		}else{
			$bulan=$bln1-$bln2;
			if ($hr1 < $hr2){
				$bulan=$bulan-1;
				$shr = ((int)$hr2 - (int)$hr1);
				if($hr2==31)$hari = 31 - $shr;
				else $hari = 30 - $shr;
			}else{
				$hari = (int)$hr1 - (int)$hr2; 
			}
		}
		
		return $tahun.' Thn<br>'.(($bulan==0)?'':$bulan.' Bln<br>').(($hari==0)?'':$hari.' Hri');
	}
	
	function hitung_umur2($tgl1,$tgl2) { //(tanggal sekarang, tanggal sebelumnya)
		$thn1=substr($tgl1,0,4);
		$bln1=substr($tgl1,5,2);
		$hr1=substr($tgl1,8,2);
		$thn2=substr($tgl2,0,4);
		$bln2=substr($tgl2,5,2);
		$hr2=substr($tgl2,8,2);
		$tahun=$thn1-$thn2;
		if ($bln1<$bln2){
			$tahun=$tahun-1;
			$bulan=((int)$bln1+12)-(int)$bln2;
			if ($hr1 < $hr2){
				$bulan=$bulan-1;
				$shr = ((int)$hr2 - (int)$hr1);
				if($shr==30){ $shr = 29;}
				$hari = 30 - $shr;
			}else{
				$hari = (int)$hr1 - (int)$hr2; 
			}
		}else if($bln1==$bln2){
			$bulan=(int)$bln1-(int)$bln2;
			if ($hr1 < $hr2){
				$tahun=$tahun-1;
				$bulan=11;
				$shr = ((int)$hr2 - (int)$hr1);
				if($hr2==31)$hari = 31 - $shr;
				else $hari = 30 - $shr;
			}else{
				$hari = (int)$hr1 - (int)$hr2; 
			}
		}else{
			$bulan=$bln1-$bln2;
			if ($hr1 < $hr2){
				$bulan=$bulan-1;
				$shr = ((int)$hr2 - (int)$hr1);
				if($hr2==31)$hari = 31 - $shr;
				else $hari = 30 - $shr;
			}else{
				$hari = (int)$hr1 - (int)$hr2; 
			}
		}
		
		return $tahun.' Thn<br>'.(($bulan==0)?'':$bulan.' Bln<br>').(($hari==0)?'':$hari.' Hri');
	}
	
	function tgl_akhir($bulan,$tahun)
	{
		if($bulan=='1' || $bulan=='3' || $bulan=='5' || $bulan=='7' || $bulan=='8' || $bulan=='10' || $bulan=='12')
		{
			$tgl = '31';
		}else if ($bulan=='2'){
			if($tahun%4==0){
				$tgl = '29';
			}else{
				$tgl = '28';
			}
		}else{
			$tgl='30';
		}
		return $tgl;
	}
	
	function cek_kode($kata,$abjad)
	{
		$pos = strpos($kata,$abjad);
		if($pos === false){
			$hasil = '';
		}else{
			$hasil = $abjad;
		}
		
		return $hasil;
	}

	function getValue($select,$from,$where)
	{
		$CI =& get_instance();
		$sql = "select ".$select." from ".$from." where ".$where;
		//var_dump($sql);die;
		$query = $CI->db->query($sql);
		$hasil ='';
		if($query){
			if($query->num_rows() > 0){
				$field = $query->row_array();
				$hasil = $field[$select];
			}
		}
		return $hasil;
	}
	
	function aksiPermis($kata,$abjad)
	{
		$pos = strpos($kata,$abjad);
		if($pos === false){
			$hasil = '';
		}else{
			$hasil = $abjad;
		}
		
		return $hasil;
	}
	
	function make_menu(){
		$CI =& get_instance();
		$CI->load->model('login/m_login','mlogin');
		$username='';
		$menunav = '<ul class="nav nav-list" style="top:0px;">';
		$sessData = $CI->mlogin->getSessionData();
		if ($sessData!==false){
			$username= $sessData['username'];
		}
		$menus = $CI->session->userdata('ses_menu'); 
        $sql = "select a.* from sys_menu a
				join (
						select e.permissionname
						from sys_users a 
						join sys_userroles b on a.userid = b.userid
						join sys_roles c on b.roleid = c.roleid
						join sys_rolepermissions d on c.roleid = d.roleid
						join sys_permissions e on e.permissionid = d.permissionid
						where a.username = '".$username."' and e.category = 'menu' 
					) x on a.menuname = x.permissionname
				where a.parentid = 0 and visible = 1 and ismenu = 1
				order by a.viewindex ";
		//print_r($sql);
		$query = $CI->db->query($sql);
		$icon=array('fa fa-home','fa fa-desktop','fa fa-table','fa fa-cogs','fa fa-envelope','fa fa-dashboard','fa fa-bar-chart-o');
		$i=0;
		foreach($query->result() as $row){
			$ss_mn = explode(',',$menus);
			$class[$row->menuid]='';
			for($m=0;$m<count($ss_mn);$m++){
				if($ss_mn[$m]==$row->menuid){
					$class[$row->menuid] = (($m==(count($ss_mn)-1))?'active':'open');
				}
			}
	
			if(toogle($row->menuid,$username) > 0){
				$menunav .= "<li class='hsub ".$class[$row->menuid]."'>";
				$menunav .= '<a href="'.site_url('menu/'.$row->menuname).'" class="dropdown-toggle" data-original-title="'.$row->description.'" title="" data-placement="top" data-rel="tooltip"><i class="menu-icon '.$row->iconname.'"></i><span class="menu-text">'.$row->caption.'</span><b class="arrow fa fa-angle-down"></b></a>';
			}else{
				$menunav .= "<li class='hsub ".$class[$row->menuid]."'>";
				$menunav .= '<a href="'.site_url('menu/'.$row->menuname).'" data-original-title="'.$row->description.'" title="" data-placement="top" data-rel="tooltip"><i class="menu-icon '.$row->iconname.'"></i><span class="menu-text">'.$row->caption.'</span></a>';
			}
			$menunav .=	formatTree($row->menuid,$username);
			$menunav .= "</li>";
			$i++;
		}
		$menunav .= "</ul>";
        return $menunav;
    }
	
	function toogle($id_parent, $username){
		$CI =& get_instance();
		$sql = "select a.* from sys_menu a
				join (
						select e.permissionname
						from sys_users a 
						join sys_userroles b on a.userid = b.userid
						join sys_roles c on b.roleid = c.roleid
						join sys_rolepermissions d on c.roleid = d.roleid
						join sys_permissions e on e.permissionid = d.permissionid
						where a.username = '".$username."' and e.category = 'menu' 
					) x on a.menuname = x.permissionname
				where a.parentid = '".$id_parent."' and visible = 1 and ismenu = 1
				order by a.viewindex ";
		$query = $CI->db->query($sql);
		return $query->num_rows();
    }
	
	function formatTree($id_parent,$username){
		$CI =& get_instance();
		$menus = $CI->session->userdata('ses_menu'); 
		
        $sql = "select a.* from sys_menu a
				join (
						select e.permissionname
						from sys_users a 
						join sys_userroles b on a.userid = b.userid
						join sys_roles c on b.roleid = c.roleid
						join sys_rolepermissions d on c.roleid = d.roleid
						join sys_permissions e on e.permissionid = d.permissionid
						where a.username = '".$username."' and e.category = 'menu' 
					) x on a.menuname = x.permissionname
				where a.parentid = '".$id_parent."' and visible = 1 and ismenu = 1
				order by a.viewindex ";
		$query = $CI->db->query($sql);
		$ss_mn1 = explode(',',$menus);
		$class[$id_parent]= "class= 'submenu'";
		for($n=0;$n<count($ss_mn1);$n++){
			if($ss_mn1[$n]==$id_parent){
				$class[$id_parent] = "class= 'submenu nav-show'  style='display: block;'";
			}
		}
		$menunav = "<ul ".$class[$id_parent].">";
		foreach($query->result() as $row){
			$ss_mn = explode(',',$menus);
			$class[$row->menuid]='';
			for($m=0;$m<count($ss_mn);$m++){
				if($ss_mn[$m]==$row->menuid){
					$class[$row->menuid] = (($m==(count($ss_mn)-1))?'active':'open');
				}
			}
			if(toogle($row->menuid,$username) > 0){
				$menunav .= "<li class='hsub ".$class[$row->menuid]."'>";
				$menunav .= '<a href="'.site_url('menu/'.$row->menuname).'" class="dropdown-toggle" data-original-title="'.$row->description.'" title="" data-placement="top" data-rel="tooltip"><i class="menu-icon fa fa-angle-double-right"></i>'.$row->caption.'<b class="arrow fa fa-angle-down"></b></a>';
			}else{
				$menunav .= "<li class='hsub ".$class[$row->menuid]."'>";
				$menunav .= '<a href="'.site_url('menu/'.$row->menuname).'" data-original-title="'.$row->description.'" title="" data-placement="top" data-rel="tooltip"><i class="menu-icon"></i>'.$row->caption.'</a>';
			}
			$menunav.= formatTree($row->menuid,$username);
			$menunav.= "</li>";
		}
        $menunav.= "</ul>";
        return $menunav;
    }
	
	function message_sms($text,$noPengirim)
	{
		$CI =& get_instance();
		$CI->db_sms = $CI->load->database('smsd', TRUE);
		if($text!='' && $text!=null){
			$panjang = strlen($noPengirim);
			if($panjang >10){
				/* $host='https://smsblast.id/api/sendsingle.json';
				$username='pemkotkdrweb';
				$pass='pemkotkdrweb123';
				$text = str_replace(' ','%20',$text);
				$text = str_replace('#','%23',$text);
				$text = str_replace('&','%26',$text);
				$noPengirim = str_replace('+62','0',$noPengirim);
				$url = $host."?user=".$username."&password=".$pass."&senderid=Pemkot%20Kdr&message=".$text."&msisdn=".$noPengirim."&noaccent=1";
				// $masking = '';
				$masking = file_get_contents($url); */
				$masking = '';
				
				$sql = "INSERT INTO outbox(DestinationNumber, TextDecoded, creatorID,SenderID,statusMasking) 
				VALUES('$noPengirim','$text','itegno','itegno','$masking')";
				$CI->db_sms->query($sql);
			}
			
		}
	}
	
	function send_mail($kepada,$subject,$text,$attach){
		$CI =& get_instance();
		$CI->load->library('email');
		$CI->email->from('Bandung E-District <edistrict@bandung.go.id>');
		$CI->email->to($kepada);
		$CI->email->subject($subject);
		$CI->email->message($text);
		if($attach != ''){
			$CI->email->attach($attach);
		}
		$result = $CI->email->send();
		return $result;
	}
	
	function getKode($select,$from,$where)
	{
		$CI =& get_instance();
		$sql = "select ".$select." as kode from ".$from." ".$where;
		$query = $CI->db->query($sql);
		if($query->num_rows() > 0){
			$field = $query->row();
			$inc = (int)substr($field->kode,-4,4);
			$inc = $inc + 1;
			$hasil = sprintf("%04s", $inc);
		}else{
			$hasil='0001';
		}
		
		return $hasil;
	}
	
	function getIdTabel($select,$from)
	{
		$CI =& get_instance();
		$sql = "select max(".$select.") as kode from ".$from." ".$where;
		$query = $CI->db->query($sql);
		$field = $query->row();
		$inc = $field->kode + 1;
		return $inc;
	}
	
	function getKode6($select,$from,$where)
	{
		$CI =& get_instance();
		$sql = "select ".$select." as kode from ".$from." ".$where;
		$query = $CI->db->query($sql);
		if($query->num_rows() > 0){
			$field = $query->row();
			$inc = (int)substr($field->kode,-6,6);
			$inc = $inc + 1;
			$hasil = sprintf("%06s", $inc);
		}else{
			$hasil='000001';
		}
		
		return $hasil;
	}
	
	function getKode8($select,$from,$where)
	{
		$CI =& get_instance();
		$sql = "select ".$select." as kode from ".$from." ".$where;
		$query = $CI->db->query($sql);
		if($query->num_rows() > 0){
			$field = $query->row();
			$inc = (int)substr($field->kode,-8,8);
			$inc = $inc + 1;
			$hasil = sprintf("%08s", $inc);
		}else{
			$hasil='00000001';
		}
		
		return $hasil;
	}

	function RecursiveMenu($menuid){
		$CI =& get_instance();
		$CI->load->model('login/m_login','mlogin');
		$username='';
		$sessData = $CI->mlogin->getSessionData();
		if ($sessData!==false){
			$username= $sessData['username'];
		}
        $sql = "select a.* from sys_menu a
				join (
						select e.permissionname
						from sys_users a 
						join sys_userroles b on a.userid = b.userid
						join sys_roles c on b.roleid = c.roleid
						join sys_rolepermissions d on c.roleid = d.roleid
						join sys_permissions e on e.permissionid = d.permissionid
						where a.username = '".$username."' and e.category = 'menu' 
					) x on a.menuname = x.permissionname
				where a.menuid='".$menuid."' and visible = 1 and ismenu = 1
				order by a.viewindex ";
		$query = $CI->db->query($sql);
		foreach($query->result() as $row){
			if($row->parentid != '0'){
				$menunya = $menuid;
				$menunya = RecTreeMenu($row->parentid,$menunya);
			}else{
				$menunya = $menuid;
			}
		}
        
        $cmenu = explode(',',$menunya);
		$jmn =  count($cmenu);
		$id_mn = '';
		for($jn=($jmn-1);$jn>=0;$jn--){
			$id_mn .= $cmenu[$jn].(($jn!=0)?',':'');
		}
		return $id_mn;
    }
	
	function RecTreeMenu($menuid,$menunya){
		$CI =& get_instance();
		$CI->load->model('login/m_login','mlogin');
		$username='';
		$sessData = $CI->mlogin->getSessionData();
		if ($sessData!==false){
			$username= $sessData['username'];
		}
        $sql = "select a.* from sys_menu a
				join (
						select e.permissionname
						from sys_users a 
						join sys_userroles b on a.userid = b.userid
						join sys_roles c on b.roleid = c.roleid
						join sys_rolepermissions d on c.roleid = d.roleid
						join sys_permissions e on e.permissionid = d.permissionid
						where a.username = '".$username."' and e.category = 'menu' 
					) x on a.menuname = x.permissionname
				where a.menuid='".$menuid."' and visible = 1 and ismenu = 1
				order by a.viewindex ";
		$query = $CI->db->query($sql);
		foreach($query->result() as $row){
			if($row->parentid != '0'){
				$menunya = $menunya.",".$menuid;
				$menunya = RecTreeMenu($row->parentid,$menunya);
			}else{
				$menunya = $menunya.",".$menuid;
			}
		}
        
        return $menunya;
    }

    function tgl_garing_to_strip($tgl)
	{
		return str_replace('/','-',$tgl);
	}
	
	function tgl_strip_to_garing($tgl)
	{
		return str_replace('-','/',$tgl);
	}
	
	function formatAngka($angka){
		$rupiah=number_format($angka,0,'.','.'); 
		return $rupiah;
	}
	
	function getJam($lamanya){
		$jam = ambil_jam($lamanya);
		//var_dump($jam);
		$cjam = explode(':',$jam);
		if(((int)$cjam[0]) < 24){
			return $jam;
		}else{
			$tjam = (((int)$cjam[0])%24);
			if($tjam==0){
				$hari = (((int)$cjam[0])/24);
				return $hari.' hari 00:'.$cjam[1].':'.$cjam[2];
			}else{
				$hari = ((((int)$cjam[0]) - $tjam) / 24);
				return $hari.' hari '.(($tjam<=9)?'0'.$tjam:$tjam).':'.$cjam[1].':'.$cjam[2];
			}
		}
	}
	
?>