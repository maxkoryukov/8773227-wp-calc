
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
