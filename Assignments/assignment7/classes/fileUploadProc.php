<?php
    require_once 'Pdo_methods.php';
    class fileUploadProc {
        public function upload(){
            if($_FILES["file"]["error"] == 4){
                return '<p>You must upload a file.</p>';
            } else if($_FILES["file"]["type"] != "application/pdf"){
                return '<p>You must insert a PDF</p>';
            }else if($_FILES["file"]["size"] > 100000){
                return '<p>File too big</p>';
            }
            else{
                $pdo = new PdoMethods();
                $sql = "INSERT INTO pdfTable (file_name, file_path) VALUES (:name, :link)";
                $name = $_POST['fileName'];

                $bindings = [
                    [':name', $name,'str'],
                    [':link', 'PDF/'.$name.'.pdf','str']
                ];

                $result = $pdo->otherBinded($sql, $bindings);

                if($result === 'error'){
                    return '<p>There was an error</p>';
                }else{
                    if(move_uploaded_file($_FILES["file"]["tmp_name"], "PDF/".$name.".pdf")){
                        return '<p>File has been added</p>';
                    }else{
                        return '<p>There was a problem uploading the file.</p>';
                    }
                }
            }

        }
    }
?>