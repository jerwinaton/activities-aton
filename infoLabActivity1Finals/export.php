<?php include 'connection.php'; 

 $select = "SELECT * FROM activity1Finals";
 $run_sql = mysqli_query($con, $select);

 $html='
 <style> 
 #studentInfo {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }
  
  #studentInfo td, #studentInfo th {
    border: 1px solid #ddd;
    padding: 8px;
  }
  
  #studentInfo tr:nth-child(even){background-color: #f2f2f2;}
  
  #studentInfo tr:hover {background-color: #ddd;}
  
  #studentInfo th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #04AA6D;
    color: white;
  }
 </style>
 <table id="studentInfo>
            <tr">
                <th>ID</td>
                <th>Last Name</td>
                <th>First Name Name</td>
                <th>Age</td>
                <th>Address</td>
                <th>Barangay</td>
                <th>City/Municipality</td>
                <th>Zip Code</td>
                <th>Birthdate</td>
                <th>Gender</td>
                <th>Status</td>
                <th>Father\'s Fullname</td>
                <th>Father\'s Age</td>
                <th>Father\'s Occupation</td>
                <th>Mother\'s Fullname</td>
                <th>Mother\'s Age</td>
                <th>Mother\'s Occupation</td>
                <th>Sibling 1 Name</td>
                <th>Sibling 1 Age</td>
                <th>Sibling 2 Name</td>
                <th>Sibling 2 Age</td>
                <th>Sibling 3 Name</td>
                <th>Sibling 3 Age</td>
                <th>Sibling 4 Name</td>
                <th>Sibling 4 Age</td>
                <th>Sibling 5 Name</td>
                <th>Sibling 5 Age</td>
                <th>Sibling 6 Name</td>
                <th>Sibling 6 Age</td>
                </tr>';
 while($row = mysqli_fetch_array($run_sql)){
  $html.= '<tr
                <td>'.$row['id'].'</td>
                <td>'.$row['l_name'].'</td>
                <td>'.$row['stud_f_name'].'</td>
                <td>'.$row['stud_m_initial'].'</td>
                <td>'.$row['stud_age'].'</td>
                <td>'.$row['stud_address'].'</td>
                <td>'.$row['brgy'].'</td>
                <td>'.$row['municipality'].'</td>
                <td>'.$row['zip_code'].'</td>
                <td>'.$row['stud_bday'].'</td>
                <td>'.$row['stud_gender'].'</td>
                <td>'.$row['stud_status'].'</td>
                <td>'.$row['father_name'].'</td>
                <td>'.$row['father_age'].'</td>
                <td>'.$row['father_occup'].'</td>
                <td>'.$row['mother_name'].'</td>
                <td>'.$row['mother_age'].'</td>
                <td>'.$row['mother_occup'].'</td>
                <td>'.$row['sibling1_name'].'</td>
                <td>'.$row['sibling1_age'].'</td>
                <td>'.$row['sibling2_name'].'</td>
                <td>'.$row['sibling2_age'].'</td>
                <td>'.$row['sibling3_name'].'</td>
                <td>'.$row['sibling3_age'].'</td>
                <td>'.$row['sibling4_name'].'</td>
                <td>'.$row['sibling4_age'].'</td>
                <td>'.$row['sibling5_name'].'</td>
                <td>'.$row['sibling5_age'].'</td>
                <td>'.$row['sibling6_name'].'</td>
                <td>'.$row['sibling6_age'].'</td>
            </tr>'

?>
   
<?php }?>
<?php
$html.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=export-data.xls');
echo $html;
?>