<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <h1>Soal</h1>
    <p>
        1. $input = "Total pembelian baju dinas sebesar Rp 675.000";<br>
        output: a. 675.000 b. 675000<br>
        <br>
        2. $input = "Kd Brg:7638843, NmBrg=Susu Bear Brand, HrgBrg:11.500, QtyBrg=4, TtlBayar:46.000"
        <br>Output: $Kd_Brg = 7638843;
        $NmBrg = Susu Bear Brand;
        $HrgBrg = 11.500;
        $QtyBrg = 4;
        $TtlBayar = 46.000;<br>
        <br>
        3. $input = "I Love You And I Miss Her"; (Merapikan spasi pada kalimat)<br>
        Qutput: I Love You And I Miss Her
    </p>

    <h2>Jawaban</h2>

    <?php
      //jwb no 1
        $input = "Total pembelian baju dinas sebesar Rp 675.000";

        $expInput = explode(" ", $input);

        // print_r($expInput);

        // echo (" 1.  $expInput[6]");
        echo "A. ", end($expInput) ."<br>";
        
        $inputEnd = str_replace( ".", "", $expInput[6]);

        echo "B. ", $inputEnd ."<br><br>";

        //jwb no 2
        $input = "Kd Brg:7638843, NmBrg=Susu Bear Brand, HrgBrg:11.500, QtyBrg=4, TtlBayar:46.000";

        $input1 = str_replace(":", "=", $input);
        $input2 = str_replace(", ", "&", $input1);

        parse_str($input2);
        echo $Kd_Brg . "<br/>";
        echo $NmBrg . "<br/>";
        echo $HrgBrg . "<br/>";
        echo $QtyBrg . "<br/>";
        echo $TtlBayar . "<br/><br/>";

        //jwb no 3
        $input = "I Love   You   And   I Miss   Her";
        $tampung = "";

        $expInput = explode(" ", $input);

        //cara mudah
        //var_dump($expInput);

        for($i=0; $i<count($expInput); $i++){
            $tampung = $tampung . $expInput[$i]. " ";
        }

        echo $tampung;

        //cara mudah
        //echo trim($input);
    
    ?>

</body>

</html>