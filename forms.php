<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forms in PHP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <h2 class="text-center text-primary fs-3">Forms </h2>
  <form class="container mt-4" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">FullName</label>
      <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Email</label>
      <input type="email" name="email" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="rounded hover:text-tertiary btn btn-primary">Submit</button>
  </form>
</body>

</html>
<?php
$nameErr = "";
$emailErr = "";
//check if the form is submitted or not
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //check if name is empty or not
  if (empty($_POST["name"])) {
   echo $nameErr = "Name is required";
  } else {
    echo "FullName is:" . " " . htmlspecialchars($_POST["name"]) . "<br>";
  }
  //check if the email is empty or not
  if (empty($_POST["email"])) {
   echo $emailErr = "Email is required";
  } else {
    echo "Email address is:" . " " . htmlspecialchars($_POST["email"]);
  }
}
?>