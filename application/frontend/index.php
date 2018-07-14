<h1><strong>Frontend</strong></h1>
<p>Try to connect to&nbsp; Backend</p>
<p>&nbsp;</p>
<p>I try to Connect from Frontend to Backend </p>
<p>&nbsp;</p>
<p>Frontend CODE:</p>
<p><span style="color: #00ff00;">&lt;?php</span><span style="color: #00ff00;">$ch = curl_init();<br /> curl_setopt($ch, CURLOPT_URL, "http://php-backend/backend.php");<br /> curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);<br /> curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);</span><span style="color: #00ff00;">if(curl_exec($ch) === FALSE) {<br /> echo "Error: " . curl_error($ch);<br /> } else {<br /> echo curl_exec($ch);<br /> }</span><span style="color: #00ff00;">curl_close($ch);</span><span style="color: #00ff00;">?&gt;</span></p>
<p>&nbsp;</p>
<p>The Backend try to Connect to&nbsp; the Database</p>
<p>Backend&nbsp; Code:</p>
<blockquote><span style="color: #0000ff;">&lt;?php<br />$servername = "db";<br />$database = "backend";<br />$username = "backend";<br />$password = "backend";</span><span style="color: #0000ff;">// Create connection<br />$conn = new mysqli($servername, $username, $password);<br />// Check connection<br />if ($conn-&gt;connect_error) {<br /> die("Connection failed: " . $conn-&gt;connect_error);<br />}<br /> echo "Connected successfully";<br />?&gt;</span></blockquote>
<p>&nbsp;</p>
<p>Result: </p>
<p>&nbsp;</p>

<p><span style="color: #0000ff;"><span style="text-decoration: underline;"><strong>-----------------------------------------------</strong></span><br /></span></p>

<?php

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://php-backend/backend.php");
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    if(curl_exec($ch) === FALSE) {
         echo "Error: " . curl_error($ch);
    } else {
         echo curl_exec($ch);
    }

    curl_close($ch);

?>
<p><span style="color: #0000ff;"><span style="text-decoration: underline;"><strong>-----------------------------------------------</strong></span><br /></span></p>


<h1>Example for brocken Connection</h1>

<p><br />If the Connection is not working</p>
<p>&nbsp;</p>
<p>If the Connection is not working because of a Wrong Server in</p>
<p>curl_setopt($ch, CURLOPT_URL, "http://<span style="color: #ff0000;">php-backend2</span>/backend.php");</p>
<p>Result is:</p>




<p><span style="text-decoration: underline; color: #ff0000;"><strong>-----------------------------------------------</strong></span><span style="color: #0000ff;"><br /></span></p>
<?php

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://php-backend2/backend.php");
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    if(curl_exec($ch) === FALSE) {
         echo "Error: " . curl_error($ch);
    } else {
         echo curl_exec($ch);
    }

    curl_close($ch);

?>
<p><span style="text-decoration: underline; color: #ff0000;"><strong>-----------------------------------------------</strong></span><span style="color: #0000ff;"><br /></span></p>




<h1>Example for brocken Connection Wrong DB Credentials</h1>

<p><br />If the Connection is not working</p>
<p>&nbsp;</p>
<p>If the Connection is not working because of  Wrong DB Credentials in</p>

<blockquote><span style="color: #0000ff;">&lt;?php<br />$servername = "db";<br />$database = "backend";<br />$username = "backend";<br />$password = "backendddd";</span><span style="color: #0000ff;">// Create connection<br />$conn = new mysqli($servername, $username, $password);<br />// Check connection<br />if ($conn-&gt;connect_error) {<br /> die("Connection failed: " . $conn-&gt;connect_error);<br />}<br /> echo "Connected successfully";<br />?&gt;</span></blockquote>


<p>Result is:</p>




<p><span style="text-decoration: underline; color: #ff0000;"><strong>-----------------------------------------------</strong></span><span style="color: #0000ff;"><br /></span></$
<?php

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://php-backend/backend2.php");
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    if(curl_exec($ch) === FALSE) {
         echo "Error: " . curl_error($ch);
    } else {
         echo curl_exec($ch);
    }

    curl_close($ch);

?>
<p><span style="text-decoration: underline; color: #ff0000;"><strong>-----------------------------------------------</strong></span><span style="color: #0000ff;"><br /></span></$



