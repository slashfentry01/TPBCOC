<?php
    $conn = new mysqli('localhost','root','','evidence_db');
    if($conn->connect_errno){
        echo "<script>alert('Unable to connect to database')</script>";
    }else{
        $stmt=$conn->prepare("SELECT blockchain FROM checkinout WHERE title=?");
        $stmt->bind_param("s", $_POST['title']);
        $res=$stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($string);
        while($stmt->fetch()){
            require 'coc.php';
            $coc=unserialize($string);
            $coc->checkin();
            $str=serialize($coc);
            $conn1 = new mysqli('localhost','root','','evidence_db');
            if($conn1->connect_errno){
                echo "<script>alert('Unable to connect to database')</script>";
            }else{
                $stmt1=$conn1->prepare("UPDATE checkinout SET blockchain=? WHERE title=?");
                $stmt1->bind_param("ss", $str, $_POST['title']);
                $res1=$stmt1->execute();
                if($res1){
                    echo '<form action="evidence.php" method="POST">';
                        echo '<input type="hidden" id="caseID" name="caseID" value="'.$_POST['caseID'].'">';
                        echo '<input type="submit" id="submit" name="submit" value="Submit">';
                    echo '</form>';
                    echo '<script>';
                        echo 'document.getElementById("submit").dispatchEvent(new MouseEvent("click"));';
                    echo '</script>';
                }else{
                    echo "<script>alert('Unable to add new evidence!')</script>";
                    header("location: ../archives/");
                }
            }
        }
    }
?>