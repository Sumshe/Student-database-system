<?php $dbconn = pg_connect("host=127.0.0.1 dbname=project user=postgres password=1234")
    or die('Could not connect: ' . pg_last_error());
  
            if($_POST['delete'])
			{
                $query=$_POST['delete'];
				$query1="delete from student where usn ilike '".$query."';";
                $res=pg_query($query1);
                if($res)
				{	
					echo "Data Deleted!";
				}
             }
?>
<html>
<head>
    <title>
        Loading
    </title>
    <link rel="stylesheet" href="Animation.css">
</head>
    <body>
        <script>
            function redirect() 
            {
                setTimeout(function() { window.open("home.html","_self") }, 1000);
            }
            redirect();
        </script>
        <div style="padding-top:10%">
        <div class="sk-circle">
          <div class="sk-circle1 sk-child"></div>
          <div class="sk-circle2 sk-child"></div>
          <div class="sk-circle3 sk-child"></div>
          <div class="sk-circle4 sk-child"></div>
          <div class="sk-circle5 sk-child"></div>
          <div class="sk-circle6 sk-child"></div>
          <div class="sk-circle7 sk-child"></div>
          <div class="sk-circle8 sk-child"></div>
          <div class="sk-circle9 sk-child"></div>
          <div class="sk-circle10 sk-child"></div>
          <div class="sk-circle11 sk-child"></div>
          <div class="sk-circle12 sk-child"></div>
        </div>
        </div>
    </body>
</html>