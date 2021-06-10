<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="css/uikit.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.21/dist/css/uikit.min.css" /> -->
    <link href="index.css" rel="stylesheet">
    <script src="script.js"></script>

    <title>Activity 1 Finals | Aton BSIT 1B </title>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid d-flex justify-content-center">
            <a class="navbar-brand" href="#">Activity 1 Finals | Jerwin Mathew Aton BSIT-1B</a>
        </div>
    </nav>

    <nav class="navbar fixed-top navbar-light bg-light">
        <div class="container d-flex justify-content-center">
            <a class="navbar-brand" href="#">Student's Information</a>
            <a class="navbar-brand" href="#grades">Student's Grades</a>
            <a class="navbar-brand" href="export.php">Export as Excel</a>
        </div>
    </nav>


    <div class="container">
        <form name="form1" class="row g-3" method="POST">
            <div id="show_alert"></div>
            <div class="col-8">
                <h3>Student's Information</h3>
            </div>
            <div class="col-4 d-flex justify-content-center">
                <a class="btn btn-primary" id="export-btn" href="export.php">Download as Excel File</a>
            </div>

            <script>function focus(){ document.getElementById("export-btn").innerHTML= "red";  }</script>

            <div class="col-md-3">
                <label for="inputText1" class="form-label">First Name</label>
                <input type="text" class="form-control" id="inputText1" name="stud_f_name" required>
            </div>
            <div class="col-md-3">
                <label for="inputText2" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="inputText2" name="stud_l_name" required>
            </div>
            <div class="col-md-3">
                <label for="inputText3" class="form-label">M.I.</label>
                <input type="text" class="form-control" maxlength="1" id="inputText3" name="stud_m_initial" required>
            </div>
            <div class="col-md-3">
                <label for="inputAge" class="form-label">Age</label>
                <input type="number" class="form-control" id="inputAge" name="stud_age" required>
            </div>
            <div class="col-md-3">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address" required>
            </div>
            <div class="col-md-3">
                <label for="inputBarangay" class="form-label">Barangay</label>
                <input type="text" class="form-control" id="inputBarangay" placeholder="Barangay 905..." name="brgy" required>
            </div>
            <div class="col-md-3">
                <label for="inputCity" class="form-label">City/Municipality</label>
                <input type="text" class="form-control" id="inputCity" name="municipality" required>
            </div>
            <div class="col-md-3">
                <label for="inputZip" class="form-label">Zip Code</label>
                <input type="number" class="form-control" id="inputZip" name="zip_code" required>
            </div>
            <div class="col-md-4">
                <label for="inputBday" class="form-label">Birthdate</label>
                <input type="date" class="form-control" id="inputBday" name="stud_bday" required>
            </div>
            <div class="col-md-4">
                <label for="inputGender" class="form-label">Gender</label>
                <select id="inputGender" class="form-select" name="stud_gender" required>
                    <option selected>Male</option>
                    <option>Female</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="inputStatus" class="form-label">Status</label>
                <select id="inputStatus" class="form-select" name="stud_status" required>
                    <option selected>Single</option>
                    <option>Married</option>
                    <option>Seperated</option>
                    <option>Widow</option>
                </select>
            </div>
            <!-- father's info -->
            <div class="col-md-4">
                <label for="inputFatherName" class="form-label">Father's Fullname</label>
                <input type="text" class="form-control" id="inputFatherName" placeholder="First name, Last name, Middle Initial" name="father_name" required>
            </div>
            <div class="col-md-4">
                <label for="inputFatherAge" class="form-label">Father's Age</label>
                <input type="number" class="form-control" id="inputFatherAge" name="father_age" required>
            </div>
            <div class="col-md-4">
                <label for="inputFatherOccupation" class="form-label">Father's Occupation</label>
                <input type="text" class="form-control" id="inputFatherOccupation" name="father_occup" required>
            </div>
            <!-- end of father's infor -->
            <!-- mother's infos -->
            <div class="col-md-4">
                <label for="inputMotherName" class="form-label">Mother's Fullname</label>
                <input type="text" class="form-control" id="inputMotherName" placeholder="First name, Last name, Middle Initial" name="mother_name" required>
            </div>
            <div class="col-md-4">
                <label for="inputMotherAge" class="form-label">Mother's Age</label>
                <input type="number" class="form-control" id="inputMotherAge" name="mother_age" required>
            </div>
            <div class="col-md-4">
                <label for="inputMotherOccupation" class="form-label">Mother's Occupation</label>
                <input type="text" class="form-control" id="inputMotherOccupation" name="mother_occup" required>
            </div>
            <!-- end of mother's info -->
            <!-- siblings -->
            <script src="script.js"></script>
            
                <div class="col-12 d-flex flex-column justify-content-between align-items-center">

                    <div class="col-md-8 row">
                        <div class="col-8">
                            <label for="member" class="form-label">Sibling 1 Full Name</label>
                            <input type="text" value="none" class="form-control" id="sibling1" name="sibling1_name" placeholder="First name, Last name, Middle Initial" required>
                        </div>
                        <div class="col-4">
                            <label for="member" class="form-label">Age</label>
                            <input type="number" value="0" class="form-control" id="sibling1" name="sibling1_age" required>
                        </div>
                    </div>


                    <div class="col-md-8 row">
                        <div class="col-8">
                            <label for="member" class="form-label">Sibling 2 Full Name</label>
                            <input type="text" value="none" class="form-control" id="sibling2" name="sibling2_name" placeholder="First name, Last name, Middle Initial" required>
                        </div>
                        <div class="col-4">
                            <label for="member" class="form-label">Age</label>
                            <input type="number" value="0" class="form-control" id="sibling2" name="sibling2_age" required>
                        </div>
                    </div>


                    <div class="col-md-8 row">
                        <div class="col-8">
                            <label for="member" class="form-label">Sibling 3 Full Name</label>
                            <input type="text" value="none" class="form-control" id="sibling3" name="sibling3_name" placeholder="First name, Last name, Middle Initial" required>
                        </div>
                        <div class="col-4">
                            <label for="member" class="form-label">Age</label>
                            <input type="number" value="0" class="form-control" id="sibling3" name="sibling3_age" required>
                        </div>
                    </div>


                    <div class="col-md-8 row">
                        <div class="col-8">
                            <label for="member" class="form-label">Sibling 4 Full Name</label>
                            <input type="text" value="none" class="form-control" id="sibling4" name="sibling4_name" placeholder="First name, Last name, Middle Initial" required>
                        </div>
                        <div class="col-4">
                            <label for="member" class="form-label">Age</label>
                            <input type="number" value="0" class="form-control" id="sibling4" name="sibling4_age" required>
                        </div>
                    </div>


                    <div class="col-md-8 row">
                        <div class="col-8">
                            <label for="member" class="form-label">Sibling 5 Full Name</label>
                            <input type="text" value="none" class="form-control" id="sibling5" name="sibling5_name" placeholder="First name, Last name, Middle Initial" required>
                        </div>
                        <div class="col-4">
                            <label for="member" class="form-label">Age</label>
                            <input typnumber" value="0" class="form-control" id="sibling5" name="sibling5_age" required>
                        </div>
                    </div>

                    <div class="col-md-8 row">
                        <div class="col-8">
                            <label for="member" class="form-label">Sibling 6 Full Name</label>
                            <input type="text" value="none" class="form-control" id="sibling6" name="sibling6_name" placeholder="First name, Last name, Middle Initial" required>
                        </div>
                        <div class="col-4">
                            <label for="member" class="form-label">Age</label>
                            <input type="number" value="0" class="form-control" id="sibling6" name="sibling6_age" required>
                        </div>
                    </div>
                </div>
            
                <!-- end of siblings -->
                <div class="col-12">
                    <h3 id="grades">Student's Grades</h3>
                </div>
                <div class="col-md-3">
                    <label for="inputText1" class="form-label">GEREADPH (Credits: 3)</label>
                    <input type="number" step="0.01" class="form-control" id="inputText1" name="SUB1" required>
                </div>
                <div class="col-md-3">
                    <label for="inputText2" class="form-label">GUENDETS (Credits: 3)</label>
                    <input type="number" step="0.01" class="form-control" id="inputText2" name="SUB2" required>
                </div>
                <div class="col-md-3">
                    <label for="inputText3" class="form-label">GEPURPCO (Credits: 3)</label>
                    <input type="number" step="0.01" class="form-control" id="inputText3" name="SUB3" required>
                </div>
                <div class="col-md-3">
                    <label for="inputAge" class="form-label">GEKOMFIL (Credits: 3)</label>
                    <input type="number" step="0.01" class="form-control" id="inputAge" name="SUB4" required>
                </div>
                <div class="col-md-3">
                    <label for="inputAge" class="form-label">NTROCOMP (Credits: 3)</label>
                    <input type="number" step="0.01" class="form-control" id="inputAge" name="SUB5" required>
                </div>
                <div class="col-md-3">
                    <label for="inputAge" class="form-label">FPROGLEC (Credits: 1)</label>
                    <input type="number"step="0.01"  class="form-control" id="inputAge" name="SUB6" required>
                </div>
                <div class="col-md-3">
                    <label for="inputAge" class="form-label">FPROGLAB (Credits: 2)</label>
                    <input type="number" step="0.01" class="form-control" id="inputAge" name="SUB7" required>
                </div>
                <div class="col-md-3">
                    <label for="inputAge" class="form-label">GEPEMOVE (Credits: 2)</label>
                    <input type="number" step="0.01" class="form-control" id="inputAge" name="SUB8" required>
                </div>
                <div class="col-12 d-flex justify-content-center mt-3 mb-5">
                    <button class="btn btn-primary" name="submit" onclick="submit2();">Submit</button>
                </div>

        </form>
</div>










</body>
<!-- add.php -->

<!-- rcipt for message alerts variables -->
<script>
    var msg_succeed =
        '<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">' +
        '<symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">' +
        '<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>' +
        '</symbol>' +
        '</svg>' +
        '<div class="alert alert-fixed alert-success alert-dismissible fade show d-flex align-items-center justify-content-center" role="alert">' +
        '<div>' +
        '<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#check-circle-fill"/></svg><strong>Your data has been submitted successfully!</strong>' +
        '</div>' +
        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
        '</div>';

    var msg_failed =
        '<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">' +
        ' <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">' +
        ' <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>' +
        ' </symbol>' +
        ' </svg>' +
        ' <div class="alert alert-fixed alert-warning alert-dismissible fade show d-flex align-items-center justify-content-center" role="alert">' +
        ' <div>' +
        ' <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#exclamation-triangle-fill"/></svg><strong>Unsuccessful submission of data, please try again.</strong>' +
        '</div>' +
        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
        '</div>';
</script>
<!-- end of srcipt for message alerts variables -->
<?php require_once 'connection.php';

if (isset($_POST["submit"])) {

    $first_name = strtoUpper($_POST["stud_f_name"]);
    $last_name = strtoUpper($_POST["stud_l_name"]);
    $middle_initial = strtoUpper($_POST["stud_m_initial"]);
    $stud_age = $_POST["stud_age"];
    $address = strtoUpper($_POST["address"]);
    $brgy = strtoUpper($_POST["brgy"]);
    $municipality = strtoUpper($_POST["municipality"]);
    $zip_code = $_POST["zip_code"];
    $stud_bday = $_POST["stud_bday"];
    $stud_gender = $_POST["stud_gender"];
    $stud_status = $_POST["stud_status"];

    $father_name = strtoUpper($_POST["father_name"]);
    $father_age = $_POST["father_age"];
    $father_occup = strtoUpper($_POST["father_occup"]);
    $mother_name = strtoUpper($_POST["mother_name"]);
    $mother_age = $_POST["mother_age"];
    $mother_occup = strtoUpper($_POST["mother_occup"]);

    $sibling1_name = strtoUpper($_POST["sibling1_name"]);
    $sibling1_age = $_POST["sibling1_age"];
    $sibling2_name = strtoUpper($_POST["sibling2_name"]);
    $sibling2_age = $_POST["sibling2_age"];
    $sibling3_name = strtoUpper($_POST["sibling3_name"]);
    $sibling3_age = $_POST["sibling3_age"];
    $sibling4_name = strtoUpper($_POST["sibling4_name"]);
    $sibling4_age = $_POST["sibling4_age"];
    $sibling5_name = strtoUpper($_POST["sibling5_name"]);
    $sibling5_age = $_POST["sibling5_age"];
    $sibling6_name = strtoUpper($_POST["sibling6_name"]);
    $sibling6_age = $_POST["sibling6_age"];

    $SUB1 = $_POST["SUB1"];
    $SUB2 = $_POST["SUB2"];
    $SUB3 = $_POST["SUB3"];
    $SUB4 = $_POST["SUB4"];
    $SUB5 = $_POST["SUB5"];
    $SUB6 = $_POST["SUB6"];
    $SUB7 = $_POST["SUB7"];
    $SUB8 = $_POST["SUB8"];


    $add = "INSERT INTO activity1Finals_grades (l_name, stud_f_name, stud_m_initial, stud_age, stud_address, brgy, municipality, zip_code, stud_bday, stud_gender, stud_status, father_name,father_age,father_occup,mother_name,mother_age,mother_occup,sibling1_name,sibling1_age,sibling2_name,sibling2_age,sibling3_name,sibling3_age,sibling4_name,sibling4_age,sibling5_name,sibling5_age,sibling6_name,sibling6_age,SUB1,SUB2,SUB3,SUB4,SUB5,SUB6,SUB7,SUB8) VALUES ('$last_name','$first_name','$middle_initial','$stud_age','$address','$brgy','$municipality','$zip_code','$stud_bday','$stud_gender','$stud_status','$father_name','$father_age','$father_occup','$mother_name','$mother_age','$mother_occup','$sibling1_name','$sibling1_age','$sibling2_name','$sibling2_age','$sibling3_name','$sibling3_age','$sibling4_name','$sibling4_age','$sibling5_name','$sibling5_age','$sibling6_name','$sibling6_age','$SUB1','$SUB2','$SUB3','$SUB4','$SUB5','$SUB6','$SUB7','$SUB8')";

    $run_sql = mysqli_query($con, $add) or trigger_error("Query Failed! SQL: $add - Error: " . mysqli_error($con), E_USER_ERROR);;
    if ($run_sql) {
        echo "<script> 
    document.getElementById(\"show_alert\").innerHTML = msg_succeed;
    </script>";
    } else {
        echo "<script> 
    document.getElementById(\"show_alert\").innerHTML = msg_failed;
    </script>";
    }

    
} ?>


<!-- end of add.php -->


<!-- UIkit JS -->
<script src="js/uikit.min.js"></script>
<script src="js/uikit-icons.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.21/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.21/dist/js/uikit-icons.min.js"></script> -->

</html>