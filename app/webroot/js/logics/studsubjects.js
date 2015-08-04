$(document).ready(function(){



//student select box 
$.ajax({
    url : "studsubject/getid",
    data : {},
    type : 'POST',
    dataType : 'json',
    success : function(sid)	{

    $('#studentsid').empty();

    for(i=0; i<sid.Data.length; i++){
      
      $('#studentsid').append($("<option></option>")
            .attr("value",sid.Data[i].Student.id)
            .text(sid.Data[i].Student.fullname));


    }

    }
    
});

//subject select box 
$.ajax({
    url : "studsubject/get_subname",
    data : {},
    type : 'POST',
    dataType : 'json',
    success : function(ssub)	{

    $('#subjectsname').empty();

    for(i=0; i<ssub.Data.length; i++){
      
      $('#subjectsname').append($("<option></option>")
            .attr("value",ssub.Data[i].Subject.name)
            .text(ssub.Data[i].Subject.name));


    }

    }
    
});



getstudsubject();

$("#btn_std_subjects").bind("click",function() {
	  var studentsid =$('#studentsid').val();
	  var subjectsname = $('#subjectsname').val();

	  $.ajax({
       url :"studsubject/save_studsubjects",
       data: {Studentsid:studentsid,Subjectsname:subjectsname},
       type:'POST',
       success: function(){
       	alert("Save complete");
       	getstudsubject();


      $('#studentsid').val('');
      $('#subjectsname').val('');

       }

	  });
});


function getstudsubject(){

$("#studsub_table > tbody").html("");
$.ajax({
      url : "studsubject/get_studsubject",
      data :{},
      type : 'GET',
      dataType : 'json',
      success : function(sub){
        
    
      for(i =0; i<sub.Data.length; i++){
       
       var str = '<tr class="active">';

       str += '<td>'+sub.Data[i].Students_subject.Studentsid+'</td>';
       str += '<td>'+sub.Data[i].Students_subject.Subjectsname+'</td>';
       //str += '<td>'+sub.Data[i].Students_subject.spendhour+'</td>';
       //str += '<td>'+sub.Data[i].Students_subject.revisionhour+'</td>';

       str +='<tr>';
       $("#studsub_table").find('tbody').append(str);

      }
      }

});

}





	
});