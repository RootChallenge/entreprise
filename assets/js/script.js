$(document).ready(function(){

	$(".tooltip-input").tooltip({
		html:true,
		placement : "right auto",
		container : "body",
		trigger : "focus",
		animation : false
	});


	$('[data-toggle="tooltip"]').tooltip({
		html:true,
		placement : "auto right",
		container : "body",
		trigger : "hover focus",
		animation : false
	});



	$("#myDatatable").dataTable({
					"language": {
								"url": "http://localhost/canal/assets/datatables/lang.fr.json"
			         },
						"aLengthMenu": [[10, 25, 50, 100, 200, -1], [10, 25, 50, 100, 200, "Tous"]]
			       });



	$(".datepicker").datepicker({
		format: "dd MM yyyy",
		startView: "year",
		autoclose: true,
		todayHighlight: true,
		viewMode: "year",
		language: "fr",
		todayBtn: "linked"
	});

	$(".datepicker-tiret-us").datepicker({
		format: "yyyy-mm-dd",
		startView: "weeks",
		autoclose: true,
		todayHighlight: true,
		viewMode: "weeks",
		language: "fr",
		todayBtn: "linked"
	});

	$(".datepicker-mois-us").datepicker({
		format: "yyyy-mm",
		startView: "weeks",
		autoclose: true,
		todayHighlight: true,
		viewMode: "weeks",
		language: "fr",
		todayBtn: "linked"
	});

	$(".datepicker-annee-us").datepicker({
		format: "yyyy",
		startView: "weeks",
		autoclose: true,
		todayHighlight: true,
		viewMode: "weeks",
		language: "fr",
		todayBtn: "linked"
	});

	$(".datepicker-month").datepicker({
		format: "MM",
		startView: "month",
		autoclose: true,
		todayHighlight: true,
		viewMode: "month",
		language: "fr",
		todayBtn: "linked"
	});

	$(".datepicker-mois").datepicker({
		format: "MM yyyy",
		autoclose: true,
		todayHighlight: true,
		language: "fr",
		todayBtn: "linked",
		viewMode: "year"
	});


		$(".submenu > a").click(function(e) {
				e.preventDefault();
				var $li = $(this).parent("li");
				var $ul = $(this).next("ul");

				if($li.hasClass("open")) {
				  $ul.slideUp(350);
				  $li.removeClass("open");
				} else {
				  $(".nav > li > ul").slideUp(350);
				  $(".nav > li").removeClass("open");
				  $ul.slideDown(350);
				  $li.addClass("open");
				}
		});

		//Goto Top
	$('.gototop').click(function(event) {
		 event.preventDefault();
		 $('html, body').animate({
			 scrollTop: $("body").offset().top
		 }, 500);
	});
	//End goto top

	$('input.number, .number').number( true, 0, '.', ' ');
	$('.input-number').number( true, 0, '.', '');
	$('.number-float').number( true, 2, ',', '');



});
