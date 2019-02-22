<html>
    <link href='login.css' rel='stylesheet' >
    <style>
    
        body
    {
        margin: 0;
        padding: 0;
        background: url('blue.jpg');
        background-size: cover;
        color:white;
        font-family: sans-serif;
    } 
    .loginbox{
        width:460px;
        height:4600px;
        background:#000;
        color:#fff;
        opacity: .8;
        top:360%;
        left:50%;
        position:absolute;
        transform: translate(-50%,-50%);
        box-sizing:border-box;  
        padding: 30px 30px;
    }
    .school{
        width:100px;
        height:100px;
        border-radius:50%;
        position:absolute;
        top:-50px;
        left: calc(50% - 50px);
    }
    h1{
        font-weight: bold;
        margin-left:15%;
    }
    .loginbox input[type="text"], input[type="number"], input[type="date"], input[type="password"], input[type="checkbox"]{
        border:none;
        border-bottom: 1px solid #fff;
        background: transparent;
        height:25px;
        color:white;
        font-size:16px;
    }
    .loginbox input[type="submit"]{
        border:none;
        height:40px;
        color:red;
        font-size:18px;
        border-radius:20px;
    }

    body {
      font-family: 'Open Sans', sans-serif;
    }

    div#layout {
      text-align: center;
    }

    div#container {
      width: 1000px;
      height: 600px;
      margin: auto;
    }

    text.title {
      font-size: 22px;
      font-weight: 600;
    }

    text.label {
      font-size: 14px;
      font-weight: 400;
    }

    </style>
    <div class="loginbox">
    <img src="helal3.jpg" class="school"> 
    <h1>استمارة طلب تطوع</h1>

 <form action="" method="post">
        <p>Firstname:</p>
              <input type="text" name="fname" placeholder="enter your firstname"><br>
        <p>Secondname:</p>
             <input type="text" name="secname" placeholder="enter you secondname"><br><br>
        <p>Familyname:</p>
             <input type="text" name="famname" placeholder="enter you familyname"><br><br> 
        <p>Grandname:</p>
             <input type="text" name="grandname" placeholder="enter you grandname"><br><br>
       <p>Username:</p>
             <input type="text" name="username" placeholder="enter you username"><br><br>
       <p>Password:</p>
             <input type="password" name="pass" placeholder="enter you password"><br><br>
       <p>Gender:</p>
             <input type="text" name="gender" placeholder="enter you gender"><br><br>
       <p>Date of birth:</p>
             <input type="date" name="date" placeholder="enter you date"><br><br> 
       <p>National ID:</p>
             <input type="text" name="nationalid" placeholder="enter you nationalid"><br><br> 
       <p>Mobile:</p>
             <input type="text" name="mobile" placeholder="enter you mobile no"><br><br>   
       <p>Email:</p>
             <input type="text" name="email" placeholder="enter you email"><br><br>
       <p>Nationailty:</p>
             <input type="text" name="nationailty" placeholder="enter you nationailty"><br><br>
     <p>Address:</p>
             <input type="text" name="address" placeholder="enter you address"><br><br>
     <p>City:</p>
             <input type="text" name="city" placeholder="enter you city"><br><br>
     <p>Best way for communication:</p>
              <input type="checkbox" name="email" value="email"> Email <br>
              <input type="checkbox" name="mobile" value="mobile"> Mobile<br>
              <input type="checkbox" name="other" value="other" checked> Other<br><br>
     <hr> <hr>
     <h2>Second section</h2>
     <h2>Work, education, languages</h2>
     <hr>
     
     <h2>Work and Education:</h2>
     <hr>
              <input type="checkbox" name="student" value="student"> Student <br>
              <input type="checkbox" name="graduate" value="graduate"> Graduate<br>
     <p>Field of study or work:</p>
              <input type="checkbox" name="medical" value="medical"> Medical <br>
              <input type="checkbox" name="social" value="social"> Social<br>
              <input type="checkbox" name="translate" value="translate" checked> Translate<br>
              <input type="checkbox" name="other" value="other"> Other<br><br>
      <p>Univeristy:</p>
             <input type="text" name="uni" placeholder="enter you univeristy name"><br><br>
     <h5>or</h5>
      <p>School:</p>
              <input type="text" name="school" placeholder="enter you school name"><br><br> 
     <p>Classroom:</p>
              <input type="text" name="classroom" placeholder="enter you classroom"><br><br>
     <p>Current job:</p>
              <input type="text" name="job" placeholder="enter you job"><br><br>
     <p>Job Place</p>
              <input type="text" name="jobaddress" placeholder="enter you jpb address"><br><br>
      <h2>Language skills:</h2>
     <hr>
              <input type="checkbox" name="english" value="english"> English <br>
              <input type="checkbox" name="french" value="french"> French<br>
              <input type="checkbox" name="german" value="german"> German<br>
              <input type="checkbox" name="spanish" value="spanish"> Spanish<br><br>
              <input type="checkbox" name="other" value="other"> Other<br><br>
     <p> Other Language:</p>
              <input type="text" name="language" placeholder="enter the language"><br><br>
    <p> Do you have previous experiences in volunteering?</p>
              <input type="checkbox" name="yes" value="yes"> Yes <br>
              <input type="checkbox" name="no" value="no"> No <br>
     <p> If the answer is yes, please specify :</p>
              <input type="checkbox" name="un" value="un"> United Nations Organizations <br>
              <input type="checkbox" name="civil" value="civil"> Civil society organizations <br>
              <input type="checkbox" name="no" value="no"> Student Entities <br> 
     <p> If the answer is yes, please specify :</p>
              <input type="checkbox" name="un" value="un"> Practice <br>
              <input type="checkbox" name="civil" value="civil"> Photography <br>
              <input type="checkbox" name="no" value="no"> Arts <br>
              <input type="checkbox" name="un" value="un"> Writing reports <br>
              <input type="checkbox" name="civil" value="civil"> Web design/Graphics <br>
              <input type="checkbox" name="no" value="no"> Dealing with people with special needs <br>
              <input type="checkbox" name="db" value="db"> Create database("Access..etc") <br>
    <p> What skills do you own and can benefit from:</p>
              <input type="text" name="language" placeholder="enter your skills"><br><br>
      <h2>Third section</h2>
     <h2>Fields of volunteerism</h2>
     <hr>
     <p> Which of the following fields do you prefer to volunteer?:</p>
              <input type="radio" name="gender" value="male"> Psychological Support Team<br>
              <input type="radio" name="gender" value="female"> Health and safety team for training students<br>
              <input type="radio" name="gender" value="female"> Health team<br>
              <input type="radio" name="gender" value="other"> Immigration team
     <hr> <hr>
      <h2>Fourth section</h2>
     <h2>Time available to have a participation in volunteer work</h2>
     <hr>
     <p> Choose your free days :</p>
              <input type="checkbox" name="un" value="un"> Sunday <br>
              <input type="checkbox" name="civil" value="civil"> Monday <br>
              <input type="checkbox" name="no" value="no"> Tuesday <br>
              <input type="checkbox" name="un" value="un"> Wednesday <br>
              <input type="checkbox" name="civil" value="civil"> Thursday <br>
              <input type="checkbox" name="no" value="no"> Friday <br>
              <input type="checkbox" name="db" value="db"> Saturday <br>
      <p> Time :</p>
              <input type="checkbox" name="un" value="un"> All day <br>
              <input type="checkbox" name="civil" value="civil"> Morning Period(9AM~3PM) <br>
              <input type="checkbox" name="no" value="no"> Evening Period (2PM~8PM) <br>
     <p> How did you know the Egyptian Red Crescent? :</p>
              <input type="checkbox" name="un" value="un"> Facebook <br>
              <input type="checkbox" name="civil" value="civil"> Friend <br>
              <input type="checkbox" name="no" value="no"> The Egyptian Red Crescent Events<br>
     <hr> <hr>
     
               <input type="submit" value="submit" name="submit" id="addBtn">
            </form>
    </div>
</html>

