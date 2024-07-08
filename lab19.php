<!-- Write a Program to calculate electricity bill in PHP -->
<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Electricity Bill</title>
          <script>
                    
          </script>
</head>
<body>
    <form method="post" action="">
        <h1>Electricity Bill Calculator</h1>
        <label>Enter Unit : </label>
        <input type="text" Placeholder="Enter total Unit " name="unit">
        <input type="submit" value="Submit" name="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $unit=$_POST['unit'];
        if($unit<=50){
            $amount=$unit*3.50;
        }
        else  if($unit<=150){

            $amount=$unit-50;
            $amount=50*3.5+$amount*4.0;
        }
        else  if($unit<=250){

            $amount=$unit-150;
            $amount=50*3.5+100*4.0+$amount*5.20;
        }
        else{
            
            $amount=$unit-250;
            $amount=50*3.5+100*4.0+100*5.20+$amount*6.5;
        
        }
        echo "Your total amount is RS. ".$amount;
    }
    ?>
        

   
          
</body>
</html>