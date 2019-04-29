<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body style="background-color: lightcyan; color: darkblue">
            
            <b>
                <center>Wpisz swoje dane:</center>
            </b>
		<?php
			if( isset($_POST["id"]) ){
                                $id = $_POST["id"];
			        $nazwisko = $_POST["nazwisko"];	
                                $imie = $_POST["imie"];
				$miasto = $_POST["miasto"];
				$telefon = $_POST["telefon"];
                             //{
/*$nazwisko = $_POST["zmienna"];
print "W formularzu wpisano <B>$nazwisko</B>"; 
print "<br>";
print "W formularzu wpisano <B>$imie</B>"; 
print "<br>";
print "W formularzu wpisano <B>$telefon</B>";
print "<br>";
print "W formularzu wpisano <B>$miasto</B>";
"<br>";*/
//} 
				
				/*if( empty($ID) || empty( $Nazwisko ) || empty($Imie) || empty($Telefon) || empty($Miasto) ){
					echo "Wypełnij wszystkie pola";
				}else */{
					
					$conn = new mysqli("localhost", "root", "vertrigo", "cw");
					
					$odp = $conn->query("INSERT INTO tabela_kontakty(id, nazwisko, imie, miasto, telefon) VALUES ('$id' '$nazwisko', '$imie', '$miasto', '$telefon')");
echo "<br>";
					if($odp){
						echo "Udało się!";
					}else {
						echo "Nie udało się dodać użytkownika";
					}
					
					$conn->close();
                                        
        header("Refresh:2");
				}
				
			}
			
		?>
		
            <form method="POST" action="list.php"> 
		

			Nazwisko: <input name="nazwisko" type="text"> <br>
			Imie: <input name="imie" type="text"><br>
                        Miasto: <input name="miasto" type="text"><br>
                        Telefon: <input name="telefon" type="number"><br>
		
			<input type="submit" value="Zapisz">
		
		</form> 
            
		
	</body>
</html>
