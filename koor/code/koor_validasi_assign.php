<?php
if (isset($_POST["employee_id"])) {
    $output = '';
    $connect = mysqli_connect("localhost", "root", "", "kp_if_itera");
    // $query = "SELECT * FROM mahasiswa WHERE Nama = '" . $_POST["employee_id"] . "'";
    $query = "SELECT * FROM dosen";
    $result = mysqli_query($connect, $query);
    $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while ($row = mysqli_fetch_array($result)) {
        $output .= '  
        <tr>  
        <td width="30%"><label>Nama</label></td>  
        <td width="70%">' . $row["Nama"] . '</td>  
   </tr>  
                ';
    }
    $output .= "</table></div>";
    echo $output;
}
