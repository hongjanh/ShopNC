<?php
$menu[1]['id']="";
$menu[1]['url']="/member/own_main.php";
$menu[1]['login']="0";
$menu[1]['blank']="0";
$menu[1]['name']="{langHeadHello}{get_login_name}";
$menu[2]['id']="";
$menu[2]['url']="/home/member.php?action=login&forward={refer_url}";
$menu[2]['login']="-1";
$menu[2]['blank']="0";
$menu[2]['name']="[{langHeadPleaseLogin}]";
$menu[3]['id']="";
$menu[3]['url']="/home/member.php?action=regist";
$menu[3]['login']="-1";
$menu[3]['blank']="0";
$menu[3]['name']="[{langHeadFreeReg}]";
$menu[4]['id']="";
$menu[4]['url']="/member/own_message.php";
$menu[4]['login']="0";
$menu[4]['blank']="1";
$menu[4]['name']="{langHeadInnerMessage}";
$menu[5]['id']="";
$menu[5]['url']="/member/own_collection.php?genre=store";
$menu[5]['login']="0";
$menu[5]['blank']="1";
$menu[5]['name']="{langHeadCollection}";
$menu[6]['id']="";
$menu[6]['url']="/home/product.php?action=search";
$menu[6]['login']="0";
$menu[6]['blank']="1";
$menu[6]['name']="{langHeadSuperSeach}";
$menu[7]['id']="";
$menu[7]['url']="/home/member.php?action=logout&refer_url={refer_url}";
$menu[7]['login']="1";
$menu[7]['blank']="0";
$menu[7]['name']="[{langHeadOut}]";
?>