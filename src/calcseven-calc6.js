function Model6 (v)
{
	for(a in v)
	{
		this[a] = ko.observable(v[a]);
	}

	this.sell = ko.computed(function() { return this.cost() * (100 + Number(this.markup())) / 100; } , this);
	this.margin = ko.computed(function() { return this.sell() - this.cost(); } , this);
	this.margin_proc = ko.computed(function() { return this.margin() * 100 / this.sell(); } , this);
};

/*------------ SAMPLE ----------------*/
Model6.getSampleData = function()
{
	var data =
	{
		/* 1 */
		cost : 500,
		markup: 70,
	};

	return data;
};
/*------------ SAMPLE ----------------*/

module.exports = Model6;
