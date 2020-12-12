<div class="sidebar-widget bg-white mt-50 shadow py-40 px-30">
<form method="post">
    <wb-data>
        <h3 class="color-secondary line-bottom pb-15 mb-30">Напишите нам</h3>
        <div class="row">
            <div class="form-group col-12">
                <input type="text" name="name" class="form-control bg-gray" data-label="Имя" required
                    placeholder="Ваше имя">
            </div>
            <div class="form-group col-12">
                <input type="email" name="email" class="form-control bg-gray" data-label="Эл.почта" required
                    placeholder="Ваш email">
            </div>
            <div class="form-group col-12">
                <textarea class="form-control bg-gray" name="message" rows="7" required data-label="Сообщение"
                    placeholder="Введите ваше сообщение..."></textarea>
            </div>
            <div class="col-12"><button type="buttom" data-ajax="/ajax/mail/" id="Send"
                    class="btn btn-secondary">Отправить сообщение</button></div>
        </div>

        <div class="error-handel position-relative">
            <div id="success">Ваше сообщение успешно отправлено, спасибо.</div>
            <div id="error">Ошибка отправки сообщения. Пожалуйста, повторите позже.</div>
        </div>
    </wb-data>
</form>
</div>