<?
error_reporting(E_ALL);
ini_set('display_errors','1');
$dbname="Project System";
$dbusername="root";
$dbpassword="";
$table="students2";
try{
    $conn=new PDO('mysql:host=localhost;dbname=Project System',$dbusername,$dbpassword);



    $username=$_POST["name"];
    $email=$_POST["email"];
    $project=$_POST["project"];
    $password=$_POST["password"];


    $sql="INSERT INTO $dbname VALUES ('$username','$email','$project','$password')";
    $result=$conn->exec($sql);
    echo "Record Added";
    $conn=null;

       
}catch(PDOException $e){
    print "Error Occured:".$e->getMessage()."<br/>";
    die();
}




?>