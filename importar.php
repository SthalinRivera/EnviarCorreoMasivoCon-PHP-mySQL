<?php
include('config.php');
require 'vendor/autoload.php';
class MyReadFilter implements \PhpOffice\PhpSpreadsheet\Reader\IReadFilter {

    public function readCell($columnAddress, $row, $worksheetName = '') {
        // Read title row and rows 20 - 30
        if ($row >1) {
            return true;
        }
        return false;
    }
}

$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();

$inputFileName = $_FILES['excel']['tmp_name'];

/**  Identify the type of $inputFileName  **/
$inputFileType = \PhpOffice\PhpSpreadsheet\IOFactory::identify($inputFileName);
/**  Create a new Reader of the type that has been identified  **/
$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);
/**  Load $inputFileName to a Spreadsheet Object  **/
$spreadsheet = $reader->load($inputFileName);
$reader ->setReadFilter(new MyReadFilter());
$spreadsheet=$reader->load($inputFileName);
$cantidad=$spreadsheet->getActiveSheet()->toArray();

        echo "<table class='table' id='tabla_detalle'>
        <thead>
          <tr>
            <th scope='col'>#</th>
            <th scope='col'>Nombres</th>
            <th scope='col'>Correo</th>
            <th scope='col'>Estado</th>
          </tr>
        </thead>
        <tbody id='tbody_tabla_detalle'>";
            foreach ($cantidad as $row) {
                if ($row[0]!='') {  
                  $query="INSERT INTO `clients` (`id`, `cliente`, `correo`, `notificacion`) VALUES
                  ('', '$row[1]', '$row[2]', 1)";
                  $resultEmail = mysqli_query($con, $query);
                    echo  "  <tr>
                        <th scope='row'>$row[0]</th>
                        <th scope='row'>$row[1]</th>
                        <th scope='row'>$row[2]</th>
                        <th scope='row'>$row[3]</th>";
           }
}
          echo "</tr>
        </tbody>
      </table>";
 
?>