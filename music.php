<div class="contentWrapper first" page="performance">
	<div class="contentInner">
		<div id="performance">
			<ul class="menu">
				<li>
					<a href="javascript:void(0);" class="accordionTrigger" accordion="conducting">Conducting</a>
				</li>
				<li>|</li>
				<li>
					<a href="javascript:void(0);" class="accordionTrigger" accordion="singing">Singing</a>
				</li>
				<li>|</li>
				<li>
					<a href="javascript:void(0);" class="accordionTrigger" accordion="piano">Piano</a>
				</li>
			</ul>
			<div class="accordionHolder">
				<div class="accordion" accordion="conducting">
					Alex is currently Co-Director of Music & Fine Arts at
					<a href="https://claremontucc.org/">Claremont United Church of Christ</a>,
					as well as the Director of Choral Activities at
					<a href="https://www.whittier.edu/academics/music/grabarchuk">Whittier College</a>.
					She has also served as co-conductor and administrative facilitator of the
					<a href="http://www.c3la.org/" target="_blank">Contemporary Choral Collective of Los Angeles (C3LA)</a>.
					In recent years, Alex has participated in the Norfolk Chamber Choir and Choral Conducting Workshop,
					The Dallas Opera’s Institute for Women Conductors,
					and the Saskatchewan Orchestral Association’s International Conducting Workshop.
					She has studied with renowned conductors Donald Neuen and Simon Carrington.
				  <?php if ($videos['conducting']) : ?>
					<div class="centerHolder small" data-index="1">
						<div class="arrow left">
							<img src="<?php echo IMG; ?>/arrow_left.png" />
						</div>
						<div class="centerContent">
							<div class="slider">
								<?php foreach ($videos['conducting'] as $name => $identifier) : ?>
									<a class="fancyvideo" rel="conducting" href="<?php echo getVideoUrl($identifier); ?>"><img src="<?php echo getVideoThumbnail($identifier); ?>" class="video" alt="" /></a>
								<?php endforeach; ?>
								<?php for ($i = 4; $i > count($videos['conducting']) % 4; $i--) : ?>
									<a class="fancyvideo" rel="conducting"></a>
								<?php endfor ?>
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
				<div class="accordion" accordion="singing">
					Over the last decade, Alex has developed extensive vocal experience, from performing Carmina Burana on a Greek island with 2,000 other singers in the Festival of the Aegean to embodying one half of duo Guitaria with contemporary composer/guitarist Peter Yates.
				    She also sings Bulgarian, Georgian, and other types of folk music from Eastern Europe.
					Alex's favorite type of vocal performance remains music written before 1650, as can be seen through her involvement with early music groups such as
					<a href="http://www.jouyssance.org" target="_blank">Jouyssance</a> and the UCLA Early Music Ensemble.
				  <?php if ($videos['singing']) : ?>
					<div class="centerHolder small" data-index="2">
						<div class="arrow left">
							<img src="<?php echo IMG; ?>/arrow_left.png" />
						</div>
						<div class="centerContent">
							<div class="slider">
								<?php foreach ($videos['singing'] as $name => $identifier) : ?>
									<a class="fancyvideo" rel="singing" href="<?php echo getVideoUrl($identifier); ?>"><img src="<?php echo getVideoThumbnail($identifier); ?>" class="video" alt="" /></a>
								<?php endforeach; ?>
								<?php for ($i = 4; $i > count($videos['singing']) % 4; $i--) : ?>
									<a class="fancyvideo" rel="singing"></a>
								<?php endfor ?>
							</div>
						</div>
						<div class="arrow right">
							<img src="<?php echo IMG; ?>/arrow_right.png" />
						</div>
					</div>
				  <?php endif; ?>
				</div>
				<div class="accordion" accordion="piano">
					Having received a thorough education in both piano performance and music theory, Alex is an ardent pianist who loves keyboards of all sorts,
					as can be witnessed by her work with the pianoforte, baroque organ, and harpsichord. She has done some transcription work as well,
					expressively realizing Leo Brouwer's guitar etudes on the piano. Alex has also gigged as a rehearsal and performance choral accompanist
					around the Los Angeles area, playing for such groups as the UCLA Chorus, American Lutheran Church in Burbank, and Cantate Hominem Men's Choir.
				  <?php if ($videos['piano']) : ?>
					<div class="centerHolder small" data-index="3">
						<div class="arrow left">
							<img src="<?php echo IMG; ?>/arrow_left.png" />
						</div>
						<div class="centerContent">
							<div class="slider">
								<?php foreach ($videos['piano'] as $name => $identifier) : ?>
									<a class="fancyvideo" rel="piano" href="<?php echo getVideoUrl($identifier); ?>"><img src="<?php echo getVideoThumbnail($identifier); ?>" class="video" alt="" /></a>
								<?php endforeach; ?>
								<?php for ($i = 4; $i > count($videos['piano']) % 4; $i--) : ?>
									<a class="fancyvideo" rel="piano"></a>
								<?php endfor ?>
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
</div>