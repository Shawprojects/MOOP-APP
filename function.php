<?php

if (isset($_POST['submit'])) {

    // Collect form data
    $effective_date_1 = $_POST['datepicker1'];
    $effective_date_2 = $_POST['datepicker3'];
    $effective_date_3 = $_POST['datepicker5'];
    $effective_date_4 = $_POST['datepicker7'];
    $effective_date_5 = $_POST['datepicker9'];
    $effective_date_6 = $_POST['datepicker11'];

    $revised_on_1 = $_POST['datepicker2'];
    $revised_on_2 = $_POST['datepicker4'];
    $revised_on_3 = $_POST['datepicker6'];
    $revised_on_4 = $_POST['datepicker8'];
    $revised_on_5 = $_POST['datepicker10'];
    $revised_on_6 = $_POST['datepicker12'];

    $critical_elements_1 = $_POST['elements_1'];
    $critical_elements_2 = $_POST['elements_2'];
    $critical_elements_3 = $_POST['elements_3'];
    $critical_elements_4 = $_POST['elements_4'];
    $critical_elements_5 = $_POST['elements_5'];
    $critical_elements_6 = $_POST['elements_6'];

    $status_1 = $_POST['status_1'];
    $status_2 = $_POST['status_2'];
    $status_3 = $_POST['status_3'];
    $status_4 = $_POST['status_4'];
    $status_5 = $_POST['status_5'];
    $status_6 = $_POST['status_6'];

    $comment_1 = $_POST['comment_1'];
    $comment_2 = $_POST['comment_2'];
    $comment_3 = $_POST['comment_3'];
    $comment_4 = $_POST['comment_4'];
    $comment_5 = $_POST['comment_5'];
    $comment_6 = $_POST['comment_6'];


    $pr_comment_1 = $_POST['comment_7'];
    $pr_comment_2 = $_POST['comment_8'];
    $pr_comment_3 = $_POST['comment_9'];
    $pr_comment_4 = $_POST['comment_10'];
    $pr_comment_5 = $_POST['comment_11'];
    $pr_comment_6 = $_POST['comment_12'];
    $pr_comment_7 = $_POST['comment_13'];
    $pr_comment_8 = $_POST['comment_14'];
    $pr_comment_9 = $_POST['comment_15'];
    $pr_comment_10 = $_POST['comment_16'];
    $pr_comment_11 = $_POST['comment_17'];
    $pr_comment_12 = $_POST['comment_18'];
    $pr_comment_13 = $_POST['comment_19'];
    $pr_comment_14 = $_POST['comment_20'];
    $pr_comment_15 = $_POST['comment_21'];
    $pr_comment_16 = $_POST['comment_22'];
    $pr_comment_17 = $_POST['comment_23'];
    $pr_comment_18 = $_POST['comment_24'];


    // Create HTML of the Data
    // ob_start();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>MOOP Report | AAI</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <header>
        <div class="text-center">
            <h1>MOOP</h1>
            <p class="lead">Critical Elements of Opertional Area</p>
        </div>
    </header>

    <main>
        <div class="container">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Sl.No.</th>
                        <th scope="col">Section</th>
                        <th scope="col">Effective Date</th>
                        <th scope="col">Revised on</th>
                        <th scope="col">Critical Elements</th>
                        <th scope="col">Findings/Status</th>
                        <th scope="col">Remarks</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Vegetation Control/Grass Cutting In Airside</td>
                        <td><?php echo $effective_date_1; ?></td>
                        <td><?php echo $revised_on_1; ?></td>
                        <td><?php echo $critical_elements_1; ?></td>
                        <td><?php echo $status_1; ?></td>
                        <td><?php echo $comment_1; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Airfield Inspection</td>
                        <td><?php echo $effective_date_2; ?></td>
                        <td><?php echo $revised_on_2; ?></td>
                        <td><?php echo $critical_elements_2; ?></td>
                        <td><?php echo $status_2; ?></td>
                        <td><?php echo $comment_2; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Bird & Wild Life Control</td>
                        <td><?php echo $effective_date_3; ?></td>
                        <td><?php echo $revised_on_3; ?></td>
                        <td><?php echo $critical_elements_3; ?></td>
                        <td><?php echo $status_3; ?></td>
                        <td><?php echo $comment_3; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Fuel & Hydraulic Oil Spillage</td>
                        <td><?php echo $effective_date_4; ?></td>
                        <td><?php echo $revised_on_4; ?></td>
                        <td><?php echo $critical_elements_4; ?></td>
                        <td><?php echo $status_4; ?></td>
                        <td><?php echo $comment_4; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Incident/Accident Reporting In Airside</td>
                        <td><?php echo $effective_date_5; ?></td>
                        <td><?php echo $revised_on_5; ?></td>
                        <td><?php echo $critical_elements_5; ?></td>
                        <td><?php echo $status_5; ?></td>
                        <td><?php echo $comment_5; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Friction Testing & Rubber Removal</td>
                        <td><?php echo $effective_date_6; ?></td>
                        <td><?php echo $revised_on_6; ?></td>
                        <td><?php echo $critical_elements_6; ?></td>
                        <td><?php echo $status_6; ?></td>
                        <td><?php echo $comment_6; ?></td>
                    </tr>
                </tbody>
            </table>

            <br>
            <br>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Sl.No.</th>
                        <th scope="col">Committee</th>
                        <th scope="col">Periodicity</th>
                        <th scope="col">Chair Person/Chairman</th>
                        <th scope="col">Due on</th>
                        <th scope="col">Last conducted</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Airport Advisory Committee</td>
                        <td>Quarterly</td>
                        <td>Minister Concerned</td>
                        <td><?php echo $pr_comment_1; ?></td>
                        <td><?php echo $pr_comment_2; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Runway Safety Team</td>
                        <td>Quarterly</td>
                        <td>Airport Director/OIC</td>
                        <td><?php echo $pr_comment_3; ?></td>
                        <td><?php echo $pr_comment_4; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Aerodrome Committee (AC)</td>
                        <td>6 Monthly</td>
                        <td>Dy. Commissioner</td>
                        <td><?php echo $pr_comment_5; ?></td>
                        <td><?php echo $pr_comment_6; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Airport Security Committee</td>
                        <td>Monthly</td>
                        <td>Airport Director/OIC</td>
                        <td><?php echo $pr_comment_7; ?></td>
                        <td><?php echo $pr_comment_8; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Airport Coordination Committee</td>
                        <td>Monthly</td>
                        <td>Airport Director/OIC</td>
                        <td><?php echo $pr_comment_9; ?></td>
                        <td><?php echo $pr_comment_10; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>ATM-ENGG-CNS Coordination</td>
                        <td>Monthly</td>
                        <td>Airport Director/OIC</td>
                        <td><?php echo $pr_comment_11; ?></td>
                        <td><?php echo $pr_comment_12; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>Bomb Threat Assessment Committee (BTAC)</td>
                        <td>Quarterly</td>
                        <td>Airport Director/OIC</td>
                        <td><?php echo $pr_comment_13; ?></td>
                        <td><?php echo $pr_comment_14; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>Airport Environment Management Committee (AEMC)</td>
                        <td>Monthly</td>
                        <td>District Planning Officer</td>
                        <td><?php echo $pr_comment_15; ?></td>
                        <td><?php echo $pr_comment_16; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td>AEP Review Committee</td>
                        <td>Yearly</td>
                        <td>Airport Director/OIC</td>
                        <td><?php echo $pr_comment_17; ?></td>
                        <td><?php echo $pr_comment_18; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <footer id="main=footer" class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1 text-center"> Airpots Authority Of India&copy; 2019-2020 | RED Department </p>
        <p class="mb-1 text-center"><small>Develop by - Narayan Shaw (IT Apprentice)</small></p>
    </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>


<?php
// $body = ob_get_clean();

// $body = iconv("UTF-8", "UTF-8//IGNORE", $body);

// include("mpdf/src/Mpdf.php");
// $mpdf = new \Mpdf\Mpdf();

// // write html to PDF
// $mpdf->WriteHTML($body);

// // Output PDF
// $mpdf->Output('report.pdf', 'D');

// Save to Server
// $mpdf->Output('report.pdf', 'F');


?>