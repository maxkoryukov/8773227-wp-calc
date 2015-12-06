<?php
function cfo_gen_input_number($kofield, $id_suff, $lbltext)
{
?>
	<div class="cfo-grp">
		<label for="id-<?php echo $id_suff; ?>"><?php echo $lbltext; ?></label>
		<div>
			<input type="number" id="id-<?php echo $id_suff; ?>" data-bind="value:<?php echo $kofield; ?>, css:{'-red-fg': <?php echo $kofield; ?><0 }" />
		</div>
	</div>
<?php
}

function cfo_gen_input_percent($kofield, $id_suff, $lbltext)
{
?>
	<div class="cfo-grp">
		<label for="id-<?php echo $id_suff; ?>"><?php echo $lbltext; ?></label>
		<div>
			<input type="number" id="id-<?php echo $id_suff; ?>" data-bind="value:<?php echo $kofield; ?>, css:{'-red-fg': <?php echo $kofield; ?><0 }" />
		</div>
	</div>
<?php
}

function cfo_gen_input_dmo($kofield, $id_suff, $lbltext)
{
?>
	<div class="cfo-grp">
		<label for="id-<?php echo $id_suff; ?>"><?php echo $lbltext; ?></label>
		<div>
			<input type="number" min="1" max="31" step="1" type="number" id="id-<?php echo $id_suff; ?>" data-bind="value:<?php echo $kofield; ?>" />
		</div>
	</div>
<?php
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
					<p>Please answer the following questions as accurately and as completely as possible to generate the forecast cash&nbsp;flow.</p>
				</section>
			</div>
		</div>
		<form class="form form-3">

			<ul class="nav nav-tabs">
				<li class="active">
					<a data-toggle="tab" title="Basic Info" href="#tab-basic-information">Basic</a>
				</li>
				<li><a data-toggle="tab" href="#tab-income">Income</a></li>
				<li><a data-toggle="tab" href="#tab-payroll">Payroll</a></li>
				<li><a data-toggle="tab" title="Supplier &amp; Stock Information" href="#tab-supplier">S&amp;S Information</a></li>
				<li><a data-toggle="tab" title="Monthly Overheads" href="#tab-mo-overheads">Overheads</a></li>
				<li><a data-toggle="tab" href="#tab-other">Other</a></li>
				<li><a data-toggle="tab" title="Cash Flow Summary" href="#tab-summary">Summary</a></li>
				<li><a data-toggle="tab" title="Cash Flow Chart" href="#tab-chart">Chart</a></li>
			</ul>

			<div class="tab-content">

<!-- TABLE 1 -->
				<div id="tab-basic-information" class="tab-pane fade in active">

					<div class="cfo-form-horizontal">
						<div class="cfo-grp">
							<label for="id-x1g7vhe78">What is your current bank balance? (Enter an overdraft as negative)</label>
							<div>
								<input type="number" id="id-x1g7vhe78" data-bind="value:basic_bank_balance, css:{'-red-fg': basic_bank_balance<0 }" />
							</div>
						</div>

						<div class="cfo-grp">
							<label for="id-nFWwwJi66PhB">What is your current overdraft limit?</label>
							<div>
								<input type="number" id="id-nFWwwJi66PhB" data-bind="value:basic_overdraft_limit, css:{'-red-fg': basic_overdraft_limit<0 }" />
							</div>
						</div>

						<div class="cfo-grp">
							<label for="id-SE2fX0Mzn8X4">What GST basis are you on?</label>
							<div>
								<select class="form-control" id="id-SE2fX0Mzn8X4">
									<option value="payments">Payments</option>
									<option value="invoice">Invoice</option>
								</select>
							</div>
						</div>

						<div class="cfo-grp">
							<label for="id-x2AETO2Z9Uz9">How Frequently do you Pay GST?</label>
							<div>
								<input type="text" placeholder="Monthly" id="id-x2AETO2Z9Uz9"/>
							</div>
						</div>
						<div class="cfo-grp">
							<label for="id-12rH7bPydx8Q">When is your next GST payment due?</label>
							<div>
								<input type="date" id="id-12rH7bPydx8Q" data-bind="date:basic_next_payment"/>
							</div>
						</div>

						<div class="cfo-grp">
							<label for="id-IHEFuU9EoSJa">and how much is already owing?</label>
							<div>
								<input type="number" id="id-IHEFuU9EoSJa" data-bind="value:basic_owing"/>
							</div>
						</div>
						<div class="cfo-grp">
							<label for="id-YVocM1041022">How much FBT do you pay each Quarter?</label>
							<div>
								<input type="number" id="id-YVocM1041022" data-bind="value:basic_pay_quarter"/>
							</div>
						</div>
						<div class="cfo-grp">
							<label for="id-QsN1DMz4W3ZD">When is next Income Tax payment due?</label>
							<div>
								<input type="date" id="id-QsN1DMz4W3ZD" data-bind="date:basic_next_tax"/>
							</div>
						</div>
						<div class="cfo-grp">
							<label for="id-4MJ8wl9Z6q1i">How much is your Income Tax Payment?</label>
							<div>
								<input type="number" id="id-4MJ8wl9Z6q1i" data-bind="value:basic_tax_payment"/>
							</div>
						</div>

					</div>

				</div>
<!-- TABLE 1 -->

<!-- TABLE 2 -->
				<div id="tab-income" class="tab-pane fade">
					<div class="cfo-form-horizontal">
						<?php cfo_gen_input_number('income_cash_sales', 'V2URaU0mJKO3', 'What are your weekly cash sales - GST inc?'); ?>
						<?php cfo_gen_input_number('income_credit_sales', 'tA0JeS2mAbgX', 'What are your expected monthly credit sales - GST inc?'); ?>

						<section class="col-sm-12"><label>What have your sales and debtors been for the last three months?</label></section>

						<div class="cfo-grp-of-two">
							<div>
								<table class="table">
									<tr>
										<th>Sales</th>
										<th>Debtors</th>
									</tr>
<?php
	function cfo_gen_two_bind_tr($ko1, $ko2)
	{
 ?>
	<tr>
		<td>
			<input class="form-control" type="number" data-bind="value:<?php echo($ko1); ?>"/>
		</td>
		<td>
			<input class="form-control" type="number" data-bind="value:<?php echo($ko2); ?>"/>
		</td>
	</tr>
<?php
	}
	cfo_gen_two_bind_tr("income_sales_1", "income_debtors_1");
	cfo_gen_two_bind_tr("income_sales_2", "income_debtors_2");
	cfo_gen_two_bind_tr("income_sales_3", "income_debtors_3");
?>
								</table>
							</div>
						</div>

						<section class="col-sm-12"><label>What cash have you received from debtors for each week in the last calendar month?</label></section>

						<div class="cfo-grp-of-two">
							<div>
								<table class="table">
<?php
	function cfo_gen_one_bind_tr($lbl, $koid)
	{
 ?>
	<tr>
		<th><?php echo($lbl); ?></th>
		<td>
			<input class="form-control" type="number" data-bind="value:<?php echo($koid); ?>"/>
		</td>
	</tr>
<?php
	}

	function cfo_gen_recv_debtors_tr($ind)
	{
		cfo_gen_one_bind_tr("Week&nbsp;".$ind, "income_recv_debtors_".$ind);
	}

	cfo_gen_recv_debtors_tr(1);
	cfo_gen_recv_debtors_tr(2);
	cfo_gen_recv_debtors_tr(3);
?>
									<tr>
										<th>Week 4</th>
										<td>
											<span data-bind="text:income_recv_debtors_4"></span>
										</td>
									</tr>
								</table>
							</div>
						</div>

						<?php cfo_gen_input_number('income_interest', 'q8gkUeYt31jU', 'How much interest do you receive each month (Net of WHT)?'); ?>
						<?php cfo_gen_input_number('income_other', 'hgtnX9905G16', 'What other income do you receive monthly?'); ?>

					</div>
				</div>
<!-- TABLE 2 -->

<!-- TABLE 3 -->
				<div id="tab-payroll" class="tab-pane fade">
					<div class="cfo-form-horizontal">
						<?php cfo_gen_input_number('payroll_wages', 'W9nt1juONgU4', 'How much do you pay out for wages in cash each week?'); ?>
						<?php cfo_gen_input_number('payroll_fortnight', 'zJ4w28kTCj93', 'How much do you pay out in cash each fortnight for fortnightly pays?'); ?>
						<?php cfo_gen_input_number('payroll_salaries', 'd21gX1LopJpe', 'How much do you pay out in cash for salaries each month?'); ?>

						<?php cfo_gen_input_dmo('payroll_salary_day', 'KZ6Mbh4c5Wd9', 'Which day of the month do you pay salaries?'); ?>

						<?php cfo_gen_input_number('payroll_deduct_paye', 'd65d72O7R5g3', 'How much do you deduct each month for PAYE?'); ?>

						<div class="cfo-grp">
							<label for="id-GfniTqi74x8S">How frequently do you pay PAYE to the IRD?</label>
							<div>
								<select class="form-control" id="id-GfniTqi74x8S">
									<option value="monthly">Monthly</option>
								</select>
							</div>
						</div>
					</div>
				</div>
<!-- TABLE 3 -->


<!-- TABLE 4 -->
				<div id="tab-supplier" class="tab-pane fade">
					<div class="cfo-form-horizontal">

						<?php cfo_gen_input_percent('supplier_gross_margin', 'COtW7N3bvkxl', 'What is your gross margin as a percentage of sales?'); ?>
						<?php cfo_gen_input_percent('supplier_purchases7', '19SwYNRBA1R7', 'What percentage of your purchases are paid within 7 days?'); ?>
						<?php cfo_gen_input_dmo('supplier_pay_day', 'v5zU5iY52C6K', 'What day of the month do you pay your suppliers that offer terms?'); ?>

						<section class="col-sm-12"><label>Are you planning to change your inventory levels over the next three months?</label></section>
						<section class="col-sm-12"><label>If so please provide details by month</label></section>

						<div class="cfo-grp-of-two">
							<div>
								<table class="table">
<?php
cfo_gen_one_bind_tr("Month&nbsp;1", "supplier_levels_1");
cfo_gen_one_bind_tr("Month&nbsp;2", "supplier_levels_2");
cfo_gen_one_bind_tr("Month&nbsp;3", "supplier_levels_3");
?>
								</table>
							</div>
						</div>
					</div>
				</div>
<!-- TABLE 4 -->

<!-- TABLE 5 -->
				<div id="tab-mo-overheads" class="tab-pane fade">
					<div class="cfo-form-horizontal">
						<table class="table">
							<thead>
								<tr>
									<th>Item</th>
									<th>Sum</th>
									<th>Day of the Month Paid</th>
								</tr>
							</thead>
							<tbody>
<?php
	function cfo_gen_three_col_tr($koid, $idsfx, $caption)
	{
?>
	<tr>
		<td><label for="id-<?php echo($idsfx); ?>"><?php echo($caption); ?></label></td>
		<td>
			<input class="form-control" type="number" id="id-<?php echo($idsfx); ?>" data-bind="value:<?php echo $koid; ?>_val, css:{'-red-fg': <?php echo $koid; ?>_val<0 }" />
		</td>
		<td>
			<input class="form-control" type="number" min="1" max="31" step="1" type="number" data-bind="value:<?php echo $koid; ?>_day" />
		</td>
	</tr>
<?php
	}
?>

<?php
	cfo_gen_three_col_tr("overheads_rent", "FF8i2p1mV20L", "Rent");
	cfo_gen_three_col_tr("overheads_freight", "G27eq8uguS6D", "Freight");
	cfo_gen_three_col_tr("overheads_post", "5Uj12x5mLL0J", "Postage &amp; Couriers");
	cfo_gen_three_col_tr("overheads_print", "ttNa4OijGrMn", "Printing &amp; Stationery");
	cfo_gen_three_col_tr("overheads_bank_fee", "T7Jt45P6oWK8", "Bank Charges (exc. interest)");
	cfo_gen_three_col_tr("overheads_fuel", "kGl5JsG5H1l5", "Petrol &amp; Fuel");
	cfo_gen_three_col_tr("overheads_phone", "CP77yB9H0b3z", "Telephones");
	cfo_gen_three_col_tr("overheads_heat", "Of9B0Cz431L5", "Light Heat &amp; Power");
	cfo_gen_three_col_tr("overheads_travel", "WWE7G0WUNP18", "Travel");
	cfo_gen_three_col_tr("overheads_lease", "gXDWwVFTRlfO", "HP/Lease Payments");
	cfo_gen_three_col_tr("overheads_sundry", "fsU8M6Nw5MB1", "Sundry Expenses");
?>
							</tbody>
						</table>

<?php
	cfo_gen_input_percent("overheads_rate", "zzUxlufY3u95", "What rate of interest are you paying on your overdraft?");
?>

					</div>
				</div>
<!-- TABLE 5 -->


<!-- TABLE 6 -->
				<div id="tab-other" class="tab-pane fade">
					<table class="table">
						<thead>
							<tr>
								<th>Item</th>
								<th>Month 1</th>
								<th>Month 2</th>
								<th>Month 3</th>
							</tr>
						</thead>
						<tbody>
<?php
function cfo_gen_four_col_tr($koid, $idsfx, $caption)
{
?>
<tr>
	<td><label for="id-<?php echo($idsfx); ?>"><?php echo($caption); ?></label></td>
	<td>
		<input class="form-control" type="number" data-bind="value:<?php echo($koid); ?>_1, css:{'-red-fg': <?php echo($koid); ?>_1<0 }"
			id="id-<?php echo($idsfx); ?>" />
	</td>
	<td>
		<input class="form-control" type="number" data-bind="value:<?php echo($koid); ?>_2, css:{'-red-fg': <?php echo($koid); ?>_2<0 }" />
	</td>
	<td>
		<input class="form-control" type="number" data-bind="value:<?php echo($koid); ?>_3, css:{'-red-fg': <?php echo($koid); ?>_3<0 }" />
	</td>
</tr>
<?php
}
function cfo_gen_four_col_with_name_tr($koid)
{
?>
<tr>
	<td>
		<input class="form-control" type="text" data-bind="value:<?php echo($koid); ?>_name" />
	</td>
	<td>
		<input class="form-control" type="number" data-bind="value:<?php echo($koid); ?>_1, css:{'-red-fg': <?php echo($koid); ?>_1<0 }" />
	</td>
	<td>
		<input class="form-control" type="number" data-bind="value:<?php echo($koid); ?>_2, css:{'-red-fg': <?php echo($koid); ?>_2<0 }" />
	</td>
	<td>
		<input class="form-control" type="number" data-bind="value:<?php echo($koid); ?>_3, css:{'-red-fg': <?php echo($koid); ?>_3<0 }" />
	</td>
</tr>
<?php
}
?>

<?php
	cfo_gen_four_col_tr("other_adv", "tU18CawWF88d", "Advertising");
	cfo_gen_four_col_tr("other_ins", "bwgFisZiQ0uq", "Insurance");
	cfo_gen_four_col_tr("other_car", "1In04H9S413w", "Vehicle Registrations");
	cfo_gen_four_col_tr("other_rep", "gZ0CCqijx3y7", "All Repairs &amp; Maintenance");
	cfo_gen_four_col_tr("other_acc", "1P2Y4L3GRPdN", "Fees to accountants &amp; Lawyers");
	cfo_gen_four_col_tr("other_tax", "6h71YWqzw8gt", "Income/Corporate Taxes");
	cfo_gen_four_col_tr("other_ass", "C0D32F38547l", "Purchases of fixed assets");

	cfo_gen_four_col_with_name_tr("other_custom_1");
	cfo_gen_four_col_with_name_tr("other_custom_2");
	cfo_gen_four_col_with_name_tr("other_custom_3");
?>
						</tbody>
					</table>


				</div>
<!-- TABLE 6 -->


<!-- TABLE 7 -->
				<div id="tab-chart" class="tab-pane fade">
					<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
<!-- TABLE 7 -->

<!-- TABLE 8 -->
				<div id="tab-summary" class="tab-pane fade">
					<p>
						cfo_gen_input_percent
						cfo_gen_input_number
						cfo_gen_input_dmo
					</p>
				</div>
<!-- TABLE 8 -->
			</div>

		</form>
	</section>
</article>



<script type="text/javascript">
jQuery(document).ready(function()
{
	var data = new CalcSeven.Model3( CalcSeven.Model3.getSampleData() );
	ko.applyBindings(data);
});
</script>
