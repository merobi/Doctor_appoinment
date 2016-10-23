$(document).ready(function(){
setBindings()
});
function setBindings(){
	$("nav,a").click(function(e){
		var blogID=e.currentTarget.id+"Blog";
		$("html body").animate({
			scrollTop: $("#"+ blogID).offset().top


		},1000)
	})
}