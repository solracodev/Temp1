<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Title</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php
$book_title = "bigger-leaner-stronger";
/* Example usage of the Amazon Product Advertising API */
include("/wp-content/themes/booktheme/functions/AmazonAPI/amazon_api_class.php");

$obj = new AmazonProductAPI();

try
{
	$result = $obj->searchProducts('"' . $book_title . '"',
		AmazonProductAPI::BOOKS,
		"TITLE");
}
catch(Exception $e)
{
	echo $e->getMessage();
}

switch($book_title) {

	case "muscle-myths":
	echo '<iframe src="'. $result->Items->Item->CustomerReviews->IFrameURL .'" width="100%" scrolling="auto" frameborder="0" height="600"></iframe>';	
	break;
	case "bigger-leaner-stronger":
	echo '<iframe src="'. $result->Items->Item->CustomerReviews->IFrameURL .'" width="100%" scrolling="auto" frameborder="0" height="600"></iframe>';
	break;
	case "cardio-sucks":
	echo '<iframe src="'. $result->Items->Item->CustomerReviews->IFrameURL .'" width="100%" scrolling="auto" frameborder="0" height="600"></iframe>';
	break;
	case "the-shredded-chef":
	echo '<iframe src="'. $result->Items->Item->CustomerReviews->IFrameURL .'" width="100%" scrolling="auto" frameborder="0" height="600"></iframe>';
	break;
}
?>

</body>
</html>