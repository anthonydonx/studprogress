$(document).ready(function(){

//student select box 
$.ajax({
    url : "studtopic/getids",
    data : {},
    type : 'POST',
    dataType : 'json',
    success : function(stid)	{

    $('#studentsid').empty();

    for(i=0; i<stid.Data.length; i++){
      
      $('#studentsid').append($("<option></option>")
            .attr("value",stid.Data[i].Student.id)
            .text(stid.Data[i].Student.fullname));

    }

    }

});



//titlet select box 
$.ajax({
    url : "studtopic/get_title",
    data : {},
    type : 'POST',
    dataType : 'json',
    success : function(sti)	{

    $('#title').empty();

    for(i=0; i<sti.Data.length; i++){
      
      $('#title').append($("<option></option>")
            .attr("value",sti.Data[i].Topic.title)
            .text(sti.Data[i].Topic.title));

    }

    }
    
});



getstud_topics();

$("#btn_std_topics").bind("click",function() {

	  var studentsid =$('#studentsid').val();
	  var title = $('#title').val();
	  var spendhours = $('#spendhours').val();
    var revisionhours = $('#revisionhours').val();
 

	  $.ajax({
       url :"studtopic/save_studtopic",
       data: {Studentsid:studentsid,Topicstitle:title,spendhours:spendhours,revisionhours:revisionhours},
       type:'POST',
       success: function(){
       	alert("Save complete");
       	getstud_topics();


      $('#studentsid').val('');
      $('#title').val('');
     

       }

	  });
});


function getstud_topics(){

$("#studtopic_table > tbody").html("");
$.ajax({
      url : "studtopic/get_studtopic",
      data :{},
      type : 'GET',
      dataType : 'json',
      success : function(tops){

      for(i =0; i<tops.Data.length; i++){
       
       var str = '<tr class="active">';

       str += '<td>'+tops.Data[i].Students_topic.Studentsid+'</td>';
       str += '<td>'+tops.Data[i].Students_topic.Topicstitle+'</td>';
       str += '<td>'+tops.Data[i].Students_topic.spendhours+'</td>';
       str += '<td>'+tops.Data[i].Students_topic.revisionhours+'</td>';

       str +='<tr>';
       $("#studtopic_table").find('tbody').append(str);

      }
      }

});

}





	
});