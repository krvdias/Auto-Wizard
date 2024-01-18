<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Auto Wizards - Registration</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            /* Import Google font - Poppins */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  /*font-family: "Poppins", sans-serif;*/
}
body {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  background: url(storage/automobile1.png);
}

h2{
    color: #fff;
    text-align: center;
}

.container {
  position: relative;
  max-width: 700px;
  width: 100%;
  background: rgba(5, 17, 242, 0.2);
  padding: 25px;
  border-radius: 8px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}
.container header {
  font-size: 1.5rem;
  color: #333;
  font-weight: 500;
  text-align: center;
}
.container .form {
  margin-top: 30px;
}
.form .input-box {
  width: 100%;
  margin-top: 20px;
}
.input-box label {
  color: #fff;
}
.form :where(.input-box input, .select-box) {
  position: relative;
  height: 50px;
  width: 100%;
  outline: none;
  font-size: 1rem;
  color: #707070;
  margin-top: 8px;
  border: 1px solid #ddd;
  border-radius: 6px;
  padding: 0 15px;
}
.input-box input:focus {
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
}
.form .column {
  display: flex;
  column-gap: 15px;
}
.form .gender-box {
  margin-top: 20px;
}
.gender-box h3 {
  color: #333;
  font-size: 1rem;
  font-weight: 400;
  margin-bottom: 8px;
}
.form :where(.gender-option, .gender) {
  display: flex;
  align-items: center;
  column-gap: 50px;
  flex-wrap: wrap;
}
.form .gender {
  column-gap: 5px;
}
.gender input {
  accent-color: rgb(130, 106, 251);
}
.form :where(.gender input, .gender label) {
  cursor: pointer;
}
.gender label {
  color: #707070;
}
.address :where(input, .select-box) {
  margin-top: 15px;
}
.select-box select {
  height: 100%;
  width: 100%;
  outline: none;
  border: none;
  color: #707070;
  font-size: 1rem;
}
.form button {
  height: 55px;
  width: 100%;
  color: #fff;
  font-size: 1rem;
  font-weight: 400;
  margin-top: 30px;
  border: none;
  cursor: pointer;
  transition: all 0.2s ease;
  background: rgb(5, 17, 242);
}
.form button:hover {
  background: rgb(88, 56, 250);
}
/*Responsive*/
@media screen and (max-width: 500px) {
  .form .column {
    flex-wrap: wrap;
  }
  .form :where(.gender-option, .gender) {
    row-gap: 15px;
  }
}

        </style>
    </head>
    <body>
    <section class="container">
      <h2>Registration</h2>
      <form method="post" action="{{route('customer.save')}}" class="form">
        @csrf
        <div class="input-box">
          <label>Name</label>
          <div class="column">
            <input type="text" placeholder="First Name" name="first_name" required />
            <input type="text" placeholder="Last Name" name="last_name" required />
          </div>
        </div>

        <div class="input-box">
          <label>Email Address</label>
          <input type="text" placeholder="Enter email address" name="cus_email" required />
        </div>

        <div class="input-box">
          <label>User Name</label>
          <input type="text" placeholder="Enter user name" name="user_name" required />
        </div>

        <div class="input-box">
          <label>Password</label>
          <input type="password" placeholder="Password" required />
          <label>Confirm Password</label>
          <input type="password" placeholder="Password" name="password" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="number" placeholder="Enter phone number" name="cus_mobile" required />
          </div>
          <div class="input-box">
            <label>Birth Date</label>
            <input type="date" placeholder="Enter birth date" name="cus_dob" required />
          </div>
        </div>
        <div class="input-box address">
          <label>Address</label>
          <!--<input type="text" placeholder="Enter street address" required />
          <input type="text" placeholder="Enter street address line 2" required />-->
          <input type="text" id="streetAddress" placeholder="Enter street address" oninput="updateCombinedAddress()" required />
          <input type="text" id="streetAddressLine2" placeholder="Enter street address line 2" oninput="updateCombinedAddress()" required />
          <!-- You can add a hidden input field to store the combined address -->
          <input type="hidden" id="combinedAddressHidden" name="combinedAddress" />
          <div class="column">
            <div class="select-box">
              <select name="v_type" required>
                <option hidden>Vehicle Type</option>
                <option>Car</option>
                <option>Van</option>
                <option>SUV</option>
                <option>Truck</option>
              </select>
            </div>
            <input type="text" placeholder="Vehicle Number" name="vehicle_no" required />
          </div>
        </div>
        <button type="submit" value="AddCustomer" >Submit</button>
      </form>
    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>

    <script>
      function updateCombinedAddress() {
  // Get values from input fields
      var streetAddress = document.getElementById("streetAddress").value;
      var streetAddressLine2 = document.getElementById("streetAddressLine2").value;

  // Combine the values
      var combinedAddress = streetAddress + ', ' + streetAddressLine2;

  // Update the hidden input field with the combined address
      document.getElementById("combinedAddressHidden").value = combinedAddress;

  // Optionally, you can send the combined address to the server here if needed
  // Use AJAX or any other method to post the data to the server
  // Example: sendCombinedAddressToServer(combinedAddress);
}
    </script>

</html>
