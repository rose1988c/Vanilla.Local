<?php
$strTemplate = "function dorule() SCORE_Lowest=@{{SCORE_Lowest}};SCORE_Lowest_msg=@{{SCORE_Lowest_msg}};SCORE_Min=@{{SCORE_Min}};SCORE_Min_msg=@{{SCORE_Min_msg}};SCORE_MaX=@{{SCORE_MaX}};SCORE_MaX_msg=@{{SCORE_MaX_msg}};IP_Max=@{{IP_Max}};IP_Max_msg=@{{IP_Max_msg}};ret=0;retmsg='';if score<SCORE_Lowest then ret=1;retmsg=SCORE_Lowest_msg;elseif score<SCORE_Min then ret=1;retmsg=SCORE_Min_msg;elseif score>SCORE_MaX then ret=1;retmsg=SCORE_MaX_msg;elseif string.len(ip)>=IP_Max and string.find(table_pips,ip) then ret=1;retmsg=IP_Max_msg;end return ret,retmsg;end;";

$str = "function dorule() SCORE_Lowest=-4000;SCORE_Lowest_msg='DOWN|【您的游戏积分过低，大于-4000分才能坐下，请购买积分卡道具后再进入房间。】';SCORE_Min=100;SCORE_Min_msg='BYCD|【您的游戏积分过低，大于100分才能坐下，请购买积分卡道具后再进入房间。】';SCORE_MaX=200000;SCORE_MaX_msg='【您的游戏积分高于20万分，请到更高级张分房间进行游戏。】';IP_Max=1;IP_Max_msg='【同桌相同ip限制】';ret=0;retmsg='';if score<SCORE_Lowest then ret=1;retmsg=SCORE_Lowest_msg;elseif score<SCORE_Min then ret=1;retmsg=SCORE_Min_msg;elseif score>SCORE_MaX then ret=1;retmsg=SCORE_MaX_msg;elseif string.len(ip)>=IP_Max and string.find(table_pips,ip) then ret=1;retmsg=IP_Max_msg;end return ret,retmsg;end;";

include ('analysisTemplate.php');

echo '<pre>';
print_r(analysisTemplate::diff($str, $strTemplate));
echo '</pre>';

echo '<pre>';
print_r(analysisTemplate::analysis($str));
echo '</pre>';

die();









