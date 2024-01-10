<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sign In/Sign up</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/custom.css"/>
    </head>
    <body class="antialiased">
        <h1>Register Here</h1>
        <form method="post" action="">
  <table>
    <tr>
      <td>User Name:</td>
      <td><input type="text" name="username" required></td>
    </tr>
    <tr>
      <td>NIC:</td>
      <td><input type="text" name="nic" required></td>
    </tr>
    <tr>
      <td>First Name:</td>
      <td><input type="text" name="firstName" required></td>
    </tr>
    <tr>
      <td>Last Name:</td>
      <td><input type="text" name="lastName"
 
required></td>
    </tr>
    <tr>
      <td>Phone Number:</td>
      <td><input type="text" name="phoneNumber" required></td>
    </tr>
    <tr>
      <td>Email:</td>
      <td><input type="email" name="email" required></td>
    </tr>
    <tr>
      <td>Address:</td>
      <td><textarea name="address" required></textarea></td>
    </tr>
    <tr>
      <td>Password:</td>
      <td><input type="password" name="password" required></td>
    </tr>
    <tr>
      <td>Confirm Password:</td>
      <td><input type="password" name="confirmPassword" required></td>
    </tr>
    <tr>
      <td>Vehicle No:</td>
      <td><input type="text" name="vehicleNo"></td>
    </tr>
    <tr>
      <td>Vehicle Type:</td>
      <td><input type="text" name="vehicleType"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="register" value="REGISTER"></td>
    </tr>
  </table>
</form>
        




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
</html>