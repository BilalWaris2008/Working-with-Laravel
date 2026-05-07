<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Generate Voucher</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/voucher.css') }}">

</head>


@include('partials.header')

<body>

    <div class="main d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="card">
                <h2>GENERATE YOUR VOUCHER</h2>

                <form action="#" method="POST">
                    @csrf

                    <div class="rows">
                        <div class="input-group">
                            <label>Student ID</label>
                            <input type="text" name="studentid" placeholder="Enter Student ID" required>
                        </div>

                        <div class="input-group">
                            <label>Full Name</label>
                            <input type="text" name="fullname" placeholder="Enter Full Name" required>
                        </div>

                        <div class="input-group">
                            <label>Phone Number</label>
                            <input type="text" name="number" placeholder="Enter Phone Number">
                        </div>
                    </div>

                    <div class="rows">
                        <div class="input-group full">
                            <label>Address</label>
                            <input type="text" name="address" placeholder="Enter Address">
                        </div>

                        <div class="input-group">
                            <label>Date</label>
                            <input type="date" name="date" required>
                        </div>

                        <div class="input-group">
                            <label>Payment Method</label>
                            <select name="paymentmethod" required>
                                <option value="cash">Cash</option>
                                <option value="online">Online</option>
                                <option value="cheque">Cheque</option>
                            </select>
                        </div>
                    </div>

                    <div class="rows">
                        <div class="input-group">
                            <label>Transaction ID</label>
                            <input type="text" name="paymentid" required>
                        </div>

                        <div class="input-group">
                            <label>Amount</label>
                            <input type="number" name="amount" placeholder="Enter Amount" required>
                        </div>
                    </div>

                    <button type="submit" name="submit" class="voucherbtn">Generate Voucher</button>
                </form>
            </div>
        </div>
    </div>

</body>

@include('partials.footer')

</html>