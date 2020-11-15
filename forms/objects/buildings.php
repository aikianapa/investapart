<div>
    <div class="form-group row">
        <label class="col-6 col-sm-3 form-control-label">{{_lang.finish}}</label>
        <div class="col-6 col-sm-3">
            <label class="switch">
                <input wb-module="switch" name="finish">
                <span></span>
            </label>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-6 col-sm-3 form-control-label">{{_lang.levels}}</label>
        <div class="col-6 col-sm-3">
            <input type="number" class="form-control" name="levels" placeholder="{{_lang.levels}}">
        </div>

        <label class="col-6 col-sm-3 form-control-label">{{_lang.sections}}</label>
        <div class="col-6 col-sm-3">
            <input type="number" class="form-control" name="sections" placeholder="{{_lang.sections}}">
        </div>

    </div>

    <div class="form-group row">
        <label class="col-6 col-sm-3 form-control-label">{{_lang.square_min}}</label>
        <div class="col-6 col-sm-3">
            <input type="number" class="form-control" name="square_min" placeholder="{{_lang.square_min}}" readonly>
        </div>
        <label class="col-6 col-sm-3 form-control-label">{{_lang.square_max}}</label>
        <div class="col-6 col-sm-3">
            <input type="number" class="form-control" name="square_max" placeholder="{{_lang.square_max}}" readonly>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-6 col-sm-3 form-control-label">{{_lang.price_min}}</label>
        <div class="col-6 col-sm-3">
            <input type="number" class="form-control" name="price_min" placeholder="{{_lang.price_min}}" readonly>
        </div>
        <label class="col-6 col-sm-3 form-control-label">{{_lang.price_max}}</label>
        <div class="col-6 col-sm-3">
            <input type="number" class="form-control" name="price_max" placeholder="{{_lang.price_max}}" readonly>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-12 tx-center form-control-label">{{_lang.ready}}</label>
        <label class="col-6 col-sm-3 form-control-label">{{_lang.quart}}</label>
        <div class="col-6 col-sm-3">
            <select name="quart" class="form-control">
                <wb-foreach wb-json="[1,2,3,4]">
                    <option value="{{_val}}">{{_val}}</option>
                </wb-foreach>
            </select>
        </div>
        <label class="col-6 col-sm-3 form-control-label">{{_lang.year}}</label>
        <div class="col-6 col-sm-3">
            <input type="number" min="2010" max="2100" class="form-control" name="year" placeholder="{{_lang.year}}">
        </div>
    </div>

    <fieldset class="form-group">
        <meta data-wb="role=include&snippet=editor" name="text">
    </fieldset>

</div>
<wb-lang>
    [en]
    finish = "Finish"
    type = "Type"
    ready = "Ready"
    square_min = "Square from"
    square_max = "Square to"
    price_min = "Price from"
    price_max = "Price to"
    quart = "Quart"
    year = "Year"
    levels = "Levels"
    sections = "Sections"
    [ru]
    finish = "Отделка"
    type = "Тип"
    ready = "Срок сдачи"
    square_min = "Площадь от"
    square_max = "Площадь до"
    price_min = "Цена от"
    price_max = "Цена до"
    quart = "Квартал"
    year = "Год"
    levels = "Этажность"
    sections = "Секций"
</wb-lang>