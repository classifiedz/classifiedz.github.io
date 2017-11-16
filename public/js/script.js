function updateQueryStringParameter(uri, key, value) {
  var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
  var separator = uri.indexOf('?') !== -1 ? "&" : "?";
  if (uri.match(re)) {
    return uri.replace(re, '$1' + key + "=" + value + '$2');
  }
  else {
    return uri + separator + key + "=" + value;
  }
}

$('.sortBy').on('click',function(){
	var URL = $(location).attr("href");
	var newURL = updateQueryStringParameter(URL, 'sortBy', this.id);
	window.location.href = newURL;
});

/* If search button CLICK, move URL to search */
$('.searchbutton').on('click',function(){
    var URL = $(location).attr("href");
    var searchQuery = $('#searchbar').val();
    if($('#searchbar').val() == "")
        searchQuery ="abc";
	var newURL = updateQueryStringParameter(URL, 'search', '#searchbar'.value);
	window.location.href = "/search/"+searchQuery;
});
/* If search field hit enter TYPED, move URL to search */
$('#searchbar').keypress(function(e){
    if(e.which == 13){//Enter key pressed
        $('.searchbutton').click();//Trigger search button click event
    }
});

// Masonry JS Initilization
$(window).on('load',function() {
	$('.cards').masonry({
		itemSelector: '.col',
      horizontalOrder: true
	});
});
// Plan-B, click on pill badge to masonry arrange the cards
$(".badge-success").click(function(){
   $('.cards').masonry({
		itemSelector: '.col',
      horizontalOrder: true
	});
});

console.log(document.getElementById('searchbar').value);
console.log('STILL WORKING 😎');
