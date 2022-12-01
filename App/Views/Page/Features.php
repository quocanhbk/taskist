<?php
use Core\View; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Features | Taskist</title>
    <?php View::render("Libraries/Bootstrap"); ?>
</head>

<style>
body{
    font-size: 20px;
}

#con-first{
    background-image: url("img-feature/bg-1.jpg");
    background-position: top; /* Center the image */
    background-repeat: no-repeat; /* Do not repeat the image */
    background-size:cover ; /* Resize cover the background image to cover the entire container */
}

#con-second{
    background-image: url("img-feature/bg-2.webp");
    background-position: top; /* Center the image */
    background-repeat: no-repeat; /* Do not repeat the image */
    background-size:cover ; /* Resize cover the background image to cover the entire container */
}

#ytb-1{
    position: relative;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: 10;
	border-left: 5px outset #043b25;
    border-bottom: 5px outset #043b25;
	-webkit-border-radius: 20px;
	border-radius: 20px;
    margin-top: 100px;
    margin-bottom: 200px;
}

.btn-section{
    background-color: #E8E8E8;
    margin: 10px;
    margin-left: 0px;
    padding: 20px;
    border-radius: 10px;
}

.btn-section:hover{
    background-color: lightgrey;
}

</style>


<script>
    function Toggle(str,img){
        let y = str.getElementsByTagName("p");
        console.log(y);
        
        let btn = document.getElementsByClassName("btn-section");
        for (let i = 0; i < btn.length; i++){
            let p = btn[i].getElementsByTagName("p");
            if (p[0] .style.display === "block") {
                p[0].style.display = "none";
                btn[i].style.backgroundColor = "#E8E8E8";
            }  
        }

        y[0].style.display = "block";
        str.style.backgroundColor = "#ffe4e1";

        img = 'img-feature/' + img + '.webp';
        console.log(img);
        document.getElementById("img-section1").src = img;


    }





</script>





<body>
    <div class="d-flex flex-column vh-100">
        <?php View::render("Components/NavBar"); ?>
        <div class="container-fluid flex-grow-1 align-items-center justify-content-center flex-column" id="con-first">
            <div class="row justify-content-center" style="margin-top: 100px;">
                <div class="col-6" style="text-align:center ; padding: 20px ;">
                <h1 style="font-size: 60px; font-weight: 1000;">FROM OVERWHELMED TO ON TOP OF IT</h1><br><hr>
                </div>
            </div>
            
            <div class="row justify-content-center" style="margin-bottom: 50px;">
                <div class="col-8">
                    <p style="text-align: center; padding-left: 20px; padding-right:20px; font-weight: 700; font-size: 20px;">Taskist gives you the confidence that everything's organized and accounted for, 
                so you can make progress on the things that are important to you.</p><hr>   
                </div>
            </div>

            <div class="row justify-content-end">
                <div class="col-6">
                    <iframe id="ytb-1" width="600" height="337" src="https://www.youtube.com/embed/8ZKq0r-g87M" title="What's Todoist?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                
                </div>
            </div>
        </div>





        <div class="container-fluid flex-grow-1 align-items-center justify-content-center flex-column" id="con-second">
            <div class="row justify-content-center" style="margin-top: 100px; margin-bottom: 100px;">

                <class class="col-6 justify-content-left">
                        <img id = "img-section1" src="img-feature/quickadd.webp" alt="quickadd" height="600px" style="position: absolute;left: 0;">
                </class>


                <class class="col-4 text-align-left">
                    <div>
                        <h1 style="font-size: 40px; font-weight: 700;">Start each day feeling calm and in control </h1>
                    </div>
                    <div>
                        <p> Get a clear overview of everything on your plate and never lose track of an important task.</p>
                    </div>

                    <div style="margin-top: 50px;">
                        <div role="button" onclick="Toggle(this,'quickadd')" class="btn-section" style = "background-color: #ffe4e1;">
                            <h3>Quick add</h3>
                            <p style="display: block;">
                            lets you capture and organize tasks in seconds.
                            </p>
                        </div>

                        <div role="button" onclick="Toggle(this,'recur')" class="btn-section">
                            <h3>Recurring due dates</h3>
                            <p style="display: none;">
                            help you remember deadlines and build habits.
                            </p>
                        </div>

                        <div role="button" onclick="Toggle(this,'secsub')" class="btn-section" >
                            <h3>Sections & subtasks</h3>
                            <p style="display: none;">
                            ensure that your projects stay neatly organized.
                            </p>
                        </div>

                    </div>

                </class>




                
            </div>
            
            
        </div>




    </div>
</body>

</html>