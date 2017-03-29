<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            error_reporting(0);
            $file = fopen("salaryinfo.txt", "r");
           
            $read_file = fread($file, filesize("salaryinfo.txt"));
            
            $data = explode(" ", $read_file);
            if($_POST["result"]){
                $input = $_POST["salary"]; 
             foreach($data as $key=>$value){
                $max = max($value);
                }
                
            }
            echo $max;
            
           $avg= null;
            for($x=0; $x<count($data); $x++){
               
                if($x%2!=0){
                  
                 
                  $avg +=  $data[$x];
                   $total = $avg;
                  $max = max($data[$x]);
                 
                }
                if($x%2 == 0){
                   echo $data[$x] ."<br/>";
                }
                   
                }
           
            
           echo $max; 
            $avg = $avg/5;
            echo "Average Salary is: "  .$avg ."<br/>";
             echo "Total Salary is: "  .$total ."<br/>";
            
//            echo "<pre>";
//            var_dump($data);
           
            fclose($file);
        ?>
        
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
            <label for="salary">Input Employee ID</label>
            <input type="text" name="salary" placeholder="Employee ID" />
            <input type="submit" name="result" />
        </form>
    </body>
</html>
