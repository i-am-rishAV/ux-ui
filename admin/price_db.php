<?php 
include ("connection.php");
// include("session.php");

extract($_POST);


//display code
if(isset($_POST['readrecord'])){
    $data = '<table class="table table-striped custom-table mb-0 datatable">
								<thead class="text-info">
									<tr>
										<th style="width: 30px;">#</th>
										<th >Title </th>
										<th>Price</th>
										<th>des1</th>
										<th>des2</th>
										<th>des3</th>
										<th>des4</th>
										<th>des5</th>
										<th>des6</th>
										<th>des7</th>
										<th class="text-right text-danger">Action</th>
									</tr>
								</thead>
                                <tbody>
                ';

                    $display = "SELECT * from `price`";
                    $result = $connect->query($display);

                    if(mysqli_num_rows($result)> 0){
                        $number = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            $data .= '<tr>
										<td>'.$number.'</td>
										<td>'.$row['title'].'</td>
										<td>'.$row['price'].'</td>
										<td>'.$row['des1'].'</td>
										<td>'.$row['des2'].'</td>
										<td>'.$row['des3'].'</td>
										<td>'.$row['des4'].'</td>
										<td>'.$row['des5'].'</td>
										<td>'.$row['des6'].'</td>
										<td>'.$row['des7'].'</td>
								
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
													aria-expanded="false"><i class="material-icons">more_vert</i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<button class="dropdown-item" onclick="editUser('.$row['id'].')"><i
															class="fa fa-pencil m-r-5"></i> Edit</button>
													<button class="dropdown-item" onclick="deleteUser('.$row['id'].')"><i
															class="fa fa-trash-o m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr>';
                            $number++;
                            }
                        }
     $data .='</tbody>
              </table>';
     echo $data;
}

// insert code
if(isset($_POST['title']) && isset($_POST['price']) && isset($_POST['des1']) ){

    $sql = "INSERT INTO `price`( `title`, `price`, `des1`, `des2`, `des3`, `des4`, `des5`,`des6`,`des7`) VALUES ('$title','$price','$des1','$des2','$des3','$des4','$des5','$des6','$des7')";
    $result = $connect->query($sql);
}

//delete code

if(isset($_POST['id'])){

    $userid = $_POST['id'];

    $delete = "DELETE from `price` where `id` = '$userid'";
    $result = $connect->query($delete);
}

// displaying in edit box
if(isset($_POST['id1']) && isset($_POST['id1']) != ""){ // chechinh weather id is null or not if not then run th next codes
    $priceid = $_POST['id1'];//id getting from edit button function
    $sql = "SELECT * from `price` where `id` = '$priceid'";
    $fire = mysqli_query($connect,$sql);

      if(!$fire){
        exit(mysqli_query());
      }

        $response = array(); // no need for this but still storing it

        if(mysqli_num_rows($fire)>0){  
            while($row = mysqli_fetch_assoc($fire)){
                $response = $row;
            }
        }
      else{
        $response['status'] = 200; 
        $response['message'] = "data not found";
       }

       echo json_encode($response);  //converting array to json     
}else{
       $response['status'] = 200;
       $response['message'] = "invalid request";
     }



if(isset($_POST['add_hidden_id'])){
    $add_id= $_POST['add_hidden_id'];

    $add_title = $_POST['add_title'];
    $add_price = $_POST['add_price'];
    $add_des1 = $_POST['add_des1'];
    $add_des2 = $_POST['add_des2'];
    $add_des3 = $_POST['add_des3'];
    $add_des4 = $_POST['add_des4'];
    $add_des5 = $_POST['add_des5'];
    $add_des6 = $_POST['add_des6'];
    $add_des7 = $_POST['add_des7'];

    $sql = "UPDATE `price` SET `title`='$add_title',`price`='$add_price',`des1`='$add_des1',`des2`='$add_des2',`des3`='$add_des3',`des4`='$add_des4',`des5`='$add_des5',`des6`='$add_des6',`des7`='$add_des7' WHERE `id` = '$add_id'";
    $result = $connect->query($sql);
}

?>