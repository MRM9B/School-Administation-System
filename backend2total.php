<?php

$conn = mysqli_connect('localhost','root',"",'admin');

extract($_POST);


//--------------------------------------------------------------------------------------------


//-----------------------------------------------THE FIFTH TABLE------------------------------------------------------

if(isset($_POST['readrecord5'])){

	$data4 =  '<br><br><br>
					<table class="table table-bordered table-hover table-striped" style="width:1300px;margin-left:40px;">
						<tr  style="background: #131339; color:white;">
							<th style="width:8%;text-align: center;padding-top: 32px;">Niveau</th>
							<th colspan="3" style="width:18%;text-align: center;padding-top: 32px;">Identification du classe</th>
							<th style="width:10%;text-align: center;">Etudiants ayant la moyenne</th>
							<th style="width:10%;text-align: center;">Etudiants n&#039ayant pas la moyenne</th>
							<th style="width:10%;text-align: center;padding-top: 18px;">Moyenne la plus élevée</th>
							<th style="width:10%;text-align: center;padding-top: 18px;">Moyenne la plus faible</th>
							<th style="padding-top: 18px;text-align: center;">Moyenne de la classe</th>
							<th colspan="4" style="width:25% ;text-align: center;padding-top: 32px;">Distribution des moyennes</th>


						</tr>
						<TR>
							<TH></TH>
							<TH colspan="1">Masculin </TH> <TH>Féminin</TH> <TH>Total</TH>
							<TH colspan="5"></TH>
							
							<TH style="text-align: center;">00-04</TH><TH style="text-align: center;">05-06</TH><TH style="text-align: center;">07-08</TH><TH style="text-align: center;">09-10</TH>

						</TR>'; 
	//----------------------------------------c1-------------------------------------------
	$displayquery = "SELECT COUNT(*) AS `mas1` FROM `note_c1s2` where genre='Masculin'";
	$displayquery1 = "SELECT COUNT(*) AS `fem1` FROM `note_c1s2` where genre='Féminin'";
	$displayquery2 = "SELECT COUNT(*) AS `tot1` FROM `note_c1s2`";

	$displayquery3 = "SELECT COUNT(*) AS `hasmoy1` FROM `note_c1s2` where moyenne>=5";
	$displayquery4 = "SELECT COUNT(*) AS `hasnmoy1` FROM `note_c1s2` where moyenne<5";

	$displayquery5 = "SELECT MAX(moyenne) AS `max1` FROM `note_c1s2`"; 
	$displayquery6 = "SELECT MIN(moyenne) AS `min1` FROM `note_c1s2`";

	$displayquery7 = "SELECT round((SUM(moyenne)/COUNT(*)),2) AS `sum1` FROM `note_c1s2`";

	$displayquery8 = "SELECT COUNT(*) AS `count11` FROM `note_c1s2` where moyenne>=0 and moyenne<5";
	$displayquery9 = "SELECT COUNT(*) AS `count12` FROM `note_c1s2` where moyenne>=5 and moyenne<7";
	$displayquery10 = "SELECT COUNT(*) AS `count13` FROM `note_c1s2` where moyenne>=7 and moyenne<9";
	$displayquery11 = "SELECT COUNT(*) AS `count14` FROM `note_c1s2` where moyenne>=9";

//----------------------------------------c2-------------------------------------------
	$displayquer = "SELECT COUNT(*) AS `mas1` FROM `note_c2s2` where genre='Masculin'";
	$displayquery12 = "SELECT COUNT(*) AS `fem1` FROM `note_c2s2` where genre='Féminin'";
	$displayquery22 = "SELECT COUNT(*) AS `tot1` FROM `note_c2s2`";

	$displayquery32 = "SELECT COUNT(*) AS `hasmoy1` FROM `note_c2s2` where moyenne>=5";
	$displayquery42 = "SELECT COUNT(*) AS `hasnmoy1` FROM `note_c2s2` where moyenne<5";

	$displayquery52 = "SELECT MAX(moyenne) AS `max1` FROM `note_c2s2`"; 
	$displayquery62 = "SELECT MIN(moyenne) AS `min1` FROM `note_c2s2`";

	$displayquery72 = "SELECT round((SUM(moyenne)/COUNT(*)),2) AS `sum1` FROM `note_c2s2`";

	$displayquery82 = "SELECT COUNT(*) AS `count11` FROM `note_c2s2` where moyenne>=0 and moyenne<5";
	$displayquery92 = "SELECT COUNT(*) AS `count12` FROM `note_c2s2` where moyenne>=5 and moyenne<7";
	$displayquery102 = "SELECT COUNT(*) AS `count13` FROM `note_c2s2` where moyenne>=7 and moyenne<9";
	$displayquery112 = "SELECT COUNT(*) AS `count14` FROM `note_c2s2` where moyenne>=9";


	$result = mysqli_query($conn,$displayquery);
	$result1 = mysqli_query($conn,$displayquery1);
	$result2 = mysqli_query($conn,$displayquery2);
	$result3 = mysqli_query($conn,$displayquery3);
	$result4 = mysqli_query($conn,$displayquery4);
	$result5 = mysqli_query($conn,$displayquery5);
	$result6 = mysqli_query($conn,$displayquery6);
	$result7 = mysqli_query($conn,$displayquery7);
	$result8 = mysqli_query($conn,$displayquery8);
	$result9 = mysqli_query($conn,$displayquery9);
	$result10 = mysqli_query($conn,$displayquery10);
	$result11 = mysqli_query($conn,$displayquery11);


		$row = mysqli_fetch_assoc($result);
		$row1 = mysqli_fetch_assoc($result1);
		$row2 = mysqli_fetch_assoc($result2);

		$row3 = mysqli_fetch_assoc($result3);
		$row4 = mysqli_fetch_assoc($result4);
		$row5 = mysqli_fetch_assoc($result5);
		$row6 = mysqli_fetch_assoc($result6);
		$row7 = mysqli_fetch_assoc($result7);
		$row8 = mysqli_fetch_assoc($result8);
		$row9 = mysqli_fetch_assoc($result9);
		$row10 = mysqli_fetch_assoc($result10);
		$row11 = mysqli_fetch_assoc($result11);



//-----------------------------------------------------c2--------------------------------------
	$resul = mysqli_query($conn,$displayquer);
	$result12 = mysqli_query($conn,$displayquery12);
	$result22 = mysqli_query($conn,$displayquery22);
	$result32 = mysqli_query($conn,$displayquery32);
	$result42 = mysqli_query($conn,$displayquery42);
	$result52 = mysqli_query($conn,$displayquery52);
	$result62 = mysqli_query($conn,$displayquery62);
	$result72 = mysqli_query($conn,$displayquery72);
	$result82 = mysqli_query($conn,$displayquery82);
	$result92 = mysqli_query($conn,$displayquery92);
	$result102 = mysqli_query($conn,$displayquery102);
	$result112 = mysqli_query($conn,$displayquery112);


		$ro = mysqli_fetch_assoc($resul);
		$row12 = mysqli_fetch_assoc($result12);
		$row22 = mysqli_fetch_assoc($result22);

		$row32 = mysqli_fetch_assoc($result32);
		$row42 = mysqli_fetch_assoc($result42);
		$row52 = mysqli_fetch_assoc($result52);
		$row62 = mysqli_fetch_assoc($result62);
		$row72 = mysqli_fetch_assoc($result72);
		$row82 = mysqli_fetch_assoc($result82);
		$row92 = mysqli_fetch_assoc($result92);
		$row102 = mysqli_fetch_assoc($result102);
		$row112 = mysqli_fetch_assoc($result112);





//----------------------------------------c3-------------------------------------------
	$displayqueryc3 = "SELECT COUNT(*) AS `mas1` FROM `note_c3s2` where genre='Masculin'";
	$displayqueryc31 = "SELECT COUNT(*) AS `fem1` FROM `note_c3s2` where genre='Féminin'";
	$displayqueryc32 = "SELECT COUNT(*) AS `tot1` FROM `note_c3s2`";

	$displayqueryc33 = "SELECT COUNT(*) AS `hasmoy1` FROM `note_c3s2` where moyenne>=5";
	$displayqueryc34 = "SELECT COUNT(*) AS `hasnmoy1` FROM `note_c3s2` where moyenne<5";

	$displayqueryc35 = "SELECT MAX(moyenne) AS `max1` FROM `note_c3s2`"; 
	$displayqueryc36 = "SELECT MIN(moyenne) AS `min1` FROM `note_c3s2`";

	$displayqueryc37 = "SELECT round((SUM(moyenne)/COUNT(*)),2) AS `sum1` FROM `note_c3s2`";

	$displayqueryc38 = "SELECT COUNT(*) AS `count11` FROM `note_c3s2` where moyenne>=0 and moyenne<5";
	$displayqueryc39 = "SELECT COUNT(*) AS `count12` FROM `note_c3s2` where moyenne>=5 and moyenne<7";
	$displayqueryc310 = "SELECT COUNT(*) AS `count13` FROM `note_c3s2` where moyenne>=7 and moyenne<9";
	$displayqueryc311 = "SELECT COUNT(*) AS `count14` FROM `note_c3s2` where moyenne>=9";


	$resultc3 = mysqli_query($conn,$displayqueryc3);
	$resultc31 = mysqli_query($conn,$displayqueryc31);
	$resultc32 = mysqli_query($conn,$displayqueryc32);
	$resultc33 = mysqli_query($conn,$displayqueryc33);
	$resultc34 = mysqli_query($conn,$displayqueryc34);
	$resultc35 = mysqli_query($conn,$displayqueryc35);
	$resultc36 = mysqli_query($conn,$displayqueryc36);
	$resultc37 = mysqli_query($conn,$displayqueryc37);
	$resultc38 = mysqli_query($conn,$displayqueryc38);
	$resultc39 = mysqli_query($conn,$displayqueryc39);
	$resultc310 = mysqli_query($conn,$displayqueryc310);
	$resultc311 = mysqli_query($conn,$displayqueryc311);


		$rowc3 = mysqli_fetch_assoc($resultc3);
		$rowc31 = mysqli_fetch_assoc($resultc31);
		$rowc32 = mysqli_fetch_assoc($resultc32);
		$rowc33 = mysqli_fetch_assoc($resultc33);
		$rowc34 = mysqli_fetch_assoc($resultc34);
		$rowc35 = mysqli_fetch_assoc($resultc35);
		$rowc36 = mysqli_fetch_assoc($resultc36);
		$rowc37 = mysqli_fetch_assoc($resultc37);
		$rowc38 = mysqli_fetch_assoc($resultc38);
		$rowc39 = mysqli_fetch_assoc($resultc39);
		$rowc310 = mysqli_fetch_assoc($resultc310);
		$rowc311 = mysqli_fetch_assoc($resultc311);


		//----------------------------------------c4-------------------------------------------
	$displayqueryc4 = "SELECT COUNT(*) AS `mas1` FROM `note_c4s2` where genre='Masculin'";
	$displayqueryc41 = "SELECT COUNT(*) AS `fem1` FROM `note_c4s2` where genre='Féminin'";
	$displayqueryc42 = "SELECT COUNT(*) AS `tot1` FROM `note_c4s2`";

	$displayqueryc43 = "SELECT COUNT(*) AS `hasmoy1` FROM `note_c4s2` where moyenne>=5";
	$displayqueryc44 = "SELECT COUNT(*) AS `hasnmoy1` FROM `note_c4s2` where moyenne<5";

	$displayqueryc45 = "SELECT MAX(moyenne) AS `max1` FROM `note_c4s2`"; 
	$displayqueryc46 = "SELECT MIN(moyenne) AS `min1` FROM `note_c4s2`";

	$displayqueryc47 = "SELECT round((SUM(moyenne)/COUNT(*)),2) AS `sum1` FROM `note_c4s2`";

	$displayqueryc48 = "SELECT COUNT(*) AS `count11` FROM `note_c4s2` where moyenne>=0 and moyenne<5";
	$displayqueryc49 = "SELECT COUNT(*) AS `count12` FROM `note_c4s2` where moyenne>=5 and moyenne<7";
	$displayqueryc410 = "SELECT COUNT(*) AS `count13` FROM `note_c4s2` where moyenne>=7 and moyenne<9";
	$displayqueryc411 = "SELECT COUNT(*) AS `count14` FROM `note_c4s2` where moyenne>=9";


	$resultc4 = mysqli_query($conn,$displayqueryc4);
	$resultc41 = mysqli_query($conn,$displayqueryc41);
	$resultc42 = mysqli_query($conn,$displayqueryc42);
	$resultc43 = mysqli_query($conn,$displayqueryc43);
	$resultc44 = mysqli_query($conn,$displayqueryc44);
	$resultc45 = mysqli_query($conn,$displayqueryc45);
	$resultc46 = mysqli_query($conn,$displayqueryc46);
	$resultc47 = mysqli_query($conn,$displayqueryc47);
	$resultc48 = mysqli_query($conn,$displayqueryc48);
	$resultc49 = mysqli_query($conn,$displayqueryc49);
	$resultc410 = mysqli_query($conn,$displayqueryc410);
	$resultc411 = mysqli_query($conn,$displayqueryc411);


		$rowc4 = mysqli_fetch_assoc($resultc4);
		$rowc41 = mysqli_fetch_assoc($resultc41);
		$rowc42 = mysqli_fetch_assoc($resultc42);
		$rowc43 = mysqli_fetch_assoc($resultc43);
		$rowc44 = mysqli_fetch_assoc($resultc44);
		$rowc45 = mysqli_fetch_assoc($resultc45);
		$rowc46 = mysqli_fetch_assoc($resultc46);
		$rowc47 = mysqli_fetch_assoc($resultc47);
		$rowc48 = mysqli_fetch_assoc($resultc48);
		$rowc49 = mysqli_fetch_assoc($resultc49);
		$rowc410 = mysqli_fetch_assoc($resultc410);
		$rowc411 = mysqli_fetch_assoc($resultc411);



			//----------------------------------------c5-------------------------------------------
	$displayqueryc5 = "SELECT COUNT(*) AS `mas1` FROM `note_c5s2` where genre='Masculin'";
	$displayqueryc51 = "SELECT COUNT(*) AS `fem1` FROM `note_c5s2` where genre='Féminin'";
	$displayqueryc52 = "SELECT COUNT(*) AS `tot1` FROM `note_c5s2`";

	$displayqueryc53 = "SELECT COUNT(*) AS `hasmoy1` FROM `note_c5s2` where moyenne>=5";
	$displayqueryc54 = "SELECT COUNT(*) AS `hasnmoy1` FROM `note_c5s2` where moyenne<5";

	$displayqueryc55 = "SELECT MAX(moyenne) AS `max1` FROM `note_c5s2`"; 
	$displayqueryc56 = "SELECT MIN(moyenne) AS `min1` FROM `note_c5s2`";

	$displayqueryc57 = "SELECT round((SUM(moyenne)/COUNT(*)),2) AS `sum1` FROM `note_c5s2`";

	$displayqueryc58 = "SELECT COUNT(*) AS `count11` FROM `note_c5s2` where moyenne>=0 and moyenne<5";
	$displayqueryc59 = "SELECT COUNT(*) AS `count12` FROM `note_c5s2` where moyenne>=5 and moyenne<7";
	$displayqueryc510 = "SELECT COUNT(*) AS `count13` FROM `note_c5s2` where moyenne>=7 and moyenne<9";
	$displayqueryc511 = "SELECT COUNT(*) AS `count14` FROM `note_c5s2` where moyenne>=9";


	$resultc5 = mysqli_query($conn,$displayqueryc5);
	$resultc51 = mysqli_query($conn,$displayqueryc51);
	$resultc52 = mysqli_query($conn,$displayqueryc52);
	$resultc53 = mysqli_query($conn,$displayqueryc53);
	$resultc54 = mysqli_query($conn,$displayqueryc54);
	$resultc55 = mysqli_query($conn,$displayqueryc55);
	$resultc56 = mysqli_query($conn,$displayqueryc56);
	$resultc57 = mysqli_query($conn,$displayqueryc57);
	$resultc58 = mysqli_query($conn,$displayqueryc58);
	$resultc59 = mysqli_query($conn,$displayqueryc59);
	$resultc510 = mysqli_query($conn,$displayqueryc510);
	$resultc511 = mysqli_query($conn,$displayqueryc511);


		$rowc5 = mysqli_fetch_assoc($resultc5);
		$rowc51 = mysqli_fetch_assoc($resultc51);
		$rowc52 = mysqli_fetch_assoc($resultc52);
		$rowc53 = mysqli_fetch_assoc($resultc53);
		$rowc54 = mysqli_fetch_assoc($resultc54);
		$rowc55 = mysqli_fetch_assoc($resultc55);
		$rowc56 = mysqli_fetch_assoc($resultc56);
		$rowc57 = mysqli_fetch_assoc($resultc57);
		$rowc58 = mysqli_fetch_assoc($resultc58);
		$rowc59 = mysqli_fetch_assoc($resultc59);
		$rowc510 = mysqli_fetch_assoc($resultc510);
		$rowc511 = mysqli_fetch_assoc($resultc511);


		//----------------------------------------c6-------------------------------------------
	$displayqueryc6 = "SELECT COUNT(*) AS `mas1` FROM `note_c6s2` where genre='Masculin'";
	$displayqueryc61 = "SELECT COUNT(*) AS `fem1` FROM `note_c6s2` where genre='Féminin'";
	$displayqueryc62 = "SELECT COUNT(*) AS `tot1` FROM `note_c6s2`";

	$displayqueryc63 = "SELECT COUNT(*) AS `hasmoy1` FROM `note_c6s2` where moyenne>=5";
	$displayqueryc64 = "SELECT COUNT(*) AS `hasnmoy1` FROM `note_c6s2` where moyenne<5";

	$displayqueryc65 = "SELECT MAX(moyenne) AS `max1` FROM `note_c6s2`"; 
	$displayqueryc66 = "SELECT MIN(moyenne) AS `min1` FROM `note_c6s2`";

	$displayqueryc67 = "SELECT round((SUM(moyenne)/COUNT(*)),2) AS `sum1` FROM `note_c6s2`";

	$displayqueryc68 = "SELECT COUNT(*) AS `count11` FROM `note_c6s2` where moyenne>=0 and moyenne<5";
	$displayqueryc69 = "SELECT COUNT(*) AS `count12` FROM `note_c6s2` where moyenne>=5 and moyenne<7";
	$displayqueryc610 = "SELECT COUNT(*) AS `count13` FROM `note_c6s2` where moyenne>=7 and moyenne<9";
	$displayqueryc611 = "SELECT COUNT(*) AS `count14` FROM `note_c6s2` where moyenne>=9";


	$resultc6 = mysqli_query($conn,$displayqueryc6);
	$resultc61 = mysqli_query($conn,$displayqueryc61);
	$resultc62 = mysqli_query($conn,$displayqueryc62);
	$resultc63 = mysqli_query($conn,$displayqueryc63);
	$resultc64 = mysqli_query($conn,$displayqueryc64);
	$resultc65 = mysqli_query($conn,$displayqueryc65);
	$resultc66 = mysqli_query($conn,$displayqueryc66);
	$resultc67 = mysqli_query($conn,$displayqueryc67);
	$resultc68 = mysqli_query($conn,$displayqueryc68);
	$resultc69 = mysqli_query($conn,$displayqueryc69);
	$resultc610 = mysqli_query($conn,$displayqueryc610);
	$resultc611 = mysqli_query($conn,$displayqueryc611);


		$rowc6 = mysqli_fetch_assoc($resultc6);
		$rowc61 = mysqli_fetch_assoc($resultc61);
		$rowc62 = mysqli_fetch_assoc($resultc62);
		$rowc63 = mysqli_fetch_assoc($resultc63);
		$rowc64 = mysqli_fetch_assoc($resultc64);
		$rowc65 = mysqli_fetch_assoc($resultc65);
		$rowc66 = mysqli_fetch_assoc($resultc66);
		$rowc67 = mysqli_fetch_assoc($resultc67);
		$rowc68 = mysqli_fetch_assoc($resultc68);
		$rowc69 = mysqli_fetch_assoc($resultc69);
		$rowc610 = mysqli_fetch_assoc($resultc610);
		$rowc611 = mysqli_fetch_assoc($resultc611);


		 $data4 .= '<td style="font-weight:bold;">Niveau 1</td>
		 			<td>'.$row['mas1'].'</td>
		 			<td>'.$row1['fem1'].'</td>
		 			<td>'.$row2['tot1'].'</td>
		 			<td>'.$row3['hasmoy1'].'</td>
		 			<td>'.$row4['hasnmoy1'].'</td>
		 			<td>'.$row5['max1'].'</td>
		 			<td>'.$row6['min1'].'</td>
		 			<td>'.$row7['sum1'].'</td>
		 			<td>'.$row8['count11'].'</td>
		 			<td>'.$row9['count12'].'</td>
		 			<td>'.$row10['count13'].'</td>
		 			<td>'.$row11['count14'].'</td>

		 			<tr><td style="font-weight:bold;">Niveau 2</td>
		 			<td>'.$ro['mas1'].'</td>
		 			<td>'.$row12['fem1'].'</td>
		 			<td>'.$row22['tot1'].'</td>
		 			<td>'.$row32['hasmoy1'].'</td>
		 			<td>'.$row42['hasnmoy1'].'</td>
		 			<td>'.$row52['max1'].'</td>
		 			<td>'.$row62['min1'].'</td>
		 			<td>'.$row72['sum1'].'</td>
		 			<td>'.$row82['count11'].'</td>
		 			<td>'.$row92['count12'].'</td>
		 			<td>'.$row102['count13'].'</td>
		 			<td>'.$row112['count14'].'</td></tr>

					<tr><td style="font-weight:bold;">Niveau 3</td>
		 			<td>'.$rowc3['mas1'].'</td>
		 			<td>'.$rowc31['fem1'].'</td>
		 			<td>'.$rowc32['tot1'].'</td>
		 			<td>'.$rowc33['hasmoy1'].'</td>
		 			<td>'.$rowc34['hasnmoy1'].'</td>
		 			<td>'.$rowc35['max1'].'</td>
		 			<td>'.$rowc36['min1'].'</td>
		 			<td>'.$rowc37['sum1'].'</td>
		 			<td>'.$rowc38['count11'].'</td>
		 			<td>'.$rowc39['count12'].'</td>
		 			<td>'.$rowc310['count13'].'</td>
		 			<td>'.$rowc311['count14'].'</td></tr>
		 			
					<tr><td style="font-weight:bold;">Niveau 4</td>
		 			<td>'.$rowc4['mas1'].'</td>
		 			<td>'.$rowc41['fem1'].'</td>
		 			<td>'.$rowc42['tot1'].'</td>
		 			<td>'.$rowc43['hasmoy1'].'</td>
		 			<td>'.$rowc44['hasnmoy1'].'</td>
		 			<td>'.$rowc45['max1'].'</td>
		 			<td>'.$rowc46['min1'].'</td>
		 			<td>'.$rowc47['sum1'].'</td>
		 			<td>'.$rowc48['count11'].'</td>
		 			<td>'.$rowc49['count12'].'</td>
		 			<td>'.$rowc410['count13'].'</td>
		 			<td>'.$rowc411['count14'].'</td></tr>
									

					<tr><td style="font-weight:bold;">Niveau 5</td>
		 			<td>'.$rowc5['mas1'].'</td>
		 			<td>'.$rowc51['fem1'].'</td>
		 			<td>'.$rowc52['tot1'].'</td>
		 			<td>'.$rowc53['hasmoy1'].'</td>
		 			<td>'.$rowc54['hasnmoy1'].'</td>
		 			<td>'.$rowc55['max1'].'</td>
		 			<td>'.$rowc56['min1'].'</td>
		 			<td>'.$rowc57['sum1'].'</td>
		 			<td>'.$rowc58['count11'].'</td>
		 			<td>'.$rowc59['count12'].'</td>
		 			<td>'.$rowc510['count13'].'</td>
		 			<td>'.$rowc511['count14'].'</td></tr>

		 			<tr><td style="font-weight:bold;">Niveau 6</td>
		 			<td>'.$rowc6['mas1'].'</td>
		 			<td>'.$rowc61['fem1'].'</td>
		 			<td>'.$rowc62['tot1'].'</td>
		 			<td>'.$rowc63['hasmoy1'].'</td>
		 			<td>'.$rowc64['hasnmoy1'].'</td>
		 			<td>'.$rowc65['max1'].'</td>
		 			<td>'.$rowc66['min1'].'</td>
		 			<td>'.$rowc67['sum1'].'</td>
		 			<td>'.$rowc68['count11'].'</td>
		 			<td>'.$rowc69['count12'].'</td>
		 			<td>'.$rowc610['count13'].'</td>
		 			<td>'.$rowc611['count14'].'</td></tr>
		  </table>';
	    	echo $data4;
}
//--------------------------------------------------------------------------------------------

?>