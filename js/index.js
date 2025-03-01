//counter start
(function($) {
    $.fn.counter = function() {
        const $this = $(this),
            numberFrom = parseInt($this.attr('data-from')),
            numberTo = parseInt($this.attr('data-to')),
            delta = numberTo - numberFrom,
            deltaPositive = delta > 0 ? 1 : 0,
            time = parseInt($this.attr('data-time')),
            changeTime = 10;

        let currentNumber = numberFrom,
            value = delta * changeTime / time;
        var interval1;
        const changeNumber = () => {
            currentNumber += value;
            //checks if currentNumber reached numberTo
            (deltaPositive && currentNumber >= numberTo) || (!deltaPositive && currentNumber <= numberTo) ? currentNumber = numberTo: currentNumber;
            this.text(parseInt(currentNumber));
            currentNumber == numberTo ? clearInterval(interval1) : currentNumber;
        }

        interval1 = setInterval(changeNumber, changeTime);
    }
}(jQuery));

$(document).ready(function() {
    $('.count1').counter();
    $('.count2').counter();
    $('.count3').counter();
    $('.count4').counter();

    new WOW().init();
});
//counter ends

/**$(document).ready(function() {
    $(".card-parent").mouseleave(function() {
        $('.collapse').collapse("hide");
    });
    $('#multiCollapseServices').on('hidden.bs.collapse', function() {
        $("#moreService").text("MORE");
    });
    $('#multiCollapseServices').on('shown.bs.collapse', function() {
        $("#moreService").text("LESS");
    });
    $(".events .btn-link").click(function() {
        let card = $(this).parents(".card");
        $(card).find(".card-back").stop().fadeIn();
        $(card).find(".card-front").stop().fadeOut();
        $(card).addClass("flip");
    });
    $(".card").mouseleave(function() {
        $(this).find(".card-front").stop().fadeIn();
        $(this).find(".card-back").stop().fadeOut();
        $(this).removeClass("flip");
    });
});

function validateForm() {
    document.getElementById('status').innerHTML = "Sending...";
    formData = {
        'name': $('input[name=name]').val(),
        'email': $('input[name=email]').val(),
        'subject': $('input[name=subject]').val(),
        'message': $('textarea[name=message]').val()
    };


    $.ajax({
        url: "mail.php",
        type: "POST",
        data: formData,
        success: function(data, textStatus, jqXHR) {

            $('#status').text(data.message);
            if (data.code) //If mail was sent successfully, reset the form.
                $('#contact-form').closest('form').find("input[type=text], textarea").val("");
        },
        error: function(jqXHR, textStatus, errorThrown) {
            $('#status').text(jqXHR);
        }
    });
}**/
