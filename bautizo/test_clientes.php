<?php
// --------------------------------------------------------------------------------
	require_once '../vendor/autoload.php';
	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

	require_once 'bd.php';

// --------------------------------------------------------------------------------

	// Función para obtener clientes repetidos en la base de datos y exportar a Excel
	function get_repeated_customers($mysqli)
	{
	    // Consulta para clientes repetidos y sin RFC
	    $sql = "
	        SELECT rfc, COUNT(*) AS veces, code, name_company_name, paternal, maternal
	        FROM book_customers
	        GROUP BY rfc, code, name_company_name, paternal, maternal
	        HAVING code IS NOT NULL AND code <> '' AND COUNT(*) > 1

	        ORDER BY rfc;
	    ";

	    $result = $mysqli->query($sql);

	    // Crear hoja de cálculo
	    $spreadsheet = new Spreadsheet();
	    $sheet = $spreadsheet->getActiveSheet();

	    // Escribir encabezados
	    $headers = ['RFC', 'Veces', 'Código', 'Nombre', 'Paterno', 'Materno'];
	    $sheet->fromArray($headers, NULL, 'A1');

	    // Escribir datos
	    $row = 2;
	    while ($customer = $result->fetch_assoc()) {
	        $sheet->setCellValue('A'.$row, $customer['rfc']);
	        $sheet->setCellValue('B'.$row, $customer['veces']);
	        $sheet->setCellValue('C'.$row, $customer['code']);
	        $sheet->setCellValue('D'.$row, $customer['name_company_name']);
	        $sheet->setCellValue('E'.$row, $customer['paternal']);
	        $sheet->setCellValue('F'.$row, $customer['maternal']);
	        $row++;
	    }

	    // Guardar archivo
	    $filePath = __DIR__ . '/repeated_customers.xlsx';
	    $writer = new Xlsx($spreadsheet);
	    $writer->save($filePath);

	    return $filePath;
	}

	// Ejecutar función y mostrar resultado
	$file = get_repeated_customers($connect);
	echo "Archivo generado: " . $file;
