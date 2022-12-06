<?php
use Core\View; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing | Taskist</title>
    <?php View::render("Libraries/Bootstrap"); ?>
</head>

<body>
    <div class="d-flex flex-column vh-100 bg-light">
        <?php View::render("Components/NavBar"); ?>
        <div class="overflow-auto d-flex flex-column align-items-center">
            <div class="container-fluid d-flex flex-column align-items-center">
                <div class="text-center p-5 d-flex w-100 align-items-center flex-column"
                    style="margin-top: 4rem; margin-bottom: 2rem; ">
                    <h1 style="font-size: 4rem; font-family: 'Racing Sans One'; width: 40rem;">
                        “Taskist is the number one to-do list app”– PC Mag
                    </h1>
                </div>
            </div>
            <div class="d-flex" style="margin-bottom: 8rem;">
                <div class="py-4  bg-white rounded shadow-sm" style="width: 23rem;">
                    <div class="d-flex flex-column align-items-center justify-content-between border-bottom pb-4"
                        style="height: 32rem;">
                        <div class="d-flex flex-column align-items-center">
                            <img src="https://todoist.com/_next/static/images/plan-free@2x_c356a0cb2a84ca6af5e6b3797559a4b6.webp"
                                alt="..." style="height: 12rem;">
                            <h3 class="mt-4 fw-bold">Free</h3>
                            <p class="text-muted">For Taskist starters</p>
                            <p class="fs-1">$0</p>
                        </div>
                        <a href="/register" class="btn btn-primary">Get Started</a>
                    </div>
                    <div class="px-4 mt-4">
                        <p>Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit.</p>
                        <p>Lorem, ipsum dolor.</p>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                </div>
                <div class="py-4 bg-white rounded shadow-sm ms-4" style="width: 23rem;">
                    <div class="d-flex flex-column align-items-center justify-content-between border-bottom pb-4"
                        style="height: 32rem;">
                        <div class="d-flex flex-column align-items-center">
                            <img src="https://todoist.com/_next/static/images/plan-premium@2x_51d78de672de07955877ed731b99065f.webp"
                                alt="..." style="height: 12rem;">
                            <h3 class="mt-4 fw-bold">Pro</h3>
                            <p class="text-muted">For Taskist extreme users</p>
                            <p class="fs-1 mb-1">$99</p>
                            <p class="text-secondary">per month, billed annually</p>
                        </div>
                        <a href="/register" class="btn btn-primary">Get Started</a>
                    </div>
                    <div class="px-4 mt-4">
                        <p>Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit.</p>
                        <p>Lorem, ipsum dolor.</p>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                </div>
                <div class="py-4 bg-white rounded shadow-sm ms-4" style="width: 23rem;">
                    <div class="d-flex flex-column align-items-center justify-content-between border-bottom pb-4"
                        style="height: 32rem;">
                        <div class="d-flex flex-column align-items-center">
                            <img src="https://todoist.com/_next/static/images/plan-business@2x_3cfbf6b66648cb40ce614c7439f2cdd3.webp"
                                alt="..." style="height: 12rem;">
                            <h3 class="mt-4 fw-bold">Business</h3>
                            <p class="text-muted">For business teams</p>
                            <p class="fs-1 mb-1">$999</p>
                            <p class="text-secondary">per month, billed annually</p>
                        </div>
                        <a href="/register" class="btn btn-primary">Get Started</a>
                    </div>
                    <div class="px-4 mt-4">
                        <p>Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit.</p>
                        <p>Lorem, ipsum dolor.</p>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column align-items-center" style="margin-bottom: 8rem">
                <h1 class="text-center fs-1" style="font-size: 4rem; font-family: 'Racing Sans One'; width: 40rem;">
                    You are in good company
                </h1>
                <p>Trusted by leaders at some of the world’s most inspired organizations</p>
            </div>
            <div class="container" style="margin-bottom: 8rem;">
                <h2 class="fw-semibold mb-4">Frequently asked questions</h2>
                <div class="accordion accordion-flush" id="accordionFlushQuestion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                <p class="mb-0 fs-4">Can I use Taskist for free?</p>
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushQuestion">
                            <div class="accordion-body">Absolutely! Taskist is completely free to use. When you need
                                higher project limits or additional features like reminders, you can always upgrade
                                to the Pro or Business plan.</div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                <p class="mb-0 fs-4">Do you offer free trials?</p>
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushQuestion">
                            <div class="accordion-body">We don't offer any free trials for the Pro plan, but you can
                                upgrade for as little as $4/month to test Pro features such as reminders, Pro themes
                                and higher usage limits. It’s possible to request a refund within 30 days of
                                subscribing if you're unhappy with your purchase.
                                You can try the Todoist Business plan free for 30 days. To start your trial, you can
                                click “Try for free” above or visit this page.</div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                <p class="mb-0 fs-4">What is the price for the Pro plan?</p>
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushQuestion">
                            <div class="accordion-body">You can choose to be billed either $5 per month or $48 per
                                year. When it comes to working with a team, you can invite 25 people to your
                                projects free of charge.</div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFour" aria-expanded="false"
                                aria-controls="flush-collapseFour">
                                <p class="mb-0 fs-4">How is pricing calculated for the Business plan?</p>
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushQuestion">
                            <div class="accordion-body">If you upgrade to Business, you’ll be charged a fee per
                                user: either $8 per user per month or $72 per user per year. For example, if you
                                choose monthly billing and have 10 users, you’ll be charged $80 each month.
                                You can invite external collaborators to your projects free of charge (up to 50
                                people per project) — but they won’t have access to your shared Team Inbox.</div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFive" aria-expanded="false"
                                aria-controls="flush-collapseFive">
                                <p class="mb-0 fs-4">Do you have monthly and yearly billing options?</p>
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushQuestion">
                            <div class="accordion-body">Yes, we do! The yearly billing option is about 20% less
                                expensive than the monthly billing option for Business and Pro plans.</div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseSix" aria-expanded="false"
                                aria-controls="flush-collapseSix">
                                <p class="mb-0 fs-4">What happens when I switch from Pro to Business?</p>
                            </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushQuestion">
                            <div class="accordion-body">You can change your plan from Pro to Business any time
                                without losing any data or having to pay again for users already on the Pro plan. We
                                automatically check if you or any invited users are on the Pro plan and convert the
                                value of the remaining Pro time into credits for your Business team. Those credits
                                will then be applied to future invoices.</div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                aria-controls="flush-collapseSeven">
                                <p class="mb-0 fs-4">How does adding users to and removing users from the Business plan
                                    work?</p>
                            </button>
                        </h2>
                        <div id="flush-collapseSeven" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushQuestion">
                            <div class="accordion-body">When users are added to the Business plan, your account will
                                be charged a prorated amount based on the percentage of the billing cycle left at
                                the time each user was added. If you remove users, your account will be credited in
                                the same way.</div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseEight" aria-expanded="false"
                                aria-controls="flush-collapseEight">
                                <p class="mb-0 fs-4">Can I cancel at any time?</p>
                            </button>
                        </h2>
                        <div id="flush-collapseEight" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushQuestion">
                            <div class="accordion-body">Yes, absolutely. There’s no minimum contract for Todoist —
                                you can cancel at any time without penalty. When you cancel your Pro plan, you will
                                remain on the plan until the end of your billing cycle, at which time you’ll be
                                switched back to the Free plan.
                                When you cancel your Business plan, you will be downgraded to the Free plan
                                immediately. Your Team Inbox and its tasks will be deleted, but all your other
                                projects and tasks will remain intact.</div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingNine">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseNine" aria-expanded="false"
                                aria-controls="flush-collapseNine">
                                <p class="mb-0 fs-4">Do you offer refunds?</p>
                            </button>
                        </h2>
                        <div id="flush-collapseNine" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushQuestion">
                            <div class="accordion-body">To receive a refund from a Pro or Business subscription you
                                must (1) request the refund within 30 days of subscribing and (2) be on the yearly
                                Pro or Business plan (monthly subscriptions are not eligible for a refund). To
                                receive a refund, please follow the steps in this help article.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="footer" class="container-fluid bg-dark p-4">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="text-light mb-0 fs-4" style="font-family: 'Racing Sans One'">Taskist</p>
                    <a href="https://github.com/quocanhbk/taskist" target="_blank" class="text-info">Github</a>
                    <p class="text-light mb-0">December 2022</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>