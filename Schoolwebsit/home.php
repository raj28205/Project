<?php
$conn = new mysqli('localhost', 'root', '', 'project'); 

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT username, message, submitted_at FROM feedbacks ORDER BY submitted_at DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Vinay Sarvajanik Vidyamandir, Kelkui</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="header">
        <div class="container">
            <marquee>કેળકુઇ વિભાગ જનજાગૃતિ મંડળ કેળકુઇ તા. વ્યારા , જી. તાપી.</marquee>
        </div>
    </div>

    <div class="container">
        <img src="images/logo.jpg" class="logo">
        <nav>
            <a href="login.php">Login</a>
            <a href="registration.php">Registration</a>
        </nav>

        <div class="slider">
            <img src="images/slider.jpg">
        </div>

        <div class="main-section" style="background:#f0f3fa;">
            <div class="container">
                <!-- Daily Activities -->
                <div class="event">
                    <h2 class="heading">દૈનિક પ્રવૃત્તિ</h2>
                    <marquee direction="up" scrollamount="5" style="height:340px;">
                        <ul>
                            <li><i>(1)</i> પ્રાર્થના સંમેલન</li>
                            <li><i>(2)</i> સમાચાર વાંચન</li>
                            <li><i>(3)</i> તાપમાન</li>
                            <li><i>(4)</i> બુલેટીન બોર્ડ</li>
                            <li><i>(5)</i> સમૂહકવાયત</li>
                            <li><i>(6)</i> જન્મદિન મુબારક</li>
                            <li><i>(7)</i> વિષય કથન</li>
                            <li><i>(8)</i> સપ્તાહનું ગુલાબ</li>
                            <li><i>(9)</i> સંગીત સમૂહ</li>
                        </ul>
                    </marquee>
                </div>

                <!-- Events -->
                <div class="event">
                    <h2 class="heading">Events</h2>
                    <ul>
                        <li><span class="event-date">1</span> વનમહોત્સવ કાર્યક્રમની ઊજવણી</li>
                        <li><span class="event-date">2</span> સ્વાતંત્ર્ય દિનની ઊજવણી</li>
                        <li><span class="event-date">3</span> પ્રજાસત્તાક દિનની ઊજવણી</li>
                        <li><span class="event-date">4</span> રાષ્ટ્રીય વિજ્ઞાનદિનની ઊજવણી</li>
                        <li><span class="event-date">5</span> મકરસંક્રાંતિ ઊજવણી</li>
                        <li><span class="event-date">6</span> શિક્ષક દિનની ઉજવણી</li>
                        <li><span class="event-date">7</span> ગાંધી જયંતીની ઊજવણી</li>
                        <li><span class="event-date">8</span> રમતોત્સવ</li>
                        <li><span class="event-date">9</span> વિદાય સમારોહ</li>
                    </ul>
                </div>

                <!-- Co-study Activity -->
                <div class="event">
                    <h2 class="heading">Co-study Activity</h2>
                    <ul>
                        <li><span class="event-date">1</span> પ્રવેશઉત્સવ</li>
                        <li><span class="event-date">2</span> રક્ષાબંધનની ઉજવણી</li>
                        <li><span class="event-date">3</span> નવરાત્રિ ગરબાની સ્પર્ધા</li>
                        <li><span class="event-date">4</span> સર્જનાત્મક સ્પર્ધા</li>
                        <li><span class="event-date">5</span> વર્ગ સુશોભનની સ્પર્ધા</li>
                        <li><span class="event-date">6</span> આનંદ મેળો</li>
                        <li><span class="event-date">7</span> વિજ્ઞાન મેળો રમતોત્સવ</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- About Section -->
        <div class="main-section">
            <div class="container About-us">
                <h2 class="heading">About My School</h2>
                <h4>My School Results</h4>
                <p>અમને જાહેર કરતાં ગર્વ થાય છે કે અમારી શાળાએ તાજેતરની બોર્ડ પરીક્ષાઓમાં બોર્ડની સરેરાશને વટાવીને અસાધારણ પરિણામો હાંસલ કર્યા છે...</p>
                <br><br><br><br>
                <img src="images/result.jpg">
            </div>
        </div>

        <!-- School Info and Activity -->
        <div class="main-section award" style="background:#f0f3fa;">
            <div class="container">
                <div class="event">
                    <h2 class="heading">School Info</h2>
                    <h3>વિનય સાર્વજનિક વિદ્યામંદિર, કેળકુઇ</h3>
                    <p><b>આચાર્યશ્રી</b>: xyz</p>
                    <p><b>સરનામું</b>: મુ.પો. કેળકુઇ, તા. વ્યારા, જી. તાપી</p>
                    <p><b>મોબાઇલ નંબર</b>: +91 9925081728</p>
                    <p><b>E-mail</b>: vsvmkalkui@gmail.com</p>
                </div>

                <div class="event">
                    <h2 class="heading">School Faculty Detail</h2>
                    <img src="images/award.jpg" usemap="#workmap1" width="400" height="277">
                    <map name="workmap1">
                        <area shape="rect" coords="0,0,400,277" alt="Faculty" href="info.html">
                    </map>
                </div>

                <div class="event">
                    <h2 class="heading">About School Activity</h2>
                    <img src="images/certificate.jpg" usemap="#workmap2" width="400" height="277">
                    <map name="workmap2">
                        <area shape="rect" coords="0,0,400,277" alt="Activity" href="activity.html">
                    </map>
                </div>
            </div>
        </div>

        <!-- Feedback Section -->
        <div class="main-section" style="background:#e8f0fe;">
            <div class="container">
                <h2 class="heading">Feedback</h2>
                <form action="submit_feedback.php" method="post">
                    <label for="name">Name:</label><br>
                    <input type="text" id="name" name="name" required><br><br>
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" required><br><br>
                    <label for="message">Message:</label><br>
                    <textarea id="message" name="message" rows="5" cols="50" required></textarea><br><br>
                    <input type="submit" value="Submit Feedback">
                </form>

                <!-- Display Feedback Entries -->
                <div class="feedback-list">
                    <?php
                    if ($result && $result->num_rows > 0) {
                        echo "<h3>Our Feedback Section</h3>";
                        while ($row = $result->fetch_assoc()) {
                            echo "<strong>" . htmlspecialchars($row['username']) . "</strong>: " .
                                 htmlspecialchars($row['message']) .
                                 " <em>" . $row['submitted_at'] . "</em><p>";
                        }
                    } else {
                        echo "<p>No feedback yet.</p>";
                    }
                    $conn->close();
                    ?>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>
