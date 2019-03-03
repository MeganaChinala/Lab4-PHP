<html>

<head>
    <title>Quiz Exercise</title>
</head>

<body>
  <h1>Let's See How Well you Know Megana</h1>

  <?php
  $score = 0;
  $questions = [
                "Where does Megana go to school?",
                "How many siblings does Megana have?",
                "Megana is an SI leader for what course?",
                "What sport did Megana play in high school?",
                "Megana's favorite gourmet chocolate is?"
               ];
  $answers = [
                "University of Kansas",
                "1",
                "EECS 168",
                "Basketball",
                "Ferrero Rochers"
             ];
  for($i = 0; $i < 5; $i++)
  {
    print "Question ".($i+1).": ".$questions[$i]."<br>";
    print "You answered: ".$_POST["q".($i+1)]."<br>";
    print "Correct answer: ".$answers[$i]."<br>";
    $score += (($_POST["q".($i+1)] == $answers[$i]) ? 1 : 0);
    print "<br>";
  }
  print "You got a ".$score. "/5 right. Quiz Score: ".($score*20)."%";

?>
</body>
</html>