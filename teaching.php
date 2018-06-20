<div class="contentWrapper second" page="teaching">
	<div class="contentInner">
		<div id="teaching">
			<p>
				Alex currently holds the position of Visiting Assistant Professor of Choral Direction & Musicology at
				<a href="http://earlham.edu/" target="_blank">Earlham College</a> in Richmond, Indiana. She has previously held adjunct
				positions at UCLA, Chaffey College, Mt. SAC, and the Claremont University Consortium. Her teaching
				experience has encompassed working with diverse student populations from undergraduates to senior
				citizens, with glowing reviews from students and fellow faculty observers alike. Her teaching
				portfolio includes courses in musicology, music history, and piano & vocal performance.
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