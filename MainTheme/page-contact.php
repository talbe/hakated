<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/style-contact.css">

<div class="mainGrid">

    <div class="solidLine"></div>
    
    <div class="pageHeader">
        <div class="headerTextDiv">
            <img style="height:100%;" src="<?php bloginfo('stylesheet_directory'); ?>/img/STAINS/contact_stain.png">
            <p class="headerText">צור  <br>קשר</p>
        </div>
        <div class="centerHeader">
            <div class="headerMargin">
                <img style="width:100%; height: 100%;" src="<?php bloginfo('stylesheet_directory'); ?>/img/images/contact/contact_static_pic_1.png">
            </div>
            
        </div>
        <div class="leftHeader">
            <div class="headerMargin">
                <img style="width:100%; height: 100%;" src="<?php bloginfo('stylesheet_directory'); ?>/img/images/contact/contact_static_pic_2.png">
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
                    צוות הקתדרה ישמח לפנות אישית לפנייתך
                    <br>
                    טל. 03-7600130 ,03-5495916  
                </p>
                <p class="contactMesage">
                    ניתן לשלוח הודעה
                </p>
                <div class="inputField">
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
                        :הודעתך
                    </p>
                    <div style="width:100%;height:30px;float:right">
                        <input id="courses1" style="width:500px;position:absolute; top:50px" class="redtextbox" type="text"> 
                    </div>
                    <div style="width:100%;height:30px;float:right">
                        <input id="courses2" style="width:500px;position:absolute; top:10px" class="redtextbox" type="text"> 
                    </div>
                    
                   
                </div>
                 
                <div class="checkBoxField">
                    <p style="float:right">
                        <input type="checkbox" id="test1" />
                        <label for="test1"></label>
                    </p >
                    <p  class="checkboxText">
                    להצטרפות לרשימת התפוצה
                    </p>
                </div>
                
                <div class="checkBoxField">
                    <p style="float:right;margin-top:0px;">
                        <input type="checkbox" id="test2" />
                        <label cla for="test2"></label>
                    </p>
                    <p style="margin-top:0px" class="checkboxText">
                    לקבלת ידיעון
                    </p>
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
            
            <div class="mapHeader">
                <p class="mapHeaderText">
                    מפה | waze
                </p>
            </div>
            <div class="map">
                <iframe
                  width="100%"
                  height="450"
                  frameborder="0" style="border:0"
                  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDjHL7eY6tu9aZG9ouMTEC3DrO9EiVz5w0
                    &q=הזית+6+רמת+השרןון" allowfullscreen>
                </iframe> 
            </div>
               
            </div>
        </div>    
        <div class="secondaryContent">
            <div class="secondaryHeader">
                <p class="KatedTeamHeader">
                    צוות הקתדרה
                </p>
            </div>

            <div class="team">
                <p class="teamText">
                    דורית קירשנר -  מנהלת
                    <br>
                    טלי בן סניור - רכזת
                    <br>
                    כוכב אהרון  -  רכזת
                    <br>
                    בלומה גלוז - מזכירה
                    <br>
                    קרן לביא - מזכירה
                </p>
            </div>
        </div>
    
    </div>
    
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript">  
    
(function() {
       // your page initialization code here
       // the DOM will be available here
        var selected = document.getElementById("contact");
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