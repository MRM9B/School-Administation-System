<?php

$conn = mysqli_connect('localhost','root',"",'admin');

extract($_POST);
if(isset($_POST['readrecords'])){

	$data =  '<table class="table table-bordered table-hover" >
						<tr  style="background: #131339; color:white;">
							<th style="width:7%;">Numero</th>
							<th>Matière</th>
							<th>Nom du professeur</th>
							<th>Editer</th>
							<th>Supprimer</th>
						</tr>'; 

	$displayquery = " SELECT * FROM `conseil_c4s1` "; 
	$result = mysqli_query($conn,$displayquery);


	if(mysqli_num_rows($result) > 0){

			while ($row = mysqli_fetch_array($result)) {
				
				$data .= '<tr id="tab">   
					<td>'.$row['numeroo'].'</td>
					<td>'.$row['matiere'].'</td>
					<td>'.$row['nom'].'</td>
					<td>
						<button onclick="GetUserDetailss('.$row['numeroo'].')" class="btn btn-success" style="background:#8c93ad;border-color:#8c93ad;">Edit</button>
					</td>
					<td>
						<button onclick="DeleteUserr('.$row['numeroo'].')" class="btn btn-danger" style="background:#ed9a2f;border-color:#ed9a2f;">Delete</button>
					</td>
	    		</tr>';

			}
		} 
		 $data .= '</table>';
	    	echo $data;

}


if(isset($_POST['numeroo']) && isset($_POST['matiere']) && isset($_POST['nom'])){

		$query = " INSERT INTO `conseil_c4s1`(`numeroo`, `matiere`, `nom`) VALUES ( '$numeroo',  '$matiere', '$nom')";
		mysqli_query($conn,$query);			
	}



if(isset($_POST['deleteidd']))
{

	$user_id = $_POST['deleteidd']; 

	$deletequery = " delete from conseil_c4s1 where numeroo ='$user_id' ";
	if (!$result = mysqli_query($conn,$deletequery)) {
        exit(mysqli_error());}

}



/// get userid for update
if(isset($_POST['numeroo']) && isset($_POST['numeroo']) != "")
{
    $user_id = $_POST['numeroo'];
    $query = "SELECT * FROM conseil_c4s1 WHERE numeroo = '$user_id'";
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
/*	$numeropd = $_POST['numeroo'];
*/	$lastnamepd = $_POST['matiere'];
    $massarpd = $_POST['nom'];
    

				$query = " UPDATE `conseil_c4s1` SET `matiere`='$lastnamepd',`nom`='$massarpd' WHERE numeroo= '$hidden_user_idupd' ";
				mysqli_query($conn,$query);
			
    

     if (!$result = mysqli_query($conn,$query)) {
        exit(mysqli_error());
    }
}
?>