<?php
    require_once 'Pdo_methods.php';
    class listFilesProc {
        public function getPDF(){
            $pdo = new PdoMethods();
            $sql = "SELECT * FROM pdfTable";

            $records = $pdo->selectNotBinded($sql);

            if($records == 'error'){
                return '<p>Error occured</p>';
            }
            else {
            if(count($records) != 0){
                return $this->makeList($records);	
            }
            else {
                return '<p>No PDFs yet!</p>';
            }
        }
        }

        private function makeList($records){
            $output = "<ol>";
            foreach ($records as $row){
                $output .= "<li><a target='_blank' href={$row['file_path']}>{$row['file_name']}</a></li>";
            }
            
            $output .= "</ol>";
            return $output;
        }
    }
?>