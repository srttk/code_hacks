
<?php
mysql_connect('localhost','root','');
mysql_select_db('b2b');

$result=mysql_query("select * from category_tbl");

while($data=mysql_fetch_assoc($result)){

	$cat_data[]=$data;
}

var_dump($cat_data);
echo "<hr>";
foreach ($cat_data as $main) {
	echo "<pre>0{";
	if($main['category_parent_id']==0){
	echo "{id:".$main['category_id'].",name:".$main['category_name']."}";
	}
	echo "</pre>";
}

echo json_encode($cat_data);

foreach ($cat_data as $cat1) {
	if($cat1['category_parent_id']!=0){
		$c_cat=$cat1['category_id'];
		foreach ($cat_data as $cat2) {
			if($cat2['category_id']==$c_cat){
			echo "<pre>".$cat2['category_parent_id']." {id:".$cat2['category_id'].",name:".$cat2['category_name']."}</pre>";
			}
		}
	}
	
}

?>