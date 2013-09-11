window.addEvent('domready', function(){
	$('dropdownmenu').getElements('li.menu').each( function( elem ){
		var list = elem.getElement('ul.links');
		var dropdown = new Fx.Slide(list, {
			duration: 400,
			wrapper: 'div.menuwrap',
			transition: Fx.Transitions.Quart.easeOut
		}).hide();
		elem.addEvents({
			'mouseenter' : function(){
				dropdown.cancel();
				dropdown.slideIn();
			},
			'mouseleave' : function(){
				dropdown.cancel();
				dropdown.slideOut();
			}
		});
	})
});
window.addEvent('domready', function(){
	$('dropdownmenu').getElements('li.cascade').each( function( elem ){
		var list = elem.getElement('ul.cascademenu');
		var dropdown = new Fx.Slide(list, {
			duration: 400,
			mode: 'horizontal',
			transition: Fx.Transitions.Quart.easeOut
		}).hide();
		elem.addEvents({
			'mouseenter' : function(){
				dropdown.cancel();
				dropdown.slideIn();
			},
			'mouseleave' : function(){
				dropdown.cancel();
				dropdown.slideOut();
			}
		});
	})
});
