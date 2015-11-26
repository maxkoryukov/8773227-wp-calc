
<article class="wpc-calc">
	<section>
		<h2>Labour Hours Profit Booster Calculator</h2>
		<div class="panel-howtouse">
			<div class="panel-heading"><h4><i class="glyphicon glyphicon-info-sign"></i> How to use</h4></div>
			<div class="panel-body">
				<h4>Key Drivers Sheet</h4>
				<section class="explanation">
					<ol>
<li>Row 5 - enter the months of the budget year</li>
<li>Row 7 - enter the number of working days for each month</li>
<li>Row 9 - enter the average hours worked per week for your chargeable staff, including overtime</li>
<li>Rows 14-17 - enter the position categories for each of your chargeable staff (eg service technician)</li>
<li>Rows 27-30 - enter the budgeted billing rate for each position category and also include any planned increases during the year</li>
<li>Rows 39-42 - enter the budgeted utilisation % (ie % of available hours charged to jobs) for each position category and also include any planned increases during the year</li>
<li>Rows 51-54 - enter the budgeted recovery % (ie % of hours charged to jobs that are recovered thru invoicing) for each position category and also include any planned increases during the year</li>
<li>Row 70 - enter the budgeted % of labour sales, that make up the parts sales</li>
<li>Rows 71 - enter the budgeted margin% on parts sales and any planned increases during the year</li>
					</ol>
				</section>
				<h4>Data Input - Expenses Tab</h4>
				<section class="explanation">
				<ul>
					<li>enter relevant annual cost budget figures in each of the blue input cells</li>
				</ul>
				</section>

				<h4>Sensitivity Analysis</h4>
				<section class="explanation">
				<ol>
					<li>in cell <code>B7</code> enter the budgeted profit/loss, prior to doing any sensitivity analysis</li>
					<li>In each of the blue highlighted cells in column C:
						<ul>
							<li>enter positive or negative % change to any one key driver to see the impact on the profit/loss</li>
							<li>enter positive or negative % change to one or more  key drivers to see the cumulative impact on the profit/loss</li>
						</ul>
					</li>
				</ol>
			</div>
		</div>
		<form class="form">

			<label for="id-t9FhOUqa1jp0wNux5Lcg">Business Name</label>
			<input type="text" class="form-control" placeholder="Company Name" data-bind="value: business_name" id="id-t9FhOUqa1jp0wNux5Lcg" />

			<h3>Key Drivers</h3>
			<div class="table-responsive">
			<table class="table-calc4">
				<thead>
					<tr>
						<th></th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<th data-bind="text: moment(kd.dt()).format('MMM-YY') "></th>
<!-- /ko -->
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>No of working days</th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td class="-no-pad">
							<input type="number" data-bind="value: kd.no_working_days" />
						</td>
<!-- /ko -->
					</tr>
					<tr>
						<th>No of working days (allowing for leave)</th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td data-bind="text: roundcut(kd.no_working_days_leave())"></td>
<!-- /ko -->
					</tr>

					<tr>
						<th>Avg No of Hours per Week (incl overtime)</th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td class="-no-pad">
							<input type="number" data-bind="value: kd.avg_hour_per_week" />
						</td>
<!-- /ko -->
					</tr>

					<tr>
						<th>DEPARTMENT NAME</th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td></td>
<!-- /ko -->
					</tr>
					<tr>
						<th>Labour</th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td></td>
<!-- /ko -->
					</tr>

<!-- STUFF ++++++++++++++++++++++++++ -->
					<tr>
						<th>No&nbsp;of Staff</th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td></td>
<!-- /ko -->
					</tr>

<!-- ko foreach: { data : positions, as : 'position' } -->
					<tr>
						<td data-bind="text : position">
						</td>
	<!-- ko foreach: { data: $root.keydrives, as: 'kd' } -->
						<td class="-no-pad">
							<input type="number" data-bind="value: $data.number()[$parentContext.$index()]" step="1" min="0"/>
						</td>
	<!-- /ko -->
					</tr>
<!-- /ko -->
					<tr>
						<th></th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<th data-bind="text: kd.number_sum()"></th>
<!-- /ko -->
					</tr>
<!-- STUFF ++++++++++++++++++++++++++ -->

<!-- CAPACITY ++++++++++++++++++++++++++ -->
					<tr>
						<th>Capacity Hours</th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td></td>
<!-- /ko -->
					</tr>

<!-- ko foreach: { data : positions, as : 'position' } -->
					<tr>
						<td data-bind="text : position">
						</td>
	<!-- ko foreach: { data: $root.keydrives, as: 'kd' } -->
						<td data-bind="text: roundcut($data.capacity()[$parentContext.$index()])">
						</td>
	<!-- /ko -->
					</tr>
<!-- /ko -->
					<tr>
						<th></th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<th data-bind="text: roundcut(kd.capacity_sum())"></th>
<!-- /ko -->
					</tr>
<!-- CAPACITY ++++++++++++++++++++++++++ -->



<!-- LABOUR ++++++++++++++++++++++++++ -->
					<tr>
						<th>Labour $/hr</th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td></td>
<!-- /ko -->
					</tr>

<!-- ko foreach: { data : positions, as : 'position' } -->
					<tr>
						<td data-bind="text : position">
						</td>
	<!-- ko foreach: { data: $root.keydrives, as: 'kd' } -->
						<td class="-no-pad">
							<input type="number" data-bind="value: $data.labour()[$parentContext.$index()]" />
						</td>
	<!-- /ko -->
					</tr>
<!-- /ko -->
					<tr>
						<th></th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<th data-bind="text: roundcut(kd.labour_sum())"></th>
<!-- /ko -->
					</tr>
<!-- LABOUR ++++++++++++++++++++++++++ -->


<!-- UTILISATION ++++++++++++++++++++++++++ -->
					<tr>
						<th>% Utilisation of Labour</th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td></td>
<!-- /ko -->
					</tr>

<!-- ko foreach: { data : positions, as : 'position' } -->
					<tr>
						<td data-bind="text : position">
						</td>
	<!-- ko foreach: { data: $root.keydrives, as: 'kd' } -->
						<td class="-no-pad">
							<input type="number" data-bind="value: $data.utilisation()[$parentContext.$index()]" />
						</td>
	<!-- /ko -->
					</tr>
<!-- /ko -->

<!-- UTILISATION ++++++++++++++++++++++++++ -->

<!-- ACTUAL BILLED ++++++++++++++++++++++++++ -->
					<tr>
						<th>Actual Hours Billed</th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td></td>
<!-- /ko -->
					</tr>

<!-- ko foreach: { data : positions, as : 'position' } -->
					<tr>
						<td data-bind="text : position">
						</td>
	<!-- ko foreach: { data: $root.keydrives, as: 'kd' } -->
						<td data-bind="text: roundcut( $data.actual_hours()[$parentContext.$index()] ) ">
						</td>
	<!-- /ko -->
					</tr>
<!-- /ko -->
					<tr>
						<th></th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<th data-bind="text: roundcut(kd.actual_hours_sum())"></th>
<!-- /ko -->
					</tr>
<!-- ACTUAL BILLED ++++++++++++++++++++++++++ -->



					<tr>
						<th>Parts</th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td></td>
<!-- /ko -->
					</tr>
					<tr>
						<th> - Parts sales as a % of labour sales</th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td class="-no-pad">
							<input type="number" data-bind="value: kd.part_sales" />
						</td>
<!-- /ko -->
					</tr>
					<tr>
						<th> - Margin %</th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td class="-no-pad">
							<input type="number" data-bind="value: kd.margin" />
						</td>
<!-- /ko -->
					</tr>

				</tbody>
			</table>
			</div>



<!-- TABLE Data Input Staffing & Overheads -->
			<h3>Staffing Costs &amp; Overheads</h3>
			<div class="table-responsive">
			<table class="table-calc4">
				<thead>
					<th>Item</th>
					<th>Budget</th>
					<th>Note</th>
				</thead>
				<tbody>
					<tr>
						<td colspan="3"><h5>Cost of sales</h5></td>
					</tr>

					<tr>
						<th>Staffing Cost - chargeable staff</th>
						<td class="-no-pad">
							<input type="number" data-bind="value: staffing_cost_chargeable" />
						</td>
						<td>
							<p class="explanation">
								Include wages, salaries, superannuation, payroll tax
							</p>
						</td>
					</tr>

					<tr>
						<td colspan="3"><h5>Overheads</h5></td>
					</tr>

					<tr>
						<th>General/Administration</th>
						<td class="-no-pad">
							<input type="number" data-bind="value: administration" />
						</td>
						<td>
							<p class="explanation">
								Includes bank charges, depreciation, insurance, marketing, subscriptions, licences etc
							</p>
						</td>
					</tr>

					<tr>
						<th>Professional Fees</th>
						<td class="-no-pad">
							<input type="number" data-bind="value: professional" />
						</td>
						<td>
							<p class="explanation">
								Includes accounting, legal, bookeeping, consulatnts fees
							</p>
						</td>
					</tr>

					<tr>
						<th>Office Running Costs</th>
						<td class="-no-pad">
							<input type="number" data-bind="value: office_running" />
						</td>
						<td>
							<p class="explanation">
								Includes electricity, postage, stationery, security, computer software etc
							</p>
						</td>
					</tr>

					<tr>
						<th>Rent</th>
						<td class="-no-pad">
							<input type="number" data-bind="value: rent" />
						</td>
						<td>
							<p class="explanation">
								Includes rent, rates
							</p>
						</td>
					</tr>

					<tr>
						<th>Motor Vehicle Costs</th>
						<td class="-no-pad">
							<input type="number" data-bind="value: motor_rent" />
						</td>
						<td>
							<p class="explanation">
								include motor vehicle costs for all staff (fuel, lease costs, reg'n &amp; insurance, service, R&amp;M, tolls, parking)
							</p>
						</td>
					</tr>

					<tr>
						<th>Staffing Costs</th>
						<td class="-no-pad">
							<input type="number" data-bind="value: staffing_cost" />
						</td>
						<td>
							<p class="explanation">
								staffing costs of all non-chargeable staff + oncosts, staff training, uniforms, travel
							</p>
						</td>
					</tr>

					<tr>
						<th></th>
						<td data-bind="text: roundcut(overheads_sum())">
						</td>
						<td></td>
					</tr>

					<tr>
						<th>Interest Expense</th>
						<td class="-no-pad">
							<input type="number" data-bind="value: interest" />
						</td>
						<td></td>
					</tr>
				</tbody>
			</table>
			</div>
<!-- TABLE Data Input Staffing & Overheads -->




<!-- TABLE Sensitivity Analysis -->
			<h3>Sensitivity Analysis</h3>
			<div class="table-responsive">
			<table class="table-calc4">
				<thead>
					<th>&nbsp;</th>
					<th>Per Budget</th>
					<th>% Change</th>
					<th>Profit Impact $K</th>
				</thead>
				<tbody>
					<tr>
						<th class="-green-bg">PROFIT AFTER INTEREST - pre What Ifs - $K</th>
						<td class="-no-pad -green-bg">
							<input class="-green-bg" type="number" data-bind="value: profit_after_interest" title="Manually Enter Budget Profit/Loss, prior to entering any % changes in the table" />
						</td>
						<td></td>
						<td>
							<div class="field">
								<label class="wpc-label-d red" for="id-0uwSTcmgXGAiL9xIHQhV_x1">Adjusted Profit</label>
								<div data-bind="text: roundcut(profit_after_interest_impact(), 3)"></div>
							</div>
						</td>
					</tr>

					<tr>
						<th>Labour&nbsp;$&nbsp;/&nbsp;Hr</th>
						<td></td>
						<td class="-no-pad">
							<input type="number" data-bind="value: labour" />
						</td>
						<td>
							<span data-bind="text: roundcut(labour_impact())"></span>
						</td>
					</tr>

					<tr>
						<th>Utilisation % of Labour</th>
						<td></td>
						<td class="-no-pad">
							<input type="number" data-bind="value: utilisation_labour" />
						</td>
						<td>
							<span data-bind="text: roundcut(utilisation_labour_impact())"></span>
						</td>
					</tr>

					<tr>
						<th>Recovery % of Labour</th>
						<td></td>
						<td class="-no-pad">
							<input type="number" data-bind="value: recovery_labour" />
						</td>
						<td>
							<span data-bind="text: roundcut(recovery_labour_impact())"></span>
						</td>
					</tr>

					<tr>
						<th>Parts Sales as a % of Labour Sales</th>
						<td></td>
						<td class="-no-pad">
							<input type="number" data-bind="value: part_sales" />
						</td>
						<td>
							<span data-bind="text: roundcut(part_sales_impact())"></span>
						</td>
					</tr>

					<tr>
						<th>Parts Margin %</th>
						<td></td>
						<td class="-no-pad">
							<input type="number" data-bind="value: margin" />
						</td>
						<td>
							<span data-bind="text: roundcut(margin_impact())"></span>
						</td>
					</tr>

				</tbody>
			</table>
			</div>
<!-- TABLE Sensitivity Analysis -->



<!--
=============================================================================================
	TABLE P&L Budget
=============================================================================================
-->
			<h3>P&amp;L Budget</h3>
			<div class="table-responsive">
			<table class="table-calc4">
				<thead>
					<tr>
						<th></th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<th data-bind="text: moment(kd.dt()).format('MMM-YY') "></th>
<!-- /ko -->
					</tr>
				</thead>
				<tbody>
					<tr>
						<th class="-green-bg">No of Hours Billed</th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td data-bind="text: roundcut(kd.actual_hours_sum())">
						</td>
<!-- /ko -->
					</tr>
					<tr>
						<th></th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td data-bind="text: roundcut(kd.actual_hours_sum() / kd.no_working_days() )"></td>
<!-- /ko -->
					</tr>

					<tr>
						<th class="-yellow-bg">DEPARTMENT NAME</th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td></td>
<!-- /ko -->
					</tr>
					<tr>
						<th class="-red-fg">SALES</th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td></td>
<!-- /ko -->
					</tr>

					<tr>
						<th>- Labour</th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td data-bind="text: roundcut(kd.total_lab_sales_b78())"></td>
<!-- /ko -->
					</tr>
					<tr>
						<th>- Materials</th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td data-bind="text: roundcut(kd.total_mat_sales_b12())"></td>
<!-- /ko -->
					</tr>
					<tr>
						<th>&nbsp;</th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td class="-lblue-bg" data-bind="text: roundcut(kd.total_sales_b13())"></td>
<!-- /ko -->
					</tr>

					<tr>
						<th class="-red-fg">COST OF SALES</th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td></td>
<!-- /ko -->
					</tr>
					<tr>
						<th>- Labour</th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td data-bind="text: roundcut(kd.total_lab_cost_of_sales_b16() )"></td>
<!-- /ko -->
					</tr>
					<tr>
						<th>- Materials</th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td data-bind="text: roundcut(kd.total_mat_cost_of_sales_b17())"></td>
<!-- /ko -->
					</tr>
					<tr>
						<th>&nbsp;</th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td class="-lblue-bg" data-bind="text: roundcut(kd.total_cost_of_sales_b18())"></td>
<!-- /ko -->
					</tr>

					<tr>
						<th class="-yellow-bg">GROSS PROFIT - TOTAL</th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td class="-yellow-bg" data-bind="text: roundcut(kd.profit_b20() )"></td>
<!-- /ko -->
					</tr>
					<tr>
						<th class="-yellow-bg">&nbsp;</th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td class="-yellow-bg" data-bind="text: roundcut(kd.profit_rate_b21() ) + '%'"></td>
<!-- /ko -->
					</tr>



					<tr>
						<th class="-lblue-bg">OVERHEADS</th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td></td>
<!-- /ko -->
					</tr>
					<tr>
						<th>GENERAL / ADMIN EXPENSES</th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td data-bind="text: roundcut(kd.parent.administration() / kd.parent.keydrives_length() )"></td>
<!-- /ko -->
					</tr>
					<tr>
						<th>PROFESSIONAL FEES</th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td data-bind="text: roundcut(kd.parent.professional() / kd.parent.keydrives_length() )"></td>
<!-- /ko -->
					</tr>
					<tr>
						<th>OFFICE RUNNING EXPENSES</th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td data-bind="text: roundcut(kd.parent.office_running() / kd.parent.keydrives_length() )"></td>
<!-- /ko -->
					</tr>
					<tr>
						<th>RENT </th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td data-bind="text: roundcut(kd.parent.rent() / kd.parent.keydrives_length() )"></td>
<!-- /ko -->
					</tr>
					<tr>
						<th>MOTOR VEHICLE EXPENSES</th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td data-bind="text: roundcut(kd.parent.motor_rent() / kd.parent.keydrives_length() )"></td>
<!-- /ko -->
					</tr>
					<tr>
						<th>STAFFING COSTS</th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td data-bind="text: roundcut(kd.parent.staffing_cost() / kd.parent.keydrives_length() )"></td>
<!-- /ko -->
					</tr>

					<tr>
						<th></th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td class="-lblue-bg" data-bind="text: roundcut(kd.parent.overheads_sum() / kd.parent.keydrives_length() )"></td>
<!-- /ko -->
					</tr>
					<tr>
						<th class="-lblue-bg">NET PROFIT BEFORE INTEREST</th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td class="-lblue-bg" data-bind="text: roundcut(kd.profit_before_interest_b32())"></td>
<!-- /ko -->
					</tr>
					<tr>
						<th class="-lblue-bg">&nbsp;</th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td class="-lblue-bg" data-bind="text: roundcut(kd.profit_before_interest_rate_b33()) + '%'"></td>
<!-- /ko -->
					</tr>


					<tr>
						<th class="-lblue-bg">INTEREST EXPENSE</th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td data-bind="text: roundcut(kd.parent.interest() / kd.parent.keydrives_length())"></td>
<!-- /ko -->
					</tr>

					<tr>
						<th class="-lblue-bg">NET PROFIT AFTER INTEREST</th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td class="-lblue-bg" data-bind="text: roundcut(kd.profit_net_b37())"></td>
<!-- /ko -->
					</tr>
					<tr>
						<th class="-lblue-bg"></th>
<!-- ko foreach: { data: keydrives, as: 'kd' } -->
						<td class="-lblue-bg" data-bind="text: roundcut(kd.profit_net_rate_b38()) + '%'"></td>
<!-- /ko -->
					</tr>

				</tbody>
			</table>
			</div>

		</form>
	</section>
</article>


