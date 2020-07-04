<!DOCTYPE html>
<html>
	<head>
		<title> Compiler</title>
	</head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<?php
$current=`
#include<iostream>
	using namespace std;

	int main()
	{
		cout << "Hello World!";
		return 0;
	}`;
$answer="";
if(!empty($_POST)){
	$current=$_POST['app_input'];
	$file="hello.cpp";
	file_put_contents($file,$current);
	putenv("PATH=C:\Program Files (x86)\CodeBlocks\MinGW\bin");
	shell_exec("g++ hello.cpp -o hello.exe");
	$answer=shell_exec("hello.exe");
 
}

?> 






 






<body> 
<!--  
<div class="container" style="text-align:center;margin:0px;">
		<h5  class="text-center"><b>COMPILER</b></h5> 
</div> --> 
<div class="row" style=" margin:10px;">
	<div class="well col-sm-6 col-lg-6 parts"> 
	     <h2 class="text-center">Input</h2>
		 <div class="form-group ">
				<form action=""  method="post"> 
					<div >
					<textarea     name="app_input"   ><?php echo $current;  ?> </textarea>
					</div>
 					<input type="submit" name="submit" class=" btn btn-primary text-center" value="COMPILE"> 
				</form>
		</div> 
	</div>

	<div class="well col-sm-6 col-lg-6 parts"> 
	     <h2 class="text-center">Output</h2>
		 <div class="form-group  ">
				<form action="" method="post"> 
					<div  >
						<textarea    name="app_output"   readonly> <?php echo $answer;  ?></textarea>
					</div>
 				</form>
		</div> 
	</div>
 
</div>





<!-- 
<form action="" method="post">
	<textarea style="background-color: yellow" name="app_input"  cols="70" rows="40" placeholder="  enter the code here">
		<?php echo $current;  ?>
	</textarea>
	<input type="submit" name="submit" style="background-color: red">
	<textarea style="background-color: blue;color:white" name="app_output"  cols="70" rows="40" placeholder=" see output here">
		<?php echo $answer;  ?>
	</textarea>
</form>
  -->
 
 
</body>
<script src="script.js"></script>
<link rel="stylesheet" href="style.css">

</html>   

<?php
 

?>