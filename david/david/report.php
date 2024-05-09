<?php
$conn = mysqli_connect("localhost", "root", "", "xwisdom_tvet");
if (!$conn == true) {
    echo "database not connected";
}
$body = '';
$decision = '';
$select = mysqli_query($conn, "SELECT * FROM marks inner join trainees on marks.trainee_id=trainees.trainee_id join trade on trade.trade_id");
$num_rows = mysqli_num_rows($select);
if ($num_rows > 0) {
    $a = 0;
    while ($fetch = mysqli_fetch_assoc($select)) {
        if ($select == true) {
            if ($fetch['total_marks/100'] >= 70) {
                $decision = 'competent';
            } else {
                $decision = 'not yet competent';
            }
            $a++;
            $body .= '<tr>
        <td>' . $a . '</td>
        <td>' . $fetch['firstname'] . '</td>
        <td>' . $fetch['lastname'] . '</td>
        <td>' . $fetch['gender'] . '</td>
        <td>' . $fetch['tradeName'] . '</td>
        <td>' . $fetch['module_name'] . '</td>
        <td>' . $fetch['formative_assessment/50'] . '</td>
        <td>' . $fetch['summative_assessment/50'] . '</td>
        <td>' . $fetch['total_marks/100'] . '</td>
        <td>' . $decision . '</td>
        
   </tr>
        ';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student report</title>
    <style>
        .link {
            text-align: center;
            margin-bottom: 20px;
            font-family: 'Courier New', Courier, monospace;
            font-size: 20px;
        }

        .link a {
            text-decoration: none;
            color: #333;
            padding: 5px 10px;
            margin: 0 5px;
        }

        .link a:hover {
            background-color: #f2f2f2;
            border-radius: 5px;
        }

        .a {
            position: absolute;
            left: 78%;
        }

        button {
            position: absolute;
            top: 35%;
            left: 40%;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        button:hover {
            background-color: #0056b3;
        }

        button a {
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr.total-row td {
            background-color: #ddd;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="link">

        <a href="./index.php">Home</a>
        <a href="./trainees.php">Trainees</a>
        <a href="./trade.php">Trade</a>
        <a href="./mark.php">Marks</a>
    </div><br>
    <table border="2">
        <thead>
            <tr>

                <th>No</th>
                <th>firstname</th>
                <th>lastaname</th>
                <th>gender</th>
                <th>TradeName</th>
                <th>module_name</th>
                <th>formative_assessment/50</th>
                <th>summative_assessment/50</th>
                <th>total_marks</th>
                <th>decision</th>



            </tr>
        </thead>
        <tbody>

            <?php
            echo $body;
            ?>
            <tr>
                <td>Total</td>
                <td colspan="8">
                    <?php echo $num_rows; ?>
                </td>
            </tr>

            <button class="print" onclick="print()">Print</button>
</body>

</html>