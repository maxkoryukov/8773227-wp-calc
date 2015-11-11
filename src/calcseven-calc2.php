
<article class="wpc-calc">
	<section>
		<h2>7 Key Numbers - Goal Seek Calculator</h2>
		<div class="panel-howtouse">
			<div class="panel-heading"><h4><i class="glyphicon glyphicon-info-sign"></i> How to use</h4></div>
			<div class="panel-body">Fill in the details required in the <span class="wpc-howtouse-input-label">Yellow Highlighted Areas</span> - The results will then appear in the Far right columns.</div>
		</div>
		<form class="form">

		<div class="table-responsive"><table class=" table-calc2"><tbody>
			<tr>
				<th><label for="id-Wo1y5OxzpCi2ANZ7J3eF">Business Name</label></th>
				<td colspan="2">
					<input type="text" class="form-control" data-bind="value: business_name" id="id-Wo1y5OxzpCi2ANZ7J3eF" />
				</td>
				<td colspan="4"></td>
			</tr>

			<tr>
				<th><label for="id-mZSyX5k3ObBFehqxQ1YC">%&nbsp;Finance Rate</label></th>
				<td>
					<div class="field">
						<div class="wpc-input-group">
							<input type="number" data-bind="value: finance_rate" id="id-mZSyX5k3ObBFehqxQ1YC" />
							<span>%</span>
						</div>
					</div>
				</td>
				<td colspan="5"></td>
			</tr>

			<tr class="header">
				<th></th>
				<th>Current Number</th>
				<th></th>
				<th>Adjustment</th>
				<th>Cashflow Change</th>
				<th>Profit Change</th>
				<th>Calculation Explanation</th>
			</tr>

			<tr>
				<th>Sales (Revenue Growth)</th>
				<td>
					<div class="field">
						<div class="wpc-label-d" id="id-0uwSTcmgXGAiL9xIHQhV">Sales</div>
						<div class="wpc-input-group">
							<span>$</span>
							<input type="number" data-bind="value: sales_1" aria-describedby="id-0uwSTcmgXGAiL9xIHQhV"/>
						</div>
					</div>
				</td>
				<td></td>
				<td>
					<div class="field">
						<div class="wpc-label-d" id="id-0tiaKvrHRC7YQ3VB4bme">%&nbsp;Change</div>
						<div class="wpc-input-group">
							<input type="number" data-bind="value: sales_3" aria-describedby="id-0tiaKvrHRC7YQ3VB4bme"/>
							<span>%</span>
						</div>
					</div>
				</td>
				<!--whitespace-->

				<td>
					<div class="field">
						<div class="wpc-input-group">
							<span>$</span>
							<input type="number" readonly="readonly" data-bind="value: sales_cashflow()"/>
						</div>
					</div>
				</td>
				<td>
					<div class="field">
						<div class="wpc-input-group">
							<span>$</span>
							<input type="number" readonly="readonly" data-bind="value: sales_cashflow()"/>
						</div>
					</div>
				</td>

				<td class="five wide">
					<p class="explanation">
						% Change x Sales $  +  Change Impact x Finance Rate
					</p>
				</td>
			</tr>


			<tr>
				<th>Cost of Goods Sold</th>
				<td>
					<div class="field">
						<label class="wpc-label-d" for="id-NP3sFQa7hTxXdjiRzS0B">Direct Costs</label>
						<div class="wpc-input-group">
							<span>$</span>
							<input type="number" data-bind="value: cost_1" id="id-NP3sFQa7hTxXdjiRzS0B"/>
						</div>
					</div>
				</td>
				<td>
					<div class="field">
						<div class="wpc-label-d green">
							Cost of Sales&nbsp;%
						</div>
						<div class="wpc-input-group">
							<input type="number" readonly="readonly" data-bind="value: cost_sales()"/>
							<span>%</span>
						</div>
					</div>
				</td>
				<td>
					<div class="field">
						<div class="wpc-label-d green">
							Change in COS&nbsp;%
						</div>
						<div class="wpc-input-group">
							<input type="number" data-bind="value: cost_3"/>
							<span>%</span>
						</div>
					</div>
				</td>
				<!--whitespace-->

				<td>
					<div class="field">
						<div class="wpc-input-group">
							<span>$</span>
							<input type="number" readonly="readonly" data-bind="value: cost_cashflow()"/>
						</div>
					</div>
				</td>
				<td>
					<div class="field">
						<div class="wpc-input-group">
							<span>$</span>
							<input type="number" readonly="readonly" data-bind="value: cost_cashflow()"/>
						</div>
					</div>
				</td>

				<td>
					<p class="explanation">
						% Change x Cost of goods sold $  +  Change Impact x Finance Rate
					</p>
				</td>
			</tr>

<!-- 3 -->
			<tr>
				<th>Overheads</th>
				<td>
					<div class="field">
						<label class="wpc-label-d lblue" for="id-ljG1ZtJ5kQTdmoRCfpcK">Overheads</label>
						<div class="wpc-input-group">
							<span>$</span>
							<input type="number" data-bind="value: overheads_1" id="id-ljG1ZtJ5kQTdmoRCfpcK"/>
						</div>
					</div>
				</td>
				<td>
					<div class="field">
						<div class="wpc-label-d" id="id-qXMkcKpNCsSBRTh8yZza">
							Cost of Sales&nbsp;%
						</div>
						<div class="wpc-input-group">
							<input type="number" readonly="readonly" data-bind="value: overheads_sales()" aria-describedby="id-qXMkcKpNCsSBRTh8yZza" />
							<span>%</span>
						</div>
					</div>
				</td>
				<td>
					<div class="field">
						<div class="wpc-label-d lblue" id="id-73VYGXPh9Zqd0jt56ary">
							%&nbsp;Change of&nbsp;O/H&nbsp;$
						</div>
						<div class="wpc-input-group">
							<input type="number" data-bind="value: overheads_3" aria-describedby="id-73VYGXPh9Zqd0jt56ary" />
							<span>%</span>
						</div>
					</div>
				</td>
				<!--whitespace-->

				<td>
					<div class="field">
						<div class="wpc-input-group">
							<span>$</span>
							<input type="number" readonly="readonly" data-bind="value: overheads_cashflow()"/>
						</div>
					</div>
				</td>
				<td>
					<div class="field">
						<div class="wpc-input-group">
							<span>$</span>
							<input type="number" readonly="readonly" data-bind="value: overheads_cashflow()"/>
						</div>
					</div>
				</td>

				<td>
					<p class="explanation">
						% Change x Overhead $  +  Change Impact x Finance Rate
					</p>
				</td>
			</tr>
<!-- 3 -->

<!-- 4 -->
			<tr>
				<th>Accounts Collections</th>
				<td>
					<div class="field">
						<label class="wpc-label-d" for="id-jKIlfc2i9wJCToLSzvgP">Accnts Rec&nbsp;$</label>
						<div class="wpc-input-group">
							<span>$</span>
							<input type="number" data-bind="value: account_1" id="id-jKIlfc2i9wJCToLSzvgP"/>
						</div>
					</div>
				</td>
				<td>
					<div class="field">
						<label class="wpc-label-d blue" for="id-YDnVoS7tR6vjgQ94wPJK">Accnts Rec&nbsp;Days</label>
						<input type="number" class="form-control" readonly="readonly" data-bind="value: account_days()" id="id-YDnVoS7tR6vjgQ94wPJK" />
					</div>
				</td>
				<td>
					<div class="field">
						<label class="wpc-label-d blue" for="id-Fy5w3x4fJ7Oa6UDsok1K">Change in&nbsp;Accnts Rec&nbsp;Days</label>
						<input type="number" class="form-control" data-bind="value: account_3" id="id-Fy5w3x4fJ7Oa6UDsok1K" />
					</div>
				</td>
				<!--whitespace-->

				<td>
					<div class="field">
						<div class="wpc-input-group">
							<span>$</span>
							<input type="number" readonly="readonly" data-bind="value: account_cashflow()"/>
						</div>
					</div>
				</td>
				<td>
					<div class="field">
						<div class="wpc-input-group">
							<span>$</span>
							<input type="number" readonly="readonly" data-bind="value: account_profit()"/>
						</div>
					</div>
				</td>

				<td>
					<p class="explanation">
						Days Change x (Sales $ / 365)  +  Change Impact x Finance Rate
					</p>
				</td>
			</tr>
<!-- 4 -->

<!-- 5 -->
			<tr>
				<th>Inventory or WIP</th>
				<td>
					<div class="field">
						<label class="wpc-label-d" for="id-9R4WdVANEGejTHnDCufL">Inventory or&nbsp;WIP&nbsp;$</label>
						<div class="wpc-input-group">
							<span>$</span>
							<input type="number" data-bind="value: inventory_1" id="id-9R4WdVANEGejTHnDCufL"/>
						</div>
					</div>
				</td>
				<td>
					<div class="field">
						<label class="wpc-label-d red" for="id-FpNCdDGc8ZPfW0m1yn6U">Inventory or&nbsp;WIP Days</label>
						<input type="number" class="form-control" readonly="readonly" data-bind="value: inventory_calc2()" id="id-FpNCdDGc8ZPfW0m1yn6U" />
					</div>
				</td>
				<td>
					<div class="field">
						<label class="wpc-label-d red" for="id-ILJj0ECFN59HGPmOhvVD">Change in&nbsp;Days</label>
						<input type="number" class="form-control" data-bind="value: inventory_3" id="id-ILJj0ECFN59HGPmOhvVD" />
					</div>
				</td>
				<!--whitespace-->

				<td>
					<div class="field">
						<div class="wpc-input-group">
							<span>$</span>
							<input type="number" readonly="readonly" data-bind="value: inventory_cashflow()"/>
						</div>
					</div>
				</td>
				<td>
					<div class="field">
						<div class="wpc-input-group">
							<span>$</span>
							<input type="number" readonly="readonly" data-bind="value: inventory_profit()"/>
						</div>
					</div>
				</td>

				<td>
					<p class="explanation">
						Days Change x Cost of goods sold $ / 365)  +  Change Impact x Finance Rate
					</p>
				</td>
			</tr>
<!-- 5 -->

<!-- 6 -->
			<tr>
				<th>Price Change</th>
				<td>
					<div class="field">
						<label class="wpc-label-d" for="id-yhgw0xXRj1p5kHUFVcZ3">Sales</label>
						<div class="wpc-input-group">
							<span>$</span>
							<input type="number" readonly="readonly" data-bind="value: sales_1()" id="id-yhgw0xXRj1p5kHUFVcZ3"/>
						</div>
					</div>
				</td>

				<td></td>

				<td>
					<div class="field">
						<label class="wpc-label-d" for="id-tKRCAZ3IY6210fcBvpez">%&nbsp;Price Change</label>
						<div class="wpc-input-group">
							<input type="number" data-bind="value: price_3" id="id-tKRCAZ3IY6210fcBvpez" />
							<span>%</span>
						</div>
					</div>
				</td>
				<!--whitespace-->

				<td>
					<div class="field">
						<div class="wpc-input-group">
							<span>$</span>
							<input type="number" readonly="readonly" data-bind="value: price_cashflow()"/>
						</div>
					</div>
				</td>
				<td>
					<div class="field">
						<div class="wpc-input-group">
							<span>$</span>
							<input type="number" readonly="readonly" data-bind="value: price_cashflow()"/>
						</div>
					</div>
				</td>

				<td>
					<p class="explanation">
						% Change x Sales $  +  Change Impact x Finance Rate
					</p>
				</td>
			</tr>
<!-- 6 -->

<!-- 7 -->
			<tr>
				<th>Accounts Payable</th>
				<td>
					<div class="field">
						<label class="wpc-label-d" for="id-ADX9LGTvkPNt5mzHpW8a">Accnts Pay&nbsp;$</label>
						<div class="wpc-input-group">
							<span>$</span>
							<input type="number" data-bind="value: acc_1" id="id-ADX9LGTvkPNt5mzHpW8a"/>
						</div>
					</div>
				</td>
				<td>
					<div class="field">
						<label class="wpc-label-d" for="id-Dmf0y86nKAETeGQIR5Uv">Accnts Pay&nbsp;Days</label>
						<input type="number" class="form-control" readonly="readonly" data-bind="value: acc_calc2()" id="id-Dmf0y86nKAETeGQIR5Uv" />
					</div>
				</td>
				<td>
					<div class="field">
						<label class="wpc-label-d" for="id-2e8amrHFOkQ0UsZI3uxn">Change in&nbsp;Accnts Days</label>
						<input type="number" class="form-control" data-bind="value: acc_3" id="id-2e8amrHFOkQ0UsZI3uxn" />
					</div>
				</td>
				<!--whitespace-->

				<td>
					<div class="field">
						<div class="wpc-input-group">
							<span>$</span>
							<input type="number" readonly="readonly" data-bind="value: acc_cashflow()"/>
						</div>
					</div>
				</td>
				<td>
					<div class="field">
						<div class="wpc-input-group">
							<span>$</span>
							<input type="number" readonly="readonly" data-bind="value: acc_profit()"/>
						</div>
					</div>
				</td>

				<td>
					<p class="explanation">
						Days Change x (Cost of goods sold $ / 365)  +  Change Impact x Finance Rate
					</p>
				</td>
			</tr>
<!-- 7 -->
		</tbody><tfoot>
			<tr>
				<th colspan="4">Total Change</th>

				<!--whitespace-->

				<th>
					<div class="field">
						<div class="wpc-input-group">
							<span>$</span>
							<input type="number" readonly="readonly" data-bind="value: total_cashflow()"/>
						</div>
					</div>
				</th>
				<th>
					<div class="field">
						<div class="wpc-input-group">
							<span>$</span>
							<input type="number" readonly="readonly" data-bind="value: total_profit()"/>
						</div>
					</div>
				</th>

				<td></td>
			</tr>

		</tfoot></table></div>
		</form>
	</section>
</article>



<script type="text/javascript">
jQuery(document).ready(function()
{
	var data =
	{
		business_name : "Sample Company",
		finance_rate : 7.8,
		sales_1 : 916050,
		sales_3 : 30,

		cost_1 : 695238,
		cost_3 : -1,

		overheads_1 : 298180,
		overheads_3 : -6,

		account_1 : 916050,
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
		this.sales_cashflow = ko.pureComputed(function() { return this.sales_1() * this.sales_3() * (this.finance_rate() + 100) / 10000; }, this);

		this.cost_sales = ko.pureComputed(function() { return this.cost_1() * 100 / this.sales_1(); }, this);
		this.cost_cashflow = ko.pureComputed(function() { return -this.cost_1() * this.cost_3() * (this.finance_rate() + 100) / 10000; }, this);

		this.overheads_sales = ko.computed(function() { return this.overheads_1() * 100 / this.sales_1(); }, this);
		this.overheads_cashflow = ko.computed(function() { return -this.overheads_1() * this.overheads_3() * (this.finance_rate() + 100) / 10000; }, this);

		this.account_days = ko.computed(function() { return this.account_1() / ( this.sales_1() / 365 ) ; }, this);
		this.account_cashflow = ko.computed(function() { return -(( this.account_days() + this.account_3() ) * (this.sales_1() / 365) - this.account_1()) * (this.finance_rate() + 100) / 100; }, this );
		this.account_profit   = ko.computed(function() { return -(( this.account_days() + this.account_3() ) * (this.sales_1() / 365) - this.account_1()) * (this.finance_rate()) / 100; }, this );

		this.inventory_calc2 = ko.computed(function() { return this.inventory_1() / ( this.cost_1() / 365 ) ; }, this);
		this.inventory_cashflow = ko.computed(function() { return -(( this.inventory_calc2() + this.inventory_3() ) * (this.cost_1() / 365) - this.inventory_1()) * (this.finance_rate() + 100) / 100; }, this );
		this.inventory_profit   = ko.computed(function() { return -(( this.inventory_calc2() + this.inventory_3() ) * (this.cost_1() / 365) - this.inventory_1()) * (this.finance_rate()) / 100; }, this );

		this.price_cashflow = ko.computed(function() { return ( this.sales_1() * this.price_3()) * (this.finance_rate() + 100) / 10000; }, this );

		this.acc_calc2 = ko.computed(function() { return this.acc_1() / ( this.cost_1() / 365 ) ; }, this);
		this.acc_cashflow = ko.computed(function() { return (( this.acc_calc2() + this.acc_3() ) * (this.cost_1() / 365) - this.acc_1()) * (this.finance_rate() + 100) / 100; }, this );
		this.acc_profit   = ko.computed(function() { return (( this.acc_calc2() + this.acc_3() ) * (this.cost_1() / 365) - this.acc_1()) * (this.finance_rate()) / 100; }, this );

		this.total_cashflow = ko.computed(function() { return this.sales_cashflow() + this.cost_cashflow() + this.overheads_cashflow() + this.account_cashflow() + this.inventory_cashflow() + this.price_cashflow() + this.acc_cashflow(); }, this);
		this.total_profit = ko.computed(function() { return this.sales_cashflow() + this.cost_cashflow() + this.overheads_cashflow() + this.account_profit() + this.inventory_profit() + this.price_cashflow() + this.acc_profit(); }, this);
	};

	ko.applyBindings(new Model(data));
});
</script>
