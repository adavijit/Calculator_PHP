<?php
session_start();
//checking if any of the button is pressed or not
if( isset($_POST['9']) || isset($_POST['8']) || isset($_POST['7']) || isset($_POST['6']) ||
isset($_POST['5']) || isset($_POST['4']) || isset($_POST['3']) || isset($_POST['2']) || isset($_POST['1'])
|| isset($_POST['0'])|| isset($_POST['*'])|| isset($_POST['/'])|| isset($_POST['+']) || isset($_POST['-'])
|| isset($_POST['C']))
{
  $_SESSION['p']=0;
$_SESSION['q']=0;
}
else {
$_SESSION['q']=2;
$_SESSION['p']=1;
}

$n=20;
//assigning values for switch case
if(isset($_POST['9']))
{
    $n=9;
}
if(isset($_POST['8']))
{
    $n=8;
}
if(isset($_POST['7']))
{
    $n=7;
}
if(isset($_POST['6']))
{
    $n=6;
}
if(isset($_POST['5']))
{
    $n=5;
}
if(isset($_POST['4']))
{
    $n=4;
}
if(isset($_POST['3']))
{
    $n=3;
}
if(isset($_POST['2']))
{
    $n=2;
}
if(isset($_POST['1']))
{
    $n=1;
}
if(isset($_POST['0']))
{
    $n='0';
}
if(isset($_POST['+']))
{

    $n='+';
    $_SESSION['d']='+';
}
if(isset($_POST['-']))
{

    $n='-';
    $_SESSION['d']='-';
}
if(isset($_POST['*']))
{

    $n='*';
    $_SESSION['d']='*';
}
if(isset($_POST['/']))
{

    $n='/';
    $_SESSION['d']='/';
}
if(isset($_POST['=']))
{
    $n='=';
}
if(isset($_POST['C']))
{
    $n='C';
}

//printing to display and storing input into session variables
switch ($n) {
  case 1:
      $a=1;
      $_SESSION['a']=$_SESSION['a'].$a;
      if($_SESSION['d']!='+' || $_SESSION['d']!='-' || $_SESSION['d']!='*' || $_SESSION['d']!='/')
      {
        $_SESSION['q']=1;
      $_SESSION['b']=$_SESSION['b'].$a;
      break;
      }
      else {
      $_SESSION['c']=$_SESSION['c'].$a;
      }

      break;
  case 2:
      $a=2;
      $_SESSION['a']=$_SESSION['a'].$a;
      if($_SESSION['d']!='+' || $_SESSION['d']!='-' || $_SESSION['d']!='*' || $_SESSION['d']!='/')
      {  $_SESSION['q']=1;
      $_SESSION['b']=$_SESSION['b'].$a;
      }
      else {
        $_SESSION['c']=$_SESSION['c'].$a;
      }
      break;
  case 3:
      $a=3;
      $_SESSION['a']=$_SESSION['a'].$a;
      if($_SESSION['d']!='+' || $_SESSION['d']!='-' || $_SESSION['d']!='*' || $_SESSION['d']!='/')
      {  $_SESSION['q']=1;
        $_SESSION['b']=$_SESSION['b'].$a;
      }
      else {
         $_SESSION['c']=$_SESSION['c'].$a;
      }
      break;
  case 4:
      $a=4;
      $_SESSION['a']=$_SESSION['a'].$a;
      if($_SESSION['d']!='+' || $_SESSION['d']!='-' || $_SESSION['d']!='*' || $_SESSION['d']!='/')
      {  $_SESSION['q']=1;
       $_SESSION['b']=$_SESSION['b'].$a;
      }
      else {
          $_SESSION['c']=$_SESSION['c'].$a;
      }
      break;
  case 5:
      $a=5;
      $_SESSION['a']=$_SESSION['a'].$a;
      if($_SESSION['d']!='+' || $_SESSION['d']!='-' || $_SESSION['d']!='*' || $_SESSION['d']!='/')
      {  $_SESSION['q']=1;
        $_SESSION['b']=$_SESSION['b'].$a;
      }
      else {
        $_SESSION['c']=$_SESSION['c'].$a;
      }
      break;
  case 6:
      $a=6;
      $_SESSION['a']=$_SESSION['a'].$a;
      if($_SESSION['d']!='+' || $_SESSION['d']!='-' || $_SESSION['d']!='*' || $_SESSION['d']!='/')
      {  $_SESSION['q']=1;
        $_SESSION['b']=$_SESSION['b'].$a;
      }
      else {
        $_SESSION['c']=$_SESSION['c'].$a;
      }

      break;
  case 7:
      $a=7;
      $_SESSION['a']=$_SESSION['a'].$a;
      if($_SESSION['d']!='+' || $_SESSION['d']!='-' || $_SESSION['d']!='*' || $_SESSION['d']!='/')
      {  $_SESSION['q']=1;
        $_SESSION['b']=$_SESSION['b'].$a;
      }
      else {
        $_SESSION['c']=$_SESSION['c'].$a;
      }
      break;
  case 8:
      $a=8;
      $_SESSION['a']=$_SESSION['a'].$a;
      if($_SESSION['d']!='+' || $_SESSION['d']!='-' || $_SESSION['d']!='*' || $_SESSION['d']!='/')
      {  $_SESSION['q']=1;
        $_SESSION['b']=$_SESSION['b'].$a;
      }
      else {
        $_SESSION['c']=$_SESSION['c'].$a;
      }
      break;
  case 9:
      $a=9;
      $_SESSION['a']=$_SESSION['a'].$a;
      if($_SESSION['d']!='+' || $_SESSION['d']!='-' || $_SESSION['d']!='*' || $_SESSION['d']!='/')
      {  $_SESSION['q']=1;
        $_SESSION['b']=$_SESSION['b'].$a;
      }
      else {
        $_SESSION['c']=$_SESSION['c'].$a;
      }
      break;
  case '0':
      $a=0;
      $_SESSION['a']=$_SESSION['a'].$a;
      if($_SESSION['d']!='+' || $_SESSION['d']!='-' || $_SESSION['d']!='*' || $_SESSION['d']!='/')
      {  $_SESSION['q']=1;
        $_SESSION['b']=$_SESSION['b'].$a;
      }
      else {
          $_SESSION['c']=$_SESSION['c'].$a;
           }
          break;
  case '+':
      $a='+';
      $_SESSION['a']=$_SESSION['a'].$a;
      break;
  case '-':
      $a='-';
      $_SESSION['a']=$_SESSION['a'].$a;



      break;
  case '*':
      $a='*';
      $_SESSION['a']=$_SESSION['a'].$a;
      break;
  case '/':
      $a='/';
      $_SESSION['a']=$_SESSION['a'].$a;
      break;
  case 'C':
      $_SESSION['a']="";
      $_SESSION['b']=0;
      $_SESSION['c']=0;
      $_SESSION['d']=0;
      break;
  case '=':
        if($_SESSION['d']=='+')
        {
          $_SESSION['a']=$_SESSION['c']+$_SESSION['b'];
        }
        if($_SESSION['d']=='-')
        {
          $_SESSION['a']=$_SESSION['c']-$_SESSION['b'];
        }
        if($_SESSION['d']=='*')
        {
          $_SESSION['a']=$_SESSION['c']*$_SESSION['b'];
        }
        if($_SESSION['d']=='/')
        {
          $_SESSION['a']=$_SESSION['c']/$_SESSION['b'];
        }
       /*echo "a".$_SESSION['a']."<br>";
  echo "b".$_SESSION['b']."<br>";
  echo "c".$_SESSION['c']."<br>";
  echo "d".$_SESSION['d']."<br>";*/

        unset($_SESSION['b']);
        unset($_SESSION['c']);
        unset($_SESSION['d']);
      session_destroy();
      break;
  default:
     $a=0;
    if($_SESSION['p']==1)
    {
    $_SESSION['a']="";
    $_SESSION['b']=0;
    $_SESSION['c']=0;
    if($_SESSION['q']!=0);
    {
    $_SESSION['d']=0;
    }
    }
    break;
}


?>
