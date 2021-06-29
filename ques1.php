<?php
$file=fopen("file1.txt","r");
$cnt=readfile("file1.txt");
echo "<br>";
$str=file_get_contents("file1.txt");
$vowels=0;
$conso=0;
$digits=0;
$special=0;
$str=strtolower($str);
for($i=0;$i<strlen($str);$i++)
{
    if($str[$i]=='a'||$str[$i]=='e'||$str[$i]=='i'||$str[$i]=='o'||$str[$i]=='u')
    {
        $vowels++;
    }
    else if($str[$i]>='a'&&$str[$i]<='z')
    {
        $conso++;
    }
    else if($str[$i]>='A'&&$str[$i]<='Z')
    {
        $conso++;
    }
    else if($str[$i]>='0'&&$str[$i]<='9')
    {
        $digits++;
    }
    else
    {
        $special++;
    }
}
    $line=count(file("file1.txt"));
    $size=filesize("file1.txt");
    $word=str_word_count($str);
    $chars=mb_strlen($str);
    echo "Number of lines: $line<br>";
    echo "Number of words: $word<br>";
    echo "Number of charecters: $chars<br>";
    echo "Number of vowels: $vowels<br>";
    echo "Number of consonents: $conso<br>";
    echo "Number of digits: $digits<br>";
    echo "Number of special charecters: $special<br>";
    echo "File size is: $size<br>";
    fclose($file);
?>