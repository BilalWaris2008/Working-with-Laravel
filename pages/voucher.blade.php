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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">]
    <link rel="stylesheet" href="{{ asset('css/voucher.css') }}">
  
</head>



@include('partials.header')

<body>

    <div class="voucher-container">
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

@include('partials.footer')

</html>