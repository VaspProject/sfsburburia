<?php
include 'master/header.php';
?>




<section class="upcoming-events">
        <h1 class="section-title">Upcoming Events and Information</h1>
        <div class="event-card">
            <div class="event-title">First Term Evaluation of Academic Year 2025-2026</div>
            <div class="event-date"><i class="far fa-calendar"></i>   05-07-2025 to 15-07-2025</div>
        </div>
        <div class="event-card">
            <div class="event-title">First Term Evaluation Result</div>
            <div class="event-date"><i class="far fa-calendar"></i>   18-07-2025 at 8:00 AM</div> 
        </div>
        <div class="event-card">
            <div class="event-title">Second Term Evaluation of Academic Year 2025-2026</div>
            <div class="event-date"><i class="far fa-calendar"></i>   06-12-2025 to 16-12-2026</div> 
        </div>
        <div class="event-card">
            <div class="event-title">Second Term Evaluation Result </div>
            <div class="event-date"><i class="far fa-calendar"></i>  19-12-2026 at 8:00 AM</div> 
        </div>


</section>


<style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #063461a8, #2c012026), url(images/newimg/schlbuilding2.jpeg) center / cover no-repeat;
            margin: 0;
            padding: 0;
        }
        .upcoming-events {
            background: white;
            border: 2px solid #ddd;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 651px;
            margin: 87px auto;
            text-align: center;
        }
        .section-title {
            font-size: 2em;
            color: #333;
            margin-bottom: 20px;
            position: relative;
        }
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            /* background: #ff69b4; */
        }
        .event-card {
            background: linear-gradient(to bottom right, #516c8933, #021323);
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            margin: 15px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        .event-card:hover {
            transform: scale(1.05);
        }
        .event-title {
            font-size: 1.5em;
            color: white;
            margin-bottom: 10px;
        }
        .event-date {
            font-size: 1em;
            color: #09cccc;
        }
    </style>

<?php
include 'master/footer.php';
?> 