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
										<th>Title </th>
										<th>Content</th>
										
										<th class="text-right text-danger">Action</th>
									</tr>
								</thead>
                                <tbody>
                ';

                    $display = "SELECT * from `feature`";
                    $result = $connect->query($display);

                    if(mysqli_num_rows($result)> 0){
                        $number = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            $data .= '<tr>
										<td>'.$number.'</td>
										<td>'.$row['title'].'</td>
										<td>'.$row['content'].'</td>
										
								
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
													aria-expanded="false"><i class="material-icons">more_vert</i></a>
												<div class="dropdown-menu dropdown-menu-right" >
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
if(isset($_POST['title']) && isset($_POST['content'])){

    $sql = "INSERT INTO `feature`( `title`, `content`) VALUES ('$title','$content')";
    $result = $connect->query($sql);
}

//delete code

if(isset($_POST['id'])){

    $userid = $_POST['id'];

    $delete = "DELETE from `feature` where `id` = '$userid'";
    $result = $connect->query($delete);
}

// displaying in edit box
if(isset($_POST['id1']) && isset($_POST['id1']) != ""){ // chechinh weather id is null or not if not then run th next codes
    $priceid = $_POST['id1'];//id getting from edit button function
    $sql = "SELECT * from `feature` where `id` = '$priceid'";
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
    $add_content = $_POST['add_content'];
   
    

    $sql = "UPDATE `feature` SET `title`='$add_title',`content`='$add_content' WHERE `id` = '$add_id'";
    $result = $connect->query($sql);
}

?>