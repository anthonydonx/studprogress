$(document).ready(function(){
//Get all students
getStudents();


$( "#studentsid" ).change(function() {
  getSelectedSubject($('#studentsid').val());
});

$("#subject").change(function(){
  gettitleRelated($('#subject').val());
});


$("#btn_std_topics").bind("click",function(){

var studentname = $('#studentsid').val();
var subject = $('#subject').val();
var topic = $('#topic').val();
var spendhours = $('#spendhours').val();
var revisionhours = $('#revisionhours').val();

$.ajax({
   url : "updatehours/save_studtopic",
   data : {},
   type : 'POST',
   success : function(data){

     alert("Save completed");

     $('#spendhours').val('');
     $('#revisionhours').val('');


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
    }
 getSelectedSubject($('#studentsid').val());
    }

});   
}


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

function gettitleRelated(Subjectname){
$.ajax({
    url : "topic/getRelatedTopics",
    data : {selectedSubject:Subjectname},
    type : 'POST',
    dataType : 'json',
    success : function(da)  {

    $('#topic').empty();

    for(i=0; i<da.Data.length; i++){
      
     $('#topic').append($("<option></option>")   
         .attr("value",da.Data[i].Topic.title)
         .text(da.Data[i].Topic.title)); 
    }

    }

});


}



});