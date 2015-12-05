
module.exports = function Model1 (v)
{
	this.business_name = ko.observable(v.business_name);

	/*sensivity analysis*/
	this.debtx_000 = ko.observable(v.debtx_000);
	this.debtx_030 = ko.observable(v.debtx_030);
	this.debtx_060 = ko.observable(v.debtx_060);
	this.debtx_090 = ko.observable(v.debtx_090);
	this.debtx_120 = ko.observable(v.debtx_120);

	this.debtx_sum = ko.computed(function() {
		return Number(this.debtx_000())
			+ Number(this.debtx_030())
			+ Number(this.debtx_060())
			+ Number(this.debtx_090())
			+ Number(this.debtx_120())
			;
	}, this);

	this.initial_opening = ko.observable(v.initial_opening);

	/*STAFFING COSTS & OVERHEADS*/
	/* Key Drivers */

	this.debts = ko.observableArray();
	this.debts_length = ko.computed( function() { return this.debts().length; }, this);

	var prev = undefined;
	for (asdf in [0,1,2,3,4,5]) {  // debug
	for (di in v.debts)
	{
		var dd = v.debts[di];
		var ddo = {};
		ddo.parent = this;
		ddo.previous = prev;

		for(a in dd)
		{
			ddo[a] = ko.observable(dd[a]);
		}

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

};

/*------------ SAMPLE ----------------*/
module.exports.getSampleData = function()
{
	var data =
	{
		/*common*/
		business_name : "Sample Company",

		/* xxx */
		debtx_000 : 50,
		debtx_030 : 30,
		debtx_060 : 10,
		debtx_090 : 5,
		debtx_120 : 5,

		initial_opening : 20000,

		debts :
		[
			{
				dt : new Date(2014, 01, 1),
				revenue: 30000,
				closing : 35000,
			},
			{
				dt : new Date(2014, 02, 1),
				revenue: 35000,
				closing : 37000,
			},

			{
				dt : new Date(2014, 03, 1),
				revenue: 19000,
				closing : 32000,
			},
			{
				dt : new Date(2014, 04, 1),
				revenue: 24000,
				closing : 37000,
			},
			{
				dt : new Date(2014, 05, 1),
				revenue: 21000,
				closing : 42000,
			},


		],
	};

	return data;
};
/*------------ SAMPLE ----------------*/
