<!DOCTYPE HTML>
<html>
<head>
  <title>Calculator</title>
<link rel="stylesheet" href="calstyle.css">
</head>
<body>
<div align=center>
<form method="POST">
<?php
include_once 'cal.php';
echo "<input type='text' readonly='true' align='right' name='display' class='i1' value='$_SESSION[a]'>";
?>

<br>
  <button type="submit" name="7">7</button>
    <button type="submit" name="8">8</button>
      <button type="submit" name="9">9</button>
        <button type="submit" name="C">C</button><br>
          <button type="submit" name="4">4</button>
            <button type="submit" name="5">5</button>
              <button type="submit" name="6">6</button>
                <button type="submit" name="+">+</button><br>
                  <button type="submit" name="1">1</button>
                    <button type="submit" name="2">2</button>
                      <button type="submit" name="3">3</button>
                        <button type="submit" name="-">-</button><br>
                          <button type="submit" name="0">0</button>
                            <button type="submit" name="*">*</button>
                              <button type="submit" name="/">/</button>
                                <button type="submit" name="=" style="background-color:blue; color:white; ">=</button>

</form>

</div>

</body>

</html>
