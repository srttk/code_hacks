<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
<script type="text/javascript" src="jquery.js"></script>
<input type="text" />
<select id="level1" size="5">
	<!--  -->

		<!--  -->
</select>
<select id="level2" size="5">'
		<!--  -->
		<!--  -->
</select>
<select id="level3" size="5">
	<!--  -->
	<!--  -->
</select>
<select id="level4" size="5">
	<!--  -->
	<!--  -->
</select>

<script type="text/javascript">
	<?php
mysql_connect('localhost','root','');
mysql_select_db('b2b');

$result=mysql_query("select category_id,category_name,category_parent_id from category_tbl");

while($data=mysql_fetch_assoc($result)){

	$cat_data[]=$data;
}

?>
var cats=<?php echo json_encode($cat_data); ?>;


		
$(document).ready(function(){

	//Level 1
	var level1_data="";
	for(i=0;i<cats.length;i++){
		if(cats[i].category_parent_id==0){
			//console.log(cats[i].category_name);
			level1_data=level1_data+'<option class="level1-opt" value="'+cats[i].category_id+'" data-catid="'+cats[i].category_id+'">'+cats[i].category_name+'</option>';
		}
		
	}
	$("#level1").html(level1_data);
	//
	 $("#level2").hide();
	 $("#level3").hide();
	 $("#level4").hide();
	//

	//Level 2
	$('#level1').click(function(){
	var level1_parent=$(this).val();
	console.log(level1_parent);
		no_of_l2=0;
			var level2_data="";
			for(ia=0;ia<cats.length;ia++){
				if(cats[ia].category_parent_id==level1_parent){
					level2_data=level2_data+'<option value="'+cats[ia].category_id+'"  class="level2-opt" data-catid="'+cats[ia].category_id+'">'+cats[ia].category_name+'</option>';
					no_of_l2++;
				}
			}
			level2_data=$.parseHTML(level2_data);
			$("#level2").html(level2_data);
		//
		console.log("No of items"+no_of_l2);
		if(no_of_l2==0){
		$("#level2").hide();	
		}else{
			$("#level2").show();
		}
		$("#level3").hide();
		$("#level4").hide();
		
	});

	//

	//Level 3
	$("#level2").click(function(){
		var level2_parent=$(this).val();

		no_of_l3=0;
		var level3_data="";
			for(ib=0;ib<cats.length;ib++){
				if(cats[ib].category_parent_id==level2_parent){
					level3_data=level3_data+'<option value="'+cats[ib].category_id+'"  class="level2-opt" data-catid="'+cats[ib].category_id+'">'+cats[ib].category_name+'</option>';
					no_of_l3++;
				}
			}
			level3_data=$.parseHTML(level3_data);
			$("#level3").html(level3_data);
		//
		console.log("No of leve 3:"+no_of_l3);
		if(no_of_l3>0){
		$("#level3").show();	
		}else{$("#level3").hide()}
		$("#level4").hide();
		
	});
	//

	$("#level3").click(function(){
		var level3_parent=$(this).val();
		no_of_l4=0;
		var level4_data="";
			for(ic=0;ic<cats.length;ic++){
				if(cats[ic].category_parent_id==level3_parent){
					level4_data=level4_data+'<option value="'+cats[ic].category_id+'"  class="level2-opt" data-catid="'+cats[ic].category_id+'">'+cats[ic].category_name+'</option>';
					no_of_l4++;
				}
			}
			level4_data=$.parseHTML(level4_data);
			$("#level4").html(level4_data);
		//
		if(no_of_l4>0){
			$("#level4").show();	
		}else{$("#level4").hide();}
		
	});

});

</script>
</body>
</html>