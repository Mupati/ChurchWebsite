 //My custom jQuery


//Make Navigation Tabs active when clicked 
$('nav li').click(function(){
	$('nav li').removeClass("active")
	$(this).addClass("active")
});

//Organizations Tabs
 $(function () {
            $('.nav-tabs a:first').tab('show');
        });
