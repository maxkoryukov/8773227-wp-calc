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
						<th class='-no-border'></th>
<!-- ko foreach: { data: debts, as: 'd' } -->
						<th class="-border">
							<div>
								<date data-bind="text: moment(d.dt()).format('MMM-YY')"></date>
							</div>
							<div>
								<span class="label" data-bind="css: {'label-actual' : d.is_actual, 'label-forecast' : !d.is_actual }, text: d.is_actual?'actual':'forecast' ">actual</span>
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
						<th class='-no-border'>Opening</th>
<!-- ko foreach: { data: debts, as: 'd' } -->

							<!-- ko if: $index() == 0 -->
								<td class="-border -no-pad">
									<input type="number" data-bind="value: d.parent.initial_opening" />
								</td>
							<!-- /ko -->

							<!-- ko if: $index() > 0 -->
								<td class="-border">
									<span data-bind="text: roundcut(d.opening())"></span>
								</td>
							<!-- /ko -->
<!-- /ko -->
					</tr>

					<tr>
						<th class="-blue-fg -no-border">Revenue (incl GST)</th>
<!-- ko foreach: { data: debts, as: 'd' } -->

							<td class="-no-pad -border">
								<input type="number" data-bind="value: d.revenue" />
							</td>
<!-- /ko -->
					</tr>

					<tr>
						<th class="-green-fg -no-border">Receipts</th>
<!-- ko foreach: { data: debts, as: 'd' } -->

							<td class="-border">
								<span data-bind="text: Math.abs(roundcut(d.receipts())), css: {'-negative-number -red-fg' : d.receipts() < 0 }"></span>
							</td>
<!-- /ko -->
					</tr>

					<tr>
						<th class='-no-border'>Closing</th>
<!-- ko foreach: { data: debts, as: 'd' } -->

						<!-- ko if: d.is_actual -->
							<td class="-no-pad -border">
								<input type="number" data-bind="value: d.closing" />
							</td>
						<!-- /ko -->
						<!-- ko if: !d.is_actual -->
							<td class="-border">
								<span data-bind="text: roundcut(d.closing())"></span>
							</td>
						<!-- /ko -->
<!-- /ko -->
					</tr>
					<tr>
						<td class="-no-border" data-bind="attr: {colspan: debts_length()+1}">
						</td>
					</tr>
					<tr class="debtors-days">
						<th><div>Debtors days</div></th>
<!-- ko foreach: { data: debts, as: 'd' } -->

							<td>
								<div data-bind="text: roundcut(debtors_days(), 0)"></div>
							</td>
<!-- /ko -->
					</tr>
				</tbody>
				<tbody class="-green-fg">
					<tr>
						<td data-bind="attr: {colspan: debts_length()+1}">
						</td>
					</tr>
					<tr>
						<td class="-no-border" rowspan="7"></td>
						<th class="-green-t -green-l -green-r" data-bind="attr: {colspan: debts_length()}"><h4>Cash Collection</h4>
						</th>
					</tr>
					<tr>
						<td colspan="3" class="-no-border -green-l">Debtors - Current</td>
						<td class="-no-pad -border">
							<input type="number" data-bind="value: debtx_000" />
						</td>
						<td class="-no-border"></td>
<!-- ko foreach: { data: debts, as: 'd' } -->
						<!-- ko if: !d.is_actual -->
							<td class="-border -green-r">
								<span data-bind="text: roundcut(d.debt_000())" ></span>
							</td>
						<!-- /ko -->
<!-- /ko -->
					</tr>
					<tr>
						<td colspan="3" class="-no-border -green-l">Debtors - 30 days</td>
						<td class="-no-pad -border">
							<input type="number" data-bind="value: debtx_030" />
						</td>
						<td class="-no-border"></td>
<!-- ko foreach: { data: debts, as: 'd' } -->
						<!-- ko if: !d.is_actual -->
							<td class="-border -green-r">
								<span data-bind="text: roundcut(d.debt_030())" ></span>
							</td>
						<!-- /ko -->
<!-- /ko -->
					</tr>
					<tr>
						<td colspan="3" class="-no-border -green-l">Debtors - 60 days</td>
						<td class=" -border -no-pad">
							<input type="number" data-bind="value: debtx_060" />
						</td>
						<td class="-no-border"></td>
<!-- ko foreach: { data: debts, as: 'd' } -->
						<!-- ko if: !d.is_actual -->
							<td class="-border -green-r">
								<span data-bind="text: roundcut(d.debt_060())" ></span>
							</td>
						<!-- /ko -->
<!-- /ko -->
					</tr>
					<tr>
						<td colspan="3" class="-no-border -green-l">Debtors - 90 days</td>
						<td class=" -border -no-pad">
							<input type="number" data-bind="value: debtx_090" />
						</td>
						<td class="-no-border"></td>
<!-- ko foreach: { data: debts, as: 'd' } -->
						<!-- ko if: !d.is_actual -->
							<td class="-border -green-r">
								<span data-bind="text: roundcut(d.debt_090())" ></span>
							</td>
						<!-- /ko -->
<!-- /ko -->
					</tr>
					<tr>
						<td colspan="3" class="-no-border -green-l">Debtors - 120 days</td>
						<td class="-no-pad -border">
							<input type="number" data-bind="value: debtx_120" />
						</td>
						<td class="-no-border"></td>
<!-- ko foreach: { data: debts, as: 'd' } -->
						<!-- ko if: !d.is_actual -->
							<td class="-border -green-r">
								<span data-bind="text: roundcut(d.debt_120())" ></span>
							</td>
						<!-- /ko -->
<!-- /ko -->
					</tr>

					<tr>
						<th class="-no-border -green-l -green-b" colspan="3">Total Receipts</th>
						<th class="-green-b">
							<div data-bind="text: roundcut(debtx_sum()) +'%'"></div>
							<div data-bind="visible: debtx_sum() != 100"><span class="label label-danger">&ne; 100%</span></div>
						</th>
						<td class="-no-border -green-b"></td>
<!-- ko foreach: { data: debts, as: 'd' } -->
						<!-- ko if: !d.is_actual -->
							<th class="-green-b -border -green-r">
								<span data-bind="text: roundcut(d.debt_sum())" ></span>
							</th>
						<!-- /ko -->
<!-- /ko -->
					</tr>

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
