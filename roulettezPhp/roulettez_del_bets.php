<!DOCTYPE html>
    <html>
        <head>
<!--         <script type="text/javascript" src="j4f.js">
                   
                   </script> -->
            <meta charset="UTF-8">
            <link rel="stylesheet" href="./Roulstyles.css">
                <title>
                    LAc Roullettez   
                </title>
              
        </head>
     
                <body background="2casino-roulette-table-chips-casino-concepts-besthqwallpapers.com-2048x1536.jpg" >
                    
                
<?php
    
    $visitcounter = "hits_visits.txt";
    $visitcounter = (file_exists("hits_visits.txt") ? unlink($visitcounter) : 0);

    $zahlcounter = ("zahlencounter.csv");
    $zahlcounter = (file_exists('zahlencounter.csv') ? unlink($zahlcounter) : 0);
        

    $winsumhistory = "winsum_history.csv";
    $winsumhistory = (file_exists("winsum_history.csv") ? unlink($winsumhistory) : 0);

    $cre = "creditcounter.csv";
    $cre = (file_exists('creditcounter.csv') ? unlink($cre) : 0);

    if(!file_exists($cre)) echo('<div><table align="center" id="footer"><br><br><br><br><br><br><br><br><br><br><br><br>
                                                                        <br><br><br><br><br<br><br><br><br><br><br><br><br>
                                                                        <br><br><br>><br><br><br><br><br><br><br><br><br><br><br>
                                                                        <br><br><br><br><br><br><br><br>
                                    <tr>
                                        <td>
                                            <p align="center"><font face="verdana" color="CCFFCC" size="2"> "Bets Reseted"<br><br></p>
                                            

                                            <p align="center">
                                            
                                            <p><font face="verdana" color="BB8855" size="2">return to table</p></form>
                                            <form action="roulettezlaxStop.php" method="get">
                                            <p  align="center">
                                            <input type="submit" name="Bet" value="Go Bet" width="2px" style=" color: white; 
                                            background-color:#110011; height: 20; width: 70px"</table></form>

                                    
                                    </table>');

?>
                  
</body>
</html>