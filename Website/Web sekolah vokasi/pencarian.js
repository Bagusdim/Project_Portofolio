$(document).redy(function(){
	zebraRows('tr.odd td','odd');
 	$('tbody tr').hover(function(){
 	 $(this).find('td').addClass('hovered');
 }, function(){
 	$(this).find('td').removeClass('hovered');
});
 $('tbody tr').addClass('visible');
 $('#search').show();
 $('#filter').keyup(function(event){
 if (event.keyCode == 27 || $(this).val()==''){
 		$(this.val('');
 	$('tbody tr').removeClass('visible').show().addClass('visible');	
 }
 else{
 	filter('tbody tr',$(this).val());
 }
 	$('visible td').removeClass('odd');
 	zebraRows('visible:even td','odd');
});
 $('thead th').each(function(column){
 	$(this).addClass('sortable')
 		.click(function(){
 			var findSortKey = function($cell){
 				return $cell.find('.sort-key').text().toUpperCase()+''+$cell.text().toUpperCase();
 			};
 			
 		
 
