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
										
										<th>Name</th>
										<th>Feedback</th>
										
										
										<th class="text-right text-danger">Action</th>
									</tr>
								</thead>
                                <tbody>
                ';

                    $display = "SELECT * from `feedback`";
                    $result = $connect->query($display);

                    if(mysqli_num_rows($result)> 0){
                        $number = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            $data .= '<tr>
										<td>'.$number.'</td>
									
										<td>'.$row['name'].'</td>
										<td>'.$row['feedback'].'</td>
										
										
								
										<td class="text-right">
											
										<style>button{
													border:none;
													color:red;
													
					
												}
												button:hover{
													background:gray;
													color:white;
													border-radius:5px;
												}
													</style>
													
													<button class="" onclick="deleteUser('.$row['id'].')"><i
															class="fa fa-trash-o m-r-5"></i> Delete</a>
										</td>
									</tr>';
                            $number++;
                            }
                        }
     $data .='</tbody>
              </table>';
     echo $data;
}



//delete code

if(isset($_POST['id'])){

    $userid = $_POST['id'];

    $delete = "DELETE from `feedback` where `id` = '$userid'";
    $result = $connect->query($delete);
}



?>