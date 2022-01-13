@section ("layout.app")
  <div style="width:440px; height:440px ">
        @for ($j = ord("A"); $j<ord("A")+$games["height"]; $j++)
            @for ($i = 1; $i<=$games["width"]; $i++) 
                  @if ($i % 2 == $j % 2)
                        <div id="{{chr($j).$i}}" style="background-color:black; width:{{440/$games["width"]}}px; height:{{440/$games["height"]}}px; float:left;"></div>
                  @else
                        <div id="{{chr($j).$i}}" style="background-color:gray; width:{{440/$games["width"]}}px; height:{{440/$games["height"]}}px; float:left;"></div>
                  @endif
            @endfor
        @endfor
  </div>
  <h1>{{$games["name"]}}</h1>
  <script>
        document.addEventListener('readystatechange', event => {
            console.log ("mensagem bonita");
            let pieces ="{{$allPieces}}";
            pieces = pieces.replace(/&quot;/g, "'");
      console.log(pieces);      
});

  </script> 