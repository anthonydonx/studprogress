$(document).ready(function(){
//Get all students
getStudents();


$( "#studentsid" ).change(function() {
  getSelectedSubject($('#studentsid').val());
});

$("#subject").change(function(){
  gettitleRelated($('#subject').val());
});



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
      
      $('#spendhours').val('');
      $('#revisionhours').val('');
     
  gettopictitle($("#studentsid").val());
       }

      });
});

//Student select box 
function getStudents(){
$.ajax({
    url : "student/getStudent",
    data : {},
    type : 'POST',
    dataType : 'json',
    success : function(da)  {

    $('#studentsid').empty();

    for(i=0; i<da.Data.length; i++){
      
     $('#studentsid').append($("<option></option>")   
         .attr("value",da.Data[i].Student.id)
         .text(da.Data[i].Student.fullname)); 

      $('#spendhours').val('');
      $('#revisionhours').val('');


    }
 getSelectedSubject($('#studentsid').val());
    }

});   
}

//subject box
function getSelectedSubject(SelectStudent){
$.ajax({
    url : "studsubject/getselectedidsubject",
    data : {selectedidsubject:SelectStudent},
    type : 'POST',
    dataType : 'json',
    success : function(da)  {

    $('#subject').empty();

    for(i=0; i<da.Data.length; i++){
      
     $('#subject').append($("<option></option>")   
         .attr("value",da.Data[i].Students_subject.Subjectsname)
         .text(da.Data[i].Students_subject.Subjectsname)); 
    }

    gettitleRelated($('#subject').val());
    }

});
}
//title box
function gettitleRelated(Subjectname){
$.ajax({
    url : "topic/getRelatedTopics",
    data : {selectedSubject:Subjectname},
    type : 'POST',
    dataType : 'json',
    success : function(da)  {

    $('#title').empty();

    for(i=0; i<da.Data.length; i++){
      
     $('#title').append($("<option></option>")   
         .attr("value",da.Data[i].Topic.title)
         .text(da.Data[i].Topic.title)); 
    }

   gettopictitle($('#studentsid').val());
    }

});


}



function gettopictitle(get){

$("#studupdate_table > tbody").html("");
$.ajax({
    url :"studtopic/getfolowuptopic",
    data : {selectedid:get},
    type : 'POST',
    dataType : 'json',
    success : function(datas){

     for(i=0; i<datas.Data.length; i++){

     var str = '<tr class="active">';

     str +='<td>'+datas.Data[i].Students_topic.Studentsid+'</td>';
     str += '<td>'+datas.Data[i].Students_topic.Topicstitle+'</td>';
     str += '<td>'+datas.Data[i].Students_topic.spendhours+'</td>';
     str += '<td>'+datas.Data[i].Students_topic.revisionhours+'</td>';

     str +='</tr>'
     $("#studupdate_table").find('tbody').append(str);

            }
          }

       });
    }







});