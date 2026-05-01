<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Generate Voucher</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, sans-serif;
        }

        body {
            height: 100vh;
            background: #f5f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #212529;
        }

        .container {
            width: 85%;
            max-width: 1100px;
        }

        .card {
            background: #ffffff;
            padding: 35px;
            border-radius: 14px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-3px);
        }

        .card h2 {
            text-align: center;
            margin-bottom: 25px;
            font-weight: 600;
            letter-spacing: 1px;
            position: relative;
        }

        .card h2::after {
            content: '';
            width: 90px;
            height: 3px;
            background: #0d6efd;
            display: block;
            margin: 10px auto 0;
            border-radius: 2px;
        }

        .row {
            display: flex;
            gap: 15px;
            margin-bottom: 18px;
            flex-wrap: wrap;
        }

        .input-group {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .input-group.full {
            flex: 2;
        }

        label {
            font-size: 13px;
            margin-bottom: 6px;
            color: #6c757d;
        }

        input,
        select {
            padding: 11px;
            border-radius: 8px;
            border: 1px solid #ddd;
            background: #f8f9fa;
            transition: 0.3s;
            font-size: 14px;
        }

        input:focus,
        select:focus {
            border-color: #0d6efd;
            background: #fff;
            box-shadow: 0 0 0 2px rgba(13, 110, 253, 0.15);
            outline: none;
        }

        .btn {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 10px;
            background: #306fcd;
            color: #fff;
            font-size: 15px;
            cursor: pointer;
            margin-top: 10px;
            transition: 0.3s ease;
            letter-spacing: 0.5px;
        }

        .btn:hover {
            background: #0b5ed7;
            transform: scale(1.02);
        }

        /* responsive */
        @media(max-width: 768px) {
            .row {
                flex-direction: column;
            }
        }
    </style>


</head>

<body>

    <div class="container">
        <div class="card">
            <h2>GENERATE YOUR VOUCHER</h2>

            <form action="#" method="POST">
                @csrf

                <div class="row">
                    <div class="input-group">
                        <label>Receipt No.</label>
                        <input type="text" placeholder="Enter Receipt No">
                    </div>

                    <div class="input-group">
                        <label>Student ID</label>
                        <input type="text" placeholder="Enter Student ID">
                    </div>

                    <div class="input-group">
                        <label>Full Name</label>
                        <input type="text" placeholder="Enter Full Name">
                    </div>

                    <div class="input-group">
                        <label>Phone Number</label>
                        <input type="text" placeholder="Enter Phone Number">
                    </div>
                </div>

                <div class="row">
                    <div class="input-group full">
                        <label>Address</label>
                        <input type="text" placeholder="Enter Address">
                    </div>

                    <div class="input-group">
                        <label>Date</label>
                        <input type="date">
                    </div>

                    <div class="input-group">
                        <label>Payment Method</label>
                        <select>
                            <option>Cash</option>
                            <option>Card</option>
                            <option>Online</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="input-group">
                        <label>Transaction ID</label>
                        <input type="text" placeholder="Enter Transaction ID">
                    </div>

                    <div class="input-group">
                        <label>Amount</label>
                        <input type="number" placeholder="Enter Amount">
                    </div>
                </div>

                <button type="submit" class="btn">Generate Voucher</button>
            </form>
        </div>
    </div>

</body>

</html>