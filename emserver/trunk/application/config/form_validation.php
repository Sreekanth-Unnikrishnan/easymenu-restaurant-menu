<?php
$config = array(
	'menus/newmenu'=>array(
						array(
							'field'=>'menulabel',
							'label'=>'lang:msg_Menulabel',
							'rules'=>'required'
						),
						array(
							'field'=>'menudescr',
							'label'=>'lang:msg_Menudescr',
							'rules'=>''
						),
						array(
							'field'=>'pricelabel',
							'label'=>'lang:msg_Price',
							'rules'=>'decimal'
						),
						array(
							'field'=>'radiov',
							'label'=>'Visibility',
							'rules'=>'required'							
						),
						array(
							'field'=>'radiot',
							'label'=>'Type',
							'rules'=>'required'							
						),
						array(
							'field'=>'radiofb',
							'label'=>'Food or Drinks',
							'rules'=>'required'							
						),
						array(
							'field'=>'idMenu',
							'label'=>'idMenus',
							'rules'=>'required'							
						)
					),
	'categories/newcategory'=>array(
						array(
							'field'=>'categorylabel',
							'label'=>'lang:msg_Categorylabel',
							'rules'=>'required'
						),
						array(
							'field'=>'categorydescr',
							'label'=>'lang:msg_Categorydescr',
							'rules'=>''
						),
						array(
							'field'=>'idCategory',
							'label'=>'idCategories',
							'rules'=>'required'							
						)
	
	),
	'upload/domediaupload'=>array(
						array(
							'field'=>'filelabel',
							'label'=>'lang:msg_Filelabel',
							'rules'=>'required'
						)
	),
	'items/newitem'=>array(
						array(
							'field'=>'itemlabel',
							'label'=>'lang:msg_Itemlabel',
							'rules'=>'required'
						),
						array(
							'field'=>'itemdescr',
							'label'=>'lang:msg_Itemdescr',
							'rules'=>''
						),
						array(
							'field'=>'itemprice',
							'label'=>'lang:msg_Price',
							'rules'=>''
						),
						array(
							'field'=>'idItem',
							'label'=>'iditem',
							'rules'=>''
						),
						array(
							'field'=>'idImages',
							'label'=>'idImages',
							'rules'=>''
						)
	),
	'tables/newtable'=>array(
						array(
							'field'=>'tablelabel',
							'label'=>'lang:msg_Tablelabel',
							'rules'=>'required'
						),
						array(
							'field'=>'idTables',
							'label'=>'idTables',
							'rules'=>''
						)
	),
	'settings/save'=>array(
						array(
							'field'=>'lang',
							'label'=>'lang:msg_Servuilang',
							'rules'=>'required'
						),
						array(
							'field'=>'maxitems',
							'label'=>'lang:msg_Maxitems',
							'rules'=>''
						),
						array(
							'field'=>'maxrounds',
							'label'=>'lang:msg_Maxrounds',
							'rules'=>''
						),
						array(
							'field'=>'mininterval',
							'label'=>'lang:msg_Mininterval',
							'rules'=>''
						),
						array(
							'field'=>'radiom',
							'label'=>'lang:msg_Restmode',
							'rules'=>''
						),
						array(
							'field'=>'radiodisp',
							'label'=>'lang:msg_Displaymode',
							'rules'=>''
						),
						array(
							'field'=>'currency',
							'label'=>'lang:msg_Currency',
							'rules'=>'required'
						),
						array(
							'field'=>'priceadults',
							'label'=>'lang:msg_PriceAdults',
							'rules'=>'required'
						),
						array(
							'field'=>'pricechildren',
							'label'=>'lang:msg_PriceChildren',
							'rules'=>'required'
						)
	),
	'newuser'=>array(
						array(
							'field'=>'name',
							'label'=>'lang:msg_Name',
							'rules'=>''
						),	
						array(
							'field'=>'surname',
							'label'=>'lang:msg_Surname',
							'rules'=>''
						),
						array(
							'field'=>'email',
							'label'=>'lang:msg_Email',
							'rules'=>''
						),
						array(
							'field'=>'username',
							'label'=>'lang:msg_Username',
							'rules'=>'required'
						),
						array(
							'field'=>'role',
							'label'=>'lang:msg_Role',
							'rules'=>'required'
						),
						array(
							'field'=>'password1',
							'label'=>'lang:msg_Password1',
							'rules'=>'required|matches[password2]'
						),
						array(
							'field'=>'password2',
							'label'=>'lang:msg_Password2',
							'rules'=>'required'
						),
						array(
							'field'=>'idUser',
							'label'=>'idUsers',
							'rules'=>'required'
						)
				),
	'updateuser'=>array(
						array(
							'field'=>'name',
							'label'=>'lang:msg_Name',
							'rules'=>''
						),	
						array(
							'field'=>'surname',
							'label'=>'lang:msg_Surname',
							'rules'=>''
						),
						array(
							'field'=>'email',
							'label'=>'lang:msg_Email',
							'rules'=>''
						),
						array(
							'field'=>'username',
							'label'=>'lang:msg_Username',
							'rules'=>'required'
						),
						array(
							'field'=>'role',
							'label'=>'lang:msg_Role',
							'rules'=>'required'
						),
						array(
							'field'=>'password1',
							'label'=>'lang:msg_Password1',
							'rules'=>'matches[password2]'
						),
						array(
							'field'=>'password2',
							'label'=>'lang:msg_Password2',
							'rules'=>''
						),
						array(
							'field'=>'idUser',
							'label'=>'idUsers',
							'rules'=>'required'
						)
					)
	);
	
?>