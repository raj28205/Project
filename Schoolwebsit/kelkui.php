<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'project');

// Redirect if not logged in
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
// Fetch last 10 feedbacks from feedbacks table
$feedbacks = [];
$query = "SELECT username, message, submitted_at FROM feedbacks ORDER BY id DESC LIMIT 10";
$result = mysqli_query($db, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $feedbacks[] = $row;
}
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Vinay sarvajanik vidyamandir,kelkui</title>
		<link rel="stylesheet"href="css/style.css">
	</head>
	<body>
		<div class="header">
		<div class="container">
			<marquee> કેળકુઇ વિભાગ જનજાગૃતિ મંડળ કેળકુઇ તા. વ્યારા , જી. તાપી. </marquee>
		</div>
		</div>
		<div class="container">
			<img src="images/logo.jpg" class="logo">
			<nav>
				<a href="logout.php">Logout</a>
			</nav>
			<div class="slider">
			<img src="images/slider.jpg">
			</div>
			<div class="main-section" style="background:#f0f3fa;">
				<div class="container">
					<div class="event">
						<h2 class="heading">દૈનિક પ્રવૃત્તિ</h2>
						<div>
							<marquee direction="up" scrollamount="5" style="height:340px;">
							<ul>
								<li><i>(1) </i>પ્રાર્થના સંમેલન </li>
								<li><i>(2) </i>સમાચાર વાંચન</li>
								<li><i>(3) </i>તાપમાન</li>
								<li><i>(4) </i>બુલેટીન બોર્ડ</li>
								<li><i>(5) </i>સમૂહકવાયત</li>
								<li><i>(6) </i>જન્મદિન મુબારક</li>
								<li><i>(7) </i>વિષય કથન</li>
								<li><i>(8) </i>સપ્તાહનું ગુલાબ </li>
								<li><i>(9) </i>સંગીત સમૂહ </li>
							</ul>
							</marquee>
						</div>
					</div>
						<div class="event">
						<h2 class="heading">Events</h2>
						<div>
							<ul>
							<li><span class="event-date">1<br></span>વનમહોત્સવ કાર્યક્રમની ઊજવણી  </li>
							<li><span class="event-date">2<br></span>સ્વાતંત્ર્ય દિનની ઊજવણી </li>
							<li><span class="event-date">3<br></span>પ્રજાસત્તાક દિનની ઊજવણી  </li>
							<li><span class="event-date">4<br></span>રાષ્ટ્રીય વિજ્ઞાનદિનની  ઊજવણી </li>
							<li><span class="event-date">5<br></span>મકરસંક્રાંતિ ઊજવણી</li>
							<li><span class="event-date">6<br></span>શિક્ષક દિનની ઉજવણી</li>
							<li><span class="event-date">7<br></span>ગાંધી જયંતીની ઊજવણી</li>
							<li><span class="event-date">8<br></span>રમતોત્સવ</li>
							<li><span class="event-date">9<br></span>વિદાય સમારોહ</li>	
							</ul>
						</div>
					</div>
					<div class="event">
						<h2 class="heading">Co-study activity</h2>
						<div>
							<ul>
							<li><span class="event-date">1<br></span>પ્રવેશઉત્સવ </li>
							<li><span class="event-date">2<br></span>રક્ષાબંધનની ઉજવણી </li>
							<li><span class="event-date">3<br></span>નવરાત્રિ ગરબાની સ્પર્ધા </li>
							<li><span class="event-date">4<br></span>સર્જનાત્મક સ્પર્ધા </li>
							<li><span class="event-date">5<br></span>વર્ગ સુશોભનની સ્પર્ધા </li>
							<li><span class="event-date">6<br></span>આનંદ મેળો </li>
							<li><span class="event-date">7<br></span>વિજ્ઞાન મેળોરમતોત્સવ</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="main-section">
					<div class="container About-us">
						<div>
							<h2 class="heading">About My School</h2>
							<h4>My School Results</h4>
							<p>અમને જાહેર કરતાં ગર્વ થાય છે કે અમારી શાળાએ તાજેતરની બોર્ડ પરીક્ષાઓમાં બોર્ડની એકંદર સરેરાશને વટાવીને અસાધારણ પરિણામો હાંસલ કર્યા છે. અમારા વિદ્યાર્થીઓએ ઉત્કૃષ્ટ 							સમર્પણ,સખત મહેનત અને ખંતનું પ્રદર્શન કર્યું છે, જે નોંધપાત્ર સફળતા તરફ દોરી જાય છે.<br><br>
							ભિન્નતા અને પ્રથમ-વિભાગના સ્કોરની ઊંચી ટકાવારી સાથે, અમારી શાળાએ શૈક્ષણિક શ્રેષ્ઠતા માટે એક નવો માપદંડ સ્થાપિત કર્યો છે. આ સિદ્ધિ અમારા <br>શિક્ષકોના અવિરત પ્રયાસો, 							માતા-પિતાના અવિશ્વસનીય સમર્થન અને અમારા વિદ્યાર્થીઓના નિશ્ચયનું પ્રમાણ છે.<br><br>
							આ સારી રીતે લાયક સફળતા માટે તમામ વિદ્યાર્થીઓ, શિક્ષકો અને સ્ટાફને અભિનંદન. ચાલો ભવિષ્યમાં શ્રેષ્ઠતા માટે પ્રયત્નશીલ રહીએ!</p>
						</div>
						<br><br><br><br>
						<img src="images/result.jpg">
					</div>
				</div>
				<div class="main-section award" style="background:#f0f3fa">
					<div class="container">
						<div class="event">
						<h2 class="heading">School Info</h2>
							<div>
								<h3>વિનય સાર્વજનિક વિદ્યામંદિર,કેળકુઇ</h3>
								<p><b>આચાર્યશ્રી</b> : xyz</P>
								<p><b>સરનામું</b> : મુ.પો. કેળકુઇ તા.વ્યારા , જી. તાપી</P>
								<p><b>મોબાઇલ નંબર</b> : +91 9925081728</P>
								<p><b>E-mail</b> : vsvmkalkui@gmail.com</P>
							</div>
						</div>
						<div class="event">
							<h2 class="heading">School Feculty detail</h2>
							<div>
								<img src="images/award.jpg" alt="Workplace1" usemap="#workmap1" width="400" height="277">
								<map name="workmap1">
									<area shape="squre" coords="0,0,400,277" alt="ball3" href="info.html">
								</map>
							</div>
						</div>
						<div class="event">
							<h2 class="heading">About School Activity</h2>
							<div>
								<img src="images/certificate.jpg"alt="Workplace2" usemap="#workmap2" width="400" height="277">
								<map name="workmap2">
									<area shape="squre" coords="0,0,400,277" alt="ball3" href="activity.html">
								</map>
							</div>
						</div>
                			</div>
				</div>
			</div>
		</div>
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
				<div class="feedback-box">
					<h3>Our Feedback Section</h3>
					<?php foreach ($feedbacks as $fb): ?>
					<div class="feedback-item">
						<strong><?php echo htmlspecialchars($fb['username']); ?></strong>
						<?php echo nl2br(htmlspecialchars($fb['message'])); ?>
						<?php echo date('Y-m-d H:i:s', strtotime($fb['submitted_at'])); ?><p>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</body>
</html> 