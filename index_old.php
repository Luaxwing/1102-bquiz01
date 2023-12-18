<div id="lf" style="float:left;">
	<div id="menuput" class="dbor">
		<!--主選單放此-->
		<span class="t botli">主選單區</span>
		<?php
		$mainmu = $Menu->all(['sh' => 1, 'menu_id' => 0]);
		foreach ($mainmu as $main) {
		?>
			<div class="mainmu">
				<a style="color:#000; font-size:13px; text-decoration:none;width=100%;height=100%;"
					href="<?= $main['href']; ?>">
					<div style="width=100%;height=100%;">
						<?= $main['text']; ?>
					</div>
				</a>


				<div class="mw" style="display:none">
					<?php
					if (($Menu->count(['menu_id' => $main['id']])) > 0) {
						$mainmu2 = $Menu->all(['menu_id' => $main['id']]);
						foreach ($mainmu2 as $sub) {
					?>
							<a style="color:#000; font-size:13px; text-decoration:none;" href="<?= $sub['href']; ?>">
								<div class="mainmu2">
									<?= $sub['text']; ?>
								</div>
							</a>

					<?php
						}
					}
					?>

				</div>
			</div>




			<?php
		}
		?>


	</div>
	<!-- <div class="dbor" style="margin:3px; width:95%; height:20%; line-height:100px;"> -->
	<div class="dbor totalbar">
		<span class="t">進站總人數 :<?= $Total->find(1)['total']; ?></span>
	</div>
</div>







---------------------------------------------------------

<div id="lf" style="float:left;">
				<div id="menuput" class="dbor">
					<!--主選單放此-->
					<span class="t botli">主選單區</span>
					<?php
					$mainmu = $Menu->all(['sh' => 1, 'menu_id' => 0]);
					foreach ($mainmu as $main) {
						?>
						<div class='mainmu'>
							<a href="<?= $main['href']; ?>" style="color:#000; font-size:13px; text-decoration:none;">
								<?= $main['text']; ?>
							</a>
							<?php

							if ($Menu->count(['menu_id' => $main['id']]) > 0) {
								echo "<div class='mw'>";
								$subs = $Menu->all(['menu_id' => $main['id']]);
								foreach ($subs as $sub) {
									echo "<a href='{$sub['href']}'>";
									echo "<div class='mainmu2'>";
									echo $sub['text'];
									echo "</div>";
									echo "</a>";
								}
								echo "</div>";
							}
							?>

						</div>

						</a>
						<?php
					}
					?>
				</div>
				<div class="dbor" style="margin:3px; width:95%; height:20%; line-height:100px;">
					<span class="t">進站總人數 : <?= $Total->find(1)['total']; ?></span>
				</div>
			</div>

