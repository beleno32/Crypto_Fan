<div style="width:440px; height:440px ">
      @for ($i = 1; $i<=$games["width"]; $i++)
            @for ($j = ord("A"); $j<ord("A")+$games["height"]; $j++) 
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
      let pieces = JSON.parse('{!! json_encode($allPieces) !!}');
      for (let k = 0; k < pieces.length; k++){
            let id = pieces[k].x + pieces[k].y;
            let div = document.getElementById(id);
            let img = document.createElement("IMG");
            img.src = pieces[k].image;
            img.style.maxWidth ="100%"
            img.style.maxHeight ="100%"
            document.getElementById(id).appendChild(img);
      }
</script> 