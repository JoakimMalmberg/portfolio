
<div  class="speak">
	<div role="tabpanel" class="tab-pane"  id="skill" >
		<div class="skill-section">

		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
				<div class="progress">
					<div class="progress-bar  active" role="progressbar" aria-valuenow="  45"     aria-valuemin="0" aria-valuemax="100" style="width: <?php the_field('know_percent'); ?>%">
						<span class="skill-name"><strong><?php the_title(); ?></strong></span>
					</div>
				</div>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 text-left"><?php the_field('know_percent'); ?>%</div>
		</div>


	</div>
</div>



