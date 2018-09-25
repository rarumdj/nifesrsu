
//   /*
// From JavaScript and Forms Tutorial at dyn-web.com
// Find information and updates at http://www.dyn-web.com/tutorials/forms/
// */

// // removes all option elements in select list 
// // removeGrp (optional) boolean to remove optgroups
// function removeAllOptions(sel, removeGrp) {
//     var len, groups, par;
//     if (removeGrp) {
//         groups = sel.getElementsByTagName('optgroup');
//         len = groups.length;
//         for (var i=len; i; i--) {
//             sel.removeChild( groups[i-1] );
//         }
//     }
    
//     len = sel.options.length;
//     for (var i=len; i; i--) {
//         par = sel.options[i-1].parentNode;
//         par.removeChild( sel.options[i-1] );
//     }
// }

// function appendDataToSelect(sel, obj) {
//     var f = document.createDocumentFragment();
//     var labels = [], group, opts;
    
//     function addOptions(obj) {
//         var f = document.createDocumentFragment();
//         var o;
        
//         for (var i=0, len=obj.text.length; i<len; i++) {
//             o = document.createElement('option');
//             o.appendChild( document.createTextNode( obj.text[i] ) );
            
//             if ( obj.value ) {
//                 o.value = obj.value[i];
//             }
            
//             f.appendChild(o);
//         }
//         return f;
//     }
    
//     if ( obj.text ) {
//         opts = addOptions(obj);
//         f.appendChild(opts);
//     } else {
//         for ( var prop in obj ) {
//             if ( obj.hasOwnProperty(prop) ) {
//                 labels.push(prop);
//             }
//         }
        
//         for (var i=0, len=labels.length; i<len; i++) {
//             group = document.createElement('optgroup');
//             group.label = labels[i];
//             f.appendChild(group);
//             opts = addOptions(obj[ labels[i] ] );
//             group.appendChild(opts);
//         }
//     }
//     sel.appendChild(f);
// }

// // anonymous function assigned to onchange event of controlling select list
// document.forms['mselectForm'].elements['mfaculty'].onchange = function(e) {
//     // name of associated select list
//     var relName = 'mdepartment';
    
//     // reference to associated select list 
//     var relList = this.form.elements[ relName ];
    
//     // get data from object literal based on selection in controlling select list (this.value)
//     var obj = Select_List_Data[ relName ][ this.value ];
    
//     // remove current option elements
//     removeAllOptions(relList, true);
    
//     // call function to add optgroup/option elements
//     // pass reference to associated select list and data for new options
//     appendDataToSelect(relList, obj);
// };

// // object literal holds data for optgroup/option elements
// var Select_List_Data = {
    
//     // name of associated select list
//     'mdepartment': {



        
//        // names match option values in controlling select list
//         agric: {
          
           
//                 text: ['Animal Science', 'Forestry And Environment', 'Food Science And Technology', 'Home Science And Management', 'Fisheries', 'Crop/soil Science', 'Agricultural Economics And Extension']
//         },
//         engr: {
           
//             text: ['Petroleum', 'Mechanical', 'Marine', 'Civil', 'Chemical/petrochemical', 'Agricultural And Environmental', 'Electrical']
//         },
//         envi: {
            
                
//                 text: ['Land Survey', 'Estate Management', 'Quantity Surveying', 'Architecture', 'Urban And Regional Planning']
//         },
        
//         law: {
           
           
//                 text: ['Business Law', 'International Law', 'Private Property Law', 'Public Law']
//         },
//         mgtsci: {
           
//             text: ['Banking and Finance', 'Accountancy', 'Mass Communication', ' Office And Information Management', 'Marketing', 'Management', 'Secretarial Administration']
//         },
//         sci: {
            
                
//                 text: ['Mathematics/computer Science', 'Physics', 'Chemistry', 'Medical Laboratory Science', 'Applied And Environmental Biology']
//         },
        
//         tech: {
            
           
//                 text: ['Science And Technical Education', 'Educational Foundations', 'Business Education']
//         }
//     }
    
// };

// // populate associated select list when page loads
// window.onload = function() {
//     var form = document.forms['mselectForm'];
    
//     // reference to controlling select list
//     var sel = form.elements['mfaculty'];
//     sel.selectedIndex = 0;
    
//     // name of associated select list
//     var relName = 'mdepartment';
//     // reference to associated select list
//     var rel = form.elements[ relName ];
    
//     // get data for associated select list passing its name
//     // and value of selected in controlling select list
//     var data = Select_List_Data[ relName ][ sel.value ];
    
//     // add options to associated select list
//     appendDataToSelect(rel, data);
// };

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

        $("#mfaculty").on('change', function(){
            var mfaculty = $("#mfaculty").val();
            if (mfaculty == 'sciences') {
                html =  '<option>Mathematic</option><option>Computer Sciences</option><option>Applied and Environmental Biology</option><option>Physics</option><option>Medical Laboratory Science</option><option>Chemistry</option>';
                $("#mdepartment").html(html);
            }

            else if (mfaculty == 'law') {
                html1 = '<option>Public Law</option><option>Private Property Law</option><option>Business Law</option><option>International Law</option>';
                $("#mdepartment").html(html1);
            }

            else if (mfaculty == 'environmental_science') {
                html2 = '<option>Land Survey</option><option>Estate Management</option><option>Quantity Surveying</option><option>Architecture</option><option>Urban And Regional Planning</option>';
                $("#mdepartment").html(html2);
            }

            else if (mfaculty == 'engineering') {
                html3 = '<option>Petroleum Engineering</option><option>Chemical/petrochemical Engineering</option><option>Civil Engineering</option><option>Agricultural and Environmental Engineering</option><option>Electrical Engineering</option><option>Mechanical Engineering</option><option>Marine Engineering</option>';
                $("#mdepartment").html(html3);
            }

            else if (mfaculty == 'agriculture') {
                html4 = '<option>Animal Science</option><option>Forestry And Environment</option><option>Food Science And Technology</option><option>Home Science And Management</option><option>Fisheries</option><option>Crop/soil Science</option><option>Agricultural Economics And Extension</option>';
                $("#mdepartment").html(html4);
            }

            else if (mfaculty == 'education') {
                html5 = '<option>Science And Technical Education</option><option>Educational Foundations</option><option>Business Education</option>';
                $("#mdepartment").html(html5);
            }

            else if (mfaculty == 'management_science') {
                html6 = '<option>Office And Information Management</option><option>Marketing</option><option>Management</option><option>Secretarial Administration</option><option>Mass Communication</option><option>Banking And Finance</option><option>Accountancy</option>';
                $("#mdepartment").html(html6);
            }
            
            else{
               
            }

        })
        
});


//Pace holder
$('input, textarea').placeholder(); 