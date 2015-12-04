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

			<div class="table-responsive">
			<table class="table-calc1">
				<tbody>
					<tr>
						<th><label for="id-6NKUdkToVxjbwZeLlRBq">Business Name</label></th>
						<td colspan="3">
							<input type="text" class="form-control" data-bind="value: business_name" id="id-6NKUdkToVxjbwZeLlRBq" />
						</td>
						<td colspan="3"></td>
					</tr>

					<tr class="header">
						<th></th>
						<th><h5>Annually</h5></th>
						<th><h5>Monthly</h5></th>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
					</tr>

<!-- 1 -->
					<tr>
						<th>Fixed Cost</th>
						<td>
							<div class="field">
								<div class="wpc-input-group">
									<span>$</span>
									<input type="number" data-bind="value: cost_a"/>
								</div>
							</div>
						</td>
						<td>
							<div class="field">
								<div class="wpc-input-group">
									<span>$</span>
									<input type="number" readonly="readonly" data-bind="value: cost_m()"/>
								</div>
							</div>
						</td>
						<!--whitespace-->

						<td colspan="4">
							<p class="explanation">
								These are cost that you have to pay - regardless of how much revenue you make. The cost of keeping the business going, e.g. Rent, Power, Telephone, Administration and Management Salaries, travel, etc..
							</p>
						</td>
					</tr>
<!-- 1 -->
<!-- 2 -->
					<tr>
						<th>Gross Profit Margin&nbsp;%</th>
						<td>
							<div class="field">
								<div class="wpc-input-group">
									<input type="number" data-bind="value: gprofit_a"/>
									<span>%</span>
								</div>
							</div>
						</td>
						<td>
							<div class="field">
								<div class="wpc-input-group">
									<input type="number" readonly="readonly" data-bind="value: gprofit_a()"/>
									<span>%</span>
								</div>
							</div>
						</td>

						<!--whitespace SPACE HERE -->
						<td class="with-arrow" rowspan="3">
						</td>

						<!-- second table -->
						<th class="subtable -t-t -t-l">Sales</th>
						<td class="subtable -t-t">
							<div class="field">
								<div class="wpc-input-group">
									<span>$</span>
									<input type="number" data-bind="value: sales"/>
								</div>
							</div>
						</td>
						<td class="subtable -t-r -t-t"></td>
					</tr>
<!-- 2 -->
<!-- 3 -->
					<tr>
						<th class="wpc-blue-marked-result">Sales required to Breakeven</th>
						<td>
							<div class="field">
								<div class="wpc-input-group  wpc-blue-marked-result">
									<span>$</span>
									<input type="number" readonly="readonly" data-bind="value: sales_be_a()"/>
								</div>
							</div>
						</td>
						<td>
							<div class="field">
								<div class="wpc-input-group wpc-blue-marked-result">
									<span>$</span>
									<input type="number" readonly="readonly" data-bind="value: sales_be_m()"/>
								</div>
							</div>
						</td>

						<!--td rowspan="3">SPACE HERE</td-->

						<!-- second table -->
						<th class="subtable -t-l">Cost of Sales or Cost of Goods Sold</th>
						<td class="subtable">
							<div class="field">
								<div class="wpc-input-group">
									<span>$</span>
									<input type="number" data-bind="value: cost_of_sales"/>
								</div>
							</div>
						</td>
						<td class="subtable -t-r">
							<p class="explanation">
								Direct costs relating to your sales e.g. Direct Labour cost, Cost of products sold, Freight, etc..

							</p>
						</td>
					</tr>
<!-- 3 -->
<!-- 4 -->
					<tr>
						<th>Average Value of a Sale</th>
						<td>
							<div class="field">
								<div class="wpc-input-group">
									<span>$</span>
									<input type="number" data-bind="value: avg_sale"/>
								</div>
							</div>
						</td>
						<td>
							<div class="field">
								<div class="wpc-input-group">
									<span>$</span>
									<input type="number" readonly="readonly" data-bind="value: avg_sale()"/>
								</div>
							</div>
						</td>

						<!--td rowspan="3">SPACE HERE</td-->

						<!-- second table -->
						<th class="subtable -t-l">Gross Profit</th>
						<td class="subtable">
							<div class="field">
								<div class="wpc-input-group">
									<span>$</span>
									<input type="number" readonly="readonly" data-bind="value: gross_profit()"/>
								</div>
							</div>
						</td>
						<td class="subtable -t-r">
						</td>
					</tr>
<!-- 4 -->
<!-- 5 -->
					<tr>
						<th class="wpc-blue-marked-result">Number of&nbsp;Sales required to&nbsp;Breakeven</th>
						<td>
							<div class="field">
								<div class="wpc-input-group  wpc-blue-marked-result">
									<input type="number" readonly="readonly" data-bind="value: number_be_a()"/>
								</div>
							</div>
						</td>
						<td>
							<div class="field">
								<div class="wpc-input-group wpc-blue-marked-result">
									<input type="number" readonly="readonly" data-bind="value: number_be_m()"/>
								</div>
							</div>
						</td>

						<!-- whitespace -->
						<td></td>

						<!-- second table -->
						<th class="subtable -t-l -t-b">Gross Profit Margin&nbsp;%</th>
						<td class="subtable -t-b">
							<div class="field">
								<div class="wpc-input-group">
									<input type="number" readonly="readonly" data-bind="value: gprofit_a()"/>
									<span>%</span>
								</div>
							</div>
						</td>
						<td class="subtable -t-r -t-b">
						</td>
					</tr>
<!-- 5 -->
					<tr class="divider">
						<th></th>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
					</tr>
<!-- 6 -->
					<tr>
						<th>Profit Target</th>
						<td>
							<div class="field">
								<div class="wpc-input-group">
									<span>$</span>
									<input type="number" data-bind="value: profit_a"/>
								</div>
							</div>
						</td>
						<td>
							<div class="field">
								<div class="wpc-input-group">
									<span>$</span>
									<input type="number" readonly="readonly" data-bind="value: profit_m()"/>
								</div>
							</div>
						</td>
						<!--whitespace-->

						<td colspan="4">
						</td>
					</tr>
<!-- 6 -->
<!-- 7 -->
					<tr>
						<th class="wpc-blue-marked-result">Number of Sales required to achieve Target Profit</th>
						<td>
							<div class="field">
								<div class="wpc-input-group  wpc-blue-marked-result">
									<input type="number" readonly="readonly" data-bind="value: number_tp_a()"/>
								</div>
							</div>
						</td>
						<td>
							<div class="field">
								<div class="wpc-input-group wpc-blue-marked-result">
									<input type="number" readonly="readonly" data-bind="value: number_tp_m()"/>
								</div>
							</div>
						</td>
						<!--whitespace-->

						<td colspan="4">
						</td>
					</tr>
<!-- 7 -->

				</tbody>
			</table>
			</div>
		</form>
	</section>
</article>



<script type="text/javascript">
jQuery(document).ready(function()
{
	var data =
	{
		business_name : "Sample Company",
		cost_a : 60000,
		gprofit_a : 40,
		sales : 200000,
		cost_of_sales : 120000,
		avg_sale : 150,

		profit_a : 30000,

		account_3 : -11.9295,

		inventory_1 : 80000,
		inventory_3 : -10.0115,

		price_3 : 2,

		acc_1 : 0,
		acc_3 : 0,
	};

	function Model (v)
	{
		for(a in v)
			this[a] = ko.observable(v[a]);

		//sales_cashflow: ko.computed(function() { return self.sales_1 * self.sales_3 * (self.finance_rate + 1); } ),
		this.cost_m = ko.computed(function() { return this.cost_a() / 12; }, this);

		this.sales_be_a = ko.computed(function() { return this.cost_a() / this.gprofit_a() * 100; }, this);
		this.sales_be_m = ko.computed(function() { return this.sales_be_a() / 12; }, this);

		this.gross_profit = ko.computed(function() { return this.sales() - this.cost_of_sales() ; }, this);

		this.number_be_a = ko.computed(function() { return this.sales_be_a() / this.avg_sale(); }, this);
		this.number_be_m = ko.computed(function() { return this.sales_be_m() / this.avg_sale(); }, this);

		this.profit_m = ko.computed(function() { return this.profit_a() / 12; }, this);

		this.number_tp_a = ko.computed(function() { return 100*this.profit_a() / this.gprofit_a() / this.avg_sale() + this.number_be_a(); }, this);
		this.number_tp_m = ko.computed(function() { return 100*this.profit_m() / this.gprofit_a() / this.avg_sale() + this.number_be_m(); }, this);
	};

	ko.applyBindings(new Model(data));
});
</script>
