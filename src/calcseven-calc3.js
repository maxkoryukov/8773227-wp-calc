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
	};

	return data;
};
/*------------ SAMPLE ----------------*/


module.exports = Model3;
