<?php


        $zahl = rand(0,36);
    
        $rot = array(1,3,5,7,9,12,14,16,18,19,21,23,25,27,30,32,34,36);
        $schwarz = array(2,4,6,8,10,11,13,15,17,20,22,24,26,28,29,31,33,35);

        $leftsec = array(1,4,7,10,13,16,19,22,25,28,31,34);
        $midsec = array(2,5,8,11,14,17,20,23,26,29,32,35);
        $rightsec = array(3,6,9,12,15,18,21,24,27,30,33,36);

        //$creditnow = $credit + $netto - $betsAll;

        
        
        

        $cre = "cre.txt";
        $winz = "winz.txt";

            
        $checkednr = 0;
       // fwrite($cre, $credz);
        $wontotal = 0;
        $wonzahl = 0;
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
        $secright = FALSE;
        $secmid = FALSE;
        $sec112 = FALSE;
        $sec1324 = FALSE;
        $sec2536 = FALSE;        
     //   $checktypp = isset($_POST['typp'])==='even' ? $_POST['typp'] ==='odd' : 'odd';    
        class Gebot {
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
        }
        //isset($_POST['typp'])==='even' ? $_POST['typp'] ==='odd' : 'odd';
        $bets = new Gebot();
        $bets->betZahl = isset($_GET['betnumbers']) ? intval($_GET['betnumbers']) : 0;       
        $bets->betTypp =  isset($_GET["bettypp"]) && isset($_GET['typp']) ?  intval($_GET["bettypp"]) : 0;
        $bets->betFarbe = isset($_GET['betcolor']) && isset($_GET['checkcolor']) ? intval($_GET['betcolor']) : 0;
        $bets->betHigh = isset($_GET['bethigh']) && isset($_GET['checkhigh']) ? intval($_GET['bethigh']) : 0;
        $bets->betLow = isset($_GET['betlow']) && isset($_GET['checklow']) ? intval($_GET['betlow']) : 0;
        $bets->bet112 = isset($_GET['bet112']) && isset($_GET['112']) ? intval($_GET['bet112']) : 0;
        $bets->bet1324 = isset($_GET['bet1324']) && isset($_GET['1324']) ? intval($_GET['bet1324']) : 0;
        $bets->bet2536 = isset($_GET['bet2536']) && isset($_GET['2536']) ? intval($_GET['bet2536']) : 0;
        $bets->betLeft = isset($_GET['betleft']) && isset($_GET['checkleft']) ? intval($_GET['betleft']) : 0;
        $bets->betMid = isset($_GET['betmid']) && isset($_GET['checkmid']) ? intval($_GET['betmid']) : 0;
        $bets->betRight = isset($_GET['betright']) && isset($_GET['checkright']) ? intval($_GET['betright']) : 0;
    
        if(isset($_GET['0'])):{$checkednr++;}else:{}endif;
        if(isset($_GET['1'])):{$checkednr++;}else:{}endif;
        if(isset($_GET['2'])):{$checkednr++;}else:{}endif;
        if(isset($_GET['3'])):{$checkednr++;}else:{}endif;
        if(isset($_GET['4'])):{$checkednr++;}else:{}endif;
        if(isset($_GET['5'])):{$checkednr++;}else:{}endif;
        if(isset($_GET['6'])):{$checkednr++;}else:{}endif;
        if(isset($_GET['7'])):{$checkednr++;}else:{}endif;
        if(isset($_GET['8'])):{$checkednr++;}else:{}endif;
        if(isset($_GET['9'])):{$checkednr++;}else:{}endif;
        if(isset($_GET['10'])):{$checkednr++;}else:{}endif;
        if(isset($_GET['11'])):{$checkednr++;}else:{}endif;
        if(isset($_GET['12'])):{$checkednr++;}else:{}endif;
        if(isset($_GET['13'])):{$checkednr++;}else:{}endif;
        if(isset($_GET['14'])):{$checkednr++;}else:{}endif;
        if(isset($_GET['15'])):{$checkednr++;}else:{}endif;
        if(isset($_GET['16'])):{$checkednr++;}else:{}endif;
        if(isset($_GET['17'])):{$checkednr++;}else:{}endif;
        if(isset($_GET['18'])):{$checkednr++;}else:{}endif;
        if(isset($_GET['19'])):{$checkednr++;}else:{}endif;
        if(isset($_GET['20'])):{$checkednr++;}else:{}endif;
        if(isset($_GET['21'])):{$checkednr++;}else:{}endif;
        if(isset($_GET['22'])):{$checkednr++;}else:{}endif;
        if(isset($_GET['23'])):{$checkednr++;}else:{}endif;
        if(isset($_GET['24'])):{$checkednr++;}else:{}endif;
        if(isset($_GET['25'])):{$checkednr++;}else:{}endif;
        if(isset($_GET['26'])):{$checkednr++;}else:{}endif;
        if(isset($_GET['27'])):{$checkednr++;}else:{}endif;
        if(isset($_GET['28'])):{$checkednr++;}else:{}endif;
        if(isset($_GET['29'])):{$checkednr++;}else:{}endif;
        if(isset($_GET['30'])):{$checkednr++;}else:{}endif;
        if(isset($_GET['31'])):{$checkednr++;}else:{}endif;
        if(isset($_GET['32'])):{$checkednr++;}else:{}endif;
        if(isset($_GET['33'])):{$checkednr++;}else:{}endif;
        if(isset($_GET['34'])):{$checkednr++;}else:{}endif;
        if(isset($_GET['35'])):{$checkednr++;}else:{}endif;
        if(isset($_GET['36'])):{$checkednr++;}else:{}endif;
        
            

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

        

        $betsAll =    $bets->betZahl * $checkednr + $bets->betTypp + $bets->betHigh
                    + $bets->betFarbe + $bets->betRight + $bets->betMid + $bets->betLeft
                    + $bets->bet2536 + $bets->bet1324 + $bets->bet112 + $bets->betLow;


    class Credit {
        public $creditz = 0;
    }
        

        $cred1 = new Credit;

        $cred1->creditz = 5000;

        
        $winz = (file_exists("winz.txt") ? ($winz = fopen("winz.txt",'w+')) : ($winz = fopen("winz.txt",'w+')));
        $cre = (file_exists('cre.txt') ? ($cre = fopen('cre.txt','w+')) : ($cre = fopen('cre.txt','w+')));

       
       


        //$maeh = $creditz + $winni;

       // file_put_contents($cre, $maeh);
       
        
        
      //  $history = file_get_contents("creditcounter.csv");

        
  
        
?>

    <!DOCTYPE html>
    <html>
    <head>
            <meta charset="UTF-8">
            <title>LAc Roullettez</title>
            <link rel="stylesheet" href="./Roulstyles.css">
        <style>             
        </style>
    </head>
        <body background="4casino-roulette-table-chips-casino-concepts-besthqwallpapers.com-2048x1536 Kopie.jpg">

                <p align="left"color="red">Salut, Welcome to</p>
                                
                <p align="left" id="redz"><<<<' LAc Roulettez '>>>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<font color="white"> <?php //echo($creditnow);?></p><br><br>
        
        <table class="inlineTable" background="casino-roulette-table-chips-casino-concepts-besthqwallpapers.com-2048x1536.jpg" border=""  align="center">
          <tr>
            <td>    <br><br><br><br><br><br>
                <form action="./roulettezlax.php" method="GET" method> 
                    <p align="right" id="gray">                    
                        x3<input type="number" name="bet112" style="width: 3em" value="<?php echo($betty112); ?>">
                        &ensp;1-12<input type="checkbox" name="112" value="1-12"<?php echo ((isset($_GET['112']) && $_GET['112'] === "1-12") ? "checked" : "")?>><br></p><br><br><br>
                    <p id="gray">
                        x3<input type="number" name="bet1324" style="width: 3em" value="<?php echo($betty1324); ?>">
                        13-24<input type="checkbox" name="1324" value="13-24"<?php echo ((isset($_GET['1324']) && $_GET['1324'] === "13-24") ? "checked" : "")?>><br></p><br><br><br><br>
                    <p  id="gray">
                        x3<input type="number" name="bet2536" style="width: 3em" value="<?php echo($betty2536); ?>">
                        25-36<input type="checkbox" name="2536" value="25-36"<?php echo ((isset($_GET['2536']) && $_GET['2536'] === "25-36") ? "checked" : "")?>> <br><br><br>
            </td>
            <td border="0">
                <p align="center">            
                    <div align="center" id="gray" border="0">
                        Bet per field<br>
                        <input type="number" name="betnumbers" style="width: 5em" value="<?php echo($bettyfields);?>">x36
                    </div><br>
                <div align="center">
                    <input type="checkbox" id="0" name="0" value="0"class="largerCheckbox"<?php echo ((isset($_GET['0']) && $_GET['0'] === "0") ? "checked" : "")?>><font color="green">0</font>&ensp;<br>
                    <input type="checkbox" id="1" name="1" value="1"class="largerCheckbox"<?php echo ((isset($_GET['1']) && $_GET['1'] === "1") ? "checked" : "")?>><font color="red">1</font>&ensp; 
                    <input type="checkbox" id="2" name="2" value="2"class="largerCheckbox"<?php echo ((isset($_GET['2']) && $_GET['2'] === "2") ? "checked" : "")?>><font color=white>2&ensp;
                    <input type="checkbox" id="3" name="3" value="3"class="largerCheckbox"<?php echo ((isset($_GET['3']) && $_GET['3'] === "3") ? "checked" : "")?>><font color="red">3</font>&ensp;<br>
                    <input type="checkbox" id="4" name="4" value="4"class="largerCheckbox"<?php echo ((isset($_GET['4']) && $_GET['4'] === "4") ? "checked" : "")?>>4&ensp;
                    <input type="checkbox" id="5" name="5" value="5"class="largerCheckbox"<?php echo ((isset($_GET['5']) && $_GET['5'] === "5") ? "checked" : "")?>><font color="red">5</font>&ensp;
                    <input type="checkbox" id="6" name="6" value="6"class="largerCheckbox"<?php echo ((isset($_GET['6']) && $_GET['6'] === "6") ? "checked" : "")?>>6&ensp;<br>
                    <input type="checkbox" id="7" name="7" value="7"class="largerCheckbox"<?php echo ((isset($_GET['7']) && $_GET['7'] === "7") ? "checked" : "")?>><font color="red">7</font>&ensp;
                    <input type="checkbox" id="8" name="8" value="8"class="largerCheckbox"<?php echo ((isset($_GET['8']) && $_GET['8'] === "8") ? "checked" : "")?>>8&ensp; 
                    <input type="checkbox" id="9" name="9" value="9"class="largerCheckbox"<?php echo ((isset($_GET['9']) && $_GET['9'] === "9") ? "checked" : "")?>><font color="red">9</font>&ensp; <br>
                    <input type="checkbox" id="10" name="10" value="10"class="largerCheckbox"<?php echo ((isset($_GET['10']) && $_GET['10'] === "10") ? "checked" : "")?>>10
                    <input type="checkbox" id="11" name="11" value="11"class="largerCheckbox"<?php echo ((isset($_GET['11']) && $_GET['11'] === "11") ? "checked" : "")?>>11
                    <input type="checkbox" id="12" name="12" value="12"class="largerCheckbox"<?php echo ((isset($_GET['12']) && $_GET['12'] === "12") ? "checked" : "")?>><font color="red">12</font><br>
                    <input type="checkbox" id="13" name="13" value="13"class="largerCheckbox"<?php echo ((isset($_GET['13']) && $_GET['13'] === "13") ? "checked" : "")?>>13
                    <input type="checkbox" id="14" name="14" value="14"class="largerCheckbox"<?php echo ((isset($_GET['14']) && $_GET['14'] === "14") ? "checked" : "")?>><font color="red">14</font>
                    <input type="checkbox" id="15" name="15" value="15"class="largerCheckbox"<?php echo ((isset($_GET['15']) && $_GET['15'] === "15") ? "checked" : "")?>>15<br>
                    <input type="checkbox" id="16" name="16" value="16"class="largerCheckbox"<?php echo ((isset($_GET['16']) && $_GET['16'] === "16") ? "checked" : "")?>><font color="red">16</font>
                    <input type="checkbox" id="17" name="17" value="17"class="largerCheckbox"<?php echo ((isset($_GET['17']) && $_GET['17'] === "17") ? "checked" : "")?>>17
                    <input type="checkbox" id="18" name="18" value="18"class="largerCheckbox"<?php echo ((isset($_GET['18']) && $_GET['18'] === "18") ? "checked" : "")?>><font color="red">18</font><br>
                    <input type="checkbox" id="19" name="19" value="19"class="largerCheckbox"<?php echo ((isset($_GET['19']) && $_GET['19'] === "19") ? "checked" : "")?>><font color="red">19</font>
                    <input type="checkbox" id="20" name="20" value="20"class="largerCheckbox"<?php echo ((isset($_GET['20']) && $_GET['20'] === "20") ? "checked" : "")?>>20
                    <input type="checkbox" id="21" name="21" value="21"class="largerCheckbox"<?php echo ((isset($_GET['21']) && $_GET['21'] === "21") ? "checked" : "")?>><font color="red">21</font><br>
                    <input type="checkbox" id="22" name="22" value="22"class="largerCheckbox"<?php echo ((isset($_GET['22']) && $_GET['22'] === "22") ? "checked" : "")?>>22
                    <input type="checkbox" id="23" name="23" value="23"class="largerCheckbox"<?php echo ((isset($_GET['23']) && $_GET['23'] === "23") ? "checked" : "")?>><font color="red">23</font>
                    <input type="checkbox" id="24" name="24" value="24"class="largerCheckbox"<?php echo ((isset($_GET['24']) && $_GET['24'] === "24") ? "checked" : "")?>>24<br>
                    <input type="checkbox" id="25" name="25" value="25"class="largerCheckbox"<?php echo ((isset($_GET['25']) && $_GET['25'] === "25") ? "checked" : "")?>><font color="red">25</font>
                    <input type="checkbox" id="26" name="26" value="26"class="largerCheckbox"<?php echo ((isset($_GET['26']) && $_GET['26'] === "26") ? "checked" : "")?>>26
                    <input type="checkbox" id="27" name="27" value="27"class="largerCheckbox"<?php echo ((isset($_GET['27']) && $_GET['27'] === "27") ? "checked" : "")?>><font color="red">27</font><br>
                    <input type="checkbox" id="28" name="28" value="28"class="largerCheckbox"<?php echo ((isset($_GET['28']) && $_GET['28'] === "28") ? "checked" : "")?>>28
                    <input type="checkbox" id="29" name="29" value="29"class="largerCheckbox"<?php echo ((isset($_GET['29']) && $_GET['29'] === "29") ? "checked" : "")?>>29
                    <input type="checkbox" id="30" name="30" value="30"class="largerCheckbox"<?php echo ((isset($_GET['30']) && $_GET['30'] === "30") ? "checked" : "")?>><font color="red">30</font><br>
                    <input type="checkbox" id="31" name="31" value="31"class="largerCheckbox"<?php echo ((isset($_GET['31']) && $_GET['31'] === "31") ? "checked" : "")?>>31
                    <input type="checkbox" id="32" name="32" value="32"class="largerCheckbox"<?php echo ((isset($_GET['32']) && $_GET['32'] === "32") ? "checked" : "")?>><font color="red">32</font>
                    <input type="checkbox" id="33" name="33" value="33"class="largerCheckbox"<?php echo ((isset($_GET['33']) && $_GET['33'] === "33") ? "checked" : "")?>>33<br>
                    <input type="checkbox" id="34" name="34" value="34"class="largerCheckbox"<?php echo ((isset($_GET['34']) && $_GET['34'] === "34") ? "checked" : "")?>><font color="red">34</font>
                    <input type="checkbox" id="35" name="35" value="35"class="largerCheckbox"<?php echo ((isset($_GET['35']) && $_GET['35'] === "35") ? "checked" : "")?>>35
                    <input type="checkbox" id="36" name="36" value="36"class="largerCheckbox"<?php echo ((isset($_GET['36']) && $_GET['36'] === "36") ? "checked" : "")?>><font color="red">36</font><br>
                </div>
            </td>
            <td border="0">    <br><br> 
                <p align="right" id="gray" border="0"><br>
                    <input type="checkbox" name="checklow" value="low"<?php echo ((isset($_GET['checklow']) && $_GET['checklow'] === "low") ? "checked" : "")?>>Low<br>
                    <input type="number" name="betlow" style="width: 3em" value="<?php echo($bettylow); ?>">x2
                </p>    <br><br><br><br><br> 
                <p align="right" id="gray">
                    <input type="checkbox" name="checkhigh" value="high"<?php echo ((isset($_GET['checkhigh']) && $_GET['checkhigh'] === "high") ? "checked" : "")?>>High<br>
                    <input type="number" name="bethigh" style="width: 3em" value="<?php echo($bettyhigh); ?>">x2
                </p>
            </td>
            <td></td>
            <td></td>
            <td></td>            
            <td><br><br><br><br><br><br><br><br><br><br><br> 
                <p align="center" id="gray">                    
                    <input type="radio" name="typp" value="even" <?php echo ((isset($_GET['typp']) && $_GET['typp'] === "even") ? "checked" : "")?>/><font color="black">even</font><br>          
                    <input type="radio" name="typp" value="odd"<?php echo ((isset($_GET['typp']) && $_GET['typp'] === "odd") ? "checked" : "")?>/>odd<br>                                    
                    <input type="number" name="bettypp" style="width: 3em" value="<?php echo($bettypop); ?>">x2<br><br><br><br>
                <p align="center">
                <p align="left" id="red">
                    <input type="radio" name="checkcolor" value="Red"<?php echo ((isset($_GET['checkcolor']) && $_GET['checkcolor'] === "Red") ? "checked" : "")?>>Red</p>
                <p align="left" id="gray">
                    <input type="radio" name="checkcolor" value="Black"<?php echo ((isset($_GET['checkcolor']) && $_GET['checkcolor'] === "Black") ? "checked" : "")?>><font color="black">Black</font><br> <br>                
                        <input type="number" name="betcolor" style="width: 3em" value="<?php echo($bettycolor);?>">x2<br>
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>            
        <tr>
            <td></td>
            <td>
                <p align="left" id="gray">
                    <input type="number" name="betleft" style="width: 3em" value="<?php echo($bettyleft);?>">
                    <input type="checkbox" name="checkleft" value="left"<?php echo ((isset($_GET['checkleft']) && $_GET['checkleft'] === "left") ? "checked" : "")?>>
                    <input type="number" name="betmid" style="width: 3em" value="<?php echo($bettymid);?>">
                    <input type="checkbox" name="checkmid" value="mid"<?php echo ((isset($_GET['checkmid']) && $_GET['checkmid'] === "mid") ? "checked" : "")?>>
                    <input type="number" name="betright" style="width: 3em" value="<?php echo($bettyright);?>">
                    <input type="checkbox" name="checkright" value="right"<?php echo ((isset($_GET['checkright']) && $_GET['checkright'] === "right") ? "checked" : "")?>>
            </td>
        </tr>
            <td></td>
            <td align="left" id="gray">
                    &ensp; &ensp; &ensp;    Left &ensp;  &ensp;        Mid &ensp; &ensp;Right
            </td>
        <tr>
        </tr><tr>
        </tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr>
            <td align="right">
                    <p> <font size="15%"><font color="black"> <?php if (in_array($zahl, $schwarz)):{ echo($zahl);} endif;?> </font>
                    <p> <font size="15%"><font color="green"> <?php if ($zahl === 0):{ echo($zahl);} endif;?> </font>
                    <p id="red"><font size="15%"> <?php if (in_array($zahl, $rot)):{ echo($zahl);} endif; ?> </p>
            </td>
            <td>   
                    <p align="center" >            
                    <input class="button" type="submit" value="ROLL" width="6px" style=" color: white; background-color:#110011; height: 50px; width: 200px">    
            </td>          
            <td><td>
            </td><td>
            </td><td>
            </td>
            </td>
            <td align="left"> <font color="550066" face="roboto" size="3"> Total Bet:<br><div align="center"><font color="330055" face="comic" size="4"><?php echo($betsAll); ?> € 
                </form>
        </table>
<?php

    echo('<table border="0"  align="center" class="inlineTablestyle"> <tr><td>');        
       
        if (in_array($zahl, $rot)):
        {
            echo('<p align="center"><font color="red"> ' . $zahl . ' <font size="1">Red</font>');
            $farbe = TRUE;
        }
        elseif (in_array($zahl, $schwarz)):
        {
            echo('<p align="center"><font color="black">' . $zahl . ' </font><font color="black"> <font size="2">Black</font>');
            $farbe = FALSE;
        }
        else:
        {
            
        }
        endif;
    echo('<font color="CC7755" size="3" face="timesnewroman">');
        if ($zahl % 2 === 0 and $zahl != 0):
            {
                echo(' Even'); 
                $typp = TRUE;
                    //    echo(' ' . $woneven . '');
            }
            elseif ($zahl % 2 != 0 and $zahl != 0):
            {
                echo(' Odd');
                $typp = FALSE;
            }
            else:
            {        
            }
            endif;

        if (in_array($zahl, $leftsec) && $zahl != 0):
        {
            echo(' Left segment');
            $secleft = TRUE;
        }
        elseif (in_array($zahl, $midsec) && $zahl != 0):
        {
            echo(' Mid segment');
            $secmid = TRUE;
        }
        elseif (in_array($zahl, $rightsec) && $zahl != 0):
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
            echo('<p align="center"><font color="darkgreen">0 Green King</font>');
        }
        endif;

        if ($zahl >= 1 && $zahl <= 12 and $zahl != 0):
        {
            echo(' /1-12');
            $sec112 = TRUE;
        }
        elseif ($zahl > 12 && $zahl <= 25 and $zahl != 0):
        {
            echo(' /13-24');
            $sec1324 = TRUE;
        }
        elseif ($zahl > 25 && $zahl <= 36 and $zahl != 0):
        {
            echo(' /25-36');
            $sec2536 = TRUE;
        }
        else:
        {
            
        }
        endif;

        $ok1 = isset($_GET['1']) ? isset($_GET['1']) : NULL;

echo('<table class="inlineTablestyle"><tr></font>');
echo('<font color="white" size="3">');

        if (intval($zahl) === 1 && intval($zahl) === intval($ok1)): 
        {
            $wonzahl = $bets->betZahl * 36;
            echo('<p align="center"><font color="red">' . $zahl . '</font> came ' . $wonzahl . '€</p>');
        }
        elseif (isset($_GET['3']) && intval($zahl) === 3 && ($_GET['3'] === '3')): 
        {
            $wonzahl = $bets->betZahl * 36;
            echo('<p align="center"><font color="red">' . $zahl . '</font> came ' . $wonzahl . '€</p>');
        }
        elseif (isset($_GET['0']) && intval($zahl) === 0 && ($_GET['0'] === '0')): 
        {
            $wonzahl = $bets->betZahl * 36;
            echo('<p align="center"><font color="green">' . $zahl . '</font> came ' . $wonzahl . '€</p>');
        }
        elseif (isset($_GET['2']) && intval($zahl) === 2 && ($_GET['2'] === '2')): 
        {
            $wonzahl = $bets->betZahl * 36;
            echo('<p align="center"><font color="black">' . $zahl . '</font> came ' . $wonzahl . '€</p>');
        }
        elseif (isset($_GET['4']) && intval($zahl) === 4 && ($_GET['4'] === '4')): 
        {
            $wonzahl = $bets->betZahl * 36;
            echo('<p align="center"><font color="black">' . $zahl . '</font> came ' . $wonzahl . '€</p>');
        }
        elseif (isset($_GET['5']) && intval($zahl) === 5 && ($_GET['5'] === '5')): 
        {
            $wonzahl = $bets->betZahl * 36;
            echo('<p align="center"><font color="red">' . $zahl . '</font> came ' . $wonzahl . '€</p>');
        }
        elseif (isset($_GET['7']) && intval($zahl) === 7 && ($_GET['7'] === '7')): 
        {
            $wonzahl = $bets->betZahl * 36;
            echo('<p align="center"><font color="red">' . $zahl . '</font> came ' . $wonzahl . '€</p>');
        }
        elseif (isset($_GET['9']) && intval($zahl) === 9 && ($_GET['9'] === '9')): 
        {
            $wonzahl = $bets->betZahl * 36;
            echo('<p align="center"><font color="red">' . $zahl . '</font> came ' . $wonzahl . '€</p>');
        }
        elseif (isset($_GET['6']) && intval($zahl) === 6 && ($_GET['6'] === '6')): 
        {
            $wonzahl = $bets->betZahl * 36;
            echo('<p align="center"><font color="black">' . $zahl . '</font> came ' . $wonzahl . '€</p>');
        }
        elseif (isset($_GET['8']) && intval($zahl) === 8 && ($_GET['8'] === '8')): 
        {
            $wonzahl = $bets->betZahl * 36;
            echo('<p align="center"><font color="black">' . $zahl . '</font> came ' . $wonzahl . '€</p>');
        }
        elseif (isset($_GET['10']) && intval($zahl) === 10 && ($_GET['10'] === '10')): 
        {
            $wonzahl = $bets->betZahl * 36;
            echo('<p align="center"><font color="black">' . $zahl . '</font> came ' . $wonzahl . '€</p>');
        }
        elseif (isset($_GET['12']) && intval($zahl) === 12 && ($_GET['12'] === '12')): 
        {
            $wonzahl = $bets->betZahl * 36;
            echo('<p align="center"><font color="red">' . $zahl . '</font> came ' . $wonzahl . '€</p>');
        }
        elseif (isset($_GET['11']) && intval($zahl) === 11 && ($_GET['11'] === '11')): 
        {
            $wonzahl = $bets->betZahl * 36;
            echo('<p align="center"><font color="black">' . $zahl . '</font> came ' . $wonzahl . '€</p>');
        }
        elseif (isset($_GET['14']) && intval($zahl) === 14 && ($_GET['14'] === '14')): 
        {
            $wonzahl = $bets->betZahl * 36;
            echo('<p align="center"><font color="red">' . $zahl . '</font> came ' . $wonzahl . '€</p>');
        }
        elseif (isset($_GET['13']) && intval($zahl) === 13 && ($_GET['13'] === '13')): 
        {
            $wonzahl = $bets->betZahl * 36;
            echo('<p align="center"><font color="black">' . $zahl . '</font> came ' . $wonzahl . '€</p>');
        }
        elseif (isset($_GET['15']) && intval($zahl) === 15 && ($_GET['15'] === '15')): 
        {
            $wonzahl = $bets->betZahl * 36;
            echo('<p align="center"><font color="black">' . $zahl . '</font> came ' . $wonzahl . '€</p>');
        }
        elseif (isset($_GET['17']) && intval($zahl) === 17 && ($_GET) ($_GET['17'] === '17')):
        {
            $wonzahl = $bets->betZahl * 36;
            echo('<p align="center"><font color="black">' . $zahl . '</font> came ' . $wonzahl . '€</p>');
        }
        elseif (isset($_GET['16']) && intval($zahl) === 16 && ($_GET['16'] === '16')): 
        {
            $wonzahl = $bets->betZahl * 36;
            echo('<p align="center"><font color="red">' . $zahl . '</font> came ' . $wonzahl . '€</p>');
        }
        elseif (isset($_GET['20']) && intval($zahl) === 20 && ($_GET['20'] === '20')): 
        {
            $wonzahl = $bets->betZahl * 36;
            echo('<p align="center"><font color="black">' . $zahl . '</font> came ' . $wonzahl . '€</p>');
        }
        elseif (isset($_GET['18']) && intval($zahl) === 18 && ($_GET['18'] === '18')): 
        {
            $wonzahl = $bets->betZahl * 36;
            echo('<p align="center"><font color="red">' . $zahl . '</font> came ' . $wonzahl . '€</p>');
        }
        elseif (isset($_GET['22']) && intval($zahl) === 22 && ($_GET['22'] === '22')): 
        {
            $wonzahl = $bets->betZahl * 36;
            echo('<p align="center"><font color="black">' . $zahl . '</font> came ' . $wonzahl . '€</p>');
        }
        elseif (isset($_GET['24']) && intval($zahl) === 24 && ($_GET['24'] === '24')): 
        {
            $wonzahl = $bets->betZahl * 36;
            echo('<p align="center"><font color="black">' . $zahl . '</font> came ' . $wonzahl . '€</p>');
        }
        elseif (isset($_GET['26']) && intval($zahl) === 26 && ($_GET['26'] === '26')): 
        {
            $wonzahl = $bets->betZahl * 36;
            echo('<p align="center"><font color="black">' . $zahl . '</font> came ' . $wonzahl . '€</p>');
        }
        elseif (isset($_GET['19']) && intval($zahl) === 19 && ($_GET['19'] === '19')): 
        {
            $wonzahl = $bets->betZahl * 36;
            echo('<p align="center"><font color="red">' . $zahl . '</font> came ' . $wonzahl . '€</p>');
        }
        elseif (isset($_GET['21']) && intval($zahl) === 21 && ($_GET['21'] === '21')): 
        {
            $wonzahl = $bets->betZahl * 36;
            echo('<p align="center"><font color="red">' . $zahl . '</font> came ' . $wonzahl . '€</p>');
        }
        elseif (isset($_GET['23']) && intval($zahl) === 23 && ($_GET['23'] === '23')): 
        {
            $wonzahl = $bets->betZahl * 36;
            echo('<p align="center"><font color="red">' . $zahl . '</font> came ' . $wonzahl . '€</p>');
        }
        elseif (isset($_GET['28']) && intval($zahl) === 28 && ($_GET['28'] === '28')): 
        {
            $wonzahl = $bets->betZahl * 36;
            echo('<p align="center"><font color="black">' . $zahl . '</font> came ' . $wonzahl . '€</p>');
        }
        elseif (isset($_GET['29']) && intval($zahl) === 29 && ($_GET['29'] === '29')): 
        {
            $wonzahl = $bets->betZahl * 36;
            echo('<p align="center"><font color="black">' . $zahl . '</font> came ' . $wonzahl . '€</p>');
        }
        elseif (isset($_GET['31']) && intval($zahl) === 31 && ($_GET['31'] === '31')): 
        {
            $wonzahl = $bets->betZahl * 36;
            echo('<p align="center"><font color="black">' . $zahl . '</font> came ' . $wonzahl . '€</p>');
        }
        elseif (isset($_GET['25']) && intval($zahl) === 25 && ($_GET['25'] === '25')): 
        {
            $wonzahl = $bets->betZahl * 36;
            echo('<p align="center"><font color="red">' . $zahl . '</font> came ' . $wonzahl . '€</p>');
        }
        elseif (isset($_GET['27']) && intval($zahl) === 27 && ($_GET['27'] === '27')): 
        {
            $wonzahl = $bets->betZahl * 36;
            echo('<p align="center"><font color="red">' . $zahl . '</font> came ' . $wonzahl . '€</p>');
        }
        elseif (isset($_GET['30']) && intval($zahl) === 30 && ($_GET['30'] === '30')): 
        {
            $wonzahl = $bets->betZahl * 36;
            echo('<p align="center"><font color="red">' . $zahl . '</font> came ' . $wonzahl . '€</p>');
        }
        elseif (isset($_GET['33']) && intval($zahl) === 33 && ($_GET['33'] === '33')):
        {
            $wonzahl = $bets->betZahl * 36;
            echo('<p align="center"><font color="black">' . $zahl . '</font> came ' . $wonzahl . '€</p>');
        }
        elseif (isset($_GET['35']) && intval($zahl) === 35 && ($_GET['35'] === '35')): 
        {
            $wonzahl = $bets->betZahl * 36;
            echo('<p align="center"><font color="black">' . $zahl . '</font> came ' . $wonzahl . '€</p>');
        }
        elseif (isset($_GET['34']) && intval($zahl) === 34 && ($_GET['34'] === '34')): 
        {
            $wonzahl = $bets->betZahl * 36;
            echo('<p align="center"><font color="red">' . $zahl . '</font> came ' . $wonzahl . '€</p>');
        }
        elseif (isset($_GET['36']) && intval($zahl) === 36 && ($_GET['36'] === '36')): 
        {
            $wonzahl = $bets->betZahl * 36;
            echo('<p align="center"><font color="red">' . $zahl . '</font> came ' . $wonzahl . '€</p>');
        }
        endif;

echo('<font size="2%" color="CCFFCC"><p align="center">');

        if (isset($_GET['typp']) && $typp === TRUE && $_GET['typp'] === 'even' && $bets->betTypp > 0):
            {
                $woneven = $bets->betTypp * 2;
                echo('<p align="center">won even: ' . $woneven . '€</p>');
            }
        elseif (isset($_GET['typp']) && $typp === FALSE && ($_GET['typp']) === 'odd'):
            {
                $woneven = $bets->betTypp * 2;
                echo('<p align="center">won odd: ' . $woneven . '€</p>');
            }
        endif;

        if (isset($_GET['checkcolor']) && $farbe === TRUE and ($_GET['checkcolor']) === "Red" && $bets->betFarbe > 0):
            {
                $wonred = $bets->betFarbe * 2;
                echo('<p align="center">won Red: ' . $wonred . '€</p>');
            }
        elseif (isset($_GET['checkcolor']) && $farbe === FALSE && (($_GET['checkcolor'])) === "Black" && $bets->betFarbe > 0):
            {
                $wonred = $bets->betFarbe * 2;
                echo('<p align="center">won Black: ' . $wonred . '€</p>');
            }
        else:
        {
            
        }
        endif;

        if ($seclow === TRUE && isset($_GET['checklow'])):
            {
                $wonlow = $bets->betLow * 2;
                echo('<p align="center">low section: ' . $wonlow . '€</p>');
            }
        elseif ($sechigh === TRUE && isset($_GET['checkhigh'])):
            {
                $wonhigh = $bets->betHigh * 2;
                echo('<p align="center">high section: ' . $wonhigh . '€</p>');
            }
        endif;        
        
        if ($sec112 === TRUE && isset($_GET['112'])):
            {
                $won112 = $bets->bet112 * 3;
                echo('<p align="center">(1-12): ' . $won112 . '€');
            }
        elseif ($sec1324 === TRUE && isset($_GET['1324'])):
            {
                $won1324 = $bets->bet1324 * 3;
                echo('<p align="center">(13-24): ' . $won1324 . '€');
            }
        elseif ($sec2536 === TRUE && isset($_GET['2536'])):
            {
                $won2536 = $bets->bet2536 * 3;
                echo('<p align="center">(25-36): ' . $won2536 . '€');
            }    
        endif;
     
        if ($secright === TRUE && isset($_GET['betright'])):
            {
                $wonright = $bets->betRight * 3;
                echo('<p align="center">right segment: ' . $wonright . '€');
            }
        elseif ($secleft === TRUE && isset($_GET['betleft'])):
            {
                $wonleft = $bets->betLeft * 3;
                echo('<p align="center">left segment: ' . $wonleft . '€');
            }
        elseif ($secmid === TRUE && isset($_GET['betmid'])):
            {
                $wonmid = $bets->betMid * 3;
                echo('<p align="center">mid segment: ' . $wonmid . '€');
            }    
        endif;
                
        
        $wontotal = $wonred + $woneven + $wonhigh + $wonlow + $won2536 + $won112 + $won1324 + $wonright + $wonleft + $wonmid + $wonzahl;
        $netto = ($wontotal - $betsAll);
       // $creditz = intval($creditz) + $netto;
        
     //echo($creditz);
        
        
        //fwrite($cre, $creditz);


       
        
      /*  var_dump($creditz);
       var_dump($cre);
       var_dump($winz); 
        */
        
        file_put_contents("creditcounter.csv", $netto, FILE_APPEND);
        //file_put_contents("creditcounter.csv", $filemess, FILE_APPEND); 
        
        
       

        echo('<p align="center"><font size="3%"> Won total: ' . $wontotal .  '</p>');
        echo('</p></td></tr></table></font>');  
       //echo('<p align="center"><font color="black">' . $netto . '</p>');
?>


    </body>
    <script>
        alert('Hello amk');
    </script>
</html>