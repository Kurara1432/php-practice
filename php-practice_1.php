<?php
// Q1 変数と文字列
$name="石倉";
echo '私の名前は「' .$name. '」です。';

// Q2 四則演算
$num=5*4;
echo $num;

echo " \n";

$num=$num/2;
echo $num;

// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');

$now = [date("Y-"),date("m"),date("d"),date("H"),date("i"),date("s")];
var_dump($ima);

echo "現在時刻は、".$now[0]."年".$now[1].'月'.$now[2].'日'.$now[3].'時'.$now[4].'分'.$now[5].'秒です。';

// 👇こっちが正解

date_default_timezone_set('Asia/Tokyo');

$now = date("Y年m月d日 H時i分s秒");
// Y-m-d H:i:s 

echo "現在時刻は、".$now."です。";

// Q4 条件分岐-1 if文
$device = 'mac';

if($device === "windows"|| $device === "mac"){
    echo '使用OSは、'.$device.'です。';
}else{
    echo 'どちらでもありません。';
}


// Q5 条件分岐-2 三項演算子
$age = 17;
$kadai = ($age >= 18)? '成人です。' : '未成年です。' ;

echo $kadai;

// Q6 配列
$kanto=["茨城県","群馬県","埼玉県","栃木県","千葉県","東京都","神奈川県"];

echo "$kanto[3]と$kanto[4]は関東地方の都道府県です。";

// Q7 連想配列-1
$kanto=["茨城県" => "水戸市","群馬県" => "前橋市","埼玉県" => "さいたま市","栃木県" => "宇都宮市","千葉県" => "千葉市","東京都" => "新宿区","神奈川県" => "横浜市"];

foreach ($kanto as $kan => $kadai) {
    echo "$kadai\n";
}

// Q8 連想配列-2
$kanto=["茨城県" => "水戸市","群馬県" => "前橋市","埼玉県" => "さいたま市","栃木県" => "宇都宮市","千葉県" => "千葉市","東京都" => "新宿区","神奈川県" => "横浜市"];

foreach ($kanto as $kan => $kadai) {
    if($kan=="埼玉県"){
    echo "$kan"."の県庁所在地は、"."$kadai"."です。";
    }
}

// Q9 連想配列-3
$kanto=["茨城県" => "水戸市","群馬県" => "前橋市","埼玉県" => "さいたま市","栃木県" => "宇都宮市","千葉県" => "千葉市","東京都" => "新宿区","神奈川県" => "横浜市"];

$kanto["北海道"]="札幌市";
$kanto["石川県"]="金沢市";

$seikai=["茨城県" => "水戸市","群馬県" => "前橋市","埼玉県" => "さいたま市","栃木県" => "宇都宮市","千葉県" => "千葉市","東京都" => "新宿区","神奈川県" => "横浜市"];

foreach ($kanto as $kan => $kadai) {    if($kanto==$seikai){
    echo "$kan"."の県庁所在地は、"."$kadai"."です。"."\n";
    }else{
        echo "$kan"."の県庁所在地は、"."$kadai"."です。"."\n";
    }
}

// 👇

$kanto=["茨城県" => "水戸市","群馬県" => "前橋市","埼玉県" => "さいたま市","栃木県" => "宇都宮市","千葉県" => "千葉市","東京都" => "新宿区","神奈川県" => "横浜市"];

$kanto["北海道"]="札幌市";
$kanto["石川県"]="金沢市";

$seikai=["茨城県" => "水戸市","群馬県" => "前橋市","埼玉県" => "さいたま市","栃木県" => "宇都宮市","千葉県" => "千葉市","東京都" => "新宿区","神奈川県" => "横浜市"];

foreach ($kanto as $ken => $si) {
    if (array_key_exists($ken, $seikai)) {
        echo $ken . 'の県庁所在地は、' . $si . 'です。' . "\n";
    }else{
        echo $ken . 'は関東地方ではありません。'."\n";
    }
}

// Q10 関数-1
function yobi($name){
    return $name.'さん、こんにちは。'."\n";
}

echo yobi('田中');
echo yobi("佐藤");

// Q11 関数-2
function calcTaxInPrice ($price){
    $taxInPrice=$price*1.1;
    return $price.'円の商品の税込価格は'."$taxInPrice".'円です。';
}

echo calcTaxInPrice(1000);

// Q12 関数とif文
function distinguishNum($num){
    if($num%2==0){
        return  $num.'は偶数です。'."\n";
    }else{
        return "$num".'は奇数です。'."\n";
    }
}
echo distinguishNum(0);
echo distinguishNum(1);
echo distinguishNum(2);

// Q13 関数とswitch文
function evaluateGrade($score){
    switch($score){
        case 'A':
        case 'B':    
        return '合格です。'."\n";
        break;

    case 'C':
        return '合格ですが追加課題があります。'."\n";
        break;

    case 'D':
        return '不合格です。'."\n";
        break;

    default:
        return '判定不明です。講師に問い合わせてください。'."\n";
        break;
    }
}

echo evaluateGrade('A');
echo evaluateGrade('B');
echo evaluateGrade('C');
echo evaluateGrade('D');
echo evaluateGrade(1);
echo evaluateGrade('ああああ');
// 課題では二つですが、心配で全パターンやりました
?>