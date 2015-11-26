
function roundcut (val, count)
{
	var x = val;
	if (count !==0 && !count)
		count = 2;

	if (val && Object.prototype.toString.call(val) === '[object Function]')
		x = val();

	var r = RegExp('(\\.\\d{0,' + count.toString() + '}).*');

	x = x.toString().replace(r, "$1");
	return Number(x);
};

jQuery(document).ready(function()
{
	var data =
	{
		/*common*/
		business_name : "Sample Company",

		/*sensivity analysis*/
		profit_after_interest : 0,
		labour : 0,
		utilisation_labour : 0, // in procent
		recovery_labour : 0,
		part_sales : 0,
		margin : 0,


		/*STAFFING COSTS & OVERHEADS*/
		staffing_cost_chargeable : 300000,
		administration : 120000,
		professional : 80000,
		office_running : 100000,
		rent : 150000,
		motor_rent : 100000,
		staffing_cost : 250000,
		interest : 20000,

		/*key drives*/
		positions :
		[
			"Chargeable Staff Pos #1",
			"Chargeable Staff Pos #2",
			"Chargeable Staff Pos #3",
			"Chargeable Staff Pos #4",
		],

		keydrives :
		[
			{
				dt : new Date(2015, 07, 1),
				no_working_days: 23,
				avg_hour_per_week: 42,
				part_sales : 50,
				margin : 27,

				number : [1, 2, 2, 3],
				labour : [100, 90, 80, 80],
				utilisation : [70, 90, 95, 95],
				recovery : [90, 90, 95, 95],
			},
			{
				dt : new Date(2015, 08, 1),
				no_working_days: 21,
				avg_hour_per_week: 42,
				part_sales : 50,
				margin : 27,

				number : [1, 2, 2, 3],
				labour : [100, 90, 80, 80],
				utilisation : [70, 90, 95, 95],
				recovery : [90, 90, 95, 95],
			},
			{
				dt : new Date(2015, 09, 1),
				no_working_days: 21,
				avg_hour_per_week: 42,
				part_sales : 50,
				margin : 27,

				number : [1, 2, 2, 3],
				labour : [100, 90, 80, 80],
				utilisation : [70, 90, 95, 95],
				recovery : [90, 90, 95, 95],
			},



			{
				dt : new Date(2015, 10, 1),
				no_working_days: 22,
				avg_hour_per_week: 42,
				part_sales : 50,
				margin : 27,

				number : [1, 2, 2, 3],
				labour : [100, 90, 80, 80],
				utilisation : [70, 90, 95, 95],
				recovery : [90, 90, 95, 95],
			},
			{
				dt : new Date(2015, 11, 1),
				no_working_days: 21,
				avg_hour_per_week: 42,
				part_sales : 50,
				margin : 27,

				number : [1, 2, 2, 3],
				labour : [100, 90, 80, 80],
				utilisation : [70, 90, 95, 95],
				recovery : [90, 90, 95, 95],
			},
			{
				dt : new Date(2015, 10, 1),
				no_working_days: 15,
				avg_hour_per_week: 42,
				part_sales : 50,
				margin : 27,

				number : [1, 2, 2, 3],
				labour : [100, 90, 80, 80],
				utilisation : [70, 90, 95, 95],
				recovery : [90, 90, 95, 95],
			},
		],
	};


	function Model (v)
	{
		this.business_name = ko.observable(v.business_name);

		/* P&L Budget */
		this.net_profit_after_interest_sum = ko.computed(function() { return 65018; } , this);


		/*sensivity analysis*/
		this.profit_after_interest = ko.observable(v.profit_after_interest);
		this.labour = ko.observable(v.labour);
		this.utilisation_labour = ko.observable(v.utilisation_labour);
		this.recovery_labour = ko.observable(v.recovery_labour);
		this.part_sales = ko.observable(v.part_sales);
		this.margin = ko.observable(v.margin);

		this.profit_after_interest_impact = ko.computed(function() { return this.net_profit_after_interest_sum() / 1000; }, this);
		this.labour_impact = ko.computed(function() { return (this.labour() == 0) ? 0 : this.net_profit_after_interest_sum() / 1000 - this.profit_after_interest(); }, this);
		this.utilisation_labour_impact = ko.computed(function() { return (this.utilisation_labour() == 0) ? 0 : this.net_profit_after_interest_sum() / 1000 - this.profit_after_interest(); }, this);
		this.recovery_labour_impact = ko.computed(function() { return (this.recovery_labour() == 0) ? 0 : this.net_profit_after_interest_sum() / 1000 - this.profit_after_interest(); }, this);
		this.part_sales_impact = ko.computed(function() { return (this.part_sales() == 0) ? 0 : this.net_profit_after_interest_sum() / 1000 - this.profit_after_interest(); }, this);
		this.margin_impact = ko.computed(function() { return (this.margin() == 0) ? 0 : this.net_profit_after_interest_sum() / 1000 - this.profit_after_interest(); }, this);


		/*STAFFING COSTS & OVERHEADS*/
		this.staffing_cost_chargeable = ko.observable(v.staffing_cost_chargeable);
		this.administration = ko.observable(v.administration);
		this.professional = ko.observable(v.professional);
		this.office_running = ko.observable(v.office_running);
		this.rent = ko.observable(v.rent);
		this.motor_rent = ko.observable(v.motor_rent);
		this.staffing_cost = ko.observable(v.staffing_cost);
		this.interest = ko.observable(v.interest);

		this.overheads_sum = ko.computed(function() { return Number(this.administration())
				+ Number(this.professional())
				+ Number(this.office_running())
				+ Number(this.rent())
				+ Number(this.motor_rent())
				+ Number(this.staffing_cost())
				; }, this);


		/* Key Drivers */
		//var kd = [];

		this.keydrives = ko.observableArray();
		this.keydrives_length = ko.computed( function() { return this.keydrives().length; }, this);

		for (var asdf =0; asdf < 2; asdf++) { //debug
		for(keydrives_index in v.keydrives)
		{
			var ki = v.keydrives[keydrives_index];
			var kdi = new Object();
			kdi.parent = this;
			for(a in ki)
			{
				if ( Object.prototype.toString.call(ki[a])==='[object Array]')
				{
					var obs_array = [];
					for(ai in ki[a])
					{
						obs_array.push( ko.observable(ki[a][ai]) );
					}
					kdi[a] = ko.observableArray(obs_array);

					kdi[a + '_sum'] = ko.computed(function(){
						var s = 0;
						ko.utils.arrayForEach(this(), function(item)
							{
								s += Number(item());
							});
						return s;
					}, kdi[a]);
				}
				else
				{
					kdi[a] = ko.observable(ki[a]);
					// 
				}
			}
			
			/*
				kdi[i].computed values: 
			*/

			kdi.recovery_labour_impact = ko.observableArray();
			for (i in ki.recovery)
			{
				(function(u_closure)
					{
						kdi.recovery_labour_impact.push( ko.computed( function() { return u_closure() * ( 100 + Number(this.parent.recovery_labour())) / 100 ; } , kdi) )
					}
				)(kdi.recovery()[i]);
			}



			kdi.no_working_days_leave = ko.pureComputed(function() { return this.no_working_days()*0.894; }, kdi );

			kdi.capacity = ko.observableArray([]);
			kdi.utilisation_labour_impact = ko.observableArray();
			kdi.actual_hours = ko.observableArray([]);
			for (position_index in v.positions)
			{
				// capacity
				var fn = (
					function(i)
					{
						return ko.computed(function(){ return this.number()[i]() * this.avg_hour_per_week() / 5 * this.no_working_days_leave(); },  kdi);
					}
				)(position_index);
				kdi.capacity.push( fn );

				// utilisation_labour_impact
				var fn = (
					function(i)
					{
						return ko.computed(function(){ return this.utilisation()[i]() * ( 100 + Number(this.parent.utilisation_labour())) / 100 ; },  kdi);
					}
				)(position_index);
				kdi.utilisation_labour_impact.push( fn );

				// capacity
				fn = (function(i) {
						return ko.computed(
							function()
							{
								return this.utilisation_labour_impact()[i]() / 100
									* this.recovery()[i]() * (100 + this.parent.recovery_labour()) / 10000
									* this.capacity()[i]()
								;
							},
							kdi
						);
				})(position_index);
				kdi.actual_hours.push( fn );
			}
			kdi.capacity_sum = ko.computed(function(){
				var s = 0;
				ko.utils.arrayForEach(this.capacity(), function(item)
					{
						s += Number(item());
					});
				return s;
			}, kdi);

			kdi.actual_hours_sum = ko.computed(function(){
				var s = 0;
				ko.utils.arrayForEach(this.actual_hours(), function(item)
					{
						s += Number(item());
					});
				return s;
			}, kdi);

			kdi.total_lab_sales_b78 = ko.computed(function(){
				var s = 0;
				for (i in kdi.actual_hours())
				{
					s += Number(kdi.actual_hours()[i]() ) * Number (kdi.labour()[i]() );
				}
				return s;
			}, kdi);

			kdi.total_mat_sales_b12 = ko.computed(function(){
				return (100 + this.parent.part_sales()) * this.part_sales() * this.total_lab_sales_b78() / 10000;
			}, kdi);

			kdi.total_sales_b13 = ko.computed(function(){
				return this.total_lab_sales_b78() + this.total_mat_sales_b12();
			}, kdi);

			kdi.total_lab_cost_of_sales_b16 = ko.computed(function(){
				return this.parent.staffing_cost_chargeable() / this.parent.keydrives_length();
			}, kdi);
			kdi.total_mat_cost_of_sales_b17 = ko.computed(function(){
				return this.total_mat_sales_b12() * ( 100 - this.margin()*(100 + this.parent.margin())/100 ) / 100;
			}, kdi);
			kdi.total_cost_of_sales_b18 = ko.computed(function(){
				return this.total_lab_cost_of_sales_b16() + this.total_mat_cost_of_sales_b17();
			}, kdi);


			kdi.profit_b20 = ko.computed(function(){
				return this.total_sales_b13() - this.total_cost_of_sales_b18();
			}, kdi);
			kdi.profit_rate_b21 = ko.computed(function(){
				return this.profit_b20() / this.total_sales_b13() * 100;
			}, kdi);

			kdi.profit_before_interest_b32 = ko.computed(function(){
				return this.profit_b20() - this.parent.overheads_sum()/this.parent.keydrives_length();
			}, kdi);
			kdi.profit_before_interest_rate_b33 = ko.computed(function(){
				return this.profit_before_interest_b32() / this.total_sales_b13() * 100;
			}, kdi);

			kdi.profit_net_b37 = ko.computed(function(){
				return this.profit_before_interest_b32() - this.parent.interest()/this.parent.keydrives_length();
			}, kdi);
			kdi.profit_net_rate_b38 = ko.computed(function(){
				return this.profit_net_b37() / this.total_sales_b13() * 100;
			}, kdi);
			this.keydrives.push(kdi);

		}
		} // debug

		this.positions = v.positions;
	};

	ko.applyBindings(new Model(data));
});
