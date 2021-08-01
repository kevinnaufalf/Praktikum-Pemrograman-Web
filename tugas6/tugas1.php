<!DOCTYPE html>
<html>
<head>
	<title> 19650109 Kevin Naufal F </title>
</head>
<body>
	<?php
	echo("___ No 1 Soal Array___<br><br>");
	$mahasiswa = Array(
			'1' => Array(
				'Nama' => 'FAKHAR MUHAMMAD HIDAYAT',
				'NRP' => '19650106',
				'Rambut' => 'Hitam',
				'Jenis Rambut' => 'Lurus',
				'BB' => '50',
				'TB' => '160',
				'IPK' => '3.20',
				'Kelas' => 'D4-A',
				'Dosen Wali' => 'IRWAN BUDI SANTOSO,S.Si., M.Kom',
				'Nilai Mata Kuliah pemrograman' => 'A',
				'HIMIT' => 'Aktif',
				'Status' => 'Aktif'),
			'2' => Array(
				'Nama' => 'Muchammad Rizal Ammar',
				'NRP' => '19650107',
				'Rambut' => 'Coklat',
				'Jenis Rambut' => 'Keriting',
				'BB' => '60',
				'TB' => '177',
				'IPK' => '3.60',
				'Kelas' => 'D4-B',
				'Dosen Wali' => 'Desy Intan Permatasari',
				'Nilai Mata Kuliah pemrograman' => 'A',
				'HIMIT' => 'Aktif',
				'Status' => 'Aktif'),
			'3' => Array(
				'Nama' => 'FARHAN RAFIF AZZUFAR',
				'NRP' => '19650108',
				'Rambut' => 'Hitam',
				'Jenis Rambut' => 'Lurus',
				'BB' => '50',
				'TB' => '160',
				'IPK' => '3.10',
				'Kelas' => 'D4-A',
				'Dosen Wali' => 'Desy Intan Permatasari',
				'Nilai Mata Kuliah pemrograman' => 'B+',
				'HIMIT' => 'Aktif',
				'Status' => 'Aktif'),
			'4' => Array(
				'Nama' => 'KEVIN NAUFAL FAHREZI',
				'NRP' => '19650109',
				'Rambut' => 'Hitam',
				'Jenis Rambut' => 'Lurus',
				'BB' => '49',
				'TB' => '150',
				'IPK' => '3.70',
				'Kelas' => 'D4-B',
				'Dosen Wali' => 'Desy Intan Permatasari',
				'Nilai Mata Kuliah pemrograman' => 'B',
				'HIMIT' => 'Tidak Aktif',
				'Status' => 'Cuti'),
			'5' => Array(
				'Nama' => 'REGA HARRIS DEA SAPUTRA',
				'NRP' => '19650110',
				'Rambut' => 'Coklat',
				'Jenis Rambut' => 'Keriting',
				'BB' => '55',
				'TB' => '177',
				'IPK' => '3.50',
				'Kelas' => 'D4-A',
				'Dosen Wali' => 'Desy Intan Permatasari',
				'Nilai Mata Kuliah pemrograman' => 'A',
				'HIMIT' => 'Aktif',
				'Status' => 'Aktif'));
		$arr = count($mahasiswa);
		echo "NRP 1 – 5 if-else : ";
		echo "<br><br>";
		for ($i=1; $i <= $arr; $i++) { 
			if ($mahasiswa[$i]['IPK'] > 3.0 &
				$mahasiswa[$i]['IPK'] < 3.25 &&
				$mahasiswa[$i]['Rambut'] == 'Hitam' &&
				$mahasiswa[$i]['Jenis Rambut'] == 'Lurus'&&
				$mahasiswa[$i]['BB'] == 50 && 
				$mahasiswa[$i]['TB'] == 160 &&
				$mahasiswa[$i]['Status'] == 'Aktif') {
				echo ($mahasiswa[$i]['Nama']." ");
				echo($mahasiswa[$i]['NRP']. "<br>");
			}
		}	
		echo "<br>NRP 6-10 switch-case : ";
		echo "<br><br>";
		for ($i=1; $i <= $arr; $i++) {
			switch ($arr) {
				case ($mahasiswa[$i]['IPK'] > 3.0 &
				    $mahasiswa[$i]['IPK'] < 3.25 &&
					$mahasiswa[$i]['Rambut'] == 'Hitam' &&
					$mahasiswa[$i]['Jenis Rambut'] == 'Lurus'&&
					$mahasiswa[$i]['BB'] == 50 &&
					$mahasiswa[$i]['TB'] == 160 &&
					$mahasiswa[$i]['Status'] == 'Aktif'):
						echo ($mahasiswa[$i]['Nama']." ");
						echo($mahasiswa[$i]['NRP']. "<br>");
					break;	
				default:
					break;
			}
		}
		echo "<br>NRP 11-15 do-while : ";
		echo "<br><br>";
		$j = 1;
		do {
			if ($mahasiswa[$j]['IPK'] > 3.0 &
				$mahasiswa[$j]['IPK'] < 3.25 &&
				$mahasiswa[$j]['Rambut'] == 'Hitam' &&
				$mahasiswa[$j]['Jenis Rambut'] == 'Lurus'&&
				$mahasiswa[$j]['BB'] == 50 && 
				$mahasiswa[$j]['TB'] == 160 &&
				$mahasiswa[$j]['Status'] == 'Aktif'
			) {
				echo ($mahasiswa[$j]['Nama']." ");
				echo($mahasiswa[$j]['NRP']. "<br>");
			} 
			$j++;
		} while ($j <= $arr) ;
		$arr = count($mahasiswa);
		echo "<br>NRP 16-20 for-loop : ";
		echo "<br><br>";
		for ($i=1; $i <= $arr; $i++) { 
			if ($mahasiswa[$i]['IPK'] > 3.0 &
				$mahasiswa[$i]['IPK'] < 3.25 &&
				$mahasiswa[$i]['Rambut'] == 'Hitam' &&
				$mahasiswa[$i]['Jenis Rambut'] == 'Lurus'&&
				$mahasiswa[$i]['BB'] == 50 && 
				$mahasiswa[$i]['TB'] == 160 &&
				$mahasiswa[$i]['Status'] == 'Aktif') {
				echo ($mahasiswa[$i]['Nama']." ");
				echo($mahasiswa[$i]['NRP']. "<br>");
			}
		}
		echo "<br>NRP 21-30 while : ";
		echo "<br><br>";
		$i = 1;
		while ($i <= $arr) { 
			if ($mahasiswa[$i]['IPK'] > 3.0 &
				$mahasiswa[$i]['IPK'] < 3.25 &&
				$mahasiswa[$i]['Rambut'] == 'Hitam' &&
				$mahasiswa[$i]['Jenis Rambut'] == 'Lurus'&&
				$mahasiswa[$i]['BB'] == 50 && 
				$mahasiswa[$i]['TB'] == 160 &&
				$mahasiswa[$i]['Status'] == 'Aktif') {
				echo ($mahasiswa[$i]['Nama']." ");
				echo($mahasiswa[$i]['NRP']. "<br>");
			}
			$i++;
		}
		echo("<br>___ No 2 Soal Sorting___<br><br>");
		echo("I. Nama Sort Ascending :<br><br>");
		usort($mahasiswa, Perbandingan('Nama'));
		for ($i=0; $i < $arr; $i++) { 			
			echo ($mahasiswa[$i]['Nama']." ");
			echo($mahasiswa[$i]['NRP']. "<br>");
		}
		echo("<br>II. NRP Sort Descending :<br><br>");
		usort($mahasiswa, Perbandingan(['NRP', SORT_DESC]));
		for ($i=0; $i < $arr; $i++) { 			
			echo ($mahasiswa[$i]['Nama']." ");
			echo($mahasiswa[$i]['NRP']. "<br>");
		}
		function Perbandingan() {
			$criteria = func_get_args();
			foreach ($criteria as $index => $criterion) {
				$criteria[$index] = is_array($criterion)
					? array_pad($criterion, 3, null)
					: array($criterion, SORT_ASC, null);
				}
			return function($first, $second) use (&$criteria) {
				foreach ($criteria as $criterion) {
					list($column, $sortOrder, $projection) = $criterion;
					$sortOrder = $sortOrder === SORT_DESC ? -1 : 1;
					if ($projection) {
						$lhs = call_user_func($projection, $first[$column]); 
						$rhs = call_user_func($projection, $second[$column]);
					}
					else {
						$lhs = $first[$column];
						$rhs = $second[$column];
					}
					if ($lhs < $rhs) {
						return -1 * $sortOrder;
					}
					else if ($lhs > $rhs) {
						return 1 * $sortOrder;
					}
				}
				return 0;
			};
		}
		echo("<br>___No 3 Soal Function___<br><br>");
		function noTiga(int $nrp, int $arr, Array $mahasiswa){
			for ($i=1; $i < $arr; $i++) { 
				if ($mahasiswa[$i]['NRP'] = $nrp &&
					($mahasiswa[$i]['Kelas'] == 'D4-A'|| $mahasiswa[$i]['Kelas'] == 'D4-B') &&
					$mahasiswa[$i]['Dosen Wali'] == 'Desy Intan Permatasari'&&
					$mahasiswa[$i]['Nilai Mata Kuliah pemrograman'] == 'A'&&
					$mahasiswa[$i]['HIMIT'] == 'Aktif'					
				) {
					echo ($mahasiswa[$i]['Nama']." adalah mahasiswa kelas ".$mahasiswa[$i]['Kelas']." yang aktif di HIMIT <br>");
				}
			};
		}
		noTiga(19650104, $arr, $mahasiswa);
?>
</body>
</html>