<article class="wpc-calc">
	<section>
		<?php
			echo '<h2>'.$calcseven_settings['title'] . '</h2>';
		?>
		<div class="panel-howtouse">
			<div class="panel-heading"><h4><i class="glyphicon glyphicon-info-sign"></i> How to use</h4></div>
			<div class="panel-body">
				<section class="explanation">
					<p>Enter numbers into <span class="wpc-howtouse-input-label">yellow highlighted cells only</span></p>

					<p>
						Need 5 months worth of actual dataprior to the forecast period to be able to calculate cash collections.
					</p>

					<ol>
						<li>Enter the date you want to start forecasting collections cash flow.</li>
						<li>Enter the opening Accounts Receivable balance for the correct month in the top left cell.</li>
						<li>Enter the Revenue that is invoiced each month - Including GST (do not included Cash Sale Revenue).</li>
						<li>Enter the Closing Accounts Receivable balance for the first 5 months from your balance sheet - this will be calculated for the purple forecast months.</li>
						<li>Enter the % that is collected in current month, within 30 days to 129 days - these must = 100% - if wrong then an error alert with be Red at the bottom of these percentages.</li>
					</ol>
				</section>
			</div>
		</div>
		<form class="form">

			<label for="id-t9FhOUqa1jp0wNux5Lcg1">Business Name</label>
			<input type="text" class="form-control" placeholder="Company Name" data-bind="value: business_name" id="id-t9FhOUqa1jp0wNux5Lcg1" />

			<div class="table-responsive">
			<table class="table-calc1">
				<thead>
					<tr>
						<th></th>
<!-- ko foreach: { data: debts, as: 'd' } -->
						<th>
							<div>
								<date data-bind="text: moment(d.dt()).format('MMM-YY')"></date>
							</div>
							<div>
								<span class="label" data-bind="css: {'label-actual' : d.is_actual, 'label-forecast' : !d.is_actual }">actual</span>
							</div>
						</th>
<!-- /ko -->
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>
							<h3>Debtors</h3>
						</th>
<!-- ko foreach: { data: debts, as: 'd' } -->
						<td></td>
<!-- /ko -->
					</tr>
					<tr>
						<th>Opening</th>
<!-- ko foreach: { data: debts, as: 'd' } -->

							<!-- ko if: $index() == 0 -->
								<td class="-no-pad">
									<input type="number" data-bind="value: d.parent.initial_opening" />
								</td>
							<!-- /ko -->

							<!-- ko if: $index() > 0 -->
								<td>
									<span data-bind="text: d.opening()"></span>
								</td>
							<!-- /ko -->
<!-- /ko -->
					</tr>

					<tr>
						<th class="-blue-fg">Revenue (incl GST)</th>
<!-- ko foreach: { data: debts, as: 'd' } -->

							<td class="-no-pad">
								<input type="number" data-bind="value: d.revenue" />
							</td>
<!-- /ko -->
					</tr>

					<tr>
						<th class="-green-fg">Receipts</th>
<!-- ko foreach: { data: debts, as: 'd' } -->

							<td class="-no-pad">
								<span data-bind="text: d.receipts()"></span>
							</td>
<!-- /ko -->
					</tr>

					<tr>
						<th>Closing</th>
<!-- ko foreach: { data: debts, as: 'd' } -->

							<td class="-no-pad">
								<input type="number" data-bind="value: d.closing" />
							</td>
<!-- /ko -->
					</tr>

						<td>
							<div class="field">
								<div class="wpc-input-group">
									<span>$</span>
									<input type="number" readonly="readonly" data-bind="value: cost_m()"/>
								</div>
							</div>
						</td>
						<!--whitespace-->

				</tbody>
			</table>
			</div>
		</form>
	</section>
</article>



<script type="text/javascript">
jQuery(document).ready(function()
{
	var data = new CalcSevenModel01( CalcSevenModel01.getSampleData() );
	ko.applyBindings(data);
});
</script>
