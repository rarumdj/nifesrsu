/*
From JavaScript and Forms Tutorial at dyn-web.com
Find information and updates at http://www.dyn-web.com/tutorials/forms/
*/

// removes all option elements in select list 
// removeGrp (optional) boolean to remove optgroups
function removeAllOptions(sel, removeGrp) {
    var len, groups, par;
    if (removeGrp) {
        groups = sel.getElementsByTagName('optgroup');
        len = groups.length;
        for (var i=len; i; i--) {
            sel.removeChild( groups[i-1] );
        }
    }
    
    len = sel.options.length;
    for (var i=len; i; i--) {
        par = sel.options[i-1].parentNode;
        par.removeChild( sel.options[i-1] );
    }
}

function appendDataToSelect(sel, obj) {
    var f = document.createDocumentFragment();
    var labels = [], group, opts;
    
    function addOptions(obj) {
        var f = document.createDocumentFragment();
        var o;
        
        for (var i=0, len=obj.text.length; i<len; i++) {
            o = document.createElement('option');
            o.appendChild( document.createTextNode( obj.text[i] ) );
            
            if ( obj.value ) {
                o.value = obj.value[i];
            }
            
            f.appendChild(o);
        }
        return f;
    }
    
    if ( obj.text ) {
        opts = addOptions(obj);
        f.appendChild(opts);
    } else {
        for ( var prop in obj ) {
            if ( obj.hasOwnProperty(prop) ) {
                labels.push(prop);
            }
        }
        
        for (var i=0, len=labels.length; i<len; i++) {
            group = document.createElement('optgroup');
            group.label = labels[i];
            f.appendChild(group);
            opts = addOptions(obj[ labels[i] ] );
            group.appendChild(opts);
        }
    }
    sel.appendChild(f);
}

// anonymous function assigned to onchange event of controlling select list
document.forms['selectForm'].elements['faculty'].onchange = function(e) {
    // name of associated select list
    var relName = 'department';
    
    // reference to associated select list 
    var relList = this.form.elements[ relName ];
    
    // get data from object literal based on selection in controlling select list (this.value)
    var obj = Select_List_Data[ relName ][ this.value ];
    
    // remove current option elements
    removeAllOptions(relList, true);
    
    // call function to add optgroup/option elements
    // pass reference to associated select list and data for new options
    appendDataToSelect(relList, obj);
};

// object literal holds data for optgroup/option elements
var Select_List_Data = {
    
    // name of associated select list
    'department': {



        
       // names match option values in controlling select list
        agric: {
          
           
                text: ['Animal Science', 'Forestry And Environment', 'Food Science And Technology', 'Home Science And Management', 'Fisheries', 'Crop/soil Science', 'Agricultural Economics And Extension']
        },
        engr: {
           
            text: ['Petroleum Engineering', 'Mechanical Engineering', 'Marine Engineering', 'Civil Engineering', 'Chemical/petrochemical Engineering', 'Agricultural And Environmental Engineering', 'Electrical Engineering']
        },
        envi: {
            
                
                text: ['Land Survey', 'Estate Management', 'Quantity Surveying', 'Architecture', 'Urban And Regional Planning']
        },
        
        law: {
           
           
                text: ['Business Law', 'International Law', 'Private Property Law', 'Public Law']
        },
        mgtsci: {
           
            text: ['Banking and Finance', 'Accountancy', 'Mass Communication', ' Office And Information Management', 'Marketing', 'Management', 'Secretarial Administration']
        },
        sci: {
            
                
                text: ['Mathematics', 'Computer Science', 'Physics', 'Chemistry', 'Medical Laboratory Science', 'Applied And Environmental Biology']
        },
        
        tech: {
            
           
                text: ['Science And Technical Education', 'Educational Foundations', 'Business Education']
        }
    }
    
};

// populate associated select list when page loads
window.onload = function() {
    var form = document.forms['selectForm'];
    
    // reference to controlling select list
    var sel = form.elements['faculty'];
    sel.selectedIndex = 0;
    
    // name of associated select list
    var relName = 'department';
    // reference to associated select list
    var rel = form.elements[ relName ];
    
    // get data for associated select list passing its name
    // and value of selected in controlling select list
    var data = Select_List_Data[ relName ][ sel.value ];
    
    // add options to associated select list
    appendDataToSelect(rel, data);
};

