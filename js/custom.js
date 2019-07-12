// Getting Curent Date.

var date= new Date();

var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

var day = date.getDate();
var month = date.getMonth();
var year = date.getFullYear();
var hour = date.getHours();
var min = date.getMinutes();
var sec = date.getSeconds();


if(min < 10){
  min = "0" + min;
}

//var todaydate = day + '-' + months[month] + '-' + year;
var todaydate = day + '-' + month + '-' + year + ' ' + hour + ':' + min + ':' + sec;
document.getElementById("start-date").value = todaydate;

// Add 5 days for end

var newdate = date.getDate() + 5;

//var enddate = newdate + '-' + months[month] + '-' + year;
var enddate = newdate + '-' + month + '-' + year + ' ' + hour + ':' + min + ':' + sec;

document.getElementById("end-date").value = enddate;


$(document).ready(function(){
  $("#submit").click(function(event){
       $("#myModal-01").modal("hide");
//     event.preventDefault();
     var stddate = $('#start-date').val();
     var enddate = $('#end-date').val();
     if(stddate == '' || enddate == '')
    {
        $('#response').html('<span class="text-danger">All Fields are required</span>');
     }
     else
     {
     $.ajax({
         url: "connection.php",
         method: "post",
         data: $('#submit_form').serialize(),
         beforeSend:function(){
          $('#response').html('<span class="text-info">Loading response...</span>');
         },
         success: function(data){
               $("#myModal2").modal("show");
                          $('#modal-body').fadeIn().html(data);
                          setTimeout(function(){
                               $('#myModal2').fadeOut("slow");
                          }, 3000);
                setTimeout(location.reload.bind(location), 3500);
        }
   });
}
 });
});

