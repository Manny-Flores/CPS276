<?php
    //$_POST['datetime'] is the date
    //$_POST['note'] is the note
    require_once 'Pdo_methods.php';
    class noteInsert {
        public function insert(){
            if(isset($_POST['datetime']) && isset($_POST['note'])){
                $pdo = new PdoMethods();
                $sql = "INSERT INTO dateTable (time_stamp, note) VALUES (:stamp, :reminder)";
                $timestamp = strtotime($_POST['datetime']);
                if($timestamp != false){
                    $bindings = [
                        [':stamp', $timestamp,'int'],
                        [':reminder', $_POST['note'], 'str']
                    ];
                    $result = $pdo->otherBinded($sql, $bindings);

                    if($result == "error"){
                        return "<p>There was an error.</p>";
                    }else{
                        return "<p>Note added!</p>";
                    }
                }else{
                    return '<p>Invalid Time.</p>';
                }
            }else{
                return '<p>You must select a date and write a note.</p>';
            }
        }

        public function returnNote(){
            if(isset($_POST['start']) && isset($_POST['end'])){
                $pdo = new PdoMethods();
                $sql = "SELECT time_stamp, note FROM dateTable WHERE time_stamp BETWEEN :begDate AND :endDate ORDER BY time_stamp";
                $startStamp = strtotime($_POST['start']);
                $endStamp = strtotime($_POST['end']);

                if($startStamp != false && $endStamp != false){
                    $bindings = [
                        [':begDate', $startStamp,'int'],
                        [':endDate', $endStamp, 'int']
                    ];
                    $result = $pdo->selectBinded($sql, $bindings);

                    if($result == "error"){
                        return "<p>There was an error.</p>";
                    }else{
                        if(count($result) != 0){
                            return $this->makeTable($result);	
                        }
                        else {
                            return '<p>No notes found.</p>';
                        }
                    }
                }else{
                    return '<p>Invalid Time.</p>';
                }
            }else{
                return "<p>Please set a start and end date.</p>";
            }
        }

        private function makeTable($records){
            $output = "<table class='table table-bordered table-striped'><thead><tr>";
            $output .= "<th>Date and Time</th><th>Note</th></tr><tbody>";
            foreach ($records as $row){
                $timetodate = date("m/d/Y h:i A", $row['time_stamp']);
                $output .= "<tr><td>{$timetodate}</td>";
    
                $output .= "<td>{$row['note']}</td></tr>";
            }
            
            $output .= "</tbody></table></form>";
            return $output;
        }
    }
?>