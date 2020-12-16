<div class="row">
    <div class="col-md-12 col-lg-12">
        <form class="adbanced-form-two amenities-list border-bottom-1-gray" id="catalogFilter">
            <div class="row  pb-40">
                <div class="form-group col-lg-4 col-md-6 col-12 pt-15">
                    <div class="select-wrapper position-relative">
                        <select wb-tree="item=city&branch=districts&parent=false&children=false&sort=name" wb-change="#catalogFilter [name=metro]"
                            placeholder="Район..." name="district" class="form-control has-val">
                            <option value="{{id}}" data-district="{{id}}">{{name}}</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-lg-4 col-md-6 col-6 pt-15">
                    <div class="select-wrapper position-relative">
                        <select wb-tree="item=city&branch=districts->%district%&parent=false&children=false&sort=name" wb-strict="false" placeholder="Метро..."
                            name="metro" class="form-control has-val">
                            <option value="{{id}}" data-metro="{{id}}" data-district='%district%'>{{name}}
                            </option>
                        </select>
                    </div>
                </div>


                <div class=" col-lg-4 col-md-6 col-6 pt-15">
                    <button type="button" class="btn btn-primary d-table mx-auto w-100" wb-change="filter=#catalogFilter&target=#catalogList">Показать</button>
                </div>


                <div class="form-group col-lg-6 col-md-6 col-6 pt-15">
                    <div class="price_range">
                        <div class="price-filter">
                            <wb-data wb='table=admin&item=complex_data'>
                                <span>
                                    <input class="filter_range" type="text" name="square__minmax" dimension="&nbsp;кв.м" value="{{square_min * 1}}; {{square_max * 1}}"
                                    />
                                </span>
                            </wb-data>
                        </div>
                    </div>
                </div>

                <div class="form-group col-lg-6 col-md-6 col-6 pt-15">
                    <div class="price_range">
                        <div class="price-filter">
                            <wb-data wb='table=admin&item=complex_data'>
                                <span>
                                    <input class="filter_range" type="text" name="price__minmax" dimension="&nbsp;₽" step="10000" value="{{price_min * 1}}; {{price_max * 1}}"
                                    />
                                </span>
                            </wb-data>
                        </div>
                    </div>
                </div>



            </div>
        </form>
    </div>
</div>
<div class="row" id="catalogList">
    <wb-foreach wb='table=objects&size={{_sett.page_size}}&sort=name&bind=site.catalogList' wb-offset="-100" wb-filter="{'active':'on'}">
        <div class="col-md-12 col-lg-6 col-xl-4">
            <div class="property-thumbnail mt-30">
                <div class="property-img position-relative overflow-hidden overlay-secondary-4">
                    <img src="/thumbc/555x485/src/{{images.0.img}}" width="555" height="485" alt="name">
                    <div class="thumbnail-content z-index-1 color-white-a color-white">
                        <span class="thum-category category-1 bg-secondary color-white z-index-1 px-15" wb-if='"{{price_min}}">""'>от {{price_min}}
                        </span>
                        <ul class="hover-option position-absolute icon-white z-index-1">
                            <li>
                                <a data-toggle="tooltip" data-placement="top" title="Wishlist" href="#">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tooltip" data-placement="top" title="Compare" href="#">
                                    <i class="fa fa-random" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                        <a class="color-secondary mb-5" href="/object/{{id}}/{{wbFurlGenerate({{name}})}}/">
                            <div class="hover-content py-30 px-20 overlay-hover-gradient">

                                <div class="thumbnail-title z-index-1 position-relative">
                                    <span class="thumbnail-price bg-white color-secondary px-15 mb-10 d-table">
                                        {{quart}} квартал {{year}}</span>

                                    <h4>{{name}}</h4>

                                    <span class="address icon-primary f-14">
                                        <i class="fa fa-map-marker"></i>{{address}}&nbsp;</span>
                                </div>

                                <ul class="about-property icon-primary d-table f-14 z-index-1 position-relative">
                                    <li wb-tree="item=city&branch={{district}}&children=false">
                                        <i class="fa fa-map-o" aria-hidden="true"></i>
                                        <span>{{name}}</span>
                                    </li>
                                    <li wb-tree="item=city&branch={{metro}}&children=false">
                                        <i class="fa fa-subway" aria-hidden="true"></i>
                                        <span>{{name}}</span>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <wb-empty>
            <div class="col-12">
                <div class="alert alert-info w-100 my-20 p-20">К сожалению, по выбранным критериям ничего не найдено.</div>
            </div>
        </wb-empty>
    </wb-foreach>
</div>