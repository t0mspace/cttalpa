


const cttalpa = {
    jump: (e) => {
        let target;
        if (e) {
            e.preventDefault();

            target = $(this).attr("href");
        } else {
            target = location.hash;
        }

        if(target)
        {
            $('html,body').animate(
                {
                    scrollTop: $(target).offset().top-300
                }, 500, function () {
                    location.hash = target;
                });
        }
        

    },
    scroll: ()=> {

        $(window).scroll((e) => {
            e.preventDefault();
            let $header = $('#header');
            let $logo = $('#logo');
            let $offCanvas = $('#offCanvas');
            let aTop = $header.height();

            if ($(window).scrollTop() >= aTop) {
                $header.addClass('fixed-header');
                $logo.addClass('invisible');
                $offCanvas.css('margin-top', 75);

            }
            else {
                $header.removeClass('fixed-header');
                $logo.removeClass('invisible');
                $offCanvas.css('margin-top', 0);
            }
        });
    },



}




export default cttalpa;