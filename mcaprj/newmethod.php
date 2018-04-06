<html>
<head>
<title>quiz</title>
</head>
<body>
<form action="quiz_result.php" method="post" id="quiz">

……..Form Here……..

</form>
<li>



<h3>HTML Stands for...</h3>

<div>

<input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />

<label for="question-1-answers-A">A) Hypertext Markup Language </label>

</div>

<div>

<input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />

<label for="question-1-answers-B">B) Hypertext Markup</label>

</div>

<div>

<input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />

<label for="question-1-answers-C">C) Hypertext Programming</label>

</div>

<div>

<input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />

<label for="question-1-answers-D">D) None of the above</label>

</div>



</li>
<input type="submit" value="Submit Quiz" />
<?php

if(isset($_POST["submit"]))
{
	echo "hi";
include("connection.php");
 $answer1 = $_POST['question-1-answers'];

$answer2 = $_POST['question-2-answers'];

$answer3 = $_POST['question-3-answers'];

$answer4 = $_POST['question-4-answers'];

$answer5 = $_POST['question-5-answers'];



$totalCorrect = 0;

if ($answer1 == "B") { $totalCorrect++; }

if ($answer2 == "A") { $totalCorrect++; }

if ($answer3 == "C") { $totalCorrect++; }

if ($answer4 == "D") { $totalCorrect++; }

if ($answer5) { $totalCorrect++; }
}
?>

echo "<div id='results'>$totalCorrect / 5 correct</div>";
</body>
</html>