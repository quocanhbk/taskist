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

<?php
    
    for ($i=0; $i < 10; $i++){
    echo "#page" .$i. "{";
    echo "background-image: url(\"img-feature/bg-".$i.".webp\");";
    echo "background-position: top;";
    echo "background-repeat: no-repeat; ";
    echo "background-size:cover ;}";
    }

?>


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

.btn-select{
    background-color: #065535!important;
    color: white!important;
    margin: 10px;
    margin-left: 0px;
    padding: 20px;
    border-radius: 10px;
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


li{
    padding: 25px;
    justify-content: center;
}

#getstarted{
    background-color: #065535;
    color: white;
    padding: 20px;
    border-radius: 10px;
    font-size: 25px;
    font-weight: 600;
}

#getstarted:hover{
    background-color: #0b9c62;
}

</style>


<script>
    function Toggle(str,img,pnum){

        let page = "page" + pnum;
        let x = document.getElementById(page);
        console.log(x);
        let y = str.getElementsByTagName("p");
        console.log(y);
        
        let btn = x.getElementsByClassName("btn-section");
        for (let i = 0; i < btn.length; i++){
            let p = btn[i].getElementsByTagName("p");
            if (p[0] .style.display === "block") {
                p[0].style.display = "none";
                btn[i].style.backgroundColor = "";
                btn[i].style.color = "";
                btn[i].classList.remove('btn-select');
            }  
        }

        y[0].style.display = "block";
        //str.style.backgroundColor = "#ffe4e1";
        str.classList.add('btn-select');

        img = 'img-feature/' + img + '.webp';
        console.log(img);
        x.getElementsByTagName("img")[0].src = img;


    }





</script>





<body>
    <div class="d-flex flex-column vh-100">
        <?php View::render("Components/NavBar"); ?>
        <div class="container-fluid flex-grow-1 align-items-center justify-content-center flex-column" id="page1">
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





        <div class="container-fluid flex-grow-1 align-items-center justify-content-center flex-column" id="page2">
            <div class="row justify-content-center" style="margin-top: 100px; margin-bottom: 100px;">

                <class class="col-6 justify-content-left">
                        <img id = "img-section" src="img-feature/quickadd.webp" alt="quickadd" height="600px" style="position: absolute;left: 0;">
                </class>


                <class class="col-4 text-align-left">
                    <div>
                        <h1 style="font-size: 40px; font-weight: 700;">Start each day feeling calm and in control </h1>
                    </div>
                    <div>
                        <p> Get a clear overview of everything on your plate and never lose track of an important task.</p>
                    </div>

                    <div style="margin-top: 50px;">
                        <div role="button" onclick="Toggle(this,'quickadd',2)"  class="btn-section" class = "btn-select" style="background-color: #065535;color: white;" >
                            <h3>Quick add</h3>
                            <p style="display: block;">
                            lets you capture and organize tasks in seconds.
                            </p>
                        </div>

                        <div role="button" onclick="Toggle(this,'recur',2)" class="btn-section">
                            <h3>Recurring due dates</h3>
                            <p style="display: none;">
                            help you remember deadlines and build habits.
                            </p>
                        </div>

                        <div role="button" onclick="Toggle(this,'secsub',2)" class="btn-section" >
                            <h3>Sections & subtasks</h3>
                            <p style="display: none;">
                            ensure that your projects stay neatly organized.
                            </p>
                        </div>

                    </div>

                </class>

            </div>
            
            
        </div>

        <div class="container align-items-center justify-content-center" style="text-align: center;">
            <blockquote style="text-align: center; margin-left:20% ; margin-right: 20%; padding: 50px; font-size: 30px;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif, sans-serif ; font-style: italic;">
            “Taskist gives me the peace of mind knowing I am doing exactly what I need to do, exactly when I need to do it.”
            </blockquote>
        </div>
        



        <!-- page3 -->

        <div class="container-fluid flex-grow-1 align-items-center justify-content-center flex-column" id="page3" style="background-size: contain; background-repeat: repeat-x;">
            <div class="row justify-content-center" style="margin-top: 100px; margin-bottom: 100px;">

                <class class="col-4 text-align-left">
                    <div>
                        <h1 style="font-size: 40px; font-weight: 700;">Focus your energy on the right things </h1>
                    </div>
                    <div>
                        <p> Taskist surfaces the right tasks at the right times so you always know what to focus on next.</p>
                    </div>

                    <div style="margin-top: 50px;">
                        <div role="button" onclick="Toggle(this,'priority',3)" class="btn-section" class = "btn-select" style="background-color: #065535;color: white;" >
                            <h3>Priority levels</h3>
                            <p style="display: block;">
                            highlight the day's most important tasks.
                            </p>
                        </div>

                        <div role="button" onclick="Toggle(this,'favor',3)" class="btn-section">
                            <h3>Favorites</h3>
                            <p style="display: none;">
                            keep key projects, labels, or filters top of mind.
                            </p>
                        </div>

                        <div role="button" onclick="Toggle(this,'reminder',3)" class="btn-section" >
                            <h3>Reminders</h3>
                            <p style="display: none;">
                            alert you about your most time-sensitive tasks.
                            </p>
                        </div>

                    </div>

                </class>


                <class class="col-6 justify-content-left">
                        <img id = "img-section" src="img-feature/priority.webp" alt="priority" height="600px" style="position: relative;right: 0;">
                </class>

            </div>
            
            <div class="container align-items-center justify-content-center" style="text-align: center;">
            <blockquote style="text-align: center; margin-left:20% ; margin-right: 20%; padding: 50px; font-size: 30px;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif, sans-serif ; font-style: italic;">
            “Todoist helps me organize my time based on the most important things in my life. As a result, I am happier and more confident.”
            </blockquote>
        </div>
        </div>
        <!-- end-page3 -->




        <!-- page4 -->

        <div class="container-fluid flex-grow-1 align-items-center justify-content-center flex-column" id="page4" style="background-size: 50%; background-position: left;">
            <div class="row justify-content-center" style="margin-top: 100px; margin-bottom: 100px;">

                <class class="col-5 justify-content-center align-items-center">
                        <img id = "img-section" src="img-feature/delegate.webp" alt="delegate" height="600px" style="display: block; margin-left: auto; margin-right: auto;">
                </class>

                <class class="col-5 text-align-left">
                    <div>
                        <h1 style="font-size: 40px; font-weight: 700;">Share the workload </h1>
                    </div>
                    <div>
                        <p> From business ventures to grocery lists, divide and conquer your daily tasks in shared projects.</p>
                    </div>

                    <div style="margin-top: 50px;">
                        <div role="button" onclick="Toggle(this,'delegate',4)" class="btn-section" class = "btn-select" style="background-color: #065535;color: white;" >
                            <h3>Delegate tasks</h3>
                            <p style="display: block;">
                            to other people and free up your mental space. 
                            </p>
                        </div>

                        <div role="button" onclick="Toggle(this,'notification',4)" class="btn-section">
                            <h3>Notifications</h3>
                            <p style="display: none;">
                            let you know when people post comments, complete tasks, and more.
                            </p>
                        </div>

                    </div>

                </class>

            </div>
            
            <div class="container align-items-center justify-content-center" style="text-align: center;">
            <blockquote style="text-align: center; margin-left:20% ; margin-right: 20%; padding: 50px; font-size: 30px;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif, sans-serif ; font-style: italic;">
            “I use Taskist to successfully manage all the work of my 13 staff across three departments.”
            </blockquote>
        </div>
        </div>
        <!-- end-page4 -->




        <!-- page5 -->

        <div class="container-fluid flex-grow-1 align-items-center justify-content-center flex-column" id="page5" style="background-size: contain;">
            <div class="row justify-content-center" style="margin-top: 100px; margin-bottom: 100px;">

                <class class="col-4 text-align-left">
                    <div>
                        <h1 style="font-size: 40px; font-weight: 700;">Personalize your task views</h1>
                    </div>
                    <div>
                        <p> Build your own task views to fit your unique style and workflow.</p>
                    </div>

                    <div style="margin-top: 50px;">
                        <div role="button" onclick="Toggle(this,'board',5)" class="btn-section" class = "btn-select" style="background-color: #065535;color: white;" >
                            <h3>Boards</h3>
                            <p style="display: block;">
                            help you see the big picture with Kanban-style cards.
                            </p>
                        </div>

                        <div role="button" onclick="Toggle(this,'label',5)" class="btn-section">
                            <h3>Labels</h3>
                            <p style="display: none;">
                            help you find the right group of tasks in seconds.
                            </p>
                        </div>

                        <div role="button" onclick="Toggle(this,'filter',5)" class="btn-section">
                            <h3>Filters</h3>
                            <p style="display: none;">
                            give you custom task views based on due dates, project, assignee, and more.
                            </p>
                        </div>

                        <div role="button" onclick="Toggle(this,'theme',5)" class="btn-section">
                            <h3>Themes</h3>
                            <p style="display: none;">
                            match your style, mood, and personality with 10+ colors.
                            </p>
                        </div>

                    </div>

                </class>

                <class class="col-6 justify-content-center align-items-center">
                        <img id = "img-section" src="img-feature/board.webp" alt="delegate" height="600px" style="display: block; margin-left: auto; margin-right: auto;">
                </class>

            </div>
            
            


            <div class="container align-items-center justify-content-center" style="text-align: center;">
            <blockquote style="text-align: center; margin-left:20% ; margin-right: 20%; padding: 50px; font-size: 30px;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif, sans-serif ; font-style: italic;">
            “With a combo of labels and filters I'm finally able to sleep easy at night knowing everything is covered!”
            </blockquote>
        </div>
        </div>
        <!-- end-page5 -->



    <!-- page6 -->

        <div class="container-fluid flex-grow-1 align-items-center justify-content-center flex-column" id="page6" style="background-size: contain;">
            <div class="row justify-content-center" style="margin-top: 100px; margin-bottom: 100px;">
                
                <class class="col-5 justify-content-center align-items-center" style="position:relative;">
                        <img id = "img-section" src="img-feature/addtask.webp" alt="delegate" height="600px" style="position:absolute; right:0;">
                </class>

                <class class="col-5 text-align-left">
                    <div>
                        <h1 style="font-size: 40px; font-weight: 700;">Centralize all your work in one place</h1>
                    </div>
                    <div>
                        <p> Simplify your workflow by connecting Todoist to your email, calendar, and files.</p>
                    </div>

                    <div style="margin-top: 50px;">
                        <div role="button" onclick="Toggle(this,'addtask',6)" class="btn-section" class = "btn-select" style="background-color: #065535;color: white;" >
                            <h3>Add tasks via email</h3>
                            <p style="display: block;">
                            by forwarding emails into Todoist as tasks or comments.
                            </p>
                        </div>

                        <div role="button" onclick="Toggle(this,'comment',6)" class="btn-section">
                            <h3>Comments & file uploads</h3>
                            <p style="display: none;">
                            (including voice notes) give rich context to your tasks.
                            </p>
                        </div>

                        <div role="button" onclick="Toggle(this,'calendar',6)" class="btn-section">
                            <h3>Calendar feeds</h3>
                            <p style="display: none;">
                            display your scheduled tasks inside your calendar of choice.
                            </p>
                        </div>

                    </div>

                </class>

                

            </div>
            
            


            <div class="container align-items-center justify-content-center" style="text-align: center;">
            <blockquote style="text-align: center; margin-left:20% ; margin-right: 20%; padding: 50px; font-size: 30px;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif, sans-serif ; font-style: italic;">
            “Finally, I can see an overview of my all the areas of my life. Everything is one place broken down into actionable steps.”
            </blockquote>
        </div>
        </div>
    <!-- end-page6 -->



    <!-- page7 -->

    <div class="container-fluid flex-grow-1 align-items-center justify-content-center flex-column" id="page7">
            <div class="row justify-content-center" style="margin-top: 100px; margin-bottom: 100px;">
                
                

                <class class="col-5 text-align-left">
                    <div>
                        <h1 style="font-size: 40px; font-weight: 700;">See tangible progress</h1>
                    </div>
                    <div>
                        <p> Small steps every day add up to big achievements over time. Set daily and weekly goals, and visualize your productivity trends.</p>
                    </div>

                    <div style="margin-top: 50px;">
                        <div role="button" onclick="Toggle(this,'productivity',7)" class="btn-section" class = "btn-select" style="background-color: #065535;color: white;" >
                            <h3>Productivity visualizations</h3>
                            <p style="display: block;">
                            by week and month help you stay on track to achieve your goals.
                            </p>
                        </div>

                        <div role="button" onclick="Toggle(this,'activity',7)" class="btn-section">
                            <h3>Activity history</h3>
                            <p style="display: none;">
                            gives you a snapshot of account activity filtered by project or person.
                            </p>
                        </div>

                        <div role="button" onclick="Toggle(this,'complete',7)" class="btn-section">
                            <h3>Completed tasks archive</h3>
                            <p style="display: none;">
                            paint a portrait of how small steps add up to big accomplishments.
                            </p>
                        </div>

                        <div role="button" onclick="Toggle(this,'karma',7)" class="btn-section">
                            <h3>Todoist Karma</h3>
                            <p style="display: none;">
                            awards you points for completing tasks and using advanced features.
                            </p>
                        </div>

                    </div>

                </class>

                <class class="col-5 justify-content-center align-items-center" style="position:relative; background-image: url(img-feature/bg-7.5.webp); background-size: contain;" >
                        <img id = "img-section" src="img-feature/productivity.webp" alt="delegate" height="600px" style="display: block; margin-left: auto; margin-right: auto;">
                </class>

            </div>
            
            


            <div class="container align-items-center justify-content-center" style="text-align: center;">
            <blockquote style="text-align: center; margin-left:20% ; margin-right: 20%; padding: 50px; font-size: 30px;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif, sans-serif ; font-style: italic;">
            “Thanks to Taskist, my life feels like a string of successful days, full of progress and forward momentum.”
            </blockquote>
        </div>
        </div>
    <!-- end-page7 -->



    <!-- page8 -->

    <div class="container-fluid flex-grow-1 align-items-center justify-content-center flex-column" id="page8" style="background-size: 50%; background-repeat: no-repeat; background-position-x: 100%; background-position-y: 0px;">
            <div class="row" style="margin-top: 100px; margin-bottom: 100px; padding-left: 100px;">
                
                <class class="col-5 text-align-left">
                    <h1 style="font-size: 60px;">
                    Connect Taskist to your world
                    </h1>
                    <h4 style="text-align:justify ; margin-top: 100px; line-height: 1.6;">
                        Link Taskist with the apps you already use and make it your central, organized hub for getting things done.
                    </h4>
                </class>

            </div>
            
            
            <div class="row justify-content-center" style="margin-top: 100px; margin-bottom: 100px; padding-left: 100px;">
                <div class="col-10">
                    
                        <ul style="display: flex; list-style: none; align-items: center;">
                            <li><a href=""><img src="img-feature/logocalendar.webp" alt="logocalendar" width="80%"></a></li>
                            <li><a href=""><img src="img-feature/logoiftt.webp" alt="logoiftt" width="80%"></a></li>
                            <li><a href=""><img src="img-feature/logozapier.webp" alt="logozapier" width="80%"></a></li>
                            <li><a href=""><img src="img-feature/logoamazone.webp" alt="logoamazone" width="80%"></a></li>
                        </ul>
                </div>        
            </div>


            
    </div>
    <!-- end-page8 -->



    <div class="container-fluid flex-grow-1 align-items-center justify-content-center flex-column" id="page9" style=" background-color: #E8E8E8;background-size: 50%; background-repeat: no-repeat; background-position-x: 100%; background-position-y: 0px;">
        <hr>
        <hr>
        <div class="row" style="margin-top: 100px; margin-bottom: 100px; padding-left: 100px;" style="background-color: #E8E8E8;">
                
                <class class="col-5 text-align-left">
                    <h3 style="text-align:justify ; margin-top: 100px; line-height: 1.6;">
                        Life shouldn't be chaos.
                    </h3>
                    <h1 style="font-size: 60px; margin-bottom: 50px;">
                        Keep it all together with Taskist.
                    </h1>
                    <button onclick="" id="getstarted">
                        Get started
                    </button>
                </class>

            </div>
            
            
            <div class="row justify-content-center" style="margin-top: 100px; margin-bottom: 100px; padding-left: 100px;">
                <div class="col-10">
                    
                        <ul style="display: flex; list-style: none; align-items: center;">
                            <li><a href=""><img src="img-feature/logocalendar.webp" alt="logocalendar" width="80%"></a></li>
                            <li><a href=""><img src="img-feature/logoiftt.webp" alt="logoiftt" width="80%"></a></li>
                            <li><a href=""><img src="img-feature/logozapier.webp" alt="logozapier" width="80%"></a></li>
                            <li><a href=""><img src="img-feature/logoamazone.webp" alt="logoamazone" width="80%"></a></li>
                        </ul>
                </div>        
            </div>


            
    </div>
    <!-- end-page9 -->








    </div>
</body>

</html>