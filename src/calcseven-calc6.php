<?php
function cfo_gen_input_number($kofield, $id_suff, $lbltext)
{
}
?>

<article class="wpc-calc">
	<section>
		<?php
			echo '<h2>'.$calcseven_settings['title'] . '</h2>';
		?>
		<div class="panel-howtouse">
			<div class="panel-heading"><h4><i class="glyphicon glyphicon-info-sign"></i> How to use</h4></div>
			<div class="panel-body">
				<section class="explanation">
					<p>Please fill the <span class="wpc-howtouse-input-label">Highlighted Fields</span>, result will appear automatically.</p>
				</section>
			</div>
		</div>
		<form class="form form-6">
<!-- TABLE 1 -->
					<div class="cfo-form-horizontal">
						<div class="cfo-grp">
							<label for="id-mt9Hk1pZNx">What is cost?</label>
							<div>
								<input type="number" id="id-mt9Hk1pZNx" data-bind="value:cost, css:{'-red-fg': cost<0 }" />
							</div>
						</div>

						<div class="cfo-grp">
							<label for="id-OEtjNIy3Dr">Set the markup:</label>
							<div class="wpc-input-group">
								<input type="number" id="id-OEtjNIy3Dr" data-bind="value:markup, css:{'-red-fg': markup<0 }" />
								<span>%</span>
							</div>
						</div>


						<!-- RESULTS -->
						<div class="cfo-grp">
							<label for="id-OEtjNIy3Dr">Sell:</label>
							<div>
								<input type="number" id="id-OEtjNIy3Dr" data-bind="value:roundcut(sell()), css:{'-red-fg': sell()<0 }" readonly="readonly" />
							</div>
						</div>
						<div class="cfo-grp">
							<label for="id-OEtjNIy3Dr">Margin:</label>
							<div>
								<input type="number" id="id-OEtjNIy3Dr" data-bind="value:roundcut(margin()), css:{'-red-fg': margin()<0 }" readonly="readonly" />
							</div>
						</div>
						<div class="cfo-grp">
							<label for="id-OEtjNIy3Dr">Margin, %:</label>
							<div class="wpc-input-group">
								<input type="number" id="id-OEtjNIy3Dr" data-bind="value:roundcut(margin_proc()), css:{'-red-fg': margin_proc()<0 }" readonly="readonly" />
								<span>%</span>
							</div>
						</div>

					</div> <!-- div/form-horizontal -->
<!-- TABLE 1 -->
		</form>
	</section>
</article>



<script type="text/javascript">
jQuery(document).ready(function()
{
	var data = new CalcSeven.Model6( CalcSeven.Model6.getSampleData() );
	ko.applyBindings(data);
});
</script>
