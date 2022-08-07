<?php include "template/header.php"; ?>
<div id="isi2" class='isi isi2'>
    eeeee
</div>
<div id="isi3" class='isi isi3'>
    iiiiiiii
</div>
<div id="isi4" class='isi isi4'>
    ooooooooo

    <swiper>
        <div onclick="movesection(1)" onmouseenter="tempactive(1)" onmouseleave="tempdeactive()" class="pining pining1 pining_active onpin">
        </div>
        <div onclick="movesection(2)" onmouseenter="tempactive(2)" onmouseleave="tempdeactive()" class="pining pining2">
        </div>
        <div onclick="movesection(3)" onmouseenter="tempactive(3)" onmouseleave="tempdeactive()" class="pining pining3">
        </div>
        <div onclick="movesection(4)" onmouseenter="tempactive(4)" onmouseleave="tempdeactive()" class="pining pining4">
        </div>
        <div onclick="movesection(5)" onmouseenter="tempactive(5)" onmouseleave="tempdeactive()" class="pining pining5">
        </div>
    </swiper>
    <?php include "template/footer.php"; ?>