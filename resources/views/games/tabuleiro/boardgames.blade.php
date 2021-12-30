<script src="style.css"></script>
  <div style="width:440px; height:440px ">
        @for ($j = ord("A"); $j<ord("A")+8; $j++)
            @for ($i = 1; $i<=8; $i++) 
                  @if ($i % 2 == $j % 2)
                        <div id="{{chr($j).$i}}" style="background-color:black; width:{{440/8}}px; height:{{440/8}}px; float:left;"></div>
                  @else
                        <div id="{{chr($j).$i}}" style="background-color:gray; width:{{440/8}}px; height:{{440/8}}px; float:left;"></div>
                  @endif
            @endfor
        @endfor
  </div>