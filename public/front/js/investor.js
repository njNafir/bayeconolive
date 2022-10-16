jQuery(document).ready(function () {
    
    $('.investor-jquery-form').on('click', '.add_more_this_section', function(event) {
         event.preventDefault();
        // alert('working');   
        var parentUl = $(this).parents('ul');
        $(this).parents('.parent_for_clone').clone().appendTo(parentUl);
       // var element_clone = $(this).siblings('.row').html().clone();
    });
   
});