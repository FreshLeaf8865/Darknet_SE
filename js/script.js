(function($){
	$(document).ready(function(){
		var initScreen = function(formObj){
			var formHeight = $(window).height();
			formObj.css({
				height: formHeight + "px"
			});
		};

		initScreen($("#start-form"));
		$(window).resize(function(){
			initScreen($("#start-form"));
		});

		$("#goto-bellow").click(function(){
			$(".collapse").show()
			$("html, body").animate({scrollTop: $("#start-form").height() + "px"}, 500);
		});

		$(".search_text").click(function(){
			 $(".search_button").css('opacity','1');
		});

		if($(".results dl").length > 0){
			$(".search-content").css("padding",0);
			$(".result").css("float","left");
		}

		$("#info_bar").click(function(){		
			$(".link").css("visibility",'hidden');
				
		});
	});
})(jQuery);


