 <!DOCTYPE html>
<html>
<head>
<style>
body {
  background-image: url('images/bg.png');
background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}

h1{
text-align:center;
	font-size:50px;
	font-weight:bold;
	color:#00008B;
}
input{
	width:50%;
	padding:15px 20px;
	font-size:18px;
	margin:15px 300px 20px;
	color:black;
	background:#4169E1;
	font-weight:bold;
	border:none;
	border-radius:20px;
	outline:none;
	
}
textarea{
height:100px;
width:52%;
margin:15px 300px 20px;
background:#ADD8E6;
color:#191970;
font-size:16px;
font-weight:bold;
outline:none;
}
</style>
</head>
<body>
<h1> Write Your Blog</h1>
<form action="writeblog.php" method="post">
<input type="text" name="blogername" placeholder="Enter your name"><br>
<input type="text" name="mail" placeholder="Email Address"><br>
<input type="text" name="vname" placeholder="Name your Blog "><br>
<textarea name="blog" placeholder="Write your blog here..............."></textarea>
<input type="submit" value="Submit" style="height:40px;width:120px;cursor:pointer;text-align:center;padding:5px;">
<input type="reset" value="Clear" style="height:40px;width:120px;cursor:pointer;text-align:center;padding:5px;background:red;">

<br/>
</body>
</html>
