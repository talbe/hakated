<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/style-signin.css">

<div class="mainGrid">

    <div class="solidLine"></div>
    
    <div class="pageHeader">
        <div class="headerTextDiv">
            <img style="height:100%;" src="<?php bloginfo('stylesheet_directory'); ?>/img/STAINS/STAIN_10.png">
            <p class="headerText">הרשמה</p>
        </div>
        <div class="centerHeader">
            <div class="headerMargin">
                <img style="width:100%; height: 100%;" src="<?php bloginfo('stylesheet_directory'); ?>/img/images/register/register_static_pic_1.png">
            </div>
            
        </div>
        <div class="leftHeader">
            <div class="headerMargin">
                <img style="width:100%; height: 100%;" src="<?php bloginfo('stylesheet_directory'); ?>/img/images/register/register_static_pic_2.png">
            </div>
        </div>
    </div>
    
    <div class="content">
        <div class="mainContent">
            <div class="margined">

            <div class="mainHeader">
            </div>
            <div class="contactPage">
                <p class="contactHeader">
                  להרשמה נא ציין/י את פרטיך ונשמח לחזור אליך בהקדם
                <div style="margin-top: 20px; " class="inputField">
                    <p class="inputLabel">
                        :שם ומשפחה
                    </p>
                    
                    <input id="name" class="redtextbox" type="text"> 
                </div>
                <div class="inputField">
                    <p class="inputLabel">
                        :כתובת
                    </p>
                    
                    <input id="address" class="redtextbox" type="text"> 
                </div>
                <div class="inputField">
                    <p class="inputLabel">
                        :טלפון
                    </p>
                    
                    <input id="phone" class="redtextbox" type="text"> 
                </div>
                <div class="inputField">
                    <p class="inputLabel">
                        :דוא"ל
                    </p>
                    
                    <input id="mail" class="redtextbox" type="text"> 
                </div>  
                <div style="height: 100px;" class="inputField">
                    <p class="inputLabel">
                        :שם הקורסים
                    </p>
                    <div style="width:100%;height:30px;float:right">
                        <input id="courses1" style="width:500px;position:absolute; top:50px" class="redtextbox" type="text"> 
                    </div>
                    <div style="width:100%;height:30px;float:right">
                        <input  id="courses2" style="width:500px;position:absolute; top:10px" class="redtextbox" type="text"> 
                    </div>
                </div>

                <div class="btn" style="margin-top: 20px;width:100%; height: 70px;float: right;cursor: pointer;">
                    <div class="sendBtn">
                    <p class="sendText">
                    שלח
                    </p>
                </div>
                
                </div>
                
                
                <p class="mustField">   
                    שדה חובה*
                </p>
            </div>

               
            </div>
        </div>    
        <div class="secondaryContent">
            <div class="secondaryHeader">
                <p class="KatedTeamHeader">
                    נהלי רישום
                </p>
            </div>

            <div class="team">
                <p class="teamText">
                    נהלי הקתדרה כפופים לנהלי מגוונים,
                    <br>
                    מרכזים רב - תחומיים רמת השרון.
                </p>
                
                <p class="redFont">
                    הנחות למשתתפים במספר קורסים בקתדרה:
                </p>
                <div class="mylist">
                    <ul>
                    <li>
                        <p>
                 המשתתפים בקורס שני זכאים להנחה של 10%, במחיר הנמוך מביניהם
                        </p>
                    </li>
                        <li>
                        
                        
                        <p>
                 המשתתפים בקורס שלישי ןמעלה זכאים להנחה של 15%, במחיר הנמוך מביניהם
                            </p>
                            </li>
                    <li>
                        <p>
                    גמלאים זכאים להנחה של 10%
                            </p>
                    </li>
                    <li>
                        <p>
                    גמלאים המשתתפים בקורס שני ומעלה זכאים להנחה של 15%, במחיר המוך מביניהם
                            </p>
                    </li>
                    <li>
                        <p>
                חיילים בשירות חובה זכאים להנחה מיוחדת בקורסים
                            </p>
                    </li>
            </ul>
                </div>
            </div>
        </div>
    
    </div>
    
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript">  
    
(function() {
       // your page initialization code here
       // the DOM will be available here
        var selected = document.getElementById("signin");
        selected.style.backgroundColor = "#9fae83";
        selected.style.color = "white";

    })();
    
        
   $(document).ready(function() {
        $(".btn").click(function(e) {
            
            var str = "name = " + $("#name").val() + " address = " + $("#address").val() + " phone = " + $("#phone").val() +  " mail = " + $("#mail").val() + " courses = " + $("#courses2").val() + " " + $("#courses1").val();

            var data = { 'action': 'my_ajax', 'data' : str };
            // We can also pass the url value separately from ajaxurl for front end AJAX implementations
            jQuery.post("<?php echo site_url() ?>/wp-admin/admin-ajax.php", data, function(response) {
            });
        }); 
     });
</script>   

<?php get_footer(); ?>