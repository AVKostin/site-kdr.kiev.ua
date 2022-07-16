/** (c) webvisions.com.ua */
$(function () {

    $("a:has(img)").fancybox();

    $('.bxslider').bxSlider();

    CallBackListener();
});


function CallBackListener() {
    $('#call-back').click(function () {
        if ($('#modal').length)
            return;

        txt = '<h3>Заказ обратного звонка</h3>';
        txt += '<p>Оставьте номер вашего телефона и наш оператор перезвонит вам.</p>';

        txt += '<div class="forma">';
        txt += '		<div class="element f50 second">';
        txt += '			<label for="pname"><sup>*</sup>Ваше имя:</label>';
        txt += '			<br/>';
        txt += '			<input type="text" id="pname" required />';
        txt += '		</div>';
        txt += '		<div class="element f50">';
        txt += '			<label for="ptel"><sup>*</sup>Ваш номер телефона:</label>';
        txt += '			<br/>';
        txt += '			<input type="text" id="ptel" placeholder="+38 (0XX) XXX-XX-XX" />';
        txt += '		</div>';
        txt += '		<div class="element f100 second">';
        txt += '			<input type="button" class="pgo" name="pgo" value="Жду звонка" />';
        txt += '		</div>';
        txt += '</div>';

        CreatePOPUP(txt);

        $('.forma .pgo').click(function () {
            if (!$('#pname').val()) {
                CreateHeaderMess('Укажите как Вас зовут');
                return;
            }

            if (!$('#ptel').val()) {
                CreateHeaderMess('Заполните номер телефона');
                return;
            }

            $.ajax({
                type: 'POST',
                url: '/system/admin/design/tpl/ajax.php',
                data: {
                    mode: 'callback',
                    name: $('#pname').val(),
                    ptel: $('#ptel').val(),
                    url: window.location.pathname + window.location.search
                },
                success: function (msg) {
                    $('body').append(msg);
                }
            });
        });

        return false;
    });
}