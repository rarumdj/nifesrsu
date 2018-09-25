<!-- Preloader -->      
        $(window).load(function() { // makes sure the whole site is loaded
            $('#status').fadeOut(); // will first fade out the loading animation
            $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
            $('body').delay(350).css({'overflow':'visible'});
        })
    
<!-- Quantity input -->     
jQuery(document).ready(function(){
    // This button will increment the value
    $('.qtyplus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('name');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $('input[name='+fieldName+']').val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
    // This button will decrement the value till 0
    $(".qtyminus").click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('name');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            $('input[name='+fieldName+']').val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });

});


// Open modal window on click  
jQuery(document).ready(function(){
        $('#modal-rooms-open').on('click', function(e) {
            var mod = $('#main'),
                modal = $('#modal-offers');
                mod.animate({ opacity: 0 }, 400, function(){
                $('html,body').scrollTop(0);
                modal.addClass('modal-active').fadeIn(400);
            });
            e.preventDefault();

            $('.modal-close').on('click', function(e) {
                modal.removeClass('modal-active').fadeOut(400, function(){
                    mod.animate({ opacity: 1 }, 400);
                });
                e.preventDefault();
            });
        });
        
        $('#modal-weather-open').on('click', function(e) {
            var mod = $('#main'),
                modal = $('#modal-weather');
                mod.animate({ opacity: 0 }, 400, function(){
                $('html,body').scrollTop(0);
                modal.addClass('modal-active').fadeIn(400);
            });
            e.preventDefault();

            $('.modal-close').on('click', function(e) {
                modal.removeClass('modal-active').fadeOut(400, function(){
                    mod.animate({ opacity: 1 }, 400);
                });
                e.preventDefault();
            });
        });
        
        $('#modal-about-open').on('click', function(e) {
            var mod = $('#main'),
                modal = $('#modal-about');
                mod.animate({ opacity: 0 }, 400, function(){
                $('html,body').scrollTop(0);
                modal.addClass('modal-active').fadeIn(400);
            });
            e.preventDefault();

            $('.modal-close').on('click', function(e) {
                modal.removeClass('modal-active').fadeOut(400, function(){
                    mod.animate({ opacity: 1 }, 400);
                });
                e.preventDefault();
            });
        });
        
        $('#modal-contacts-open').on('click', function(e) {
            var mod = $('#main'),
                modal = $('#modal-contacts');
                mod.animate({ opacity: 0 }, 400, function(){
                $('html,body').scrollTop(0);
                modal.addClass('modal-active').fadeIn(400);
                    //set up markers 
        var myMarkers = {"markers": [
                {"latitude": "51.511732", "longitude":"-0.123270", "icon": "img/map-marker2.png"}
            ]
        };
        
        //set up map options
        $("#map").mapmarker({
            zoom    : 14,
            center  : 'Covent Garden London',
            markers : myMarkers
        });
            });
            e.preventDefault();
    
            $('.modal-close').on('click', function(e) {
                modal.removeClass('modal-active').fadeOut(400, function(){
                    mod.animate({ opacity: 1 }, 400);
                });
                e.preventDefault();
            });
        });

         $("#pfaculty").on('change', function(){
            var pfaculty = $("#pfaculty").val();
            if (pfaculty == 'sciences') {
                html =  '<option>Mathematic</option><option>Computer Sciences</option><option>Applied and Environmental Biology</option><option>Physics</option><option>Medical Laboratory Science</option><option>Chemistry</option>';
                $("#pdepartment").html(html);
            }

            else if (pfaculty == 'law') {
                html1 = '<option>Public Law</option><option>Private Property Law</option><option>Business Law</option><option>International Law</option>';
                $("#pdepartment").html(html1);
            }

            else if (pfaculty == 'environmental_science') {
                html2 = '<option>Land Survey</option><option>Estate Management</option><option>Quantity Surveying</option><option>Architecture</option><option>Urban And Regional Planning</option>';
                $("#pdepartment").html(html2);
            }

            else if (pfaculty == 'engineering') {
                html3 = '<option>Petroleum Engineering</option><option>Chemical/petrochemical Engineering</option><option>Civil Engineering</option><option>Agricultural and Environmental Engineering</option><option>Electrical Engineering</option><option>Mechanical Engineering</option><option>Marine Engineering</option>';
                $("#pdepartment").html(html3);
            }

            else if (pfaculty == 'agriculture') {
                html4 = '<option>Animal Science</option><option>Forestry And Environment</option><option>Food Science And Technology</option><option>Home Science And Management</option><option>Fisheries</option><option>Crop/soil Science</option><option>Agricultural Economics And Extension</option>';
                $("#pdepartment").html(html4);
            }

            else if (pfaculty == 'education') {
                html5 = '<option>Science And Technical Education</option><option>Educational Foundations</option><option>Business Education</option>';
                $("#pdepartment").html(html5);
            }

            else if (pfaculty == 'management_science') {
                html6 = '<option>Office And Information Management</option><option>Marketing</option><option>Management</option><option>Secretarial Administration</option><option>Mass Communication</option><option>Banking And Finance</option><option>Accountancy</option>';
                $("#pdepartment").html(html6);
            }
            
            else{
               
                
            }

        })
        
});


//Pace holder
$('input, textarea').placeholder(); 