<?php
    class CreateDirectory{

        public function create(){
            if(isset($_POST['folderName'])){
                $dupe = self::checkDupes($_POST['folderName']);
                if(!$dupe){
                    if(!mkdir("Directories/".$_POST['folderName'])){
                        return "<p>Cannot create directory.</p>";
                    }else{
                        chmod("Directories/".$_POST['folderName'], 0777);
                        touch("Directories/".$_POST['folderName']."/readme.txt");
                        chmod("Directories/".$_POST['folderName']."/readme.txt", 0777);

                        if(isset($_POST['fileContent'])){
                            $handle = fopen("Directories/".$_POST['folderName']."/readme.txt", "w");
                            if(!fwrite($handle, $_POST['fileContent'])){
                                return "<p>Cannot write to file.</p>";
                            }else{
                                $output = "<p>Directory and file created.</p>";
                                $filepath = "Directories/".$_POST['folderName']."/readme.txt";
                                $output .= '<p><a href="'.$filepath.'">File location</a></p>';
                                return $output;
                            }

                        }
                    }
                }else{
                    return "<p>A directory already exists with that name.</p>";
                }
            }
        }

        private function checkDupes($name){
            foreach(glob("Directories/*") as $dirName){
                if($dirName == "Directories/".$name){
                    return true;
                }
            }
            return false;
        }


    }
?>