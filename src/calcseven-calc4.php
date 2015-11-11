
<article class="wpc-calc">
	<section>
		<h2>Labour Hours Profit Booster Calculator</h2>
		<div class="panel-howtouse">
			<div class="panel-heading"><h4><i class="glyphicon glyphicon-info-sign"></i> How to use</h4></div>
			<div class="panel-body">
				<h4>Key Drivers Sheet</h4>
				<p class="explanation">

1) Row 5 - enter the months of the budget year
2) Row 7 - enter the number of working days for each month
3) Row 9 - enter the average hours worked per week for your chargeable staff, including overtime
4) Rows 14-17 - enter the position categories for each of your chargeable staff (eg service technician)
5) Rows 27-30 - enter the budgeted billing rate for each position category and also include any planned increases during the year
6) Rows 39-42 - enter the budgeted utilisation % (ie % of available hours charged to jobs) for each position category and also include any planned increases during the year
7) Rows 51-54 - enter the budgeted recovery % (ie % of hours charged to jobs that are recovered thru invoicing) for each position category and also include any planned increases during the year
8) Row 70 - enter the budgeted % of labour sales, that make up the parts sales
4) Rows 71 - enter the budgeted margin% on parts sales and any planned increases during the year
				</p>
				<h4>Data Input - Expenses Tab</h4>
				<p class="explanation">
 					<ul>
 						<li>enter relevant annual cost budget figures in each of the blue input cells</li>
 					</ul>

Sensitivity Analysis
1) in cell 'B7' enter the budgeted profit/loss, prior to doing any sensitivity analysis
2) In each of the blue highlighted cells in column C:
          - enter positive or negative % change to any one key driver to see the impact on the profit/loss
          - enter positive or negative % change to one or more  key drivers to see the cumulative impact on the profit/loss
				</p>
			</div>
		</div>
		<form class="form">

			<label for="id-t9FhOUqa1jp0wNux5Lcg">Business Name</label>
			<input type="text" class="form-control" placeholder="Company Name" data-bind="value: business_name" id="id-t9FhOUqa1jp0wNux5Lcg" />

<div class="container-fluid">
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
						<td data-bind="text: kd.no_working_days_leave()"></td>
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
							<input type="number" data-bind="value: $data.number()[$parentContext.$index()]" />
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
						<th data-bind="text: kd.labour_sum()"></th>
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
</div>

		</form>
	</section>
</article>

<script type="text/javascript" src="calcseven-calc4.js">
</script>
