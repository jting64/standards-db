<?php
  ini_set('display_errors', 1);
  ini_set('displat_startup_errors', 1);
  error_reporting(E_ALL);
  include("classes.php");

  function showGrades($selected){
    echo '<option value="NONE">&nbsp;</option> <option value="K">K</option>';
    for($i=1; $i<=12; $i++){
      echo '<option value="G' . $i . ($selected==$i?'"selected="selected':'') .
       '">' . $i . '</option>';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
      //header space
      $(document).ready(function(){
        var upmargin=50;
        document.getElementById("top").style.paddingTop=document.getElementById("header").offsetHeight+upmargin+"px";

        var courses=document.getElementById("courses").children;
        console.log(courses);
        for(var i=0; i<courses.length; i++){
          courses[i].id=courses[i].innerHTML.replace(/\s/g, '');
          courses[i].addEventListener("click", changeCourseStyle, false);
        }
      });
      function changeCourseStyle(ev){
        console.log(ev);
        var c=document.getElementById("courses").children;
        for(var j=0; j<c.length; j++){
          c[j].style="";
        }
        ev.target.style="background-color:#aaaaaa;color: blue;";
      }

      //add onclick to courses
    </script>
  </head>

  <body>
    <div id="header">
      <h1>PAS Standards Review</h1>
      <ul id="courses">
        <li>Math and Science</li>
        <li>English and Foreign Language</li>
        <li>Social Studies</li>
        <li>Computer Science</li>
        <li>Arts and Digital Media</li>
        <li>Physical Education</li>
      </ul>
      <h3>Standard</h3>
      <textarea col="10", row="5" style="width: 50.9%">
"Key Ideas and Details --Cite specific textual evidence to support analysis of primary and secondary sources, connecting insights gained from specific details to an understanding of the text as a whole."
      </textarea>
      <p id="standardcontent">
        <?php
          //implement standard output
        ?>
      </p>
      Standard Source:<input type="text" value="commoncore">
      Standard Reference: <input type="text" value="11-12.1">
      Grades: <select name="FromGrade" form="carform">
        <?php
          showGrades(12);
        ?>
      </select>
      to<select name="ToGrade" form="carform" style="margin-right: 10px">
        <?php
          showGrades(12);
        ?>
      </select>
      Tags: <input type="text">
    </div>

    <div id="top"></div>

    <table id="description">
      <tbody>
        <tr>
          <td>KNOW</td>
          <td>DO</td>
          <td>BE</td>
        </tr>
        <tr>
          <td><textarea cols="10" rows="5">&nbsp;1-Distinguish between primary and secondary sources 2-Distinguish between objective and subjective evidence</textarea></td>
          <td><textarea cols="10" rows="5">&nbsp;1-Ability to identify and evaluate evidence -Using evidence to support arguments</textarea></td>
          <td><textarea cols="10" rows="5">Academic Honesty, Integrity</textarea></td>
        </tr>
      </tbody>
    </table>

    <div id="webbdok">
      <h3>Webb DOK</h3>
      <p><input type="radio" name="webb"/>Level 1: Recall and Reproduction</p>
      <p><input type="radio" name="webb"/> Level 2: Skills and Concepts</p>
      <p><input type="radio" name="webb"/> Level 4: Extended Thinking</p>
      <p><input type="radio" name="webb"/> Level 3: Short-term Strategic Thinking</p>
      <p>Evidence:</p>
      <textarea cols="2" style="width:100%;" rows="10"></textarea>
    </div>

    <div id="border">
      Keywords:<br />
      <img src="content.png" />
    </div>

    <div id="other">
      <h3>Relevance</h3>
      <p>Design Thinking:</p>
      <p><textarea cols="10" style="width:100%;" rows="4"></textarea></p>
      <p>STEAM:</p>
      <p><textarea cols="10" style="width:100%;" rows="4"></textarea></p>
      <p>Action:</p>
      <p><input type="radio" name="relevance" />Keep as is <input type="radio" name="relevance" />Edit <input type="radio" name="relevance" /> Remove</p>
      <p>Additional Notes (why edit or delete?)</p>
      <p><textarea cols="10" style="width:100%;" rows="4"></textarea></p>
      <p><input type="submit" value="Save" /> <input type="submit" value="Previous Standard" /> <input type="submit" value="Next Standard" /></p>
    </div>

  </body>
</html>
