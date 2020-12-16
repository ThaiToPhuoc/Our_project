<div class="container padding" id="myContent">
    <div class="frame">
        <h2>Our lastest post</h2>
        <div id="summary" class="container">
            <p>Artificial intelligence (AI), is intelligence demonstrated by machines, unlike the natural intelligence 
                displayed by humans and animals. Leading AI textbooks define the field as the study of "intelligent agents": 
                any device that perceives its environment and takes actions that maximize its chance of successfully achieving its goals.
                [3] Colloquially, the term "artificial intelligence" is often used to describe machines (or computers) that mimic "cognitive" 
                functions that humans associate with the human mind, such as "learning" and "problem solving".[4]
            </p>
        </div>
        
    </div>
    <div class="row text-center padding">
        <div class="col-xs-12 col-sm-6 col-md-4 ">
            <img src="{{$data->content[0]->urlimg}}" height="300">	
            <a href="{{$data->content[0]->url}}"><h3>{{$data->content[0]->title}}</h3></a>
            <p>{{$data->content[0]->content}}</p>					
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <img src="{{$data->content[1]->urlimg}}" height="300">		
            <a href="{{$data->content[1]->url}}"><h3>{{$data->content[1]->title}}</h3></a>
            <p>{{$data->content[1]->content}}</p>					
        </div>
        <div class="col-sm-12 col-md-4">
            <img src="{{$data->content[2]->urlimg}}" height="300">	
            <a href="{{$data->content[2]->url}}"><h3>{{$data->content[2]->title}}</h3></a>
            <p>{{$data->content[2]->content}}</p>					
        </div>
    </div>	
    <hr class="my-4">	
</div>