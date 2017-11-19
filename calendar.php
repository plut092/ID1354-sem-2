
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Johan Engström">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>


    <link rel="stylesheet" href="css/mystyle.css?version=3">
</head>

<body>
        
        <div class="menu">
            <?php include 'includes/header.php';?>
        </div>

<div id="calendar-wrap">
    <header id="calendar">
        <h1>November 2017</h1>
    </header>
    <div id="calendar">
        <ul class="weekdays">
            <li>Monday</li>
            <li>Tuesday</li>
            <li>Wednesday</li>
            <li>Thursday</li>
            <li>Friday</li>
            <li>Saturday</li>
            <li>Sunday</li>
        </ul>

        <!-- Row #1 -->

        <ul class="days">
            <!-- Days from previous month -->
            <li class="day other-month">
                <div class="date">30</div>
            </li>
            <li class="day other-month">
                <div class="date">31</div>
            </li>

            <!-- Days in current month -->
            <li class="day">
                <div class="date">1</div>
            </li>
            <li class="day">
                <div class="date">2</div>
                <a href="swe-meatballs.php">
                    <div class="event">
                        <img src="images/swe-meatballs.png">
                        <div class="event-desc">
                            Swedish Meatballs
                        </div>
                        <div class="event-time">
                            18:00
                        </div>
                    </div>
                </a>
            </li>
            <li class="day">
                <div class="date">3</div>
            </li>
            <li class="day">
                <div class="date">4</div>
            </li>
            <li class="day">
                <div class="date">5</div>
            </li>
        </ul>

        <!-- Row #2 -->

        <ul class="days">
            <li class="day">
                <div class="date">6</div>
            </li>
            <li class="day">
                <div class="date">7</div>
            </li>
            <li class="day">
                <div class="date">8</div>
            </li>
            <li class="day">
                <div class="date">9</div>
            </li>
            <li class="day">
                <div class="date">10</div>
            </li>
            <li class="day">
                <div class="date">11</div>
            </li>
            <li class="day">
                <div class="date">12</div>
            </li>
        </ul>

        <!-- Row #4 -->

        <ul class="days">
            <li class="day">
                <div class="date">13</div>
            </li>
            <li class="day">
                <div class="date">14</div>
            </li>
            <li class="day">
                <div class="date">15</div>
            </li>
            <li class="day">
                <div class="date">16</div>
            </li>
            <li class="day">
                <div class="date">17</div>
            </li>
            <li class="day">
                <div class="date">18</div>
            </li>
            <li class="day">
                <div class="date">19</div>
            </li>
        </ul>

        <!-- Row #5 -->

        <ul class="days">
            <li class="day">
                <div class="date">20</div>
            </li>
            <li class="day">
                <div class="date">21</div>
            </li>
            <li class="day">
                <div class="date">22</div>
            </li>
            <li class="day">
                <div class="date">23</div>
            </li>
            <li class="day">
                <div class="date">24</div>
            </li>
            <li class="day">
                <div class="date">25</div>
                <a href="pancakes.php">
                    <div class="event">
                        <img src="images/pancakes.png">
                        <div class="event-desc">
                            Pancakes
                        </div>
                        <div class="event-time">
                            12:00 -13:00
                        </div>
                    </div>
                </a>
            </li>
            <li class="day">
                <div class="date">26</div>
            </li>
            <li class="day">
                <div class="date">27</div>
            </li>
            <li class="day">
                <div class="date">28</div>
            </li>
            <li class="day">
                <div class="date">29</div>
            </li>
            <li class="day">
                <div class="date">30</div>
            </li>
            <li class="day other-month">
                <div class="date">1</div> <!-- Next Month -->
            </li>
            <li class="day other-month">
                <div class="date">2</div>
            </li>
            <li class="day other-month">
                <div class="date">3</div>
            </li>
        </ul>

    </div><!-- /. calendar -->
</div><!-- /. wrap -->

</body>
</html>


<!-- A Calendar event template

    <div class="event">
        <div id="overflow-scroll">
            <img src="--imageurl.format--">
            <div class="event-desc">
                --Description--
            </div>
        </div>

        <div class="event-time">
            --2:00pm to 5:00pm--
        </div>
    </div>

-->