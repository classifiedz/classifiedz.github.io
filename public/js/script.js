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

/*Adding sort by parameter to the URL*/
$('.sortBy').on('click',function(){
	var URL = $(location).attr("href");
	var newURL = updateQueryStringParameter(URL, 'sortBy', this.id);
	window.location.href = newURL;
});

/*Deals with modal confirmation prompt for deleting your own ad*/
$('#deleteAdModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var productId = button.data('productid') // Extract info from data-* attributes
    
    $('#deleteAdForm').attr('action', '/ad/' + productId);
})

/*Deals with modal confirmation prompt for deleting an item in your wishlist*/
$('#deleteWishlistItemModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var productId = button.data('productid') // Extract info from data-* attributes
    
    $('#deleteWishlistItemForm').attr('action', '/wishlist/' + productId);
})

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
console.log(document.getElementById('searchbar').value);
console.log('STILL WORKING 😎');
/*profile page js test

$(document).ready(function() {
    var panels = $('.user-infos');
    var panelsButton = $('.dropdown-user');
    panels.hide();

    //Click dropdown
    panelsButton.click(function() {
        //get data-for attribute
        var dataFor = $(this).attr('data-for');
        var idFor = $(dataFor);

        //current button
        var currentButton = $(this);
        idFor.slideToggle(400, function() {
            //Completed slidetoggle
            if(idFor.is(':visible'))
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
            }
            else
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
            }
        })
    });


    $('[data-toggle="tooltip"]').tooltip();

    $('button').click(function(e) {
        e.preventDefault();
        alert("This is a demo.\n :-)");
    });
});

profile page js test end*/
