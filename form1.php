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
        width:800px;
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
		text-align: center;
    }
    .loginbox input[type="text"], input[type="number"], input[type="date"], input[type="password"], input[type="checkbox"]{
        border:none;
        border-bottom: 2px solid #fff;
        background: transparent;
        height:16px;        
		color:white;
        font-size:16px;
    }
    .loginbox input[type="submit"]{
        border:none;
        height:60px;
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
    <h1> استمارة تجديد العضوية </h1>

 <form action="" method="post">
 <hr> <hr>
 
<p>النوع</p><input type="checkbox"> ذكر <br>
<input type="checkbox"> انثى <br>
<p>السن </p><input type="checkbox">(16-20)<br> 
<input type="checkbox">(اكثر من 35)<br>
     <h1>القسم الاول</h1>
     <h1>المعلومات الرئيسية</h1>
     <hr>
        <p> الاسم الرباعى </p>
              <input type="text" name="name"><br>
        <p> الجنسية </p>
             <input type="text" name="nationailty"><br><br>
        <p> تاريخ الميلاد </p>
             <input type="date" name="birthdate"><br><br> 
        <p> الرقم القومى </p>
             <input type="text" name="nationailID"><br><br>
       <p> العنوان </p>
             <input type="text" name="address"><br><br>
       <p>محافظة او مدينة </p>
             <input type="password" name="city"><br><br>
       <p> رقم المحمول </p>
             <input type="text" name="mobile"><br><br>
       <p>البريد الاكترونى </p>
             <input type="text" name="email"><br><br> 
       <p> الطريقة المفضلة للتواصل </p>
			  <input type="checkbox" name="email" > البريد الالكترونى <br>
              <input type="checkbox" name="mobile" > رقم المحمول <br>
              <input type="checkbox" name="other"checked> اخرى <br><br>
     <hr> <hr>
     <h1>القسم الثانى</h1>
     <h1>العمل / التعليم و اللغات</h1>
     <hr>
	   <p> التعليم / العمل </p>
			  <input type="checkbox" name="student"checked> طالب <br>
              <input type="checkbox" name="graduate">خريج <br>
       <p> مجال الدراسة / العمل </p>
			<input type="checkbox" checked> طبى/صحى <br>
            <input type="checkbox">اجتماعى <br>
			<input type="checkbox"> ترجمة و لغات <br>
            <input type="checkbox">اخرى <br>
       <p> جامعة / كلية/ مدرسة </p>
             <input type="text"><br><br>
     <p> الصف الدراسى </p>
             <input type="text"><br><br>
     <p> الوظيفة الحالية </p>
			<input type="text"><br><br>
	<p> جهة العمل </p>
			<input type="text"><br><br>
     <p> المهارات اللغوية </p>
			<input type="checkbox" checked> انجليزى <br>
            <input type="checkbox"> المانى <br>
			<input type="checkbox"> فرنسى <br>
            <input type="checkbox"> اسبانى <br>
			<input type="checkbox"> اخرى <br>
			<input type="text"><br><br>
             
	<p> هل لديك خبرات فى اى من المجالات التالية </p>
		    <input type="checkbox" checked> تدريب <br>
            <input type="checkbox"> تصوير <br>
			<input type="checkbox"> الفنون <br>
            <input type="checkbox"> كتابة التقارير <br>
			<input type="checkbox"> التعامل مع ذوى الاحتياجات الخاصة <br>
			<input type="checkbox"> انشاء قواعد البيانات <br>
			
      <p> ما هى المهارات التى تمتلكها و يمكن الاستفادة منها؟ </p>
			<input type="text"><br><br>
			
     <p> ما هى التدريبات التى حصلت عليها و تاريخ حصولك عليها؟ </p>
<input type="checkbox" checked> اسعافات اولية <input type="date"> <br>
<input type="checkbox" > دعم نفسى تأسيسى <input type="date"> <br>
<input type="checkbox" > دعم نفسى تخصصى <input type="date"> <br>
<input type="checkbox" > قانون دولى انسانى <input type="date"> <br>
<input type="checkbox" > دورة تطوع <input type="date"> <br>
<input type="checkbox" > فريق التدخل اثناء الطوارىء/NDRT <input type="date"> <br>
<input type="checkbox" > الخدمات الصحية فى الطوارىء <input type="date"> <br>
<input type="checkbox" > ترويج صحى <input type="date"> <br>
<input type="checkbox" > تدريب مدربين <input type="date"> <br>
<input type="checkbox" > اخرى <input type="text"> <br>


     <p> اذكر اذا كنت عضوا باحد الفرق التالية؟ </p>
<input type="checkbox"checked> فريق التدخل اثناء الطوارىء/NDRT<br>
<input type="checkbox" > فريق ترويج صحى <br>
<input type="checkbox" > فريق الدعم النفسي <br>
<input type="checkbox" > فريق الخدمات الصحية <br>
<input type="checkbox" > فريق التقصى ولم الشمل <br>
<input type="checkbox" > فريق صحة وسلامة <br>

  <hr> <hr>
     <h1> القسم الثالث </h1>
     <h1> مجالات التطوع </h1>
     <hr>
	 
     <p> حدد بالارقام مجالات التى ترغب فى المشاركة بها حسب الاولوية لعام   20 </p>
<input type="checkbox"checked> فريق الاغاثة <br>
<input type="checkbox" > فريق الصحة <br>
<input type="checkbox" > فريق الدعم النفسي <br>
<input type="checkbox" > فريق الهجرة <br>
<input type="checkbox" > فريق صحة وسلامة <br>

	<p> اذا كنت عضوا فى احد الفرق و ترغب فى عدم الاستمرار به .. الرجاء ذكر الفريق مع تحديد السبب </p>
<input type="text"><br><br>

  <hr> <hr>
     <h1> القسم الرابع </h1>
     <h1> الوقت المتاح لديك للمشاركة فى الاعمال التطوعية </h1>
     <hr>
	 
	<p> اختر الايام المفضلة </p>
<input type="checkbox"checked> السبت <br>
<input type="checkbox" > الاحد <br>
<input type="checkbox" > الاثنين <br>
<input type="checkbox" > الثلاثاء <br>
<input type="checkbox" > الاربعاء <br>
<input type="checkbox" > الخميس <br>
<input type="checkbox" > الجمعة <br> 

   <p> الوقت </p>
<input type="checkbox"checked> متاح دائما <br>
<input type="checkbox" > فترة صباحية(9ص-3م) <br>
<input type="checkbox" > فترة مسائية(2م-8م)  <br>
        
     <p> اقرار </p>
	 <p> اقر أنا/ <input type="text"> </p>
	 <p> بصحة البيانات الواردة فى هذه الاستمارة واننى اطلعت على اللوائح المنظمة لاندية الشباب واننى سألتزم بما جاء فى مدونة السلوك والا سأعرض نفسي لاجراءات قد تصل للفصل فى بعض الاحيان.  </p>
	        
	 <p> تاريخ التجديد </p>
	 <input type="text"><br><br>
	 
     <p> التوقيع </p>
	 <input type="text"><br><br>
	 <h1>نشكر لكم اهتمامكم و رغبتكم فى التطوع لجمعية الهلال الاحمر المصرى</h1>

</form>
    </div>
</html>

