(function(){
	$(document).on('ready', function(){
		loadMenu();
	
		function loadMenu()
		{
			$('.icon-menu').click(openMenu);
		}
		
		function openMenu(event)
		{
			if($('.menu').is(':hidden'))
			{
				$('.menu').show();	
				event.stopPropagation();
				$('body').on('click', function (elClick, b, c) {
					$('.menu').hide();    
				});
			}
			else
			{
				$('.menu').hide();
			}
			
			
			
			
		}
		
	});
	
})();