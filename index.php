<?php

include('defs.php');
$pages = array(
	'home',
	'performance',
	'academe',
	'modeling'
);
if (isset($_GET['p']) && in_array($_GET['p'], $pages))
	$page = $_GET['p'];
else
	$page = 'home';

$videos = array(
	'piano' => array(
		'Zelenka' => 'Me8PZTvI9nY',
		'Cimarosa' => 'PZi9_yG21ds',
		'Brouwer' => 'mBve8yaKC9Q',
		'Cima' => '8sXqJhTXciM'
	),
	'singing' => array(
		'Dowland' => 'kmAb16PBhQI',
		'Alabama Vest' => 'BCd9NSsMXrI',
		'Hassler' => 'ZKKLMJnVIdY',
		'Con Que La Lavare' => 's5G_2UqPTwo',
		'Singing Jouy trio' => 'gaPOju4y18w',
		'Anything Less' => 'tcMyPuiSY9o',
		'Palestrina' => 'wevJ3fn4pEU',
		'Josquin' => 'qvV54AG7Svs',
		'Ray Says' => 'SERLpNVrbyo',
		'Machaut' => 'WZhEiV6Peys',
		'Be Kind to Strangers' => 'kLUJrMm3Ex4',
		'Jouyssance' => '_d2G-dcZHVg',
		'No Me Hableys' => 'M_xGflYUxOA',
		'Lang' => 'zR_bs9aSlWg',
		'Morenica' => '9NoIrYJe05I',
		'GuitAria' => 'LSfd9DeTTPQ'
	),
	'conducting' => array(),
	'theater' => array()
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
			<div class="img" page="modeling">
				<img src="<?php echo IMG; ?>/modeling.png" page="modeling" />
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
						</p>
						<div class="centerHolder">
							<div class="centerContent">
								<a id="cv" href="<?php echo SITE; ?>/grabarchuk%20cv.pdf">curriculum vitae</a>
							</div>
						</div>
					</div>
				</div>
				<a class="menuLink" href="academe">Academe</a>
			</div>
			<div class="contentWrapper second" page="performance">
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
								<li>
								|
								</li>
								<li>
									<a href="javascript:void(0);" class="accordionTrigger" accordion="theater">Theater</a>
								</li>
							</ul>
							<div class="accordion" accordion="piano">
								Alex has been studying piano since age 9 with Pacific Palisades-based private teacher
								Hedy Ciani, sister of the late world-renowned Italian pianist Dino Ciani. Having received a
								thorough education in both piano performance and music theory, Alex is an ardent pianist who
								loves keyboards of all sorts, as can be witnessed by her work with the pianoforte, baroque
								organ, and harpsichord. She has done some transcription work as well, expressively realizing
								Leo Brouwer's guitar etudes on the piano. Alex has also gigged as a rehearsal and performance
								choral accompanist around the Los Angeles area, playing for such groups as the UCLA Chorus,
								American Lutheran Church in Burbank, and Cantate Hominem Men's Choir.
							  <?php if ($videos['piano']) : ?>
								<div class="centerHolder small">
									<div class="arrow left">
										<img src="<?php echo IMG; ?>/arrow_left.png" />
									</div>
									<div class="centerContent">
										<div class="slider">
											<?php foreach ($videos['piano'] as $name => $identifier) : ?>
												<a class="fancyvideo" rel="videoplayer" href="<?php echo getVideoUrl($identifier); ?>"><img src="<?php echo getVideoThumbnail($identifier); ?>" class="video" alt="" /></a>
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
								Alex entered the world of singing as a chorister with the Angeles Chorale in 2007.
								Performing Rachmaninoff's Vespers with this group solidified her love of vocal music, and
								she has continued on to develop an extensive resume of vocal experience, from performing
								Carmina Burana on a Greek island with 2,000 other singers in the Festival of the Aegean to
								solo work with contemporary composer and guitarist Peter Yates. Alex's favorite type of
								vocal performance, however, remains music written before 1650, as can be seen through her
								involvement with early music groups such as <a href="http://www.jouyssance.org">Jouyssance</a> and the UCLA
								Early Music Ensemble.
							  <?php if ($videos['singing']) : ?>
								<div class="centerHolder small">
									<div class="arrow left">
										<img src="<?php echo IMG; ?>/arrow_left.png" />
									</div>
									<div class="centerContent">
										<div class="slider">
											<?php foreach ($videos['singing'] as $name => $identifier) : ?>
												<a class="fancyvideo" rel="videoplayer" href="<?php echo getVideoUrl($identifier); ?>"><img src="<?php echo getVideoThumbnail($identifier); ?>" class="video" alt="" /></a>
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
								Alex has worked as Director of Choral Activities and Conductor at American
								Lutheran Church in Burbank, after training as a choral conductor with Director of UCLA Choral
								Activities Donald Neuen and Director of Towson University Choral Activities Arian Khaefi. She
								has also studied orchestral conducting with Dr. James Smith.
							  <?php if ($videos['conducting']) : ?>
								<div class="centerHolder small">
									<div class="arrow left">
										<img src="<?php echo IMG; ?>/arrow_left.png" />
									</div>
									<div class="centerContent">
										<div class="slider">
											<?php foreach ($videos['conducting'] as $name => $identifier) : ?>
												<a class="fancyvideo" rel="videoplayer" href="<?php echo getVideoUrl($identifier); ?>"><img src="<?php echo getVideoThumbnail($identifier); ?>" class="video" alt="" /></a>
											<?php endforeach; ?>
										</div>
									</div>
									<div class="arrow right">
										<img src="<?php echo IMG; ?>/arrow_right.png" />
									</div>
								</div>
							  <?php endif; ?>
							</div>
							<div class="accordion" accordion="theater">
								Alex has been heavily involved with theater since her pre-teen years. After starring in
								<cite>Little Shop of Horrors</cite> as a 12-year old at Emerson Middle School, she went on to a successful
								career as a performer at University High School, playing such roles as The Artful Dodger
								(<cite>Oliver!</cite>), the Emcee (<cite>Cabaret</cite>), Ada (<cite>Criminal Hearts</cite>), and Eponine (<cite>Les Miserables</cite>). She
								has also directed a production of <cite>The Glass Menagerie</cite>, and is currently producing and music
								directing a 2012 alumni performance of <cite>RENT</cite> at her alma mater.
								<div class="centerHolder small">
									<div class="arrow left">
										<img src="<?php echo IMG; ?>/arrow_left.png" />
									</div>
									<div class="centerContent">
										<div class="slider">
											<?php for ($i = 1; $i <= 5; $i++) : ?>
												<a class="fancybox mixed" rel="theater" href="<?php echo IMG; ?>/theater/<?php echo $i; ?>.jpg"><img src="<?php echo IMG; ?>/theater/<?php echo $i; ?>.thumb.jpg" class="video" alt="" /></a>
											<?php endfor; ?>
										</div>
									</div>
									<div class="arrow right">
										<img src="<?php echo IMG; ?>/arrow_right.png" />
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<a class="menuLink" href="performance">Performance</a>
			</div>
			<div class="contentWrapper third" page="modeling">
				<div class="contentDrawer">
					<div class="contentInner">
						<p>
							Alex has recently gotten involved with modeling agency Mannequin Models and is available for
							fit, print, and runway work. For booking info, please e-mail <a href="mailto:shoora84@gmail.com" target="_blank">shoora84@gmail.com</a>.
						</p>
						<div class="centerHolder">
							<div class="arrow left">
								<img src="<?php echo IMG; ?>/arrow_left.png" />
							</div>
							<div class="centerContent">
								<div class="slider">
									<?php for ($i = 1; $i <= 12; $i++) : ?>
										<a class="fancybox" rel="headshots" href="<?php echo IMG; ?>/headshots/<?php echo $i; ?>.jpg"><img src="<?php echo IMG; ?>/headshots/<?php echo $i; ?>.thumb.jpg" class="headshot" alt="" /></a>
									<?php endfor; ?>
								</div>
							</div>
							<div class="arrow right">
								<img src="<?php echo IMG; ?>/arrow_right.png" />
							</div>
						</div>
					</div>
				</div>
				<a class="menuLink" href="modeling">Modeling</a>
			</div>
		</div>
		<div id="contactInfo">
			<span>&copy; 2013 Alexandra Grabarchuk</span> |
			<span>contact <a href="mailto:shoora84@gmail.com">shoora84@gmail.com</a></span> |
			<span>construction <a href="http://baxterross.com">Tautology</a>
		</div>
	</body>
</html>
