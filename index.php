<?php

include('defs.php');
$pages = array(
	'home',
	'performance',
	'bio',
	'teaching'
);
if (isset($_GET['p']) && in_array($_GET['p'], $pages))
	$page = $_GET['p'];
else
	$page = 'home';

$videos = array(
	'piano' => array(
		'Brouwer' => 'mBve8yaKC9Q',
		'Cimarosa' => 'PZi9_yG21ds',
	        'Grabarchuk' => 'RUHbhxdAoEQ',
		'Cima' => '8sXqJhTXciM',
 		'Zelenka' => 'Me8PZTvI9nY'
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
			<div class="img" page="bio">
				<img src="<?php echo IMG; ?>/academe.png" page="bio" />
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
			<div class="contentWrapper first" page="bio">
				<div class="contentDrawer">
					<div class="contentInner">
						<p>
							Alexandra Grabarchuk, PhD, is a musicologist and performer based in the Los Angeles area.
							She received her doctorate from UCLA in 2015, supported by an Alvin H. Johnson AMS 50 Dissertation
							Fellowship Award and a UCLA Dissertation Year Fellowship. Her forthcoming chapter on Soviet progressive
							rock will appear in <em>Prog Rock in Europe: Overview of a Persistent Musical Style</em> alongside the work of
							Allan Moore and Franco Fabbri. This edition will be published by Editions Universitaires de Dijon in 2016.
							Fluent in Russian, Alex has previously done extensive work on translating unpublished correspondence and
							doing complete Russian-to-English transliteration for Tamara Levitz's PROSE-awarded 2012 book <em>Modernist
							Mysteries: Perséphone</em>. She has also worked as a score reader for the Metropolitan Opera's live HD broadcasts
							since 2014.
						</p>
						<div class="centerHolder">
						  <a id="cv" class="download-link" href="<?php echo SITE; ?>/grabarchuk%20cv.pdf" target="_blank">curriculum vitae</a>
						</div>
					</div>
				</div>
				<a class="menuLink" href="bio">Bio</a>
			</div>
			<div class="contentWrapper second" page="teaching">
				<div class="contentDrawer">
					<div class="contentInner">
						<div id="teaching">
						  <p>
                Alex is currently an Adjunct Professor of Piano at Mt. San Antonio College, and Instructor of Music History at
                UCLA Extension. She has previously served as Visiting Lecturer at the Claremont University Consortium,
                teaching at Scripps College. She has also had 5+ years of teaching experience at UCLA, working with diverse
                student populations from undergraduates to senior citizens. Her teaching portfolio includes classes such as
                Electronic Dance Music, History of Baroque Opera, and Music & Film.
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
									<a href="javascript:void(0);" class="accordionTrigger" accordion="conducting">Conducting</a>
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
									<a href="javascript:void(0);" class="accordionTrigger" accordion="piano">Piano</a>
								</li>
							</ul>
							<div class="accordion" accordion="singing">
				Over the last decade, Alex has developed extensive vocal experience, from performing Carmina Burana
				on a Greek island with 2,000 other singers in
				the Festival of the Aegean to embodying one half of duo Guitaria with contemporary
				composer/guitarist Peter Yates.
                She also sings Bulgarian, Georgian, and other types of folk music from Eastern Europe.
                In 2015, she travelled to Bulgaria and performed at the 50th National Folklore Festival
                Koprivshtitsa Jubilee under the direction of
                <a href="http://durfee.org/awardee/tzvetanka-varimezova/" target="_blank">Tzvetanka Varimezova</a>.
				Alex's favorite type of vocal performance, however, remains music written before 1650,
				as can be seen through her involvement with early music groups such as
				<a href="http://www.jouyssance.org" target="_blank">Jouyssance</a> and the UCLA Early Music Ensemble.
                She is currently Alto Section Leader at
                <a href="http://santamonicaumc.org/" target="_blank">First United Methodist Church of Santa Monica</a>
                and the <a href="http://www.sgvccsingers.org/"  target="_blank">San Gabriel Valley Choral Company</a>.
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
								In 2015, Alex received an invitation and scholarship to observe the inaugural <a href="http://dallasopera.org/learn/womens-conducting-institute/">Institute for Women Conductors</a> at The Dallas Opera.
								Alex has trained as a choral conductor with Director of UCLA Choral Activities Donald Neuen and Director of Towson University Choral Activities Arian Khaefi.
								She has also studied orchestral conducting with Dr. James Smith.
								Alex has served as Managing Director & Conductor of the UCLA Early Music Ensemble, and worked as Director of Choral Activities at American Lutheran Church in Burbank.							  <?php if ($videos['conducting']) : ?>
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
						</div>
					</div>
				</div>
				<a class="menuLink" href="performance">Music</a>
			</div>
		</div>
		<div id="contactInfo">
			<span>&copy; 2013 Alexandra Grabarchuk</span> |
			<span>contact <a href="mailto:shoora84@gmail.com">shoora84@gmail.com</a></span> |
			<span>construction <a href="http://baxterross.com/tautology">Tautology</a>
		</div>
	</body>
</html>
