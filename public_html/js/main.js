$(document).ready(function (){
console.log("page has loaded");

	$(".readmore-button").click(function(){
		
		$(this).next('div').children().show("slow");
		//$("p").show("slow");
		//$(this).children().show("slow");
		$(this).css("visibility", "hidden");
		//$(this).hide(1000);
	
	
	});
	
	
$("#filter").keyup(function(){
 
        // Retrieve the input field text and reset the count to zero
        var filter = $(this).val(), count = 0;
 
        // Loop through the comment list
        $("#content p, #content h2").each(function(){
 
            // If the list item does not contain the text phrase fade it out
            if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                $(this).fadeOut();
 
            // Show the list item if the phrase matches and increase the count by 1
            } else {
                $(this).show(function(){
                	
                	$(this).css("color:red;")
                });
                count++;
            }
        });
 
        // Update the count
        var numberItems = count;
        $("#filter-count").text("Sökresultat = "+count);
    });	
});
