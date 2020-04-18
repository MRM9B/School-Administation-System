<?php

$conn = mysqli_connect('localhost','root',"",'admin');

extract($_POST);

if(isset($_POST['readrecord'])){

	$data =  '<table class="table table-bordered table-hover" >
						<tr  style="background: #131339; color:white;">
							<th>N°</th>
							<th style="width:20%;">Nom et prénom</th>
							<th style="width:12%;">Numero Massar </th>
							<th>Genre</th>
							<th>Moyenne</th> 
							<th style="width:7%;">Ordre</th> 
							<th>Decision</th>
							<th>Editer</th>
							<th>Supprimer</th>
						</tr>'; 
//SELECT numero, lastname, massar,genre,moyenne,decision, FIND_IN_SET( moyenne, ( SELECT GROUP_CONCAT( moyenne ORDER BY moyenne DESC ) FROM note_c1s2 ) ) AS rank FROM note_c1s2

	$displayquery = "SELECT  numero, lastname, massar,genre,moyenne,decision, FIND_IN_SET( moyenne, ( SELECT  GROUP_CONCAT(DISTINCT moyenne ORDER BY moyenne DESC ) FROM note_c1s2 ) ) AS arrangement FROM `note_c1s2`"; 

	$result = mysqli_query($conn,$displayquery);


	if(mysqli_num_rows($result) > 0){

			while ($row = mysqli_fetch_array($result)) {
				
				$data .= '<tr id="tab">   
					<td>'.$row['numero'].'</td>
					<td>'.$row['lastname'].'</td>
					<td>'.$row['massar'].'</td>
					<td>'.$row['genre'].'</td>
					<td>'.$row['moyenne'].'</td>
					<td>'.$row['arrangement'].'</td>
					<td>'.$row['decision'].'</td>
					<td>
						<button onclick="GetUserDetails('.$row['numero'].')" class="btn btn-success" style="background:#8c93ad;border-color:#8c93ad;">Edit</button>
					</td>
					<td>
						<button onclick="DeleteUser('.$row['numero'].')" class="btn btn-danger" style="background:#ed9a2f;border-color:#ed9a2f;">Delete</button>
					</td>
	    		</tr>';

			}
		} 
		 $data .= '</table>';
	    	echo $data;
}

//----------------------------------------------------Matieres---------------------------------------------------------

//---------------------------------------------THE SECOND TABLE -----------------------------------------------------

if(isset($_POST['readrecord2'])){

	$data2 =  '<table class="table table-bordered table-hover" >
						<tr  style="background: #131339; color:white;">
							<th>Nombre des étudiants</th>
							<th>Feminin</th>
							<th>Masculin </th>
						</tr>'; 

	$displayquery = "SELECT COUNT(*) AS `count` FROM `note_c1s2` "; 
	$displayquery2 = "SELECT COUNT(*) AS `countfeminin` FROM `note_c1s2` where genre='Féminin' "; 
	$displayquery3 = "SELECT COUNT(*) AS `countmasculin` FROM `note_c1s2` where genre='Masculin' "; 


	$result = mysqli_query($conn,$displayquery);
	$result2 = mysqli_query($conn,$displayquery2);
	$result3 = mysqli_query($conn,$displayquery3);

		$row = mysqli_fetch_assoc($result);
		$row2 = mysqli_fetch_assoc($result2);
		$row3 = mysqli_fetch_assoc($result3);


		 $data2 .= '<td>'.$row['count'].'</td>
		 			<td>'.$row2['countfeminin'].'</td>
		 			<td>'.$row3['countmasculin'].'</td>

		  </table>';
	    	echo $data2;
}



//-----------------------------------------------THE THIRD TABLE------------------------------------------------------

if(isset($_POST['readrecord3'])){

	$data3 =  '<table class="table table-bordered table-hover" >
						<tr  style="background: #131339; color:white;">
							<th>Mention</th>
							<th>Encouragement</th>
							<th>Tableau d&#039honneur </th>
							<th>Alerte </th>
						</tr>'; 

	$displayquery =  "SELECT COUNT(*) AS `count1` FROM `note_c1s2`where decision='Mention' "; 
	$displayquery2 = "SELECT COUNT(*) AS `count2` FROM `note_c1s2` where decision='Encouragement' "; 
	$displayquery3 = "SELECT COUNT(*) AS `count3` FROM `note_c1s2` where decision='Tableau d honneur' "; 
	$displayquery4 = "SELECT COUNT(*) AS `count4` FROM `note_c1s2` where decision='Alerte' "; 


	$result = mysqli_query($conn,$displayquery);
	$result2 = mysqli_query($conn,$displayquery2);
	$result3 = mysqli_query($conn,$displayquery3);
	$result4 = mysqli_query($conn,$displayquery4);

		$row = mysqli_fetch_assoc($result);
		$row2 = mysqli_fetch_assoc($result2);
		$row3 = mysqli_fetch_assoc($result3);
		$row4 = mysqli_fetch_assoc($result4);


		 $data3 .= '<td>'.$row['count1'].'</td>
		 			<td>'.$row2['count2'].'</td>
		 			<td>'.$row3['count3'].'</td>
		 			<td>'.$row4['count4'].'</td>

		  </table>';
	    	echo $data3;
}



//-----------------------------------------------THE FOURTH TABLE------------------------------------------------------

if(isset($_POST['readrecord4'])){

	$data4 =  '<table class="table table-bordered table-hover" >
						<tr  style="background: #131339; color:white;">
							<th>Moyenne la plus élevée</th>
							<th>Moyenne la plus faible</th>
							<th>Moyenne obsérvé </th>
							<th>Etudiants ayant une moyenne inferieure à 5</th>
							<th>Pourcentage</th>



						</tr>'; 

	$displayquery = "SELECT MAX(moyenne) AS `maxx` FROM `note_c1s2`"; 
	$displayquery2 = "SELECT MIN(moyenne) AS `minn` FROM `note_c1s2`"; 

	$displayquery7 = "SELECT round((SUM(moyenne)/COUNT(*)),2) AS `sum1` FROM `note_c1s2`";

	$displayquery4 = "SELECT COUNT(*) AS `inferier` FROM `note_c1s2` where moyenne<5 "; 
	$displayqueryy = "SELECT round(((SELECT COUNT(*) AS `count1` FROM `note_c1s2` where moyenne<5) *100 / (SELECT count( * ) FROM `note_c1s2`)),2) AS percent"; 



	$result = mysqli_query($conn,$displayquery);
	$result2 = mysqli_query($conn,$displayquery2);
	//$result3 = mysqli_query($conn,$displayquery3);
	$result4 = mysqli_query($conn,$displayquery4);
	$result7 = mysqli_query($conn,$displayquery7);
	$resultt = mysqli_query($conn,$displayqueryy);


		$row = mysqli_fetch_assoc($result);
		$row2 = mysqli_fetch_assoc($result2);
		//$row3 = mysqli_fetch_assoc($result3);
		$row4 = mysqli_fetch_assoc($result4);
		$row7 = mysqli_fetch_assoc($result7);
		$roww = mysqli_fetch_assoc($resultt);


		 $data4 .= '<td>'.$row['maxx'].'</td>
		 			<td>'.$row2['minn'].'</td>
		 			<td>'.$row7['sum1'].'</td>
		 			<td>'.$row4['inferier'].'</td>
		 			<td>'.$roww['percent'].' %</td>


		  </table>';
	    	echo $data4;
}
//--------------------------------------------------------------------------------------------


//-----------------------------------------------THE FIFTH TABLE------------------------------------------------------

if(isset($_POST['readrecord5'])){

	$data4 =  '<table class="table table-bordered table-hover" >
						<tr  style="background: #131339; color:white;">
							<th></th>
							<th>De</th>
							<th>A</th>
							<th>Nombre</th>
							<th>Pourcentage</th>


						</tr>'; 

	$displayquery = "SELECT COUNT(*) AS `count1` FROM `note_c1s2` where moyenne>=0 and moyenne<5";

	$displayquery1 = "SELECT round(((SELECT COUNT(*) AS `count1` FROM `note_c1s2` where moyenne>0 and moyenne<5) *100 / (SELECT count( * ) FROM `note_c1s2`)),2) AS percent"; 




	$displayquery2 = "SELECT COUNT(*) AS `count2` FROM `note_c1s2` where moyenne>=5 and moyenne<7";

	$displayquery3 = "SELECT round(((SELECT COUNT(*) AS `count1` FROM `note_c1s2` where moyenne>=5 and moyenne<7) *100 / (SELECT count( * ) FROM `note_c1s2`)),2) AS percent2"; 



	
	$displayquery4 = "SELECT COUNT(*) AS `count3` FROM `note_c1s2` where moyenne>=7 and moyenne<10";

	$displayquery5 = "SELECT round(((SELECT COUNT(*) AS `count1` FROM `note_c1s2` where moyenne>=7 and moyenne<=10) *100 / (SELECT count( * ) FROM `note_c1s2`)),2) AS percent3";




	$result = mysqli_query($conn,$displayquery);
	$result1 = mysqli_query($conn,$displayquery1);

	$result2 = mysqli_query($conn,$displayquery2);
	$result3 = mysqli_query($conn,$displayquery3);
	$result4 = mysqli_query($conn,$displayquery4);
	$result5 = mysqli_query($conn,$displayquery5);

		$row = mysqli_fetch_assoc($result);
		$row1 = mysqli_fetch_assoc($result1);

		$row2 = mysqli_fetch_assoc($result2);

		$row3 = mysqli_fetch_assoc($result3);
		$row4 = mysqli_fetch_assoc($result4);
		$row5 = mysqli_fetch_assoc($result5);



		 $data4 .= '<td>Non controllé</td>
		 			<td>0</td>
		 			<td>4</td>
		 			<td>'.$row['count1'].'</td>
		 			<td>'.$row1['percent'].' %'.'</td>

					<tr><td>Intermédiaire</td>
		 			<td>5</td>
		 			<td>6</td>
		 			<td>'.$row2['count2'].'</td>
		 			<td>'.$row3['percent2'].' %'.'</td></tr>

		 			<tr><td>Controllé</td>
		 			<td>7</td>
		 			<td>10</td>
		 			<td>'.$row4['count3'].'</td>
		 			<td>'.$row5['percent3'].' %'.'</td></tr>					

		  </table>';
	    	echo $data4;
}
//--------------------------------------------------------------------------------------------
if(isset($_POST['numero']) && isset($_POST['lastname']) && isset($_POST['massar']) && isset($_POST['genre']) && isset($_POST['moyenne']) )
{

		if ($_POST['moyenne']>=8) {
				$decision="Mention";
				$query = " INSERT INTO `note_c1s2`(`numero`, `lastname`, `massar`, `genre`, `moyenne`, `decision`) VALUES ( '$numero',  '$lastname', '$massar','$genre', '$moyenne','$decision') ";
				mysqli_query($conn,$query);
			
		}
		elseif($_POST['moyenne']<8 && $_POST['moyenne']>=7) {

				$decision="Encouragement";
				$query = " INSERT INTO `note_c1s2`(`numero`, `lastname`, `massar`, `genre`, `moyenne`, `decision`) VALUES ( '$numero',  '$lastname', '$massar','$genre', '$moyenne','$decision') ";
				mysqli_query($conn,$query);
			
		}
		elseif($_POST['moyenne']<7 && $_POST['moyenne']>=6){
			$decision="Tableau d honneur";
				$query = " INSERT INTO `note_c1s2`(`numero`, `lastname`, `massar`, `genre`, `moyenne`, `decision`) VALUES ( '$numero',  '$lastname', '$massar','$genre', '$moyenne','$decision') ";
				mysqli_query($conn,$query);
		}
		else{//avertssement ...
			$decision="Alerte";
				$query = " INSERT INTO `note_c1s2`(`numero`, `lastname`, `massar`, `genre`, `moyenne`, `decision`) VALUES ( '$numero',  '$lastname', '$massar','$genre', '$moyenne','$decision') ";
				mysqli_query($conn,$query);
		}


}


//-----------------------------------------------THE SIXTH TABLE------------------------------------------------------

if(isset($_POST['readrecord6'])){

	$data4 =  '<table class="table table-bordered table-hover" >
						<tr  style="background: #131339; color:white;">
							<th>Arangement</th>
							<th>Nom et prénom</th>
							<th>Genre</th>
							<th>Moyenne</th>

						</tr>'; 

	

	$displayquery4 = "SELECT lastname,genre,moyenne  FROM `note_c1s2` ORDER BY moyenne DESC LIMIT 0,3"; 


	$result4 = mysqli_query($conn,$displayquery4);


	
		if(mysqli_num_rows($result4) > 0){

			$number=1;

			while ($row4 = mysqli_fetch_array($result4)) {
						$data4 .= '<tr>
			 			<td>'.$number.'</td>
			 			<td>'.$row4['lastname'].'</td>
			 			<td>'.$row4['genre'].'</td>
			 			<td>'.$row4['moyenne'].'</td></tr>';
			 			$number++;

		}
	}
					 $data4 .= '</table>';

	    	echo $data4;
}
//--------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------

if(isset($_POST['deleteid']))
{

	$user_id = $_POST['deleteid']; 

	$deletequery = " delete from note_c1s2 where numero ='$user_id' ";
	if (!$result = mysqli_query($conn,$deletequery)) {
        exit(mysqli_error());}

}



/// get userid for update
if(isset($_POST['numero']) && isset($_POST['numero']) != "")
{
    $user_id = $_POST['numero'];
    $query = "SELECT * FROM note_c1s2 WHERE numero = '$user_id'";
    if (!$result = mysqli_query($conn,$query)) {
        exit(mysqli_error());
    }
    
    $response = array();

    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
       
            $response = $row;
        }
    }else
    {
        $response['status'] = 200;
        $response['message'] = "Data not found!";
    }
  //     PHP has some built-in functions to handle JSON.
// Objects in PHP can be converted into JSON by using the PHP function json_encode(): 
    echo json_encode($response);
}
else
{
    $response['status'] = 200;
    $response['message'] = "Invalid Request!";
}



//update table

if(isset($_POST['hidden_user_id'])){

	$hidden_user_idupd = $_POST['hidden_user_id'];
	$numeropd = $_POST['numero'];
	$lastnamepd = $_POST['lastname'];
    $massarpd = $_POST['massar'];
    $genrepd = $_POST['genre'];
    $moyennepd = $_POST['moyenne'];

	if ($moyennepd>=8) {
				$decision="Mention";
				$query = " UPDATE `note_c1s2` SET `lastname`='$lastnamepd',`massar`='$massarpd',`genre`='$genrepd',`moyenne`='$moyennepd',`decision`='$decision' WHERE numero= '$hidden_user_idupd' ";
				mysqli_query($conn,$query);
			
	}
	elseif($_POST['moyenne']<8 && $_POST['moyenne']>=7) {

				$decision="Encouragement";
				$query = " UPDATE `note_c1s2` SET `lastname`='$lastnamepd',`massar`='$massarpd',`genre`='$genrepd',`moyenne`='$moyennepd',`decision`='$decision' WHERE numero= '$hidden_user_idupd' ";
				mysqli_query($conn,$query);
			
	}
	elseif($_POST['moyenne']<7 && $_POST['moyenne']>=6){
				$decision="Tableau d honneur";
				$query = " UPDATE `note_c1s2` SET `lastname`='$lastnamepd',`massar`='$massarpd',`genre`='$genrepd',`moyenne`='$moyennepd',`decision`='$decision' WHERE numero= '$hidden_user_idupd' ";
				mysqli_query($conn,$query);
	}
	else{
			$decision="Alerte";
				$query = " UPDATE `note_c1s2` SET `lastname`='$lastnamepd',`massar`='$massarpd',`genre`='$genrepd',`moyenne`='$moyennepd',`decision`='$decision' WHERE numero= '$hidden_user_idupd' ";
				mysqli_query($conn,$query);
	}
    

     if (!$result = mysqli_query($conn,$query)) {
        exit(mysqli_error());
    }
}
?>