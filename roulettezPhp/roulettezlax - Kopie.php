<?php


    $zahl = rand(0,36);
  
    $credit = isset($_GET['credit']) ? $_GET['credit'] : 150;


    $rot = array(1,3,5,7,9,12,14,16,18,19,21,23,25,27,30,32,34,36);
    $schwarz = array(2,4,6,8,10,11,13,15,17,20,22,24,26,28,29,31,33,35);

    $leftsec = array(1,4,7,10,13,16,19,22,25,28,31,34);
    $midsec = array(2,5,8,11,14,17,20,23,26,29,32,35);
    $rightsec = array(3,6,9,12,15,18,21,24,27,30,33,36);

    $woneven = 0;
    $wonred = 0;
    $wonlow = 0;
    $wonhigh = 0;
    $won112 = 0;
    $won1324 = 0;
    $won2536 = 0;
    $wonleft = 0;
    $wonright = 0;
    $wonmid = 0;
    
    $farbe = TRUE;     //red
    $typp = FALSE;      //even
    $seclow = FALSE;    //high
    $sechigh = FALSE;
    $secleft = FALSE;
    $secright = TRUE;
    $secmid = FALSE;
    $sec112 = FALSE;
    $sec1324 = FALSE;
    $sec2536 = FALSE;
    
    $checktypp = isset($_POST['typp'])==='even' ? $_POST['typp'] ==='odd' : 'odd';
    

   /* class Zahl
    {
        public $zahl = '';
        public $farbe = TRUE;     //red
        public $typp = TRUE;      //even
        public $seclow = TRUE;    //high
        public $secleft = TRUE;
        public $secright = TRUE;
        public $secmid = TRUE;
        public $sec112 = TRUE;
        public $sec1324 = TRUE;
        public $sec2536 = TRUE;
    }*/
    class Gebot
    {
        public $betZahl = 0;
        public $betFarbe = 0;
        public $betTypp = 0;
        public $betHigh = 0;
        public $betLow = 0;
        public $bet112 = 0;
        public $bet1324 = 0;
        public $bet2536 = 0;
        public $allBets = 0;
        public $betLeft = 0;
        public $betMid = 0;
        public $betRight = 0;
        public $betsAll = 0;

     /*   public function Bets()
        {   
            echo ("<p>dollar_Get ist " . array_sum($_GET) . "</p>");
            

        }

        public function BietenZahlen()
        {
            $checked_nr = $_POST['number'];
            $countNr = count($checked_nr);

            $betGlobalZahl = $countNr * $betZahl;
            return $betGlobalZahl;

            $wonZahl = $betZahl * 36;
            return $wonZahl;
        }*/
    }
    isset($_POST['typp'])==='even' ? $_POST['typp'] ==='odd' : 'odd';


    $bets = new Gebot();
    $bets->betZahl = intval($_GET['betnumbers']);
    $bets->betFarbe = intval($_GET['betcolor']);
    $bets->betTypp = intval($_GET["bettypp"]);
    $bets->betFarbe = intval($_GET['betcolor']);
    $bets->betHigh = intval($_GET['bethigh']);
    $bets->betLow = intval($_GET['betlow']);
    $bets->bet112 = intval($_GET['bet112']);
    $bets->bet1324 = intval($_GET['bet1324']);
    $bets->bet2536 = intval($_GET['bet2536']);
    $bets->betLeft = intval($_GET['betleft']);
    $bets->betMid = intval($_GET['betmid']);
    $bets->betRight = intval($_GET['betright']);

    $cr = (array_sum($_GET)) + 0;

    $cnow = $credit - $cr;

    $bettypop = $bets->betTypp > 0 ? $bets->betTypp : $bets->betTypp;
    $bettycolor = $bets->betFarbe > 0 ? $bets->betFarbe : $bets->betFarbe;
    $bettylow = $bets->betLow > 0 ? $bets->betLow : $bets->betLow;
    $bettyhigh = $bets->betHigh > 0 ? $bets->betHigh : $bets->betHigh;
    $betty112 = $bets->bet112 > 0 ? $bets->bet112 : $bets->bet112;
    $betty1324 = $bets->bet1324 > 0 ? $bets->bet1324 : $bets->bet1324;
    $betty2536 = $bets->bet2536 > 0 ? $bets->bet2536 : $bets->bet2536;
    $bettyleft = $bets->betLeft > 0 ? $bets->betLeft : $bets->betLeft;
    $bettymid = $bets->betMid > 0 ? $bets->betMid : $bets->betMid;
    $bettyright = $bets->betRight > 0 ? $bets->betRight : $bets->betRight;
    $bettyfields = $bets->betZahl > 0 ? $bets->betZahl : $bets->betZahl;


    echo ("<p>dollar_Get ist " . array_sum($_GET) . "</p>");

    $Gebot_vars = get_class_vars(get_class($bets));
    foreach ($Gebot_vars as $Gebot_name => $Gebot_value)
    {   
      // echo "$Gebot_name : $Gebot_value\n";
    }

?>

<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
    <title>LAc Roullettez</title>
    <link rel="stylesheet" href="./Roulstyles.css">
  </head>
<body>
    <br>
    <p align="center"color="red">Salut, Welcome to</p>
                    
    <p align="center" id="redz"><<<<' LAc Roulettez '>>></p>
    <table align="center">
        <tr>
            <td>
                </form></P>



            </td>
        </tr>

    </table>    
    <br> <br>
    
    <table border="1px" align="center">
    <tr>
        <td>
            <p id="red"> <?php echo($zahl); ?> </p>

        </td>
    <td><br><br><br> <br> <br> <br>
        <form action="./roulettezlax.php" method="GET"> 
            <p align="right">
            <p  id="gray">
                x3<input type="number" name="bet112" style="width: 3em" value="<?php echo($betty112); ?>">
            &ensp;1-12<input type="checkbox" name="112" value="1-12"<?php echo ((isset($_GET['112']) && $_GET['112'] === "1-12") ? "checked" : "")?>>
            <br></p><br><br><br>
            <p id="gray">
                x3<input type="number" name="bet1324" style="width: 3em" value="<?php echo($betty1324); ?>">
            13-24<input type="checkbox" name="1324" value="13-24"<?php echo ((isset($_GET['1324']) && $_GET['1324'] === "13-24") ? "checked" : "")?>>
            <br></p><br><br><br><br>
            <p  id="gray">
            x3<input type="number" name="bet2536" style="width: 3em" value="<?php echo($betty2536); ?>">
            25-36<input type="checkbox" name="2536" value="25-36"<?php echo ((isset($_GET['2536']) && $_GET['2536'] === "25-36") ? "checked" : "")?>> <br><br><br>
    </td>
    <td>
    <p align="center">
    
        <div align="center" id="gray">
         Bet per field<br>
            <input type="number" name="betnumbers" style="width: 5em" value="<?php echo($bettyfields);?>">x36
        </div>  
       
        <br>

     <div align="center">
        <input type="checkbox" id="0" name="0" value="0" class="largerCheckbox" <?php echo ((isset($_GET['0']) && $_GET['0'] === "0") ? "checked" : "")?>><font color="green">0</font>&ensp;<br>
        <input type="checkbox" id="1" name="1" value="0"class="largerCheckbox"<?php echo ((isset($_GET['1']) && $_GET['1'] === "0") ? "checked" : "")?>><font color="red">1</font>&ensp; 
        <input type="checkbox" id="2" name="2" value="0"class="largerCheckbox"<?php echo ((isset($_GET['2']) && $_GET['2'] === "0") ? "checked" : "")?>><font color="black">2&ensp;
        <input type="checkbox" id="3" name="3" value="0"class="largerCheckbox"<?php echo ((isset($_GET['3']) && $_GET['3'] === "0") ? "checked" : "")?>><font color="red">3</font>&ensp;<br>
        <input type="checkbox" id="4" name="4" value="0"class="largerCheckbox"<?php echo ((isset($_GET['4']) && $_GET['4'] === "0") ? "checked" : "")?>>4&ensp;
        <input type="checkbox" id="5" name="5" value="0"class="largerCheckbox"<?php echo ((isset($_GET['5']) && $_GET['5'] === "0") ? "checked" : "")?>><font color="red">5</font>&ensp;
        <input type="checkbox" id="6" name="6" value="0"class="largerCheckbox"<?php echo ((isset($_GET['6']) && $_GET['6'] === "0") ? "checked" : "")?>>6&ensp;<br>
        <input type="checkbox" id="7" name="7" value="0"class="largerCheckbox"<?php echo ((isset($_GET['7']) && $_GET['7'] === "0") ? "checked" : "")?>><font color="red">7</font>&ensp;
        <input type="checkbox" id="8" name="8" value="0"class="largerCheckbox"<?php echo ((isset($_GET['8']) && $_GET['8'] === "0") ? "checked" : "")?>>8&ensp; 
        <input type="checkbox" id="9" name="9" value="0"class="largerCheckbox"<?php echo ((isset($_GET['9']) && $_GET['9'] === "0") ? "checked" : "")?>><font color="red">9</font>&ensp; <br>
        <input type="checkbox" id="10" name="10" value="0"class="largerCheckbox"<?php echo ((isset($_GET['10']) && $_GET['10'] === "0") ? "checked" : "")?>>10
        <input type="checkbox" id="11" name="11" value="0"class="largerCheckbox"<?php echo ((isset($_GET['11']) && $_GET['11'] === "0") ? "checked" : "")?>>11
        <input type="checkbox" id="12" name="12" value="0"class="largerCheckbox"<?php echo ((isset($_GET['12']) && $_GET['12'] === "0") ? "checked" : "")?>><font color="red">12</font><br>
        <input type="checkbox" id="13" name="13" value="0"class="largerCheckbox"<?php echo ((isset($_GET['13']) && $_GET['13'] === "0") ? "checked" : "")?>>13
        <input type="checkbox" id="14" name="14" value="0"class="largerCheckbox"<?php echo ((isset($_GET['14']) && $_GET['14'] === "0") ? "checked" : "")?>><font color="red">14</font>
        <input type="checkbox" id="15" name="15" value="0"class="largerCheckbox"<?php echo ((isset($_GET['15']) && $_GET['15'] === "0") ? "checked" : "")?>>15<br>
        <input type="checkbox" id="16" name="16" value="0"class="largerCheckbox"<?php echo ((isset($_GET['16']) && $_GET['16'] === "0") ? "checked" : "")?>><font color="red">16</font>
        <input type="checkbox" id="17" name="17" value="0"class="largerCheckbox"<?php echo ((isset($_GET['17']) && $_GET['17'] === "0") ? "checked" : "")?>>17
        <input type="checkbox" id="18" name="18" value="0"class="largerCheckbox"<?php echo ((isset($_GET['18']) && $_GET['18'] === "0") ? "checked" : "")?>><font color="red">18</font><br>
        <input type="checkbox" id="19" name="19" value="0"class="largerCheckbox"<?php echo ((isset($_GET['19']) && $_GET['19'] === "0") ? "checked" : "")?>><font color="red">19</font>
        <input type="checkbox" id="20" name="20" value="0"class="largerCheckbox"<?php echo ((isset($_GET['20']) && $_GET['20'] === "0") ? "checked" : "")?>>20
        <input type="checkbox" id="21" name="21" value="0"class="largerCheckbox"<?php echo ((isset($_GET['21']) && $_GET['21'] === "0") ? "checked" : "")?>><font color="red">21</font><br>
        <input type="checkbox" id="22" name="22" value="0"class="largerCheckbox"<?php echo ((isset($_GET['22']) && $_GET['22'] === "0") ? "checked" : "")?>>22
        <input type="checkbox" id="23" name="23" value="0"class="largerCheckbox"<?php echo ((isset($_GET['23']) && $_GET['23'] === "0") ? "checked" : "")?>><font color="red">23</font>
        <input type="checkbox" id="24" name="24" value="0"class="largerCheckbox"<?php echo ((isset($_GET['24']) && $_GET['24'] === "0") ? "checked" : "")?>>24<br>
        <input type="checkbox" id="25" name="25" value="0"class="largerCheckbox"<?php echo ((isset($_GET['25']) && $_GET['25'] === "0") ? "checked" : "")?>><font color="red">25</font>
        <input type="checkbox" id="26" name="26" value="0"class="largerCheckbox"<?php echo ((isset($_GET['26']) && $_GET['26'] === "0") ? "checked" : "")?>>26
        <input type="checkbox" id="27" name="27" value="0"class="largerCheckbox"<?php echo ((isset($_GET['27']) && $_GET['27'] === "0") ? "checked" : "")?>><font color="red">27</font><br>
        <input type="checkbox" id="28" name="28" value="0"class="largerCheckbox"<?php echo ((isset($_GET['28']) && $_GET['28'] === "0") ? "checked" : "")?>>28
        <input type="checkbox" id="29" name="29" value="0"class="largerCheckbox"<?php echo ((isset($_GET['29']) && $_GET['29'] === "0") ? "checked" : "")?>>29
        <input type="checkbox" id="30" name="30" value="0"class="largerCheckbox"<?php echo ((isset($_GET['30']) && $_GET['30'] === "0") ? "checked" : "")?>><font color="red">30</font><br>
        <input type="checkbox" id="31" name="31" value="0"class="largerCheckbox"<?php echo ((isset($_GET['31']) && $_GET['31'] === "0") ? "checked" : "")?>>31
        <input type="checkbox" id="32" name="32" value="0"class="largerCheckbox"<?php echo ((isset($_GET['32']) && $_GET['32'] === "0") ? "checked" : "")?>><font color="red">32</font>
        <input type="checkbox" id="33" name="33" value="0"class="largerCheckbox"<?php echo ((isset($_GET['33']) && $_GET['33'] === "0") ? "checked" : "")?>>33<br>
        <input type="checkbox" id="34" name="34" value="0"class="largerCheckbox"<?php echo ((isset($_GET['34']) && $_GET['34'] === "0") ? "checked" : "")?>><font color="red">34</font>
        <input type="checkbox" id="35" name="35" value="0"class="largerCheckbox"<?php echo ((isset($_GET['35']) && $_GET['35'] === "0") ? "checked" : "")?>>35
        <input type="checkbox" id="36" name="36" value="0"class="largerCheckbox"<?php echo ((isset($_GET['36']) && $_GET['36'] === "0") ? "checked" : "")?>><font color="red">36</font><br>
     </div>
    
    <?php if(in_array('0', $_GET)): {var_dump($_GET);}endif;?>
      
    </td>
      <td><br> <br> 
      <p align="right">
            <p align="right" id="gray"><br>
                <input type="checkbox" name="checklow" value="low"<?php echo ((isset($_GET['checklow']) && $_GET['checklow'] === "low") ? "checked" : "")?>>Low<br>
                <input type="number" name="betlow" style="width: 3em" value="<?php echo($bettylow); ?>">x2
            </p><br><br> <br> <br> <br> 
                <p align="right" id="gray">
                <input type="checkbox" name="checkhigh" value="high"<?php echo ((isset($_GET['checkhigh']) && $_GET['checkhigh'] === "high") ? "checked" : "")?>>High<br>
                <input type="number" name="bethigh" style="width: 3em" value="<?php echo($bettyhigh); ?>">x2
            </p>    
      </td>
      <td></td>
        <td></td>
        <td></td>
       
        <td><br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
        <p align="center">
            <p align="left" id="gray">
                <input type="radio" name="typp" value="even" <?php echo ((isset($_GET['typp']) && $_GET['typp'] === "even") ? "checked" : "")?>/>even<br>          
                <input type="radio" name="typp" value="odd"<?php echo ((isset($_GET['typp']) && $_GET['typp'] === "odd") ? "checked" : "")?>/>odd<br>     
<?php// var_dump($_POST); ?>                          
                <input type="number" name="bettypp" style="width: 3em" value="<?php echo($bettypop); ?>">x2<br>
                <br> <br> <br> 
            <p align="center">
            <p align="left" id="red">
                <input type="radio" name="checkcolor" value="Red"<?php echo ((isset($_GET['checkcolor']) && $_GET['checkcolor'] === "Red") ? "checked" : "")?>>Red</p>
            <p align="left" id="gray">
                <input type="radio" name="checkcolor" value="Black"<?php echo ((isset($_GET['checkcolor']) && $_GET['checkcolor'] === "Black") ? "checked" : "")?>>Black<br> <br>                
                <input type="number" name="betcolor" style="width: 3em" value="<?php echo($bettycolor);?>">x2<br>

        </td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    
    <tr>
    <td></td><td></td>
    
    <td>
    <p align="left">
            <p  id="gray">
                <input type="number" name="betleft" style="width: 3em" value="<?php echo($bettyleft);?>">
                <input type="checkbox" name="checkleft" value="left"<?php echo ((isset($_GET['checkleft']) && $_GET['checkleft'] === "left") ? "checked" : "")?>>
                <input type="number" name="betmid" style="width: 3em" value="<?php echo($bettymid);?>">
                <input type="checkbox" name="checkmid" value="mid"<?php echo ((isset($_GET['checkmid']) && $_GET['checkmid'] === "mid") ? "checked" : "")?>>
                <input type="number" name="betright" style="width: 3em" value="<?php echo($bettyright);?>">
                <input type="checkbox" name="checkright" value="right"<?php echo ((isset($_GET['checkright']) && $_GET['checkright'] === "right") ? "checked" : "")?>>

   </td>
    </tr>
    <td></td><td></td>
    <td align="left" id="gray">
    &ensp; &ensp; &ensp;    Left &ensp;  &ensp;        Mid &ensp; &ensp;Right
    </td>
</table>
<br>
<br>
<p align="center">
    
        <input type="submit" value="ROLL">
    </form>
<?php

    if ($zahl % 2 === 0 and $zahl != 0):
    {
        echo('<p align="center"> ' . $zahl . ' even'); 
        $typp = TRUE;
            //    echo(' ' . $woneven . '');
    }
    elseif ($zahl % 2 != 0 and $zahl != 0):
    {
        echo('<p align="center">' . $zahl . ' odd');
        $typp = FALSE;
    }
    else:
    {        
    }
    endif;

    if (in_array($zahl, $rot)):
    {
        echo(' Red');
        $farbe = TRUE;
    }
    elseif (in_array($zahl, $schwarz)):
    {
        echo(' Black');
        $farbe = FALSE;
    }
    else:
    {
        
    }
    endif;

    if (in_array($zahl, $leftsec) and $zahl != 0):
    {
        echo(' Left segment');
        $secleft = TRUE;
    }
    elseif (in_array($zahl, $midsec) and $zahl != 0):
    {
        echo(' Mid segment');
        $secmid = TRUE;
    }
    elseif (in_array($zahl, $rightsec) and $zahl != 0):
    {
        echo(' Right segment');
        $secright = TRUE;
    }
    else:
    {
        
    }
    endif;

    if ($zahl > 18 and $zahl != 0):
    {
        echo(' /High section');
        $sechigh = TRUE;
    }
    elseif ($zahl <= 18 and $zahl != 0):
    {
        echo(' /Low section');
        $seclow = TRUE;
    }
    else:
    {
        echo('<p align="center">King');
    }
    endif;
    if ($zahl >= 1 && $zahl <= 12 and $zahl != 0):
    {
        echo(' /1-12</p>');
        $sec112 = TRUE;
    }
    elseif ($zahl > 12 && $zahl <= 25 and $zahl != 0):
    {
        echo(' /13-24</p>');
        $sec1324 = TRUE;
    }
    elseif ($zahl > 25 && $zahl <= 36 and $zahl != 0):
    {
        echo(' /25-36</p>');
        $sec2536 = TRUE;
    }
    else:
    {
        
    }
    endif;
    
//var_dump($bets->betTypp);

    if ($typp === TRUE && ($_GET['typp']) === 'even'):
        {
            $woneven = $bets->betTypp * 2;
            echo('<p align="center">won for bet on even: ' . $woneven . '€');
        }
    elseif ($typp === FALSE && ($_GET['typp']) === 'odd'):
        {
            $woneven = $bets->betTypp * 2;
            echo('<p align="center">won for bet on odd: ' . $woneven . '€');
        }
    endif;

    if ($farbe === TRUE and ($_GET['checkcolor']) === "Red"):
        {
            $wonred = $bets->betFarbe * 2;
            echo('<p align="center">won for bet on Red: ' . $wonred . '€');
        }
    elseif ($farbe === FALSE && (($_GET['checkcolor'])) === "Black"):
        {
            $wonred = $bets->betFarbe * 2;
            echo('<p align="center">won for bet on Black: ' . $wonred . '€');
        }
    else:
    {
        
    }
    endif;

    if ($seclow === TRUE && isset($_GET['checklow'])):
        {
            $wonlow = $bets->betLow * 2;
            echo('<p align="center">won for bet on low section: ' . $wonlow . '€');
        }
    elseif ($sechigh === TRUE && isset($_GET['checkhigh'])):
        {
            $wonhigh = $bets->betHigh * 2;
            echo('<p align="center">won for bet on high section: ' . $wonhigh . '€');
        }
    endif;

    if ($sec112 === TRUE && isset($_GET['112'])):
        {
            $won112 = $bets->bet112 * 2;
            echo('<p align="center">won for bet on 1-12: ' . $won112 . '€');
        }
    elseif ($sec1324 === TRUE && isset($_GET['1324'])):
        {
            $won1324 = $bets->bet1324 * 2;
            echo('<p align="center">won for bet on 13-24: ' . $won1324 . '€');
        }
    elseif ($sec2536 === TRUE && isset($_GET['2536'])):
        {
            $won2536 = $bets->bet2536 * 2;
            echo('<p align="center">won for bet on 25-36: ' . $won2536 . '€');
        }    
    endif;
    
    if (isset($_GET['ch'])):
    {
        echo('<p>' . isset($_GET['0']) . '</p>');
    }
    endif;


    $wontotal = $wonred + $woneven + $wonhigh + $wonlow + $won2536 + $won112 + $won1324;

//var_dump($woneven);
?>

<p align="center"> Won Total: <?php echo($wontotal);?>€ </p>



</body>
</html>