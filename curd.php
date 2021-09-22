<?php
class Database
{
	private $connection;
	public function connection_db()
	{
		$this->connection = mysqli_connect("localhost","root","","crud");
		if(mysqli_connect_error())
		{
			echo "Error:", mysqli_connect_error();
		}
	}
	public function data($var)
	{
      $return = mysqli_real_escape_string($this->connection, $var);
      return $return;
	}
	if(isset($_POST['submit']))
{
     $fname = $database->data($_POST['fname']);
     $lname = $database->data($_POST['lname']);
     $gender =$_POST['gender'];
     $email = $database->data($_POST['email']);
     $jdate = $database->data($_POST['jdate']);
     $deptname = $database->data($_POST['dept']);
     $hob = $database->data($_POST['hobbies']);

     //for image
     $filename= $_FILES["image"]["name"];
     $tempname=$_FILES['image']['tmp_name']; 
     $folder = "images/".$filename;
     move_uploaded_file($tempname, $folder);

     $result = $database->insert($fname, $lname, $gender, $email, $jdate, $deptname,$hob, $folder);
     if($result)
    {
        echo "success";
        header('location:index.php');
    }
    else
   {
        echo "error".mysqli_connect_error($result);
   }
}

public function insert($fname, $lname, $gender, $email, $jdate, $deptname, $image, $hob)
{
     $sql = "INSERT INTO phpcurd(FirstName, LastName, Gender, Email, Jdate, DeptName, Picture, Hobbies)
             VALUES('$fname', '$lname', '$gender', '$email', '$jdate', '$deptname', '$image', '$hob')";
     $result = mysqli_query($this->connection, $sql);
     if($result)
     {
          return true;
     }
     else
    {
         return false;
    }
}

public function read($id = null)
{
	$sql = "SELECT * FROM phpcurd";
	if($id){ $sql .= " WHERE id=$id";}
	$result = mysqli_query($this->connection,$sql);
	return $result;
}
public function update($fname, $lname, $gender, $email, $jdate, $deptname, $image, $id, $hob)
{
        $sql = "UPDATE phpcurd set FirstName = '$fname', LastName='$lname', Gender='$gender', Email='$email', Jdate='$jdate', DeptName= '$deptname' ,Picture='$image', Hobbies='hob' where id = $id";
        $result = mysqli_query($this->connection, $sql);
        if($result)
        {
		return true;
	}
        else{
		return false;
	}
}
public function delete($id)
{
	$sql = "DELETE from phpcurd where id = $id";
	$result = mysqli_query($this->connection, $sql);
	 if($result)
         {
	 	return true;
	 }
         else
         {
	 	return false;
	 }
}

}
?>