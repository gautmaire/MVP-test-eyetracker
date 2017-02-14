var highlight = {
	 start: new Date(2015,6,13),
	 end: new Date(2015,6,19),
	 backgroundColor: '#3faa56',
	 color: '#ffffff',
	 legend: 'CSS Conf.'
};

var highlight2 = {
	 dates: [
		 {
			 start: new Date(2015,6,6),
			 end: new Date(2015,6,7)
		 },
		 {
			 start: new Date(2015,6,22),
			 end: new Date(2015,6,23)
		 }
	 ],
	 backgroundColor: '#E99C00',
	 color: '#ffffff',
	 legend: 'Holidays'
};

var datepicker = new Datepickk({
	container: document.querySelector('#datepicker'),
	inline: true,
	range: true,
	highlight: [highlight,highlight2]
});

datepicker.setDate = new Date(2015,6,1);