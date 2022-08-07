</div>
<div id="isi5" class="bwd_footing isi isi5">sadsafsa</div>
</div>
<script>
    function movesection(code) {
        $('.pining').removeClass('pining_active onpin');
        $('.pining' + code).addClass('pining_active onpin');
        $('.isi').removeClass('active');
        $('.isi' + code).addClass('active');
        pickme(code);
    }

    function tempactive(code) {
        $('.pining').removeClass('pining_active');
        $('.pining' + code).addClass('pining_active');
    }

    function tempdeactive() {
        $('.pining').removeClass('pining_active');
        $('.pining' + helper).addClass('pining_active');
    }
    var mydiv = document.getElementById("mydiv");
    if (mydiv.addEventListener) {
        mydiv.addEventListener("mousewheel", MouseWheelHandler, false);
        mydiv.addEventListener("DOMMouseScroll", MouseWheelHandler, false);
    } else mydiv.attachEvent("onmousewheel", MouseWheelHandler);


    function MouseWheelHandler(e) {
        var e = window.event || e;
        var delta = Math.max(-1, Math.min(1, (e.wheelDelta || -e.detail)));

        if (delta == 1) {
            e.preventDefault();
            return false;
        }
        if (delta == -1) {
            e.preventDefault();
            return false;
        }
        return false;
    }
</script>
<script>
    var helper = 1,
        isix = $('.isi').length;
    $(function() {
        $('body').on('mousewheel', function(event) {
            if (event.originalEvent.wheelDelta > 0 || event.originalEvent.detail < 0) {
                helper--;
                if (helper <= 1) {
                    helper = 1;
                    $('.isi' + helper).addClass('active');
                }
                $('.isi').removeClass('active');
                $('.isi' + helper).addClass('active');
                $('.pining').removeClass('pining_active onpin');
                $('.pining' + helper).addClass('pining_active onpin');
                pickme(helper);
            } else {
                if (helper < isix) {
                    helper++;
                    $('.isi').removeClass('active');
                    $('.isi' + helper).addClass('active');
                    $('.pining').removeClass('pining_active onpin');
                    $('.pining' + helper).addClass('pining_active onpin');
                    pickme(helper);
                }
                if (helper > isix) {
                    helper = 0;
                    $('.isi' + helper).addClass('active');
                }
            }
        });
    });

    function pickme(get) {
        const element = document.getElementById("isi" + get);
        element.scrollIntoView();
    }
</script>
</body>

</html>