$(document).ready(function(){
 
 $(document).on('click', '.add', function(){
  var html = '';
  html += '<tr>';
  html += '<td><input type="text" name="subject[]" /></td>';
  html += '<td><select name="gred[]"><option value="">Select Gred</option><?php echo fill_unit_select_box($connect); ?></select></td>';
  html += '<td><button type="button" name="remove" class="btn btn-danger">Delete</button></td></tr>';
  $('#dynamic_field').append(html);
 });
 
 $(document).on('click', '.remove', function(){
  $(this).closest('tr').remove();
 });
 
 $('#insert_form').on('submit', function(event){
  event.preventDefault();
  var error = '';
  $('.subject').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter subject at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  
  $('.gred').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Select gred "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  var form_data = $(this).serialize();
  if(error == '')
  {
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     if(data == 'ok')
     {
      $('#dynamic_field').find("tr:gt(0)").remove();
      $('#error').html('<div class="alert alert-success">Item Details Saved</div>');
     }
	 alert(data);
    }
   });
  }
  else
  {
   $('#error').html('<div class="alert alert-danger">'+error+'</div>');
  }
 });
 
});