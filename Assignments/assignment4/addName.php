<?php
    class AddNames{
        public function addClearNames(){
            if(isset($_POST['clearButton']) || !isset($_POST['nameInput']))
            return "";
            else{
                $newName = $_POST['nameInput'];
                $oldNames = $_POST['nameList'];

                $formattedName = self::formatName($newName);

                $arr = explode("\n", $formattedName . $oldNames);
                sort($arr);
                $output = implode("\n", $arr);
                return $output;
            }
        }

        private function formatName($name){
            $out = substr($name, strpos($name, " ") + 1);
            $out .= ", ";
            $out .= substr($name, 0, strpos($name, " "));
            $out .= "\n";
            return $out;
        }
    }
?>