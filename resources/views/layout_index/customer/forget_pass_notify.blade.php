<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gmail</title>

    <style>
        .header {
            width: 600px;
            height: auto;
            background-color: aliceblue;

        }

        .table-wrapper {
            margin: 10px 15px 30px;
            box-shadow: 0px 35px 50px rgba(0, 0, 0, 0.2);
        }

        .btn-group .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            float: center;
            border-radius: 5px;
        }

        .btn-group .button:hover {
            background-color: #3e8e41;
        }

        .fl-table {
            border-radius: 5px;
            font-size: 24px;
            font-weight: normal;
            border: none;
            border-collapse: collapse;
            width: 100%;
            max-width: 100%;
            white-space: nowrap;
            background-color: white;
        }

        .fl-table td,
        .fl-table th {
            text-align: center;
            padding: 8px;
        }

        .fl-table td {
            border-right: 1px solid #f8f8f8;
            font-size: 12px;
        }

        .fl-table thead th {
            color: #ffffff;
            background: #4FC3A1;
        }


        .fl-table thead th:nth-child(odd) {
            color: #ffffff;
            background: #324960;
        }

        .fl-table tr:nth-child(even) {
            background: #F8F8F8;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="table-wrapper">
            <table class="fl-table">
                <thead>
                    <tr>
                        <th>Forget Password</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="btn-group">
                                <p style="font-size: 15px;">Please click the button below to change your password</p>
                                <center><a href="{{ $data['body'] }}" target="_blank"><button class="button">Confirm</button>
                                        <p id="demo" style="font-size: 16px;"></p>
                                    </a></center>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>