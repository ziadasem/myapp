<?php
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "almoazen";


// Create connection
$conn = new mysqli($servername, $username, $password ,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$sql = "SELECT id  FROM almoazen";
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"].  "<br>";
        $user_name = '';
    if (!empty($_SESSION['name'])) {
     $user_name = $_SESSION['name'];
     echo "echo"  + $user_name ;
    }else{
        echo "error";
    }
    }
} else {
    echo "0 results";
}
$conn->close();*/

$url = 'http://testwebapi.justdevelopmentjo.com/api/AlmozenRegistry/SaveMozenRegistry';
$post_data = array(
    "id" => "0",
    "name" => "dummy",
    "email" => "dummy",
    "mobile" => "dummy",
    "videoLink" => "dummy",
    "country" => "dummy",
    "bod" => "dummy",
);
$json = json_encode($post_data);
$httpb= http_build_query($post_data);
//echo ($json);

$ch = curl_init($url);

//curl_setopt($ch , CURLOPT_URL ,$url);

curl_setopt($ch , CURLOPT_POST , 1 );

curl_setopt($ch , CURLOPT_POSTFIELDS ,$json);

curl_setopt($ch , CURLOPT_RETURNTRANSFER ,1);



$output = curl_exec($ch);


curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);


if ($output == FALSE){
    echo "curl error" .curl_error($ch);
}

curl_close($ch);
print_r($output);

/*$conn = new mysqli("SQL5045.site4now.net", "DB_A466D7_TestJustDev_admin", "Sa123@Sa1234" ,"AlmozenRegistry");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$conn->close();*/
?>