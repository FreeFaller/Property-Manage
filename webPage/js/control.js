$(document).ready(function() {
    visible = true;
    function accordion(trigger) {
        var $button = $(trigger);
            
            $button.hover().css({'cursor': 'pointer'});
        //event
        $button.click(function() {
            if ( ! visible ) {
                $(this).next().slideUp('slow',function() {
                    $(this).css("display","none")
                    $('.panel-content').attr( 'aria-expanded','false' );
                });
            }else {
                $(this).next().slideUp(0,function() {
                    $('.panel-content').attr( 'aria-expanded','true' );
                    $(this).css("display","block")
                });
            }
            visible = !visible;
            return false
        });
    }

    accordion('#trigger1');
    accordion('#trigger2');
    accordion('#trigger3');
    accordion('#trigger4');
});