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
								<span data-bind="text: Math.abs(d.receipts()), css: {'-negative-number' : d.receipts() < 0 }"></span>
							</td>
<!-- /ko -->
					</tr>

					<tr>
						<th>Closing</th>
<!-- ko foreach: { data: debts, as: 'd' } -->

						<!-- ko if: d.is_actual -->
							<td class="-no-pad">
								<input type="number" data-bind="value: d.closing" />
							</td>
						<!-- /ko -->
						<!-- ko if: !d.is_actual -->
							<td class="-no-pad">
								<span data-bind="text: d.closing()"></span>
							</td>
						<!-- /ko -->
<!-- /ko -->
					</tr>
					<tr>
						<td data-bind="attr: {colspan: debts_length()+1}">
						</td>
					</tr>
					<tr class="debtors-days">
						<th><h4><div>Debtors days</div></h4></th>
<!-- ko foreach: { data: debts, as: 'd' } -->

							<td>
								<div data-bind="text: 1"></div>
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
						<td rowspan="7"></td>
						<td data-bind="attr: {colspan: debts_length()}"><h4>Cash Collection</h4>
						</td>
					</tr>
					<tr>
						<td colspan="3">Debtors - Current</td>
						<td class="-no-pad">
							<input type="number" data-bind="value: debtx_000" />
						</td>
						<td></td>
<!-- ko foreach: { data: debts, as: 'd' } -->
						<!-- ko if: !d.is_actual -->
							<td>
								<span data-bind="text: d.debt_000()" ></span>
							</td>
						<!-- /ko -->
<!-- /ko -->
					</tr>
					<tr>
						<td colspan="3">Debtors - 30 days</td>
						<td class="-no-pad">
							<input type="number" data-bind="value: debtx_030" />
						</td>
						<td></td>
<!-- ko foreach: { data: debts, as: 'd' } -->
						<!-- ko if: !d.is_actual -->
							<td>
								<span data-bind="text: d.debt_030()" ></span>
							</td>
						<!-- /ko -->
<!-- /ko -->
					</tr>
					<tr>
						<td colspan="3">Debtors - 60 days</td>
						<td class="-no-pad">
							<input type="number" data-bind="value: debtx_060" />
						</td>
						<td></td>
<!-- ko foreach: { data: debts, as: 'd' } -->
						<!-- ko if: !d.is_actual -->
							<td>
								<span data-bind="text: d.debt_060()" ></span>
							</td>
						<!-- /ko -->
<!-- /ko -->
					</tr>
					<tr>
						<td colspan="3">Debtors - 90 days</td>
						<td class="-no-pad">
							<input type="number" data-bind="value: debtx_090" />
						</td>
						<td></td>
<!-- ko foreach: { data: debts, as: 'd' } -->
						<!-- ko if: !d.is_actual -->
							<td>
								<span data-bind="text: d.debt_090()" ></span>
							</td>
						<!-- /ko -->
<!-- /ko -->
					</tr>
					<tr>
						<td colspan="3">Debtors - 120 days</td>
						<td class="-no-pad">
							<input type="number" data-bind="value: debtx_120" />
						</td>
						<td></td>
<!-- ko foreach: { data: debts, as: 'd' } -->
						<!-- ko if: !d.is_actual -->
							<td>
								<span data-bind="text: d.debt_120()" ></span>
							</td>
						<!-- /ko -->
<!-- /ko -->
					</tr>

					<tr>
						<th colspan="3">Total Receipts</th>
						<th>
							<div data-bind="text: debtx_sum() +'%'"></div>
							<div data-bind="visible: debtx_sum() != 100"><span class="label label-danger">&ne; 100%</span></div>
						</th>
						<td></td>
<!-- ko foreach: { data: debts, as: 'd' } -->
						<!-- ko if: !d.is_actual -->
							<th>
								<span data-bind="text: d.debt_sum()" ></span>
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
