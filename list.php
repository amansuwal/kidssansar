<?php
/**
 * Created by PhpStorm.
 * User: gredd
 * Date: 6/24/2018
 * Time: 12:45 PM
 */
include('header.php'); ?>
<div class="container">
    <div class="breadcrumbs">
        <ol>
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Events</a>
            </li>
            <li>
                <a href="#">Kids Show</a>
            </li>
        </ol>
    </div>
    <div class="list-page">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-heading">
                            <h1>Rainy Day Idea's In sydney</h1>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="single-block">
                            <div class="block-img" style="background-image: url('img/featured2.webp')"></div>
                            <div class="block-description">
                                <a href="#">
                                    <h3>Lorem ipsum dolor sit amet</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="event-finder">
                    <h3>Find Something To Do</h3>
                    <div class="event-search">
                        <button>Today</button>
                        <button>Tomorrow</button>
                        <button>This Week</button>
                        <button>Weekend</button>
                        <button class="datepicker form-control">Pick a Date <i class="fas fa-chevron-down"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
