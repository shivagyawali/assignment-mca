<!DOCTYPE html>
<html lang="en">

<head>
    <title>Booking Accommodation</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>

    <center>
        <div class="mt-10 container ">
            <h1 class="text-5xl mb-2">Form For Booking Accommodation</h1>
            <form name="myForm" action="insert.php" method="post" onsubmit="return validateForm()">
                <div class="mb-4">
                    <label for="firstName">First Name:</label>
                    <input type="text" name="f_name" id="firstName" class="shadow mt-3 border rounded ">
                </div>
                <div class="mb-4">
                    <label for="lastName">Last Name:</label>
                    <input type="text" name="l_name" id="lastName" class=" shadow mt-3 border rounded  ">
                </div>

                <div class="mb-4">
                    <label for="emailAddress">Email Address:</label>
                    <input type="text" name="email" id="emailAddress" class="shadow mt-3 border rounded ">
                </div>
                <div class="mb-4">
                    <label for="arrivalDate">Arrival Date:</label>
                    <input type="date" name="arrival_date" id="arrivalDate" class="shadow mt-3 border rounded ">
                </div>
                <div class="mb-4">
                    <label for="depDate">Departure Date:</label>
                    <input type="date" name="dep_date" id="depDate" class="shadow mt-3 border rounded ">
                </div>

                <div class="mb-4">
                    <label for="country">Country:</label>
                    <select name="country" id="country" class="shadow mt-3 border rounded ">
                        <option value="">Select -----------</option>
                        <option value="nepal">Nepal</option>
                        <option value="india">India</option>
                        <option value="bhutan">Bhutan</option>
                        <option value="bangladesh">Bangladesh</option>
                        <option value="usa">USA</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label>Payment Mode : </label>
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio" name="payment" value="debit card" id="payment">
                        <span class="ml-2">Debit Card</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio" name="payment" value="credit card" id="payment">
                        <span class="ml-2">Credit Card</span>
                    </label>
                </div>
                <div class="mb-4">
                    <input type="submit" value="Submit" class="bg-blue-500 text-white font-bold py-1 px-2 rounded">
                    <input type="reset" value="Clear" class="bg-red-500 text-white font-bold py-1 px-2 rounded">

                </div>
            </form>
        </div>
    </center>
    <script>
        function validateForm() {
            let fname = document.forms["myForm"]["f_name"].value;
            let lname = document.forms["myForm"]["l_name"].value;
            let email = document.forms["myForm"]["email"].value;
            let arrival_date = document.forms["myForm"]["arrival_date"].value;
            let dep_date = document.forms["myForm"]["dep_date"].value;
            let country = document.forms["myForm"]["country"].value;
            let payment = document.forms["myForm"]["payment"].value;
            if (fname == "" || lname == "" || email == "" || arrival_date == "" || dep_date == "" || country == "" || payment == "") {
                alert("Field must be filled out");
                return false;
            }
        }
    </script>


</body>

</html>