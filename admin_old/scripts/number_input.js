/* 
 * Information Technology Center
 Created on : Sep 24, 2016, 8:56:54 PM
 Author     : Nattapong  Kothong
 */

function validateQty(el, evt) {
   var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode != 45 && charCode != 8 && (charCode != 46) && (charCode < 48 || charCode > 57))
        return false;
    if (charCode == 46) {
        if ((el.value) && (el.value.indexOf('.') >= 0))
            return false;
        else
            return true;
    }
    return true;
    var charCode = (evt.which) ? evt.which : event.keyCode;
    var number = evt.value.split('.');
    if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
};

/*
<!--<input type="text" onkeypress='return validateQty(this,event);'>-->
*/