
function roundcut (val, count)
{
	var x = val;
	if (count !==0 && !count)
		count = 2;

	if (val && Object.prototype.toString.call(val) === '[object Function]')
		x = val();

	x = Number(x);
	x = x.toFixed(count);
	return Number(x);
};
