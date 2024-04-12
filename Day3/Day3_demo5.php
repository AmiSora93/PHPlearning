<?php
// Đếm số lượng từ trong câu “Trường Đại học Hà Nội, Học viện công nghệ thông tin – Hita”
// Thay thế từ “học” bằng từ “***”

$gthieu = "truong toi co 5 can";
echo 'an gi '.str_word_count($gthieu,0);
echo substr_replace($gthieu,'***',0);


?>