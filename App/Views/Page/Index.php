<?php
use Core\View; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taskist</title>
    <?php View::render("Libraries/Bootstrap"); ?>
</head>
<style>
#container
{
    background-image: url("https://img.freepik.com/free-vector/blue-pink-halftone-background_53876-99004.jpg?w=2000");
    background-size: cover;
}
</style>

<body>
    <div class="overflow-auto d-flex flex-column justify-content-around" id="container">
        <?php View::render("Components/NavBar"); ?>
        <div class="p-4"> </div> <div class="p-4"> </div> <div class="p-4"> </div> <div class="p-4"> </div>
        <div class="container-fluid d-flex align-items-center justify-content-center">
            <div class="p-3 text-wrap" style="width: 80%;"> <p class="fs-1 fw-bolder text-center"> Welcome to our Home Page of Taskist : A best app to organize your life. </p>  </div>
        </div>
        <div class="p-4"> </div> <div class="p-4"> </div> <div class="p-4"> </div> <div class="p-4"> </div>
        <div class="container-fluid d-flex flex-sm-row flex-column flex-grow-1 align-items-center justify-content-around">
            <div class="card bg-warning" style="width: 14rem;">
                <img src="https://todoist.com/_next/static/images/icon-3_934c1a18c604c9a66c9b964a973bea5f.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> Customize Todoist </h5>
                    <p class="card-text"> Customize your lists with filters, labels, priority levels and more. </p>
                </div>
            </div>
            <div class="card bg-danger" style="width: 14rem;">
                <img src="https://todoist.com/_next/static/images/icon-4_f546eb9c7155fd7ea242af71babeeeca.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> Connect all your tools </h5>
                    <p class="card-text"> Connect Todoist to your calendar, voice assistant, and over 30 additional tools. </p>
                </div>
            </div>
            <div class="card bg-info" style="width: 14rem;">
                <img src="https://todoist.com/_next/static/images/icon-1_ad640abe99c49ae1a0c9eb05bb104956.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> Always by your side </h5>
                    <p class="card-text fs-small"> Use Todoist apps, extensions, and widgets on all your devices and platforms. </p>
                </div>
            </div>
            <div class="card bg-dark text-white" style="width: 14rem;">
                <img src="https://todoist.com/_next/static/images/icon-5_e69e3f0df7d5163b16ea9cd82df9bec9.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> Productivity methods </h5>
                    <p class="card-text"> Personal productivity recommendations based on your traits and strengths. </p>
                </div>
            </div>
            <div class="card bg-secondary text-white" style="width: 14rem;">
                <img src="https://todoist.com/_next/static/images/icon-2_4210d085bc16b95d19ee9605ca20a8d5.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> Models to sell </h5>
                    <p class="card-text"> Download dozens of templates to get your projects started, whatever they may be. </p>
                </div>
            </div>
        </div>
        <div class="p-4"> </div> <div class="p-4"> </div> <div class="p-4"> </div> <div class="p-4"> </div>
        <div class="container-fluid justify-content-center align-items-center">
            <div class="row">
                <div class="col fw-bolder fs-2 text-left text-wrap" style="width:20rem;"> A famous and trusted scheduler </div>
                <div class="col d-flex flex-row justify-content-around">
                    <img src="https://todoist.com/_next/static/images/icon-1_f82782a12a887c709e39ecf02741af8a.webp" alt="No" style="width: 20%; height: 80%;">
                    <img src="https://todoist.com/_next/static/images/icon-2_3cdfd11975b2d14cf4ee942720cd1cc7.webp" alt="No" style="width: 20%; height: 80%;">
                    <img src="https://todoist.com/_next/static/images/icon-3_3909c68a367c5cce654cd2d9ae010f52.webp" alt="No" style="width: 20%; height: 80%;">
                    <img src="https://todoist.com/_next/static/images/icon-4_a178c84304f35d44c31fbc4aa3f660f5.webp" alt="No" style="width: 20%; height: 80%;">
                </div>
            </div>
            <div class="row">
                <div class="col"> 
                    <p class="text-right text-wrap" style="width:20rem;"> We are constantly receiving positive feedbacks from customers. We are still developing </p>
                </div>
                <div class="col d-flex flex-row justify-content-around">
                    <p class="text-wrap text-center" style="width: 10rem;"> <b> Over 100 </b> downloads </p>
                    <p class="text-wrap text-center" style="width: 10rem;"> <b> Over 3000 tasks </b> completed </p>
                    <p class="text-wrap text-center" style="width: 10rem;"> Downloads <b> over 15 </b> contries </p>
                    <p class="text-wrap text-center" style="width: 10rem;"> <b> 30 users </b> gone Pro </p>
                </div>
            </div>
        </div>
        <div class="p-4"> </div> <div class="p-4"> </div> <div class="p-4"> </div> <div class="p-4"> </div>
        <div class="container-fluid d-flex flex-row flex-grow-1 align-items-center justify-content-around">
            <div class="fw-bolder fst-italic"> Start managing with Taskist </div>
            <div class="fw-bolder fst-italic"> Already have an account ? </div> 
        </div>
        <div class="p-4"> </div>
        <div class="container-fluid d-flex flex-grow-1 align-items-center justify-content-around">
            <a href="register" class="btn btn-primary"> Get Started </a>
            <a href="login" class="btn btn-primary"> Login </a>
        </div>
        <div class="p-4"> </div> <div class="p-4"> </div> <div class="p-4"> </div> <div class="p-4"> </div>
        <div class="p-4 container-fluid border border-dark bg-dark">
            <div class="container-fluid d-flex flex-grow-1 justify-content-around">
                <a href="" class="text-white"> Home </a>
                <a href="pricing" class="text-white"> Pricing </a>
                <a href="features" class="text-white"> Features </a>
                <a href="news" class="text-white"> News </a>
            </div>
            <div class="p-4"> </div>
            <div class="container-fluid d-flex flex-grow-1 justify-content-around">
                <p class="text-white"> Contact us : (+84) 899 048 832 </p>
                <p class="text-white"> Contact us : supersuperthang2002@gmail.com </p>
            </div>
        </div>
        
    </div>
</body>
</html>
