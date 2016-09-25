<?php
    function convert($param){
        $db = $param;
        $query = $db->query("select * from table4Converting");
        while ($row=$result->fetch_assoc()){$array[]=$row;}
        $db->close();
        $converted = json_encode($array);
        return $converted;
     }
     function p2db($host,$user,$pwd,$dbname){
        $db=new mysqli($host,$user,$pwd,$dbname);
        return $db;
     }
     echo convert(p2db("localhost","root","","btaskaya"));
?>
