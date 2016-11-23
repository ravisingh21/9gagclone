//form submission to database
$('#form_id').on('submit', function(){
  $.ajax({
    type:"POST"
    url:"/index.php"
    data: $(this).serialize()
    success:function() {

    }
  })
})
//getData from database

function ask(){
  alert("ready")
}
