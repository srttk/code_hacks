/*
Author  : Sarath

Use $('.trigger').makeToggle('.ToggleElem');

*/

(function($)
{$.fn.makeToggle=function(b){
	(this).click(function(){$(b).slideToggle()});
};
})(jQuery);
