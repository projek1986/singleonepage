  $(document).ready(function () {
     $('input:radio[name="ostow"]').change(function () {
         
        if ($(this).val() == '1') {
            $('#osTow').show();
            $('#hotel1').attr("disabled", "disabled");
            $('#hotel3').attr("disabled", "disabled");
            $('#inputosTow').attr("required", "required");
        }
         else {
            $('#osTow').hide();
            $('#hotel1').removeAttr("disabled");
            $('#hotel3').removeAttr("disabled");
            $('#inputosTow').removeAttr('required');
        }

    });
    
    $('input:radio[name="pokoje"]').change(function () {
         
        if ($(this).val() == '1') {
            $('#lokator').show();
         
            $("#inputwspollokator").attr("required", "required");
        }
         else {
            $('#lokator').hide();
             $("#inputwspollokator").removeAttr('required');
        }

    });
    
    $('input:checkbox[name="date_12_13"]').change(function () {
         
        if ($(this).prop("checked")) { 
            $('#hotels').show();
            $("#hotel1").attr("required", "required");
            
        }else if(!$(this).prop("checked") && !$('input:checkbox[name="date_13_14"]').prop("checked")) {
            $('#hotels').hide();
            $("#hotel1").removeAttr('required');
        }
 
    });
    
    $('input:checkbox[name="date_13_14"]').change(function () {
         
        if ($(this).prop("checked")) { 
            $('#hotels').show();
            $("#hotel1").attr("required", "required");
            
        }else if(!$(this).prop("checked") && !$('input:checkbox[name="date_12_13"]').prop("checked")) {
            $('#hotels').hide();
            $("#hotel1").removeAttr('required');
        }
 
    });
    
    // confirm agree
  $("#inputImie").focus(function(){

      if((!$("#agree").is(':checked'))){

      $("#error_agree").show();

      }else{
          $("#error_agree").hide();
      }
  });

  $("#agree").change(function(){ 
       if($("#agree").is(':checked')){
           $("#error_agree").hide();
       }
  });
  
  
  //alert sau
    $('input:radio[name="sau"]').change(function () {


        if ($('#ptu1').is(':checked') && $(this).val() == '1') {

            $('#alertsau').show();

        } else {

            $('#alertsau').hide();

        }


    });

    $('input:radio[name="ptu"]').change(function () {


        if ($('#ptu1').is(':checked') && $(this).val() == '1') {

            $('#alertsau').show();


        } else {

            $('#alertsau').hide();


        }


    });

//    $('input:radio[name="ptu"]').change(function () {
//
//
//        if ($('#ptu1').is(':checked') && $(this).val() == '1') {
//
//            $('#alertsau').show();
//
//
//        } else {
//
//            $('#alertsau').hide();
//
//
//        }
//
//
//    });

});

  


