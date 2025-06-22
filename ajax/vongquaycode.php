<?php require('../TMQ/function.php'); ?>

<?
if($_POST[type] == 'so20k'){
$dulieutile = $db->query("SELECT * FROM `HK_tilevongquaycode`")->fetch();
$phanqua = array('20k' => $dulieutile['20k'], '40k' => $dulieutile['40k'], '50k' => $dulieutile['50k'], '100k' => $dulieutile['100k'], '200k' => $dulieutile['200k'], '500k' => $dulieutile['500k'], '0k' => $dulieutile['0k'], 'random' => $dulieutile['random']);

$mangphanqua = array();
foreach ($phanqua as $phanqua=>$value)
{
    $mangphanqua = array_merge($mangphanqua, array_fill(0, $value, $phanqua));
}

$ketqua = ($mangphanqua[array_rand($mangphanqua)]);



if($ketqua == '20k'){
$pos = 1;
$name = "Code AK47 Tình Yêu";
}elseif($ketqua == '40k'){
$pos = 2;
$name = "Code MP40 Sấm Sét";
}elseif($ketqua == '50k'){
$pos = 3;
$name = "Code Ngẫu Nhiên";
}elseif($ketqua == '100k'){
$pos = 4;
$name = "Code Scar Thủy Thần";
}elseif($ketqua == 'random'){
$pos = 5;
$name = "Code Scar TiTan";
}elseif($ketqua == '500k'){
$pos = 6;
$name = "Code MP40 Hoàng Kim";
}elseif($ketqua == '0k'){
$pos = 7;
$name = "Code Mp40 Ma Mị";
}elseif($ketqua == '200k'){
$pos = 8;
$name = "Scar Thủy Thần";

$therandom = array('20k' => 20, '40k' => 20, '50k' => 20, '100k' => 20, '200k' => 20, '500k' => 0);

$mangphanqua2 = array();
foreach ($therandom as $therandom=>$value2)
{
    $mangphanqua2 = array_merge($mangphanqua2, array_fill(0, $value2, $therandom));
}
$loai = ($mangphanqua2[array_rand($mangphanqua2)]);
}



$check = $db->query("SELECT * FROM `danhsachcode` WHERE `loai` = '$loai' OR `loai` = '$loai ' ")->fetch();


	if(empty($uid)){
 $status = 'LOGIN'; // false
 $msg = 'Đăng nhập đi, xem json cái lol.';

$kimhungg3 = array('msg' => $msg,'status' => $status);
echo json_encode($kimhungg3);
}
elseif($TMQ['cash'] < 20000){
    $status = 'ERROR'; // false
    $msg = 'Số tiền không đủ để thực hiện giao dịch, vui lòng nạp thêm tiền vào tài khoản.';
$kimhungg33 = array('msg' => $msg,'status' => $status);
echo json_encode($kimhungg33);
}
elseif($check['id'] == null){//lệnh này nếu kho thẻ hết thì auto quay trật
     $saugd = $TMQ['cash'] - 20000;
   $status = '1';
   $ketqua123 = 'success';
   $db->query("UPDATE `TMQ_user` SET `cash` = `cash` - '20000' WHERE `uid` = '". $uid ."'");

$db->exec("INSERT INTO `CVH_quaycode` SET
    `nguoiquay` = '".$uid."',
    `loai` = '0',
    `code` = '0',
    `hsd` = '0',
    `date` = '". date('H:i:s d-m-Y') ."',
    `time` = '".time()."'
    ");

$db->exec("INSERT INTO `TMQ_biendoi` SET
    `uid` = '$uid',
    `noidung` = ' Quay vòng quay thẻ zing với giá 20.000<sup>đ</sup>',
    `truocgd` = '".$TMQ['cash']."',
    `saugd` = '$saugd',
    `date` = '".date('H:i:s d-m-Y')."',
    `time` = '". time() ."'
    ");


$arr = array('status' => $status,'pos' => 4, 'name' => 'Bạn Hơi Đen');
$kimhungg = array('msg' => $arr);
echo json_encode($kimhungg);
}
else{

    $saugd = $TMQ['cash'] - 20000;
   $status = '1';
   $ketqua123 = 'success';
   $db->query("UPDATE `TMQ_user` SET `cash` = `cash` - '20000' WHERE `uid` = '". $uid ."'");
   $db->query("DELETE FROM `danhsachcode` WHERE `id` = $check[id] ");
$db->exec("INSERT INTO `CVH_quaycode` SET
    `nguoiquay` = '".$uid."',
    `loai` = '".$check[loai]."',
    `code` = '".$check[code]."',
    `hsd` = '".$check."',
    `date` = '". date('H:i:s d-m-Y') ."',
    `time` = '".time()."'
    ");

$db->exec("INSERT INTO `TMQ_biendoi` SET
    `uid` = '$uid',
    `noidung` = ' Quay vòng quay code với giá 20.000<sup>đ</sup>',
    `truocgd` = '".$TMQ['cash']."',
    `saugd` = '$saugd',
    `date` = '".date('H:i:s d-m-Y')."',
    `time` = '". time() ."'
    ");


$arr = array('status' => $status,'pos' => $pos, 'name' => $name);
$kimhungg = array('msg' => $arr);
echo json_encode($kimhungg);
}


}