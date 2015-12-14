<?php
function input_with_sym($data_field, $charpre, $charpost, $ro, $id = NULL, $label = NULL, $label_css = NULL)
{
	if (NULL != $label)
	{
		$idf = ($id)? ' for="id-'.$id.'"' : '';
		$label_css = $label_css ? ' ' . $label_css : '';

		echo '<label class="wpc-label-d'. $label_css.'"'. $idf . '>'. $label . '</label>';
	}
	echo '<div class="field">';

	$grouped = (!! $charpre) || (!! $charpost) ;

	if ($grouped)
	{
		echo '<div class="wpc-input-group">';
	}

	if (NULL != $charpre)
	{
		echo '<span>' . $charpre . '</span>' ;
	}
	
	$rr = ( $ro ) ? ' readonly="readonly"' : '';
	$idi = ($id) ? ' id="'.$id. '"' : '';
	$data_field = ( $ro ) ? 'roundcut(' . $data_field . '())' : $data_field;
	
	echo '<input type="number" class="form-control"'. $rr .	' data-bind="value: ' . $data_field . '"' . $idi . '/>';

	if (NULL != $charpost)
	{
		echo '<span>' . $charpost . '</span>' ;
	}

	if ($grouped)
	{
		echo '</div>';
	}
	
	echo '</div>';
}
?>
<article class="wpc-calc">
	<section>
		<h2>7 Key Numbers - Goal Seek Calculator</h2>
		<div class="panel-howtouse">
			<div class="panel-heading"><h4><i class="glyphicon glyphicon-info-sign"></i> How to use</h4></div>
			<div class="panel-body">Fill in the details required in the <span class="wpc-howtouse-input-label">Yellow Highlighted Areas</span> - The results will then appear in the Far right columns.</div>
		</div>
		<form class="form">

			<div>

			</div>
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
							<input type="number" class="form-control" data-bind="value: finance_rate" id="id-mZSyX5k3ObBFehqxQ1YC" />
							<span>%</span>
						</div>
					</div>
				</td>
				<td colspan="5"></td>
			</tr>

			<tr class="header">
				<th></th>
				<th><span>Current Number</span></th>
				<th></th>
				<th><span>Adjustment</span></th>
				<th><span>Cashflow Change</span></th>
				<th><span>Profit Change</span></th>
				<th><span>Calculation Explanation</span></th>
			</tr>

			<tr>
				<th>Sales (Revenue Growth)</th>
				<td>
					<?php input_with_sym("sales_1", "$", NULL, 0, '0uwSTcmgXGAiL9xIHQhV', 'Sales', NULL) ?>
				</td>
				<td></td>
				<td>
					<?php input_with_sym("sales_3", NULL, '%', 0, 'x0tiaKvrHRC7YQ3VB4bme', '%&nbsp;Change', NULL) ?>
				</td>
				<!--whitespace-->

				<td>
					<?php input_with_sym("sales_cashflow", "$", NULL, 1) ?>
				</td>
				<td>
					<?php input_with_sym("sales_cashflow", "$", NULL, 1) ?>
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
					<?php input_with_sym("cost_1", '$', NULL, 0, 'NP3sFQa7hTxXdjiRzS0B', 'Direct Costs', NULL) ?>
				</td>
				<td>
					<?php input_with_sym("cost_sales", NULL, '%', 1, NULL, 'Cost of Sales&nbsp;%', 'green') ?>
				</td>
				<td>
					<?php input_with_sym("cost_3", NULL, '%' , 0, 'xNP3sFQa7hTxXdjiRzS0B', 'Change in COS&nbsp;%', 'green') ?>
				</td>
				<!--whitespace-->

				<td>
					<?php input_with_sym("cost_cashflow", '$', NULL , 1, NULL, NULL, NULL) ?>
				</td>
				<td>
					<?php input_with_sym("cost_cashflow", '$', NULL , 1, NULL, NULL, NULL) ?>
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
					<?php input_with_sym("overheads_1", '$', NULL, 0, 'ljG1ZtJ5kQTdmoRCfpcK', 'Overheads', 'lblue') ?>
				</td>
				<td>
					<?php input_with_sym("overheads_sales", NULL, '%', 1, 'qXMkcKpNCsSBRTh8yZza', 'Cost of Sales&nbsp;%', NULL) ?>
				</td>
				<td>
					<?php input_with_sym("overheads_3", NULL, '%', 0, '73VYGXPh9Zqd0jt56ary', '%&nbsp;Change of&nbsp;O/H&nbsp;$', 'lblue') ?>
				</td>
				<!--whitespace-->

				<td>
					<?php input_with_sym("overheads_cashflow", '$', NULL, 1, NULL, NULL,  NULL) ?>
				</td>
				<td>
					<?php input_with_sym("overheads_cashflow", '$', NULL, 1, NULL, NULL,  NULL) ?>
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
					<?php input_with_sym("account_1", '$', NULL, 0, 'jKIlfc2i9wJCToLSzvgP', 'Accnts Rec&nbsp;$', NULL) ?>
				</td>
				<td>
					<?php input_with_sym("account_days", NULL, NULL, 1, 'YDnVoS7tR6vjgQ94wPJK', 'Accnts Rec&nbsp;Days', 'blue') ?>
				</td>
				<td>
					<?php input_with_sym("account_3", NULL, NULL, 0, 'Fy5w3x4fJ7Oa6UDsok1K', 'Change in&nbsp;Accnts Rec&nbsp;Days', 'blue') ?>
				</td>
				<!--whitespace-->

				<td>
					<?php input_with_sym("account_cashflow", '$', NULL, 1, NULL, NULL,  NULL) ?>
				</td>
				<td>
					<?php input_with_sym("account_profit", '$', NULL, 1, NULL, NULL,  NULL) ?>
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
					<?php input_with_sym("inventory_1", '$', NULL, 0, '9R4WdVANEGejTHnDCufL', 'Inventory or&nbsp;WIP&nbsp;$', NULL) ?>
				</td>
				<td>
					<?php input_with_sym("inventory_calc2", NULL , NULL, 1, 'FpNCdDGc8ZPfW0m1yn6U', 'Inventory or&nbsp;WIP Days', 'red') ?>
				</td>
				<td>
					<?php input_with_sym("inventory_3", NULL , NULL, 0, 'ILJj0ECFN59HGPmOhvVD', 'Change in&nbsp;Days', 'red') ?>
				</td>
				<!--whitespace-->

				<td>
					<?php input_with_sym("inventory_cashflow", '$', NULL, 1, NULL, NULL,  NULL) ?>
				</td>
				<td>
					<?php input_with_sym("inventory_profit", '$', NULL, 1, NULL, NULL,  NULL) ?>
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
					<?php input_with_sym("sales_1", '$', NULL, 1, 'yhgw0xXRj1p5kHUFVcZ3', 'Sales', NULL) ?>
				</td>

				<td></td>

				<td>
					<?php input_with_sym("price_3", NULL , '%', 0, 'tKRCAZ3IY6210fcBvpez', '%&nbsp;Price Change', NULL) ?>
				</td>
				<!--whitespace-->

				<td>
					<?php input_with_sym("price_cashflow", '$', NULL, 1, NULL, NULL,  NULL) ?>
				</td>
				<td>
					<?php input_with_sym("price_cashflow", '$', NULL, 1, NULL, NULL,  NULL) ?>
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
					<?php input_with_sym("acc_1", '$', NULL, 0, 'ADX9LGTvkPNt5mzHpW8a', 'Accnts Pay&nbsp;$', NULL) ?>
				</td>
				<td>
					<?php input_with_sym("acc_calc2", NULL , NULL, 1, 'Dmf0y86nKAETeGQIR5Uv', 'Accnts Pay&nbsp;Days', NULL) ?>
				</td>
				<td>
					<?php input_with_sym("acc_3", NULL , NULL, 0, '2e8amrHFOkQ0UsZI3uxn', 'Change in&nbsp;Accnts Days', NULL) ?>
				</td>
				<!--whitespace-->

				<td>
					<?php input_with_sym("acc_cashflow", '$', NULL, 1, NULL, NULL,  NULL) ?>
				</td>
				<td>
					<?php input_with_sym("acc_profit", '$', NULL, 1, NULL, NULL,  NULL) ?>
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
					<?php input_with_sym("total_cashflow", '$', NULL, 1, NULL, NULL,  NULL) ?>
				</th>
				<th>
					<?php input_with_sym("total_profit", '$', NULL, 1, NULL, NULL,  NULL) ?>
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

		account_1 : 0.1,
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

		this.account_days = ko.computed(function() { return this.account_1() / ( 1.0 * this.sales_1() / 365.0 ) ; }, this);
		this.account_cashflow = ko.computed(function() { return -1.0 * (( this.account_days() + Number(this.account_3()) ) * (1.0 * this.sales_1() / 365.0) - this.account_1()) * (this.finance_rate() + 100) / 100; }, this );
		this.account_profit   = ko.computed(function() { return -1.0 * (( this.account_days() + Number(this.account_3()) ) * (this.sales_1() / 365.0) - this.account_1()) * (this.finance_rate()) / 100; }, this );

		this.inventory_calc2 = ko.computed(function() { return this.inventory_1() / ( this.cost_1() / 365.0 ) ; }, this);
		this.inventory_cashflow = ko.computed(function() { return -(( this.inventory_calc2() + Number(this.inventory_3()) ) * (this.cost_1() / 365.0) - this.inventory_1()) * (this.finance_rate() + 100) / 100; }, this );
		this.inventory_profit   = ko.computed(function() { return -(( this.inventory_calc2() + Number(this.inventory_3()) ) * (this.cost_1() / 365.0) - this.inventory_1()) * (this.finance_rate()) / 100; }, this );

		this.price_cashflow = ko.computed(function() { return ( this.sales_1() * this.price_3()) * (this.finance_rate() + 100) / 10000; }, this );

		this.acc_calc2 = ko.computed(function() { return Number(this.acc_1()) / ( this.cost_1() / 365.0 ) ; }, this);
		this.acc_cashflow = ko.computed(function() { return (( this.acc_calc2() + Number(this.acc_3()) ) * (this.cost_1() / 365.0) - Number(this.acc_1())) * (this.finance_rate() + 100) / 100; }, this );
		this.acc_profit   = ko.computed(function() { return (( this.acc_calc2() + Number(this.acc_3()) ) * (this.cost_1() / 365.0) - Number(this.acc_1())) * (this.finance_rate()) / 100; }, this );

		this.total_cashflow = ko.computed(function() { return this.sales_cashflow() + this.cost_cashflow() + this.overheads_cashflow() + this.account_cashflow() + this.inventory_cashflow() + this.price_cashflow() + this.acc_cashflow(); }, this);
		this.total_profit = ko.computed(function() { return this.sales_cashflow() + this.cost_cashflow() + this.overheads_cashflow() + this.account_profit() + this.inventory_profit() + this.price_cashflow() + this.acc_profit(); }, this);
	};

	ko.applyBindings(new Model(data));
});
</script>
