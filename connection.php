if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$task = $_POST['taskoption'];
$flavor = $_POST['flavor'];
$std = $_POST['start-date'];
$end = $_POST['end-date'];

$sql = "insert into emp(image,flavor,startdate,enddate)values('$task','$flavor','$std','$end')";

$result = mysqli_query($con,$sql);

if(!$result)
{
        echo "Not inserted";
}
else
{
        echo "successfully inserted";
       echo "<p>$std<p>";
}
