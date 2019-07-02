<section class="container">
	<div class="row my-4">
		<div class="col-6">
			<form action="<?= base_url() ?>" method="post">
				<div class="form-group">
					<label for="inputgram" class="h5">Masukan Kalimat</label>
					<input type="text" class="form-control" name="kalimat" id="inputgram">
				</div>
				<button type="submit" class="btn btn-primary">Proses</button>
			</form>
		</div>

		<div class="col-6">
			<p class="h5">Hasil Bigrams</p>
			<p>
				<?php
				if ($hasil) :
					$i = 1;
					?>
					<?php foreach ($hasil as $oko) : ?>
						<?= $oko; ?>
						<?php if (count($hasil) == $i++) : ?>
							<?= '.' ?>
						<?php else : ?>
							<?= ',' ?>
						<?php endif; ?>
					<?php endforeach; ?>
				<?php endif; ?>
			</p>
		</div>
	</div>
</section>