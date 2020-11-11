<div class="sidebar-title-cont">
  <h4 class="sidebar-title">Последние новости<span class="special-color">.</span></h4>
  <div class="title-separator-primary"></div>
</div>
<div class="sidebar-blog-cont"  data-wb="role=foreach&form=news&sort=date:d&limit=3">
  <article>
    <a href="/news/{{id}}/">
      <img data-wb="role=thumbnail&width=300&height=300" src="0" alt="" class="sidebar-blog-image" data-wb-where='"{{images.0.img}}">""' />
    </a>
    <div class="sidebar-blog-title"><a href="/news/{{id}}/">{{header}}</a></div>
    <div class="sidebar-blog-date"><i class="fa fa-calendar-o"></i>{{date("d.m.Y",{{strtotime(date)}})}}</div>
    <div class="clearfix"></div>
  </article>
</div>
