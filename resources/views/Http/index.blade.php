@extends('public')
<body>
    <header>
        <div class="top_header">
            <div class="container">
                <div class="top_city">
                    <i class="icon icon-city"></i>
                    <span>郑州</span>
                    <a class="nav-change" href="" rel="nofollow">
                        [切换]
                    </a>
                </div>
                <div class="top_right">
                <a class="nav-first-online" href="" target="_blank" rel="nofollow">在线客服</a>
                <a class="nav-first-map" href="" target="_blank" rel="nofollow">网站地图</a>
                <a class="first-login-mall" href="" target="_blank" rel="nofollow">商家入驻</a>
                <a class="first-reg" href="" target="_blank" rel="nofollow">注册</a>
                <a class="first-login" href="" target="_blank" rel="nofollow">登录</a>
                </div>
            </div>
        </div>
        <div class="container">
            <nav>
                <div class="logo">
                    <a href="">
                        <img src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="center">
                    <ul>
                        <li class="on"><a href="">首页</a></li>
                        <li>
                            <a href="">装修案例</a>
                        </li>
                        <li>
                            <a href="">装修公司</a>
                        </li>
                        <li class="have-arrow">
                            <a href="" >装修百事通
                                <i class="icon"></i>
                            </a>
                        </li>
                        <li class="last">
                            <a href="">在线报价</a>
                        </li>
                    </ul>
                </div>
                <div class="right">
                    <form id="searchform-new" action="" method="get" class="nav-fzlink">
                        <div class="nav-content-search-center">
                            <div class="nav-search-select">
                                <span class="search-select-text">
                                    <span class="search-select-type">装修公司</span>
                                    <i class="icon icon-arrow"></i>
                                </span>
                                <ul class="search-select-list">
                                    <li class="list-now" data-id='1'>装修公司</li>
                                    <li data-id='2'>问题</li>
                                    <li data-id='3'>攻略</li>
                                    <li data-id='4'>效果图</li>
                                    {{--<li data-id='5'>建材家具</li>--}}
                                    <li data-id='6'>小区</li>
                                </ul>
                            </div>
                            <div class="nav-search-input">
                                <input class="nav-search-center-input" type="text" name="keyword" autocomplete="off" placeholder="搜装修公司/问题/攻略/效果图">
                              
                            </div>
                            <i class="icon icon-search"></i>
                        </div>
                    </form>
                </div>
            </nav>
        </div>
    </header>
    <section class="index">
        <div class="slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach($banners as $key => $val)
                        @if($key < count($banners) - 1)
                            <a class="swiper-slide">
                                <img src="{{$val -> image}}" alt="">
                            </a>
                        @endif
                    @endforeach
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
            </div>
        </div>

        <!-- 免费报价 -->
        <div class="index-mfbj">
             <div class="container">
                 <div class="mfbj-header">
                     <h1><span class="before"></span>免费报价<span class="after"></span></h1>
                 </div>    
                 <div class="mfbj-center">
                     <div class="left">
                            <div class="left-left">
                                <span></span>
                                <p>免费量房</p>
                            </div>
                            <div class="left-right">
                                <span></span>
                                <p>免费验房</p>
                            </div>
                            <div class="left-bottom">
                                <span></span>
                                <p>免费报价</p>
                            </div>
                     </div>
                     <div class="right">
                            <div class='city'>
                                <p>装修城市</p>
                                <div id="distpicker3">
                                    <select></select>
                                    <select></select>
                  
                                </div>
                                <input type="text" placeholder="请输入您的小区名称">
                            </div>
                            <div class="huxing">
                                <p>房屋户型</p>
                                <select name="shi" id="shi">
                                    <option value="1">一室</option>
                                    <option value="2">二室</option>
                                    <option value="3">三室</option>
                                    <option value="4">四室</option>
                                    <option value="5">五室</option>
                                </select>
                                <select name="ting" id="ting">
                                    <option value="1">一厅</option>
                                    <option value="2">二厅</option>
                                    <option value="3">三厅</option>
                                    <option value="4">四厅</option>
                                    <option value="5">五厅</option>
                                </select>
                                <select name="wei" id="wei">
                                    
                                        <option value="1">一卫</option>
                                        <option value="2">二卫</option>
                                        <option value="3">三卫</option>
                                        <option value="4">四卫</option>
                                        <option value="5">五卫</option>
                                
                                </select>
                                <input type="text" placeholder="输入室内面积m²">
                            </div>
                            <div class="style">
                                <p>装修风格</p>
                            
                                <ul id="zxstyle">
                                    <li class="on">现代简约</li>
                                    <li>中式风格</li>
                                    <li>欧式风格</li>
                                    <li>田园风格</li>
                                    <li>地中海风格</li>
                                    <li>其他风格</li>
                                </ul>
                            </div>
                            <div class="name">
                                <p>您的称呼</p>
                                <input type="text" placeholder="先生/女士">
                                <input type="text" placeholder="请输入您的电话号码">
                                <button>发送报价到手机</button>
                            </div>
                     </div>
                 </div>
             </div>
        </div>
        <!-- 装修案例 -->
        <div class="index-zxal">
            <div class="container">
                    <div class="zxal-header">
                        <h1>
                            <span class="before"></span>装修案例
                            <span class="after"></span>
                        </h1>
                    </div>
                    <div class="zxal-center">
                    <div id="wrap">
                        <ul>
                            <li>
                                <div class="text">
                                    <p>中式风格 客厅展示</p>
                                </div>
                            </li>
                            <li>
                                <div class="text">
                                    <p>欧式风格 卧室展示</p>
                                </div>
                            </li>
                            <li>
                                <div class="text">
                                    <p>田园风格 书房展示</p>
                                </div>
                            </li>
                            <li class="curr">
                                <div class="text">
                                    <p>现代风格 餐厅展示</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="list clearfix">
                        <ul>
                            <li><a href="">
                                <img src="images/im1.jpg" alt="">
                                   <span>现代简约</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="images/im2.jpg" alt="">
                                    <span>欧式风格</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="images/im3.jpg" alt="">
                                    <span>田园风格</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="images/im4.jpg" alt="">
                                    <span>地中海风格</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="lei clearfix">
                        <ul>
                            <li><a href="">
                                <div class="img">
                                    <div class="icon">

                                    </div>
                                </div>
                                <span>客厅</span>
                            </a></li>
                            <li>
                                <a href="">
                                <div class="img">
                                    <div class="icon">
                                
                                    </div>
                                </div>
                                    <span>卧室</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                <div class="img">
                                    <div class="icon">
                                
                                    </div>
                                </div>
                                    <span>书房</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                <div class="img">
                                    <div class="icon">
                                
                                    </div>
                                </div>
                                    <span>阳台</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                <div class="img">
                                    <div class="icon">
                                
                                    </div>
                                </div>
                                    <span>厨房</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                <div class="img">
                                    <div class="icon">
                                
                                    </div>
                                </div>
                                    <span>玄关</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                <div class="img">
                                    <div class="icon">
                                
                                    </div>
                                </div>
                                    <span>卫生间</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                <div class="img">
                                    <div class="icon">
                                
                                    </div>
                                </div>
                                    <span>餐厅</span>
                                </a>
                            </li>
                        </ul>
                    </div>
            </div>    
        </div>

        <!-- 装修公司 -->
        <div class="index-zxgs">
            <div class="container">
                    <div class="zxgs-header">
                        <h1>
                            <span class="before"></span>装修公司
                            <span class="after"></span>
                        </h1>
                    </div>
                    <div class="zxgs-list">
                        <ul>
                        <li>
                            <a href="">
                                <img src="images/c1.jpg" alt="">
                            </a>
                            <div class="pingfen yi"></div>
                            <div class="yuyue"><a href=''>免费预约</a></div>
                            <div class="baojia"><a href="">免费报价</a></div>
                        </li>
                            <li>
                                <a href="">
                                    <img src="images/c1.jpg" alt="">
                                </a>
                                <div class="pingfen yi"></div>
                                <div class="yuyue">
                                    <a href=''>免费预约</a>
                                </div>
                                <div class="baojia">
                                    <a href="">免费报价</a>
                                </div>
                            </li>
                            <li>
                                <a href="">
                                    <img src="images/c1.jpg" alt="">
                                </a>
                                <div class="pingfen er"></div>
                                <div class="yuyue">
                                    <a href=''>免费预约</a>
                                </div>
                                <div class="baojia">
                                    <a href="">免费报价</a>
                                </div>
                            </li>
                            <li>
                                <a href="">
                                    <img src="images/c1.jpg" alt="">
                                </a>
                                <div class="pingfen san"></div>
                            <div class="yuyue">
                                <a href=''>免费预约</a>
                            </div>
                            <div class="baojia">
                                <a href="">免费报价</a>
                            </div>
                            </li>
                            <li>
                                <a href="">
                                    <img src="images/c1.jpg" alt="">
                                </a>
                                <div class="pingfen si"></div>
                                <div class="yuyue">
                                    <a href=''>免费预约</a>
                                </div>
                                <div class="baojia">
                                    <a href="">免费报价</a>
                                </div>
                            </li>
                            <li>
                                <a href="">
                                    <img src="images/c1.jpg" alt="">
                                </a>
                                <div class="pingfen wu"></div>
                            <div class="yuyue">
                                <a href=''>免费预约</a>
                            </div>
                            <div class="baojia">
                                <a href="">免费报价</a>
                            </div>
                            </li>
                            <li>
                                <a href="">
                                    <img src="images/c1.jpg" alt="">
                                </a>
                                <div class="pingfen"></div>
                            <div class="yuyue">
                                <a href=''>免费预约</a>
                            </div>
                            <div class="baojia">
                                <a href="">免费报价</a>
                            </div>
                            </li>
                            <li>
                                <a href="">
                                    <img src="images/c1.jpg" alt="">
                                </a>
                                <div class="pingfen"></div>
                            <div class="yuyue">
                                <a href=''>免费预约</a>
                            </div>
                            <div class="baojia">
                                <a href="">免费报价</a>
                            </div>
                            </li>
                            <li>
                                <a href="">
                                    <img src="images/c1.jpg" alt="">
                                </a>
                                <div class="pingfen"></div>
                            <div class="yuyue">
                                <a href=''>免费预约</a>
                            </div>
                            <div class="baojia">
                                <a href="">免费报价</a>
                            </div>
                            </li>
                            <li>
                                <a href="">
                                    <img src="images/c1.jpg" alt="">
                                </a>
                                <div class="pingfen"></div>
                            <div class="yuyue">
                                <a href=''>免费预约</a>
                            </div>
                            <div class="baojia">
                                <a href="">免费报价</a>
                            </div>
                            </li>
                        </ul>
                        <a href=''>查看更多装修公司</a>
                    </div>
            </div>   
        </div>

        <!-- 小banner -->
        <div class="index-smallbanner">
            <img src="images/small-banner.jpg" alt="">
        </div>
        <!-- 装修百事通 -->
        <div class="index-baishi">
            <div class="container">
                <div class="baishi-header">
                    <h1>
                        <span class="before"></span>装修百事通
                        <span class="after"></span>
                    </h1>
                    <span>装修攻略</span><span>装修问答</span><span>装修资讯</span><span>装修百科</span>
                </div>
                <div class="baishi-center clearfix">
                    <div class="gonglve-header">
                        <h1>装修攻略</h1>
                        <a href="">更多>></a>
                    </div>
                    <div class="left">
                        <div class="leftHeader">
                            <a class="tipnav active" href="javascript:;">收房</a>
                            <a class="tipnav" href="javascript:;">选公司</a>
                            <a class="tipnav" href="javascript:;">设计</a>
                            <a class="tipnav" href="javascript:;">预算</a>
                            <a class="tipnav" href="javascript:;">风水</a>
                        </div>
                 
                        <div class="leftCon active">
                            <a href="/article/286298.html">•&nbsp;二手房验收实战超详细规范</a>
                            <a href="/article/279116.html">•&nbsp;二手房收房：隐蔽工程最重要</a>
                            <a href="/article/279251.html">•&nbsp;切记四项注意 才能验收好精装房</a>
                            <a href="/article/279312.html">•&nbsp;资深验房师为你解答6个“怎么办”</a>
                            <a href="/article/279453.html">•&nbsp;收房验房后应该如何维权？</a>
                            <a href="/article/473996.html">•&nbsp;二手房注意事项与验收流程分析</a>
                            <a href="/article/473998.html">•&nbsp;精装房验收流程与工具科普</a>
                        </div>
                        <div class="leftCon">
                            <a href="/article/286298.html">•&nbsp;二手房验收实战超详细规范</a>
                            <a href="/article/279116.html">•&nbsp;二手房收房：隐蔽工程最重要</a>
                            <a href="/article/279251.html">•&nbsp;切记四项注意 才能验收好精装房</a>
                            <a href="/article/279312.html">•&nbsp;资深验房师为你解答6个“怎么办”</a>
                            <a href="/article/279453.html">•&nbsp;收房验房后应该如何维权？</a>
                            <a href="/article/473996.html">•&nbsp;二手房注意事项与验收流程分析</a>
                            <a href="/article/473998.html">•&nbsp;精装房验收流程与工具科普</a>
                        </div>
                        <div class="leftCon">
                            <a href="/article/286298.html">•&nbsp;二手房验收实战超详细规范</a>
                            <a href="/article/279116.html">•&nbsp;二手房收房：隐蔽工程最重要</a>
                            <a href="/article/279251.html">•&nbsp;切记四项注意 才能验收好精装房</a>
                            <a href="/article/279312.html">•&nbsp;资深验房师为你解答6个“怎么办”</a>
                            <a href="/article/279453.html">•&nbsp;收房验房后应该如何维权？</a>
                            <a href="/article/473996.html">•&nbsp;二手房注意事项与验收流程分析</a>
                            <a href="/article/473998.html">•&nbsp;精装房验收流程与工具科普</a>
                        </div>
                        <div class="leftCon">
                            <a href="/article/286298.html">•&nbsp;二手房验收实战超详细规范</a>
                            <a href="/article/279116.html">•&nbsp;二手房收房：隐蔽工程最重要</a>
                            <a href="/article/279251.html">•&nbsp;切记四项注意 才能验收好精装房</a>
                            <a href="/article/279312.html">•&nbsp;资深验房师为你解答6个“怎么办”</a>
                            <a href="/article/279453.html">•&nbsp;收房验房后应该如何维权？</a>
                            <a href="/article/473996.html">•&nbsp;二手房注意事项与验收流程分析</a>
                            <a href="/article/473998.html">•&nbsp;精装房验收流程与工具科普</a>
                        </div>
                        <div class="leftCon">
                            <a href="/article/286298.html">•&nbsp;二手房验收实战超详细规范</a>
                            <a href="/article/279116.html">•&nbsp;二手房收房：隐蔽工程最重要</a>
                            <a href="/article/279251.html">•&nbsp;切记四项注意 才能验收好精装房</a>
                            <a href="/article/279312.html">•&nbsp;资深验房师为你解答6个“怎么办”</a>
                            <a href="/article/279453.html">•&nbsp;收房验房后应该如何维权？</a>
                            <a href="/article/473996.html">•&nbsp;二手房注意事项与验收流程分析</a>
                            <a href="/article/473998.html">•&nbsp;精装房验收流程与工具科普</a>
                        </div>
                    </div>
                    <div class="center">
                        <div class="leftHeader">
                            <a class="tipnav active" href="javascript:;">收房</a>
                            <a class="tipnav" href="javascript:;">选公司</a>
                            <a class="tipnav" href="javascript:;">设计</a>
                            <a class="tipnav" href="javascript:;">预算</a>
                            <a class="tipnav" href="javascript:;">风水</a>
                            <a class="tipnav" href="javascript:;">风水</a>
                            <a class="tipnav" href="javascript:;">风水</a>
                            <a class="tipnav" href="javascript:;">风水</a>
                            <a class="tipnav" href="javascript:;">风水</a>
                        </div>
                        <div class="leftCon active">
                            <a href="/article/286298.html">•&nbsp;二手房验收实战超详细规范<span>2017年08月08日</span></a>
                            <a href="/article/279116.html">•&nbsp;二手房收房：隐蔽工程最重要<span>2017年08月08日</span></a>
                            <a href="/article/279251.html">•&nbsp;切记四项注意 才能验收好精装房<span>2017年08月08日</span></a>
                            <a href="/article/279312.html">•&nbsp;资深验房师为你解答6个“怎么办”<span>2017年08月08日</span></a>
                            <a href="/article/279453.html">•&nbsp;收房验房后应该如何维权？<span>2017年08月08日</span></a>
                            <a href="/article/473996.html">•&nbsp;二手房注意事项与验收流程分析<span>2017年08月08日</span></a>
                            <a href="/article/473998.html">•&nbsp;精装房验收流程与工具科普<span>2017年08月08日</span></a>
                        </div>
                        <div class="leftCon">
                            <a href="/article/286298.html">•&nbsp;二手房验收实战超详细规范<span>2017年08月08日</span></a>
                            <a href="/article/279116.html">•&nbsp;二手房收房：隐蔽工程最重要<span>2017年08月08日</span></a>
                            <a href="/article/279251.html">•&nbsp;切记四项注意 才能验收好精装房<span>2017年08月08日</span></a>
                            <a href="/article/279312.html">•&nbsp;资深验房师为你解答6个“怎么办”<span>2017年08月08日</span></a>
                            <a href="/article/279453.html">•&nbsp;收房验房后应该如何维权？<span>2017年08月08日</span></a>
                            <a href="/article/473996.html">•&nbsp;二手房注意事项与验收流程分析<span>2017年08月08日</span></a>
                            <a href="/article/473998.html">•&nbsp;精装房验收流程与工具科普<span>2017年08月08日</span></a>
                        </div>
                        <div class="leftCon">
                            <a href="/article/286298.html">•&nbsp;二手房验收实战超详细规范<span>2017年08月08日</span></a>
                            <a href="/article/279116.html">•&nbsp;二手房收房：隐蔽工程最重要<span>2017年08月08日</span></a>
                            <a href="/article/279251.html">•&nbsp;切记四项注意 才能验收好精装房<span>2017年08月08日</span></a>
                            <a href="/article/279312.html">•&nbsp;资深验房师为你解答6个“怎么办”<span>2017年08月08日</span></a>
                            <a href="/article/279453.html">•&nbsp;收房验房后应该如何维权？<span>2017年08月08日</span></a>
                            <a href="/article/473996.html">•&nbsp;二手房注意事项与验收流程分析<span>2017年08月08日</span></a>
                            <a href="/article/473998.html">•&nbsp;精装房验收流程与工具科普<span>2017年08月08日</span></a>
                        </div>
                        <div class="leftCon">
                            <a href="/article/286298.html">•&nbsp;二手房验收实战超详细规范<span>2017年08月08日</span></a>
                            <a href="/article/279116.html">•&nbsp;二手房收房：隐蔽工程最重要<span>2017年08月08日</span></a>
                            <a href="/article/279251.html">•&nbsp;切记四项注意 才能验收好精装房<span>2017年08月08日</span></a>
                            <a href="/article/279312.html">•&nbsp;资深验房师为你解答6个“怎么办”<span>2017年08月08日</span></a>
                            <a href="/article/279453.html">•&nbsp;收房验房后应该如何维权？<span>2017年08月08日</span></a>
                            <a href="/article/473996.html">•&nbsp;二手房注意事项与验收流程分析<span>2017年08月08日</span></a>
                            <a href="/article/473998.html">•&nbsp;精装房验收流程与工具科普<span>2017年08月08日</span></a>
                        </div>
                        <div class="leftCon">
                            <a href="/article/286298.html">•&nbsp;二手房验收实战超详细规范<span>2017年08月08日</span></a>
                            <a href="/article/279116.html">•&nbsp;二手房收房：隐蔽工程最重要<span>2017年08月08日</span></a>
                            <a href="/article/279251.html">•&nbsp;切记四项注意 才能验收好精装房<span>2017年08月08日</span></a>
                            <a href="/article/279312.html">•&nbsp;资深验房师为你解答6个“怎么办”<span>2017年08月08日</span></a>
                            <a href="/article/279453.html">•&nbsp;收房验房后应该如何维权？<span>2017年08月08日</span></a>
                            <a href="/article/473996.html">•&nbsp;二手房注意事项与验收流程分析<span>2017年08月08日</span></a>
                            <a href="/article/473998.html">•&nbsp;精装房验收流程与工具科普<span>2017年08月08日</span></a>
                        </div>
                        <div class="leftCon">
                            <a href="/article/286298.html">•&nbsp;二手房验收实战超详细规范<span>2017年08月08日</span></a>
                            <a href="/article/279116.html">•&nbsp;二手房收房：隐蔽工程最重要<span>2017年08月08日</span></a>
                            <a href="/article/279251.html">•&nbsp;切记四项注意 才能验收好精装房<span>2017年08月08日</span></a>
                            <a href="/article/279312.html">•&nbsp;资深验房师为你解答6个“怎么办”<span>2017年08月08日</span></a>
                            <a href="/article/279453.html">•&nbsp;收房验房后应该如何维权？<span>2017年08月08日</span></a>
                            <a href="/article/473996.html">•&nbsp;二手房注意事项与验收流程分析<span>2017年08月08日</span></a>
                            <a href="/article/473998.html">•&nbsp;精装房验收流程与工具科普<span>2017年08月08日</span></a>
                        </div>
                        <div class="leftCon">
                            <a href="/article/286298.html">•&nbsp;二手房验收实战超详细规范<span>2017年08月08日</span></a>
                            <a href="/article/279116.html">•&nbsp;二手房收房：隐蔽工程最重要<span>2017年08月08日</span></a>
                            <a href="/article/279251.html">•&nbsp;切记四项注意 才能验收好精装房<span>2017年08月08日</span></a>
                            <a href="/article/279312.html">•&nbsp;资深验房师为你解答6个“怎么办”<span>2017年08月08日</span></a>
                            <a href="/article/279453.html">•&nbsp;收房验房后应该如何维权？<span>2017年08月08日</span></a>
                            <a href="/article/473996.html">•&nbsp;二手房注意事项与验收流程分析<span>2017年08月08日</span></a>
                            <a href="/article/473998.html">•&nbsp;精装房验收流程与工具科普<span>2017年08月08日</span></a>
                        </div>
                        <div class="leftCon">
                            <a href="/article/286298.html">•&nbsp;二手房验收实战超详细规范<span>2017年08月08日</span></a>
                            <a href="/article/279116.html">•&nbsp;二手房收房：隐蔽工程最重要<span>2017年08月08日</span></a>
                            <a href="/article/279251.html">•&nbsp;切记四项注意 才能验收好精装房<span>2017年08月08日</span></a>
                            <a href="/article/279312.html">•&nbsp;资深验房师为你解答6个“怎么办”<span>2017年08月08日</span></a>
                            <a href="/article/279453.html">•&nbsp;收房验房后应该如何维权？<span>2017年08月08日</span></a>
                            <a href="/article/473996.html">•&nbsp;二手房注意事项与验收流程分析<span>2017年08月08日</span></a>
                            <a href="/article/473998.html">•&nbsp;精装房验收流程与工具科普<span>2017年08月08日</span></a>
                        </div>
                        <div class="leftCon">
                            <a href="/article/286298.html">•&nbsp;二手房验收实战超详细规范<span>2017年08月08日</span></a>
                            <a href="/article/279116.html">•&nbsp;二手房收房：隐蔽工程最重要<span>2017年08月08日</span></a>
                            <a href="/article/279251.html">•&nbsp;切记四项注意 才能验收好精装房<span>2017年08月08日</span></a>
                            <a href="/article/279312.html">•&nbsp;资深验房师为你解答6个“怎么办”<span>2017年08月08日</span></a>
                            <a href="/article/279453.html">•&nbsp;收房验房后应该如何维权？<span>2017年08月08日</span></a>
                            <a href="/article/473996.html">•&nbsp;二手房注意事项与验收流程分析<span>2017年08月08日</span></a>
                            <a href="/article/473998.html">•&nbsp;精装房验收流程与工具科普<span>2017年08月08日</span></a>
                        </div>
                    </div>
                    <div class="right">
                        <div class="leftHeader">
                            <a class="tipnav active" href="javascript:;">收房</a>
                            <a class="tipnav" href="javascript:;">选公司</a>
                            <a class="tipnav" href="javascript:;">设计</a>
                           
                        </div>
                        <div class="leftCon active">
                            <a href="/article/286298.html">•&nbsp;二手房验收实战超详细规范</a>
                            <a href="/article/279116.html">•&nbsp;二手房收房：隐蔽工程最重要</a>
                            <a href="/article/279251.html">•&nbsp;切记四项注意 才能验收好精装房</a>
                            <a href="/article/279312.html">•&nbsp;资深验房师为你解答6个“怎么办”</a>
                            <a href="/article/279453.html">•&nbsp;收房验房后应该如何维权？</a>
                            <a href="/article/473996.html">•&nbsp;二手房注意事项与验收流程分析</a>
                            <a href="/article/473998.html">•&nbsp;精装房验收流程与工具科普</a>
                        </div>
                        <div class="leftCon">
                            <a href="/article/286298.html">•&nbsp;二手房验收实战超详细规范</a>
                            <a href="/article/279116.html">•&nbsp;二手房收房：隐蔽工程最重要</a>
                            <a href="/article/279251.html">•&nbsp;切记四项注意 才能验收好精装房</a>
                            <a href="/article/279312.html">•&nbsp;资深验房师为你解答6个“怎么办”</a>
                            <a href="/article/279453.html">•&nbsp;收房验房后应该如何维权？</a>
                            <a href="/article/473996.html">•&nbsp;二手房注意事项与验收流程分析</a>
                            <a href="/article/473998.html">•&nbsp;精装房验收流程与工具科普</a>
                        </div>
                        <div class="leftCon">
                            <a href="/article/286298.html">•&nbsp;二手房验收实战超详细规范</a>
                            <a href="/article/279116.html">•&nbsp;二手房收房：隐蔽工程最重要</a>
                            <a href="/article/279251.html">•&nbsp;切记四项注意 才能验收好精装房</a>
                            <a href="/article/279312.html">•&nbsp;资深验房师为你解答6个“怎么办”</a>
                            <a href="/article/279453.html">•&nbsp;收房验房后应该如何维权？</a>
                            <a href="/article/473996.html">•&nbsp;二手房注意事项与验收流程分析</a>
                            <a href="/article/473998.html">•&nbsp;精装房验收流程与工具科普</a>
                        </div>
                    </div>
                </div>
                <div class="baishi-wenda">
                   <div class="wenda-header">
                        <h1>装修问答</h1>
                        <a href="">更多>></a>
                   </div>
                   <div class="wenda-con">
                        <div class="left">
                            <div class="top">
                                <h2>我要提问</h2>
                                <a href="">更多></a>
                            </div>
                            <div class="con">
                                    <a href="/article/279116.html">•&nbsp;二手房收房：隐蔽工程最重要</a>
                                    <a href="/article/279251.html">•&nbsp;切记四项注意 才能验收好精装房</a>
                                    <a href="/article/279312.html">•&nbsp;资深验房师为你解答6个“怎么办”</a>
                                    <a href="/article/279453.html">•&nbsp;收房验房后应该如何维权？</a>
                                    <a href="/article/473996.html">•&nbsp;二手房注意事项与验收流程分析</a>
                                    <a href="/article/473998.html">•&nbsp;精装房验收流程与工具科普</a>
                            </div>
                        </div>
                        <div class="center">
                            <div class="top">
                                <h2>常见问题</h2>
                                <a href="">更多></a>
                            </div>
                            <div class="con">
                                <a href="/article/279116.html">•&nbsp;二手房收房：隐蔽工程最重要</a>
                                <a href="/article/279251.html">•&nbsp;切记四项注意 才能验收好精装房</a>
                                <a href="/article/279312.html">•&nbsp;资深验房师为你解答6个“怎么办”</a>
                                <a href="/article/279453.html">•&nbsp;收房验房后应该如何维权？</a>
                                <a href="/article/473996.html">•&nbsp;二手房注意事项与验收流程分析</a>
                                <a href="/article/473998.html">•&nbsp;精装房验收流程与工具科普</a>
                            </div>
                        </div>
                        <div class="right">
                            <div class="top">
                                <h2>我要吐槽</h2>
                                <a href="">更多></a>
                            </div>
                            <div class="con">
                                <a href="/article/279116.html">•&nbsp;二手房收房：隐蔽工程最重要</a>
                                <a href="/article/279251.html">•&nbsp;切记四项注意 才能验收好精装房</a>
                                <a href="/article/279312.html">•&nbsp;资深验房师为你解答6个“怎么办”</a>
                                <a href="/article/279453.html">•&nbsp;收房验房后应该如何维权？</a>
                                <a href="/article/473996.html">•&nbsp;二手房注意事项与验收流程分析</a>
                                <a href="/article/473998.html">•&nbsp;精装房验收流程与工具科普</a>
                            </div>
                        </div>
                   </div>
                </div>
                <div class="baishi-zixun clearfix">
                        <div class="zixun-header">
                            <h1>装修资讯</h1>
                            <a href="">更多>></a>
                        </div>
                        <div class="zixun-left">
                            <div class="img">
                                <img src="images/zixun-left.jpg" alt="">
                            </div>
                            <div class="con">
                                <a href="/article/279116.html">•&nbsp;二手房收房：隐蔽工程最重要</a>
                                <a href="/article/279251.html">•&nbsp;切记四项注意 才能验收好精装房</a>
                                <a href="/article/279312.html">•&nbsp;资深验房师为你解答6个“怎么办”</a>
                                <a href="/article/279453.html">•&nbsp;收房验房后应该如何维权？</a>
                                <a href="/article/473996.html">•&nbsp;二手房注意事项与验收流程分析</a>
                                <a href="/article/473998.html">•&nbsp;精装房验收流程与工具科普</a>
                                <a href="/article/279453.html">•&nbsp;收房验房后应该如何维权？</a>
                                <a href="/article/279453.html">•&nbsp;收房验房后应该如何维权？</a>
                            </div>
                        </div>
                        <div class="zixun-right">
                            <div class="img">
                                <img src="images/zixun-right.jpg" alt="">
                            </div>
                            <div class="con">
                                <a href="/article/279116.html">•&nbsp;二手房收房：隐蔽工程最重要</a>
                                <a href="/article/279251.html">•&nbsp;切记四项注意 才能验收好精装房</a>
                                <a href="/article/279312.html">•&nbsp;资深验房师为你解答6个“怎么办”</a>
                                <a href="/article/279453.html">•&nbsp;收房验房后应该如何维权？</a>
                                <a href="/article/473996.html">•&nbsp;二手房注意事项与验收流程分析</a>
                                <a href="/article/473998.html">•&nbsp;精装房验收流程与工具科普</a>
                                <a href="/article/279453.html">•&nbsp;收房验房后应该如何维权？</a>
                                <a href="/article/279453.html">•&nbsp;收房验房后应该如何维权？</a>
                              
                            </div>
                        </div>
                </div>
                <div class="baishi-baike clearfix">
                    <div class="baike-header">
                        <h1>装修百科</h1>
                        <a href="">更多>></a>
                    </div>
                    <ul>
                        <li>
                            <div class="img">
                                <img src="images/b1.jpg" alt="">
                                <div><span>装修风水</span></div>
                            </div>
                            <div class="con">
                                <a href="/article/279312.html">•&nbsp;资深验房师为你解答6个“怎么办”</a>
                                <a href="/article/279453.html">•&nbsp;收房验房后应该如何维权？</a>
                                <a href="/article/473996.html">•&nbsp;二手房注意事项与验收流程分析</a>
                                <a href="/article/473998.html">•&nbsp;精装房验收流程与工具科普</a>
                                <a href="/article/279453.html">•&nbsp;收房验房后应该如何维权？</a>
                                <a href="" class="more">了解更多...</a>
                            </div>
                        </li>
                        <li>
                            <div class="img">
                                <img src="images/b2.jpg" alt="">
                                <div><span>选材宝典</span></div>
                            </div>
                            <div class="con">
                                <a href="/article/279312.html">•&nbsp;资深验房师为你解答6个“怎么办”</a>
                                <a href="/article/279453.html">•&nbsp;收房验房后应该如何维权？</a>
                                <a href="/article/473996.html">•&nbsp;二手房注意事项与验收流程分析</a>
                                <a href="/article/473998.html">•&nbsp;精装房验收流程与工具科普</a>
                                <a href="/article/279453.html">•&nbsp;收房验房后应该如何维权？</a>
                                <a href="" class="more">了解更多...</a>
                            </div>
                        </li>
                        <li>
                            <div class="img">
                            <img src="images/b3.jpg" alt="">
                            <div><span>装修设计</span></div>
                            </div>
                            <div class="con">
                                <a href="/article/279312.html">•&nbsp;资深验房师为你解答6个“怎么办”</a>
                                <a href="/article/279453.html">•&nbsp;收房验房后应该如何维权？</a>
                                <a href="/article/473996.html">•&nbsp;二手房注意事项与验收流程分析</a>
                                <a href="/article/473998.html">•&nbsp;精装房验收流程与工具科普</a>
                                <a href="/article/279453.html">•&nbsp;收房验房后应该如何维权？</a>
                            <a href="" class="more">了解更多...</a>
                            </div>
                        </li>
                        <li>
                            <div class="img">
                                <img src="images/b4.jpg" alt="">
                                <div><span>装修品牌</span></div>
                            </div>
                            <div class="con">
                                <a href="/article/279312.html">•&nbsp;资深验房师为你解答6个“怎么办”</a>
                                <a href="/article/279453.html">•&nbsp;收房验房后应该如何维权？</a>
                                <a href="/article/473996.html">•&nbsp;二手房注意事项与验收流程分析</a>
                                <a href="/article/473998.html">•&nbsp;精装房验收流程与工具科普</a>
                                <a href="/article/279453.html">•&nbsp;收房验房后应该如何维权？</a>
                                <a href="" class="more">了解更多...</a>
                            </div>
                        </li>
                        <li>
                            <div class="img">
                                <img src="images/b5.jpg" alt="">
                                <div><span>装修卖场</span></div>
                            </div>
                            <div class="con">
                                <a href="/article/279312.html">•&nbsp;资深验房师为你解答6个“怎么办”</a>
                                <a href="/article/279453.html">•&nbsp;收房验房后应该如何维权？</a>
                                <a href="/article/473996.html">•&nbsp;二手房注意事项与验收流程分析</a>
                                <a href="/article/473998.html">•&nbsp;精装房验收流程与工具科普</a>
                                <a href="/article/279453.html">•&nbsp;收房验房后应该如何维权？</a>
                            <a href="" class="more">了解更多...</a>
                            </div>
                        </li>
                        <li>
                            <div class="img">
                            <img src="images/b6.jpg" alt="">
                            <div><span>生活百科</span></div>
                            </div>
                            <div class="con">
                                <a href="/article/279312.html">•&nbsp;资深验房师为你解答6个“怎么办”</a>
                                <a href="/article/279453.html">•&nbsp;收房验房后应该如何维权？</a>
                                <a href="/article/473996.html">•&nbsp;二手房注意事项与验收流程分析</a>
                                <a href="/article/473998.html">•&nbsp;精装房验收流程与工具科普</a>
                                <a href="/article/279453.html">•&nbsp;收房验房后应该如何维权？</a>
                            <a href="" class="more">了解更多...</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- 在线招标 -->
        <div class="index-zhaobiao">
            <div class="container">
                <div class="zhaobiao-header">
                    <h1>
                        <span class="before"></span>在线招标
                        <span class="after"></span>
                    </h1>
                </div>
                <div class="ddxx">
                    <ul>
                        <li class="titleli">
                            <span class="span1">时间</span>
                            <span class="span2">招标业主</span>
                            <span class="span3">小区名称</span>
                            <span class="span4">装修面积</span>
                            <span class="span5">装修预算</span>
                        </li>
                        <li>
                            <span class="span1">2个小时前</span>
                            <span class="span2">张先生</span>
                            <span class="span3">时代倾城</span>
                            <span class="span4">116㎡</span>
                            <span class="span5">5-8万</span>
                        </li>
                        <li>
                            <span class="span1">2个小时前</span>
                            <span class="span2">袁女士</span>
                            <span class="span3">中天雅苑</span>
                            <span class="span4">112㎡</span>
                            <span class="span5">10-15万</span>
                        </li>
                        <li>
                            <span class="span1">2个小时前</span>
                            <span class="span2">范女士</span>
                            <span class="span3">雨庭花园</span>
                            <span class="span4">105㎡</span>
                            <span class="span5">8-10万</span>
                        </li>
                        <li>
                            <span class="span1">2个小时前</span>
                            <span class="span2">张先生</span>
                            <span class="span3">养生馆装修</span>
                            <span class="span4">180㎡</span>
                            <span class="span5">20-30万</span>
                        </li>
                        <li>
                            <span class="span1">2个小时前</span>
                            <span class="span2">胡女士</span>
                            <span class="span3">汇景新苑</span>
                            <span class="span4">83㎡</span>
                            <span class="span5">8-10万</span>
                        </li>
                        <li>
                            <span class="span1">2个小时前</span>
                            <span class="span2">邓女士</span>
                            <span class="span3">班芙小镇 </span>
                            <span class="span4">105㎡</span>
                            <span class="span5">15-20万</span>
                        </li>
                        <li>
                            <span class="span1">2个小时前</span>
                            <span class="span2">郭先生</span>
                            <span class="span3">宏府鹍翔九天</span>
                            <span class="span4">91㎡</span>
                            <span class="span5">16万</span>
                        </li>
                
                    </ul>
                </div>
               
            </div>
        </div>


        <!-- 流程 -->
        <div class="index-liuchen clearfix">
            <div class="container">
                <div class="liucheng-header">
                    <h1>
                        <span class="before"></span>服务流程
                        <span class="after"></span>
                    </h1>
                </div>
                <div class="liucheng-center">
                    <ul>
                        <li>
                            <div class="img">

                            </div>
                            <span>在线预约</span>
                        </li>
                        <li>
                            <div class="img">
                        
                            </div>
                            <span>方案预算</span>
                        </li>
                        <li>
                            <div class="img">
                        
                            </div>
                            <span>签订合同</span>
                        </li>
                        <li>
                            <div class="img">
                        
                            </div>
                            <span>维修施工</span>
                        </li>
                        <li>
                            <div class="img">
                        
                            </div>
                            <span>装修验收</span>
                        </li>
                        <li>
                            <div class="img">
                        
                            </div>
                            <span>售后服务</span>
                        </li>
                    </ul>
                </div>
            </div>    
        </div>

      

    </section>
    <footer>
        <!-- 服务保障 -->
        <div class="index-bz">
            <div class="container">
                <h2>服务保障</h2>
                <div class="bz-center">
                    <ul>
                        <li>
                            <span>装修公司</span>
                            <p>8000
                                <i>家</i>
                            </p>
                        </li>
                        <li>
                            <span>业主服务</span>
                            <p>8000
                                <i>个</i>
                            </p>
                        </li>
                        <li>
                            <span>开通城市</span>
                            <p>282
                                <i>个</i>
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="bz-bottom">
                    <ul>
                        <li>
                            <div class="img"></div>
                            <div class="text">
                                <p>品质服务</p>
                                <span>优质服务 全程服务</span>
                            </div>
                        </li>
                        <li>
                            <div class="img"></div>
                            <div class="text">
                                <p>诚信商家</p>
                                <span>诚信商家 真诚待人</span>
                            </div>
                        </li>
                        <li>
                            <div class="img"></div>
                            <div class="text">
                                <p>自由比价</p>
                                <span>公开透明 自由竞价</span>
                            </div>
                        </li>
                        <li>
                            <div class="img"></div>
                            <div class="text">
                                <p>业主监督</p>
                                <span>消费透明 自行维权</span>
                            </div>
                        </li>
                        <li>
                            <div class="img"></div>
                            <div class="text">
                                <p>现金保障</p>
                                <span>保驾护航 立信致远</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="container">
                <div class="yl">
                    <p>友情链接</p>
                    <a href="">一号家居网</a>
                    <a href="">一号家居网</a>
                    <a href="">一号家居网</a>
                    <a href="">一号家居网</a>
                    <a href="">一号家居网</a>
                    <a href="">一号家居网</a>
                    <a href="">一号家居网</a>
                    <a href="">一号家居网</a>
                    <a href="">一号家居网</a>
                    <a href="">一号家居网</a>
                </div>
                <div class="left">
                    <div class="about">
                        <a href="">关于我们</a>
                        <a href="">联系我们</a>
                        <a href="">帮助中心</a>
                        <a href="">意见反馈</a>
                        <a href="">法律声明</a>
                        <a href="">商务合作</a>
                    </div>
                    <p>免责声明：本网站部分内容由用户自行上传，如权利人发现存在侵犯其权益情形，请及时与本站联系。</p>
                    <p>© 2017 金蚂蚁装修网 保留所有权利. ICP备案：豫ICP备17030941号-2</p>
                </div>
                <div class="right">
                    <h2>400-0606-129</h2>
                    <p>周一至周日：9:00--18:00</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/jquery-1.2.6.min.js"> </script>
    <script src="js/header.js"></script>
    <script src="js/swiper.min.js"></script>
  
    <script src="js/distpicker.data.js"></script>
    <script src="js/distpicker.js"></script>
    <script src="js/index.js"></script>
</body>
</html>