function onDelete(m,a,id){
	if(confirm("Are you sure delete this record?")){
		window.location.href="?m="+m+"&a="+a+"&id="+id;
	}
}
// $(document).ready(function(){
// 	$('#search').keyup(function(){
// 		var value = $(this).val().toLowerCase();
// 		$('#tblListing tr').filter(function(){
// 			$(this).toggle($(this).text().toLowerCase().indexOf(value)!=-1);
// 		});
// 	});
// });