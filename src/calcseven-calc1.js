function CalcSevenModel01 (v)
{
	this.business_name = ko.observable(v.business_name);

	/*sensivity analysis*/
	this.debtors_000 = ko.observable(v.debtors_000);
	this.debtors_030 = ko.observable(v.debtors_030);
	this.debtors_060 = ko.observable(v.debtors_060);
	this.debtors_090 = ko.observable(v.debtors_090);
	this.debtors_120 = ko.observable(v.debtors_120);

	this.debors_sum = ko.computed(function() {
		return this.debtors_000()
			+ this.debtors_030()
			+ this.debtors_060()
			+ this.debtors_090()
			+ this.debtors_120()
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

		if ( prev )
			ddo.opening = ko.computed(function() { return this.previous.closing(); }, ddo );
		else
			ddo.opening = ko.computed(function() { return this.parent.initial_opening(); }, ddo );

		if (ddo.is_actual)
		{
			ddo.receipts = ko.computed( function() { return this.closing() - this.opening() - this.revenue(); }, ddo );
		}
		else
		{
			ddo.debt_sum = ko.computed( function() { return 50000; }, ddo);
			ddo.receipts = ko.computed( function() { return 0-this.debt_sum(); }, ddo );
			ddo.closing = ko.computed( function() { this.opening() + this.revenue() + this.receipts(); }, ddo );
		}
/*
		kdi.recovery_labour_impact = ko.observableArray();
		kdi.profit_net_b37 = ko.computed(function(){
			return this.profit_before_interest_b32() - this.parent.interest()/this.parent.keydrives_length();
		}, kdi);
*/

		this.debts.push(ddo);
		prev = ddo;
	}
	}  // debug
};

/*------------ SAMPLE ----------------*/
CalcSevenModel01.getSampleData = function()
{
	var data =
	{
		/*common*/
		business_name : "Sample Company",

		/* xxx */
		debtors_000 : 50,
		debtors_030 : 30,
		debtors_060 : 10,
		debtors_090 : 5,
		debtors_120 : 5,

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
				dt : new Date(2014, 02, 1),
				revenue: 24000,
				closing : 37000,
			},


		],
	};

	return data;
};
/*------------ SAMPLE ----------------*/
