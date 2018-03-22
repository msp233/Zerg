<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/20
 * Time: 14:56
 */
echo '取出所有的img标签中的src值';

$str = <<<'EOF'
<a href="http://www.163.com/newsapp/#f=163nav" class="ntes-nav-mobile-title ntes-nav-entry-bgblack"><em class="ntes-nav-entry-mobile">移动端</em></a>
		<div class="qrcode-img">
			<a href="http://www.163.com/newsapp/#f=163nav"><img src="http://static.ws.126.net/f2e/include/common_nav/images/topapp.jpg"></a>
		</div>
	</div>
 <a href="http://news.163.com/photoview/00AN0001/2291716.html" title="十三届全国人大一次会议在北京闭幕" class="photo">
                            <img src="http://cms-bucket.nosdn.127.net/ce9d28cff97848dba715d44c7b6cfcf720180320115611.jpeg?imageView&thumbnail=453y225&quality=85" alt="十三届全国人大一次会议在北京闭幕"/>
                        </a>
                        <span class="bg"></span>
                        <h3><a href="http://news.163.com/photoview/00AN0001/2291716.html">十三届全国人大一次会议在北京闭幕</a></h3>
                    </div>
                                <div class="smallimg">
                    <div class="pic">
                                                                                                                                                        <a href="http://news.163.com/photoview/00AP0001/2291705.html#p=DDAUVVCF00AP0001NOS" title="20多万份美院考卷如何海选" class="photo">
                                <img src="http://cms-bucket.nosdn.127.net/9940f39ec10949d3827c6f8f29895d0e20180320120148.jpeg?imageView&thumbnail=185y116&quality=85" width="185" height="116" alt="20多万份美院考卷如何海选"/>
                                <span class="bg"></span>
                            </a>
                            <h3><a href="http://news.163.com/photoview/00AP0001/2291705.html#p=DDAUVVCF00AP0001NOS">20多万份美院考卷如何海选</a></h3>
                                            </div>
                    <div class="pic">
                                                                                                                                                        <a href="http://ent.163.com/photoview/00AJ0003/650538.html" title="喜欢这样的蔡依林吗？" class="photo">
                                <img src="http://cms-bucket.nosdn.127.net/1a99705a08de429b8b5b98837a7c16fb20180320073554.jpeg?imageView&thumbnail=185y116&quality=85" width="185" height="116" alt="喜欢这样的蔡依林吗？"/>
                                <span class="bg"></span>
                            </a>
                            <h3><a href="http://ent.163.com/photoview/00AJ0003/650538.html">喜欢这样的蔡依林吗？</a></h3>
                                            </div>
                </div>
            </li>
            <li ne-role="slide-page">
                                                                                                                <div class="cm_bigimg">
                        <a href="http://sports.163.com/photoview/0B4C0005/160650.html" title="大圣驾到!贝尔抵华参加中国杯 球迷热情追捧" class="photo">
                            <img src="http://cms-bucket.nosdn.127.net/c3a2ab2c8c17443cb1242408f94d117420180320140754.jpeg?imageView&thumbnail=453y225&quality=85" alt="大圣驾到!贝尔抵华参加中国杯 球迷热情追捧"/>
                        </a>
                        <span class="bg"></span>
                        <h3><a href="http://sports.163.com/photoview/0B4C0005/160650.html">大圣驾到!贝尔抵华参加中国杯 球迷热情追捧</a></h3>
                    </div>
                                <div class="smallimg">
                    <div class="pic">
                                                                                                                                                        <a href="http://news.163.com/photoview/00AP0001/2291707.html#p=DDB24FKL00AP0001NOS" title="男子赤膊上阵“抢花炮”" class="photo">
                                <img src="http://cms-bucket.nosdn.127.net/89497f1410f2475d9dfc2c64edab414120180320120445.jpeg?imageView&thumbnail=185y116&quality=85" width="185" height="116" alt="男子赤膊上阵“抢花炮”"/>
                                <span class="bg"></span>
                            </a>
EOF;

preg_match_all('/<img.*?src="(.*?)".*?\/?>/i',$str,$match);
var_dump($match);
