<?php
$movie_name=$_REQUEST["film"];

$servername = "sql9.freemysqlhosting.net"; 
$database = "sql9261490";
$username = "sql9261490"; 
$password = "XVE35hbJ2t";

$conn = mysqli_connect($servername,$username,$password,$database);

$sql="SELECT id,title,rel,director,producer,rating,img,synopsis FROM movie WHERE film='$movie_name'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$movieid=$row["id"];
$title=$row["title"];
$releasedate=$row["rel"];
$director=$row["director"];
$producer=$row["producer"];
$rating=$row["rating"];
$image=$row["img"];
$synopsis=$row["synopsis"];

$year=explode("-",$releasedate)[0];

$artors=array();

$sql="SELECT name FROM actor a JOIN casting c on a.ID=c.actorid WHERE c.movieid='$movieid'";
$results=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($results)) {
	array_push($actors,$row["name"]);
}

$reviews=array();
$sql="SELECT rating,critic,publication,review FROM reviews WHERE movieid='$movieid'";
$resutls=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($results)) {
	array_push($reviews,$row);
}

mysqli_close($conn);
?>


<!doctype html>
<html lang="en">
<head>
<link href="movie.css" type="text/css" rel="stylesheet">
<meta charset="utf-8">
<title><?=$title ?> - Rancid Tomatoes</title>
</head>

<body id="Wrapper">
	<img src="banner.png" alt="Banner"/>
		<table>
			<tr>
				<th colspan="3"  class="heading">
					<?=$title ?> (<?=$year ?>)
				</th>
			</tr>
			<tr>
				<td><img src="<?=$image ?>" alt="<?=$title ?>"/> </td>
				<td colspan="2">
					<dl>
						<dt>Starring</dt>
						<?php
						foreach ($actors as $actor) {
						?>
						<dd><?=$actor ?></dd>
						<?php
						}
						?>
						<dt>Director</dt>
						<dd><?=$director ?></dd>
						<dt>Producer</dt>
						<dd><?=$producer ?></dd>
						<dt>Rating</dt>
						<dd><?=$rating ?></dd>
						<dt>Release Date</dt>
						<dd><?=$releasedate ?></dd>
						<dt>Synopsis</dt>
						<dd><?=$synopsis ?></dd>
					</dl>
				</td>
			</tr>
			<tr>
				<th colspan="3" class="heading">Review</th>
			</tr>
			<?php
			foreach($reviews as $review)
			{
				$tomatoimage=strtolower(trim($review["rating"]));
			?>
			<tr class="review">
				<th>
					<?=$review["critic"] ?><br>
					<?=$review["publication"] ?>
				</th>
				<td>
					<img src="<?=$tomatoimage ?>.gif" alt="<?=$tomatoimage ?>"/>
				</td>
				<td>
					<?=$review["review"] ?>
				</td>
			</tr>
			<?php
			}
			?>
		</table>
</body>
</html>
