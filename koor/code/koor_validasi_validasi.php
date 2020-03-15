<?php
if (isset($_POST["employee_id"])) {
    $output = '';
    $connect = mysqli_connect("localhost", "root", "", "kp_if_itera");
    $query = "SELECT * FROM mahasiswa WHERE Nama = '" . $_POST["employee_id"] . "'";
    $result = mysqli_query($connect, $query);
    $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while ($row = mysqli_fetch_array($result)) {
        $output .= '  
                    <form action="/action_page.php">
                        <div class="form-check">
                            <label class="form-check-label" for="check1">
                                <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>Nilai Instansi
                            </label>
                        </div>
                        
                        <div class="form-check">
                            <label class="form-check-label" for="check2">
                                <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">Nilai Seminar
                            </label>
                        </div>
                    </form>
                ';
    }
    $output .= "</table></div>";
    echo $output;
}
