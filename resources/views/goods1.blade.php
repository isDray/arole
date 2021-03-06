@extends('front_default')

@section('title', '商品')

@section('selfcss') 
<link rel="stylesheet" href="{{ url('css/front_goods.css')}}"/>
@endsection

@section('main')
<div id='goods_menu' class='col-md-12 col-sm-12 col-xs-12'>
	<div id='goods_item1' class='allitem col-md-1 col-md-offset-1 col-sm-4 col-sm-offset-0  col-xs-4 col-xs-offset-0'>
		<a href="{{url('/goods/1')}}"  rel="external">紅酒</a>
	</div>
    <div id='goods_item2' class='allitem col-md-1 col-sm-4 col-sm-offset-0 col-xs-4 col-xs-offset-0'>
		<a href="{{url('/goods/2')}}"  rel="external">白酒</a>
	</div>
	<div id='goods_item3'  class='allitem col-md-1 col-sm-4 col-sm-offset-0 col-xs-4 col-xs-offset-0'>
		<a href="{{url('/goods/3')}}"  rel="external">氣泡酒</a>
	</div>	
</div>

<div id='goods_list'  class='col-md-12 col-sm-12 col-xs-12'>
    <div id='glhead'>
    	
    </div>
	<div class='goods_list_item col-md-12 col-sm-12 col-xs-12'>
		<div class='winpic col-md-3 col-sm-3 col-xs-3 test'>
		    <div id='gdp1' class='goodspic'>
		        <img class='wpic' src="{{ url('/image/goods/red01.png')}}">
		        <img class='ppic' src="{{ url('/image/goods/red01.png')}}">
		    </div>
		</div>
		<div class='goods_mdline_area col-md-2 col-sm-0 col-xs-0'>
			<div class='goods_mdline col-md-12 col-sm-0 col-xs-0'>
				
			</div>
		</div>
		<div class='goods_txt_area col-md-4 col-md-offset-1 col-sm-7 col-sm-offset-0 col-xs-7 col-xs-offset-0'>
			<div class='goods_txt col-md-12 col-sm-12 col-xs-12'>
				BRICCO MAIOLICA LANGHE NEBBIOLO DOC
                <br/>
				"瑪若利卡山莊(藍)"朗格內比奧羅紅葡萄酒
				<p class='goods_subtxt'>口感柔順、清新且纖細，帶有輕微的丹寧</p>
			</div>
		</div>
		<div class='goods_btn_area col-md-1 col-sm-2 col-xs-2'>
		    <div class='goods_btn col-md-12 col-sm-12 col-xs-12'>
		    	<a class='wmore' href="{{url('/detail/1/1')}}" rel="external">
		    		看更多
		    	</a>
		        <a class='pmore glyphicon glyphicon-chevron-right' href="{{url('/detail/1/1')}}" rel="external">
		    		
		    	</a>
		    </div>
		</div>
	</div>

	<div class='goods_list_item2 col-md-12 col-sm-12 col-xs-12'>
		<div class='winpic col-md-3 col-sm-3 col-xs-3 test'>
		    <div id='gdp1' class='goodspic'>
		        <img class='ppic' src="{{ url('/image/goods/red02.png')}}">
		        <img class='wpic' src="{{ url('/image/goods/red02.png')}}">
		    </div>
		</div>
		<div class='goods_mdline_area col-md-2 col-sm-0 col-xs-0'>
			<div class='goods_mdline col-md-12 col-sm-0 col-xs-0'>
				
			</div>
		</div>
		<div class='goods_txt_area col-md-4 col-md-offset-1 col-sm-7 col-xs-7'>
			<div class='goods_txt col-md-12 col-sm-12 col-xs-12'>
				BRICCO MAIOLICA BARBERA D' ALBA DOC  
                <br/>
				"瑪若利卡山莊(紅)"巴貝拉紅葡萄酒
				<p class='goods_subtxt'>果香十足，口感醇和，微酸愉悅</p>
			</div>
		</div>
		<div class='goods_btn_area col-md-1 col-sm-2 col-xs-2'>
		    <div class='goods_btn col-md-12 col-sm-12 col-xs-12'>
		    	<!--<a class='wmore' href="">-->
		    	<a href="{{url('/detail/1/2')}}" rel="external">
		    		看更多
		    	</a>
		        <a class='pmore glyphicon glyphicon-chevron-right' href="{{url('/detail/1/2')}}" rel="external">
		    		
		    	</a>
		    </div>
		</div>
	</div>

	<div class='goods_list_item col-md-12 col-sm-12 col-xs-12'>
		<div class='winpic col-md-3 col-sm-3 col-xs-3 test'>
		    <div id='gdp1' class='goodspic'>
		        <img class='ppic' src="{{ url('/image/goods/red03.png')}}">
		        <img class='wpic' src="{{ url('/image/goods/red03.png')}}">
		    </div>
		</div>
		<div class='goods_mdline_area col-md-2 col-sm-0 col-xs-0'>
			<div class='goods_mdline col-md-12 col-sm-0 col-xs-0'>
				
			</div>
		</div>
		<div class='goods_txt_area col-md-4  col-md-offset-1 col-sm-7 col-xs-7'>
			<div class='goods_txt col-md-12 col-sm-12 col-xs-12'>
				FATTORIA DI GRIGNANO "GRIGNANO" CHIANTI RUFINA DOCG
                <br/>
		        "格里納羅"奇安提露菲娜紅葡萄酒
				<p class='goods_subtxt'>清新紅莓果的香味，與圓潤的丹寧，帶出絕佳的結構與口感</p>
			</div>
		</div>
		<div class='goods_btn_area col-md-1 col-sm-2 col-xs-2'>
		    <div class='goods_btn col-md-12 col-sm-12 col-xs-12'>
		    	<!--<a class='wmore' href="">
		    		看更多
		    	</a>-->
		    	<a href="{{url('/detail/1/3')}}" rel="external">
		    		看更多
		    	</a>
		        <a class='pmore glyphicon glyphicon-chevron-right' href="{{url('/detail/1/3')}}" rel="external">
		    		
		    	</a>
		    </div>
		</div>
	</div>

<!-- -->
	<div class='goods_list_item2 col-md-12 col-sm-12 col-xs-12'>
		<div class='winpic col-md-3 col-sm-3 col-xs-3 test'>
		    <div id='gdp1' class='goodspic'>
		        <img class='ppic' src="{{ url('/image/goods/red04.png')}}">
		        <img class='wpic' src="{{ url('/image/goods/red04.png')}}">
		    </div>
		</div>
		<div class='goods_mdline_area col-md-2 col-sm-0 col-xs-0'>
			<div class='goods_mdline col-md-12 col-sm-0 col-xs-0'>
				
			</div>
		</div>
		<div class='goods_txt_area col-md-4  col-md-offset-1 col-sm-7 col-xs-7'>
			<div class='goods_txt col-md-12 col-sm-12 col-xs-12'>
				FATTORIA DI GRIGNANO "POGGIO GUALTIERI" CHIANTI RUFINA RISERVA DOCG
                <br/>
		        "露菲娜山丘"奇安提露菲娜陳釀紅葡萄酒
				<p class='goods_subtxt'>酒體醇厚、結構極佳且後韻悠長</p>
			</div>
		</div>
		<div class='goods_btn_area col-md-1 col-sm-2 col-xs-2'>
		    <div class='goods_btn col-md-12 col-sm-12 col-xs-12'>
		    	<!--<a class='wmore' href="">
		    		看更多
		    	</a>-->
		    	<a href="{{url('/detail/1/4')}}" rel="external">
		    		看更多
		    	</a>
		        <a class='pmore glyphicon glyphicon-chevron-right' href="{{url('/detail/1/4')}}" rel="external">
		    		
		    	</a>
		    </div>
		</div>
	</div>	
<!-- -->
	<div class='goods_list_item col-md-12 col-sm-12 col-xs-12'>
		<div class='winpic col-md-3 col-sm-3 col-xs-3 test'>
		    <div id='gdp1' class='goodspic'>
		        <img class='ppic' src="{{ url('/image/goods/red05.png')}}">
		        <img class='wpic' src="{{ url('/image/goods/red05.png')}}">
		    </div>
		</div>
		<div class='goods_mdline_area col-md-2 col-sm-0 col-xs-0'>
			<div class='goods_mdline col-md-12 col-sm-0 col-xs-0'>
				
			</div>
		</div>
		<div class='goods_txt_area col-md-4  col-md-offset-1 col-sm-7 col-xs-7'>
			<div class='goods_txt col-md-12 col-sm-12 col-xs-12'>
				FATTORIA DI GRIGNANO "SALICARIA" TOSCANA IGT
                <br/>
		        "千禧花"超級托斯卡尼紅葡萄酒
				<p class='goods_subtxt'>口感相當的柔順高雅，味覺結構良好，尾韻圓潤亙久</p>
			</div>
		</div>
		<div class='goods_btn_area col-md-1 col-sm-2 col-xs-2'>
		    <div class='goods_btn col-md-12 col-sm-12 col-xs-12'>
		    	<!--<a class='wmore' href="">
		    		看更多
		    	</a>-->
		    	<a href="{{url('/detail/1/5')}}" rel="external">
		    		看更多
		    	</a>
		        <a class='pmore glyphicon glyphicon-chevron-right' href="{{url('/detail/1/5')}}" rel="external">
		    		
		    	</a>
		    </div>
		</div>
	</div>
<!-- -->
	<div class='goods_list_item2 col-md-12 col-sm-12 col-xs-12'>
		<div class='winpic col-md-3 col-sm-3 col-xs-3 test'>
		    <div id='gdp1' class='goodspic'>
		        <img class='ppic' src="{{ url('/image/goods/red06.png')}}">
		        <img class='wpic' src="{{ url('/image/goods/red06.png')}}">
		    </div>
		</div>
		<div class='goods_mdline_area col-md-2 col-sm-0 col-xs-0'>
			<div class='goods_mdline col-md-12 col-sm-0 col-xs-0'>
				
			</div>
		</div>
		<div class='goods_txt_area col-md-4  col-md-offset-1 col-sm-7 col-xs-7'>
			<div class='goods_txt col-md-12 col-sm-12 col-xs-12'>
				GALASSO VILLA GALASSO VETICA MONTEPULCIANO D’ABRUZZO DOC
                <br/>
		        "葛拉索山莊"蒙特普爾恰諾紅葡萄酒
				<p class='goods_subtxt'>濃郁的莓果香氣，單寧纖細、口感柔順且細緻</p>
			</div>
		</div>
		<div class='goods_btn_area col-md-1 col-sm-2 col-xs-2'>
		    <div class='goods_btn col-md-12 col-sm-12 col-xs-12'>
		    	<!--<a class='wmore' href="">
		    		看更多
		    	</a>-->
		    	<a href="{{url('/detail/1/6')}}" rel="external">
		    		看更多
		    	</a>
		        <a class='pmore glyphicon glyphicon-chevron-right' href="{{url('/detail/1/6')}}" rel="external">
		    		
		    	</a>
		    </div>
		</div>
	</div>
<!-- -->
	<div class='goods_list_item col-md-12 col-sm-12 col-xs-12'>
		<div class='winpic col-md-3 col-sm-3 col-xs-3 test'>
		    <div id='gdp1' class='goodspic'>
		        <img class='ppic' src="{{ url('/image/goods/red07.png')}}">
		        <img class='wpic' src="{{ url('/image/goods/red07.png')}}">
		    </div>
		</div>
		<div class='goods_mdline_area col-md-2 col-sm-0 col-xs-0'>
			<div class='goods_mdline col-md-12 col-sm-0 col-xs-0'>
				
			</div>
		</div>
		<div class='goods_txt_area col-md-4  col-md-offset-1 col-sm-7 col-xs-7'>
			<div class='goods_txt col-md-12 col-sm-12 col-xs-12'>
				GALASSO CORNO GRANDE PREMIUM MONTEPULCIANO D’ABRUZZO DOC
                <br/>
		        "大角山羊"蒙特普爾恰諾紅葡萄酒
				<p class='goods_subtxt'>梅子與黑莓酸的味痕；口感柔順且精緻、單寧纖細且持久</p>
			</div>
		</div>
		<div class='goods_btn_area col-md-1 col-sm-2 col-xs-2'>
		    <div class='goods_btn col-md-12 col-sm-12 col-xs-12'>
		    	<!--<a class='wmore' href="">
		    		看更多
		    	</a>-->
		    	<a href="{{url('/detail/1/7')}}" rel="external">
		    		看更多
		    	</a>
		        <a class='pmore glyphicon glyphicon-chevron-right' href="{{url('/detail/1/7')}}" rel="external">
		    		
		    	</a>
		    </div>
		</div>
	</div>
<!-- -->
	<div class='goods_list_item2 col-md-12 col-sm-12 col-xs-12'>
		<div class='winpic col-md-3 col-sm-3 col-xs-3 test'>
		    <div id='gdp1' class='goodspic'>
		        <img class='ppic' src="{{ url('/image/goods/red08.png')}}">
		        <img class='wpic' src="{{ url('/image/goods/red08.png')}}">
		    </div>
		</div>
		<div class='goods_mdline_area col-md-2 col-sm-0 col-xs-0'>
			<div class='goods_mdline col-md-12 col-sm-0 col-xs-0'>
				
			</div>
		</div>
		<div class='goods_txt_area col-md-4  col-md-offset-1 col-sm-7 col-xs-7'>
			<div class='goods_txt col-md-12 col-sm-12 col-xs-12'>
				GALASSO CORNO GRANDE RISERVA MONTEPULCIANO D’ABRUZZO DOC
                <br/>
		        "大角山羊"陳釀蒙特普爾恰諾紅葡萄酒
				<p class='goods_subtxt'>酒體醇厚、單寧纖細、尾韻頗佳</p>
			</div>
		</div>
		<div class='goods_btn_area col-md-1 col-sm-2 col-xs-2'>
		    <div class='goods_btn col-md-12 col-sm-12 col-xs-12'>
		    	<!--<a class='wmore' href="">
		    		看更多
		    	</a>-->
		    	<a href="{{url('/detail/1/8')}}" rel="external">
		    		看更多
		    	</a>
		        <a class='pmore glyphicon glyphicon-chevron-right' href="{{url('/detail/1/8')}}" rel="external">
		    		
		    	</a>
		    </div>
		</div>
	</div>	
<!-- -->
	<div class='goods_list_item col-md-12 col-sm-12 col-xs-12'>
		<div class='winpic col-md-3 col-sm-3 col-xs-3 test'>
		    <div id='gdp1' class='goodspic'>
		        <img class='ppic' src="{{ url('/image/goods/red09.png')}}">
		        <img class='wpic' src="{{ url('/image/goods/red09.png')}}">
		    </div>
		</div>
		<div class='goods_mdline_area col-md-2 col-sm-0 col-xs-0'>
			<div class='goods_mdline col-md-12 col-sm-0 col-xs-0'>
				
			</div>
		</div>
		<div class='goods_txt_area col-md-4  col-md-offset-1 col-sm-7 col-xs-7'>
			<div class='goods_txt col-md-12 col-sm-12 col-xs-12'>
				NEGROAMARO PUGLIA IGT
                <br/>
		        "魅紫"尼古阿馬羅紅葡萄酒
				<p class='goods_subtxt'>氣味圓潤如紅醋栗果醬與覆盆子般，味道濃郁、平衡且清新</p>
			</div>
		</div>
		<div class='goods_btn_area col-md-1 col-sm-2 col-xs-2'>
		    <div class='goods_btn col-md-12 col-sm-12 col-xs-12'>
		    	<!--<a class='wmore' href="">
		    		看更多
		    	</a>-->
		    	<a href="{{url('/detail/1/9')}}" rel="external">
		    		看更多
		    	</a>
		        <a class='pmore glyphicon glyphicon-chevron-right' href="{{url('/detail/1/9')}}" rel="external">
		    		
		    	</a>
		    </div>
		</div>
	</div>
<!-- -->
	<div class='goods_list_item2 col-md-12 col-sm-12 col-xs-12'>
		<div class='winpic col-md-3 col-sm-3 col-xs-3 test'>
		    <div id='gdp1' class='goodspic'>
		        <img class='ppic' src="{{ url('/image/goods/red10.png')}}">
		        <img class='wpic' src="{{ url('/image/goods/red10.png')}}">
		    </div>
		</div>
		<div class='goods_mdline_area col-md-2 col-sm-0 col-xs-0'>
			<div class='goods_mdline col-md-12 col-sm-0 col-xs-0'>
				
			</div>
		</div>
		<div class='goods_txt_area col-md-4  col-md-offset-1 col-sm-7 col-xs-7'>
			<div class='goods_txt col-md-12 col-sm-12 col-xs-12'>
				PRIMITIVO SALENTO IGP
                <br/>
		        "曜黑"普里米蒂沃紅葡萄酒
				<p class='goods_subtxt'>櫻桃與紅色漿果的香味；口感柔順溫醇、尾韻悠長。</p>
			</div>
		</div>
		<div class='goods_btn_area col-md-1 col-sm-2 col-xs-2'>
		    <div class='goods_btn col-md-12 col-sm-12 col-xs-12'>
		    	<!--<a class='wmore' href="">
		    		看更多
		    	</a>-->
		    	<a href="{{url('/detail/1/10')}}" rel="external">
		    		看更多
		    	</a>
		        <a class='pmore glyphicon glyphicon-chevron-right' href="{{url('/detail/1/10')}}" rel="external">
		    		
		    	</a>
		    </div>
		</div>
	</div>	
<!-- -->
	<div class='goods_list_item col-md-12 col-sm-12 col-xs-12'>
		<div class='winpic col-md-3 col-sm-3 col-xs-3 test'>
		    <div id='gdp1' class='goodspic'>
		        <img class='ppic' src="{{ url('/image/goods/red11.png')}}">
		        <img class='wpic' src="{{ url('/image/goods/red11.png')}}">
		    </div>
		</div>
		<div class='goods_mdline_area col-md-2 col-sm-0 col-xs-0'>
			<div class='goods_mdline col-md-12 col-sm-0 col-xs-0'>
				
			</div>
		</div>
		<div class='goods_txt_area col-md-4  col-md-offset-1 col-sm-7 col-xs-7'>
			<div class='goods_txt col-md-12 col-sm-12 col-xs-12'>
				PASSO DEL CARDINALE PRIMITIVO DI MANDURIA DOP
                <br/>
		        "紅衣主教"普里米蒂沃紅葡萄酒
				<p class='goods_subtxt'>整體口感平衡令人印象深刻，結構良好並尾韻持久</p>
			</div>
		</div>
		<div class='goods_btn_area col-md-1 col-sm-2 col-xs-2'>
		    <div class='goods_btn col-md-12 col-sm-12 col-xs-12'>
		    	<!--<a class='wmore' href="">
		    		看更多
		    	</a>-->
		    	<a href="{{url('/detail/1/11')}}" rel="external">
		    		看更多
		    	</a>
		        <a class='pmore glyphicon glyphicon-chevron-right' href="{{url('/detail/1/11')}}" rel="external">
		    		
		    	</a>
		    </div>
		</div>
	</div>
<!-- -->
	<div class='goods_list_item2 col-md-12 col-sm-12 col-xs-12'>
		<div class='winpic col-md-3 col-sm-3 col-xs-3 test'>
		    <div id='gdp1' class='goodspic'>
		        <img class='ppic' src="{{ url('/image/goods/red12.png')}}">
		        <img class='wpic' src="{{ url('/image/goods/red12.png')}}">
		    </div>
		</div>
		<div class='goods_mdline_area col-md-2 col-sm-0 col-xs-0'>
			<div class='goods_mdline col-md-12 col-sm-0 col-xs-0'>
				
			</div>
		</div>
		<div class='goods_txt_area col-md-4  col-md-offset-1 col-sm-7 col-xs-7'>
			<div class='goods_txt col-md-12 col-sm-12 col-xs-12'>
				ORFEO NEGROAMARO PUGLIA IGT
                <br/>
		        "奧菲歐"尼古阿馬羅紅葡萄酒
				<p class='goods_subtxt'>口感圓潤豐厚、溫順且平衡，具有持久綿長且樸實的後韻</p>
			</div>
		</div>
		<div class='goods_btn_area col-md-1 col-sm-2 col-xs-2'>
		    <div class='goods_btn col-md-12 col-sm-12 col-xs-12'>
		    	<!--<a class='wmore' href="">
		    		看更多
		    	</a>-->
		    	<a href="{{url('/detail/1/12')}}" rel="external">
		    		看更多
		    	</a>
		        <a class='pmore glyphicon glyphicon-chevron-right' href="{{url('/detail/1/12')}}" rel="external">
		    		
		    	</a>
		    </div>
		</div>
	</div>
<!-- -->
	<div class='goods_list_item col-md-12 col-sm-12 col-xs-12'>
		<div class='winpic col-md-3 col-sm-3 col-xs-3 test'>
		    <div id='gdp1' class='goodspic'>
		        <img class='ppic' src="{{ url('/image/goods/red13.png')}}">
		        <img class='wpic' src="{{ url('/image/goods/red13.png')}}">
		    </div>
		</div>
		<div class='goods_mdline_area col-md-2 col-sm-0 col-xs-0'>
			<div class='goods_mdline col-md-12 col-sm-0 col-xs-0'>
				
			</div>
		</div>
		<div class='goods_txt_area col-md-4  col-md-offset-1 col-sm-7 col-xs-7'>
			<div class='goods_txt col-md-12 col-sm-12 col-xs-12'>
				FIORE DI VIGNA PRIMITIVO SALENTO IGT
                <br/>
		        "葡萄花精靈"普里米蒂沃紅葡萄酒
				<p class='goods_subtxt'>單寧結構相當良好，尾韻非常持久，並留下梅子與香料餘味</p>
			</div>
		</div>
		<div class='goods_btn_area col-md-1 col-sm-2 col-xs-2'>
		    <div class='goods_btn col-md-12 col-sm-12 col-xs-12'>
		    	<!--<a class='wmore' href="">
		    		看更多
		    	</a>-->
		    	<a href="{{url('/detail/1/13')}}" rel="external">
		    		看更多
		    	</a>
		        <a class='pmore glyphicon glyphicon-chevron-right' href="{{url('/detail/1/13')}}" rel="external">
		    		
		    	</a>
		    </div>
		</div>
	</div>
<!-- -->
	<div class='goods_list_item2 col-md-12 col-sm-12 col-xs-12'>
		<div class='winpic col-md-3 col-sm-3 col-xs-3 test'>
		    <div id='gdp1' class='goodspic'>
		        <img class='ppic' src="{{ url('/image/goods/red14.png')}}">
		        <img class='wpic' src="{{ url('/image/goods/red14.png')}}">
		    </div>
		</div>
		<div class='goods_mdline_area col-md-2 col-sm-0 col-xs-0'>
			<div class='goods_mdline col-md-12 col-sm-0 col-xs-0'>
				
			</div>
		</div>
		<div class='goods_txt_area col-md-4  col-md-offset-1 col-sm-7 col-xs-7'>
			<div class='goods_txt col-md-12 col-sm-12 col-xs-12'>
				NERIMATTI RISERVA SALICE SALENTINO DOC
                <br/>
		        "内瑞馬提"薩利切薩倫帝諾陳釀紅葡萄酒
				<p class='goods_subtxt'>持久綿長的果乾甜和酒體本身的甘味在味覺上達到完美的平衡</p>
			</div>
		</div>
		<div class='goods_btn_area col-md-1 col-sm-2 col-xs-2'>
		    <div class='goods_btn col-md-12 col-sm-12 col-xs-12'>
		    	<!--<a class='wmore' href="">
		    		看更多
		    	</a>-->
		    	<a href="{{url('/detail/1/14')}}" rel="external">
		    		看更多
		    	</a>
		        <a class='pmore glyphicon glyphicon-chevron-right' href="{{url('/detail/1/14')}}" rel="external">
		    		
		    	</a>
		    </div>
		</div>
	</div>
<!-- -->
	<div class='goods_list_item col-md-12 col-sm-12 col-xs-12'>
		<div class='winpic col-md-3 col-sm-3 col-xs-3 test'>
		    <div id='gdp1' class='goodspic'>
		        <img class='ppic' src="{{ url('/image/goods/red15.png')}}">
		        <img class='wpic' src="{{ url('/image/goods/red15.png')}}">
		    </div>
		</div>
		<div class='goods_mdline_area col-md-2 col-sm-0 col-xs-0'>
			<div class='goods_mdline col-md-12 col-sm-0 col-xs-0'>
				
			</div>
		</div>
		<div class='goods_txt_area col-md-4  col-md-offset-1 col-sm-7 col-xs-7'>
			<div class='goods_txt col-md-12 col-sm-12 col-xs-12'>
				TACCOROSSO NEGROAMARO PUGLIA IGP 
                <br/>
		        "塔克羅素"尼古阿馬羅紅葡萄酒
				<p class='goods_subtxt'>濃郁的深色水果、莓果、洋甘草及咖啡的香氣</p>
			</div>
		</div>
		<div class='goods_btn_area col-md-1 col-sm-2 col-xs-2'>
		    <div class='goods_btn col-md-12 col-sm-12 col-xs-12'>
		    	<!--<a class='wmore' href="">
		    		看更多
		    	</a>-->
		    	<a href="{{url('/detail/1/15')}}" rel="external">
		    		看更多
		    	</a>
		        <a class='pmore glyphicon glyphicon-chevron-right' href="{{url('/detail/1/15')}}" rel="external">
		    		
		    	</a>
		    </div>
		</div>
	</div>	


</div>
@endsection