<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
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
            position: relative;
            left: 90%;
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

        p {
            position: absolute;
            top: 80%;
        }


        .footer {
            position: absolute;
            margin-top: 359px;
            background-color: #4CAF50;
            color: #fff;
            /* text-align: center; */
            padding: 40px;
            /* border-radius: 10px; */
            width: 97%;
        }

        img {
            position: absolute;
            height: 60px;
            width: 60px;
            font-size: 25px;
            border-radius: 30px;
        }

        .w {
            position: absolute;
            margin-left: 50px;
            margin-top: 40px;
            font-family: 'Courier New', Courier, monospace;
        }

        span {

            color: limegreen;

        }

        .footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .footer .location,
        .footer .sector {
            display: inline-block;
            margin-right: 20px;
        }

        .footer ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .footer ul li {
            margin-bottom: 5px;
        }

        .footer .copy {
            margin-top: 20px;
            font-size: 12px;
        }
    </style>
</head>

<body>
    <img src="./image1.png">
    <div class="w"><span>Xwisdom_</span>TVET</div>
    <div class="link">
        <a href="./index.php">Home</a>
        <a href="./trainees.php">Trainees</a>
        <a href="./trade.php">Trade</a>
        <a href="./mark.php">Marks</a>
        <a href="./report.php">Report</a>
        <a href="logout.php">logout</a>
    </div><br><br>
    <div class="footer">
        <div class="location">
            <h5>location</h5>
            <ul>
                <li>Eastern province</li>
                <li>Bugesera district</li>
                <li>Nyamata sector</li>
            </ul>

        </div>
        <div class="sector">
            <h5>Sectors</h5>
            <ul>
                <li>ICT sector</li>
                <li>FINANCE sector</li>
            </ul>
        </div>
        <div class="copy">
            &copy;2024 Xwisdom_TVET , all right. reserve
        </div>

    </div>
</body>

</html>