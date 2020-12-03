<wb-data wb="table=pages&item=testimonials">
    <section class="feedback overlay-black"
        style="background: url(/thumbc/1920x1080/src/{{images.0.img}}) center center /cover fixed;">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-12">
                    <div class="main-title w-50 mx-auto d-table color-white text-center mb-30">
                        <span class="small-title color-primary position-relative line-2-primary">Отзывы клиетнов</span>
                        <h2 class="title mb-20 color-white">{{header}}</h2>
                        <span class="sub-title">{{text}}</span>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="owl-carousel slide-2 mt-30" wb-tree="from=prop.data&children=false">
                        <div class="feedback-item p-30 bg-secondary color-white" wb-if='"{{active}}"=="on"'>
                            <div class="feedback-details">
                                {{data.text}}
                            </div>
                            <div class="author-info mt-30">
                                <img src="/thumbc/160x160/src/{{data.avatar.0.img}}" alt="image">
                                <div class="author-name">
                                    <h5 class="mb-5 color-primary">{{name}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</wb-data>