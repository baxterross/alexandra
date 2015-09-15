<?php

include('defs.php');
$pages = array(
	'home',
	'performance',
	'academe',
	'teaching'
);
if (isset($_GET['p']) && in_array($_GET['p'], $pages))
	$page = $_GET['p'];
else
	$page = 'home';

$videos = array(
	'piano' => array(
    'Grabarchuk' => 'RUHbhxdAoEQ',
 		'Zelenka' => 'Me8PZTvI9nY',
		'Cimarosa' => 'PZi9_yG21ds',
		'Brouwer' => 'mBve8yaKC9Q',
		'Cima' => '8sXqJhTXciM'
	),
	'singing' => array(
	  'Monteverdi -- Voglio di vita uscir' => 'CbsdwzR9qEc',
	  'Elia Lrde ~ Datvebis Gundi' => 'xeo2PLGVLfU',
	  'Peter Yates\' song Alabama Vest' => 'BCd9NSsMXrI',
	  'Hans Leo Hassler -- Cantate Domino' => 'ZKKLMJnVIdY',
	  'Dowland -- Come Heavy Sleep' => 'kmAb16PBhQI'
	),
	'conducting' => array(
    'Bortniansky' => '5bhzcCOaLZ0',
    'Handel' => 'dwguYiRgx5w',
    'Lotti' => 'H9N1qGiCRJ8',
    'Angel Pastyrem Movil' => '8V5YvDyoTmY',
    'Queen Anne' => 'h4tXbhcm6s8',
    'Cyprian Bazylik' => 'eLEnZAPZiPQ'
  ),
	'theater' => array(
	),
	'teaching' => array(
    'Y--IWQgcmIA'
  )
);

?>
<!DOCTYPE html>
<html
	<head>
		<title>Alexandra Grabarchuk</title>
		<style data-file="main.css">
			<?php readfile(MAINCSS); ?>
			<?php readfile(FANCYBOX_CSS); ?>
		</style>
		<script type="text/javascript" data-file="jquery-1.8.3.min.js"><?php readfile(JQUERY); ?></script>
		<script type="text/javascript" data-file="jquery-colors.min.js"><?php readfile(JCOLOR); ?></script>
		<script type="text/javascript" data-file="main.js"><?php readfile(MAINJS); ?></script>
		<script type="text/javascript" data-file="fancybox.2.1.4.js"><?php readfile(FANCYBOX_JS); ?></script>
	</head>
	<body page="<?php echo $page; ?>">
		<div id="left">
			<div class="img" page="home">
				<img src="<?php echo IMG; ?>/home.png" page="home" />
			</div>
			<div class="img" page="academe">
				<img src="<?php echo IMG; ?>/academe.png" page="academe" />
			</div>
			<div class="img" page="teaching">
			</div>
			<div class="img" page="performance">
				<img src="<?php echo IMG; ?>/performance.png" page="performance" />
			</div>
		</div>
		<div id="right">
			<div class="contentWrapper home" page="home">
				<a class="menuLink" href="home">Home</a>
			</div>
			<div class="contentWrapper first" page="academe">
				<div class="contentDrawer">
					<div class="contentInner">
						<p>
							Alex is currently a PhD candidate in the Musicology Department at UCLA, working on a dissertation titled "The Soundtrack of Stagnation: Paradoxes within Soviet Pop and Rock Music of the 1970s" with the help of an Alvin H. Johnson AMS 50 Dissertation Fellowship Award as well as a UCLA Dissertation Year Fellowship.
							She received her B.A. in Linguistics with a minor in Music History from UCLA, graduating summa cum laude in 2009, and went on to receive an M.A. in Musicology from UCLA in 2011.
							She is a published author, having seen the appearance of her first article,
							"The Finality of Stories Such as These: Exploring Concept and Narrative in Stephen Sondheim's Into the Woods"
							in the 2012 edited volume <cite>From Stage to Screen</cite>, the 18th installment of "Speculum Musicae" (Brepols Publishers),
							a series of the Centro Studi Opera Omnia Luigi Boccherini of Lucca.
							She has presented at international conferences held	in Tuscany and Helsinki, as well as
							the 2012 national meeting of the American Musicological Society/Society of Music Theory/Society for Ethnomusicology held in New Orleans.
							Fluent in Russian, she has recently worked on translating previously unpublished sources and doing
							complete Russian-to-English transliteration work for Tamara Levitz's 2012 book <cite>Modernist Mysteries: Pers&eacute;phone</cite>.
							In 2014, Alex became the newest score reader for the Metropolitan Opera's live HD broadcasts.
						</p>
						<div class="centerHolder">
						  <a id="cv" class="download-link" href="<?php echo SITE; ?>/grabarchuk%20cv.pdf" target="_blank">curriculum vitae</a>
						</div>
					</div>
				</div>
				<a class="menuLink" href="academe">Academe</a>
			</div>
			<div class="contentWrapper second" page="teaching">
				<div class="contentDrawer">
					<div class="contentInner">
						<div id="teaching">
						  <p>
                Alex is currently a Visiting Lecturer of Joint Music at the Claremont University Consortium, teaching at Scripps College.
                She has also had 5+ years of teaching experience at UCLA, working with diverse student populations from undergraduates to senior citizens.
                Her teaching portfolio includes classes such as Electronic Dance Music, History of Baroque Opera, and Music & Film.
						  </p>
					    <?php if ($videos['teaching']) : ?>
						  <div class="centerHolder">
						    <?php foreach ($videos['teaching'] as $name => $identifier) : ?>
							    <a class="fancyvideo" rel="teaching" href="<?php echo getVideoUrl($identifier); ?>"><img src="<?php echo getVideoThumbnail($identifier); ?>" class="video" alt="" /></a>
						    <?php endforeach; ?>
						  </div>
					    <?php endif; ?>
						  <div class="centerHolder">
							  <a id="teaching-philosophy" class="download-link" href="<?php echo SITE; ?>/grabarchuk%20teaching%20philosophy.pdf" target="_blank">teaching statement</a>
					    </div>
						  <div class="centerHolder quotes">
						    <div class="quote">Finest GE professor I’ve ever had the pleasure of meeting and taking a course with.</div>
						    <div class="quote">Ms. Grabarchuk gave superior lectures, well-integrated with media, and answered questions graciously and thoroughly...</div>
						    <div class="quote">Alex’s teaching style is one where open dialogue is encouraged and fostered not only among instructor and student but students with each other.</div>
						    <div class="quote">She is all you could ask for in a teacher.</div>
						    <div class="quote">Alex possesses a certain authority when teaching that makes students look up to her and trust her, and she shows a zeal for the material that brings it into a relatable, interesting, accessible light.</div>
					    </div>
					  </div>
					</div>
				</div>
				<a class="menuLink" href="teaching">Teaching</a>
			</div>
			<div class="contentWrapper third" page="performance">
				<div class="contentDrawer">
					<div class="contentInner">
						<div id="performance">
							<ul class="menu">
								<li>
									<a href="javascript:void(0);" class="accordionTrigger" accordion="piano">Piano</a>
								</li>
								<li>
								|
								</li>
								<li>
									<a href="javascript:void(0);" class="accordionTrigger" accordion="singing">Singing</a>
								</li>
								<li>
								|
								</li>
								<li>
									<a href="javascript:void(0);" class="accordionTrigger" accordion="conducting">Conducting</a>
								</li>
							</ul>
							<div class="accordion" accordion="piano">
								Having received a thorough education in both piano performance and music theory, Alex is an ardent pianist who loves keyboards of all sorts,
								as can be witnessed by her work with the pianoforte, baroque organ, and harpsichord. She has done some transcription work as well,
								expressively realizing Leo Brouwer's guitar etudes on the piano. Alex has also gigged as a rehearsal and performance choral accompanist
								around the Los Angeles area, playing for such groups as the UCLA Chorus, American Lutheran Church in Burbank, and Cantate Hominem Men's Choir.
							  <?php if ($videos['piano']) : ?>
								<div class="centerHolder small">
									<div class="arrow left">
										<img src="<?php echo IMG; ?>/arrow_left.png" />
									</div>
									<div class="centerContent">
										<div class="slider">
											<?php foreach ($videos['piano'] as $name => $identifier) : ?>
												<a class="fancyvideo" rel="piano" href="<?php echo getVideoUrl($identifier); ?>"><img src="<?php echo getVideoThumbnail($identifier); ?>" class="video" alt="" /></a>
											<?php endforeach; ?>
										</div>
									</div>
									<div class="arrow right">
										<img src="<?php echo IMG; ?>/arrow_right.png" />
									</div>
								</div>
							  <?php endif; ?>
							</div>
							<div class="accordion" accordion="singing">
								Over the last decade, Alex has developed extensive vocal experience, from performing Carmina Burana on a Greek island with 2,000 other singers in
								the Festival of the Aegean to embodying one half of duo Guitaria with contemporary composer/guitarist Peter Yates.
                She also sings Bulgarian, Georgian, and other types of folk music from Eastern Europe. In 2015, she travelled to Bulgaria and performed at the 50th National Folklore Festival Koprivshtitsa Jubilee under the direction of <a href="http://durfee.org/awardee/tzvetanka-varimezova/" target="_blank">Tzvetanka Varimezova</a>.
								Alex's favorite type of vocal performance, however, remains music written before 1650, as can be seen through her	involvement with
								early music groups such as <a href="http://www.jouyssance.org" target="_blank">Jouyssance</a> and the UCLA Early Music Ensemble.
                She is currently employed as the Alto Section Leader for the <a href="http://www.sgvccsingers.org/"  target="_blank">San Gabriel Valley Choral Company</a>.
							  <?php if ($videos['singing']) : ?>
								<div class="centerHolder small">
									<div class="arrow left">
										<img src="<?php echo IMG; ?>/arrow_left.png" />
									</div>
									<div class="centerContent">
										<div class="slider">
											<?php foreach ($videos['singing'] as $name => $identifier) : ?>
												<a class="fancyvideo" rel="singing" href="<?php echo getVideoUrl($identifier); ?>"><img src="<?php echo getVideoThumbnail($identifier); ?>" class="video" alt="" /></a>
											<?php endforeach; ?>
										</div>
									</div>
									<div class="arrow right">
										<img src="<?php echo IMG; ?>/arrow_right.png" />
									</div>
								</div>
							  <?php endif; ?>
							</div>
							<div class="accordion" accordion="conducting">
								Alex has worked as Director of Choral Activities and Conductor at American Lutheran Church in Burbank, after training as a choral conductor
								with Director of UCLA Choral Activities Donald Neuen and Director of Towson University Choral Activities Arian Khaefi.
								She has also studied orchestral conducting with Dr. James Smith.
								Alex spent the 2013-2014 season as Managing Director/Conductor of the UCLA Early Music Ensemble through a year-long Teaching Assistantship.
							  <?php if ($videos['conducting']) : ?>
								<div class="centerHolder small">
									<div class="arrow left">
										<img src="<?php echo IMG; ?>/arrow_left.png" />
									</div>
									<div class="centerContent">
										<div class="slider">
											<?php foreach ($videos['conducting'] as $name => $identifier) : ?>
												<a class="fancyvideo" rel="conducting" href="<?php echo getVideoUrl($identifier); ?>"><img src="<?php echo getVideoThumbnail($identifier); ?>" class="video" alt="" /></a>
											<?php endforeach; ?>
										</div>
									</div>
									<div class="arrow right">
										<img src="<?php echo IMG; ?>/arrow_right.png" />
									</div>
								</div>
								<div class="centerHolder quotes">
								  <div class="quote">Alex was born to lead an ensemble of this sort… Musically, socially, and intellectually, it was truly a privilege to sing in the EME this year.</div>
                  <div class="quote">An effective communicator who succeeds in creating a rehearsal space that is simultaneously fun and enjoyable, without sacrificing a single degree of musicality.</div>
                  <div class="quote">Alex is an outstanding director. She leads an organized rehearsal, conducts clearly and expressively, and has great advice to give on everything from vocal technique to musical interpretation.</div>
                  <div class="quote">Simultaneously a caring and commanding director. Able to create an atmosphere where musicians learn, buckle down and get to work, but also enjoy themselves, have fun, and enjoy camaraderie.</div>
								</div>
							  <?php endif; ?>
							</div>
						</div>
					</div>
				</div>
				<a class="menuLink" href="performance">Performance</a>
			</div>
		</div>
		<div id="contactInfo">
			<span>&copy; 2013 Alexandra Grabarchuk</span> |
			<span>contact <a href="mailto:shoora84@gmail.com">shoora84@gmail.com</a></span> |
			<span>construction <a href="http://baxterross.com/tautology">Tautology</a>
		</div>
	</body>
</html>
