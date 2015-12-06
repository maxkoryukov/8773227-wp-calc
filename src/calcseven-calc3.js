function Model3 (v)
{
	for(a in v)
	{
		this[a] = ko.observable(v[a]);
	}

	this.income_recv_debtors_4 = ko.computed(function() { return 0; } , this);

/*
		ddo.is_actual = this.debts().length < 5;
		if ( typeof(ddo.previous) === 'undefined' )
			ddo.opening = ko.computed(function() { return this.parent.initial_opening(); }, ddo );
		else
			ddo.opening = ko.computed(function() { return this.previous.closing(); }, ddo );

		if (ddo.is_actual)
		{
			// actual
			ddo.receipts = ko.computed( function() { return this.closing() - this.opening() - this.revenue(); }, ddo );
		}
		else
		{
			// forecast
			ddo.debt_000 = ko.computed( function() { return this.parent.debtx_000() * this.previous.revenue() / 100; }, ddo );
			ddo.debt_030 = ko.computed( function() { return this.parent.debtx_030() * this.previous.previous.revenue() / 100; }, ddo );
			ddo.debt_060 = ko.computed( function() { return this.parent.debtx_060() * this.previous.previous.previous.revenue() / 100; }, ddo );
			ddo.debt_090 = ko.computed( function() { return this.parent.debtx_090() * this.previous.previous.previous.previous.revenue() / 100; }, ddo );
			ddo.debt_120 = ko.computed( function() { return this.parent.debtx_120() * this.previous.previous.previous.previous.previous.revenue() / 100; }, ddo );

			ddo.debt_sum = ko.computed( function() { return Number(this.debt_000())
				+ Number(this.debt_030())
				+ Number(this.debt_060())
				+ Number(this.debt_090())
				+ Number(this.debt_120());
			}, ddo);
			ddo.receipts = ko.computed( function() { return 0-this.debt_sum(); }, ddo );
			ddo.closing = ko.computed( function() { return Number(this.opening()) + Number(this.revenue()) + Number(this.receipts()); }, ddo );
		}

		ddo.debtors_days = ko.computed( function () { return this.closing()/this.revenue()*30; }, ddo);

		this.debts.push(ddo);
		prev = ddo;
	}
	}  // debug
*/
};

/*------------ SAMPLE ----------------*/
Model3.getSampleData = function()
{
	var data =
	{
		/* 1 */
		basic_bank_balance : -8605,
		basic_overdraft_limit: 8500,
		basic_next_payment: new Date(2004, 4, 28),
		basic_owing : 4560,
		basic_pay_quarter: 450,
		basic_next_tax: new Date(2014, 4, 7),
		basic_tax_payment : 750,

		/* 2 */
		income_cash_sales: 5000,
		income_credit_sales: 12000,

		income_sales_1:18000,
		income_sales_2:19000,
		income_sales_3:17000,

		income_debtors_1:13000,
		income_debtors_2:14000,
		income_debtors_3:12000,

		income_recv_debtors_1:5000,
		income_recv_debtors_2:6000,
		income_recv_debtors_3:6000,

		income_interest: 100,
		income_other: 650,

		/* 3 */
		payroll_wages:2300,
		payroll_fortnight:0,
		payroll_salaries:1,
		payroll_salary_day:3,
		payroll_deduct_paye:2200,


		/* 4 */
		supplier_gross_margin:15,
		supplier_purchases7:10,
		supplier_pay_day:25,
		supplier_levels_1:0,
		supplier_levels_2:0,
		supplier_levels_3:0,

		overheads_rent_val: 1500,
		overheads_freight_val: 500,
		overheads_post_val: 250,
		overheads_print_val: 250,
		overheads_bank_fee_val: 50,
		overheads_fuel_val: 870,
		overheads_phone_val: 987,
		overheads_heat_val: 231,
		overheads_travel_val: 451,
		overheads_lease_val: 1068,
		overheads_sundry_val: 500,

		overheads_rent_day: 23,
		overheads_freight_day: 27,
		overheads_post_day: 21,
		overheads_print_day: 21,
		overheads_bank_fee_day: 21,
		overheads_fuel_day: 21,
		overheads_phone_day: 21,
		overheads_heat_day: 21,
		overheads_travel_day: 21,
		overheads_lease_day: 21,
		overheads_sundry_day: 21,

		overheads_rate: 10,

		other_adv_1: 1500,		// "Advertising");
		other_ins_1: 0,			// "Insurance");
		other_car_1: 0,			// "Vehicle Registrations");
		other_rep_1: 200,		// "All Repairs&amp;Maintenance");
		other_acc_1: 2000,		// "Fees to accountants&amp;Lawyers");
		other_tax_1: 0,			// "Income/Corporate Taxes");
		other_ass_1: 0,			// "Purchases of fixed assets");

		other_adv_2:900,
		other_ins_2:680,
		other_car_2:0,
		other_rep_2:0,
		other_acc_2:0,
		other_tax_2:0,
		other_ass_2:0,

		other_adv_3:700,
		other_ins_3:0,
		other_car_3:500,
		other_rep_3:0,
		other_acc_3:0,
		other_tax_3:0,
		other_ass_3:0,
		
		other_custom_1_name: 'Other 1',
		other_custom_2_name: 'Other 2',
		other_custom_3_name: 'Other 3',

		other_custom_1_1: 0,
		other_custom_2_1: 0,
		other_custom_3_1: 0,

		other_custom_1_2: 0,
		other_custom_2_2: 0,
		other_custom_3_2: 0,

		other_custom_1_3: 0,
		other_custom_2_3: 0,
		other_custom_3_3: 0,
	};

	return data;
};
/*------------ SAMPLE ----------------*/


module.exports = Model3;
