<?php

include('defs.php');
$pages = array(
	'home',
	'performance',
	'academe',
	'meditation'
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
	'meditation' => array(
    'Initial Impression' => 'Id1q2n-iOlk',
    'Day 2' => 'NJJovQjkIng',
    'Day 4' => 'GWRbTVbmfzw',
    'Day 6' => 'R5Ik1GlLF9Y',
    'Day 7' => '_VuBbrV8nqM',
    'Wrap Up' => '_SvKzKXvtME'
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
			<div class="img" page="meditation">
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
							<div class="centerContent">
								<a id="cv" href="<?php echo SITE; ?>/grabarchuk%20cv.pdf" target="_blank">curriculum vitae</a>
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
								Alex's favorite type of vocal performance, however, remains music written before 1650, as can be seen through her	involvement with
								early music groups such as <a href="http://www.jouyssance.org">Jouyssance</a> and the UCLA Early Music Ensemble.
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
							  <?php endif; ?>
							</div>
							<div class="accordion" accordion="theater">
                Alex has been heavily involved with theater since her pre-teen years.
                After starring in <cite>Little Shop of Horrors</cite> as a 12-year old at Emerson Middle School, she went on to a successful career as a performer at University High School, playing such roles as The Artful Dodger (<cite>Oliver!</cite>), the Emcee (<cite>Cabaret</cite>), Ada (<cite>Criminal Hearts</cite>), and Eponine (<cite>Les Miserables</cite>).
                In 2009, she directed a production of <cite>the Glass Menagerie</cite>, and produced & acted in an alumni performance of <cite>RENT</cite> to raise money for her alma mater's drama department in 2012.
								<div class="centerHolder small">
									<div class="arrow left">
										<img src="<?php echo IMG; ?>/arrow_left.png" />
									</div>
									<div class="centerContent">
										<div class="slider">
											<a class="fancyvideo" rel="theater" href="<?php echo getVideoUrl('buDgb7X3pYc'); ?>"><img src="<?php echo getVideoThumbnail('buDgb7X3pYc'); ?>" class="video" alt="" /></a>
											<a class="fancybox mixed" rel="theater" href="<?php echo IMG; ?>/theater/1.jpg"><img src="<?php echo IMG; ?>/theater/1.thumb.jpg" class="video" alt="" /></a>
											<a class="fancybox mixed" rel="theater" href="<?php echo IMG; ?>/theater/2.jpg"><img src="<?php echo IMG; ?>/theater/2.thumb.jpg" class="video" alt="" /></a>
											<a class="fancyvideo" rel="theater" href="<?php echo getVideoUrl('VSotF2_yu1I'); ?>"><img src="<?php echo getVideoThumbnail('VSotF2_yu1I'); ?>" class="video" alt="" /></a>
											<a class="fancybox mixed" rel="theater" href="<?php echo IMG; ?>/theater/3.jpg"><img src="<?php echo IMG; ?>/theater/3.thumb.jpg" class="video" alt="" /></a>
											<a class="fancybox mixed" rel="theater" href="<?php echo IMG; ?>/theater/4.jpg"><img src="<?php echo IMG; ?>/theater/4.thumb.jpg" class="video" alt="" /></a>
											<a class="fancybox mixed" rel="theater" href="<?php echo IMG; ?>/theater/5.jpg"><img src="<?php echo IMG; ?>/theater/5.thumb.jpg" class="video" alt="" /></a>
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
			<div class="contentWrapper third" page="meditation">
				<div class="contentDrawer">
					<div class="contentInner">
						<p>
							In September of 2014, Alex undertook a week-long challenge which involved meditating for 4 hours daily.
							Below are the before & after videos, as well as post-meditation updates during the journey itself.
						</p>
					  <?php if ($videos['meditation']) : ?>
						<div class="centerHolder small">
							<div class="arrow left">
								<img src="<?php echo IMG; ?>/arrow_left.png" />
							</div>
							<div class="centerContent">
								<div class="slider">
									<?php foreach ($videos['meditation'] as $name => $identifier) : ?>
										<a class="fancyvideo" rel="meditation" href="<?php echo getVideoUrl($identifier); ?>"><img src="<?php echo getVideoThumbnail($identifier); ?>" class="video" alt="" /></a>
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
				<a class="menuLink" href="meditation">Meditation</a>
			</div>
		</div>
		<div id="contactInfo">
			<span>&copy; 2013 Alexandra Grabarchuk</span> |
			<span>contact <a href="mailto:shoora84@gmail.com">shoora84@gmail.com</a></span> |
			<span>construction <a href="http://baxterross.com/tautology">Tautology</a>
		</div>
	</body>
</html>
