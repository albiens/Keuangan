<?php
session_start();
          require_once("../phpscript/koneksi.php");
          $sql = "SELECT * FROM sums";
          $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                  $subTotalPemasukan = (int)str_replace(",","",$row["total"]);
                  $subTotalPengeluaran = (int)str_replace(",","",$row["jumlah"]);
                  $a = ($subTotalPemasukan - $subTotalPengeluaran);
                  if(strlen($a)==3){
                    $string = $a;
                    $replacement = ',';
                
                    $string =  substr_replace($string, $replacement, 0, 0); 
                }elseif(strlen($a)==4){
                    $string = $a;
                    $replacement = ',';
                
                    $string =  substr_replace($string, $replacement, 1, 0); 
                }elseif(strlen($a)==5){
                    $string = $a;
                    $replacement = ',';
                
                    $string =  substr_replace($string, $replacement, 2, 0); 
                }elseif(strlen($a)==6){
                    $string = $a;
                    $replacement = ',';
                
                    $string =  substr_replace($string, $replacement, 3, 0); 
                }elseif(strlen($a)==7){
                    $string = $a;
                    $replacement = ',';
                
                    $string = substr_replace($string, $replacement, 4, 0);
                    $string = substr_replace($string, $replacement, 1, 0); 
                }elseif(strlen($a)==8){
                    $string = $a;
                    $replacement = ',';
                 
                    $string = substr_replace($string, $replacement, 5, 0);
                    $string =  substr_replace($string, $replacement, 2, 0); 
                }elseif(strlen($a)==9){
                    $string = $a;
                    $replacement = ',';
                    
                    $string = substr_replace($string, $replacement, 6, 0);
                    $string = substr_replace($string, $replacement, 3, 0); 
                }elseif(strlen($a)==10){
                    $string = $a;
                    $replacement = ',';
                    $string = substr_replace($string, $replacement, 7, 0);
                    $string = substr_replace($string, $replacement, 4, 0);
                    $string = substr_replace($string, $replacement, 1, 0); 
                }elseif(strlen($a)==11){
                    $string = $a;
                    $replacement = ',';
                    $string = substr_replace($string, $replacement, 8, 0);
                    $string = substr_replace($string, $replacement, 5, 0);
                    $string = substr_replace($string, $replacement, 2, 0); 
                }elseif(strlen($a)==12){
                    $string = $a;
                    $replacement = ',';
                    $string = substr_replace($string, $replacement, 9, 0);
                    $string = substr_replace($string, $replacement, 6, 0);
                    $string = substr_replace($string, $replacement, 3, 0); 
                }
                  echo 
                  "<tr>
                    <td>" . $row["Tahun_Bulan"] . "</td>
                    <td>" . $row["total"] . "</td>
                    <td>" . $row["tanggal"] . "</td>
                    <td>" . $row["jumlah"] . "</td>
                    <td>" . $string . "</td>
                    </tr>";
              }
              echo "</table>";
          } else {
              echo "0 results";
          }
          ?>