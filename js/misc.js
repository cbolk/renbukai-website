
function createSeminar(sem){
	var body = document.body,
		divw = document.createElement('div'),
		aname = document.createElement('a'),
		divimg = document.createElement('div'),
		diventry = document.createElement('div'),
		divcal = document.createElement('div'),
		divtext = document.createElement('div'),
		divtitle = document.createElement('div'),
		divdates = document.createElement('div'),
		divaddress = document.createElement('div');

	moment.locale('it');
	var today = Math.round(new Date().getTime()/1000);

	if(sem.firstdayunix < today)
		divw.className = 'seminarwrapper passed';
	else if (today >= sem.firstdayunix && today <= sem.lastdayunix)
		divw.className= 'seminarwrapper activeseminar';
	else
		divw.className= 'seminarwrapper';

	aname.setAttribute("name", sem.sid);

	diventry.className = 'seminarentry';

	divimg.className = 'semimage';
	divimg.innerHTML = "<img src='./stages/" + sem.immagine + "' />";

	divcal.className= 'semdate';
	var nicedate = moment(sem.giornoinizio).format('MMM', 'it').toUpperCase() + "<br/>" + moment(sem.giornoinizio).format('D') + "<br/>" +  moment(sem.giornoinizio).format('YYYY') + "<br/>";
	divcal.innerHTML = nicedate + "<span class='septop'>" + sem.città + "</span>";

	divtitle.className= 'semdetails';
	var titlerow = '<strong>' + sem.titolo + '</strong>';
	if(sem.diretto != null && sem.diretto != ""){
		titlerow = titlerow +  " <span class='nomobile'>|</span><span class='mobile'><br/></span> <span class='ulined'>" + sem.diretto + "</span>";
	}
	divtitle.innerHTML = titlerow;

	divdates.className= 'semdetails';
	var d;
	if(sem.firstdayunix == sem.lastdayunix){
		d = "<i class='fa fa-calendar'></i> il " + moment(sem.giornoinizio).format('D MMM YYYY');
	} else {
		d = "<i class='fa fa-calendar'></i> dal " + moment(sem.giornoinizio).format('D MMM YYYY')  + " al " + moment(sem.giornofine).format('D MMM YYYY');
	}
	divdates.innerHTML = d;

	if(sem.dojo != null  && sem.dojo != ""){
		var divdojo = document.createElement('div');
		divdojo.className= 'semdetails';
		divdojo.innerHTML = "<i class='fa fa-home'></i> organizzato da " + sem.dojo;
	}

	var divaddr = "<i class='fa fa-map-marker'></i> ";
	if(sem.indirizzo != null  && sem.indirizzo != ""){
		divaddr = divaddr + sem.indirizzo + " ";
		var via = sem.indirizzo.indexOf(",")
		var map = sem.indirizzo.substring(via+2);
		var divaddr = divaddr + "<a target=_blank title='apre google maps' href='http://maps.google.com?q=" + map + "'><img src='./assets/gmaps.png' width='20px'/>&nbsp;<span class='mobile'>apri in GoogleMaps</span></a>";
	}	else {
		divaddr = divaddr + sem.città;
	}

	divaddress.className= 'semdetails';
	divaddress.innerHTML = divaddr;

	var divpdf = document.createElement('div');
	divpdf.className= 'semdetails';
	if(sem.locandina != null && sem.locandina != "")
		divpdf.innerHTML = "<i class='fa fa-file-o'></i> locandina: <a href='./stages/" + sem.locandina + "'><i class='fa fa-file-pdf-o'></i></a>";
	else 
		divpdf.innerHTML = "<i class='fa fa-file-o'></i> locandina: in arrivo ";
	

	divtext.appendChild(divtitle);
	divtext.appendChild(divdates);
	if(divdojo != null)
		divtext.appendChild(divdojo);
	else{
		var divempty = document.createElement('div');
		divempty.className= 'semdetails';
		divempty.innerHTML = "&nbsp;";
	}
	divtext.className= 'seminartext';
	divtext.appendChild(divaddress);
	if(divpdf != null)
		divtext.appendChild(divpdf);

	if(divempty != null)
		divtext.appendChild(divempty);

	diventry.appendChild(divcal);
	diventry.appendChild(divtext);

	divw.appendChild(aname);
	divw.appendChild(divimg);
	divw.appendChild(diventry);

	var displayDiv = document.getElementById('seminarlist');
	displayDiv.appendChild(divw);

}

function createSeminarBootstrap(sem){
	var body = document.body,
		divw = document.createElement('div'),
		aname = document.createElement('a'),
		divimg = document.createElement('div'),
//		diventry = document.createElement('div'),
		divcal = document.createElement('div'),
		divtext = document.createElement('div'),
		divtitle = document.createElement('div'),
		divdates = document.createElement('div'),
		divaddress = document.createElement('div');

	moment.locale('it');
	var today = Math.round(new Date().getTime()/1000);

	if(sem.firstdayunix < today)
		divw.className = 'col-lg-12 col-xs-12 col-md-12 seminarwrapper passed';
	else if (today >= sem.firstdayunix && today <= sem.lastdayunix)
		divw.className= 'col-lg-12 col-xs-12 col-md-12 seminarwrapper activeseminar';
	else
		divw.className= 'col-lg-12 col-xs-12 col-md-12 seminarwrapper';

	aname.setAttribute("name", sem.sid);

//	diventry.className = 'seminarentry';

	divimg.className = 'col-lg-2 col-xs-6 col-md-2 semimage';
	divimg.innerHTML = "<img src='./stages/" + sem.immagine + "' />";

	divcal.className= 'col-lg-2 col-xs-6 col-md-2 semdate clearfix';
	var nicedate = moment(sem.giornoinizio).format('MMM', 'it').toUpperCase() + "<br/>" + moment(sem.giornoinizio).format('D') + "<br/>" +  moment(sem.giornoinizio).format('YYYY') + "<br/>";
	divcal.innerHTML = nicedate + "<span class='septop'>" + sem.città + "</span>";

	divtext.className= 'seminartext col-lg-8 col-xs-12 col-md-8';	

	divtitle.className = 'semdetails';
	var titlerow = '<strong>' + sem.titolo + '</strong>';
	if(sem.diretto != null && sem.diretto != ""){
		titlerow = titlerow +  " <span class='nomobile'>|</span><span class='mobile'><br/></span> <span class='ulined'>" + sem.diretto + "</span>";
	}
	divtitle.innerHTML = titlerow;

	divdates.className= 'semdetails';
	var d;
	if(sem.firstdayunix == sem.lastdayunix){
		d = "<i class='fa fa-calendar'></i> il " + moment(sem.giornoinizio).format('D MMM YYYY');
	} else {
		d = "<i class='fa fa-calendar'></i> dal " + moment(sem.giornoinizio).format('D MMM YYYY')  + " al " + moment(sem.giornofine).format('D MMM YYYY');
	}
	divdates.innerHTML = d;

	if(sem.dojo != null  && sem.dojo != ""){
		var divdojo = document.createElement('div');
		divdojo.className= 'semdetails';
		divdojo.innerHTML = "<i class='fa fa-home'></i> organizzato da " + sem.dojo;
	}

	var divaddr = "<i class='fa fa-map-marker'></i> ";
	if(sem.indirizzo != null  && sem.indirizzo != ""){
		divaddr = divaddr + sem.indirizzo + " ";
		var via = sem.indirizzo.indexOf(",")
		var map = sem.indirizzo.substring(via+2);
		var divaddr = divaddr + "<a target=_blank title='apre google maps' href='http://maps.google.com?q=" + map + "'><img src='./assets/gmaps.png' width='20px'/>&nbsp;<span class='mobile'>apri in GoogleMaps</span></a>";
	}	else {
		divaddr = divaddr + sem.città;
	}

	divaddress.className= 'semdetails';
	divaddress.innerHTML = divaddr;

	var divpdf = document.createElement('div');
	divpdf.className= 'semdetails';
	if(sem.locandina != null && sem.locandina != "")
		divpdf.innerHTML = "<i class='fa fa-file-o'></i> locandina: file <a href='./stages/" + sem.locandina + "'><i class='fa fa-file-pdf-o'></i></a>";
	else if(today < sem.firstdayunix)
		divpdf.innerHTML = "<i class='fa fa-file-o'></i> locandina: in arrivo ";
	
	var divempty = null;

	divtext.appendChild(divtitle);
	divtext.appendChild(divdates);
	if(divdojo != null)
		divtext.appendChild(divdojo);
	else{
		divempty = document.createElement('div');
		divempty.className= 'semdetails';
		divempty.innerHTML = "&nbsp;";
	}

	divtext.appendChild(divaddress);
	if(divpdf != null)
		divtext.appendChild(divpdf);
	else {
		if (divempty == null){
			divempty = document.createElement('div');
			divempty.className= 'semdetails';
		}
		divtext.appendChild(divempty);
	}

	if(divempty != null)
		divtext.appendChild(divempty);

//	diventry.appendChild(divcal);
//	diventry.appendChild(divtext);

	divw.appendChild(aname);
	divw.appendChild(divimg);
	divw.appendChild(divcal);
	divw.appendChild(divtext);
//	divw.appendChild(diventry);

	var displayDiv = document.getElementById('seminarlist');
	displayDiv.appendChild(divw);

}

/* retrieves the ID of the next seminar, to be used in pointing to the next seminar in the list of seminars */
function getIDNextSeminar(seminars){
	/* loads all seminars */
	/* sort by date */
	var num = seminars.length;
	var today = Math.round(new Date().getTime() / 1000);
	for (var i = 0; i < num; i++) {
		var firstday = Math.round(new Date(seminars[i].giornoinizio).getTime() / 1000);
		if(firstday > today)
			return seminars[i].giornoinizio.replace(/-/g, "");		
	};
}
