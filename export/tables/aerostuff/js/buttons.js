function SelectingAll() {
    if ( document.getElementById("sel-all-btn2").classList.contains('btn-success') ) {
      press_select_all2 = true;
      $('#windturbine.checkbox').iCheck('check'); 
      document.getElementById("sel-all-btn2").classList.remove('btn-success');    
      document.getElementById("sel-all-btn2").classList.add('btn-danger');
      toggleTextOfButton("sel-all-btn2");
    }else{
      press_deselect_all2 = true;
      $('#windturbine.checkbox').iCheck('uncheck'); 
      document.getElementById("sel-all-btn2").classList.remove('btn-danger');    
      document.getElementById("sel-all-btn2").classList.add('btn-success');
      toggleTextOfButton("sel-all-btn2");
    }
}

function toggleTextOfButton(button_id)  {
   var text = document.getElementById(button_id).childNodes[0].nodeValue;
   text = text == "Select All" ? "Unselect All" : "Select All";
   document.getElementById(button_id).childNodes[0].nodeValue = text;
}
