// preload dropdown images
(function($) {
	var cache = [];
		// Arguments are image paths relative to the current page.
		$.preloadImages = function() {
			var args_len = arguments.length;
			for (var i = args_len; i--;) {
			var cacheImage = document.createElement('img');
			cacheImage.src = arguments[i];
			cache.push(cacheImage);
		}
	}
})(jQuery);

var pageDesiredHeight;
function placeFrame() {
	var width = $(window).width();
	var height = $(window).height();

	var swLeft = "left";
	var seRight = "right";
	if (width < 1400) {
		var offset = (1400 - width) / 2;
		swLeft = -offset + "px";
		seRight = 1400 - 528 - offset + "px";
	}
	// have to do it like this 'cause using jQuery has css caching problems
	$(".sw-bg")[0].style.backgroundPosition = swLeft + " bottom";
	$(".se-bg")[0].style.backgroundPosition = seRight + " bottom";

	if (pageDesiredHeight < height) {
		$(".container").height(height);
	} else {
		$(".container").css("height", "");
	}	
}

$(window).resize(function () {
	placeFrame();
});

function addMenuBehavior() {

	var setMenuBg = function(e) {
		var menuItem = $(e.target);
		var bg = menuItem.data("menu-image");

		if (typeof(bg) !== "undefined") {
			menuItem.closest(".dropdown").css("background", "transparent url(" + bg + ") no-repeat right 0");
		}
			
		return;
	};

	var showMenu = function(e) {
		clearTimeout(hideTimeout);
		if ($(menuItem).hasClass("active")) {
			return;
		}
		
		hideMenu();
		var menuItem = $(e.target).closest(".has-dropdown");
		
		$(menuItem).addClass("active");
		$(".dropdown", menuItem).addClass("active");
		$(menuItem).children("a").addClass("active");		
	};
	var hideMenu = function() {
		$(".dropdown").removeClass("active");
		$(".has-dropdown").removeClass("active");	
		$(".has-dropdown > a").removeClass("active");	
	};
	
	var hideTimeout = null;
	if (Modernizr.touch) {
		$(".has-dropdown").bind("click", function (e) {
			showMenu(e);
		});
		$("body").bind("touchstart", function (e) {
			if ($(e.target).closest(".has-dropdown").length == 0) {
				hideMenu();
			}
		});
	} else {
		// this doesn't do anything, just prevents the # from appearing in the URL
		$(".has-dropdown > a").bind("click", function (e) {
			return false;
		});
	
		$(".has-dropdown").bind("mouseover", function(e) {
			showMenu(e);
		});
		$(".has-dropdown").bind("mouseout", function(e) {
			hideTimeout = setTimeout(function () {
				hideMenu();
			}, 300);
		});
		
		$(".dropdown a").bind("mouseover", function(e) {
			setMenuBg(e);
		}).each(function (i, item) {
			var bg = $(item).data("menu-image");
			if (typeof(bg) !== "undefined") {
				$.preloadImages(bg);	
			}
		});
		
	}
	
	
	
}

function wireHeroes() {

	var fadeDuration = 500;
	var heroDuration = 10000;
/*
	$(".home .theme").each(function(i, item) {
		var pager = $("<ul class=\"inline pager\"></ul>")
		var themes = $(item);
		var childCount = themes.children().length;
		for (var j = 0; j < childCount; j++) {
			pager.append("<li>" + i + "</li>");
		}
		
		$(".hero").append(pager);			
	});
	
	$(".hero .tabs li").click(function() {
		var selected = $(this);
		var index = $(".hero .tabs li").index(selected);
		
		$(".hero .pager li:eq(" + index + ")").trigger("click");		
	});
*/	
	$(".hero .tabs li").click(function() {
		stopHeroCycle();
		
		var selected = $(this);
		var tabs = selected.closest(".tabs");
		var index = $("li", tabs).index(selected);

		var themes = $(".theme");
		var next = $(themes.children()[index]);

		// make sure we're not animating
		if ($(".outgoing").length == 0) {
			
			var current = $(".active", themes);
			var currentIndex = $("div", themes).index(current);
			// make sure it's not the same link that's been clicked
			if (index != currentIndex) {

				$("li", tabs).removeClass("active");
				selected.addClass("active");

				$(".hero .controls li").removeClass("active");
				$(".hero .controls li:eq(" + index + ")").addClass("active");

				$(".hero .tabs li").removeClass("active");
				$(".hero .tabs li:eq(" + index + ")").addClass("active");
	
				// perform crossfade
				next.addClass("incoming").show().fadeTo(0,0).css("visibility", "visible").fadeTo(fadeDuration, 1, function() {
					$(".incoming").removeClass("incoming").addClass("active");
				});
				current.addClass("outgoing").fadeTo(fadeDuration, 0, function() {
					$(".outgoing").removeClass("outgoing active");
				});
			}
		}

		startHeroCycle();
		return false;
	});
		
		
	var intCycle = null;
	var heroHover = false;
	function startHeroCycle() {
		if (heroHover == true) {
			return false;
		}
		clearInterval(intCycle);
		intCycle = setInterval(function (){
			advanceHeroCycle();
		}, heroDuration);
	}
	
	function advanceHeroCycle() {
		var next = $(".hero .tabs li.active").next();
		if (next.length == 0) {
			next = $(".hero .tabs li:first");
		}
		
		next.trigger("click");
	}
	
	function stopHeroCycle() {
		clearInterval(intCycle);
		intCycle = null;		
	}
		
	$(".hero").live("mouseover mouseout", function(event) {
		if (event.type == 'mouseover') {	
			heroHover = true;
			stopHeroCycle();
		} else {
			heroHover = false;
			if (intCycle == null) {
				startHeroCycle();
			}
		}
	});

	$(".hero .tabs li:first").addClass("active");
	$(".hero .controls li:first").addClass("active");
	$(".theme div:first").addClass("active");
	startHeroCycle();
}

function initSearch() {
	var searchDefault = "Search...";
	var searchInput = $(".search input:text");
	searchInput.click(function() {
		var val = $(this).val();
		if (val == searchDefault) {
			$(this).removeClass("inactive").addClass("active").val("");
		} else {
	  $(this).select();
	}
	});
	searchInput.focus(function(e) {
		$(this).click();
	});
	searchInput.blur(function() {
		var val = $(this).val();
		if (val == "") {
			$(this).removeClass("active").addClass("inactive").val(searchDefault);
		}
	});
}

function placeAds() {

	var urlzones = self.location.pathname.toLowerCase().split("/");	
	var sitvAd = urlzones[1];
	
	if( urlzones[1] == "" ) {
		sitvAd = "homepage";
	}

	$(".ad").each(function(i, item) {
		var width, height;
		
		if ($(this).hasClass("ad-long")) {
			width = 728;
			height = 90;
		}
		if ($(this).hasClass("ad-tall")) {
			width = 160;
			height = 600;
		}
		if ($(this).hasClass("ad-box")) {
			width = 300;
			height = 250;
		}

		ord=Math.random()*10000000000000000;
	
		$(this).html('<iframe src="http://ad.doubleclick.net/adi/sitv.site177.tmus/' + sitvAd + ';tile=' + i + ';dcopt=ist;sz=' + width+'x'+height + ';ord=' + ord + '?" WIDTH=' + width + ' HEIGHT=' + height + ' MARGINWIDTH=0 MARGINHEIGHT=0 HSPACE=0 VSPACE=0 FRAMEBORDER=0 SCROLLING=no BORDERCOLOR="transparent"></iframe>');
	});
}



isiPhone = navigator.userAgent.match(/iPhone/i)
isiPad = navigator.userAgent.match(/iPad/i) != null;

if( isiPad || isiPhone){
			$('#video_player_li').children('#video_player_div').children().remove();
			$('#video_player_div').append("<iframe id='framed_video_player' src=''   style='width:242px:height:244px'   />")	
			
			// THE FOLOWING IS A HACK ADDED TO KEEP IPAD FROM FLASHING WITH TWITTER WIDGET
			$('div.c-spot.block').parent().append("<div   style='width:0px;height:0px;overflow:hidden'  ><script language='JavaScript' type='text/javascript' src='http://admin.brightcove.com/js/BrightcoveExperiences.js'></script><object id='myExperience' class='BrightcoveExperience'><param name='wmode' value='transparent' /><param name='width' value='242' /><param name='height' value='422' /><param name='playerID' value='1154506721001' /><param name='playerKey' value='AQ~~,AAAAADEdZAY~,VHcBVNPqDVshrDLVr-FIOiEabfcn5IxW' /><param name='isVid' value='true' /><param name='isUI' value='true' /><param name='dynamicStreaming' value='true' /></object></div>");
}

function addFeaturedNavigation() {
	
	$(".page-home .featured .thumbs li a").click(function () {

		if( isiPad || isiPhone ){

					if( $(this).parent().attr('id') == 'video_player_link' ){
						$('#framed_video_player').attr('src','/misc/brightcove_video_player.html');
					}else{
						$('#framed_video_player').attr('src','');
					};
			
		};

		var selected = $(this);
		var index = $(".page-home .featured .thumbs li a").index(selected);

		$(".page-home .featured .thumbs li a").removeClass("active");
		selected.addClass("active");

		$(".featured-list li").removeClass("active");
		$(".featured-list li:eq(" + index + ")").addClass("active");
		
		return false;
	});
	
	$(".page-home .featured .thumbs li a:eq(0)").trigger("click");
}
			

function addGalleries() {
	$(".galleria").galleria();
	
	$(".galleries a").click(function () {

		var selected = $(this);
		var index = $(".galleries a").index(selected);

		$(".gallery").removeClass("active");
		$(".gallery:eq(" + index + ")").addClass("active");
		
		return false;
	});
	
	$(".galleries a:eq(0)").trigger("click");
}

function addEpisodeNavigation() {
	$(".episode-list a").click(function () {

		var selected = $(this);
		var index = $(".episode-list a").index(selected);

		$(".episode-list a").removeClass("active");
		selected.addClass("active");

		$(".episode-content li").removeClass("active");
		$(".episode-content li:eq(" + index + ")").addClass("active");
		
		return false;
	});
	
	$(".episode-list a:eq(0)").trigger("click");
}

function wireFancyBox() {
	$(".fancyVideo").click(function (e) {
		var w = (typeof($(this).attr("data-width")) !== "undefined") ? $(this).attr("data-width") - 0 : 560;
		var h = (typeof($(this).attr("data-height")) !== "undefined") ? $(this).attr("data-height") - 0 : 340;	
		var url = $(this).attr("href");
		
		$.fancybox({
			type: "iframe",
			href: url,
			padding: "18px",
			titlePosition: "inside",
			overlayColor: "#000",
			overlayOpacity: .6,
			showCloseButton: true,
			hideOnContentClick: false,
			height: h,
			width: w
		});

        e.preventDefault();
        return false;	
	});
	
	$(".fancyLink").fancybox({
		padding: "18px",
		titlePosition: "inside",
		overlayColor: "#000",
		overlayOpacity: .6,
		showCloseButton: true,
		hideOnContentClick: true
	});	
}

function skinSelect() {
    if (!$.browser.opera) {
		$('select.skinned').each(function(){
			var title = $(this).attr('title');
			if ($('option:selected', this).val() != ''  ) title = $('option:selected',this).text();
				$(this)
					.css({'z-index':10,'opacity':0,'-khtml-appearance':'none'})
					.before('<span class="select">' + title + '</span>')
					.change(function(){
						val = $('option:selected',this).text();
						$(this).prev().text(val);
					})
				;
		});
    };		
}

function fixSWFTransparency() {
	$("object").append(
		$("<param/>").attr({
			'name': 'wmode',
			'value': 'transparent'
		})
	);
	$("embed").attr('wmode', 'transparent');

};

// bad practice to mess with prototype, but it's a quick & dirty
Date.prototype.addHours = function(h) {
	this.setHours(this.getHours()+h);
	return this;
};
Date.prototype.stdTimezoneOffset = function() {
	var jan = new Date(this.getFullYear(), 0, 1);
	var jul = new Date(this.getFullYear(), 6, 1);
	return Math.max(jan.getTimezoneOffset(), jul.getTimezoneOffset());
};
Date.prototype.dst = function() {
	return this.getTimezoneOffset() < this.stdTimezoneOffset();
};
Date.prototype.cleanDate = function() {
	var year = this.getFullYear();
	var month = ("00" + (this.getMonth() + 1)).slice(-2);
	var date = ("00" + this.getDate()).slice(-2);

	return year + "-" + month + "-" + date;
};
Date.prototype.cleanTime = function() {
	var hours = ((this.getHours() % 12) == 0) ? "12" : (this.getHours() % 12);	
	var mins = ("00" + this.getMinutes()).slice(-2);
	var ampm = ((this.getHours() / 12) < 1) ? "AM" : "PM";
	return hours + ":" + mins + ampm;
};
Date.prototype.dayText = function() {
	var date = this.getDate();
	var suffix = "th";
	switch(date) {
		case 1:
		case 21:
		case 31:
			suffix = "st";
			break;
		case 2:
		case 22:
			suffix = "nd";
			break;
		case 3:
		case 23:
			suffix = "rd";
			break;			
	}
	
	return date + suffix;
};

var dayNames = [
	"Sunday",
	"Monday",
	"Tuesday",
	"Wednesday",
	"Thursday",
	"Friday",
	"Saturday"
];
var dayNamesShort = [
	"Sun",
	"Mon",
	"Tue",
	"Wed",
	"Thu",
	"Fri",
	"Sat"
];
var monthNames = [
	"January",
	"February",
	"March",
	"April",
	"May",
	"June",
	"July",
	"August",
	"September",
	"October",
	"November",
	"December"
];

var showLinks = [];
showLinks["Adrenalina"] = "/series/adrenalina";
showLinks["Chicago Hope"] = "/series/chicago-hope";
showLinks["Cristina's Court"] = "/series/cristinas-court";
showLinks["Dark Angel"] = "series/dark-angel";
showLinks["Fame"] = "series/fame";
showLinks["Hill Street Blues"] = "/series/hill-street-blues";
showLinks["In Living Color"] = "/series/in-living-color";
showLinks["LA Law"] = "/series/la-law";
showLinks["Latino 101"] = "/series/latino-101-s2";
showLinks["Miami Ink"] = "/series/miami-ink";
showLinks["Mission Menu"] = "/series/mission-menu";
showLinks["Model Latina Las Vegas"] = "/model-latina-las-vegas/";
showLinks["Model Latina NYC"] = "/series/model-latina-nyc";
showLinks["Model Latina Miami"] = "/series/model-latina-miami";
showLinks["Model Latina LA"] = "/series/model-latina-la";
showLinks["Model Latina"] = "/model-latina-las-vegas/";
showLinks["New York Undercover"] = "/series/new-york-undercover";
showLinks["NYPD Blue"] = "/series/nypd-blue";
showLinks["Operation Osmin"] = "/operation-osmin/";
showLinks["Pastport"] = "/series/pastport-venezuela";
showLinks["Prison Break"] = "/series/prison-break";

showLinks["nuvo TV Cinema"] = "/movies";
showLinks["S&iacute; TV Cinema"] = "/movies";

var showImages = [];
showImages["Adrenalina"] = "/assets/images/programming/series/adrenalina.jpg";
showImages["Chicago Hope"] = "/assets/images/programming/series/chicago-hope.jpg";
showImages["Cristina's Court"] = "/assets/images/programming/series/cristinas-court.jpg";
showImages["Dark Angel"] = "/assets/images/programming/series/dark-angel.jpg";
showImages["Fame"] = "/assets/images/programming/series/fame.jpg";
showImages["Hill Street Blues"] = "/assets/images/programming/series/hill-street-blues.jpg";
showImages["In Living Color"] = "/assets/images/programming/series/in-living-color.jpg";
showImages["LA Law"] = "/assets/images/programming/series/la-law.jpg";
showImages["Latino 101"] = "/assets/images/programming/series/latino-101-s2.jpg";
showImages["Miami Ink"] = "/assets/images/programming/series/miami-ink.jpg";
showImages["Mission Menu"] = "/assets/images/programming/series/mission-menu.jpg";
showImages["Model Latina NYC"] = "/assets/images/programming/series/model-latina-nyc.jpg";
showImages["Model Latina Miami"] = "/assets/images/programming/series/model-latina-las-vegas.jpg";
showImages["Model Latina"] = "/assets/images/programming/series/model-latina-las-vegas.jpg";
showImages["Model Latina Las Vegas"] = "/assets/images/programming/series/model-latina-las-vegas.jpg";
showImages["New York Undercover"] = "/assets/images/programming/series/new-york-undercover.jpg";
showImages["NYPD Blue"] = "/assets/images/programming/series/nypd-blue.jpg";
showImages["Operation Osmin"] = "/assets/images/programming/series/operation-osmin.jpg";
showImages["Pastport"] = "/assets/images/programming/series/pastport.jpg";
showImages["Prison Break"] = "/assets/images/programming/series/prison-break.jpg";
showImages["nuvo TV Cinema"] = "/assets/images/programming/movies.jpg";
showImages["S&iacute; TV Cinema"] = "/assets/images/programming/movies.jpg";

function parseScheduleData(data, manualOffset) {
	var retval = [];
	var hourOffset = 0;
	var naturalOffset = 0;
	
	$.each(data, function(i, item) {
		var path = (typeof(showLinks[item.title]) == "undefined") ? "" : showLinks[item.title];
		item.link = (path == "") ? "#" : path;
		
		var imagePath = (typeof(showImages[item.title]) == "undefined") ? "/assets/images/programming/generic.jpg" : showImages[item.title];
		item.image = imagePath;

		var day = item.title;
		var date = item.show_date;
		var time = item.start_time;		
		
		var est = new Date(date.replace(/-/g, "/") + " " + time);
		
		hourOffset = new Date().getTimezoneOffset() / 60;
		hourOffset -= (new Date().dst()) ? 4 : 5;		// EDT is GMT-4, EST is GMT-5
		
		naturalOffset = hourOffset;
		
		if (typeof(manualOffset) !== "undefined") {
			hourOffset = manualOffset;
		}
		
/*
		var tz = "";
		switch (hourOffset) {
			case 0:
				tz = "E";
				break;
			case 1:
				tz = "C";
				break;
			case 2:
				tz = "M";
				break;
			case 3:
				tz = "P";
				break;
		}
		if (tz != "") {
			tz += (new Date().dst()) ? "DT" : "ST";
		}								
*/		
		var localTime = est.addHours(-hourOffset);

		item.localTime = localTime;
		retval[i] = item;
	});
	
	return { data: retval, offset: hourOffset, "naturalOffset": naturalOffset};
}

function getShowSchedule() {

	var scheduleKeys = [];
	
	scheduleKeys["series/adrenalina"] = "Adrenalina";
	scheduleKeys["series/chicago-hope"] = "Chicago Hope";
	scheduleKeys["series/cristinas-court"] = "Cristina's Court";
	scheduleKeys["series/dark-angel"] = "Dark Angel";
	scheduleKeys["series/fame"] = "Fame";
	scheduleKeys["series/hill-street-blues"] = "Hill Street Blues";
	scheduleKeys["series/in-living-color"] = "In Living Color";
	scheduleKeys["series/la-law"] = "LA Law";
	scheduleKeys["series/latino-101-s2"] = "Latino 101";
	scheduleKeys["series/miami-ink"] = "Miami Ink";
	scheduleKeys["series/mission-menu"] = "Mission Menu";
	scheduleKeys["series/model-latina-nyc"] = "Model Latina NYC";
	scheduleKeys["series/model-latina-miami"] = "Model Latina Miami";
	scheduleKeys["series/model-latina-la"] = "Model Latina";
	scheduleKeys["series/new-york-undercover"] = "New York Undercover";
	scheduleKeys["series/nypd-blue"] = "NYPD Blue";
	scheduleKeys["series/pastport-argentina"] = "Pastport";
	scheduleKeys["series/pastport-colombia"] = "Pastport";
	scheduleKeys["series/pastport-cuba"] = "Pastport";
	scheduleKeys["series/pastport-puerto-rico"] = "Pastport";
	scheduleKeys["series/pastport-venezuela"] = "Pastport";
	scheduleKeys["series/prison-break"] = "Prison Break";

	// ** ADDED TO ACCOMODATE EPISODES OF PASSPORT 
	var uri = currentPage.split('/');
	var episode_title_array = uri[1].split('-');
	var episode_title = "";

	if( episode_title_array[0] == 'pastport'){
		episode_title = episode_title_array[1];
		if( episode_title_array[2] !=  null){
			episode_title = episode_title + ' ' + episode_title_array[2];
		};
	};
	
	episode_title = episode_title.toLowerCase().replace(/\b[a-z]/g, function(letter) {
    return letter.toUpperCase();
	});
	// ** END 

	var id = (typeof(scheduleKeys[currentPage]) == "undefined") ? "" : scheduleKeys[currentPage];

	$.getJSON("/api/v1/getScheduleByTitle",
	{
		"title": id,
		"episode_title": episode_title
	},
	function(data) {
		var result = "";
		if (data && data.length > 0) {
			results = parseScheduleData(data).data;

			var li;
			var list = $("<ul />").addClass("unstyled");
			var now = new Date();
			var count = 0;
			$.each(results, function(i, item) {
				if (item.localTime > now) {
					li = $("<li/>");
					li.html('<span class="title">' + dayNames[item.localTime.getDay()] + '<br />' + (item.localTime.getMonth() + 1) + "/" + item.localTime.getDate() + '</span><span class="time">' + item.localTime.cleanTime() + '</span>');
					list.append(li);
					count++;
					if (count == 4) {
						return false;
					}
				}
			});
			if (list.children().length > 0) {
				result = list;
			}
		}
		if (result == "") {
			result = $("<p />").html("This show is currently not scheduled. Please check back often for updates!");
		}
		$(".schedule").append(result);		
	});
}

function getHomeSchedule() {

	var start = new Date();
	start.addHours(-24);
	var end = new Date();
	end.addHours(24);

	
	$.getJSON("/api/v1/getScheduleByDateRange",
	{
		"start_date": start.cleanDate(),
		"end_date": end.cleanDate()
	},
	function(data) {
		var result = "";
		if (data && data.length > 0) {

			results = parseScheduleData(data).data;

			var now = new Date();
			var primetime = new Date(now.getFullYear(), now.getMonth(), now.getDate(), 20, 0, 0);
			var nowResults = [];
			var primetimeResults = [];
			
			$.each(results, function(i, item) {
				// if this is the first result we've found after the current time, grab the 2 before and 3 after
				if (item.localTime > now && nowResults.length == 0) {
					try {
						nowResults = results.slice(i - 2, i + 3);
					} catch (e) {
					};
				}

				if (primetimeResults.length == 0) {
					if (item.localTime - primetime == 0) {		// if we've found primetime exactly, get the next 5
						try {
							primetimeResults = results.slice(i, i + 5);
						} catch (e) {
						};
					} else if (item.localTime > primetime) {	// if the first result after primetime is greater than primetime, get the one before and 4 after
						try {
							primetimeResults = results.slice(i-1, i + 4);
						} catch (e) {
						};
					}
				}				
			});			
			
			var li;			
			var nowList = $("<ul />").addClass("inline bar now-showing-bar");
			var last = nowResults.length - 1;
			$.each(nowResults, function(i, item) {
				li = $("<li/>");

				li.html('<a href="' + item.link + '">\
							<div class="time">' + item.localTime.cleanTime() + '</div>\
							<div class="show">' + item.title + '<span class="link-highlight">+</span></div>\
						</a>');
				
				if (i == 0) {
					li.addClass("recent");
				} else if (i == 1) {
					li.addClass("current");
					$("a", li).prepend('<span class="corner"></span>');
				} else if (i == last) {
					li.addClass("last");
				}
				
				nowList.append(li);
			});

			var primeList = $("<ul />").addClass("inline bar prime-time-bar");
			var last = primetimeResults.length - 1;
			$.each(primetimeResults, function(i, item) {
				li = $("<li/>");

				li.html('<a href="' + item.link + '">\
							<div class="time">' + item.localTime.cleanTime() + '</div>\
							<div class="show">' + item.title + '<span class="link-highlight">+</span></div>\
						</a>');
				
				if (i == 0) {
					li.addClass("first");
					$("a", li).prepend('<span class="corner"></span>');
				} else if (i == last) {
					li.addClass("last");
				}
				
				primeList.append(li);
			});

						
			nowList.hide();
			$(".schedule").append(primeList);
			$(".schedule").append(nowList);
			
			// wire up the click handlers
			$(".now-showing, .prime-time").click(function() {
				$(".schedule .bar").hide();
				var index = $(".schedule .nav li").index(this);
				$(".schedule .bar:eq(" + index + ")").show();				
			});
			
		} else {
			$(".schedule").append(result);
		}
	});
}

function getFullSchedule(timeZone) {

	var now = new Date();
	var monday = new Date();
	var sunday = new Date();

	// special exception for sunday since we want to start on the previous monday
	if (now.getDay() == 0) {		
		monday.addHours(-24 * 6);
	} else {
		monday.addHours(-24 * (now.getDay() - 1));	
	}
	monday = new Date(monday.getFullYear(), monday.getMonth(), monday.getDate(), 0, 0, 0);
	sunday = new Date(monday).addHours(24 * 6 + 23);
	sunday.setMinutes(59);
	sunday.setSeconds(59);
	// ^^ we also set monday & sunday times to 00:00:00 and 23:59:59 respectively since they are used for our schedule window threshold	
	
	// set the query boundary to be one day before and one after to accomodate time zone adjustments
	var start = new Date(monday).addHours(-24);
	var end = new Date(sunday).addHours(24);

	$.ajax({
		url: "/api/v1/getScheduleByDateRange",
		dataType: 'json',
		data: {
			"start_date": start.cleanDate(),
			"end_date": end.cleanDate()  
		},
		cache: true,
		success: function(data) {
		
			var result = "";
			if (data && data.length > 0) {
				results = parseScheduleData(data, timeZone);

				$(".schedule").remove();				
				var schedule = $("<div />").addClass("schedule");
	
				var lists = [];
				var list = $("<ul />").addClass("unstyled");	// initial seed, will likely be empty, but will be thrown out later
				var li;
				var lastDate = -1;

				// loop through and create day lists with the shows in them
				$.each(results.data, function(i, item) {
					// only add shows within the right range
					if (item.localTime >= monday && item.localTime < sunday) {
						// add the old list and create a new one if it's a new day
						if (item.localTime.getDate() != lastDate) {
							lists.push(list);
							list = $("<ul />").addClass("unstyled").addClass(dayNames[item.localTime.getDay()]).data("localTime", item.localTime);
							lastDate = item.localTime.getDate();
						}
						li = $("<li/>").addClass("white-box show block");
						li.html('<div class="time">' + item.localTime.cleanTime() + '</div>\
								<div class="bordered thumb"><img src="' + item.image + '" alt="" /></div>\
								<div class="details">\
									<span class="title">' + item.title + '</span>\
									<span class="episode-title">' + item.episode_title + '</span>\
									<span class="description">' + item.description + '</span>\
								</div>')
							.data("localTime", item.localTime);
						list.append(li);
					}
				});
				lists.push(list);

				var scheduleNav = $("<ul />").addClass("unstyled inline nav block");
				var scheduleDays = $("<ul />").addClass("unstyled days");
				// create the navigation for & add the days that have non-empty show lists (the seeded list will likely be tossed out)
				$.each(lists, function(i, item) {
					if ($(item).children().length > 0) {
						var localTime = item.data("localTime");
						
						li = $("<li/>").addClass("day");
						li.html('<span class="corner"></span><span class="name">' + dayNamesShort[localTime.getDay()] + '</span><span class="month">' + monthNames[localTime.getMonth()] + " " + localTime.dayText() + '</span>');
						scheduleNav.append(li);
						
						scheduleDays.append($("<li/>").append(item));
					}
				});

				// add day navigation buttons
				scheduleNav.prepend($("<li/>").addClass("prev"));
				scheduleNav.append($("<li/>").addClass("next"));

				// add all the blocks: timezone, day nav, intra-day earlier button, days & shows, and intra-day after button
				schedule.append($("<ul />").addClass("inline time-zones block").html('<li><span class="corner"></span>ET</li><li><span class="corner"></span>CT</li><li><span class="corner"></span>MT</li><li><span class="corner"></span>PT</li>'));				
				schedule.append(scheduleNav);
				schedule.append($("<a />").attr("href", "#").html("Show Earlier Listings").addClass("load-before black-box"));
				schedule.append(scheduleDays);
				schedule.append($("<a />").attr("href", "#").html("Show Later Listings").addClass("load-after black-box"));				
				$(".main").append(schedule);

				// set timezone selected element & wire up click event
				$(".schedule .time-zones li:eq(" + results.offset + ")").addClass("active");
				$(".schedule .time-zones li").click(function () {
					var index = $(".schedule .time-zones li").index(this);
					getFullSchedule(index);
				});

				// wire up day navigation click
				$(".schedule .nav li.day").click(function () {
					$(".schedule .nav li").removeClass("active");
					$(".schedule .days li").removeClass("active");
					
					$(this).addClass("active");
					var index = $(".schedule .nav li.day").index(this);
					var activeDay = $(".schedule .days > li:eq(" + index + ")");
					
					// offset the current window if the timezone was manual
					var nowOffset = results.offset - results.naturalOffset;
					var nowMinutes = (now.getHours() - nowOffset) * 60 + now.getMinutes();
					var hasFirstOccurred = false;
					var last = null;
					var count = 0;
					
					// hide all the blocks, and then loop through to classify them or show them if appropriate
					$("ul li", activeDay).hide().removeClass("before").addClass("after").each(function(i, item) {
						var localTime = $(item).data("localTime");
						var minutes = localTime.getHours() * 60 + localTime.getMinutes();
						if (minutes < nowMinutes) {
							$(item).removeClass("after").addClass("before");
	 						last = item;
	 					} else {
							if (hasFirstOccurred == false && last != null) {
								$(last).removeClass("before after").show();
								hasFirstOccurred = true;
								count++;
							}
							$(item).removeClass("after").show();
							count++;
	 					}
	 					if (count == 5) {
	 						return false;
	 					}
					});
					if (count == 0 && last != null) {
						$(last).removeClass("before after").show();						
					}

					// only show the load before and after links if there are elements to show
					if ($("ul li.before", activeDay).length > 0) {
						$(".schedule .load-before").addClass("active");
					} else {
						$(".schedule .load-before").removeClass("active");
					}
					if ($("ul li.after", activeDay).length > 0) {
						$(".schedule .load-after").addClass("active");
					} else {
						$(".schedule .load-after").removeClass("active");
					}
					
					// we wait until the end to show so that the block manipulation isn't displayed
					activeDay.addClass("active");
				});
				
				// wire up previous and next arrows
				$(".schedule .nav li.prev").click(function () {
					var prev = $(".schedule .nav li.day.active").prev();
					if (prev.hasClass("day")) {
						prev.trigger("click");
					}
					return false;
				});
				$(".schedule .nav li.next").click(function () {
					var next = $(".schedule .nav li.day.active").next();
					if (next.hasClass("day")) {
						next.trigger("click");
					}
					return false;
				});
				
				// wire up intra-day before and after links
				$(".schedule .load-before").click(function () {			
					var beforeSet = $(".schedule .days > li.active ul li.before").slice(-5);
					
					beforeSet.removeClass("before").show();
					
					if ($(".schedule .days > li.active ul li.before").length == 0) {
						$(this).removeClass("active");
					}
	
					return false;
				});
				$(".schedule .load-after").click(function () {			
					var afterSet = $(".schedule .days > li.active ul li.after").slice(0, 5);
					
					afterSet.removeClass("after").show();
					
					if ($(".schedule .days > li.active ul li.after").length == 0) {
						$(this).removeClass("active");
					}
	
					return false;
				});
	
				// select the current date
				$(".schedule .days > li ul").each(function(i, item) {
					var localTime = $(item).data("localTime");
					if (localTime.cleanDate() == now.cleanDate()) {
						$(".schedule .nav > li.day:eq(" + i + ")").trigger("click");
					}
				});
			} else {
				result = $("<p />").html("Schedule could not be retrieved");
				$(".schedule").append(result);
			}
			
			// kludge - force correct page dimensions after document manipulation
			$(".container").css("height", "");
			pageDesiredHeight = $(".container").height();
			placeFrame();
		}
	});
}
function addFlashAlternates() {
	if (FlashDetect.installed == false) {
		if ($(".page-find-nuvotv").length > 0) {
			$('#get-sitv-iframe').html('<div style="position: relative; margin-left: 15px; margin-top: 0px; padding-left: 10px; padding-top: 140px; background-image: url(\'sites/all/themes/sitv/images/getsitv.jpg\'); background-repeat: no-repeat; width: 599px;" id="test">Vibrant. Bold. Driven. NuvoTV is America\'s Nu Voice. Tune in for the best in original, English-language, Latino-themed reality series, award-winning films, and classic television favorites. It\'s a whole NU network for an entirely NU generation. NuvoTV - Live Bold!<br /><br />If you\'d like to see if nuvoTV is carried in your area, please contact your cable or satellite operator: <br /><br /><a target="_blank" href="http://www.att.com/u-verse/availability/#fbid=-d8G_YzNflY"><img width="100" src="/sites/all/themes/sitv/images/get-sitv/attuverse.jpg" /></a><a target="_blank" href="https://www.comcast.com/Localization/Localize.cspx?Referer=%2fCustomers%2fClu%2fChannelLineup.ashx%3farea%3d0"><img width="100" src="/sites/all/themes/sitv/images/get-sitv/comcast.jpg" style="padding-left: 40px;" /></a><a target="_blank" href="http://www.cox.net"><img width="100" src="/sites/all/themes/sitv/images/get-sitv/cox.gif" style="padding-left: 40px; padding-bottom: 15px;" /></a><a target="_blank" href="http://support.directv.com/app/ask"><img width="100" src="/sites/all/themes/sitv/images/get-sitv/directv.jpg" style="padding-left: 40px;" /></a><a target="_blank" href="http://affiliate.zap2it.com/tvlistings/ZCGrid.do?aid=dish"><img width="100" src="/sites/all/themes/sitv/images/get-sitv/dish-network.jpg" style="padding-left: 40px;" /></a><a target="_blank" href="http://www.timewarnercable.com/Localization/Corporate.ashx?tid=1"><img width="150" src="/sites/all/themes/sitv/images/get-sitv/time-warner.jpg" style="padding-left: 40px; padding-bottom: 20px;" /></a><a target="_blank" href="http://www22.verizon.com/Residential/FiOSTV/Channels/Channels.htm"><img width="110" src="/sites/all/themes/sitv/images/get-sitv/verizon.jpg" style="padding-left: 40px;" /></a></div>');
			
		}
	}

}


function addYouTubeWidget(){
			var playListURL = 'http://gdata.youtube.com/feeds/api/playlists/7F225C87537C948F?v=2&alt=json&callback=?';
			var videoURL = 'http://www.youtube.com/watch?v=';
			$.getJSON(playListURL, function(data) {
			    var list_data = "";
			    $.each(data.feed.entry, function(i, item) {
			    	if( i < 6 ){
			    		

			        var feedTitle = item.title.$t;
			        var feedURL = item.link[1].href;
			        var fragments = feedURL.split("/");
			        var videoID = fragments[fragments.length - 2];
			        var url = videoURL + videoID;
			        var thumb = "http://img.youtube.com/vi/" + videoID + "/default.jpg";
			        // list_data += '<li><a  class="launch" target="_blank" href="' + url + '" title="' + feedTitle + '"><img alt="' + feedTitle + '" src="' + thumb + '"</a></li>';
			        list_data += '<li><a videoID="'+videoID+'" class="launch" title="' + feedTitle + '"><img alt="' + feedTitle + '" src="' + thumb + '"</a></li>';
			
			    	};
			    });
			    $(list_data).appendTo(".playlist");
			});	

			$('.launch')
			.live('click', function() {
					//toggleBrightCovePlayer();
					
					//$('#player_div').show();
					//$('#youtube_iframe').attr('src','http://www.youtube.com/embed/'+$(this).attr('videoID')+'?autoplay=1');
					
					open('http://www.youtube.com/user/mynuvoTV?feature=mhee', 1 );
					
			})
			
			
//			$('#close_button').click(function(event) {
//					//toggleBrightCovePlayer();
//					$('#player_div').hide();
//					$('#youtube_iframe').attr('src','');
//			});	


}

//function toggleBrightCovePlayer(){
//    if(videoPlayer.isPlaying()){
//        videoPlayer.pause(true);
//    }else{
//        videoPlayer.pause(false);
//    }
//}

$(document).ready(function () {

pageDesiredHeight = $(".container").height();
placeFrame();
placeAds();
wireHeroes();
addMenuBehavior();
initSearch();
addGalleries();
addFeaturedNavigation();
addEpisodeNavigation();
wireFancyBox();
skinSelect();
addFlashAlternates();
addYouTubeWidget();
	
	if ($(".section-series, .section-movies").length > 0 && $(".schedule").length > 0) {
		getShowSchedule();
	} else if ($(".page-home").length > 0) {
		getHomeSchedule();
	} else if ($(".page-schedule").length > 0) {
		getFullSchedule();
	}
	
	

});
